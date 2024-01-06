<?php get_header()?>

<main>
  <div>
    <img src="<?php the_post_thumbnail_url('full');?>" alt="">
  </div>

  <h1 class="title"><?php the_title();?></h1>

  <div class="content">
    <?php the_content();?>
  </div>

  <a href="<?php echo home_url();?>">topに戻る</a>
</main>

<?php get_footer() ?>
