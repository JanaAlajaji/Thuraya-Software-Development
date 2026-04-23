<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Abha-Thuraya</title>
    <meta http-equiv="refresh" content="43200">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

 
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
        <!--الحين تبدا صفحة ابها-->

     <div>
  <img src="Abhapic.png" width="100%" height="300">

  
</div>

<div class="city">

<!--الفهرس-->
   <div class="tag"><a href="#About">About Abha</a>
     <a href="#hotels">Abha hotels</a>
     <a href="#keep">Keep Exploring Saudi</a></div>

    <h1 id="About">About Abha</h1>
    <p>Abha, known as the city of fog, is a beautiful mountain destination in southern Saudi Arabia.<br> 
        With its cool climate, lush green landscapes, and rich Asiri culture, Abha offers a peaceful escape 
        filled with breathtaking views and traditional charm.</p>
    <hr>
    <br><br>

  <h1 id="hotels">Abha hotels</h1>

<div class="hotle-images">

    <div>
        <img src="Ahotle1.png">
        <h3>Citadines Abha Hotel</h3>
        <p>a modern hotel. It features stylish rooms, a fitness center,
         outdoor pool, sauna and free wifi. ideal for both short
         and long stays.</p>
        <button><a href="book.php">Book Hotel</a></button>
        
    </div>

    <div>
        <img src="Ahotle2.png" width="300">
        <h3>Abha Palace Hotel</h3>
        <p>One of Abha’s most iconic hotels, located by the lake, offering
        luxurious rooms, stunning views, and a traditional Arabian design.</p>
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
        <a href="riyadh.php">
        <h3>Riyadh</h3>
          <img src="riyadh.png" alt="Riyadh">
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