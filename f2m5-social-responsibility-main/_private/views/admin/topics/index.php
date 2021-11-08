<?php $this->layout('layouts::topics');?>

<?php $this->start('topics')?>

<h1>Topics</h1><br><br>

<a href="<?php echo url('Topics.new');?>">Nieuwe topic toevoegen</a><br><br>
<?php foreach($topics as $topic): ?>
    <?php echo $topic['Titel'];?> <a href="<?php echo url('Topics.page');?>">Edit</a><br><br>
<?php endforeach;?>





<?php $this->stop();?>

