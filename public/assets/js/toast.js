document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('formContactEnvoie').addEventListener('click', function(event) {
        showToast("Message envoyé avec succès!");
    });
});

// Function to display the toast
function showToast(message) {
    // Create a new div element for the toast
    var toast = document.createElement("div");

    // Set the content and styling for the toast
    toast.innerHTML = message;
    toast.style.position = "fixed";
    toast.style.bottom = "20px";
    toast.style.left = "50%";
    toast.style.transform = "translateX(-50%)";
    toast.style.backgroundColor = "#4CAF50";
    toast.style.color = "#fff";
    toast.style.padding = "15px";
    toast.style.borderRadius = "5px";

    // Append the toast to the toastContainer
    var toastContainer = document.getElementById("toastContainer");
    toastContainer.appendChild(toast);

    // Close the toast after 3 seconds
    setTimeout(function(){
        // Remove the toast from the toastContainer
        toastContainer.removeChild(toast);
    }, 3000);
}
