//login
document.getElementById('loginForm').addEventListener('submit', function(event) {
    var email = document.getElementById('exampleInputEmail').value;
    var password = document.getElementById('exampleInputPassword').value;
    var privacyCheck = document.getElementById('privacyCheck').checked;
    var termsCheck = document.getElementById('termsCheck').checked;

    if (!email) {
        alert('Please enter your email.');
        event.preventDefault();
    } else if (!password) {
        alert('Please enter your password.');
        event.preventDefault();
    } else if (!privacyCheck) {
        alert('You must agree to the privacy policy.');
        event.preventDefault();
    } else if (!termsCheck) {
        alert('You must agree to the terms and conditions.');
        event.preventDefault();
    }
});
//register
document.getElementById('registerForm').addEventListener('submit', function(event) {
    var fname = document.getElementById('exampleInputfName').value;
    var lname = document.getElementById('exampleInputlName').value;    
    var email = document.getElementById('exampleInputEmail').value;
    var password = document.getElementById('exampleInputPassword').value;
    var repeatPassword = document.getElementById('exampleRepeatPassword').value;
    var privacyCheck = document.getElementById('privacyCheck').checked;
    var termsCheck = document.getElementById('termsCheck').checked;

    if (!fname) {
        alert('Please enter your First name.');
        event.preventDefault();
    }else if (!lname){
        alert('Please enter your Last name.');
        event.preventDefault();
    } else if (!email) {
        alert('Please enter your email.');
        event.preventDefault();
    } else if (!password) {
        alert('Please enter your password.');
        event.preventDefault();
    } else if (password !== repeatPassword) {
        alert('Passwords do not match.');
        event.preventDefault();
    } else if (!privacyCheck) {
        alert('You must agree to the privacy policy.');
        event.preventDefault();
    } else if (!termsCheck) {
        alert('You must agree to the terms and conditions.');
        event.preventDefault();
    }
});