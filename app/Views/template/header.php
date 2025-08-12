<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<title>Document</title>
	<style>
		:root {
			--light: #F4F4F4;
			--amber: #F0A500;
			--amber-deep: #CF7500;
			--ink: #1A1C20;
		}

		* {
			box-sizing: border-box;
		}

		body {
			margin: 0;
			font-family: "Segoe UI", Arial, sans-serif;
			background: var(--light);
			color: var(--ink);
			line-height: 1.6;
		}

		a {
			text-decoration: none;
			color: inherit;
		}

		header {
			position: sticky;
			top: 0;
			z-index: 100;
			background: var(--ink);
			border-bottom: 4px solid var(--amber-deep);
		}

		.nav-wrapper {
			max-width: 1180px;
			margin: 0 auto;
			display: flex;
			align-items: center;
			justify-content: space-between;
			padding: 14px 28px;
		}

		.brand {
			display: flex;
			align-items: center;
			gap: 12px;
			font-weight: 700;
			letter-spacing: 1px;
		}

		.brand-mark {
			width: 46px;
			height: 46px;
			border: 2px solid var(--amber);
			color: var(--amber);
			display: flex;
			align-items: center;
			justify-content: center;
			font-weight: 600;
			font-size: 14px;
			border-radius: 50%;
		}

		nav ul {
			list-style: none;
			display: flex;
			gap: 34px;
			margin: 0;
			padding: 0;
		}

		nav li {
			font-size: 0.88rem;
			font-weight: 600;
			letter-spacing: 0.5px;
		}

		nav a {
			color: var(--light);
			position: relative;
			padding: 4px 0;
		}

		nav a::after {
			content: "";
			position: absolute;
			left: 0;
			bottom: 0;
			height: 2px;
			width: 0;
			background: var(--amber);
			transition: width .25s ease;
		}

		nav a:hover::after,
		nav a:focus::after {
			width: 100%;
		}

		.burger {
			display: none;
			flex-direction: column;
			gap: 5px;
			cursor: pointer;
		}

		.burger span {
			width: 26px;
			height: 3px;
			background: var(--amber);
			display: block;
		}

		/* Hero */
		.hero {
			max-width: 1180px;
			margin: 0 auto;
			padding: 110px 28px 70px;
			display: flex;
			flex-wrap: wrap;
			align-items: center;
			gap: 60px;
		}

		.hero-text {
			flex: 1 1 430px;
		}

		h1 {
			margin: 0 0 18px;
			font-size: 3rem;
			line-height: 1.15;
			font-weight: 800;
			color: var(--ink);
		}

		h1 span {
			color: var(--amber-deep);
		}

		.tagline {
			font-size: 1.05rem;
			max-width: 560px;
			margin-bottom: 26px;
		}

		.cta-group {
			display: flex;
			gap: 18px;
			border: #F0A500;
			flex-wrap: wrap;
		}

		.btn {
			padding: 14px 30px;
			font-size: 1rem;
			font-weight: 600;
			letter-spacing: 0.5px;
			border: 2px solid transparent;
			border-radius: 6px;
			cursor: pointer;
			transition: all .25s ease;
		}

		.btn:hover {
			background: var(--amber-deep);
			color: #fff;
		}

		.btn.outline {
			background: transparent;
			border-color: var(--amber);
			color: var(--amber);
		}

		.btn.outline:hover {
			background: var(--amber);
			color: var(--ink);
		}

		.hero-panel {
			flex: 1 1 340px;
			background: var(--ink);
			color: var(--light);
			padding: 40px 38px 46px;
			border-left: 6px solid var(--amber-deep);
			border-radius: 10px;
			box-shadow: 0 10px 28px -8px rgba(0, 0, 0, .35);
		}

		.hero-panel h3 {
			margin: 0 0 14px;
			font-size: 1.05rem;
			letter-spacing: 1px;
			color: var(--amber);
			font-weight: 700;
		}

		.hero-panel p {
			margin: 0 0 10px;
			font-size: 0.92rem;
		}

		.divider {
			height: 3px;
			width: 70px;
			background: var(--amber);
			margin: 24px 0 26px;
		}

		/* Sections */
		section {
			padding: 60px 28px;
			min-height: 100vh;
		}

		.section-inner {
			max-width: 1180px;
			margin: 0 auto;
		}

		.section-header {
			display: flex;
			align-items: flex-end;
			gap: 18px;
			margin-bottom: 34px;
		}

		.section-header h2 {
			margin: 0;
			font-size: 1.9rem;
			letter-spacing: 1px;
			font-weight: 700;
			color: var(--ink);
		}

		.section-header small {
			color: var(--amber-deep);
			font-weight: 600;
			letter-spacing: 1px;
		}

		.two-col {
			display: grid;
			gap: 50px;
			grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
			align-items: start;
		}

		.card-list {
			list-style: none;
			margin: 0;
			padding: 0;
			display: grid;
			gap: 22px;
		}

		.card {
			background: #fff;
			border: 1px solid #ddd;
			padding: 22px 24px 26px;
			border-left: 5px solid var(--amber-deep);
			border-radius: 6px;
			box-shadow: 0 4px 14px -6px rgba(0, 0, 0, .15);
		}

		.card h3 {
			margin: 0 0 6px;
			font-size: 1.05rem;
			letter-spacing: 0.5px;
			color: var(--ink);
		}

		.card p {
			margin: 0;
			font-size: 0.85rem;
			color: #333;
		}

		.strip-dark {
			background: var(--ink);
			color: var(--light);
		}

		.strip-dark .section-header h2 {
			color: var(--light);
		}

		.products-grid {
			display: grid;
			gap: 26px;
			grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
		}

		.product {
			background: #fff;
			border: 1px solid #d8d8d8;
			padding: 20px 22px 24px;
			border-top: 5px solid var(--amber);
			border-radius: 6px;
			position: relative;
		}

		.product h3 {
			margin: 4px 0 10px;
			font-size: 1rem;
			color: var(--ink);
		}

		.product span {
			position: absolute;
			top: 10px;
			right: 14px;
			font-size: 0.65rem;
			letter-spacing: 1px;
			color: var(--amber-deep);
			background: var(--light);
			padding: 4px 8px;
			border-radius: 20px;
			font-weight: 600;
		}

		.gallery-grid {
			display: grid;
			gap: 14px;
			grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
		}

		.gallery-grid div {
			background: linear-gradient(135deg, var(--amber) 0%, var(--amber-deep) 90%);
			aspect-ratio: 4/1;
			border-radius: 6px;
			position: relative;
			overflow: hidden;
			box-shadow: 0 6px 30px -6px rgba(0, 0, 0, .4);
		}

		.gallery-grid div::after {
			position: absolute;
			inset: 0;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 1.8rem;
			color: rgba(255, 255, 255, .15);
			font-weight: 400;
			letter-spacing: 4px;
		}

		.articles {
			display: grid;
			gap: 30px;
			grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
		}

		.article {
			background: #fff;
			border: 1px solid #dadada;
			padding: 22px 24px 30px;
			border-left: 5px solid var(--amber);
			border-radius: 6px;
			position: relative;
		}

		.article h3 {
			margin: 0 0 10px;
			font-size: 1rem;
			letter-spacing: 0.5px;
		}

		.article time {
			font-size: 0.65rem;
			letter-spacing: 1px;
			font-weight: 600;
			color: var(--amber-deep);
		}

		.events {
			display: grid;
			gap: 24px;
			grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
		}

		.event {
			background: #fff;
			border: 1px solid #d2d2d2;
			padding: 20px 22px 24px;
			border-left: 5px solid var(--amber-deep);
			border-radius: 6px;
		}

		.clients {
			display: grid;
			gap: 30px;
			grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
			align-items: center;
		}

		.client {
			background: #fff;
			border: 1px solid #e2e2e2;
			padding: 24px 14px;
			text-align: center;
			font-weight: 600;
			letter-spacing: 1px;
			color: var(--amber-deep);
			border-radius: 6px;
			box-shadow: 0 4px 10px -6px rgba(0, 0, 0, .2);
		}

		.contact-grid {
			display: grid;
			gap: 40px;
			grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
		}

		form {
			display: grid;
			gap: 16px;
		}

		input,
		textarea {
			padding: 14px 16px;
			border: 1px solid #c9c9c9;
			border-radius: 4px;
			font: inherit;
			background: #fff;
		}

		textarea {
			min-height: 140px;
			resize: vertical;
		}

		footer {
			background: var(--ink);
			color: #9c9c9c;
			padding: 40px 28px 60px;
			font-size: 0.75rem;
			letter-spacing: 0.5px;
		}

		footer .footer-inner {
			max-width: 1180px;
			margin: 0 auto;
			display: flex;
			flex-wrap: wrap;
			gap: 40px;
			justify-content: space-between;
		}

		footer strong {
			color: var(--light);
		}

		.back-top {
			position: fixed;
			right: 18px;
			bottom: 18px;
			background: var(--amber-deep);
			color: #fff;
			width: 42px;
			height: 42px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			font-weight: 700;
			font-size: 0.9rem;
			box-shadow: 0 4px 18px -4px rgba(0, 0, 0, .5);
		}

		.back-top:hover {
			background: var(--amber);
			color: var(--ink);
		}

		@media (max-width:980px) {
			nav ul {
				gap: 22px;
			}
		}

		@media (max-width:860px) {
			nav ul {
				position: fixed;
				inset: 70px 0 auto 0;
				background: var(--ink);
				flex-direction: column;
				padding: 40px 34px 60px;
				gap: 22px;
				transform: translateY(-130%);
				transition: transform .4s ease;
				border-bottom: 4px solid var(--amber-deep);
			}

			nav ul.open {
				transform: translateY(0);
			}

			.burger {
				display: flex;
			}
		}

		@media (max-width:640px) {
			h1 {
				font-size: 2.3rem;
			}

			.hero {
				padding-top: 90px;
			}
		}
	</style>
</head>

<body>
	<header>
		<div class="nav-wrapper">
			<div class="brand">
				<div class="brand-mark">RC</div>
				<a href="/" style="color: var(--light)">
					<span style="font-weight: 800;">RIDE CREW</span>
				</a>
			</div>
			<nav>
				<div class="burger" id="burger" aria-label="Menu" aria-expanded="false">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<ul id="navLinks">
					<li><a href="/about-us">Tentang</a></li>
					<li><a href="/Visi-Misi">Visi & Misi</a></li>
					<li><a href="/profile">Profile</a></li>
					<li><a href="/product">Produk & Layanan</a></li>
					<li><a href="/gallery">Gallery</a></li>
					<li><a href="/articles">Articles</a></li>
					<li><a href="/events">Events</a></li>
					<li><a href="/clients">Clients</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<script>
		// Toggle menu for burger on mobile
		const burger = document.getElementById('burger');
		const navLinks = document.getElementById('navLinks');

		burger.addEventListener('click', () => {
			const expanded = burger.getAttribute('aria-expanded') === 'true' || false;
			burger.setAttribute('aria-expanded', !expanded);
			navLinks.classList.toggle('open');
		});
	</script>
</body>

</html>