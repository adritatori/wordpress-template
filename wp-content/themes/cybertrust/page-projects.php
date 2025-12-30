<?php
/**
 * Template Name: Projects Page
 */
get_header(); ?>
<section class="hero">
	<div class="container">
		<p class="section-title">Our Research</p>
		<h1 class="section-heading">Projects</h1>
		<p class="section-lead">Explore current and completed research projects, developed in partnership with industry, government, and academic collaborators.</p>
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="card-grid" style="grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); margin-bottom: 18px;">
			<div class="card soft" style="text-align:center;">
				<div class="section-heading" style="margin:0;">4</div>
				<p class="meta">Active Projects</p>
			</div>
			<div class="card soft" style="text-align:center;">
				<div class="section-heading" style="margin:0;">2</div>
				<p class="meta">Completed</p>
			</div>
		</div>
		<div class="search-filter">
			<input type="search" placeholder="Search projects..." aria-label="Search projects">
			<select aria-label="Status">
				<option>All Status</option>
				<option>Active</option>
				<option>Completed</option>
			</select>
			<select aria-label="Theme">
				<option>All Themes</option>
				<option>Governance</option>
				<option>AI Security</option>
				<option>Human Factors</option>
			</select>
			<select aria-label="Partner">
				<option>All Partners</option>
				<option>Government</option>
				<option>Industry</option>
				<option>Academic</option>
			</select>
		</div>
		<div class="project-grid">
			<?php
			$projects = [
				['status' => 'Active', 'theme' => 'Government', 'title' => 'Enterprise AI Security Governance Framework', 'summary' => 'Practical governance frameworks for organisations deploying AI-powered security tools.', 'partner' => 'Australian Cyber...', 'year' => '2024'],
				['status' => 'Active', 'theme' => 'Academic', 'title' => 'Adversarial Robustness of Security ML Models', 'summary' => 'Improving robustness of AI-powered security tools against adversarial attacks.', 'partner' => 'CSIRO Data61', 'year' => '2024'],
				['status' => 'Active', 'theme' => 'Government', 'title' => 'Cloud Security Maturity Model for Government', 'summary' => 'Structured maturity models for government cloud security assessment.', 'partner' => 'Digital Transform...', 'year' => '2023'],
				['status' => 'Active', 'theme' => 'Industry', 'title' => 'Security Culture Measurement Framework', 'summary' => 'Evidence-based tools for measuring organisational security culture.', 'partner' => 'Major Financial Ins...', 'year' => '2023'],
				['status' => 'Completed', 'theme' => 'Industry', 'title' => 'Cyber Risk Quantification for Boards', 'summary' => 'Board-level cyber risk communication and quantification tools.', 'partner' => 'Australian Instit...', 'year' => '2022–2024'],
				['status' => 'Completed', 'theme' => 'Government', 'title' => 'Threat Intelligence Sharing Barriers', 'summary' => 'Identifying barriers to threat intelligence sharing and practical solutions.', 'partner' => 'Industry Partners', 'year' => '2022–2023'],
			];
			foreach ( $projects as $project ) : ?>
				<div class="project-card">
					<div style="display:flex; gap:8px; flex-wrap:wrap; margin-bottom:10px;">
						<span class="badge" style="background: rgba(78, 192, 255, 0.15); color:#1b4fa3;"><?php echo esc_html( $project['status'] ); ?></span>
						<span class="badge" style="background: rgba(27, 191, 122, 0.12); color:var(--ct-badge-green);"><?php echo esc_html( $project['theme'] ); ?></span>
					</div>
					<h3 style="margin:0 0 10px; font-size:1.05rem;"><?php echo esc_html( $project['title'] ); ?></h3>
					<p class="meta" style="margin:0 0 10px;"><?php echo esc_html( $project['summary'] ); ?></p>
					<p class="meta" style="margin:0;">Partner: <?php echo esc_html( $project['partner'] ); ?> · <?php echo esc_html( $project['year'] ); ?></p>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php get_footer();
