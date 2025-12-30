<?php
/**
 * Template Name: News & Events Page
 */
get_header(); ?>
<section class="hero">
	<div class="container">
		<p class="section-title">Latest Updates</p>
		<h1 class="section-heading">News & Events</h1>
		<p class="section-lead">Research highlights, announcements, talks, grants, and updates from the Cybersecurity Trust Research Group.</p>
		<div class="card" style="display:flex; gap:10px; flex-wrap:wrap; padding:10px 12px;">
			<div class="badge">All</div>
			<div class="badge secondary" style="background:var(--ct-panel); color:var(--ct-muted);">Grants</div>
			<div class="badge secondary" style="background:var(--ct-panel); color:var(--ct-muted);">Talks</div>
			<div class="badge secondary" style="background:var(--ct-panel); color:var(--ct-muted);">Student Success</div>
			<div class="badge secondary" style="background:var(--ct-panel); color:var(--ct-muted);">Media</div>
		</div>
	</div>
</section>
<section class="section">
	<div class="container news-grid">
		<?php
		$news_posts = new WP_Query( [ 'posts_per_page' => 9 ] );
		if ( $news_posts->have_posts() ) :
			while ( $news_posts->have_posts() ) : $news_posts->the_post(); ?>
				<article <?php post_class( 'news-card' ); ?>>
					<div class="meta" style="display:flex; gap:10px; align-items:center;">
						<?php $cats = get_the_category(); if ( ! empty( $cats ) ) { echo cybertrust_badge( $cats[0]->name, 'blue' ); } ?>
						<span><?php echo esc_html( get_the_date() ); ?></span>
					</div>
					<h3 style="margin:12px 0 8px; font-size:1.1rem;"><?php the_title(); ?></h3>
					<p class="meta"><?php echo wp_trim_words( get_the_excerpt(), 26 ); ?></p>
					<a class="btn secondary" style="margin-top:12px;" href="<?php the_permalink(); ?>">Read more →</a>
				</article>
			<?php endwhile; wp_reset_postdata(); else : ?>
			<div class="info-banner">Add posts to populate the news listing.</div>
		<?php endif; ?>
	</div>
</section>
<?php get_footer();
