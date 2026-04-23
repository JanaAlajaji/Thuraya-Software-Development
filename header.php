<!--  الي فوق  اول سكشن  -->

<section class="first">
    <span>
        <img src="total.png" alt="imamu+ccis+thuraya" width="200" height="200">
    </span>

    <!-- حق الاسم -->
    <?php if (isset($_SESSION['first_name'])) { 
        echo '<span class="Hwelcome"> Welcome, ' . htmlspecialchars($_SESSION['first_name']) . ' </span>'; 
    } ?>

    <span>
        <a href="mailto:Thuraya.officail@outlook.sa">
            <img src="maail.png" width="28px" alt="mail"></a>
        <a href="tel:0509106514">
            <img src="https://uxwing.com/wp-content/themes/uxwing/download/communication-chat-call/phone-call-white-icon.png" width="20px" alt="Telephon"></a>
        <a href="https://www.instagram.com/thurayaofficail?igsh=NTlya3hwczM2eW5i">
            <img src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/instagram-white-icon.png" width="20px" alt="instagram"></a>
        <a href="https://x.com/thurayaofficail?s=21&t=6akakfk_BBEri2D4XW96Pg">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/0a/X_logo_2023_%28white%29.svg/250px-X_logo_2023_%28white%29.svg.png" width="20px" alt="X"></a>
    </span>
</section>
<hr class="hrColor">
