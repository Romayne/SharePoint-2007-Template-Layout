$('table.list tbody tr').live("mouseover", function () {
    var id = $(this).attr("id").replace('record_count_', '');
    $('tr#record_count_' + id).css("background-image", "url('../../public/images/over.jpg')");
});

$('table.list tbody tr').live("mouseout", function () {
    var id = $(this).attr("id").replace('record_count_', '');
    $('tr#record_count_' + id).css("background-image", "none");
});