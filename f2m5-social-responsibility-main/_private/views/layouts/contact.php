<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformers Community</title>
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
	<?php if ( $this->section( 'css' ) ): ?>
		<?php echo $this->section( 'css' ) ?>
	<?php endif; ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>
<!-- test -->
<body>
<header class="header">
        <?php echo $this->section( 'nav' ) ?>
    </header>
    <div class="login">
        <?php echo $this->section( 'logbutt' ) ?>
    </div>

    <div class="contact" data-aos="fade-right" data-aos-duration="1500">
        <?php echo $this->section( 'con-info' ) ?>
    </div>

    <div class="footer">
        <?php echo $this->section( 'footer' ) ?>
    </div>
</body>
<script>
    AOS.init();
</script>
</html>