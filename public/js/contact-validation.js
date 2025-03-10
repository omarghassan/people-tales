
function validateContact() {
    let username = document.getElementById("name").value;
    let userEmail = document.getElementById("email").value;
    let userMessage = document.getElementById("message").value;

    let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;

    let errorMessageName = document.getElementById("errorMessageName");
    let errorMessageEmail = document.getElementById("errorMessageEmail");
    let errorMessageMessage = document.getElementById("errorMessageMessage");

    let isValid = true;

    // Reset error messages
    errorMessageName.textContent = "";
    errorMessageEmail.textContent = "";
    errorMessageMessage.textContent = "";

    // Validate Name
    if (username.trim() === "") {
        document.getElementById("name").style.borderColor = "red";
        errorMessageName.textContent = "Name can't be empty";
        isValid = false;
    } else {
        document.getElementById("name").style.borderColor = "initial";
    }

    // Validate Email
    if (!emailRegex.test(userEmail)) {
        document.getElementById("email").style.borderColor = "red";
        errorMessageEmail.textContent = "Enter a valid email";
        isValid = false;
    } else {
        document.getElementById("email").style.borderColor = "initial";
    }

    // Validate Message
    if (userMessage.trim() === "") {
        document.getElementById("message").style.borderColor = "red";
        errorMessageMessage.textContent = "Message can't be empty";
        isValid = false;
    } else {
        document.getElementById("message").style.borderColor = "initial";
    }

    return isValid; // Only allow form submission if all fields are valid
}
