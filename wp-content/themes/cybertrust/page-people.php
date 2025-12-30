<?php
/**
 * Template Name: People Page
 */
get_header(); ?>
<section class="hero">
	<div class="container">
		<p class="section-title">Our Team</p>
		<h1 class="section-heading">People</h1>
		<p class="section-lead">Meet the researchers, students, and collaborators driving our security research forward.</p>
	</div>
</section>
<section class="section">
	<div class="container">
		<div class="card" style="padding:12px; margin-bottom:18px; display:flex; gap:10px; flex-wrap:wrap;">
			<div class="badge">All (6)</div>
			<div class="badge secondary" style="background:var(--ct-panel); color:var(--ct-muted);">Academic Leads (2)</div>
			<div class="badge secondary" style="background:var(--ct-panel); color:var(--ct-muted);">Researchers (1)</div>
			<div class="badge secondary" style="background:var(--ct-panel); color:var(--ct-muted);">HDR Students (2)</div>
			<div class="badge secondary" style="background:var(--ct-panel); color:var(--ct-muted);">Collaborators (1)</div>
		</div>
		<h3>Academic Leads</h3>
		<div class="people-grid" id="team">
			<div class="people-card">
				<div class="badge">Academic Lead</div>
				<h4 style="margin:10px 0 6px;">Dr. Sarah Chen</h4>
				<p class="meta">Group Director & Associate Professor</p>
				<div class="tag-row">
					<span class="tag">Cyber Governance</span>
					<span class="tag">Risk Management</span>
				</div>
			</div>
			<div class="people-card">
				<div class="badge">Academic Lead</div>
				<h4 style="margin:10px 0 6px;">Dr. Marcus Thompson</h4>
				<p class="meta">Senior Lecturer & Threat Research Lead</p>
				<div class="tag-row">
					<span class="tag">Threat Intelligence</span>
					<span class="tag">Red Teaming</span>
				</div>
			</div>
		</div>
		<h3 style="margin-top:32px;">Researchers</h3>
		<div class="people-grid">
			<div class="people-card">
				<div class="badge">Researcher</div>
				<h4 style="margin:10px 0 6px;">Dr. Emily Watson</h4>
				<p class="meta">Research Fellow, AI Security</p>
				<div class="tag-row">
					<span class="tag">Machine Learning</span>
					<span class="tag">Adversarial AI</span>
					<span class="tag">Security Automation</span>
				</div>
			</div>
		</div>
		<h3 style="margin-top:32px;">HDR Students</h3>
		<div class="people-grid">
			<div class="people-card">
				<div class="badge">HDR Student</div>
				<h4 style="margin:10px 0 6px;">James Liu</h4>
				<p class="meta">PhD Candidate</p>
				<div class="tag-row">
					<span class="tag">Cloud Security</span>
					<span class="tag">Security Architecture</span>
					<span class="tag">Financial Services</span>
				</div>
			</div>
			<div class="people-card">
				<div class="badge">HDR Student</div>
				<h4 style="margin:10px 0 6px;">Priya Sharma</h4>
				<p class="meta">PhD Candidate</p>
				<div class="tag-row">
					<span class="tag">Security Culture</span>
					<span class="tag">Behavioural Security</span>
					<span class="tag">Organisational Change</span>
				</div>
			</div>
		</div>
		<h3 style="margin-top:32px;">Collaborators</h3>
		<div class="people-grid">
			<div class="people-card">
				<div class="badge">Collaborator</div>
				<h4 style="margin:10px 0 6px;">Dr. Michael Reeves</h4>
				<p class="meta">Industry Fellow, Defence</p>
				<div class="tag-row">
					<span class="tag">Critical Infrastructure</span>
					<span class="tag">Defence</span>
					<span class="tag">Risk Assessment</span>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer();
