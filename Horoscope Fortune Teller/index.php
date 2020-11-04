<?php
    // imports
    require 'Zodiac.php'; 

    //main
    $date = $_GET['date']; // string 2012-10-25 from the url
    $zodiac = new Zodiac($date); //new object for Zodiac class
    

    $mysign = $zodiac->findSign();
   
    $fortune = $zodiac->findFortune();

    $image_url= "images/.png";

    ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your horoscope</title>
    <style>
     html, body{
        margin: 0;
        padding: 0;
      }
    body{
        min-height: 100vh; 
      }
    h1, h2{
        margin: 0;
      }
     
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
      text-align: center;
      }
     
    .date{
      text-align: center;
        padding-top: 200px;
        color: black;

    }   
    .my sign is{
        text-align: center;
        padding-top: 20px;
        color: black;
      }
    .your fortune{
        text-align: center;
        padding-top: 20px;
        color: black;      
        }
  
    .img{
      display: block;
  margin-left: auto;
  margin-right: auto;
  text-align: center;
    }
  </style>
  </head>
  <body>
  <div class="center">
  <h1 class="img"> <img src="<?php echo  $mysign['image_url'];?>" width="300px" height="300px" text-alignment="center" ></h1>
  <h1 class="Date"><?php echo "Date: " .$date;?></h1>
  <h1 class="my sign is"><?php echo "Your Zodiac sign is " .$mysign['name']." ".$mysign['unicode']; ?>!</h1>
  <h1 class="Your fortune"><?php echo "Your Fortune: ".$fortune;?></h1>
  </div>
</body>
</html>