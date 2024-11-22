window.onload = pageLoad;
function pageLoad(){
    var button = document.getElementById("myButton");

    button.onclick = changeColor;

}

function changeColor(){
    var body = document.getElementsByTagName("body")[0];
    body.classList.toggle("darkMode");
}

//$(function() {...}) 是 jQuery 提供的簡化形式，專門用於在 DOM 構建完成後執行代碼。

$(function() {
    $( "#accordion" ).accordion({
        collapsible: true
    });

} );
