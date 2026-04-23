<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Visa-Thuraya</title>
    <meta http-equiv="refresh" content="43200">
    <link rel="stylesheet" href="stylesheet.css">
     
  <style>
   
    .container {
      display: flex;
      min-height: calc(100vh - 250px);
      margin: 0;
      padding: 0;
    }

    .left-side {
      flex: 1;
    }

    .left-side img {
      width: 100%;
      height: 100vh;
      object-fit: cover;
      display: block;
      border-radius: 0;
    }

    .right-side {
      flex: 1;
       height: 100vh;
      background-color: rgba(255, 255, 255, 0.98);
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 50px 40px;
      box-sizing: border-box;
    }

    h3 {
      text-align: center;
      color: #3c2e74;
      font-size: 42px;
      font-family: 'Theo Van Doesburg', sans-serif;
      letter-spacing: 2px;
      margin-top: 10px;
      margin-bottom: 15px;
    }


    .description {
      text-align: center;
      color: #3f3f3f;
      font-size: 20px;
      line-height: 1.6;
      max-width: 500px;
      margin: 10px auto 25px auto;
    }

    .visa-form {
      background: #82a2d6 ;
      width: 400px;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
      text-align: left;
    }

    .visa-form label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
      color: #311976;
    }

    .visa-form input, .visa-form select {
      width: 95%;
      padding: 10px;
      margin: 8px 0;
      border: 1px solid #aaa;
      border-radius: 5px;
    }

    .visa-form input[type="submit"] {
      background-color: #311976;
      color: white;
      border: none;
      border-radius: 5px;
      padding: 10px 15px;
      cursor: pointer;
      margin-top: 15px;
      width: 100%;
    }

    .visa-form input[type="submit"]:hover {
      background-color: #2E887F;
    }

     footer {
      padding: 20px;
      margin-top: 0;
    }
    
  </style>
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
  <div class="container">
    <div class="left-side">
      <img src="riyadhseason.jpg" alt="Visa Image">
    </div>

    <div class="right-side">
      <h3>Apply for Your Visa</h3>
      <p class="description">
        Through Thuraya Visa Service, you can easily apply for your travel visa 
        and begin your journey to discover the beauty of the Kingdom.
      </p>
      <p class="description"><strong>Please fill out the form below</strong></p>

      <form class="visa-form">
      
        <label for="nationality">Nationality:</label>
        <select id="nationality" required style="width: 95%; padding: 10px; margin: 8px 0; border: 1px solid #aaa; border-radius: 5px;">
    <option value="" disabled selected>Select Nationality</option>
    <option>Saudi Arabia</option>
    <option>United Arab Emirates</option>
    <option>Kuwait</option>
    <option>Qatar</option>
    <option>Bahrain</option>
    <option>Oman</option>

    <option>Pakistan</option>
    <option>India</option>
    <option>Philippines</option>
    <option>Indonesia</option>
    <option>Malaysia</option>
    <option>Japan</option>
    <option>South Korea</option>
    <option>China</option>

    <option>Egypt</option>
    <option>Jordan</option>
    <option>Lebanon</option>
    <option>Turkey</option>
    <option>Morocco</option>
    <option>Syria</option>
    <option>Palestine</option>

    <option>United Kingdom</option>
    <option>France</option>
    <option>Germany</option>
    <option>Italy</option>
    <option>Spain</option>
    <option>Netherlands</option>
    <option>Sweden</option>
    <option>United States</option>
    <option>Canada</option>
    <option>Brazil</option>
    <option>Australia</option>

</select>

        <label for="visaType">Visa Type:</label>
        <select id="visaType" required>
          <option value="">Select Visa Type</option>
          <option value="eVisa">eVisa</option>
          <option value="Tourist Visa">Tourist Visa</option>
          <option value="Business Visa">Business Visa</option>
        </select>

        <p id="visaInfo" 
   style="width: 88%; color:#311976; padding-left:10px; font-weight: bold;">
        </p>

        <input id="applybtn" type="submit" value="Apply">
      </form>
    </div>
  </div>

 
<?php include 'footer.php'; ?>
<script>

 
  document.getElementById("visaType").addEventListener("change", visachange); 

    function visachange(){//On visa type selection give details about selected visa type.
    let type = this.value;
    let info = document.getElementById("visaInfo");

    if (type == "eVisa"){
      info.innerHTML="Electronic visa allows travelers to enter Saudi Arabia easily through an online application. It is fast and suitable for tourists.";
    } else if(type == "Tourist Visa") {
        info.innerHTML= "Tourist visa allows visitors to explore Saudi Arabia for tourism purposes, valid for multiple entries within a specific timeframe.";
    }else if(type == "Business Visa"){
      info.innerHTML="Business visa is issued for individuals visiting Saudi Arabia for meetings, conferences, and commercial purposes.";
    }else{
      info.innerHTML="";
    }

};


   applybtn.addEventListener("click", applay)

function applay() {
    event.preventDefault();

    let nationality = document.getElementById("nationality").value;
    let visa = document.getElementById("visaType").value;


  if (nationality == "" || visa == "") {
        alert(username +" , you must select a nationality And visa type.");
        return;
    }

  //ناخذ اسم المستخدم من الداتا بيس ونحطه بالاليرت  
  //take user name from data base to use it in the alert
  <?php if (isset($_SESSION['first_name'])) 
  { echo 'alert("dear '
     . htmlspecialchars($_SESSION['first_name'])
   . ' you have selected " + visa + ".\ngoing back to Home page...");'; } ?>
  //--------------------------------------------------------  
  
    window.location.href = "Newhome.php"; // يرجع المستخدم للهوم
};
</script>


<?php include 'chatbot.php'; ?>
</body>
</html>



