<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME-Thuraya</title>
    <meta http-equiv="refresh" content="43200">
    <link rel="stylesheet" href="stylesheet.css">

    <style>

body{
  background-image:url(BAckGG.jpg),linear-gradient(to bottom,#160e3f,#160e3f, #271a68, #413389,#8477c4 ) ;
  background-position:  0px 80px ;
  background-repeat: no-repeat;
  background-size: 100%;
}

  /*الفهرس*/
.tag {
  padding-top: 30px;
  text-align: center;
  color: #B4B4B4;
  border-bottom: 1px solid #B4B4B4; /* الخط السفلي */
  padding-bottom: 8px;
  margin-bottom: 50px;
}

.tag a {
  text-decoration: none;
  font-size: 18px;
  font-weight: 500;
  padding-bottom: 8px;
  transition: color 0.3s ease;
  color:#717171;
}

.tag a:hover {
  color: #6a1b9a;
  border-bottom: 1px solid #6a1b9a;
}

.home{
  margin: 0 100px;
  padding: 40px;
  min-height: 550px;
 /* background-color: #726dbc;/*لون الخلفية*/
 /* border-inline: 10px solid #ece0e0; /* لون الخط وعرضه ونوعه الي باليمين واليسار */
}
     
h1 {
  margin-top: 0px; 
  font-size: 48px;

}

.p1 {
  margin-top: 20px;
  font-size: 25px;  
  line-height: 1.6; 
  text-align: center;
}

h3{
  font-size: 30px;
  font-style: italic;
  color:#C29696;
  margin-top: 70px;
  line-height: 1.6; 
  text-align: center;
}

iframe {
  width: 100%;      
  max-width: 800px; 
  height: 500px;    
  display: block;
  margin: 20px auto; 
  border: none;      
  border-radius: 10px; 
  margin-bottom: 15px;
}

/* السلايدر الاول حق الصورfirst slider  */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.slideshow-container img{
  border-radius: 10px;
}

/*second slider السلايدر الثاني*/
.about-slider {
    margin-top: -2px;
    max-width: 1000px;
    position: relative;
    margin: auto;
  background-color: #2727275c;
    border-radius: 15px;
    padding: 20px;
    text-align: center;
    box-shadow: 0 3px 10px rgba(0,0,0,0.15);
}
/*ازرار التنقل بين السلايدز */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  transition: 0.6s ease;
  border-radius: 10px;
}
.next {
  right: 0px;
}
.prev {
  left: 0px; 
}
.prev:hover, .next:hover {
  background-color: #231257;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 20px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/*--------- Vision 2030 Goals Section ---------*/

.vision-goals {
  margin-top: 60px;
  align-items: center;
  text-align: center;
}

.goals-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(285px, 1fr)); /* Responsive Grid */
  gap: 20px;
  justify-items: center;
  margin-top: 20px;
  max-width: 1200px;
  margin-left: auto;
  margin-right: auto;
}

.goals-grid div {
  background-color:#2727275c;
  border-radius: 10px;
  max-width: 310px;
  text-align: center;
  padding-bottom: 20px;
  transition: transform 0.3s;
}

.goals-grid div:hover {
  transform: scale(1.10); 
}

.goals-grid img {
  width: 100%;
  border-radius: 10px 10px 0 0;
  display: block;
}

.goals-grid h3 {
  margin-top: 10px;
  font-size: 25px;
  color:white;
  font-weight: bold;
  text-shadow: -4px 4px 6px rgb(96, 92, 92);}

.goals-grid p {
  font-size: 17px;
  padding: 0 10px;
  margin-top: 5px;
  line-height: 1.4;
  color: #c2bbbb;
}

a{
  text-decoration: none;
  font-size: 18px;
  padding-bottom: 8px;
  transition: color 0.3s ease;
  color:#9d7ab2;
}

h2{
  text-shadow:-4px 4px 6px rgb(96, 92, 92);
}

.text1{
  position: absolute;
  top: 330px;   /* ينزل شوي من فوق */
  left: 65px;   /* يكون على اليسار */
  font-size: 100px;
  font-weight: bold;
  padding: 15px 25px;
  color: #160e3f;
  border-radius: 10px;
  text-shadow: -4px 4px 6px rgb(96, 92, 92);
      }

