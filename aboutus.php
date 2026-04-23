<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="43200">
    <title>About Us-Thuraya</title>
    <link rel="stylesheet" href="stylesheet.css">
<style> 
 
body{
 background-image:linear-gradient(to bottom,#160e3f,#160e3f, #271a68, #413389,#8477c4 ) ;
  background-position:  0px 80px ;
  background-repeat: no-repeat;
  background-size: 100%;
}

h4{
  font-style: italic;
  margin-bottom:3px;

}

.home{
  margin: 0 100px;
  padding: 40px;
  min-height: 550px;
}
     
h1 {
  margin-top: 8px; 
  font-size: 45px;
  margin-bottom: 10px; 
}

.p1 {
  margin-top: 20px;
  font-size: 20px;  
  line-height: 1.6; 
  text-align: center;
  color:white;
  max-width: 90%;
  margin: 0 auto;
}

h3{
  font-size: 30px;
  font-style: italic;
  color:#C29696;
  margin-top: 70px;
  line-height: 1.6; 
  text-align: center;
}

/* slider السلايدر */
.about-slider {
    margin-top: -2px;
    max-width: 1000px;
    position: relative;
    margin: auto;
    border-radius: 15px;
    padding: 20px;
    text-align: center;
}

/*ازرار التنقل بين السلايدز */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  background-color: rgba(0,0,0,0.3); 
  z-index: 10;
}

.next {
  right: -60px;
  border-radius: 10px;
}

.prev {
  left: -60px; 
  border-radius: 10px;
}

.prev:hover, .next:hover {
  background-color: #6a1b9a;
}

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
  border-radius: 20px;
  display: block;
}

