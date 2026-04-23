<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riyadh-Thuraya</title>
    <meta http-equiv="refresh" content="43200">
    <link rel="stylesheet" href="stylesheet.css">
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
    <!--الحين تبدا الصفحه حقت الرياض-->
    <div>
  <iframe width="100%" height="400" src="https://www.youtube.com/embed/0NgDthdMwIg?autoplay=1&mute=1&loop=1&playlist=0NgDthdMwIg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="display:block;"></iframe>

  
</div>

    <div class="city">

<!--الفهرس-->
   <div class="tag"><a href="#About">About Riyadh</a>
     <a href="#hotels">Riyadh hotels</a>
     <a href="#keep">Keep Exploring Saudi</a></div>

    

    <h1 id="About">About Riyadh</h1>
    <p >Riyadh combines ancient history with modern dynamism, offering a glimpse into Arabia’s past and future.<br>
     Explore the city's rich heritage through souqs, museums, and historical architecture, and experience its modern
     side with high-rises and a thriving art scene, highlighted by the Riyadh Art initiative that turns the city into
    an open-air gallery.</p>
    <hr>
    <br><br>

    <h1 id="hotels">Riyadh hotels</h1>

    <div class="hotle-images">

     <div>
         <img src="Rhotle1.png" >
        <h3> Ritz-Carlton, Riyadh</h3> 
        <p>A luxurious hotel offering world-class hospitality, 
        elegant rooms, fine dining, and exceptional service.</p>

       <button><a href="book.php">Book Hotel</a></button>
        </div>

     <div>
        <image src="Rhotle2.png">
        <h3> Narcissus Hotel & Spa, Riyadh</h3>

      <p>A boutique hotel featuring elegant interiors,
        gourmet restaurants, and a relaxing spa.
        perfect for business and leisure travelers in Riyadh.</p>

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