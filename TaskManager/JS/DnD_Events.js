function allowDrop(ev) {
    ev.preventDefault();
}
function drag_start(event) {
    event.dataTransfer.setData("text", event.target.childNodes[0].textContent);
    id=event.target;
    event.dataTransfer.dropEffect = "move";
    event.target.style.opacity="0.3";
}
function drag_end(event) {
    event.target.style.opacity="1";
}
function drag_drop_process(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("text");
    var second_headers=event.target.parentElement.getElementsByClassName('second_headers');
    var emri_Punetorit = second_headers[0].innerHTML;
    var mbiemri_Punetorit = second_headers[1].innerHTML;
    $.ajax({
            type:"post",
            url:"PHP/onProcess.php",
        data:{Titulli:data, Emri:emri_Punetorit, Mbiemri:mbiemri_Punetorit},
            success: function(){
                location.reload()
            }
        })
}
function drag_drop_request(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("text");
    $.ajax({
        type:"post",
        url:"PHP/onRequest.php",
        data:{Titulli:data},
        success: function(){
            location.reload()
        }
    })
}
function drag_drop_finished(event) {
    event.preventDefault();
    var data = event.dataTransfer.getData("text");
    $.ajax({
        type:"post",
        url:"PHP/onFinished.php",
        data:{Titulli:data},
        success: function(){
            location.reload()
        }
    })
}