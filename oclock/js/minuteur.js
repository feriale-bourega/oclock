"use strict";

document.addEventListener("DOMContentLoaded", () => {

    let start = document.getElementById("start");
    let stop = document.getElementById("stop");
    let timer = document.getElementById("timer");
    let clock = document.getElementById("clockdiv");

    start.addEventListener("click", () => {

        let hours = document.getElementById("hour-input").value;
        let minutes = document.getElementById("minute-input").value;
        let seconds = document.getElementById("second-input").value;

        clock.style.display = "none";
        start.style.display = "none";
        stop.style.display = "inline-block";
        timer.style.display = "flex";

        let countdown = (+hours * 3600) + (+minutes * 60) + +seconds;

        function countdownTimer() {


            let remaining = "Temps écoulé";

            if (countdown > 0) {

                const parts = {

                    heures: Math.floor((countdown / (60 * 60)) % 24),
                    minutes: Math.floor((countdown / 60) % 60),
                    secondes: Math.floor(countdown % 60),

                };

                remaining = Object.keys(parts).map(part => {
                    if (!parts[part]) return '00 ' + `${part}`;
                    return `${parts[part]}  ${part}`;
                }).join(" ");

            }

            document.getElementById("timerDisplay").innerHTML = remaining;
            countdown--;

        }

        countdownTimer()
        
        const time = setInterval(countdownTimer, 1000);

        stop.addEventListener("click", () => {
            clearInterval(time);
            clock.style.display = "inline-block";
            start.style.display = "inline-block";
            stop.style.display = "none";
            timer.style.display = "none";
    
        })
    })

});