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
    const fname = document.getElementById("fname").value;
    const lname = document.getElementById("lname").value;
    const phone = document.getElementById("phone").value;
    const email = document.getElementById("email").value;
    const createpass = document.getElementById("createpass").value;
    const confirmpass = document.getElementById("confirmpass").value;
    const otherAmount = document.getElementById("other_amount").value;

    if(!validateFname(fname))
    {
        alert("Invalid input")
        return false;
    }
    if(!validateLname(lname))
    {
        alert("Invalid input")
        return false;
    }
    if(!validatePhone(phone))
    {
        alert("Invalid input")
        return false;
    }
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
function validateFname(fname)
{
    const re = /^[a-zA-Z]+$/;
    return re.test(fname);
}
function validateLname(lname)
{
    const re = /^[a-zA-Z]+$/;
    return re.test(lname);
}
function validatePhone(phone)
{
    const re = /^\d{11}$/;
    return re.test(phone);
}
