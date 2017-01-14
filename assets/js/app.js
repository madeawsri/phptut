$(document).ready(function(){
    $('.datatable').dataTable();
    $('input').not('input[type=radio]').not('input[type=submit]').addClass('form-control');
});
$('.edit').click(function(){
    // get data from edit btn
    var id = $(this).attr('data-id');
    var firstname = $(this).attr('data-firstname');
    var lastname = $(this).attr('data-lastname');
    var email = $(this).attr('data-email');
    var country = $(this).attr('data-country');
    var ip = $(this).attr('data-ip');
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
