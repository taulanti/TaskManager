function shtoPunetor() {
    var x = document.getElementById("shtoPunetor");
    if(x.style.height === "200px" && x.style.width === "210px" && x.style.borderWidth === "1px")
    {
        x.style.width = "0px";
        x.style.height = "0px";
        x.style.borderWidth="0px";
    }else {
        x.style.height = "200px";
        x.style.width = "210px";
        x.style.borderWidth="1px";
    }
    var y = document.getElementById("formPunetor");
    if(y.style.display == "block")
    {
        y.style.display = "none";
    }else {
        y.style.display = "block";
    }
}
