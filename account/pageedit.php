<?php 

session_start();
if( !isset($_SESSION['id_u']) ){
    header("Location: ../logim.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Veturen</title>

    <style>
        *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background-image:url("../img/back.png");
  height: 100vh;
  overflow: hidden;
}
.center{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 400px;
  background: white;
  border-radius: 10px;
  box-shadow: 10px 10px 15px rgba(0,0,0,0.05);
}
.center h1{
  text-align: center;
  padding: 20px 0;
  border-bottom: 1px solid silver;
}
.center form{
  padding: 0 40px;
  box-sizing: border-box;
}
form .txt_field{
  position: relative;
  border-bottom: 2px solid #adadad;
  margin: 30px 0;
}
.txt_field input{
  width: 100%;
  padding: 0 5px;
  height: 40px;
  font-size: 16px;
  border: none;
  background: none;
  outline: none;
}
.txt_field label{
  position: absolute;
  top: 50%;
  left: 5px;
  color: #adadad;
  transform: translateY(-50%);
  font-size: 16px;
  pointer-events: none;
  transition: .5s;
}
.txt_field span::before{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 0%;
  height: 2px;
  background: #2691d9;
  transition: .5s;
}
.txt_field input:focus ~ label,
.txt_field input:valid ~ label{
  top: -5px;
  color: #2691d9;
}
.txt_field input:focus ~ span::before,
.txt_field input:valid ~ span::before{
  width: 100%;
}
.pass{
  margin: -5px 0 20px 5px;
  color: #a6a6a6;
  font-size: 16px;
}

input[type="submit"]{
  width: 100%;
  height: 50px;
  border: 1px solid;
  background: green;
  border-radius: 25px;
  font-size: 18px;
  color: #e9f4fb;
  font-weight: 700;
  cursor: pointer;
  outline: none;
}
input[type="submit"]:hover{
  border-color: #2691d9;
  transition: .5s;
}
.signup_link{
  margin: 30px 0;
  text-align: center;
  font-size: 16px;
  color: #666666;
}
.signup_link a{
  color: #2691d9;
  text-decoration: none;
}
.signup_link a:hover{
  text-decoration: underline;
}
.pershkrimi{
    width:100%;
    height:98px;
}
.back{            
            background-color:blue;
            width:100px;
            border:2px solid blue;
            border-radius:10px;
            width: 100%;
            height: 50px;
            border: 1px solid;
            border-radius: 25px;
            font-size: 18px;
            color: #e9f4fb;
            font-weight: 700;
            cursor: pointer;
            outline: none;

}
 .back a{
     color:white;
    text-decoration:none;
     padding:10px;
            
      }

    </style>

</head>
<body>
    <?php 
    $id_user = $_SESSION['id_u'];
    $idpage = $_GET['id'];
    include '../controller/connect.php';

    $data = mysqli_query($conn, "SELECT * FROM veturat WHERE id_user = '$id_user' AND id = '$idpage'");

    while($result=mysqli_fetch_array($data)){ 
    ?>
    <div class="center">
        <h1 class="title">Edit Veturen</h1>
        <form action="../controller/edit.php" method="post">
          <div class="txt_field">
          <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
          
          <input type="file" class="form" value="<?php echo $result['foto'] ?>"  name="foto" autocomplete="off" required>
            
            </div>
            
            <div class="txt_field">
            <input type="text" name="modeli" class="modeli"  required><?php echo $result['modeli'] ?>
            <label for="">Modeli</label>
        </div>
            <div class="txt_field">
            <textarea name="pershkrimi" class="pershkrimi" required><?php echo $result['pershkrimi'] ?></textarea>
            <label for="">Pershkrimi : </label>
    </div>
        

                    <div class="sigup_link">
                    <button class="back"><a href="dashboard.php">Go Back</a></button>
                    <input type="submit" class="" value="Edit">
                    
                </div>
                <br>
        </form>
    </div>




    <!-- <div class="wrapper">
        <h1 class="title">Edit Biography</h1>
        <form action="../controller/edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $result['id'] ?>">
            <label for="">Foto</label>
            <input type="file" class="form" value="<?php echo $result['foto'] ?>"  name="foto" autocomplete="off" required>
            <label for="">Modeli</label>
            <input type="text" name="modeli" class="modeli" required><?php echo $result['modeli'] ?></textarea>
            <label for="">Pershkrimi</label>
            <textarea name="pershkrimi" class="pershkrimi" required><?php echo $result['pershkrimi'] ?></textarea>
            <table>
                <tr>
                    <th><button class="red btn"><a href="dashboard.php">Back</a></button></th>
                    <th><input type="submit" class="blue input-btn" value="Edit"></th>
                </tr>
            </table>
        </form>
    </div> -->
    <?php
    }
    ?>
</body>
</html>