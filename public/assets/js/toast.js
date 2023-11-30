document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('formContactEnvoie').addEventListener('click', function(event) {
        showToast("Message envoyé avec succès!");
    });
});

function showToast(message) {
    //Création du Toast
    var toast = document.createElement("div");

    //Création du style du Toast
    toast.innerHTML = message;
    toast.style.position = "fixed";
    toast.style.bottom = "20px";
    toast.style.left = "50%";
    toast.style.transform = "translateX(-50%)";
    toast.style.backgroundColor = "#4CAF50";
    toast.style.color = "#fff";
    toast.style.padding = "15px";
    toast.style.borderRadius = "5px";

    var toastContainer = document.getElementById("toastContainer");
    toastContainer.appendChild(toast);

    //Temps avant que le Toast ne disparaisse
    setTimeout(function(){
        toastContainer.removeChild(toast);
    }, 3000);
}
