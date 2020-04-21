<php>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="login_form.css">

    <body>
        <header>
            <div class="row">
                <ul class="main-nav">
                    <li><a href="main.php">HOME</a></li>
                    <li><a href="html_form.php">LOGIN</a></li>
                    <li><a href="signup.php">SIGN UP</a></li>
                    <li><a href="contact.php">ABOUT</a></li>
                </ul>

            </div>
            <div class="loginbox">

                <h1>Login</h1>
                <form method="post" action="loginrun.php">
                    <p>Username</p>
                    <input type="text" name="Enter Username" placeholder="Enter Username" required>
                    <p>Password</p>
                    <input type="password" name="Enter Password" placeholder="Enter Password" required>
                    <center><a href="1stHTML.php"><button class="butn"><a href="1stHTML.php">LOGIN</button></a><br></center>
                    <a href="forgot.php">Lost your password?</a><br>
                    <a href="signup.php">Don't have an account?</a>
                </form>

            </div>
        </header>
    </body>
</head>

</php>