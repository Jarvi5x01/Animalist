<php>

<head>
    <title>SignUp</title>
    <link rel="stylesheet" type="text/css" href="signup.css">

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

                <h1>Sign Up</h1>
                <form method="post" action="signuprun.php">
                    <p>Name</p>
                    <input type="text" name="Enter Full Name" placeholder="Enter Full Name" required>
                    <p>Email</p>
                    <input type="text" name="Enter E-Mail" placeholder="Enter Email" required>
                    <p>Phone Number</p>
                    <input type="text" name="Enter Phone Number" placeholder="Enter Phone Number" required>
                    <p>Username</p>
                    <input type="text" name="Enter Username" placeholder="Enter Username" required>
                    <p>Password</p>
                    <input type="password" name="Enter Password" placeholder="Enter Password" required>
                    <center><button class="butn"><a href="loginrun.php">Sign Up</button></a><br></center>
                    <a href="forgot.php">Lost your password?</a><br>
                </form>

            </div>
        </header>
    </body>
</head>

</php>