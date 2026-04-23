<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlUla-Thuraya</title>
    <meta http-equiv="refresh" content="43200">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

    
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
 <!--الحين تبدا صفحة العلا-->

     <div>
  <iframe width="100%" height="400" src="https://www.youtube.com/embed/nY67xLV8_3A?autoplay=1&mute=1&loop=1&playlist=nY67xLV8_3A" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="display:block;"></iframe>

</div>

<div class="city">

<!--الفهرس-->
   <div class="tag"><a href="#About">About AlUla</a>
     <a href="#hotels">AlUla hotels</a>
     <a href="#keep">Keep Exploring Saudi</a></div>

    <h1 id="About">About AlUla</h1>
    <p >AlUla is a stunning desert destination known for its ancient heritage, 
        sandstone mountains, and the UNESCO World Heritage Site of Hegra.<br>
        It offers visitors a unique mix of history, culture, and breathtaking landscapes.</p>
    <hr>
    <br><br>

    <h1 id="hotels">AlUla hotels</h1>

    <div class="hotle-images">

    <div>
        <img src="Uhotle1.png">
        <h3>Our Habitas, AlUla</h3>
        <p>A luxurious eco-resort blending modern comfort with the beauty of
        AlUla’s desert landscape. Perfect for those seeking peace and nature.</p>
       <button><a href="book.php">Book Hotel</a></button>
        
    </div>

    <div>
        <img src="Uhotle2.png">
        <h3>Shaden Resort, AlUla</h3>
        <p>A beautiful resort surrounded by mountains, offering luxury villas, pools, 
        and stunning sunset views of the desert landscape.</p>
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
        <a href="Diriyah.php">
        <h3>Diriyah</h3>
          <img src="Diriyah.png" alt="Diriyah" >
        </a>
      </div>
      
    </div>
    </div>
    



<?php include 'footer.php'; ?>
<script src="main.js"></script>
</body>
</html>