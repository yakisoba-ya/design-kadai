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
      <div class="bicycle-box">
        <div>
          <img src="<?php echo get_template_directory_uri();?>/image/bicycle1.jpg" alt="">
          <p> タイトル</p>
          <span>text texttext text</span>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri();?>/image/bicycle2.jpg" alt="">
          <p> タイトル</p>
          <span>text texttext text</span>
        </div>
        <div>
          <img src="<?php echo get_template_directory_uri();?>/image/bicycle3.jpg" alt="">
          <p> タイトル</p>
          <span>text texttext text</span>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();?>
