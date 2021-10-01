<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformers Community</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>">
</head>
    
<body>
    <header>
        <img class="logo" src="<?php echo site_url('/logo/logo_small.png')?>" alt="">
        <div>
            <button>aanmelden</button>
            <button>login</button>
        </div>
        
    </header>

    <div class="section1">
        <div class="slogun">
            <h1>"life <section id="trans">sucks</section> sometimes,</h1><h4> maar je staat er niet alleen voor"</h4>
        </div>

        <div class="fotoslider">
            
        </div>

        <div class="menu">
        <?php echo $this->section( 'sidebar' ) ?>
        </div>
    </div>

    <div class="section2">
        <?php echo $this->section( 'content' ) ?>
    </div>
</body>
</html>