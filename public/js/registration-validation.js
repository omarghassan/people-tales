function validateLogin() {

  let emailInput = document.getElementById("email").value;
  let passwordInput = document.getElementById("password").value;

  let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/;

  let errorMessageEmail = document.getElementById("errorMessageEmail");
  let errorMessagePassword = document.getElementById("errorMessagePassword");

  let isValid = true;

  // Validate Email
  if (!emailRegex.test(emailInput)) {
    document.getElementById("email").style.borderColor = "red";
    errorMessageEmail.textContent = "Enter a valid email";
    isValid = false;
  } else {
    document.getElementById("email").style.borderColor = "initial";
    errorMessageEmail.textContent = "";
  }

  // Validate Password
  if (!passwordRegex.test(passwordInput)) {
    document.getElementById("password").style.borderColor = "red";
    errorMessagePassword.textContent = "Password must be at least 8 characters long, include at least one uppercase letter, one lowercase letter, and one special character";
    isValid = false;
  } else {
    document.getElementById("password").style.borderColor = "initial";
    errorMessagePassword.textContent = "";
  }

  return isValid;

}

function validateRegistration() {

  // If there are server-side errors already showing, let the form submit
  // so the user can see all errors
  let hasServerErrors = document.querySelectorAll('.is-invalid').length > 0;
  if (hasServerErrors) {
    return true;
  }

  let nameInput = document.getElementById("name").value;
  let emailInput = document.getElementById("email").value;
  let passwordInput = document.getElementById("password").value;
  let confirmPasswordInput = document.getElementById("confirmPassword").value;

  let emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
  let passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\W).{8,}$/;

  let errorMessageName = document.getElementById("errorMessageName");
  let errorMessageEmail = document.getElementById("errorMessageEmail");
  let errorMessagePassword = document.getElementById("errorMessagePassword");
  let errorMessageConfirmPassword = document.getElementById("errorMessageConfirmPassword");

  let isValid = true;

  // Validate Name
  if (nameInput.trim() === "") {
    document.getElementById("name").style.borderColor = "red";
    errorMessageName.textContent = "Name can't be empty";
    isValid = false;
  } else {
    document.getElementById("name").style.borderColor = "initial";
    errorMessageName.textContent = "";
  }

  // Validate Email
  if (!emailRegex.test(emailInput)) {
    document.getElementById("email").style.borderColor = "red";
    errorMessageEmail.textContent = "Enter a valid email";
    isValid = false;
  } else {
    document.getElementById("email").style.borderColor = "initial";
    errorMessageEmail.textContent = "";
  }

  // Validate Password
  if (!passwordRegex.test(passwordInput)) {
    document.getElementById("password").style.borderColor = "red";
    errorMessagePassword.textContent = "Password must be at least 8 characters long, include at least one uppercase letter, one lowercase letter, and one special character";
    isValid = false;
  } else {
    document.getElementById("password").style.borderColor = "initial";
    errorMessagePassword.textContent = "";
  }

  // Validate Confirm Password
  if (confirmPasswordInput.trim() === "" || confirmPasswordInput !== passwordInput) {
    document.getElementById("confirmPassword").style.borderColor = "red";
    errorMessageConfirmPassword.textContent = "Passwords do not match";
    isValid = false;
  } else {
    document.getElementById("confirmPassword").style.borderColor = "initial";
    errorMessageConfirmPassword.textContent = "";
  }

  return isValid;
}
