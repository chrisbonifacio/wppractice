<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>PHP for WordPress</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css">
</head>

<body>

  <header id="masthead">
    <h1><a href="#">PHP for WordPress</a></h1>
  </header>

  <div id="content">

    <?php if (have_posts()): while (have_posts()): the_post();  ?>

    <h2><?php echo the_title() ?></h2>
    <?php echo the_time() ?>
    <?php echo the_content() ?>

    <?php endwhile;else: ?>

    <?php _e( "Sorry! No content found", "phpforwp") ?>

    <?php endif; ?>

  </div>

</body>

</html>