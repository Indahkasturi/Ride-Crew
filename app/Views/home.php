<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Ride Crew Motorcycle Club</title>
	<meta name="description" content="Ride Crew – Elegant motorcycle club & corporate profile." />
	
</head>
<body>

	<main id="home">
		<div class="hero">
			<div class="hero-text">
				<h1><span>Ride Crew</span><br>Motorcycle Club & Corporate Circle</h1>
				<p class="tagline">An elegant fellowship of seasoned riders and business professionals. We cultivate integrity, precision, and long–term value in every journey on and off the road.</p>
			</div>
			<aside class="hero-panel">
				<h3>LEGACY • DISCIPLINE • NETWORK</h3>
				<p>Founded on camaraderie and responsibility, Ride Crew connects executive riders who cherish engineering excellence and purposeful adventures.</p>
				<p>We host curated rides, strategic forums, and service programs tailored for discerning members.</p>
				<div class="divider"></div>
				<p style="font-size:0.8rem; color:var(--amber); letter-spacing:1px; font-weight:600;">ESTABLISHED VALUES • MODERN EXECUTION</p>
			</aside>
		</div>




	</main>

	<a href="#home" class="back-top" aria-label="Back to top">↑</a>


	<script>
		const burger = document.getElementById('burger');
		const navLinks = document.getElementById('navLinks');
		burger.addEventListener('click', () => {
			const open = navLinks.classList.toggle('open');
			burger.setAttribute('aria-expanded', open);
		});
		navLinks.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>{ if(window.innerWidth<861){ navLinks.classList.remove('open'); burger.setAttribute('aria-expanded','false'); }}));
	</script>
</body>
</html>
