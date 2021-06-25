<?php 
/**
 * Template Name: Reiki
 */
get_header(); ?>

<main>
		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
		
    <section class="reiki-page">
      <h2><?php the_title(); ?></h2>
			<!-- <img class="reiki-img" src=<?php the_post_thumbnail(); ?>> -->
      <div class="reiki-text"><?php the_content(); ?></div>
			
			<!-- Testimonial -->
			<h3>Testimonials</h3>
			<?php
      $post_id = 43;
      $queried_post = get_post($post_id);
      ?>
      <!-- <h3><?php echo $queried_post->post_title; ?></h3> -->
      <div class="testimonial-box">
        <i class="fas fa-quote-left fa-3x"></i>
        <div class="testimonial"><?php echo $queried_post->post_content; ?></div>
        <i class="fas fa-quote-right fa-3x"></i>
      </div>

			<!-- Pricing -->
			<?php
			$post_id = 34;
			$queried_post = get_post($post_id);
			?>
			<!-- <h3><?php echo $queried_post->post_title; ?></h3> -->
			<div class="pricing"><?php echo $queried_post->post_content; ?></div>
			<button class="main-button">Book an Appointment</button>

		</section>
		<?php endwhile; ?>

		<?php else : ?>
				
		<article class="post error">
			<h2 class="404">Nothing posted yet</h2>
		</article>

		<?php endif; ?>
  </main>
<?php get_footer(); ?>