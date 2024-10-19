<?php 

include 'connect.php';

session_start();
if( !isset($_SESSION['id_u']) ){
    header("Location: ../login.php");
}

$id_user = $_SESSION['id_u'];
$foto = $_POST['foto'];
$modeli = $_POST['modeli'];
$pershkrimi = $_POST['pershkrimi'];

$query = mysqli_query($conn, "INSERT INTO veturat VALUES('','$foto','$modeli','$pershkrimi','$id_user')");

if($query){
    echo '<script type="text/javascript">
            alert("Car was added successfully")
            window.location="../account/dashboard.php"
            </script>';
}


?>