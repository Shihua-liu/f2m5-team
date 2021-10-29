<?php $this->layout('layouts::over-ons'); ?>


<!-- Dit is de navigatie -->



<!-- Dit zijn de login buttons -->
<?php $this->start('logbutt')?>
    <a href="<?php echo url( 'aanmeld' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><button>Aanmelden</button></a>
        <a href="<?php echo url( 'login' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><button>inloggen</button></a>
<?php $this->stop()?>



<?php $this->start('over-ons')?>
        <h3>
            Weet jij wat je moet doen om mentaal gezond te zijn?
            Nee? Dan ben jij niet de enige.
        </h3>

        <p>
            Terwijl de meesten van ons wel weten wat je moet doen om fysiek gezond te zijn, leert niemand ons wat ervoor nodig om mentaal gezond te zijn. Op school niet, thuis niet, op het werk niet. Terwijl je mentale gezondheid essentieel is!<br>
            <br>
            Tegelijkertijd vormen jongeren de meest kwetsbare doelgroep voor de ontwikkeling van mentale problemen. Maar liefst 80 (!) procent van de mentale aandoeningen zoals depressie of angst start tussen de 15 en 25 jaar.<br>
            <br>    
            Bij de Transformers Community creëren wij samen met jongeren meer kennis, bewustzijn en openheid rondom mentale gezondheid. Door te focussen op herkenning, erkenning en verbinding willen wij mentale problemen voorkomen in plaats van genezen. <br>
            <br>
             We werken er naar toe om uit te groeien tot een sociale beweging van jongeren die elkaar helpt om mentaal weerbaar en veerkrachtig te zijn.
        </p>
<?php $this->stop()?>


<!-- Dit is de info slider -->
<?php $this->start('slider')?>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="profiel-div">
                    <img src="/images/Andrea.png" alt="">
                    <h4>Andrea</h4>
                    <h5>Ambassadeur<br>en initiatiefnemer<br>van 'Andrea Asks'</h5>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profiel-div">
                    <img src="/images/iris.png" alt="">
                    <h4>Iris</h4> 
                    <h5>Oprichter</h5>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profiel-div">
                    <img src="/images/elwin.png" alt="">
                    <h4>Elwin</h4>
                    <h5>Ambassadeur</h5>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profiel-div">
                    <img src="/images/elwin.png" alt="">
                    <h4>Mariam Badou</h4>
                    <h5>bestuurslid</h5>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profiel-div">
                    <img src="/images/elwin.png" alt="">
                    <h4>Amzah Moelah</h4>
                    <h5>bestuurslid</h5>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="profiel-div">
                    <img src="/images/elwin.png" alt="">
                    <h4>Annebregt Dijkman</h4>
                    <h5>bestuurslid</h5>
                </div>
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
<?php $this->stop()?>


