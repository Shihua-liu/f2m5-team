<?php $this->layout('layouts::contact');?>

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



<?php $this->start( 'con-info' ) ?>
<div class="contact" data-aos="fade-right" data-aos-duration="1500">
        <div class="tekst-vraag">
            <h2>Vragen?<br> 
                Samenwerken?<br> 
                Iets anders?<br>
                Mail ons!<br>
            </h2>
            
            <h4>
                Heb jij een idee of een vraag voor de Transformer Community?<br> 
                Zou je graag willen samenwerken?<br>
                Of ben je gewoon benieuwd wat wij zoal doen?<br> 
            </h4>
        </div>
        <div class="mail">
            <h4>
                Neem gerust contact met ons op, dat vinden we leuk!<br> 
                Je kan je mail richten aan Iris, de oprichter.<br>
            </h4>
            <a href="mailto:info@transformers.community" class="button" ><span>mail</span></a>
        </div>
    </div>
<?php $this->stop() ?>



<?php $this->start('footer') ?>
        <div class="slogun-footer">
            <h1>Transformer</h1><h1>Community</h1><br>
            <h3>Wij empoweren jongeren</h3><h3>om mentaal gezond te zijn</h3>
        </div>
        <div class="social">
            <h2>Volg ons op<h2>
            <a href="https://www.facebook.com/transformers.community" target="_new"><img src="/images/facebook.png" alt="" class=""></a>
            <a href="https://www.instagram.com/transformer.community/" target="_new"><img src="/images/instagram.png" alt="" class=""></a>
            <a href="https://www.linkedin.com/company/transformerscommunity" target="_new"><img src="/images/linkedin.png" alt="" class=""></a>
            <a href="https://www.youtube.com/channel/UCvN0_IYGVy6s1jFj2enGIsw" target="_new"><img src="/images/youtube.png" alt="" class=""></a>
            <h5>(klik de icon!)</h5>
        </div>
        <div class="footer-navigatie">
            <ul class="footer-menu">
            <li> <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h3>Home</h3></a> </li>
                <li> <a href="<?php echo url( 'con' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h3 class="current">contact</h3></a> </li>
                <li> <a href="<?php echo url( 'over' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h3>Over-ons</h3></a> </li>
                <li> <a href="<?php echo url( 'trans' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h3>Word Transformer!</h3></a> </li>
            </ul> 
        </div>
<?php $this->stop() ?>