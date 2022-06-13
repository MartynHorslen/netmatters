<?php 
require_once('inc/functions.php');
require_once('templates/head.php');
require_once('templates/header.php');
?>

<!-- Breadcrumbs -->
<div class="bc-container">
    <div class="breadcrumbs">
        <?php echo getBreadcrumbs(); ?>
    </div>
</div>
<div class="mobile-header">
    <h1>Our Offices</h1>
</div>
<!-- Office Cards -->
<div class="offices-container">
    <div class="office-card">
        <div class="office-img">
            <a href="#">
                <img src="img/contact/cambridge.jpg" alt="Cambridge office" />
            </a>
        </div>
        <div class="office-info">
            <h4><a href="#">Cambridge Office</a></h4>
            <p>
                Unit 1.28,<br />
                St John's Innovation Centre,<br />
                Cowley Road, Milton,<br />
                Cambridge,<br />
                CB4 0WS
            </p>
            <p class="tel"><a href="tel:01223375772">01223 37 57 72</a></p>
            <div class="btn"><a href="#">View More</a></div>
        </div>
        <div id="c-map" class="office-map"></div>
    </div>
    
    <div class="office-card">
        <div class="office-img">
        <a href="#">
                <img src="img/contact/wymondham.jpg" alt="Wymondham Office" />
            </a>
        </div>
        <div class="office-info">
            <h4><a href="#">Wymondham Office</a></h4>
            <p>
                Unit 15,<br />
                Penfold Drive,<br />
                Gateway 11 Business Park,<br />
                Wymondham, Norfolk,<br />
                NR18 0WZ
            </p>
            <p class="tel"><a href="tel:01603704020">01603 70 40 20</a></p>
            <div class="btn"><a href="#">View More</a></div>
        </div>
        <div id="w-map" class="office-map"></div>
    </div>
    
    <div class="office-card">
        <div class="office-img">
            <a href="#">
                <img src="img/contact/yarmouth-2.jpg" alt="Great Yarmouth Office" />
            </a>
        </div>
        <div class="office-info">
            <h4><a href="#">Great Yarmouth Office</a></h4>
            <p>
                Suite F23,<br />
                Beacon Innovation Centre,<br />
                Beacon Park, Gorleston,<br />
                Great Yarmouth, Norfolk,<br />
                NR31 7RA
            </p>
            <p class="tel"><a href="tel:01493603204">01493 60 32 04</a></p>
            <div class="btn"><a href="#">View More</a></div>
        </div>
        <div id="y-map" class="office-map"></div>
    </div>
</div>
<!-- Contact Form -->

<?php require_once('templates/footer.php'); ?>