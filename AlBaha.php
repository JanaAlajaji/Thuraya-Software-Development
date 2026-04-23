<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlBaha-Thuraya</title>
    <meta http-equiv="refresh" content="43200">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

    
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
 <!--الحين تبدا صفحة الباحه-->

      <div>
  <img src="bahapic.png" width="100%" height="300">
  
</div>

<div class="city">

<!--الفهرس-->
   <div class="tag"><a href="#About">About AlBaha</a>
     <a href="#hotels">AlBaha hotels</a>
     <a href="#keep">Keep Exploring Saudi</a></div>


    <h1 id="About">About AlBaha</h1>
    <p>Al Baha is a mountain city known for its cool weather, 
        lush forests, and scenic views.<br> It offers visitors a 
        peaceful escape surrounded by nature, traditional villages, 
        and stunning landscapes.</p>
    <hr>
    <br><br>

  <h1 id="hotels">AlBaha hotels</h1>

<div class="hotle-images">

    <div>
        <img src="Bhotle1.png">
        <h3>Cloud city Hotel, Al Baha</h3>
        <p>A cozy resort nestled in the mountains, offering beautiful views,
        comfortable rooms, and traditional Saudi hospitality.</p>
       <button><a href="book.php">Book Hotel</a></button>
        
    </div>

    <div>
        <img src="Bhotle2.png">
        <h3>National Park Hotel, Al Baha</h3>
        <p>Located near the forests, this hotel provides calm surroundings, 
            great amenities, and an authentic Al Baha experience.</p>
       <button><a href="book.php">Book Hotel</a></button>
    </div>
    </div>

<br>
<hr>
<br><br>

  <div class="explore-header" >
      <h2 id="keep">Keep Exploring Saudi</h2>
      <a href="destinations.php">Veiw all</a>
 </div>


  <div class="small-images">

          <div><br>
        <a href="jeddah.php">
        <h3>Jeddah</h3>
          <img src="jeddah.png" alt="Jeddah">
        </a>
      </div>
  
      <div><br>
        <a href="Abha.php">
        <h3>Abha</h3>
          <img src="Abha.png" alt="Abha">
        </a>
      </div>
  
      <div><br>
        <a href="AlUla.php">
        <h3>AlUla</h3>
          <img src="AlUla.png" alt="AlUla" >
        </a>
      </div>

    </div>
    </div>






<?php include 'footer.php'; ?>
<script src="main.js"></script>
</body>
</html>