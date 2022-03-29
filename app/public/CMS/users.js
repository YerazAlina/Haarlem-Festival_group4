function createUser() {
    const email = document.getElementById('form-email');
    const firstname = document.getElementById('form-firstname');
    const lastname = document.getElementById('form-lastname');
    const password = document.getElementById('form-password');

    const data = {
        'email': email.value,
        'firstname': firstname.value,
        'lastname': lastname.value,
        'password': password.value
    }

    fetch('http://localhost/register', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data),
    })
        .then(out => {
            name.value = null;
            price.value = null;
        })
        .catch(err => console.error(err));
}