.goals-grid h3 {
  margin-top: 10px;
  font-size: 20px;
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

h2{
  text-shadow:-4px 4px 6px rgb(96, 92, 92);
}

/* --- Mission & Vision  --- */
.mission-vision-section {
    max-width: 1300px;
    margin: 80px auto;
    padding: 0 20px;
    display: flex;
    flex-direction: column;
    gap: 60px; /* Space between Mission and Vision */
}

.mv-row {
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 40px;
    background-color:#2727275c;
    padding: 30px;
    border-radius: 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.mv-row.reverse {
    flex-direction: row-reverse; /* Flips image to the right */
}

.mv-image {
    flex: 1;
    max-width: 45%;
}

.mv-image img {
    width: 100%;
    height: 300px; /* Fixed height for consistency */
    object-fit: cover; /* Ensures image doesn't stretch weirdly */
    border-radius: 15px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.3);
}

.mv-text {
    flex: 1;
    text-align: left;
    padding: 0 10px;
}

.mv-text h2 {
    font-size: 32px;
    margin-bottom: 15px;
    color: #fff; /* White text for better contrast */
    text-transform: uppercase;
    letter-spacing: 1px;
    border-left: 4px solid #6a1b9a; 
    padding-left: 15px;
}

/* تصميم قسم قصتنا */
.story-box {
    text-align: center;
    padding: 40px;
    margin-bottom: 60px;
}

/* تصميم بطاقة العضو */
.member-card {
    background-color: #2727275c; 
    border-radius: 20px;
    padding: 35px;
    margin-bottom: 40px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    border: 1px solid rgba(255, 255, 255, 0.05);
    color: white;
    width: 100%;
    box-sizing: border-box;
}

/* تقسيم البطاقة إلى جزئين (يمين ويسار) */
.card-grid {
    display: grid;
    grid-template-columns: 1fr 1fr; 
    gap: 40px;
    margin-bottom: 30px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding-bottom: 20px;
    text-align: left; 
}

.info-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.info-list li {
    margin-bottom: 6px;
    color: #fff;
    font-size: 15px;
    position: relative;
    padding-left: 15px;
}

.info-list li::before {
    content: "•";
    color: #6a1b9a;
    font-weight: bold;
    position: absolute;
    left: 0;
}

/* قسم الدور في المشروع (بالأسفل) */
.role-section {
    text-align: center;
    margin-bottom: 25px;
}

.linkedin-btn {
    text-align: center;
    display: inline-block;
    background:  #6a1b9a;
    color: white;
    padding: 10px 30px;
    border-radius: 25px;
    font-weight: bold;
    text-decoration: none;
    transition: 0.3s;
    box-shadow: 0 4px 10px rgba(106, 27, 154, 0.3);
}

.linkedin-btn:hover {
    background: #8055d6ff;
    transform: scale(1.05);
    color: white;
}

  
</style>
</head>
<body>
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
<div class="home">
    <section>
        <h1>About Thuraya</h1><br>
        <div style="left:500;right:500; text-align:center;">
        <p class="p1"><strong>Thuraya:</strong>
         an authentic Arabic name inspired by a cluster of shining stars that symbolize light, guidance, and elevation.<br>
         The name reflects our mission to guide modern travelers toward discovery and connection, just as the stars once<br>
         guided explorers through the night.<br>
         Representing brilliance and aspiration, Thuraya embodies the spirit of Saudi Arabia — a nation whose light<br> 
         continues to inspire the world.<br>
         Thuraya is not just a name; it’s a vision of connection, discovery, and illumination through every journey.<br>
         We aim to reflect the same light that inspires travelers to explore the beauty of Saudi Arabia and beyond.<br>
</p></div>
  </section>

<div class="mission-vision-section">

    <div class="mv-row">
        <div class="mv-image">
            <img src="https://scth.scene7.com/is/image/scth/aroya-crusies-card:crop-600x600?defaultImage=aroya-crusies-card" alt="Our Mission">
        </div>
        <div class="mv-text">
            <h2>Our Mission</h2>
            <p>Our mission is to deliver a smart, fast, and reliable guide that helps every traveler make confident decisions.
                 We focus on providing essential information without the noise—clear details,
               organized content, and a seamless experience that supports visitors in choosing the right destination with ease.</p>
        </div>
    </div>

    <div class="mv-row reverse">
        <div class="mv-image">
            <img src="https://www.arabnews.com/sites/default/files/styles/n_670_395/public/2024/09/22/4526893-335268243.jpg?itok=PifZjRuO" alt="Our Vision">
        </div>
        <div class="mv-text">
            <h2>Our Vision</h2>
            <p>Our vision is to become the most dependable and user-friendly digital reference for discovering Saudi Arabia. 
               We aim to build a platform that travelers trust—simple, intuitive, and always accurate—empowering people to 
               explore the Kingdom effortlessly and with confidence.</p>
        </div>
    </div>

</div>


<!-- Thuraya Features -->
<h3 id="goals" style="font-size:44px">Thuraya Features</h3>
<section class="vision-goals">

  <div class="goals-grid">

    <div>
      <img src="https://scth.scene7.com/is/image/scth/riyadh-banner-new:crop-600x600?defaultImage=riyadh-banner-new" alt="User Friendly">
      <h3>User-Friendly Interface</h3>
      <p>The platform is designed to be intuitive and smooth, allowing every visitor to navigate effortlessly without complications.</p>
    </div>

    <div>
      <img src="https://scth.scene7.com/is/image/scth/jeddah-banner:crop-600x600?defaultImage=jeddah-banner" alt="Easy Account Creation">
      <h3>Easy Sign-Up & Visa Access</h3>
      <p>You can create an account quickly and access visa services with ease, making the process fast, clear, and straightforward.</p>
    </div>

    <div>
      <img src="https://scth.scene7.com/is/image/scth/full-moon-yoga-alula:crop-600x600?defaultImage=full-moon-yoga-alula&fmt=png-alpha" alt="Explore Destinations">
      <h3>Browse All Destinations</h3>
      <p>Explore a wide list of destinations across Saudi Arabia, view details instantly, and discover new places effortlessly.</p>
    </div>

    <div>
      <img src="https://www.vision2030.gov.sa/media/yool0lbj/souda2.jpg" alt="Hotels & Booking">
      <h3>View Hotels & Book Easily</h3>
      <p>Check hotel options, compare details, and complete your booking seamlessly—all from one organized and accessible place.</p>
    </div>

  </div>
</section>
        <h3  style="font-size:44px">Our Story</h3>
        <p class="p1">Thuraya was created as part of an Application Development course project. 
            We noticed that most platforms overwhelm visitors with too much information, so we built a simple, 
            practical guide that delivers the essentials without complexity.</p>

        <p class="p1">Behind every name shines a story. Ours is one of passion, creativity, and pride. 
            <br>We are the  <i style="color:#C29696;font-size:25px;font-weight:bold;">stars </i>  
            that brought Thuraya to life, inspired by Saudi Arabia’s light that guides and uplifts the world.
        </p>

    <h3 style="font-size:44px">Meet The Stars</h3><br>

    <div class="about-slider">
        
        <div class="member-card mySlide">
            <div class="card-grid">
                <div class="left-col">
                    <h3 style="margin-top:0px;">Jana Alajaji</h3>
                    <h4>Short Bio</h4>
                    <p>
                 I’m Jana Alajaji, a Computer Information Systems student with a passion for discovering new technologies and solving real-world problems.
                 I love diving into challenges, learning fast, and turning ideas into practical digital solutions. 
                 Leading projects and collaborating with teams motivates me to push boundaries and bring out the best in myself and others.
                 My curiosity and determination drive me to explore cybersecurity and innovate in every project I take on.</p>
                </div>

                <div class="right-col">
                    <div style="margin-bottom: 20px;">
                        <h4>Professional Interests</h4>
                        <ul class="info-list">
                            <li>Cybersecurity & Ethical Hacking</li>
                            <li>Web Development</li>
                            <li>Tech Innovation & System Design</li>
                        </ul>
                    </div>
                    <div>
                        <h4>Education & Courses</h4>
                        <ul class="info-list">
                            <li>Major:Computer Information Systems, 3rd Year, IMSIU.</li>
                            <li>HTML & CSS – Tuwaiq</li>
                            <li>Excel – IBM</li>
                            <li>Python – KAUST</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="role-section">
                <h4>Experience in This Project</h4>
                <p>
           I led this project, coordinating our team and ensuring we stayed on track.
            I constantly engaged in self-learning, researching new techniques and solutions on YouTube and other resources 
           to help us improve our project. This approach allowed me to guide the team in developing the best possible version 
           of our work. Through this experience, I strengthened my leadership, teamwork, and technical skills, and gained confidence 
           to tackle bigger projects in the future. </p>
            </div>

            <div class="linkedin-wrapper">
                <a href="https://www.linkedin.com/in/jana-alajaji" target="_blank" class="linkedin-btn">Visit LinkedIn</a>
            </div>
        </div>

        <div class="member-card mySlide">
            <div class="card-grid">
                <div class="left-col">
                    <h3 style="margin-top:0px;">Shahad Alotaibi</h3>
                    <h4>Short Bio</h4>
                    <p>I am shahad alotaibi information systems student in my third year. I enjoy Creativity and teamwork.
                          I have strong skills in time management,
                          collaboration and meeting deadlines. Passionate about constantly expanding my experiences in my field.</p>
                </div>

                <div class="right-col">
                    <div style="margin-bottom: 20px;">
                        <h4>Professional Interests</h4>
                        <ul class="info-list">
                            <li>Web Development & Programming</li>
                            <li>Artificial Intelligence (AI)</li>
                            <li>Data Analysis & Design</li>
                        </ul>
                    </div>
                    <div>
                        <h4>Education & Courses</h4>
                        <ul class="info-list">
                            <li>Major:Computer Information Systems, 3rd Year, IMSIU.</li>
                            <li>Dart, Python, Cloud Computing</li>
                            <li>Data Analysis </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="role-section">
                 <h4>Experience in This Project</h4>
                <p>Through this project, I gained experience in working with multiple programming languages. 
                   I understood how to build both the front-end and back-end and connect them to a database. 
                   I developed a clearer understanding of how real systems function and how each layer of an application depends on the other. 
                   I learned patience, improved my teamwork and communication skills, and became more confident in solving unexpected problems on my own. 
                   This project pushed me out of my comfort zone. I stayed up many nights fixing issues, redesigning pages, and making sure everything worked smoothly. 
                   It taught me how to manage my time, commit to details, and deliver work that I’m genuinely proud of. </p>
            </div>

            <div class="linkedin-wrapper">
                <a href="https://www.linkedin.com/in/shahadalotaibi1" target="_blank" class="linkedin-btn">Visit LinkedIn</a>
            </div>
        </div>

        <div class="member-card mySlide">
            <div class="card-grid">
                <div class="left-col">
                    <h3 style="margin-top:0px;">Shatha Alsahli</h3>
                    <h4>Short Bio</h4>
                    <p>My name is Shatha alsahli, a third-year Information Systems student. I work in a focused and organized way, and 
                       I enjoy learning new technologies step by step.
                        One of my strengths is solving problems calmly and improving my work with every attempt. </p>
                </div>

                <div class="right-col">
                    <div style="margin-bottom: 20px;">
                       <h4>Professional Interests</h4>
                        <ul class="info-list">
                            <li>Web Development</li>
                            <li>Business Analysis</li>
                            <li>UI/UX Improvement</li>
                        </ul>
                    </div>
                    <div>
                        <h4>Education & Courses</h4>
                        <ul class="info-list">
                            <li>Major:Computer Information Systems, 3rd Year, IMSIU.</li>
                            <li>HTML, CSS, PHP, JavaScript Projects</li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="role-section">
                <h4>Experience in This Project</h4>
                <p>Through this application development project, I learned how to connect different web technologies together and build
                     a complete system. The experience helped me understand real problems in coding, how to fix errors, and how to improve the user interface. 
                   It added confidence to my skills and made me more comfortable working with HTML, CSS, PHP, and JavaScript.</p>
            </div>

            <div class="linkedin-wrapper">
                <a href="https://www.linkedin.com/in/shatha-alsahli-8b9972381" target="_blank" class="linkedin-btn">Visit LinkedIn</a>
            </div>
        </div>

        <a class="prev" onclick="plusSlides1(-1)">❮</a>
        <a class="next" onclick="plusSlides1(1)">❯</a>
    </div> 

<script>
let sldindx = 1;
showSlidesabout(sldindx);

function plusSlides1(n) {
  showSlidesabout(sldindx += n);
}

function showSlidesabout(n) {
  let slides = document.getElementsByClassName("mySlide");
  if (n > slides.length) sldindx = 1;
  if (n < 1) sldindx = slides.length;

  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }

  if (slides.length > 0) {
      slides[sldindx - 1].style.display = "block";
  }
}
</script>


<h3 id="goals" style="font-size:44px">Our Team Values</h3>
<section class="vision-goals">

  <div class="goals-grid">

    <div style="padding: 50px;">
    <h3 style="font-size:27px">Responsibility</h3>
    </div>

    <div style="padding: 50px;">
      <h3 style="font-size:27px">Efficiency</h3>
    </div>

    <div style="padding: 50px;">
    <h3 style="font-size:27px">Commitment</h3>
    </div>

    <div style="padding: 50px;">
        <h3 style="font-size:27px">Collaboration </h3>
    </div>

  </div>

</section>

 </div>
<?php include 'footer.php'; ?>
 <?php include 'chatbot.php'; ?>
</body>
</html>
