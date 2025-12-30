<?php
get_header(); ?>
<section class="hero">
	<div class="container">
		<p class="section-title">Latest Updates</p>
		<h1 class="section-heading">News & Events</h1>
		<p class="section-lead">Research highlights, announcements, talks, grants, and updates from the Cybersecurity Trust Research Group.</p>
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
				<h3 style="margin:12px 0 10px; font-size:1.15rem;"><?php the_title(); ?></h3>
				<div class="meta"><?php the_excerpt(); ?></div>
				<a class="btn secondary" style="margin-top:14px;" href="<?php the_permalink(); ?>">Read more →</a>
			</article>
		<?php endwhile; else : ?>
			<div class="info-banner">No posts yet. Add posts to see updates appear here.</div>
		<?php endif; ?>
	</div>
</section>
<?php get_footer();
