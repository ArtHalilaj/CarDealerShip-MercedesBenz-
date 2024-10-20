<?php 

session_start();
if( !isset($_SESSION['id_u']) ){
    header("Location: ../login.php");
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/.css">
    <title>Shto Veturen</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans:wght@700&family=Poppins:wght@400;500;600&display=swap');
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}
body{
  margin: 0;
  padding: 0;
  background-color: lightblue;
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
<div class="center">
        <h1 class="title">Shto Veturen</h1>
        <form action="../controller/add.php" method="post">
          <div class="txt_field">
            
          
            <input type="file" class="foto" name="foto" autocomplete="off" required>
            
            </div>
            
            <div class="txt_field">
            <input type="text" name="modeli" class="modeli" required></textarea>
            <label for="">Modeli</label>
        </div>
            <div class="txt_field">
            <textarea name="pershkrimi" class="pershkrimi" required></textarea>
            <label for="">Pershkrimi : </label>
    </div>
        

                    <div class="sigup_link">
                    <button class="back"><a href="dashboard.php">Go Back</a></button>
                    <input type="submit" class="" value="Add">
                    
                </div>
                <br>
        </form>
    </div>
    
</body>
</html>