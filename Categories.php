<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories | Mercedes </title>
    <link rel="icon" href="logoM-removebg.png">
    <link rel="stylesheet" href="style/global.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <?php include 'includes/menu.php' ; ?>
    </header>


    <br>
    <br>


    <div style="display: flex;flex-direction: row;justify-content: space-around;flex-wrap:wrap;align-content: space-around;row-gap: 20px;" class="categories">
        <div style="border: 3px solid white;width: 600px;border-radius: 10px;" class="card">
            <img style="width: 600px;" src="img/sclass.webp" alt="Avatar" style="width:100%">
            <div  class="container">
                <center>
                <a style="color: white;text-decoration: none;" href="s-class.php" ><b>S Class Model</b></a>
                <p style="color: white;;">S350 , S400 , S500 , S63</p>
            </center>
            </div>
          </div>

          <div style="border: 3px solid white;width: 600px;border-radius: 10px;" class="card">
            <img style="width: 600px;" src="img/cclass.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <center>
                <a href="#" style="color: white;text-decoration: none;"><b>C Class Model</b></a>
                <p style="color: white;">C200 , C220 , C400 , C500 , C63</p>
            </center>
            </div>
          </div>

          <div style="border: 3px solid white;width: 600px;border-radius: 10px;" class="card">
            <img style="width: 600px;" src="img/eclass.jpg" alt="Avatar" style="width:100%">
            <div class="container">
                <center>
                <a href="#" style="color: white;text-decoration: none;"><b>E Class Model</b></a>
                <p style="color: white;">E200 , E220 , E400 , E500 , E63</p>
            </center>
            </div>
          </div>

          <div style="border: 3px solid white;width: 600px;border-radius: 10px;" class="card">
            <img style="width: 600px;" src="img/gclass.jpg" alt="Avatar" style="width:100%">
            <div  class="container">
                <center>
                <a style="color: white;text-decoration: none;" href="#"><b>G Class Model</b></a>
                <p style="color: white;"> G400 , G500 , G63</p>
            </center>
            </div>
          </div>
          
    </div>
    <br>
    <br>

    <footer style="background-color: black; border-top: 1px solid gray;">
        <p style="color: white; text-align: center;">All rights reserved © </p>
    </footer>


</body>
</html>