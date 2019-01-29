function btnstart() {
    document.getElementById("start-page").style.display = "none";
    document.getElementById("info-page").style.display = "block";
}

function activeinput() {
    var select = document.getElementById("select");
    var text = document.getElementById("specify");
    if (select.value == "No") {
        text.disabled = false;
    } else {
        text.disabled = true;
    }
}