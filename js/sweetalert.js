function showPrivacy() {
    Swal.fire({
        icon: 'info',
        title: 'Privacy Policy',
        html:
        '<p>We respect your privacy at Gearhead Garage. This Privacy Policy outlines how we collect, use, disclose, and safeguard your information when you visit our website or use our services.</p>' +
        '<p>Your personal information, such as your name, email address, and location data, may be collected to improve our service and user experience. We do not sell or share your information with third parties without your consent.</p>' +
        '<p>By using Gearhead Garage, you consent to the terms of this Privacy Policy.</p>',
        confirmButtonText: 'Close'
    });
}

function showTerms() {
    Swal.fire({
        icon: 'info',
        title: 'Terms of Service',
        html:
        '<p>Welcome to Gearhead Garage! These Terms of Service outline the rules and regulations for the use of our website and services.</p>' +
        '<p>By accessing or using Gearhead Garage, you agree to be bound by these Terms. If you disagree with any part of these terms, please do not use our website or services.</p>' +
        '<p>Our services are provided on an "as is" and "as available" basis. We do not guarantee the accuracy, completeness, or timeliness of the information available on our website.</p>',
        confirmButtonText: 'Close'
    });
}

function showFAQ() {
    Swal.fire({
        icon: 'info',
        title: 'Frequently Asked Questions (FAQ)',
        html:
        '<h4>What services does Gearhead Garage provide?</h4>' +
        '<p>Gearhead Garage helps users find nearby mechanic shops and specialized auto repair services quickly and conveniently.</p>' +
        '<h4>How accurate is the information on Gearhead Garage?</h4>' +
        '<p>We strive to provide accurate and up-to-date information. However, we recommend contacting the service provider directly for the most current details.</p>' +
        '<h4>Is Gearhead Garage free to use?</h4>' +
        '<p>Yes, Gearhead Garage is free for users to access and use.</p>' +
        '<h4>How can I update information about my mechanic shop on Gearhead Garage?</h4>' +
        '<p>Please contact us through our website to update or correct any information about your mechanic shop.</p>',
        confirmButtonText: 'Close'
    });
}