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
<body class="landingPage">
		<?php include 'partials/navigation.html';?>
    <?php include 'partials/search.html';?>
		<?php include 'partials/addproject.html';?>
    <section class="mainContent left">
        <ul>
					<li class="preview left">
						<article>
							<figure class="effect-lily">
								<img src="public/images/partworks.jpg" alt="img12"/>
								<figcaption>
									<div>
										<h2 class="left">Partworks</h2>
										<p class="left">This is a tutorial for using PartWorks to prepare a file for the ShopBot</p>
									</div>
									<a href="tutorial.php">View more</a>
								</figcaption>			
							</figure>
						</article>
					</li>
        </ul>
    </section>
    <?php include 'partials/footernav.html';?>
    <footer class="mainFooter">
        <p class="left">Webdesign made by <a href="#">Martinr.nl</a> feel free to download the designs <a href="#">here</a></p>
    </footer>
		<script>
			$(".shareDesignBtn").click(function(){
				$(".postProject").slideToggle();
			});
		</script>
</body>
</html>

