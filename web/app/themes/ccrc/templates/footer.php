<footer class="content-info" role="contentinfo">
  <div class="container">
  <div class="row">
	  <div class="col-sm-9" id="footer-about">
         <p><?php echo ot_get_option( 'footer-text' ); ?></p>
	  </div>
	    <div class="col-sm-3" id="footer-contact">
        <?php echo ot_get_option( 'footer-address' ); ?>
  </div>
  </div>

	<div id="lang-links">
   	 <?php wp_nav_menu( array('menu' => 'Footer langauge links' )); ?>
    </div>
    <div id="footer-links">
    <?php wp_nav_menu( array('menu' => 'Footer links' )); ?>
    </div>   </div>
</footer>

<?php wp_footer(); ?>
