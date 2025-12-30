<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="navbar">
	<div class="container">
		<a class="brand" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<span class="logo-box">CT</span>
			<div>
				<div style="font-weight:800; font-size:0.95rem;">Cybersecurity Trust</div>
				<small style="color:var(--ct-muted); font-weight:600;">UNSW Canberra</small>
			</div>
		</a>
		<nav aria-label="Primary">
			<?php
				wp_nav_menu( [
					'theme_location' => 'primary',
					'container'      => false,
					'menu_class'     => 'nav-links',
					'fallback_cb'    => false,
				] );
			?>
		</nav>
		<div style="display:flex; align-items:center; gap:12px;">
			<button class="btn secondary" aria-label="Search"><span aria-hidden="true">🔍</span></button>
			<a class="btn" href="#contact">Collaborate</a>
		</div>
	</div>
</header>
<main>
