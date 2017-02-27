export default class {
    constructor(app) {
        this.app = app;
        this.window = app.window;
        this.jQuery = app.jQuery;
    }

    init() {
        this.fieldAndScoreCandidate();
        this.submitEvaluateCandidate();
        this.note();
    }

    fieldAndScoreCandidate() {
        const $ = this.jQuery;

        $(() => {
            const interviewEvaluate = $(".interview-evaluate-candidate");
            if (interviewEvaluate.length) {
                const evaluateSelect = interviewEvaluate.find(".interview-evaluate-field");
                evaluateSelect.change((event) => {
                    const $this = evaluateSelect;
                    const optionSelected = $this.find('option:selected');
                    const fieldId = optionSelected.attr('value');
                    const max = optionSelected.data('max');
                    const fieldName = optionSelected.html();
                    optionSelected.remove();
                    var str = '<tr><td>' + fieldName + '</td><td>';
                    str += '<input step="0.1" size="2" max="' + max + '" name="field[' + fieldId + ']" type="number" required>/';
                    str += max + '</td>';
                    str += '<td><a href="#" class="delete-field"';
                    str += 'data-max="' + max + '"';
                    str += 'data-name="' + fieldName + '"';
                    str += 'data-id="' + fieldId + '">Remove</a></td></tr>'
                    $('.score-candidate>tbody').append(str);
                });

                interviewEvaluate.on('click', '.delete-field', function(event) {
                    event.preventDefault();
                    const $this = $(this);
                    $this.closest('tr').remove();
                    evaluateSelect.append('<option value="' + $this.data("id") + '" data-max="' + $this.data("max") + '">' + $this.data("name") + '</option>');
                });
            }
            
        });
    }

    submitEvaluateCandidate() {
        const $ = this.jQuery;
        const interview = this;
        $(() => {
           $('#form-evaluate-candidate').submit(function (event) {
                event.preventDefault();
                var form = $(this);

                $.post(form.attr('action'), form.serialize(), function(data) {
                    $('#msg-submit-evaluate').html(interview.notification(data, 'success'));
                })
                .fail(function(data) {
                    $('#msg-submit-evaluate').html(interview.notification(data.responseJSON, 'danger'));
                });

            });
        });
    }

    note() {
        const $ = this.jQuery;
        const interview = this;
        $(() => {
            //Open edit note
            $(document).on('click', '#btn-edit-note', function(event) {
                event.preventDefault();
                $('#edit-note').show();
                $('#list-note').hide();
            });

            //Submit form note
            $("#save-note").click(function(event) {
                event.preventDefault();
                var form = $(this).closest('form');
                
                $.post(form.attr('action'), form.serialize(), function(data) {
                    $('#list-note').html(form.find('textarea').val());
                    $('#msg-submit-note').html(interview.notification(data, 'success'));
                })
                .fail(function(data) {
                    $('#msg-submit-note').html(interview.notification(data.responseJSON, 'danger'));
                });

                $('#edit-note').hide();
                $('#list-note').show();
            });
         });
    }

    notification(data, status) {
        var html='';
        html +='<div class="alert alert-'+status+'"><ul>';
        html += '<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>';
       $.each(data, function (key, value) {
            html += '<li>'+value+'</li>'
        });
        html += '</ul></div>';
        return html;
    }
}
