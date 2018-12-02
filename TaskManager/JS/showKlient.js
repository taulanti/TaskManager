function showKlient() {
    var x = document.getElementById("showKlient");
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
    var g = document.getElementById("showKlient_ul");
    if(g.style.display == "block")
    {
        g.style.display = "none";
    }else {
        g.style.display = "block";
    }

}
