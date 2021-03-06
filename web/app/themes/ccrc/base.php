<?php get_template_part('head'); ?>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

    <!--[if lt IE 9]>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/ie7and8.css">
  <![endif]-->

  <?php
    do_action('get_header');
    get_header();
  ?>

  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
      <?php endif; ?>
    </div><!-- /.content -->
  </div><!-- /.wrap -->

  <?php get_footer(); ?>

</body>
</html>
