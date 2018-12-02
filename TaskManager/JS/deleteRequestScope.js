$(document).ready(function () {
    $.ajax({
        url: "PHP/deleteRequestScope.php",
        success: function (data) {
            if (data == "admin") {
                var link = document.getElementsByClassName("delLink");
                for (i = 0; i < link.length; i++) {
                    var link1 = link[i];
                    link1.style.display = "block";
                }
            } else {
                var array = data.split(",");
                var klienti = document.getElementsByClassName("klienti");
                var j = 0;
                for (var i = 0; i < klienti.length; i = i + 2) {
                    var kEmri = klienti[i].innerHTML;
                    var kMbiemri = klienti[i + 1].innerHTML;
                    var dEmri = array[0];
                    var dMbiemri = array[1];
                    if (kEmri != dEmri || kMbiemri != dMbiemri) {
                        var link = document.getElementsByClassName("delLink");
                        var link1 = link[j];
                        link1.style.display = "none";
                    }
                    j++;
                }
            }
        }
    })
})

