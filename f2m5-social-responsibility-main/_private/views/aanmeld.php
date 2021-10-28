<?php $this->layout('layouts::aanmeld'); ?>


<?php $this->start('nav')?>
<img class="logo" src="/foto/logo_small.png" alt=""><input class="menu-btn" type="checkbox" id="menu-btn" />
        <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
        <ul class="menu">
            <li> <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h2>Home</h2></a> </li>
            <li> <a href="<?php echo url( 'con' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h2>contact</h2></a> </li>
            <li> <a href="<?php echo url( 'over' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h2>Over-ons</h2></a> </li>
            <li> <a href="<?php echo url( 'trans' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h2>Word Transformer!</h2></a> </li>
        </ul>
<?php $this->stop()?>


<?php $this->start('logbutt')?>
    <a href="<?php echo url( 'aanmeld' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><button>Aanmelden</button></a>
    <button>Login</button>
<?php $this->stop()?>


<?php $this->start('formulier') ?>

<form action="<?php echo url("aanmeld.process")?>" method="POST">
                <div class="form-group">
                    <label for="voornaam">voornaam:</label>
                    <input type="text" name="voornaam" value="<?php echo input('voornaam')?>" class="form-input" id="voornaam" required>
                    <?php if (isset($error['voornaam'])):?>
                        <?php echo $error['voornaam']?>
                    <?php endif;?>
                </div>
                <br>
                <div class="form-group">
                    <label for="achternaam">achternaam:</label>
                    <input type="text" name="achternaam" value="<?php echo input('achternaam')?>" class="form-input" id="achternaam" required>
                    <?php if (isset($error['achternaam'])):?>
                        <?php echo $error['achternaam']?>
                    <?php endif;?>
                </div>
                <br>
                <div class="form-group">
                    <label for="username">gebruikersnaam:</label>
                    <input type="text" name="gebruikersnaam" value="<?php echo input('gebruikersnaam')?>" class="form-input" id="gebruikersnaam" required>
                    <?php if (isset($error['gebruikersnaam'])):?>
                        <?php echo $error['gebruikersnaam']?>
                    <?php endif;?>
                </div>
                <br>
                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="email" name="email" value="<?php echo input('email')?>" class="form-input" id="email" required>
                    <?php if (isset($error['email'])):?>
                        <?php echo $error['email']?>
                    <?php endif;?>
                </div>
                <br>
                <div class="form-group">
                    <label for="wachtwoord">wachtwoord:</label>
                    <input type="password" name="wachtwoord" value="<?php echo input('wachtwoord')?>" class="form-input" id="wachtwoord" required>
                    <?php if (isset($error['wachtwoord'])):?>
                        <?php echo $error['wachtwoord']?>
                    <?php endif;?>
                </div>
                <br>
                <div class="form-group">
                    <label for="gender">gender:</label>
                    <br>
                    <div>
                        <input type="radio" name="gender" value="female" value="<?php echo input('female')?>" class="form-input" id="gender">Vrouw
                    </div>
                    <div>
                        <input type="radio" name="gender" value="male" value="<?php echo input('male')?>" class="form-input" id="gender">Man
                    </div>
                    <div>
                        <input type="radio" name="gender" value="other" value="<?php echo input('niet-zeggen')?>" class="form-input" id="gender">Zeg ik liever niet
                    </div>
                    <?php if (isset($error['gender'])):?>
                        <?php echo $error['gender']?>
                    <?php endif;?>
                </div>
                <br>
                <button type="submit" class="btn submit-btn">registreer</button>
            </form>
            

<?php $this->stop() ?>


<?php $this->start('footer') ?>
        <div class="slogun-footer">
            <h1>Transformer</h1><h1>Community</h1><br>
            <h3>Wij empoweren jongeren</h3><h3>om mentaal gezond te zijn</h3>
        </div>
        <div class="social">
            <h2>Volg ons op
            <a href="https://www.facebook.com/transformers.community" target="_new"><img src="/images/facebook.png" alt="" class=""></a>
            <a href="https://www.instagram.com/transformer.community/" target="_new"><img src="/images/instagram.png" alt="" class=""></a>
            <a href="https://www.linkedin.com/company/transformerscommunity" target="_new"><img src="/images/linkedin.png" alt="" class=""></a>
            <a href="https://www.youtube.com/channel/UCvN0_IYGVy6s1jFj2enGIsw" target="_new"><img src="/images/youtube.png" alt="" class=""></a>
            <h5>(klik de icon!)</h5>
        </div>
        <div class="footer-navigatie">
            <ul class="footer-menu">
                <li><a href="index.html"><h3 class="current">Home</h3></a></li>
                <li><a href="html/over-ons.html"><h3>Over ons</h3></a></li>
                <li><a href="html/word-transformer.html"><h3>Word Transformer!</h3></a></li>
                <li><a href="html/contact.html"><h3>Contact</h3></a></li>
            </ul> 
        </div>
<?php $this->stop() ?>