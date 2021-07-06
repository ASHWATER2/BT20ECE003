<!doctype php>
<php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Signup.css" />
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <title>Sign Up</title>
  </head>
  <body>
    <div class="nav">
        <table class="menu">
            <tr>
                <td>
                    <div class="menu-bar">
                        <ul>
                            <li><a href="#"><i class="fa fa-list"></i></a>
                                <div class="sub-menu-0">
                                    <ul>
                                        <li>
                                            <a href="lab3t.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="lab3t.php">Culture</a>
                                        </li>
                                        <li>
                                            <a href="lab3t.php">Literature</a>
                                        </li>
                                        <li>
                                            <a href="lab3t.php">Science</a>
                                        </li>
                                        <li>
                                            <a href="lab3t.php">Engineering</a>
                                        </li>
                                        <li>
                                            <a href="lab3t.php">Medical</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        </table>
        <h2>Pheonix</h2>
        <h2 class="account"><a href="login.php"><i class="fa fa-user-circle"></i>Sign In</a></h2>
    </div>
    <div class="signup">
        <div class="box">
            <p>Please fill in this form to create an account.</p>
            <hr/>
            <div class="headline">
                <img src="pheonix.jpg" alt="logo" width="150px" height="100px" />
                <h1>Sign up to Pheonix</h1>
            </div>

            <div class="info">
                <form action="registration.php" method="POST">
                    <label for="username">Username</label><br/>
                    <input type="text" placeholder="Enter Uername" name="username" id="username" required="required" formaction="validation.php"/><br/><br/>
                    <label for="username">Email address</label><br/>
                    <input type="email" placeholder="Enter Email" name="email" id="email" required="required" formaction="validation.php"/><br/><br/>
                    <label for="password">Password</label>
                    <input type="password" placeholder="Enter Password" name="password" id="password" required="required" minlength="8" formaction="validation.php"/><br/><br/>
                    <label for="psw-repeat">Repeat Password</label>
                    <input type="password" placeholder="Repeat Password" name="pswrepeat" id="pswrepeat" required="required" formaction="validation.php"/><br/><br/>

                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px" /> Remember me
                      </label><br/>

                    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms and Privacy</a>.</p><br/>

                    <div class="clearfix">
                        <button type="button" class="cancelbtn" id="submit1" >Cancel</button>
                        <button type="submit" class="signupbtn" id="submi" >Sign Up</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="menu2">
        <ul>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privecy</a></li>
            <li><a href="#">Security</a></li>
            <li><a href="#">Contact us</a></li>
        </ul>
    </div>
  </body>
</php>