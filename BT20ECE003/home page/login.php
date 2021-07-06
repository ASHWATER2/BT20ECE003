

<!doctype php>
<php lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="stylesheet" href="signin.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    
    <title>Sign in</title>
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
                                            <a href="../home page/lab3t.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="../home page/lab3t.php">Culture</a>
                                        </li>
                                        <li>
                                            <a href="../home page/lab3t.php">Literature</a>
                                        </li>
                                        <li>
                                            <a href="../home page/lab3t.php">Science</a>
                                        </li>
                                        <li>
                                            <a href="../home page/lab3t.php">Engineering</a>
                                        </li>
                                        <li>
                                            <a href="../home page/lab3t.php">Medical</a>
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
        <h2 class="account"><a href="signup.php"><i class="fa fa-user-circle"></i>Sign Up</a></h2>
    </div>
    <div class="box">
        <div class="headline">
            <img src="pheonix.jpg" width="150px" height="100px" />
            <h1>Sign in to Pheonix</h1>
        </div>

        <div class="info">
            <form action="match.php" method="POST">
                <label for="username">Username or Email address</label><br/>
                <input type="text" name="username" id="username" required="required" formaction="validation.php"/><br/><br/>
                <div class="forg">
                    <label for="password">Password</label>
                    <label><a href="reset.php">Forget Password?</a></label><br/>
                </div>
                <input type="password" name="password" id="password" required="required" minlength="8" formaction="validation.php"/><br/><br/>

                <input type="submit" value="Sign in" id="submit" name="submit1"/>
            </form>
        </div>

    </div>
    <br>
    <br>

    <div class="sub">
        <p>New to Pheonix?<a href="signup.php">Create an account</a></p>
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