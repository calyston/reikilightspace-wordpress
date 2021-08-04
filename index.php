<?php get_header(); ?>
  <main>
    <!-- Hero Banner -->
    <section class="hero">
      <div class="hero-text">
        <h1>Gentle, Holistic Healing</h1>
				<a href="https://reikilightspace.co.uk/contact/"><button class="main-button">Book an Appointment</button></a>
      </div>
    </section>

    <!-- Welcome -->
    <section class="home-welcome">
      <h2>Welcome to Reiki Light Space</h2>
      <p class="home-text">
        The belief that life energy flows through the body, deeply affecting our entire being, 
        has been embraced by many ancient cultures. The word ‘Reiki’ means universal life energy. 
        It is a gentle, holistic method of healing and relaxation which can help to bring balance 
        and harmony on a physical, emotional and spiritual level.</p>
    </section>

    <!-- Services -->
    <section class="home-services">
      <h2>Services</h2>
      <div class="services">
        <div class="info-box">
          <img src="<?php echo get_bloginfo('template_url') ?>/assets/pictures/reiki-light.jpg" alt="reiki-light"/>
          <h3>Reiki</h3>
          <p>Reiki can help to relieve immediate stress and anxiety. It promotes the body’s ability to heal itself.</p>
          <a href="https://reikilightspace.co.uk/reiki/"><button class="main-button">Read More</button></a>
        </div>
        <div class="info-box">
          <img src="<?php echo get_bloginfo('template_url') ?>/assets/pictures/sunset.jpg" alt="sunset-beach"/>
          <h3>Hypnotherapy</h3>
          <p>Hypnotherapy is a non-invasive therapy that helps to bring about positive changes to thoughts, feelings or behaviour.</p>
          <a href="https://reikilightspace.co.uk/hypnotherapy/"><button class="main-button">Read More</button></a>
        </div>
      </div>
    </section>

    <!-- Benefits -->
    <section class="home-benefits">
      <?php
      $post_id = 25;
      $queried_post = get_post($post_id);
      ?>
      <h2><?php echo $queried_post->post_title; ?></h2>
      <p class="home-text"><?php echo $queried_post->post_content; ?></p>

      <a href="https://reikilightspace.co.uk/contact/"><button class="main-button">Book an Appointment</button></a>
    </section>
  </main>
<?php get_footer(); ?>