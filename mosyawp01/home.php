<?php get_header();?>
<body>


  <main>
    <div class="mainbox">
      <img class="mainvisual" src="<?php echo get_template_directory_uri();?>/image/mainvisual.jpg" alt="">
    </div>

    <section id="about">
      <h2>About</h2>
      <div class="about-box">
        <img src="<?php echo get_template_directory_uri();?>/image/about.jpg" alt="">
        <div class="about-box-text">
          <p>KAKERU MIYAICHI</p>
          <span>text texttext texttext texttext texttext texttext texttext texttext text
          text texttext texttext texttext texttext texttext texttext texttext texttext text
          </span>
        </div>
      </div>
    </section>
    <section id="bicycle">
      <h2>Bicycle</h2>
      <?php
        $args = [
          'post_type' =>'post',
          'category_name'=>'news',
          'posts_per_page'=> 3,
        ];
        $posts = get_post($args);
      ?>
      <?php foreach($posts as $post):?>
      <?php setup_postdata($post); ?>
      <div class="bicycle-box">
        <ul>
          <li>
          <a href="<?php the_permalink();?>">
          <img src="<?php the_post_thumbnail_url('full');?>" alt="">
          <p> <?php the_title();?>   </p>
          <span>
            <?php
              $content = wp_trim_words( get_the_content(),10,'...');
              echo $content
            ?>
            </span>
          </a>
          </li>
          <?php endforeach;?>
        </ul>
        <?php wp_reset_postdata();?>



    </section>
  </main>
<?php get_footer();?>
