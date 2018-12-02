$(document).ready(function(){
    var $form = $('#formKlient');
    $form.submit(function() {
        $.post($(this).attr('action'), $(this).serialize(), function() {
            $("#Klient_result").html("Klienti u regjistrua me sukses!");
            document.getElementById("formKlient").reset();
            setInterval(function(){
                $("#Klient_result").html("");
            },6000)
            location.reload()
            });
        return false;
    })
});
