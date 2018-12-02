$(document).ready(function () {
    $.ajax({
        url: "PHP/checkUserLevel.php",
        success: function (data) {
            if (data === "klient") {
                $(".bshto").prop("disabled", true);
                $("#shtoKerkesebtn").prop("disabled", false);
                $(".bShto").css("background-color", "lightgray");
                $("#shtoKerkesebtn").css("background-color", "dimgray");
                $(".kRows").removeAttr("draggable", "ondragstart", "ondragend", "ondrop");
                $(".kRows").css("cursor", "default");
                $(".pRows").removeAttr("draggable", "ondragstart", "ondragend", "ondrop");
                $(".pRows").css("cursor", "default");
                $(".fRows").removeAttr("draggable", "ondragstart", "ondragend", "ondrop");
                $(".fRows").css("cursor", "default");
                $("#selectKlientet").prop("disabled", true);
            } else if (data === "punetor") {
                $(".bshto").prop("disabled", true);
                $(".bShto").css("background-color", "lightgray");
                $(".kRows").removeAttr("draggable", "ondragstart", "ondragend", "ondrop");
                $(".kRows").css("cursor", "default");
                $("#columnKerkesat").removeAttr("ondragover", "ondrop");
            } else {

            }

        }
    })
})