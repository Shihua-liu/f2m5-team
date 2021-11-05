<?php $this->layout('layouts::word-transformer'); ?>




<!-- Dit zijn de login buttons -->
<?php $this->start('logbutt')?>
    <a href="<?php echo url( 'aanmeld' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><button>Aanmelden</button></a>
        <a href="<?php echo url( 'login' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><button>inloggen</button></a>
<?php $this->stop()?>


<?php $this->start('word-transformer')?>
        <h2> Ook een transformer worden?</h2>

        <br><br>

        <h3>Als vrijwilliger voor een van de volgende dingentjes</h3>

        <br><br>

        <div class="accordion">
            <button type="button" class="accordion-btn">Community moderators</button>
            <div class="accordion-content">
                <p>
                    Voor ons online community platform zijn we altijd op zoek naar moderatoren die samen de veiligheid van het platform bewaken en ervoor zorgen dat iedereen zich gezien en gehoord voelt.

                    Vind je het leuk om jouw kennis over mentale gezondheid te delen met andere jongeren en ben je niet bang om iemand aan te spreken wanneer dit nodig is? Dan kan jij maar zo deel gaan uitmaken van ons moderatieteam!
                </p>
            </div>
        </div>
        <div class="accordion">
            <button type="button" class="accordion-btn">Crowdfunding</button>
            <div class="accordion-content">
                <p>
                    Voor de ontwikkeling van een Mental Health toolkit zoeken wij vrijwilligers die willen helpen met het opzetten en uitvoeren van een crowdfunding om deze toolkit werkelijkheid te maken.

                    Ben jij goed in organiseren en mensen enthousiasmeren én wil je kennis over mentale gezondheid mainstream maken? Dan zoeken wij jou!
                </p>
            </div>
        </div>
        <div class="accordion">
            <button type="button" class="accordion-btn">Vormgeving en illustratie</button>
            <div class="accordion-content">
                <p>
                    Voor de ontwikkeling van een Mental Health toolkit zoeken wij mensen die diverse tools willen vormgeven en/of illustreren. 

                    Heb jij (enige) ervaring met vormgeving en design en zou je de skills graag willen inzetten om bij te dragen aan een betere wereld? Dan zijn wij een match!
                </p>
            </div>
        </div>
        <div class="accordion">
            <button type="button" class="accordion-btn">Social media</button>
            <div class="accordion-content">
                <p>
                    Om  jongeren te empoweren om mentaal gezond te zijn en impact te maken, moeten mensen natuurlijk weten dat we er zijn! En dat doen we onder andere via social media.
                    
                    Lijkt het jou leuk om content te creëren en ons bereik te vergroten? Dan ben jij precies wie wij zoeken!
                </p>
            </div>
        </div>
        <div class="accordion">
            <button type="button" class="accordion-btn">Videomontage</button>
            <div class="accordion-content">
                <p>
                     We filmen jongeren door het hele land die hun ervaring met en tips over mentale gezondheid delen.

                    Om hun verhalen zo goed mogelijk naar buiten te brengen, zoeken wij altijd wat handjes die helpen bij de montage. Heb jij wel 2-4 uurtjes in de week tijd hiervoor? Meld je dan aan!
                </p>
            </div>
        </div>


        <a href = "mailto:info@transformers.community?SUBJECT=Transformer worden">
            <button>Meld je nu aan!</button>
        </a>         
<?php $this->stop()?>




