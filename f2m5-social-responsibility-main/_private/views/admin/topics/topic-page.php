<?php $this->layout('layouts::topics-page');?>

<?php $this->start('topics-page')?>

<?php foreach($topics as $topic): ?>
    <?php echo $topic['description'];?> 
<?php endforeach;?>


<?php $this->stop();?>