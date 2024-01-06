<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>bicycle</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/style.css">

  <header>
    <a class="logo" href="/"><h3>Profile</h3></a>

    <ul>
      <li><a href="<?php echo home_url();?>/#about">About</a></li>
      <li><a href="<?php echo home_url();?>/#bicycle">Bicycle</a></li>
    </ul>
  </header>
  <?php wp_head();?>
</head>
