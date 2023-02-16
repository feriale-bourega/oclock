"use strict";

document.addEventListener("DOMContentLoaded", event => {

    function viewTime() {

        let date = new Date();
        let hours = date.getHours();
        let minutes = date.getMinutes();
        let seconds = date.getSeconds();

        if (hours == 0) {
            hours = 12;
        }

        hours = (hours < 10) ? "0" + hours : hours;
        minutes = (minutes < 10) ? "0" + minutes : minutes;
        seconds = (seconds < 10) ? "0" + seconds : seconds;

        let time = hours + ":" + minutes + ":" + seconds;

        document.getElementById("myClock").innerText = time;

        setTimeout(viewTime, 1000);

    }

    viewTime();

    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    let add = document.getElementById("add");
    let array = [];

    add.addEventListener("click", () => {


        let alarm = document.getElementById('setAlarm').value;
        let title = document.getElementById('setTitle').value;

        // Display table 
        let tbody = document.querySelector('tbody');

        let now = new Date();

        let target = new Date(now.getFullYear(), now.getMonth(), now.getDate(), alarm[0] + alarm[1], alarm[3] + alarm[4], '00');

        let x = target - now;
        let y = x / 1000;

        let status = Math.round(y);

        if (now.length != 0 && title.length != 0) {

            modal.style.display = "none";

            array.push([alarm, title, status]);

            let row = document.createElement("tr");

            row.innerHTML = '<td>' + alarm + '</td><td>' + title + '</td><td id = "' + title + '">' + status + 's restantes</td>'

            tbody.appendChild(row);

        } else {

            alert("Remplissez une heure et un message pour pouvoir utiliser l'alarme.");

        }


            setInterval(() => {
        array.forEach(element => {

        let state = document.getElementById(title)
        let remaining = "Temps écoulé";

                if (status > 0) {
                    status--;

                    const parts = {

                        heures: Math.floor((status / (60 * 60)) % 24),
                        minutes: Math.floor((status / 60) % 60),
                        secondes: Math.floor(status % 60),
    
                    };
    
                    remaining = Object.keys(parts).map(part => {
                        if (!parts[part]) return '';
                        return `${parts[part]}  ${part}`;
                    }).join(" ") + " restantes";

                    state.innerHTML = remaining;


                } else {

                    state.innerHTML = 'passé';

                }
        });

            }, 1000);








    })
});