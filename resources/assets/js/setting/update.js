export default class {
    constructor(app) {
        this.app = app;
        this.window = app.window;
        this.jQuery = app.jQuery;
    }

    init() {
        const $ = this.jQuery;

        $(() => {
            var settingTable = $('#settings-table');
            if (settingTable.length) {
                this.initDataTable(settingTable);
                this.detailModal(settingTable);
                this.update(settingTable);
            }
        });
    }

    initDataTable(settingTable) {
        settingTable.DataTable({});
    }

    detailModal(settingTable) {
        const $ = this.jQuery;
        autosize($('textarea'));

        settingTable.on('click', '.btn-detail', function (e) {
            let detail = $(e.target);
            $('#detail_' + detail.data('id')).css('display','block');
            settingTable.find('.btn-cancel').click();
        });

        settingTable.on('click', '.close', function (e) {
            let close = $(e.target);
            $('#detail_' + close.data('id')).css('display', 'none');
            settingTable.find('.btn-cancel').click();
        });
    }

    update(settingTable) {
        const $ = this.jQuery;

        settingTable.find('.btn-edit').on('click', (e) => {
            let edit = $(e.target);
            settingTable.find('.setting_' + edit.data('id')).addClass('updating');
        });

        settingTable.find('.btn-save').on('click', (e) => {
            let save = $(e.target);
            let tr = settingTable.find('.setting_' + save.data('id'));
            if (tr.length) {
                let val;
                if (save.closest('.modal-footer').length) {
                    val = tr.find('.setting-input textarea').val();
                } else {
                    val = tr.find('.setting-input input').val();
                }

                $.ajax({
                    url: tr.data('url'),
                    type: 'PUT',
                    data: {
                        value: val,
                    },
                    success: (data) => {
                        swal({
                            title: "Success!",
                            text: data,
                            type: "success",
                            confirmButtonText: "Close"
                        });
                        tr.find('.setting-input input').val(val);
                        tr.find('.setting-value').html(val);
                        tr.find('.setting-input textarea').val(val);
                        tr.removeClass('updating');
                    },
                    error: (data) => {
                        let error = data.responseJSON;
                        swal({
                            title: "Error!",
                            text: error['value'],
                            type: "error",
                            confirmButtonText: "Close"
                        });
                    }
                });
            }
        });

        settingTable.find('.btn-cancel').on('click', (e) => {
            let cancel = $(e.target);
            let tr = settingTable.find('.setting_' + cancel.data('id'));
            tr.removeClass('updating');
            tr.find('.setting-input input').val(tr.find('.setting-value').html());
            tr.find('.setting-input textarea').val(tr.find('.setting-value').html());
        });
    }
}
