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
                    <h1 class="bold-heading">Tentang Kami</h1>
                    <!-- About Us Section -->
                    <div class="about-us">
                        <h1 class="bold-heading-color">Sweet a Lots</h1>
                        <p>Sweet a Lots adalah home industri kue kering yang beroperasi di Bandung sejak akhir tahun 2023 dan diresmikan pada February 2024. Kami menyajikan kue kering berkualitas tinggi dengan rasa yang autentik dan kemasan yang menarik. Dengan komitmen kami untuk memberikan pengalaman memuaskan kepada pelanggan, kami telah menjadi pilihan utama bagi mereka yang mencari kue kering lezat dan berkualitas.</p>
                        <p>Dengan bahan baku premium dan kualitas terjamin merupakan menjadi komitmen kami dalam membangun kepercayaan konsumen. Kami ingin setiap produk kami dapat tersaji dengan baik serta dapat memenuhi kepuasan konsumen.</p>
                        <!-- Contact Information Section -->
                        <div class="contact-info">
                            <p><i class="fa fa-phone"></i> Phone: +62 851-7310-0439</p>
                            <p><i class="fa fa-map-marker"></i> Address: Jl. Dayana I Blok DA.078, Summarecon Bandung, Gedebage- Bandung</p>
                            <p><i class="fa fa-envelope"></i> Email: bussinesberkat.sentosa@gmail.com</p>
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
