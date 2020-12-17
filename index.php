<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
	<link rel="shortcut icon" href="images/BingeIt.png" />
	<title>BingeIt - Home</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css" />
	<link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<a href="index.php" class="logo"><strong>BingeIt</strong></a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				<li><a href="index.php">Home</a></li>
				<li><a href="my_favourites.html">My Favourites</a></li>
				<li><a href="active_watchlist.html">Active WatchList</a></li>
			</ul>
			<ul class="actions stacked">
				<li><a href="login2.php" class="button fit">Log In</a></li>
			</ul>
		</nav>

		<?php
            $url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
 if (strpos($url, "done") !== false) {
  $id=trim($url,'http://localhost/BingeIt/index.php?sucsess=');
   echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-success" role="alert">
           Account sucessfully created
         </div>';
 }
 elseif (strpos($url, "login=error") !== false) {
  echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-danger" role="alert">
          An error occured please try again later
        </div>';
}
elseif (strpos($url, "success") !== false) {
  $id=trim($url,'http://localhost/BingeIt/index.php?success=');
  echo '<div class="col-md-4 offset-md-4 col-sm-4 offset-sm-4 container text-center alert alert-success" role="alert">
          Welcome
        </div>';
}
  ?>

		<!-- Banner -->
		<section id="banner" class="major">
			<div class="inner">
				<header class="major">
					<div class="bingeitlogo">
						<h1>
							<img src="images/BingeIt.png">
							BingeIt
						</h1>
					</div>
				</header>
				<div class="content">
					<p>Get comfortable, some nachos, some drinks & BingeIt with us</p>
					<ul class="actions rotate">
						<li><a href="login2.php" class="button next scrolly">Get Started</a></li>
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
						<img src="images/netlfix.jpg" alt="" />
					</span>
					<header class="major">
						<h3><a href="https://www.netflix.com/in/" class="link">Netflix</a></h3>
						<p>Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies,
							anime, documentaries and more – on thousands of internet-connected devices.</p>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="images/amazon.jpg" alt="" />
					</span>
					<header class="major">
						<h3><a href="https://www.primevideo.com/storefront/home/ref=atv_nb_logo" class="link">Amazon
								Prime Video</a></h3>
						<p>Watch Unlimited Movies, TV Shows & Get Free Shipping Benefits with Amazon Prime. Watch Latest
							& Exclusive Bollywood, Hollywood Movies, US TV & Kids Shows</p>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="images/hotstar.jpg" alt="" />
					</span>
					<header class="major">
						<h3><a href="https://www.hotstar.com/in" class="link">Disney<sup>+</sup> Hotstar</a></h3>
						<p>Avengers. Frozen. Toy Story. Mickey Mouse. Star Wars. Mandalorian. And lots more. There’s
							something for everyone in your family on Disney+ Hotstar.</p>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="images/youtube.jpg" alt="" />
					</span>
					<header class="major">
						<h3><a href="https://www.youtube.com" class="link">Youtube</a></h3>
						<p>Enjoy the videos and music you love, upload original content and share it all with friends,
							family and the world on YouTube.</p>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="images/zee5.png" alt="" />
					</span>
					<header class="major">
						<h3><a href="https://www.zee5.com" class="link">Zee5</a></h3>
						<p>FEATURED All Zindagi Shows Now Available On The ZEE5 Club Pack #HappyRahengeSab ZEE sets
							itself apart with the new 'ZEE5 club pack'</p>
					</header>
				</article>
				<article>
					<span class="image">
						<img src="images/voot.png" alt="" />
					</span>
					<header class="major">
						<h3><a href="https://www.voot.com" class="link">Voot</a></h3>
						<p>Watch TV Shows, Latest Shows Episodes, TV Shows Clips, Popular TV Series and many more on
							VOOT with Genres like Comedy, Drama, Reality and many more!</p>
					</header>
				</article>
			</section>

			<!-- Two -->
			<section id="two">
				<div class="inner">
					<header class="major">
						<h2>Our Plans & Toplists</h2>
					</header>
					<p>We have made some plans and toplists specially for you. Click here to have a look at some of them
					</p>
					<ul class="actions">
						<li><a href="our_plans.html" class="button next">Hop on</a></li>
					</ul>

				</div>
			</section>

		</div>

		<!-- Contact -->
		<section id="contact">
			<div class="inner">
				<section class="split">
					<section>
						<div class="contact-method">
							<span class="icon solid alt fa-envelope"></span>
							<h3>Email</h3>
							<a href="mailto:bingeitsakec@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>
								&nbsp; E-mail To us at bingeitsakec@gmail.com</a>
						</div>
					</section>
				</section>
				<section class="split">
					<section>
						<div class="contact-method">
							<span class="icon solid alt fa-phone"></span>
							<h3>Phone</h3>
							<a href="tel:+917678060767" class="tel"><i class="fa fa-phone" aria-hidden="true"></i>
								&nbsp; Call us at - +917678060767</a>
						</div>
					</section>
				</section>
			</div>
		</section>

		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<ul class="copyright">
					<center>
						<li>&copy; <b>BingeIt</b> &nbsp; All Rights Reserved</li>
						<li><b>Designed by: &nbsp; Ms. Prishita Sinha | &nbsp; Mr. Ritik Soni | &nbsp; Mr. Siddhant
								Zaveri</b></li>
					</center>
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