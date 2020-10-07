<?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        include 'php/_dbconnect.php';
        $category = $_POST['category'];
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&family=Poppins:wght@400;800&display=swap" rel="stylesheet">
    <title>Home</title>
</head>

<body>
        <div class = "wholebody">
            <div class="navbar">
            </div>
            <div class="container-login">
                <div class= "wrap-login">
                    <div class = "headerimg">
                        <span>
                            SIGN IN
                        </span>
                    </div>
                    <form class="loginform" action="index.php" method="POST">
                        <div class="login-input">
                            <span class="radio-label">Select one:</span>
                            <input type="radio" class="radio-btn" name="category" value="Employee"><span class="radio-label">Employee</span>
                            <input type="radio" class="radio-btn" name="category" value="Company"><span class="radio-label">Company</span>
                        </div>
                        <div class = "login-input">
                            <input class="input100" type="email" name="email" placeholder="Enter Email" required/>
                        </div>
                        <div class = "login-input">
                            <input class="input100" type="password" name="password" placeholder="Enter Password" required/>
                        </div>
                        <div class="login-btn">
                            <button class="sub-btn" name="submit">Login</button>
                        </div>
                        <div class="txt">
                            Don't have an account?&nbsp
                            <a href="php/register.php" >
                                 Sign Up 
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>

</html>




