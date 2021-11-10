<?php $this->layout('layouts::blog-view');?>

<?php $this->start('blog-inhoud') ?>
    <h1> <?php echo $blog_post['Titel']?></h1><br>
    <h2> <?php echo $blog_post['Subtitel']?></h1><br>
    <p> <?php echo $blog_post['Tekst']?></p><br>
    <a href="<?php echo url( 'blog/blog-index' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>><h2>terug naar overzicht</h2></a>
<?php $this->stop()?>    