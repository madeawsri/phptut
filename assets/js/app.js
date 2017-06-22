$(document).ready(function(){
    $('.datatable').dataTable();
    $('input').not('input[type=radio]').not('input[type=submit]').addClass('form-control');
    $('select').addClass('form-control');
    customer();
});
$('.edit').click(function(){
    // get data from edit btn
    var id = $(this).attr('data-id');
    var firstname = $(this).attr('data-firstname');
    var lastname = $(this).attr('data-lastname');
    var email = $(this).attr('data-email');
    var country = $(this).attr('data-country');
    var ip = $(this).attr('data-ip');
    console.log(country);
    // set value to modal
    $("#id").val(id);
    $("#firstname").val(firstname);
    $("#lastname").val(lastname);
    $("#email").val(email);
    $("#country").val(country);
    $("#ip").val(ip);
    // show modal
    $('#formEditCustomer').modal('show');
});
$('.delete').click(function(){
    alert("Hello delete");
});

function countCSSRules() {
    var results = '',
        log = '';
    if (!document.styleSheets) {
        return;
    }
    for (var i = 0; i < document.styleSheets.length; i++) {
        countSheet(document.styleSheets[i]);
    }
    function countSheet(sheet) {
        if (sheet && sheet.cssRules) {
            var count = countSelectors(sheet);

            log += '\nFile: ' + (sheet.href ? sheet.href : 'inline <style> tag');
            log += '\nRules: ' + sheet.cssRules.length;
            log += '\nSelectors: ' + count;
            log += '\n----------------------------------';
            if (count >= 4096) {
                results += '\n*************************************\nWARNING:\n There are ' + count + ' CSS rules in the stylesheet ' + sheet.href + ' - IE will ignore the last ' + (count - 4096) + ' rules!\n';
            }
        }
    }
    function countSelectors(group) {
        var count = 0
        for (var j = 0, l = group.cssRules.length; j < l; j++) {
            var rule = group.cssRules[j];
            if (rule instanceof CSSImportRule) {
                countSheet(rule.styleSheet);
            }
            if (rule instanceof CSSMediaRule) {
                count += countSelectors(rule);
            }
            if( !rule.selectorText ) {
                continue;
            }
            count += rule.selectorText.split(',').length;
        }
        return count;
    }

    console.log(log);
    console.log(results);
};

countCSSRules();

var customer = funciton(){
    var table = $("#cj").DataTable({
        "ajax": {
            "method": "POST",
            "url": '<?php echo $cj; ?>'
        },
        "column" : [
            {"data": ""},
            {"data": "firstname"},
            {"data": "lastname"},
            {"data": "email"},
            {"data": "country"},
            {"data": "ip"},
            {"data": ""}
        ]
    });
}
