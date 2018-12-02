function deleteRequest(event) {
    var titujt = event.target.parentElement.getElementsByClassName('titulli');
    var titulli=titujt[0].innerHTML;
    $.post("PHP/deleteRequest.php", {titulli: titulli}, function () {
        location.reload()
    });
    return false;
}


