const form = document.getElementById('form');

form.addEventListener('submit', function (e) {
    let isValid = true;

    // Clear previous errors
    document.querySelectorAll('.error').forEach(span => span.innerText = '');

    const fname = document.getElementById('firstname').value.trim();
    const lname = document.getElementById('lastname').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const passport = document.getElementById('passport').value.trim();
    const password = document.getElementById('password').value;
    const dob = document.getElementById('dob').value;
    const genderMale = document.getElementById('male').checked;
    const genderFemale = document.getElementById('female').checked;
    const address = document.getElementById('address').value.trim();

    if (fname === '' || fname.length < 3) {
        document.getElementById('errorFirstname').innerText = 'First name must be at least 3 characters';
        isValid = false;
    }

    if (lname === '') {
        document.getElementById('errorLastname').innerText = 'Last name is required';
        isValid = false;
    }

    if (email === '') {
        document.getElementById('errorEmail').innerText = 'Email is required';
        isValid = false;
    }

    if (phone === '') {
        document.getElementById('errorPhone').innerText = 'Phone number is required';
        isValid = false;
    }

    if (passport === '') {
        document.getElementById('errorPassport').innerText = 'Passport number is required';
        isValid = false;
    }

    if (password.length <= 6) {
        document.getElementById('errorPassword').innerText = 'Password must be longer than 6 characters';
        isValid = false;
    } else if (password.toLowerCase() === 'password') {
        document.getElementById('errorPassword').innerText = 'Password cannot be "password"';
        isValid = false;
    }

    if (dob === '') {
        document.getElementById('errorDOB').innerText = 'Date of birth is required';
        isValid = false;
    }

    if (!genderMale && !genderFemale) {
        document.getElementById('errorGender').innerText = 'Please select a gender';
        isValid = false;
    }

    if (address === '') {
        document.getElementById('errorAddress').innerText = 'Address is required';
        isValid = false;
    }

    if (!isValid) {
        e.preventDefault();
    }
});
