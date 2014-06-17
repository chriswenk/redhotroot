<?php get_template_part('templates/head'); ?>
<body id="page-top" <?php body_class(); ?>>

  <!--[if lt IE 8]>
    <div class="alert alert-warning">
      <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'roots'); ?>
    </div>
  <![endif]-->

    <!-- Navigation -->
  <?php
    do_action('get_header');
    // Use Bootstrap's navbar if enabled in config.php
    if (current_theme_supports('bootstrap-top-navbar')) {
      get_template_part('templates/header-top-navbar');
    } else {
      get_template_part('templates/header');
    }
  ?>


  <div id="wrapper">

        <!-- Sidebar -->


       <!-- Page content -->
  <div class="wrap container" role="document">
    <div class="content row">
      <main class="main <?php echo roots_main_class(); ?>" role="main">
        <?php include roots_template_path(); ?>
      </main><!-- /.main -->
      <?php if (roots_display_sidebar()) : ?>
        <aside class="sidebar <?php echo roots_sidebar_class(); ?>" role="complementary">
          <?php include roots_sidebar_path(); ?>
        </aside><!-- /.sidebar -->
      <?php endif; ?>


    </div>
    </div><!-- /.content -->


     <?php get_template_part('templates/footer'); ?>
  </div><!-- /.wrap -->


     <script src="<?php echo get_template_directory_uri(); ?>/assets/js/cbpAnimatedHeader.js"></script>
     <script src="<?php echo get_template_directory_uri(); ?>/assets/js/classie.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

</body>
</html>
