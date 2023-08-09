document.addEventListener('DOMContentLoaded', function () {
    const signupButton = document.getElementById('signupButton');
    signupButton.addEventListener('click', signUp);
});

function signUp() {
    // Collect user input
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // Perform client-side validation if needed
    if (!username || !password) {
        alert('Please fill in all the required fields.');
        return;
    }

    // Create a JavaScript object to hold the data
    const data = {
        username: username,
        password: password,
    };

    // Make an AJAX request to the PHP script to handle signup
    const xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState === 4) {
            if (this.status === 200) {
                // Success: Redirect to the desired page
                window.location.href = 'login.php'; // Replace with your desired page
            } else {
                // Error: Display the error message returned by PHP
                alert(this.responseText);
            }
        }
    };

    xhttp.open('POST', 'signup.php', true);
    xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhttp.send('username=' + encodeURIComponent(data.username) + '&password=' + encodeURIComponent(data.password));
}