/* حاوية صندوق التعليقات لضمان التوسيط */
.feedback-section {
    text-align: center;
    padding: 50px 20px;
    margin: 40px auto;
    max-width: 800px;
}

/* ستايل مربع النص نفسه */
.feedback-textarea {
    width: 100%;
    max-width: 700px;
    background-color:#2727275c;; /* شفافية تناسب خلفية الموقع */
    color: white;
    border-radius: 20px; /* أطراف مدورة بشكل واضح */
    padding: 20px;
    font-size: 18px;
    resize: none; /* لمنع المستخدم من تغيير الحجم وتخريب التصميم */
    outline: none;
}

/* زر الإرسال */
.feedback-btn {
    display: block;
    margin: 20px auto 0;
    padding: 12px 35px;
    font-size: 18px;
    font-weight: bold;
    background-color: #311976;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: 0.3s;
}

.feedback-btn:hover {
    background-color: #2E887F;
}

.Hwelcome {
   font-size: 14px;
   font-weight: bold;
   color: #ffffff;
   text-shadow: 2px 2px 4px #9f96ceff;
   
}

    </style>
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
    <div class="text1">
     <h1>Thuraya</h1>
    </div>



 <!--الفهرسس-->

    <div class="tag" style="padding-top: 34%;">
     <a href="#goals">Saudi Vision 2030 Goals</a>
     <a href="#map">Explore Saudi on the Map</a>
     <a href="#feedback">Users Feedback</a></div>

 <!--  حق ولكم -->
<div class="home">
    <section>
        <h1> Welcome to Thuraya</h1><br>
        <p class="p1">
    Where light guides your journey through Saudi Arabia.<br>
    Thuraya is your student gateway to discovering the Kingdom’s 
    most inspiring destinations and unique tourism experiences   </p>
  </section>
<br><br><br>
   <!-- slider -->
<div class="slideshow-container">
  <div class="mySlidesFirst"> <img src="https://www.visitsaudi.com/content/dam/wvs/stories/AlUla-Al-Gharameel-resized.jpg" style="width:100%">
    <div class="text">Stars - AlUla </div>
  </div>

  <div class="mySlidesFirst">
    <img src="https://www.visitsaudi.com/content/dam/wvs/stories/AlUla-Balloon-resized.jpg" style="width:100%">
    <div class="text">Hot Air Ballons - AlUla</div>
  </div>

  <div class="mySlidesFirst">
    <img src="https://www.visitsaudi.com/content/dam/wvs/stories/cave-diving-first-card-desktop.jpg" style="width:100%">
    <div class="text">Red sea - jeddah</div>
  </div>

  <a class="prev" onclick="plusSlidesFirst(-1)">❮</a>
  <a class="next" onclick="plusSlidesFirst(1)">❯</a>
</div>
<br>


<!--saudi vison 2030-->
  <h3 id="goals">Saudi Arabia Vision 2030 Goals</h3>
  <section class="vision-goals">

  <div class="goals-grid">

    <div>
      <img src="https://economymiddleeast.com/cdn-cgi/imagedelivery/Xfg_b7GtigYi5mxeAzkt9w/economymiddleeast.com/2023/10/Saudi-tourist-arrivals_5111675_7300687_4993073_2810282_7537209_3806718_5717848.jpg/w=1200,h=800" alt="Tourism Growth">
      <h3>Tourism Growth</h3>
      <p>Supporting Saudi Arabia’s vision to increase tourism attractions and enhance visitor experiences.</p>
    </div>

    <div>
      <img src="https://www.visitsaudi.com/content/dam/wvs/stories/AlUla-Jabal-Ikmah-Rock-resized.jpg" alt="Culture & Heritage">
      <h3>Culture & Heritage</h3>
      <p>Preserving Saudi identity through showcasing heritage, arts, and cultural landmarks.</p>
    </div>

    <div>
      <img src="https://blog.wheelsbikes.com/wp-content/uploads/2023/11/Exploring-the-Most-Famous-Bicycle-Races-Worldwide-and-in-Saudi-Arabia.webp" alt="Quality of Life">
      <h3>Quality of Life</h3>
      <p>Enhancing the well-being of residents and visitors through improved services and facilities.</p>
    </div>

       <div>
      <img src="https://spcdn.shortpixel.ai/spio/ret_img,q_cdnize,to_webp,s_webp/soulofsaudi.com/wp-content/uploads/2025/05/AD_4nXdSQbxUjE_IJPUcu7irp9g555nng-kXl9aqxmE8ZAdyWVFIUGuuOnAG_DI9sMcyINKMIPlpplYG5vT79D1Mn5RlYl67hJxgb7bXwrHDvlsQ7mTu-2qiW-PgO8BL-6j23RXbgwq31w.png" alt="Smart Destinations">
      <h3>Smart Destinations</h3>
      <p>Innovative destinations that use modern technologies to offer interactive, and efficient visitor experiences.</p>
    </div>


  </div>
