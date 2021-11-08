<?php $this->layout('layouts::topics-new');?>

<?php $this->start('topics-new')?>

<h1>Nieuw Topics</h1><br><br>

<form action="<?php echo url('topics.save')?>" method="POST">
    
    <div class="form-group">
        <label for="titel">Titel</label>
        <input type="text" name="titel" value="<?php echo input('titel')?>" class="form-control" id="titel"> 
        <?php if ( isset( $error['titel'] ) ): ?>
            <span class="error"><?php echo $error['titel'] ?></span>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="title">Description</label>
        <textarea name="desc" class="form-control" id="tekst"> <?php echo input('desc') ?> </textarea> 
        <?php if ( isset( $error['desc'] ) ): ?><span class="error"><?php echo $error['desc'] ?></span><?php endif; ?>
    </div>

    <button type="submit">Opslaan</button>
</form>
    <a href="<?php echo url('Topics.index');?>">terug naar overzicht</a><br><br>
<?php $this->stop();?>



