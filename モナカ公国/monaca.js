let pay = document.getElementsByClassName("bk")[0];
let people = document.getElementsByClassName("bk")[1];
let button = document.getElementById("button");
let result = document.getElementById("result");

button.addEventListener("click", keisan, false);

function keisan(){
    result.innerHTML = `一人、${Math.ceil((pay/people) / 10) * 10}円です。`;
}