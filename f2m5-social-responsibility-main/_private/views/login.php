
<?php $this->layout('layouts::login')?>
<div class="inlog-form">
            <h3>Login</h3>

            <form action="<?php echo url('login.handle')?>" method="POST">
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
                <button type="submit" class="btn submit-btn">login</button>
            </form>
</div>
