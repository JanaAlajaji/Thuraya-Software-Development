<?php 
session_start();
 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login- Thuraya</title>
    <link rel="stylesheet" href="stylesheet.css">
 
  <style>
  
     
    .ph3 {
      margin-top: 30px;
      text-align: center;
      color: white;
      font-size: 20px;
      font-weight: 500;
      text-shadow: 2px 2px 4px ;
    }

    form {
      background: white;
      width: 350px;
      margin: 40px auto;
      padding: 25px;
      border-radius: 10px;
      text-align: center;
      text-shadow: 2px 2px 6px rgba(45, 21, 111, 0.8);
    }

    input {
      width: 90%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #aaa;
      border-radius: 5px;
    }

    input[type="submit"] {
      background-color: #311976;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #2E887F;
    }

    .text1 h1 {
      text-align: center;
      color: white;
      font-family: 'Theo Van Doesburg', sans-serif;
      font-size: 70px;
      margin-top: 100px;
    }

    
    body {
      background-image: url('riyadhtower.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-position: center;
    }

    .text-center { text-align: center; }

  .link{
      font-weight: bold;
      color: #bdacf1;
    }

.background1{
    margin: 0 auto;
    margin-top: 10px;
    width: 420px;
    background-color: rgba(48, 25, 118, 0.078);
    border-radius: 15px;
    backdrop-filter: blur(3px);
    z-index: 1;
}

.login-error {
  margin-top: 10px;
  color: #ec0606ff;
  font-size: 14px;
  text-align: center;
  text-shadow: 2px 2px 6px rgba(235, 0, 0, 0.8);
}

  </style>

</head>

<body>
    

  
<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
 <div class="background1">  

<div class="text1">
<h1>Login</h1>
</div>

<section>
    <h3 class="ph3">Log in to continue</h3>
    <p class="ph3">Unlock more by logging in to your Thuraya account.</p>
    <!--  ناخذ الاسم للرساله -->
<h2 id="welcomeUser" style="color:white; text-align:center; margin-top:20px;"></h2>

    <!-- الفورم بعد التعديل -->
    <form id="loginForm" action="LoginPHP.php" method="POST">
      <input type="email" name="email" placeholder="Email" required><br>

      <input id="password" name="password" type="password" placeholder="Password" required><br>
      <p id="passMsg" style="color:red; font-size:10px; margin-top:4px;"></p>

       
      <input onclick="saveUser()" type="submit" value="Login">

      <?php
  if (isset($_SESSION['login_error'])) {
    //هنا ربطناها بكلاس عشان الستايل فوق ونطبعها
      echo "<p class='login-error'>
              {$_SESSION['login_error']}
            </p>";
            // هذي مهمه وظيفتها اذا سوا اليوزر ريفرش للصفحه تروح رساله الخطا ماتكون لازقه نحذفها من السشن
      unset($_SESSION['login_error']);
     }
      ?>
    </form>
     
    </div>

    <p class="text-center">Don't have an account? <a class="link" href="Signup.php">Sign up now</a></p>
</section>

  
<?php include 'footer.php'; ?>
<script>

 

var form = document.getElementById("loginForm");
var userField = document.getElementById("username");
var welcome = document.getElementById("welcomeUser");

var pass = document.getElementById("password");
var msg = document.getElementById("passMsg");

pass.addEventListener("input", checkthepass , false);

function checkthepass(){
  var p = pass.value;
if (p.length < 6) {
      msg.innerHTML = "Password must be at least 6 characters.";
      return;
  }

  if (!/\d/.test(p)) {
      msg.innerHTML = "Password must contain at least 1 number.";
      return;
  }

  if (!/[A-Z]/.test(p)) {
      msg.innerHTML = "Password must contain at least 1 uppercase letter.";
      return;
  }

  msg.innerHTML = "";
}




</script>

<?php include 'chatbot.php'; ?>
</body>
</html>