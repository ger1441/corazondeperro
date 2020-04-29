$(function(){
    $("#frmContacto").on('submit',function(e){
        e.preventDefault();
        $("#resMessage").html('<strong>Enviando ...</strong>');
        $.ajax({
            url : '/mensaje',
            type: 'post',
            data: $("#frmContacto").serialize()
        }).success(function(data){
            if(data.result=='success'){
                $("#frmContacto")[0].reset();
                $("#resMessage").html('<strong>Su mensaje ha sido enviado, le responderemos a la brevedad.</strong>');
            }else $("#resMessage").html('<strong>'+data.report+'</strong>');
        }).error(function(e){
            $("#resMessage").html('<strong>Ocurrió un error al enviar su mensaje, intente de nuevo</strong>');
        });
    });
});
