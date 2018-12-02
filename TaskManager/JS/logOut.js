$(document).ready(function () {
    $.ajax({
        url: "PHP/checkStatus.php",
        success: function (data) {
            if (data === "negative")
                window.location.replace("http://localhost:63342/Graphic%20Design/index.html");
        }
    })
    $("#logOut").click(function () {
        $.ajax({
            url: "PHP/logOut.php",
            success: function () {
                window.location.replace("http://localhost:63342/Graphic%20Design/index.html");
            }
        })
    })
    $(window).on("unload", function (e) {
        $.ajax({
            url: "PHP/logOut.php",
        })
    });
})