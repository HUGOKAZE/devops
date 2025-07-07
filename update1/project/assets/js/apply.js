// Get modal and elements
var openModalBtn = document.getElementById("Btn");
var openModalBtn = document.getElementById("Btn");
var closeModalBtn = document.getElementsByClassName("close")[0];

// Open the modal when the button is clicked
openModalBtn.onclick = function() {
    modal.style.display = "block";
}

// Close the modal when the close button is clicked
closeModalBtn.onclick = function() {
    modal.style.display = "none";
}

// Close the modal if the user clicks anywhere outside the modal
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// Optional: Form submission logic (you can handle your server-side submission here)
document.getElementById('cvUploadForm').addEventListener('submit', function(event) {
    event.preventDefault();
    // You can handle form data here
    console.log('Form submitted!');
    modal.style.display = "none"; // Close the modal after form submission
});
