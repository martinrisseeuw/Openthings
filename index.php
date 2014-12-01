<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="project description" />
    <title>Basic HTML start template</title>
    <link rel="icon" href="public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="public/stylesheets/main.css" />

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.26/angular.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body>
		<?php include 'partials/navigation.html';?>
    <?php include 'partials/search.html';?>
    <section class="mainContent left">
        <ul>
					<li class="left">
						<article>
							<figure class="effect-lily">
								<img src="public/images/shareable_energy.jpg" alt="img12"/>
								<figcaption>
									<div>
										<h2>Shareable enegry</h2>
										<p>Lily likes to play with crayons and pencils</p>
									</div>
									<a href="project.php">View more</a>
								</figcaption>			
							</figure>
						</article>
					</li>
        </ul>
    </section>
    <nav class="footerNav left">
        <section class="left">
            <ul>
                <li><h1>About us</h1></li>
                <li>Who are we?</li>
                <li>Our mission</li>
                <li>Help us out</li>
                <li>Media</li>
            </ul>
        </section>
        <section class="left">
            <ul>
                <li><h1>Inspired by</h1></li>
                <li>WikiPedia</li>
                <li>OpenDesk</li>
                <li>Fablab community</li>
                <li>WikiHouse</li>
            </ul>
        </section>
        <section class="left">
            <ul>
                <li><h1>General information</h1></li>
                <li>FAQ</li>
                <li>Contact us</li>
                <li>Give us feedback</li>
            </ul>
        </section>
        <section class="left">
            <ul>
                <li><h1>Partners</h1></li>
                <li>KABK</li>
                <li>Waag society</li>
                <li>Fablab</li>
            </ul>
        </section>
    </nav>
    <footer class="mainFooter">
        <p class="left">Webdesign made by <a href="#">Martinr.nl</a> feel free to download the designs <a href="#">here</a></p>
    </footer>
</body>
</html>

