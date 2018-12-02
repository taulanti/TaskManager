function shtoKerkese() {
    var z = document.getElementById("shtoKerkese");
    if(z.style.height === "180px" && z.style.width === "190px" && z.style.borderWidth === "1px")
    {
        z.style.width = "0px";
        z.style.height = "0px";
        z.style.borderWidth="0px";
    }else {
        z.style.height = "180px";
        z.style.width = "190px";
        z.style.borderWidth="1px";
    }
    var i = document.getElementById("formKerkese");
    if(i.style.display == "block")
    {
        i.style.display = "none";
    }else {
        i.style.display = "block";
    }

}
