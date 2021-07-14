<?php
/**
 * Template Name: Privacy Policy
 */
get_header(); ?>

<main>
		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
		
    <section class="about-page">
      <h2 class="page-title"><?php the_title(); ?></h2>
      <div class="about-text"><?php the_content(); ?></div>
      
    </section>
		<?php endwhile; ?>

		<?php else : ?>
				
		<article class="post error">
			<h2 class="404">Nothing posted yet</h2>
		</article>

		<?php endif; ?>
  </main>
<?php get_footer(); ?>