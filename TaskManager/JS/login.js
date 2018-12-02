$(document).ready(function () {
    var $form = $('#formLogin');
    $form.submit(function () {
        $.post($(this).attr('action'), $(this).serialize(), function (data) {
            document.getElementById("formLogin").reset();
            if (data == "success") {
                window.location.replace("http://localhost:63342/Graphic%20Design/home page.html");
            } else {
                $("#notification").html("Invalid username or password!");
            }

        });
        return false;
    })
});
