$(function() {
    $('.content').richText();
})

$('.middle_form_bar').click(function() {
    $(this).next().toggle();
});