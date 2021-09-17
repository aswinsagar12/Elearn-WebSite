<?php

session_start();

include("databaseconnetion.php");
include("function.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="login.css" />
    <title>Sign in & Sign up</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <!--------------------------------------------->
                <form action="loginprocess.php" class="sign-in-form" method="POST">

                    <h2 class="title">Sign in</h2>

                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" required/>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" required/>
                    </div>

                    <button type="submit" name="login" class="btn">login</button>
                    <!--<input type="submit" value="Login" class="btn solid" />-->

                    <!--------------------------------------------->

                    <p class="social-text">Or Sign in with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>

                <!---------------------sigh up form------------------------>
                <form action="registration.php" class="sign-up-form" method="POST">
                    <h2 class="title">Sign up</h2>


                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" required />
                    </div>


                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" required/>
                    </div>


                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" required/>
                    </div>

                    <button name="submit" class="btn">Register</button>
                    <!--<input type="submit" class="btn" value="Sign up" />-->

                    <!----------------------END----------------------->

                    <p class="social-text">Or Sign up with social platforms</p>
                    <div class="social-media">
                        <a href="#" class="social-icon">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="#" class="social-icon">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </form>
            </div>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Hey Editor, New here ?</h3>
                    <p>
                        Photo editing is the act of altering an image. But that’s oversimplifying a subject that can be complex and employs different methods and tools.
                    </p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <div class="newimg">

                    <img src="images/photoedit2.png" class="image" alt="" />
                </div>
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Hello Editor, One of Us ?</h3>
                    <p>
                        Video editing is the process of manipulating and rearranging video shots to create a new work. Editing is usually considered to be one part of tasks include titling, colour correction, sound mixing.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">Sign in</button>
                </div>
                <img src="images/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>