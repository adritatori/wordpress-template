<?php
get_header(); ?>
<section class="hero">
	<div class="container">
		<p class="section-title"><?php post_type_archive_title(); ?></p>
		<h1 class="section-heading">Archive</h1>
		<p class="section-lead">Browse posts and updates from the Cybersecurity Trust Research Group.</p>
	</div>
</section>
<section class="section">
	<div class="container news-grid">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<article <?php post_class( 'news-card' ); ?>>
				<div class="meta" style="display:flex; gap:10px; align-items:center;">
					<?php $cats = get_the_category(); if ( ! empty( $cats ) ) { echo cybertrust_badge( $cats[0]->name, 'blue' ); } ?>
					<span><?php echo esc_html( get_the_date() ); ?></span>
				</div>
				<h3 style="margin:12px 0 8px; font-size:1.1rem;"><?php the_title(); ?></h3>
				<p class="meta"><?php echo wp_trim_words( get_the_excerpt(), 26 ); ?></p>
				<a class="btn secondary" style="margin-top:12px;" href="<?php the_permalink(); ?>">Read more →</a>
			</article>
		<?php endwhile; else : ?>
			<div class="info-banner">No posts found.</div>
		<?php endif; ?>
	</div>
</section>
<?php get_footer();
