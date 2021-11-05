<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformers Community</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
	<?php if ( $this->section( 'css' ) ): ?>
		<?php echo $this->section( 'css' ) ?>
	<?php endif; ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
</head>
    
<body style="position: relative;
height: 100%;">
    <header class="header">
        <?php echo $this->fetch('content/nav'); ?>
    </header>

    <div class="login">
        <?php echo $this->fetch('content/logbutt'); ?>
    </div>

    <div class="over-ons">
        <?php echo $this->section('over-ons'); ?>
    </div>

    <div class="swiper mySwiper">
        <?php echo $this->section('slider'); ?>
    </div>


    <div class="footer">
        <?php echo $this->fetch('content/footer'); ?>
    </div>
</body>
<script>
    AOS.init();

    

    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });

</script>
</html>