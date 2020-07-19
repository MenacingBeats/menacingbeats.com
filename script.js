// toggle between responsive class navbar
function hamburger() {
    let x = document.getElementById("myTopNav");
    if (x.className === "nav-container") {
        x.className += " responsive";
    } else {
        x.className = "nav-container";
    }
}

// show months and date on song of the week.

// rebuild this as a 24hr countdown clock
// https://vincoding.com/weekly-repeating-countdown-timer-javascript/
// // show current date of SOTD
let today = new Date();
let date = today.getFullYear()+'.'+(today.getMonth()+1)+'.'+today.getDate();
let dateTime = date;

document.getElementById("sotd-date").innerHTML = dateTime;
//countdown clock for SOTD

    //set the date we countdown to
    let countDownDate = new Date("Jul 20, 2020 00:00:00").getTime();

    //update the coundown every 1 second
    let x = setInterval(function() {

        //get today's date and time
        let now = new Date().getTime();

        //find the distance betwen now and the count down date
        let distance = countDownDate - now;

        //Time calculations for days, hours, minutes, and seconds
        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60 )) / (1000 * 60));
        let seconds = Math.floor ((distance % (1000 * 60)) / 1000);

        //display the result in the element with id="countdown"
        document.getElementById("countdown").innerHTML = hours + "." + minutes + "." + seconds;

        //if the count down is finished, write text (in future repeat timer next day)
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("countdown").innerHTML = "EXPIRED";
        }
    }, 1000);


