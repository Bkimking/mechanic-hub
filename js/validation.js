
function validateForm() {
    var nameInput = document.getElementById('name');
    var emailInput = document.getElementById('email');
    var messageInput = document.getElementById('message');
    var nameError = document.getElementById('nameError');
    var emailError = document.getElementById('emailError');
    var messageError = document.getElementById('messageError');
    var submitSuccessMessage = document.getElementById('submitSuccessMessage');
    var submitErrorMessage = document.getElementById('submitErrorMessage');

    // Reset validation messages and styles
    nameError.style.display = 'none';
    nameInput.classList.remove('is-invalid');
    emailError.style.display = 'none';
    emailInput.classList.remove('is-invalid');
    messageError.style.display = 'none';
    messageInput.classList.remove('is-invalid');
    submitSuccessMessage.style.display = 'none';
    submitErrorMessage.style.display = 'none';

    // Validate name
    if (nameInput.value.trim() === '') {
        nameError.style.display = 'block';
        nameInput.classList.add('is-invalid');
        return;
    }

    // Validate email
    if (emailInput.value.trim() === '') {
        emailError.style.display = 'block';
        emailInput.classList.add('is-invalid');
        return;
    } else if (!isValidEmail(emailInput.value.trim())) {
        emailError.style.display = 'block';
        emailInput.classList.add('is-invalid');
        emailError.textContent = 'Please enter a valid email address.';
        return;
    }

    // Validate message
    if (messageInput.value.trim() === '') {
        messageError.style.display = 'block';
        messageInput.classList.add('is-invalid');
        return;
    }

    // If all validations pass, simulate form submission (you can replace this with actual submission logic)
    simulateSubmit();
}

function simulateSubmit() {
    // Simulate a delay for demonstration (replace with actual form submission logic)
    setTimeout(function() {
        // Reset form after submission (optional)
        document.getElementById('contactForm').reset();

        // Show success message
        var submitSuccessMessage = document.getElementById('submitSuccessMessage');
        submitSuccessMessage.style.display = 'block';

        // Close modal (optional)
        var modal = new bootstrap.Modal(document.getElementById('feedbackModal'));
        modal.hide();
    }, 1000); // Adjust delay as needed
}

function isValidEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}