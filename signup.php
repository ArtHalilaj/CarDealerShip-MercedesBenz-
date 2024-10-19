<?php 

session_start();
if( isset($_SESSION['id_u']) ){
    header("Location: account/dashboard.php");
}


?>


<!DOCTYPE html>
<html>
<head>
    <title>Sign Up | Mercedes</title>
    <link rel="stylesheet" href="style/login.css">
    <link rel="icon" href="logoM-removebg.png">
   
</head>
<body>
   


    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Register Form</title>
</head>
<body>
    <div class="center">
        <h1 class="title">Register</h1>
        <form action="controller/loginregister/regp.php" method="post">
        <div class="txt_field">
            
            <input type="text" class="form" name="name" autocomplete="off" required>
            <label for="">Email :</label>
            </div>
            <div class="txt_field">   
            
            <input type="password" class="form" name="pass" required>
            <label for="">Password :</label>

            </div>
            <div class="txt_field">
            
            <input type="password" class="form" name="pass2" required>
            <label for="">Confirm Password :</label>
            
            </div>
            <div class="pass">
                    <h4>Have an Account? Click Here <a href="login.php">Login</a></h4>
                    <br>
                    <th><input type="submit" class="input-btn green" value="Register"></th>
            </div>
             
        </form>
    </div>
</body>
</html>




    <script src="js/app.js"></script>
</body>
</html>