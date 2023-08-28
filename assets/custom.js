function Menu(evt, namaMenu) {
    var i, tabcontent, item;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    item = document.getElementsByClassName("item");
    for (i = 0; i < item.length; i++) {
        item[i].className = item[i].className.replace(" active", "");
    }
    document.getElementById(namaMenu).style.display = "block";
    evt.currentTarget.className += " active";
}