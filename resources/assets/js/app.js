$(document).ready(function() {
    $('li#parent-list-group a').click(function(event) {
        $('li#parent-list-group ul#sub-list-group').slideUp();
        $(this).parent().children('ul#sub-list-group').slideToggle();
    });
});
