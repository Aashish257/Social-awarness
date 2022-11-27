<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login PAge</title>

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>
<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Login</header>
                <form action="#">
                    <div class="field input-field">
                        <input type="email" class="input" placeholder="Email">
                    </div>

                    <div class="field input-field">
                        <input type="password" class="password" placeholder="Password">
                        <i class="uil uil-eye-slash eye-icon"></i>
                    </div>

                    <div class="form-link">
                        <a href="#" class="forgot-pass">Forgot password</a>
                        
                    </div>

                    <div class="field button-field">
                        <button>Login</button>
                    </div>
                </form>
                <div class="form-link">
                    <span>Already have an account?<a href="Signup.html" class="link Signup-link">Sign Up</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-option">
                    <a href="" class="field facebook">
                        <i class="uil uil-facebook-f  facebook-icon"></i>
                        <span>Login with Facebook</span>
                    </a>
            </div>
            <div class="media-option">
                    <a href="" class="field google">
                        <img src="img/google.png" class="google-img" >
                        <span>Login with Google</span>
                    </a>
            </div>
        </div>
    </section>    

    <script src="js/loginsignup.js"></script>
</body>
</html>