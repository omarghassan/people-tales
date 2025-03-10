function validateNewsLetter() {

    let emailInput = document.getElementById("newsletter");
    let emailValue = emailInput.value;
    let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    
    let errorMessage = document.getElementById("errorMessage");

    if (!emailRegex.test(emailValue)) {
        emailInput.style.borderColor = "red";
        errorMessage.textContent = "Enter a valid email";
        return false;
    } else {
        return true;
    }
}