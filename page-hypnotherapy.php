<?php 
/**
 * Template Name: Hypnotherapy
 */
get_header(); ?>

<main>
		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
		
    <section class="hypnotherapy-page">
      <h2 class="page-title"><?php the_title(); ?></h2>
      <div class="hypnotherapy-text"><?php the_content(); ?></div>
      <!-- <img class="hypnotherapy-img" src=<?php the_post_thumbnail(); ?>> -->
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