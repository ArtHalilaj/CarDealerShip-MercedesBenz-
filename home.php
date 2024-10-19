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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Mercedes</title>
    <link rel="stylesheet" href="style/global.css">
    <link rel="icon" href="logoM-removebg.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    
    <header>
        <?php include 'includes/menu.php' ; ?>
    </header>

    

    <main style="background-image: url('img/back.png');">
        <center><br>
            <br>
            
        <img id="mfoto1" name="slide" width="1150" height="750" />
    </center>
    </main>


    <div>
 
        <img id="mfoto" src="img/merc.png" alt="">
        
    </div>
   

    <div style="background-color: white; display: flex; justify-content: space-evenly;align-items: center;">
        <h3 id="teksti1" style="font-weight: lighter;">-The
            most
            valuable
            car
            of
            the
            world <br>
            sold
            for
            a
            record
            price
            to 
            benefit
            the <br>
            Mercedes-Benz Fund.
            </h3>
        <img id="mfoto2" style="width: 600px;" src="img/benz.png" alt="">
    </div>

    <div style="background-color: white;display: flex;justify-content: space-between;align-items: center;">
        <img id="foto3" src="img/cars.png" alt="">
        <h2 id="teksti2" style="font-weight: lighter;">Experience the automotive fascination of Mercedes-Benz.</h2>
    </div>

    <footer style="background-color: black;">
        <p style="color: white; text-align: center;">All rights reserved © </p>
    </footer>




    <script>
        
        var i = 0; 			// Start Point
var images = [];	// Images Array
var time = 3000;	// Time Between Switch
	 
// Image List
images[0] = "img/s-class.png";
images[1] = "img/c-class.png";
images[2] = "img/e-class.png";
images[3] = "img/g-class.png";

// Change Image
function changeImg(){
	document.slide.src = images[i];

	// Check If Index Is Under Max
	if(i < images.length - 1){
	  // Add 1 to Index
	  i++; 
	} else { 
		// Reset Back To O
		i = 0;
	}

	// Run function every x seconds
	setTimeout("changeImg()", time);
}

// Run function when page loads
window.onload=changeImg;
    </script>
</body>
</html>