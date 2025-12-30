<?php
get_header(); ?>
<section class="hero">
	<div class="container">
		<p class="section-title"><?php the_title(); ?></p>
		<h1 class="section-heading">Page</h1>
		<p class="section-lead">Custom page template baseline.</p>
	</div>
</section>
<section class="section">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
	</div>
</section>
<?php get_footer();
