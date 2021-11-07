<?php $this->layout('layouts::aanmeld'); ?>


<?php $this->start('formulier') ?>

<form action="<?php echo url("aanmeld.process")?>" method="POST">
                <div class="form-group">
                    <label for="voornaam">voornaam:</label>
                    <input type="text" name="voornaam" value="<?php echo input('voornaam')?>" class="form-input" id="voornaam">
                    <?php if (isset($error['voornaam'])):?>
                        <?php echo $error['voornaam']?>
                    <?php endif;?>
                </div>
                <br>
                <div class="form-group">
                    <label for="achternaam">achternaam:</label>
                    <input type="text" name="achternaam" value="<?php echo input('achternaam')?>" class="form-input" id="achternaam">
                    <?php if (isset($error['achternaam'])):?>
                        <?php echo $error['achternaam']?>
                    <?php endif;?>
                </div>
                <br>
                <div class="form-group">
                    <label for="username">gebruikersnaam:</label>
                    <input type="text" name="gebruikersnaam" value="<?php echo input('gebruikersnaam')?>" class="form-input" id="gebruikersnaam">
                    <?php if (isset($error['gebruikersnaam'])):?>
                        <?php echo $error['gebruikersnaam']?>
                    <?php endif;?>
                </div>
                <br>
                <div class="form-group">
                    <label for="email">email:</label>
                    <input type="email" name="email" value="<?php echo input('email')?>" class="form-input" id="email">
                    <?php if (isset($error['email'])):?>
                        <?php echo $error['email']?>
                    <?php endif;?>
                </div>
                <br>
                <div class="form-group">
                    <label for="wachtwoord">wachtwoord:</label>
                    <input type="password" name="wachtwoord" value="<?php echo input('wachtwoord')?>" class="form-input" id="wachtwoord">
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

