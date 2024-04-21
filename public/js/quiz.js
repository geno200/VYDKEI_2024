function Quiz() {
    var form = document.getElementById('quizForm');
    var formData = new FormData(form);

    var helyes = [];
    var valasz = [];

    formData.forEach(function (value, key) {
        if (key === 'solution') {
            helyes.push(value);
        } else {
            if (Array.isArray(value)) {
                valasz.push(value.join(','));
            } else {
                valasz.push(value);
            }
        }
    });

    var pont = 0;
    var ures = false;

    for (var i = 0; i < helyes.length; i++) {
        if (valasz[i] === '') {
            ures = true;
        } else if (helyes[i] === valasz[i]) {
            pont++;
        } else {}

    }

    if (!ures) {
        var szazalek = (pont / helyes.length) * 100;
        var mutat = document.getElementById('EredmenyMutat');

        if (szazalek <= 50) {
            mutat.innerHTML = '<strong><h2 style="color: red;">Eredményed százalékban: ' + szazalek.toFixed(2) + '%<br></h2></strong>';
        } else if (szazalek > 50 && szazalek <= 80) {
            mutat.innerHTML = '<strong><h2 style="color: orange;">Eredményed százalékban: ' + szazalek.toFixed(2) + '%<br></h2></strong>';
        } else {
            mutat.innerHTML = '<strong><h2 style="color: green;">Eredményed százalékban: ' + szazalek.toFixed(2) + '%<br></h2></strong>';
        }
    } else {
        var mutat = document.getElementById('EredmenyMutat');
        mutat.innerHTML = '<strong><h2>Kérlek válaszolj meg minden kérdést!<h2></strong>';
    }
}

