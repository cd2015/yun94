/*!
 * Yuunga Custom Logic
 */
$(document).ready(function () {
    var maxInput = 5, n = 1;
    $(document).on('click', '.add-field-btn', function () {
        var controlForm = $('#subcategories_fields'),
            currentEntry = $(this).parents('.entry:first');
        if (n < maxInput) {
            var newEntry = $(currentEntry.clone()).appendTo(controlForm);
            newEntry.find('input')
                .attr("placeholder", "Add another Sub Category")
                .attr("name", "employee[" + n + "][name]")
                .val('');

            controlForm.find('.entry:not(:last) .add-field-btn')
                .removeClass('add-field-btn').addClass('remove-field-btn')
                .removeClass('btn-success').addClass('btn-danger')
                .html('<span class="glyphicon glyphicon-minus" title="Remove field"></span>');
            n++;
        }
    }).on('click', '.remove-field-btn', function () {
        $(this).parents('.entry:first').remove();
        n--;
        return false;
    });
});