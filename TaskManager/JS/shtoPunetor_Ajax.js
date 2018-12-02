$(document).ready(function(){
    var $form = $('#formPunetor');
    $form.submit(function() {
        $.post($(this).attr('action'), $(this).serialize(), function() {
            $("#Punetor_result").html("Punetori u regjistrua me sukses!");
            document.getElementById("formPunetor").reset();
            setInterval(function(){
                $("#Punetor_result").html("");
            },6000)
            location.reload()
        });
        return false;
    })
});
