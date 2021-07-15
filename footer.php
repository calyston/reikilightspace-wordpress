<?php ?>

</main>

<footer>
<a href="<?php echo get_bloginfo('url') ?>"><img id="logo" src="<?php echo get_bloginfo('template_url') ?>/assets/pictures/full-logo.png" alt="logo"/></a>
    <section class="footer-text">
      <div class="link-tree">
        <?php wp_nav_menu( array( 'theme_location' => 'footer-menu' ) );?>
      </div>
      <?php dynamic_sidebar('contact-info'); ?>
      <div class="sns">
        <a href="">
          <p><i class="fab fa-facebook-f fa-2x"></i></p>
        </a>
        <a href="">
          <p><i class="fab fa-instagram fa-2x"></i></p>
        </a>
      </div>
    </section>
    <p>Privacy Policy | Terms and Conditions</p>
    <p>&copy; 2021 Reiki Light Space | All Rights Reserved | Created by <a href="https://christinelyston.co.uk/" target="blank">Christine Lyston</a></p>
    <!-- <p>Created by <a href="https://christinelyston.co.uk/" target="blank">Christine Lyston</a></p> -->
  </footer>

<?php wp_footer(); ?>
  <script src="main.js"></script>
  <script src="https://kit.fontawesome.com/74fdfd1d95.js" crossorigin="anonymous"></script>
</body>
</html>
