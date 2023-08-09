// create connection
const btn_sign_in = document.querySelector("#btn-sign-in");
const btn_sign_up = document.querySelector("#btn-sign-up");
const container = document.querySelector(".container");

// rederect sign up page
btn_sign_up.addEventListener("click", () => {
    container.classList.add("sign-up-mode");

});

// rederect sign in page
btn_sign_in.addEventListener("click", () => {
    container.classList.remove("sign-up-mode");
});

//-------------------------------------------------------------------- Log in and sign up --------------------------------------------------------------------------------------------------
document.getElementById("btn-sign-up").onclick = function () {
    let txtlable = document.getElementById("user-name").disabled;

    if (txtlable) {
        document.getElementById("user-name").disabled = false;
    } else {
        document.getElementById("user-name").disabled = true;
    }
}

//================================ Validate Login and Signup ==========================================================
localStorage.setItem('Senura', '1234');
localStorage.setItem('Sasan', '6789');

function validateLogin() {
    let username = document.getElementById('user-name').value;
    let password = document.getElementById('user-password').value;



    if (username.trim() === ""){
        alert("Please Enter Your username or password");
    }else if(password.trim() === "") {
        alert("Please Enter the password for login");
    }else{
        const user_data = {
            username:username,
            password:password
        }

        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = () => {
            if(this.readyState === 4){
                if (this.status === 200) {
                    var responseData = JSON.parse(xhttp.responseText);
                    console.log(responseData);
                    alert(this.responseText);
                    window.location.reload();

                }else {
                    alert(this.responseText);
                }
            }
        };
        xhttp.open('POST','../backend/login.php',true);
        xhttp.setRequestHeader('Content-type','application/x-www-form-urlencoded');
        xhttp.send('username='+encodeURIComponent(user_data.username)+'&password='+encodeURIComponent(user_data.password));
    }

}

function validateSignup() {

    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;


    let firstName = document.getElementById('first-name').value;
    let secondName = document.getElementById('second-name').value;
    let username = document.getElementById('signup-user-name').value;
    let email = document.getElementById('user-mail').value;
    let password1 = document.getElementById('signup-user-password').value;
    let password2 = document.getElementById('signup-user-password-confirm').value;


    if (firstName.trim() === "") {
        alert('The first name field must be filled');
    } else if (secondName.trim() === '') {
        alert('The Last name field must be filled');
    } else if (username.trim() === '') {
        alert('User name field must be filled');
    } else if (email.trim() === '') {
        alert("The email field must be filled");
    } else if (!emailPattern.test(email)) {
        alert('Please enter Valid Email Address')
    } else if (password1.trim() === "") {
        alert("Please enter the Password");
    } else if (!password1.match(password2)) {
        alert('Confirm Password does not match');
    } else {
        const user_data = {
            firstName: firstName,
            secondName: secondName,
            username: username,
            email: email,
            password: password1
        };

        const xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = () => {
            if (this.readyState === 4) {
                if (this.status === 200) {
                    alert(this.responseText);
                    window.location.reload();
                } else {
                    alert(this.responseText);
                }
            }
        };
        xhttp.open('POST', '../backend/signup.php', true);
        xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
        xhttp.send('firstName=' + encodeURIComponent(user_data.firstName) + '&secondName=' + encodeURIComponent(user_data.secondName) + '&userName=' + encodeURIComponent(user_data.username) + '&email=' + encodeURIComponent(user_data.email) + '&password1=' + encodeURIComponent(user_data.password));
    }
}

//========================================================================================================================
