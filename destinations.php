<?php 
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations-Thuraya</title>
    <meta http-equiv="refresh" content="43200">
    <link rel="stylesheet" href="stylesheet.css"/>
     <style>
      body {
    /* صورة الخلفية */
  background-image: url(destinations1.png) , linear-gradient(to bottom,#160e3f, #271a68, #413389,#8477c4 , #c9c3e8 ) ;
  background-position:  0px 80px ;
  background-repeat: no-repeat;
  background-size: 100%;
}

    .text1{
  position: absolute;
  top: 330px;   /* ينزل شوي من فوق */
  left: 65px;   /* يكون على اليسار */
  font-size: 100px;
  font-weight: bold;
  padding: 15px 25px;
  border-radius: 10px;
  text-shadow: -4px 4px 6px rgb(96, 92, 92);
      }

  .city-images {
  display: grid;
  grid-template-columns: repeat(3, 1fr); /* 3 صور في كل صف */
  gap: 30px; /* مسافة بين الصور */
  justify-items: center; /* توسيط الصور والعناوين */
  margin-top: 40px;
}

.city-images img {
  width: 400px;
  height: 230px;
  border-radius: 10px;
  display: block;
}

.city-images div:hover {
  transform: scale(1.05);
  transition: transform 0.3s;
}

.city-images h3 {
  margin-top: 10px; /* يخلي النص قريب جدًا من الصورة */
  font-size: 20px;
  color: white;
  text-align: left;
}

.city-images a {
  text-decoration: none; /* يشيل الخط من الرابط */
  color:inherit ;
}
    </style>


    
</head>
<body>
    
         
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
    <br><br>
    <!-- الحين تبدا الصفحه-->
    <div class="text1">
     <h1>Destinations</h1>
    </div>

<div style="padding-top: 28%;">

<h2 style="text-align:center;">Saudi Destinations</h1>


<br>

      
    <!--صور المدن -->
  
 <div class="city-images">

    <div>
        <a href="riyadh.php">
          <img src="riyadh.png" alt="Riyadh">
          <h3>Riyadh</h3>
        </a>
      </div>
  
      <div>
        <a href="jeddah.php">
          <img src="jeddah.png" alt="Jeddah">
          <h3>Jeddah</h3>
        </a>
      </div>
  
      <div>
        <a href="Abha.php">
          <img src="Abha.png" alt="Abha">
          <h3>Abha</h3>
        </a>
      </div>
  
      <div>
        <a href="AlUla.php">
          <img src="AlUla.png" alt="AlUla" >
          <h3>AlUla</h3>
        </a>
      </div>
  
      <div>
        <a href="Diriyah.php">
          <img src="Diriyah.png" alt="Diriyah" >
          <h3>Diriyah</h3>
        </a>
      </div>
  
      <div>
        <a href="AlBaha.php">
          <img src="AlBaha.png" alt="AlBaha">
          <h3>AlBaha</h3>
        </a>
      </div>
      
</div>
</div>
  
  



<?php include 'footer.php'; ?>
<?php include 'chatbot.php'; ?>
</body>
</html>