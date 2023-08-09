<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" href="logo/webLOgoW.jpg" type="image/x-icon"><!-- IMG of title -->
    <title>GURULU Account</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Sharp" rel="stylesheet"><!--metiral Icon-->
    <link rel="stylesheet" href="css/account.css"><!-- style sheet -->
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <!------------------------------- Sign In Page  ---------------------------------------------->
            <div class="signin-of-account">
                <form action="#" class="sign-in">
                    <div class="logo-signin">
                        <img src="logo/webLOgos.png">
                    </div>
                    <h2 class="title">Sign In</h2>
                    <div class="inputs">
                        <span class="material-icons-sharp">person</span>
                        <input type="text" id="user-name" placeholder="User Name">
                    </div>
                    <div class="inputs">
                        <span class="material-icons-sharp">key</span>
                        <input type="password" id="user-password" placeholder="Password">
                    </div>
                    <div class="other">
                        <input type="submit" value="Sign In" class="btn btn-primary" onclick="return validateLogin()">
                    <a href="#">Forgot Password</a>
                    </div>
                    <p class="social-text">Or sign in with youre google account</p>
                    <div class="google">
                        <a href="#" class="google-icon">
                            <img src="https://img.icons8.com/fluency/48/000000/google-logo.png"/>
                        </a>
                    </div>
                </form>
                <!------------------------------- Sign up Page  ---------------------------------------------->
                <form action="#" class="sign-up">
                    <div class="logo-signup">
                        <img src="logo/txtWebLogo.png">
                    </div>
                    <h2 class="title">Sign Up</h2>
                    <div class="inputs">
                        <span class="material-icons-sharp">person_add_alt</span>
                        <input type="text" id="first-name" placeholder="First Name">
                    </div>
                    <div class="inputs">
                        <span class="material-icons-sharp">person_add_alt</span>
                        <input type="text" id="second-name" placeholder="Second Name">
                    </div>
                    <div class="inputs">
                        <span class="material-icons-sharp">person</span>
                        <input type="text" id="signup-user-name" placeholder="User Name">
                    </div>
                    <div class="inputs">
                        <span class="material-icons-sharp">email</span>
                        <input type="email" id="user-mail" placeholder="E-mail">
                    </div>
                    <div class="inputs">
                        <span class="material-icons-sharp">key</span>
                        <input type="password" id="signup-user-password" placeholder="Password">
                    </div>

                    <!--Confirm Password-->
                    <div class="inputs">
                        <span class="material-icons-sharp">key</span>
                        <input type="password" id="signup-user-password-confirm" placeholder="Confirm Password">
                    </div>
                    
                    <input type="submit" value="Sign Up" class="btn btn-primary" onclick="return validateSignup()">
                    <p class="social-text">Or sign up with you are google account</p>
                    <div class="google">
                        <a href="#" class="google-icon">
                            <img src="https://img.icons8.com/fluency/48/000000/google-logo.png"/>
                        </a>
                    </div>
                </form>
            </div>
            <!-- <div class="signup-of-account"></div> -->
        </div>
        
        <!------------------------------- Panels ---------------------------------------------->
        <div class="panels-container">
            <div id="left" class="panel panel-left">
                <div class="content">
                    <h3>Havent't Joined Yet?</h3>
                    <p>If you haven't joined yet, click <b>Sign Up</b> button and enjoy life with <i><b>GURULU</b></i></p>
                    <button class="btn btn-secondary" id="btn-sign-up">Sign Up</button>
                </div>
                <img src="use_photo/loginbg1.svg" class="image">
            </div>
            <div id="right" class="panel panel-right">
                <div class="content">
                    <h3>One Of  Us</h3>
                    <p>If you haven <i><b>GURULU</b></i> account, click <b>Sign In</b> button and enjoy life with <i><b>GURULU</b></i></p>
                    <button class="btn btn-secondary" id="btn-sign-in">Sign In</button>
                </div>
                <img src="use_photo/loginbg2.svg" class="image">
            </div>
        </div>
    </div>
    
    <script src="js/account.js"></script>
</body>
</html>