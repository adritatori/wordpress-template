<?php
get_header(); ?>
<section class="hero dark">
	<div class="container">
		<div class="badge" aria-hidden="true">UNSW Canberra · School of Professional Studies</div>
		<h1 class="heading">Cybersecurity Trust<br><span style="color: #4fb8ff;">Research Group</span></h1>
		<p class="lede">Applied research linking governance, technical security, and emerging risks. Build resilient security solutions for enterprise cybersecurity and trustworthy AI.</p>
		<div class="stats-row">
			<div class="stat"><div class="section-title" style="margin-bottom:4px;">Research Projects</div><div style="font-size:1.8rem; font-weight:800;">50+</div></div>
			<div class="stat"><div class="section-title" style="margin-bottom:4px;">Industry Partners</div><div style="font-size:1.8rem; font-weight:800;">20+</div></div>
			<div class="stat"><div class="section-title" style="margin-bottom:4px;">Research Staff</div><div style="font-size:1.8rem; font-weight:800;">15+</div></div>
		</div>
		<div style="margin-top:24px; display:flex; gap:12px; flex-wrap:wrap;">
			<a class="btn" href="#projects">Explore research</a>
			<a class="btn secondary" href="#contact">Start a conversation</a>
		</div>
	</div>
</section>

<section id="themes" class="section">
	<div class="container">
		<p class="section-title">Research Themes</p>
		<div class="section-heading">Our Focus Areas</div>
		<p class="section-lead">We take a whole-of-system view of cybersecurity—spanning human, organisational, legal, social, and technical dimensions.</p>
		<div class="card-grid">
			<?php
			$themes = [
				['icon' => '🛡️', 'title' => 'Enterprise Cyber Governance & Risk', 'text' => 'Building resilient governance frameworks for modern enterprise security challenges.'],
				['icon' => '🎯', 'title' => 'Threat Modeling, Assurance & Resilience', 'text' => 'Understanding adversaries and building systems that withstand attacks.'],
				['icon' => '🤖', 'title' => 'Trustworthy AI for Cybersecurity', 'text' => 'Ensuring AI-powered security tools are reliable, accountable, and secure.'],
				['icon' => '💻', 'title' => 'Secure Systems, Cloud & Web Security', 'text' => 'Engineering security into modern infrastructure and applications.'],
				['icon' => '👥', 'title' => 'Socio-Technical Security & Human Factors', 'text' => 'Understanding people as both the strength and challenge of security.'],
			];

			foreach ( $themes as $theme ) : ?>
				<div class="card soft">
					<div class="badge secondary" aria-hidden="true" style="background: var(--ct-highlight-soft); color: var(--ct-highlight); padding: 8px 10px;">
						<span><?php echo esc_html( $theme['icon'] ); ?></span>
					</div>
					<h3 style="margin:14px 0 8px; font-size:1.2rem; font-weight:800;"><?php echo esc_html( $theme['title'] ); ?></h3>
					<p class="meta"><?php echo esc_html( $theme['text'] ); ?></p>
					<a class="btn secondary" style="margin-top:12px;" href="#">Explore theme →</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="projects" class="section" style="background:#f7f9fc;">
	<div class="container">
		<p class="section-title">Active Work</p>
		<div class="section-heading">Current Research</div>
		<p class="section-lead">Partners with industry and government to deliver real security outcomes.</p>
		<div class="project-grid">
			<?php
			$projects = [
				['status' => 'Active', 'title' => 'Enterprise AI Security Governance Framework', 'partner' => 'Australian Cyber...', 'year' => '2024'],
				['status' => 'Active', 'title' => 'Adversarial Robustness of Security ML Models', 'partner' => 'CSIRO Data61', 'year' => '2024'],
				['status' => 'Active', 'title' => 'Cloud Security Maturity Model for Government', 'partner' => 'Digital Transform...', 'year' => '2023'],
				['status' => 'Completed', 'title' => 'Cyber Risk Quantification for Boards', 'partner' => 'Australian Instit...', 'year' => '2022–2024'],
				['status' => 'Active', 'title' => 'Security Culture Measurement Framework', 'partner' => 'Major Financial Ins...', 'year' => '2023'],
			];

			foreach ( $projects as $project ) : ?>
				<div class="project-card">
					<div class="badge" style="margin-bottom:10px;"><?php echo esc_html( $project['status'] ); ?></div>
					<h3 style="margin:0 0 10px; font-size:1.05rem;"><?php echo esc_html( $project['title'] ); ?></h3>
					<p class="meta" style="margin:0 0 6px;">Partner: <?php echo esc_html( $project['partner'] ); ?></p>
					<p class="meta">Year: <?php echo esc_html( $project['year'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<section id="impact" class="section">
	<div class="container">
		<div class="columns">
			<div>
				<p class="section-title">Creating Impact</p>
				<h2 class="section-heading">Evidence-Driven Security Solutions</h2>
				<p class="section-lead">We deliver practical, industry-ready security frameworks. Each project translates research into outcomes organisations can implement.</p>
				<div class="stats-row">
					<div class="stat"><div class="section-title" style="margin-bottom:4px;">Community Reach</div><div style="font-size:1.6rem; font-weight:800;">25+</div></div>
					<div class="stat"><div class="section-title" style="margin-bottom:4px;">Industry Partners</div><div style="font-size:1.6rem; font-weight:800;">15+</div></div>
					<div class="stat"><div class="section-title" style="margin-bottom:4px;">Outputs</div><div style="font-size:1.6rem; font-weight:800;">30+</div></div>
				</div>
			</div>
			<div class="accent-box">
				<h3 style="margin:0 0 12px;">Recent Outputs</h3>
				<ul class="list">
					<li>Australian Cyber Governance Trust Index</li>
					<li>Security Culture Measurement Framework</li>
					<li>Trustworthy AI Maturity Model</li>
					<li>Cybersecurity Governance Playbook</li>
				</ul>
				<a class="btn secondary" style="margin-top:16px;" href="#">See deliverables →</a>
			</div>
		</div>
	</div>
</section>

<section id="people" class="section" style="background:#0f2a4f; color:var(--ct-white);">
	<div class="container">
		<div class="columns">
			<div>
				<p class="section-title" style="color:#dbe7ff;">Research Team</p>
				<h2 class="section-heading" style="color:var(--ct-white);">Meet the Researchers</h2>
				<p class="lede" style="color:#dbe7ff;">Academic leaders and emerging researchers working together on security innovation.</p>
				<a class="btn secondary" href="#team" style="background:rgba(255,255,255,0.12); color:var(--ct-white); border-color:rgba(255,255,255,0.35);">View all people</a>
			</div>
			<div>
				<div class="people-grid">
					<div class="people-card">
						<h3 style="margin:0 0 6px;">Dr. Sarah Chen</h3>
						<p class="meta">Group Director & Associate Professor</p>
						<div class="tag-row">
							<span class="tag">Cyber Governance</span>
							<span class="tag">Risk Management</span>
						</div>
					</div>
					<div class="people-card">
						<h3 style="margin:0 0 6px;">Dr. Marcus Thompson</h3>
						<p class="meta">Senior Lecturer & Threat Research Lead</p>
						<div class="tag-row">
							<span class="tag">Threat Intelligence</span>
							<span class="tag">Red Teaming</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section id="news" class="section">
	<div class="container">
		<p class="section-title">Latest Updates</p>
		<div class="section-heading">News & Events</div>
		<p class="section-lead">Keep up with grants, publications, talks, and project milestones.</p>
		<div class="news-grid">
			<?php
			$news_posts = new WP_Query( [ 'posts_per_page' => 3 ] );
			if ( $news_posts->have_posts() ) :
				while ( $news_posts->have_posts() ) : $news_posts->the_post(); ?>
					<article <?php post_class( 'news-card' ); ?>>
						<div class="meta" style="display:flex; gap:10px; align-items:center;">
							<?php $cats = get_the_category(); if ( ! empty( $cats ) ) { echo cybertrust_badge( $cats[0]->name, 'blue' ); } ?>
							<span><?php echo esc_html( get_the_date() ); ?></span>
						</div>
						<h3 style="margin:12px 0 8px; font-size:1.1rem;"><?php the_title(); ?></h3>
						<p class="meta"><?php echo wp_trim_words( get_the_excerpt(), 22 ); ?></p>
						<a class="btn secondary" style="margin-top:12px;" href="<?php the_permalink(); ?>">Read more →</a>
					</article>
			<?php	endwhile; wp_reset_postdata(); else : ?>
				<div class="info-banner">Add posts to populate the home page news section.</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section id="contact" class="section" style="background:#0c2343; color: var(--ct-white);">
	<div class="container">
		<div class="columns">
			<div>
				<p class="section-title" style="color:#dbe7ff;">Ready to Collaborate?</p>
				<h2 class="section-heading" style="color:var(--ct-white);">Start a Conversation</h2>
				<p class="lede" style="color:#dbe7ff;">Whether you’re exploring research collaboration, student projects, or have a question about our work, we’d love to hear from you.</p>
				<div style="display:flex; gap:12px; flex-wrap:wrap; margin-top:12px;">
					<a class="btn" href="mailto:cyber-trust@unsw.edu.au">Email Us</a>
					<a class="btn secondary" href="#">Collaboration form</a>
				</div>
			</div>
			<div class="card" style="background:rgba(255,255,255,0.08); color: var(--ct-white); border-color: rgba(255,255,255,0.2);">
				<h3 style="margin-top:0;">Contact Details</h3>
				<p style="color:#dbe7ff;">UNSW Canberra<br>School of Professional Studies<br>Canberra, ACT, Australia</p>
				<a class="btn secondary" style="margin-top:10px; background:rgba(255,255,255,0.14); color:var(--ct-white);" href="#">Visit UNSW Canberra →</a>
			</div>
		</div>
	</div>
</section>
<?php get_footer();
