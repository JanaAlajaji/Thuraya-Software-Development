<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery-Thuraya</title>
    <meta http-equiv="refresh" content="43200">
    <link rel="stylesheet" href="stylesheet.css">
    <style>
  .city-images {
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* 3 صور في كل صف */
  row-gap: 50px;
  column-gap: 50px; 
  justify-items: center; /* توسيط الصور والعناوين */
  margin-top: 60px;
  padding-left: 5%;
  padding-right:5%;
}

.city-images img {
  width: 500px;
  height: 350px;
  border-radius: 10px;
  display: block;
}

.city-images figure:hover {
  transform: scale(1.05);
  transition: transform 0.3s;
}

.city-images h3 {
  margin-top: 2px; /* يخلي النص قريب جدًا من الصورة */
  font-size: 15px;
  color: white;
  text-align: center;
  font-style: italic;
  font-weight: lighter;
}

    </style>
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
    <!--يبدأ المعرض-->
<div>
  <iframe width="100%" height="400" src="https://www.youtube.com/embed/QC2AiSTqQiI?autoplay=1&mute=1&loop=1&playlist=QC2AiSTqQiI" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="display:block;"></iframe>
</div>

<div class="city-images">

  
  <figure>
    <img src="https://www.aljazeera.net/wp-content/uploads/2023/08/GettyImages-608759913-1691054306.jpg?resize=770%2C513&quality=80" alt="Empty Quarter">
    <figcaption><h3>Empty Quarter</h3></figcaption>
  </figure>

  <figure>
    <img src="https://soulofsaudi.com/wp-content/uploads/2024/12/Hero-8.png" alt="The Edge of the World">
    <figcaption><h3>The Edge of the World</h3></figcaption>
  </figure>

  <figure>
    <img src="https://www.sfari.com/wp-content/uploads/2022/04/-%D8%A7%D9%86%D8%B4%D8%B7%D8%A9-%D9%81%D9%8A-%D9%88%D8%A7%D8%AF%D9%8A-%D8%AD%D9%86%D9%8A%D9%81%D8%A9-%D8%A8%D8%A7%D9%84%D8%B1%D9%8A%D8%A7%D8%B6-e1649707185805.jpg" alt="Wadi Hanifah">
    <figcaption><h3>Wadi Hanifah</h3></figcaption>
  </figure>

  <figure>
    <img src="https://cnn-arabic-images.cnn.io/cloudinary/image/upload/w_640,c_scale,q_auto/cnnarabic/2022/12/30/images/229572.jpg" alt="Jabal al-Lawz">
    <figcaption><h3>Jabal al-Lawz</h3></figcaption>
  </figure>

</div>






<?php include 'footer.php'; ?>
<?php include 'chatbot.php'; ?>
</body>
</html>