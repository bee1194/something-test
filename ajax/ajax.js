$(document).ready(function() {
$('select').select2({
    ajax: {
        url: 'json.php',
        dataType: 'json',
        type: 'POST',
        processResults: result,
    },
    templateResult: templateText,
    templateSelection: templateTitle,
});
ajaxx();
});
function templateTitle(data) {
    return $(data.title);
}
function templateText(data){
    return $(data.text);
}
function result(data) {
    return {
        results: data
    };
}
function load_ajax() {
	$.ajax({
		url : "json.php",
        type : "post",
        dataType:"json",
        success : function (data){
            $.each(data, function(key,data) {
            $('#oday').append($('<span>'+data.email+'</span><br>'));
            var t = 'Hello';
                    return t;
            });       
        }
    });
}
function ajaxx() {
    $.ajax({
        url : "result.php",
        type : "post",
        dataType:"text",
        data : {
            name : $('#name').val(),
            age: $('#age').val(),
        },
        success : function (text){
                    $('#oday').html('<span style="color: red;">' + text + '</span>');

        }
        });
}