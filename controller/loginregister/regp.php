<?php 

include '../connect.php';
$name = $_POST['name'];
$pass1 = $_POST['pass'];
$pass2 = $_POST['pass2'];

if($pass1 !== $pass2){
    echo '<script type="text/javascript">
            alert("Make sure your password is the same")
            window.location="../../register.php"
            </script>';

    return false;
}

$result = mysqli_query($conn, "SELECT email FROM user WHERE email='$name'");

if(mysqli_fetch_assoc($result)){
    echo '<script type="text/javascript">
            alert("Information Already Exists")
            window.location="../../register.php"
            </script>';

    return false;
}

mysqli_query($conn, "INSERT INTO user VALUES('','$name','$pass1')");
echo '<script type="text/javascript">
            alert("You have been Registered successfully")
            window.location="../../index.php"
            </script>';


?>