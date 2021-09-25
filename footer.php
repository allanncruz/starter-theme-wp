<?php
  /**
   * The template for displaying the footer
   *
   * Contains the closing of the #content div and all content after.
   *
   * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
   *
   * @package Started theme wp
   */

?>
<footer class="footer bg-dark text-white pt-5 pb-4">
  <div class="container text-center text-md-left">
    <div class="row">
      <div class="col-md-6 mt-md-0 mt-3">
        <a class="footer-brand" href="<?php bloginfo("url") ?>">
          <?php
            $custom_logo_id = get_theme_mod('custom_logo');
            $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
            
            if(has_custom_logo()) {
              echo '<img src="'. esc_url($logo[0]). '" class="">';
            }else {
              echo '<h5 class="text-uppercase">'. get_bloginfo('name'). '</h5>';
            }
          ?>
        </a>
        <?php
          if(get_theme_mod('address')) { ?>
            <address>
              <i class="fas fa-map-marker-alt"></i>
              <?php echo get_theme_mod('address') ?>
            </address>
            <?php
          }if(get_theme_mod('phone_number')) { ?>
          <i class="fas fa-phone"></i>
          <?php echo get_theme_mod('phone_number');
        }if(get_theme_mod('whatsapp_number')) { ?>
          <a href="https://api.whatsapp.com/send?phone=<?php echo get_theme_mod('whatsapp_number') ?>&text="
             target="_blank"
             class="d-block"
          >
            <i class="fab fa-whatsapp"></i>
            <?php echo get_theme_mod('whatsapp_number') ?>
          </a>
        <?php } ?>
      </div>
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Menu</h5>
        <?php
          wp_nav_menu( array(
            'theme_location'    => 'principal',
            'depth'             => 2,
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
          ) );
        ?>
      </div>
      <div class="col-md-3 mb-md-0 mb-3">
        <h5 class="text-uppercase">Social</h5>
        <?php if(get_theme_mod('instagram_username')) {
          echo '<a href="'. get_theme_mod('instagram_username') . '"  target="_blank"> <i class="fab fa-instagram mr-2 fa-2x"></i> </a>';
        }
        ?>
        <?php if(get_theme_mod('facebook_username')) {
          echo '<a href="' . get_theme_mod('facebook_username') . '"  target="_blank"> <i class="fab fa-facebook-square fa-2x"></i> </a>';
        }
        ?>
      </div>
    </div>
  </div>
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a href="https://github.com/allanncruz/starter-theme-wp" target="_blank"> starter-theme-wp</a>
  </div>
</footer>
<?php wp_footer(); ?>

</body>
</html>
