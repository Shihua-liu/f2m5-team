<?php $this->layout('layouts::blog');?>

<?php $this->start('logbutt')?>
    <button>aanmelden</button>
    <button>login</button>
<?php $this->stop()?>


<?php $this->start('title')?>
<h1>Nieuw topic</h1>

<form action="<?php echo url('blog/blog.save')?>" method="POST">
    
    <div class="form-group">
        <label for="Titel">Titel</label>
        <br>
        <input type="text" name="Titel" value="<?php echo input('Titel')?>" class="form-control" id="titel"> 
        <?php if ( isset( $error['Titel'] ) ): ?>
            <br><span class="error"><?php echo $error['Titel'] ?></span>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="Subtitel">Subtitel</label>
        <br>
        <input type="text" name="Subtitel" value="<?php echo input('Subtitel')?>" class="form-control" id="subtitel"> 
        <?php if ( isset( $error['Subtitel'] ) ): ?>
            <br><span class="error"><?php echo $error['Subtitel'] ?></span>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="Tekst">Tekst</label>
        <br>
        <textarea name="Tekst" class="form-control" id="tekst"> <?php echo input('Tekst') ?> </textarea> 
        <?php if ( isset( $error['Tekst'] ) ): ?>
            <br><span class="error"><?php echo $error['Tekst'] ?></span>
        <?php endif; ?>
    </div>

    <button type="submit">Opslaan</button>
</form>
 
<hr>

<p>
    <a href="<?php echo url( 'blog/blog-index' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h2>terug naar overzicht</h2></a>
</p>
<?php $this->stop()?>






