<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeddah-Thuraya</title>
    <meta http-equiv="refresh" content="43200">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

    
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
    <!--الحين تبدا صفحة جده-->

  <div>
  <iframe width="100%" height="400" src="https://www.youtube.com/embed/sS4Dm27H64E?autoplay=1&mute=1&loop=1&playlist=sS4Dm27H64E" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="display:block;"></iframe>
  </div>

<div class="city">
<!--الفهرس-->
   <div class="tag"><a href="#About">About Jeddah</a>
     <a href="#hotels">Jeddah hotels</a>
     <a href="#keep">Keep Exploring Saudi</a></div>

    <h1 id="About">About Jeddah</h1>
    <p>Jeddah, the gateway to Makkah, is a lively coastal city known for its stunning Red Sea views,
         luxury resorts, and historical charm.<br> It’s a blend of modern culture and ancient heritage, 
         offering visitors a taste of Saudi Arabia’s cosmopolitan life and traditional roots.</p>
    <hr>
    <br><br>

    <h1 id="hotels">Jeddah hotels</h1>

    <div class="hotle-images">

    <div>
        <img src="Jhotle1.png">
        <h3>Jeddah Hilton</h3>

        <p>A world-class beachfront hotel offering elegant rooms, 
        worldwide dining, and beautiful views of the Red Sea.</p>

       <button><a href="book.php">Book Hotel</a></button>
        
    </div>

    <div>
        <img src="Jhotle2.png">
        <h3>Rosewood Jeddah</h3>

        <p>A luxury hotel located on the Corniche, featuring modern rooms,
         fine dining, and a rooftop pool with breathtaking sea views.</p>

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
        <a href="AlBaha.php">
        <h3>AlBaha</h3>
          <img src="AlBaha.png" alt="AlBaha">
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