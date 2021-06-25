<?php get_header(); ?>
  <main>
    <!-- Hero Banner -->
    <section class="hero">
      <div class="hero-text">
        <h1>Meaningful headline</h1>
				<button class="main-button">Book an Appointment</button>
      </div>
    </section>

    <!-- Welcome -->
    <section class="home-welcome">
      <h2>Welcome to Reiki Light Space</h2>
      <p class="home-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit at amet officiis reprehenderit
        tempore vitae
        assumenda rerum, in, adipisci laborum pariatur distinctio, voluptatibus officia vero sapiente. Quae magnam,
        eligendi quidem beatae consectetur est aliquid. Magnam ab cumque maiores assumenda temporibus.</p>
    </section>

    <!-- Services -->
    <section class="home-services">
      <h2>Services</h2>
      <div class="services">
        <div class="info-box">
          <img src="<?php echo get_bloginfo('template_url') ?>/assets/pictures/reiki-light.jpg" alt="reiki-light"/>
          <h3>Reiki</h3>
          <p>Reiki can help to relieve immediate stress and anxiety. It promotes the body’s ability to heal itself.</p>
          <button class="main-button">Read More</button>
        </div>
        <div class="info-box">
          <img src="<?php echo get_bloginfo('template_url') ?>/assets/pictures/sunset.jpg" alt="sunset-beach"/>
          <h3>Hypnotherapy</h3>
          <p>Hypnotherapy is a non-invasive therapy that helps to bring about positive changes to thoughts, feelings or behaviour.</p>
          <button class="main-button">Read More</button>
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
    </section>

    <!-- Testimonials -->
    <section class="home-testimonials">
      <h2>Testimonials</h2>
      <?php
      $post_id = 43;
      $queried_post = get_post($post_id);
      ?>
      <!-- <h2><?php echo $queried_post->post_title; ?></h2> -->
      <div class="testimonial-box">
        <i class="fas fa-quote-left fa-3x"></i>
        <div class="testimonial"><?php echo $queried_post->post_content; ?></div>
        <i class="fas fa-quote-right fa-3x"></i>
      </div>
      <button class="main-button">Book an Appointment</button>
    </section>
  </main>
<?php get_footer(); ?>