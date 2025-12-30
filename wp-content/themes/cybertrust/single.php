<?php
get_header(); ?>
<section class="hero">
	<div class="container">
		<p class="section-title">Article</p>
		<h1 class="section-heading"><?php the_title(); ?></h1>
		<p class="meta">Published on <?php echo esc_html( get_the_date() ); ?></p>
	</div>
</section>
<section class="section">
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="card">
				<?php the_content(); ?>
			</div>
		<?php endwhile; ?>
	</div>
</section>
<?php get_footer();
