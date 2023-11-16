document.querySelector(".btn-envoyer").addEventListener("click", function() {

    var xhr = new XMLHttpRequest();
    xhr.open("GET", "/mail/sendMail", true);

    xhr.onload = function() {
        console.log(xhr.status);
        if (xhr.status >= 200 && xhr.status < 300) {
            console.log('Réponse du serveur : ' + xhr.responseText);
        } else {
            console.error('La requête a échoué avec le statut : ' + xhr.status);
        }
    };

    xhr.onerror = function() {
        console.error('Erreur réseau');
    };

    xhr.send();
});
