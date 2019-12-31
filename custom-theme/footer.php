<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package custom_theme
 */

?>

</div><!-- #content -->
<footer class="footer">
  <div class="footer_top">
     <div class="container">
        <div class="row">
           <div class="col-md-6 col-lg-4">
              <div class="footer_widget">
               <?php dynamic_sidebar('footer-column-1');?>
              </div>
           </div>
           <div class="col-md-6 col-lg-4 footer-logo">
           	<div class="footer_logo">
                    <?php dynamic_sidebar('footer-column-2') ?>
                 </div>
           </div>
           <div class="col-md-6 col-lg-4">
              <div class="footer_widget">
                 <!-- <h3 class="footer_title">Services</h3> -->
                  <?php dynamic_sidebar('footer-column-3') ?>
              </div>
           </div>
        </div>
     </div>
  </div>
  <div class="copy-right_text">
     <div class="container">
        <div class="footer_border"></div>
        <div class="row">
           <div class="col-xl-12">
              <p class="copy_right text-center">
                 <?php echo do_shortcode('[CopyrightTextWithYear]'); ?>
              </p>
           </div>
        </div>
     </div>
  </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
