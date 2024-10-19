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
    <link rel="stylesheet" href="../style/style.css">
    <title>Dashboard</title>

    <style>
        .categories{
            display: flex;
            flex-direction: row;
            justify-content: space-around;
            flex-wrap:wrap;
            align-content: space-around;
            row-gap: 20px;
        }

        .card{
            border: 3px solid white;
            width: 600px;
            border-radius: 5px;
            background-color: black;
        }
        .card img{
            width: 600px;
            height:400px;
        }
        .container{
            background-color: black;
        }
        .container{
            color:white;
        }
        .carda{
            width:200px;
            align-items:center;
            text-align:center;
            width: 200px;
            
            
            
        }
        body{
            background-color:black;
        }
        .mod{
            font-weight:bold;
            font-size:20px;
        }

        .bt1 {
            
            background-color:blue;
            width:100px;
            border-radius:10px;

        }
        .bt1 a{
            color:white;
            text-decoration:none;
            padding:10px;
            
        }

        .bt2 {
            
            background-color:red;
            width:100px;
            border-radius:10px;

        }
        .bt2 a{
            color:white;
            text-decoration:none;
            padding:10px;
            
        }

        
        .bt3 {
            
            background-color:green;
            width:200px;
            border-radius:10px;
            padding:15px;

        }
        .bt3 a{
            color:white;
            text-decoration:none;
            
            
        }



    </style>
</head>
<body>
    <header>
    <ul>
            <img src="../img/Mercedes-Benz-Logo.png" alt="">
            <li><a href="../home.php">Home</a></li>
            <li><a href="../Categories.php">Categories</a></li>
            <li><a href="../AboutUs.php">About us</a></li>
            <div style="display:flex;column-gap: 20px;">
            <li><a style="color: red;border-bottom: 3px solid red;border-radius: 5px;padding: 5px;" href="../controller/loginregister/logout.php">Log Out</a></li>
        </div>
        </ul>
    </header>
    

    <div style="text-align:center;">
    <h2 class="">Veturat Ne Shitje :</h2>
    <!-- <button class=""><a href="../controller/loginregister/logout.php">Logout</a></button> -->
    </div>
    <div  class="categories">
    <?php 
    $id_user = $_SESSION['id_u'];
    include '../controller/connect.php';

    $data = mysqli_query($conn, "SELECT * FROM veturat WHERE id_user = '$id_user'");

    while($result=mysqli_fetch_array($data)){ ?>


        <div class="card">
            <img src="../img/<?php echo $result['foto']; ?>" alt="Avatar">
            <div class="container">
                <center>
                <p class="mod"  href="s-class.php" ><?php echo $result['modeli']; ?></p>
                <p> <?php echo $result['pershkrimi']; ?> </p>
                <p>  ID e Vetures : <?php echo $result['id']; ?></p>
                
              <button class="bt1">
                <a href="pageedit.php?id=<?php echo $result['id'] ?> ">Edit</a>
            </button>
            <button class="bt2">
            <a href="../controller/delete.php?id=<?php echo $result['id'] ?> ">Delete</a>
            </button>

            
            </center>
            <br>
            </div>
          </div>
          
    




    <?php
    }
    ?>
</div>
    <div class="categories">
        <div class="carda">
            <div class="container">
            <h4 style="color:white;";>Shto Veturen :</h4>
            <button class="bt3">
                <a  href="pageadd.php">Add</a>
            </button>
            </div>
        </div>
    </div>

    </div>

    <?php
$data = mysqli_query($conn, "SELECT * FROM user WHERE id_user = '$id_user'");

while($db=mysqli_fetch_array($data)){
echo $db['id_user'];
}
?>
</body>
</html>