</section>

  <!-- حقت الماب -->
   <section id="map">
<h3>Explore Saudi Arabia on the Map</h3>
  <p class="p1" >
    Click and drag the map to explore major cities and landmarks across the Kingdom.
  </p>

  <!-- Embedded Google Map -->
  <iframe
    title="Saudi Arabia Map"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2178331.0408696266!2d44.091!3d23.8859!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15e8c1c8e2e27e47%3A0x3d14795e8b44d6a3!2sSaudi%20Arabia!5e0!3m2!1sen!2ssa!4v1697213650000!5m2!1sen!2ssa"
    loading="lazy"
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>

  </section>

<section class="feedback-section">
    <h3 style="margin-top: 0;">Share your feedback with Thuraya</h3>
    <p class="p1" style="font-size: 18px; color: #c2bbbb; margin-bottom: 20px;">We would love to hear about your experience!</p>
    
    <form action="feedbackPHP.php" method="POST">
        <textarea name="comment_text" class="feedback-textarea" rows="8" placeholder="Share your experience here........." required></textarea>
        <button type="submit" name="submit_feedback" class="feedback-btn">Send Feedback</button>
    </form>
</section>

<section id="feedback">
    <h3 style="margin-top: 0;">Users Feedback</h3>
    <br>
    <div class="about-slider">
<?php
$conn = mysqli_connect("localhost", "root", "", "Thuraya_DB");
// جلب التعليقات من جدول users (الاسم الصحيح  )
$query = "SELECT first_name, feedback FROM users 
          WHERE feedback IS NOT NULL AND feedback != '' ";
$result = mysqli_query($conn, $query);

if ($result && mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="mySlideFeedback">';
    
    echo '<p style="color:#ccc; font-size:16px; padding:0 50px; margin-bottom:10px; ">
            — ' . htmlspecialchars($row['first_name']) . '
          </p>';
    
    echo '<p style="color:white; font-size:20px; font-style:italic; padding:0 50px;">
            "' . htmlspecialchars($row['feedback']) . '"
          </p>';
    
    echo '</div>';
}

} else {
    echo '<div class="mySlideFeedback"><p style="color: white;">No feedback yet.</p></div>';
}
?>
        <a class="prev" onclick="plusSlidesFeedback(-1)">❮</a>
        <a class="next" onclick="plusSlidesFeedback(1)">❯</a>
    </div>
</section>

 </div>
<?php include 'footer.php'; ?>
 <!--for slider-->

<script>
// --- first slider
let slideIndexFirst = 1;
showSlidesFirst(slideIndexFirst);

function plusSlidesFirst(n) {
    showSlidesFirst(slideIndexFirst += n);
}

function showSlidesFirst(n) {
    let slides = document.getElementsByClassName("mySlidesFirst");
    if (n > slides.length) {slideIndexFirst = 1}
    if (n < 1) {slideIndexFirst = slides.length}
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndexFirst-1].style.display = "block";
}

// --- feedback
let slideIndexFeedback = 1;
showSlidesFeedback(slideIndexFeedback);

function plusSlidesFeedback(n) {
    showSlidesFeedback(slideIndexFeedback += n);
}

function showSlidesFeedback(n) {
    let slides = document.getElementsByClassName("mySlideFeedback");
    if (slides.length === 0) return; 
    if (n > slides.length) {slideIndexFeedback = 1}
    if (n < 1) {slideIndexFeedback = slides.length}
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slides[slideIndexFeedback-1].style.display = "block";
}
</script>

<?php include 'chatbot.php'; ?>
</body>
</html>

