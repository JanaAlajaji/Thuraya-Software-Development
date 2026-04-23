<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Hotle-Thuraya</title>
    <meta http-equiv="refresh" content="43200">
    <link rel="stylesheet" href="stylesheet.css">
	    <style>

    .content {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 600px;
      padding: 40px;
    }

    .booking-box {
      background: white;
      width: 100%;
      max-width: 600px;
      padding: 30px 40px;
      border-radius: 12px;
      box-shadow: 0 5px 25px rgba(0, 0, 0, 0.1);
    }

    h1 {
      color: #311976;
      font-size: 32px;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-top: 15px;
      font-weight: 600;
      color: #2d156f;
    }

    input, select, textarea {
      width: 100%;
      padding: 10px 12px;
      margin-top: 8px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 15px;
      box-sizing: border-box;
    }

    textarea {
      resize: none;
      height: 100px;
    }

    input[type="submit"] {
      margin-top: 25px;
      background-color: #311976;
      color: white;
      border: none;
      border-radius: 6px;
      padding: 12px;
      width: 100%;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    input[type="submit"]:hover {
      background-color: #2E887F;
    }

    footer {
      padding: 18px;
      margin-top: 0;
    }
    

    </style>
</head>
<body>

<?php include 'header.php'; ?>
<?php include 'navbar.php'; ?>
  <div class="content">
    <div class="booking-box">
      <h1>Hotel Booking Form</h1>

      <form>
        <label for="name">Full Name:</label>
        <input type="text" id="name" placeholder="Enter your full name" required>

        <label for="email">Email Address:</label>
        <input type="email" id="email" placeholder="Enter your email" required>

        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" pattern="[0-9]{10}" placeholder="0501234567" required>

        <label for="city">City:</label>
        <select id="city" required>
          <option value="">Select City</option>
          <option>Riyadh</option>
          <option>Jeddah</option>
          <option>Abha</option>
          <option>AlUla</option>
          <option>Diriyah</option>
          <option>AlBaha</option>
        </select>

        <label for="hotel">Hotel Name:</label>
        <select id="hotel" required>
          <option value="">Select Hotel</option>
          <option>The Ritz-Carlton, Riyadh</option>
          <option>Narcissus Hotel & Spa Riyadh</option>
          <option>Jeddah Hilton</option>
          <option>Rosewood Jeddah</option>
          <option>Citadines Abha Hotel</option>
          <option>Abha Palace Hotel</option>
          <option>Habitas AlUla</option>
          <option>Shaden Resort AlUla</option>
          <option>Bab Samhan Hotel, Diriyah</option>
          <option>The Ritz-Carlton Diriyah</option>
          <option>Cloud City Hotel Al Baha</option>
          <option>National Park Hotel Al Baha</option>
        </select>

    <label for="checkin">Check-in Date:</label>
    <input type="date" id="checkin" name="checkin" required><br>
  
    <label for="checkout">Check-out Date:</label>
    <input type="date" id="checkout" name="checkout" required><br>


        <label for="guests">Number of Guests:</label>
        <select id="guests" required>
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4+</option>
        </select>

        <label for="requests">Special Requests / Notes:</label>
        <textarea id="requests" placeholder="Any special requests?"></textarea>

        <input type="submit" value="Book Now">
      </form>
    </div>
  </div>




<?php include 'footer.php'; ?>
<script src="main.js"></script>

 <script>
  document.querySelector("form").addEventListener("submit", function(event) {
    event.preventDefault();   

    // ناخذ القيم
    let checkin = document.getElementById("checkin").value;
    let checkout = document.getElementById("checkout").value;

  
    let today = new Date();
    today.setHours(0,0,0,0);

    let checkinDate = new Date(checkin);
    let checkoutDate = new Date(checkout);
    checkinDate.setHours(0,0,0,0);
    checkoutDate.setHours(0,0,0,0);

    if (checkoutDate.getTime() <= checkinDate.getTime()) {
        alert("Check-out date must be greater than check-in date");
        return false;
    }

    if (checkinDate.getTime() <= today.getTime()) {
        alert(" Check-in date must be greater than today's date");
        return false;
    }

    // If everything correct
    alert("Your hotel booking has been submitted successfully!");
    return true;

});

</script>


</body>
</html>