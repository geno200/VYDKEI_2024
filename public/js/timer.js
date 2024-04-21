
let time = 0;
let timerInterval;

function Kezdes() {
    time = 1 * 60;
    clearInterval(timerInterval);
    timerInterval = setInterval(Visszaszamlalo, 1000);
}

function Visszaszamlalo() {
    const minutes = Math.floor(time / 60);
    let seconds = time % 60;

    if (seconds < 10) {
        seconds = '0' + seconds;
    }

    countdown.innerHTML = `<strong><h2 style="color: red;">${minutes}:${seconds}</h2></strong>`;
    time--;

    if (time <= -2) {
        clearInterval(timerInterval);
        window.alert('Lejárt az idő!');
        countdown.innerHTML = `<strong><h2 style="color: black;">${minutes}:${seconds}</h2></strong>`;
        location.reload();
    }
}
