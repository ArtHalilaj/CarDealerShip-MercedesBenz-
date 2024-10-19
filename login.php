<?php 

session_start();
if( isset($_SESSION['id_u']) ){
    header("Location: account/dashboard.php");
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Mercedes</title>
  <link rel="icon" href="https://www.mercedes-benz.com/content/dam/brandhub/global/logos/MB-star_n_web.svg">
  <link rel="stylesheet" href="style/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>


</head>
<body>


  <div class="center">
        <h1 class="title">Login</h1>
        <form action="controller/loginregister/login.php" method="post">
          <div class="txt_field">
            
            <input type="text" class="form" name="name" autocomplete="off" required>
            <label for="">Username</label>
            </div>
            
            <div class="txt_field">
            <input type="password" class="form" name="pass" required>
            <label for="">Password</label>
    </div>
            
              <div class="pass">
                <h4>Don't Have an Account? Click Here <a href="signup.php">Register</a></h4>
                  </div>

                    <div class="sigup_link">
                    <input type="submit" class="butoni" value="login">
                    
                </div>
                <br>
        </form>
    </div>


  

</body>
</html>