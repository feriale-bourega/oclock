"use strict";

document.addEventListener("DOMContentLoaded", event => {

function viewTime(){

    let date = new Date ();
    let hours = date.getHours();
    let minutes = date.getMinutes();
    let seconds = date.getSeconds();

    if(hours == 0){
        hours = 12;
    }    

    hours = (hours < 10) ? "0" + hours : hours;
    minutes = (minutes < 10) ? "0" + minutes : minutes;
    seconds = (seconds < 10) ? "0" + seconds : seconds;

    let time = hours + ":" + minutes + ":" + seconds;
    
    document.getElementById("myClock").innerText = time;
    console.log(time);

    // document.getElementById("myClock").textContent = time;

    setTimeout(viewTime, 1000);

}

viewTime();
});