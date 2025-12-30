<?php
/**
 * Template Name: Students Page
 */
get_header(); ?>
<section class="hero dark">
	<div class="container">
		<p class="section-title" style="color:#dbe7ff;">Student Opportunities</p>
		<h1 class="heading">Build Your Cyber Career Through Research</h1>
		<p class="lede" style="color:#dbe7ff;">Join our research group and work on real security challenges with industry partners. Our students graduate with practical skills and strong networks that launch their careers.</p>
		<a class="btn" href="#apply">Express Interest →</a>
	</div>
</section>
<section class="section">
	<div class="container">
		<h2 class="section-heading" style="text-align:center;">Research Opportunities</h2>
		<p class="section-lead" style="text-align:center;">Structured research programs across multiple levels, all focused on real-world security challenges.</p>
		<div class="card-grid">
			<?php
			$programs = [
				['title' => 'PhD Research', 'text' => 'Challenging security problems with industry relevance. Duration: 3-4 years full-time. Scholarships available.'],
				['title' => 'Masters by Research', 'text' => 'Structured research program for deeper study. Duration: 1.5-2 years full-time. Some scholarships available.'],
				['title' => 'Honours Projects', 'text' => 'Capstone projects tackling real security challenges in collaboration with our research group. Duration: 1 year.'],
			];
			foreach ( $programs as $program ) : ?>
				<div class="card">
					<div class="badge">🎓</div>
					<h3 style="margin:12px 0 8px;"><?php echo esc_html( $program['title'] ); ?></h3>
					<p class="meta"><?php echo esc_html( $program['text'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<section class="section" style="background:#f7f9fc;">
	<div class="container columns">
		<div>
			<p class="section-title">Skills Development</p>
			<h2 class="section-heading">What You'll Learn</h2>
			<p class="meta">Develop both technical security expertise and professional skills alongside experienced researchers and industry practitioners.</p>
			<ul class="list">
				<li>Security risk assessment and analysis</li>
				<li>Research design and methodology</li>
				<li>Academic writing and presentation</li>
				<li>Threat modeling and adversarial thinking</li>
				<li>Technical security engineering</li>
				<li>Industry collaboration and communication</li>
			</ul>
		</div>
		<div class="accent-box" style="background:#0f2a4f;">
			<h3 style="margin-top:0;">Student Outcomes</h3>
			<ul class="list" style="color:#dbe7ff;">
				<li>Employment within 6 months: 95%</li>
				<li>Work in cyber security: 90%</li>
				<li>HDR completions: 25+</li>
				<li>Industry partners for projects: 15+</li>
			</ul>
		</div>
	</div>
</section>
<section id="apply" class="section">
	<div class="container">
		<h2 class="section-heading" style="text-align:center;">How to Apply</h2>
		<p class="section-lead" style="text-align:center;">Interested in joining our research group? Here's how to get started.</p>
		<div class="card-grid">
			<div class="card">
				<div class="badge">1</div>
				<h3>Explore our research</h3>
				<p class="meta">Review research themes and projects to identify areas that interest you.</p>
			</div>
			<div class="card">
				<div class="badge">2</div>
				<h3>Contact us</h3>
				<p class="meta">Discuss your interests and potential supervision opportunities.</p>
			</div>
			<div class="card">
				<div class="badge">3</div>
				<h3>Develop your proposal</h3>
				<p class="meta">Work with potential supervisors to refine research ideas.</p>
			</div>
			<div class="card">
				<div class="badge">4</div>
				<h3>Apply formally</h3>
				<p class="meta">Submit your application through UNSW's graduate research portal.</p>
			</div>
		</div>
		<div style="text-align:center; margin-top:22px;">
			<a class="btn" href="mailto:cyber-trust@unsw.edu.au">Start a Conversation →</a>
		</div>
	</div>
</section>
<section class="section" style="background:#0c2343; color:var(--ct-white);">
	<div class="container" style="text-align:center;">
		<h2 class="section-heading" style="color:var(--ct-white);">Ready to Launch Your Research Career?</h2>
		<p class="lede" style="color:#dbe7ff;">Contact us to discuss opportunities and join the Cybersecurity Trust Research Group.</p>
		<a class="btn" href="mailto:cyber-trust@unsw.edu.au">Express Interest</a>
	</div>
</section>
<?php get_footer();
