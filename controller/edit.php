<?php 
session_start();
$id_user = $_SESSION['id_u'];
$idpage = $_POST['id'];
$foto = $_POST['foto'];
$modeli = $_POST['modeli'];
$pershkrimi = $_POST['pershkrimi'];
include '../controller/connect.php';

$data = mysqli_query($conn, "UPDATE `veturat` SET `id`='$idpage',`foto`='$foto',`modeli`='$modeli',`pershkrimi`='$pershkrimi',`id_user`='$id_user' WHERE id_user = '$id_user' AND id = '$idpage'");

if($data){
    echo '<script type="text/javascript">
            alert("Car Edited successfully")
            window.location="../account/dashboard.php"
            </script>';
}else {
    echo '<script type="text/javascript">
            alert("Car Edit Failed")
            window.location="../account/dashboard.php"
            </script>';
}

