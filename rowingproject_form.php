<?php

if($_POST["message"]) {

mail("rujul@mit.edu", "Inquiry from Rowing Website",

$_POST["insert your message here"]. "From: an@email.address");

}

?>

<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Maaya and Rujul</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<!-- <a href="index.html" class="logo"><strong>Forty</strong> <span>by Rujul and Maya</span></a> -->
						<!-- <nav>
							<a href="#menu">Menu</a>
						</nav> -->
					</header>

				<!-- Menu-->
					<nav id="menu">
						<ul class="links">
							<li><a href="index.html">Home</a></li>
							<li><a href="route.html">Route</a></li>
							<li><a href="cause.html">Causes</a></li>
							<li><a href="sponsor.html">Sponsor</a></li>
							<li><a href="team.html">Team</a></li>
						</ul>
						<!--<ul class="actions stacked">
							<li><a href="#" class="button primary fit">Get Started</a></li>
							<li><a href="#" class="button fit">Log In</a></li>
						</ul>-->
					</nav>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>We're taking to choppier waters.</h1>
							</header>
							<div class="content">
								<p>Two MIT students planning to row the Pacific. For science.🤪</p>
								<ul class="actions">
									<li><a href="#contact" class="button next scrolly">Contact</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article>
									<span class="image">
										<img src="images/header_background2.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="route.html" class="link">Route</a></h3>
										<p>What?<br />
											2,500 nautical miles and 1-2 months at sea. Read about the project.</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/header_background4.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="cause.html" class="link">Causes</a></h3>
										<p>Why?<br />
											Read about our motivation, mission, and goals.</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/header_background3.jpg" alt="" />
									</span>
									<header class="major">
										<h3><a href="sponsor.html" class="link">Sponsorship</a></h3>
										<p>How?<br />
											Join us to bring this project to the start line.</p>
									</header>
								</article>
								<article>
									<span class="image">
										<img src="images/maaya1.jpeg" alt="" />
									</span>
									<header class="major">
										<h3><a href="team.html" class="link">Team</a></h3>
										<p>Whomst've?<br />
											Meet our rowers and our land team.</p>
									</header>
								</article>
							</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>Contact</h2>
									</header>
									<p>Interested in starting a conversation about
									<ul><li>Sponsorship?</li>
										<li>Scientific partnership or mentoring?</li>
										<li>Joining the team?</li>
										<li>Anything?</li></ul>
										Please reach out and we will get back to you within a few days!</p>
									<!--<ul class="actions">
										<li><a href="landing.html" class="button next">Get Started</a></li>
									</ul>-->
								</div>
							</section>

					</div>

				<!-- Contact -->
					<section id="contact">
						<div class="inner">
							<section>
								<form method="post" action="rowingproject_form.php">
									<div class="fields">
										<div class="field half">
											<label for="name">Name</label>
											<input type="text" name="name" id="name" />
										</div>
										<div class="field half">
											<label for="email">Email</label>
											<input type="text" name="email" id="email" />
										</div>
										<div class="field">
											<label for="message">Message</label>
											<textarea name="message" id="message" rows="6"></textarea>
										</div>
									</div>
									<ul class="actions">
										<li><input type="submit" value="Send Message" class="primary" /></li>
										<li><input type="reset" value="Clear" /></li>
									</ul>
								</form>
							</section>
							<section class="split">
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-envelope"></span>
										<h3>Email</h3>
										<a href="mailto:rujul@mit.edu">rujul@mit.edu</a><br />
										<a href="mailto:smprasad@mit.edu">smprasad@mit.edu</a>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-phone"></span>
										<h3>Phone</h3>
										<span>(737) 701-7790 </span>
									</div>
								</section>
								<section>
									<div class="contact-method">
										<span class="icon solid alt fa-home"></span>
										<h3>Home Base</h3>
										Cambridge, MA 02139<br />
										United States of America</span>
									</div>
								</section>
							</section>
						</div>
					</section>

				<!-- Footer -->
					<footer id="footer">
						<div class="inner">
							<ul class="icons">
								<li><a href="#" class="icon brands alt fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon brands alt fa-facebook-f"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon brands alt fa-instagram"><span class="label">Instagram</span></a></li>
								<!--<li><a href="#" class="icon brands alt fa-github"><span class="label">GitHub</span></a></li>
								<li><a href="#" class="icon brands alt fa-linkedin-in"><span class="label">LinkedIn</span></a></li>-->
							</ul>
							<ul class="copyright">
								<li>&copy; Untitled</li><li>Design: <a href="https://html5up.net">HTML5 UP</a></li>
							</ul>
						</div>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
