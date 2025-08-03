document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
        event.preventDefault();
        if (validateForm()) {
            form.submit();
        }
    });
});

function validateForm() {
    const email = document.getElementById("email").value;
    const createpass = document.getElementById("createpass").value;
    const confirmpass = document.getElementById("confirmpass").value;
    const otherAmount = document.getElementById("other_amount").value;

    if (!validateEmail(email)) {
        alert("Invalid email format");
        return false;
    }
    if (createpass !== confirmpass) {
        alert("Passwords do not match");
        return false;
    }
    if (document.querySelector('input[name="donation"]:checked').value === "other" && !otherAmount) {
        alert("Please enter the other donation amount");
        return false;
    }
    return true;
}

function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}