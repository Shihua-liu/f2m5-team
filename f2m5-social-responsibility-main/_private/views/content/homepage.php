<?php $this->layout('layouts::website');?>






<?php $this->start('section')?>
<!-- Door sections toe te voegen aan je layout kun je deze per pagina aanpassen -->
<div class="section1">
        <div class="slogun" id="item-section1" data-aos="fade-right" data-aos-duration="3000">
            <h1 >"life <section id="trans">sucks</section><br>sometimes, maar je<br>staat er niet alleen voor"</h1>
            <p>De Transformers Community is er voor jongeren die zelfverzekerd willen zijn en tegenslagen omzetten in kracht.<br><br> We doen dit samen: zo leren we meer en helpen we elkaar om te groeien.</p>
            <a class="lid" href="./html/contact.html">yes</a>
        </div>

        <!--image slider start-->
        <div class="slider" id="item-section1">
            <div class="slides">
            <!--radio buttons start-->
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <!--radio buttons end-->
            <!--slide images start-->
            <div class="slide first">
                <img src="fotoslider/foto1.png" alt="">
              </div>
            <div class="slide">
                <img src="fotoslider/foto2.png" alt="">
            </div>
            <div class="slide">
                <img src="fotoslider/foto3.png" alt="">
            </div>
            <!--slide images end-->
            <!--automatic navigation start-->
            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
            </div>
            <!--automatic navigation end-->
            </div>
            <!--manual navigation start-->
            <div class="navigation-manual">
            <label for="radio1" class="manual-btn"></label>
            <label for="radio2" class="manual-btn"></label>
            <label for="radio3" class="manual-btn"></label>
            </div>
            <!--manual navigation end-->
        </div>
        <!--image slider end-->
        <!--javascript staat beneden-->
    </div>

<?php $this->stop()?>



<!-- dit is de informatie sectie van iris -->
<?php $this->start('info') ?>

        <h3 class="titel">
            Hoe het begon
        </h3>
        <h4 class="sub-titel">
            Het verhaal achter het ontstaan van de Transformers Community
        </h4>
        <img src="/images/iris.png" alt="">
        <h4 class="oprichter">Oprichter <br><br> Iris Workum</h4>
        <p class="about-iris"> 
            "We struggelen allemaal. Het probleem is dat we er niet over praten."
            Jarenlang worstelde ik met negatieve gedachten en het gevoel niet goed genoeg te zijn. 
            Ik sprak hier nooit met iemand over, uit angst dat anderen mij raar of zwak zouden vinden. 
            Ik zette een masker op en probeerde in mijn eentje mijn gevoelens op te lossen. Ik heb hier 
            een hoge prijs voor betaald: op mijn 23e belandde ik in een depressie. 
            
            Ik weet dat mijn ervaring niet uniek is. We worstelen allemaal met de vraag 'Ben ik goed 
            genoeg? Doe ik er toe?' Het probleem is dat we er niet over praten en niet weten wat kunnen 
            doen om onze mentale gezondheid te verbeteren. Dat terwijl onze mentale gezondheid steeds 
            meer onder druk komt te staan, de wachtlijsten van de GGZ alsmaar langer worden, en de 
            nadruk nog steeds ligt op genezen in plaats van voorkomen.
            
            Vanuit deze frustratie richtte ik de Transformers Community op: een plek waar het oke 
            is om niet oke te zijn en we samen leren hoe je die momenten omzet naar kracht.</p>
    
<?php $this->stop()?>










