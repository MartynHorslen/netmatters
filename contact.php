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
<div class="contact-row">
    <div class="contact-col">
        <div class="contact-text">
            <p>Email us on:</p>
            <p><a href="mailto:sales@netmatters.com" class="contact-email">sales@netmatters.com</a></p>
            <p>Business hours:</p>
            <p>Monday - Friday 07:00 - 18:00 </p>
        </div>
        <div class="ooh">
            <div class="ooh-link">
                <a href="#">
                    <p>Out of Hours IT Support <i class="fa-solid fa-chevron-down"></i></p>
                </a>
            </div>
            <div class="ooh-dropdown">
                <p>Netmatters IT are offering an Out of Hours service for Emergency and Critical tasks.</p>
                <p class="ooh-bold">Monday - Friday 18:00 - 22:00 Saturday 08:00 - 16:00<br />Sunday 10:00 - 18:00</p>
                <p>To log a critical task, you will need to call our main line number and select Option 2 to leave an Out of Hours  voicemail. A technician will contact you on the number provided within 45 minutes of your call. </p>
            </div>
        </div>
    </div>

    <div class="contact-form">
        <form>
            <fieldset class="top">
                <label for="full-name">Your Name</label>
                <input type="text" id="full-name" name="full_name" placeholder=" " pattern="^[a-zA-Z- ]{2,35}$" title="Letters and hyphens only. 2-35 characters in lengths." required>
            </fieldset>

            <fieldset class="top">
                <label for="contact-email">Your Email</label>
                <input type="text" id="contact-email" name="email" placeholder=" " pattern="[a-z0-9!#$%&'*+\/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+\/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.?)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?" title="Most email formats accepted. Use lowercase." required>
            </fieldset>

            <fieldset class="top">
                <label for="telephone">Your Telephone Number</label>
                <input type="text" id="telephone" name="telephone" placeholder=" " pattern="^(?:0|\+?44)(?:\d\s?){9,10}$" title="Telephone numbers and characters only." required>
            </fieldset>

            <fieldset class="top">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder=" " pattern="[A-Za-z0-9\W]{4,80}" title="Please enter a descriptive subject line between 4 and 80 characters." required>
            </fieldset>

            <fieldset class="bottom">
                <label for="message">Message</label>
                <textarea name="message" id="message" cols="50" rows="10" placeholder=" " pattern="[A-Za-z0-9\W]+" required></textarea>
            </fieldset>

            <fieldset class="checkbox">
                <input type="checkbox" name="marketing-info" id="marketing-info" class=""><label for="marketing-info" class="privacy">Please tick this box if you wish to receive marketing information from us.
                    Please see our <a href="#">Privacy Policy</a> for more information on how we use your data.</label>
            </fieldset>

            <fieldset>
                <button id="submit" value="submit" class="btn">Send Enquiry</button>
            </fieldset>
        </form>
        
    </div>
</div>

<?php require_once('templates/footer.php'); ?>