<?php
/**
 * Template Name: Research Themes Page
 */
get_header(); ?>
<section class="hero">
	<div class="container">
		<p class="section-title">Research Themes</p>
		<h1 class="section-heading">Our Research Focus Areas</h1>
		<p class="section-lead">We take a whole-of-system view of cybersecurity—addressing technical, human, organisational, and governance dimensions.</p>
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="card-grid">
			<?php
			$themes = [
				['title' => 'Enterprise Cyber Governance & Risk', 'text' => 'Building resilient governance frameworks for modern enterprise security challenges.'],
				['title' => 'Threat Modeling, Assurance & Resilience', 'text' => 'Understanding adversaries and building systems that withstand attacks.'],
				['title' => 'Trustworthy AI for Cybersecurity', 'text' => 'Ensuring AI-powered security tools are reliable, accountable, and secure.'],
				['title' => 'Secure Systems, Cloud & Web Security', 'text' => 'Engineering security into modern infrastructure and applications.'],
				['title' => 'Socio-Technical Security & Human Factors', 'text' => 'Understanding people as both the strength and challenge of security.'],
			];
			foreach ( $themes as $theme ) : ?>
				<div class="card">
					<div class="badge">🔒</div>
					<h3 style="margin:12px 0 8px; font-size:1.1rem;"><?php echo esc_html( $theme['title'] ); ?></h3>
					<p class="meta"><?php echo esc_html( $theme['text'] ); ?></p>
					<a class="btn secondary" style="margin-top:12px;" href="#">Explore theme →</a>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<section class="section" style="background:#f7f9fc;">
	<div class="container">
		<p class="section-title">Our Approach</p>
		<h2 class="section-heading">Problem → Approach → Outcome</h2>
		<p class="section-lead">Every research project starts with a real problem faced by organisations. We design research that produces practical, evidence-based solutions.</p>
		<div class="card-grid" style="grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));">
			<div class="card"><div class="badge">1</div><h3>Identify the Problem</h3><p class="meta">We work with partners to understand genuine security challenges.</p></div>
			<div class="card"><div class="badge">2</div><h3>Rigorous Research</h3><p class="meta">We apply appropriate methods—from empirical studies to systematic analysis.</p></div>
			<div class="card"><div class="badge">3</div><h3>Practical Outcomes</h3><p class="meta">We translate findings into frameworks, tools, and guidance that practitioners can apply.</p></div>
		</div>
	</div>
</section>
<?php get_footer();
