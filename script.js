// toggle between responsive class navbar
function hamburger() {
    let x = document.getElementById("myTopNav");
    if (x.className === "nav-container") {
        x.className += " responsive";
    } else {
        x.className = "nav-container";
    }
};

// show current date of SOTD
let today = new Date();
let date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
let dateTime = date;

document.getElementById("sotd-date").innerHTML = dateTime;