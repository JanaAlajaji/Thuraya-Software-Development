<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diriyah-Thuraya</title>
    <meta http-equiv="refresh" content="43200">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

   
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
 <!--الحين تبدا صفحة الدرعيه-->

     <div>
  <iframe width="100%" height="400" src="https://www.youtube.com/embed/3sLXb1rxNAg?autoplay=1&mute=1&loop=1&playlist=3sLXb1rxNAg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="display:block;"></iframe>

</div>

<div class="city">

<!--الفهرس-->
   <div class="tag"><a href="#About">About Diriyah</a>
     <a href="#hotels">Diriyah hotels</a>
     <a href="#keep">Keep Exploring Saudi</a></div>

    <h1 id="About">About Diriyah</h1>
    <p>Diriyah, the birthplace of the Saudi state, 
        is a UNESCO World Heritage Site known for its traditional 
        Najdi architecture and rich history. <br>
        It’s being transformed into a cultural and luxury
         destination blending the old and the new.</p>
    <hr>
    <br><br>

  <h1 id="hotels">Diriyah hotels</h1>

<div class="hotle-images">

    <div>
        <img src="Dhotle1.png">
        <h3>Bab Samhan Hotel, Diriyah</h3>
        <p>A luxurious hotel located near At-Turaif, combining
             modern elegance with the charm of Saudi heritage.</p>
       <button><a href="book.php">Book Hotel</a></button>
        
    </div>

    <div>
        <img src="Dhotle2.png">
        <h3>The Ritz-Carlton, Diriyah</h3>
        <p>A five-star hotel offering premium services, fine dining,
             and a unique atmosphere inspired by Diriyah’s heritage.</p>
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