<!--  الي تحت الي فوق  ثاني سكشن  -->

<section>
    <nav>
        <ul>
            <li><a href="Newhome.php">Home</a></li>

            <li><a href="destinations.php">Destinations</a>
                <ul>
                    <li><a href="riyadh.php">Riyadh</a></li>
                    <li><a href="jeddah.php">Jeddah</a></li>
                    <li><a href="Abha.php">Abha</a></li>
                    <li><a href="AlBaha.php">AlBaha</a></li>
                    <li><a href="AlUla.php">AlUla</a></li>
                    <li><a href="Diriyah.php">Diriyah</a></li>
                </ul>
            </li>

            <li><a href="gallery.php">Gallery</a></li>

            <?php if (!isset($_SESSION['user_id'])) { ?>
                <li><a href="login.php">Login / Signup</a></li>
            <?php } ?>

            <?php if (isset($_SESSION['user_id'])) { ?>
                <li><a href="getVisa.php">Get Visa</a></li>
                <li><a href="logout.php">Logout</a></li>
            <?php } ?>

            <li><a href="aboutus.php">About Us</a></li>
        </ul>
    </nav>
    <hr class="hrColor">
</section>
