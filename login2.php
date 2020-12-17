<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <link rel="shortcut icon" href="images/BingeIt.png" />
    <title>SignUp - Login</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-preload">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Header -->
        <header id="header" class="alt">
            <a href="index.php" class="logo"><strong>BingeIt</strong></a>
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>

        <!-- Menu -->
        <nav id="menu">
            <ul class="links">
                <li><a href="index.php">Home</a></li>
                <li><a href="my_favourites.html">My Favourites</a></li>
                <li><a href="active_watchlist.html">Active WatchList</a></li>
            </ul>
        </nav>

        <?php
        $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
        if (strpos($url, "cpass") !== false) {
          echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger" role="alert">
                  Password 1 and Password 2 does not match
                </div>';
        }
        elseif (strpos($url, "login=empty") !== false) {
         echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger" role="alert">
                 Fill out all fields
               </div>';
       }
       elseif (strpos($url, "login=error") !== false) {
         echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger" role="alert">
                 Invalid username or password
               </div>';
       }
         ?>

        <!-- Contact -->
        <section id="contact">
            <div class="inner">
                <section>
                    <h1>Sign up</h1>
                    <form action="post2.php" method="post">
                        <div class="fields">

                            <div class="field half">
                                <label for="fname">First Name</label>
                                <input type="text" placeholder="Enter your first name" name="fname" id="fname" />
                            </div>

                            <div class="field half">
                                <label for="lname">Last Name</label>
                                <input type="text" placeholder="Enter your last name" name="lname" id="lname" />
                            </div>

                            <div class="field">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Enter your email" name="email" id="email" required />
                            </div>

                            <!-- <div class="field half">
                                <label for="cno">Contact Number</label>
                                <input type="tel" placeholder="Enter your 10 digit contact number" name="cno" id="cno"
                                    required />
                            </div>

                            <div class="field half">
                                <label for="age">Age</label>
                                <input type="text" placeholder="Enter your age" size="2" name="age" min="12" max="100"
                                    required />
                            </div> -->

                            <div class="field">
                                <label for="pass1">Password</label>
                                <input type="password" placeholder="Enter new password" name="pass1"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" id="pass1"
                                    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                                    required />
                            </div>

                            <div class="field">
                                <label for="pass2">Confirm Password</label>
                                <input type="password" placeholder="Re-enter password" name="pass2" id="pass2"
                                    required />
                            </div>

                        </div>
                        <ul class="actions">
                            <li><input type="submit" name="save" value="Sign Up" class="primary" /></li>
                            <li><input type="reset" value="Clear" /></li>
                        </ul>
                    </form>
                </section>
                <section>
                    <br><br>
                    <h1>Log in</h1>
                    <form action="login.php" method="post">
                        <div class="fields">

                            <div class="field">
                                <label for="email">Email</label>
                                <input type="email" placeholder="Enter your email" name="email2" id="email2" required />
                            </div>

                            <div class="field">
                                <label for="pass1">Password</label>
                                <input type="password" placeholder="Enter password" name="pass3"
                                    pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" id="pass3"
                                    title="Enter your valid password" required />
                            </div>

                        </div>
                        <ul class="actions">
                            <li><input type="submit" name="submit" value="submit" class="primary" /></li>
                        </ul>
                    </form>
                </section>
            </div>
        </section>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.scrolly.min.js"></script>
    <script src="assets/js/jquery.scrollex.min.js"></script>
    <script src="assets/js/browser.min.js"></script>
    <script src="assets/js/breakpoints.min.js"></script>
    <script src="assets/js/util.js"></script>
    <script src="assets/js/main.js"></script>

    <!-- <SCRIPT type="text/javascript">
        function validate(thisform) {

            var contactno = thisform.cno.value;
            var pass = thisform.pass.value;
            var cpass = thisform.cpass.value;

            if (pass != cpass) {
                alert("Your passwords don't match!");
                thisform.pswrepeat.focus();
                return false;
            }

            if (contactno.length < 10) {
                alert("Contact number must have atleast 10 digits");
                thisform.cno.focus();
                return false;
            }
            if (isNaN(contactno)) {
                alert("Invalid phone number");
                thisform.cno.focus();
                return false;
            }
            return true;
        }
    </SCRIPT> -->

</body>

</html>