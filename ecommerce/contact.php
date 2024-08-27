<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

    <?php include 'includes/navbar.php'; ?>
     
    <div class="content-wrapper">
        <div class="container">

          <!-- Main content -->
          <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <?php
                        if(isset($_SESSION['error'])){
                            echo "
                                <div class='alert alert-danger'>
                                    ".$_SESSION['error']."
                                </div>
                            ";
                            unset($_SESSION['error']);
                        }
                    ?>
                    <h1 class="bold-heading">Hubungi Kami</h1>
                    <!-- About Us Section -->
                    <div class="about-us">
                        <h1 class="bold-heading-color">Sweet a Lots</h1>
                    
                        <!-- Contact Information Section -->
                        <div class="contact-info">
                            <p><i class="fa fa-phone"></i> Phone: +62 851-7310-0439</p>
                            <p><i class="fa fa-map-marker"></i> Address: Jl. Dayana I Blok DA.078, Summarecon Bandung, Gedebage- Bandung</p>
                            <p><i class="fa fa-envelope"></i> Email: bussinesberkat.sentosa@gmail.com</p>
                        </div>

                        <!-- Google Maps Embed -->
                        <div class="map-preview">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31667.254454571316!2d107.65014294668223!3d-6.952402707342895!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e7b8fc28f2a9%3A0xe4c26f16c7d2e2e5!2sSummarecon%20Bandung!5e0!3m2!1sen!2sid!4v1692378550412!5m2!1sen!2sid" 
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    
                </div>
            </div>
          </section>
         
        </div>
      </div>
  
    <?php include 'includes/footer.php'; ?>
</div>

<!-- WhatsApp Floating Button -->
<a href="https://wa.me/6285173100439" class="whatsapp-button" target="_blank" rel="noopener noreferrer">
    <img src="images/wa-btn.png" alt="">
</a>

<?php include 'includes/scripts.php'; ?>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<style>
    /* About Us Section */
    .bold-heading {
        font-weight: bold;
    }
    .bold-heading-color {
        font-weight: bold;
        font-size: 2.5em;
        color: #7c4700;
    }
    .about-us {
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 8px;
        margin-top: 20px;
    }
    
    .about-us h1 {
        font-size: 2em;
        margin-bottom: 10px;
    }
    
    .about-us p {
        font-size: 1.1em;
        line-height: 1.6;
        margin-bottom: 15px;
    }

    /* Contact Information */
    .contact-info p {
        font-size: 1.2em;
        margin-bottom: 10px;
    }
    .contact-info i {
        margin-right: 10px;
        color: #7c4700;
    }

    /* Map Preview */
    .map-preview {
        margin-top: 20px;
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
    }

    /* WhatsApp Floating Button */
    .whatsapp-button {
        position: fixed;
        bottom: 75px; /* Adjusted value to move button up */
        right: 35px;
        background-color: #25D366; /* WhatsApp green color */
        border-radius: 50%;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.2);
        z-index: 1000;
    }

    .whatsapp-button img {
        width: 60px;
        height: 60px;
    }

    .whatsapp-button:hover {
        background-color: #e5b80b; /* Change color on hover */
    }
</style>
</body>
</html>
