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
    <div class="iconSprite" ng-include="'public/icons/svg-defs.svg'"></div>
		<?php include 'partials/navigation.html';?>
    <section class="mainSearch">
        <form class="left">
            <input placeholder="Search: description, tag, type of product">
            <button type="submit">Search</button>
        </form>
        <ul>
            <li>Expanded search</li>
        </ul>
    </section>
    <section class="mainContent left">
        <ul>
						<li class="left">
                <article>
                    <a href="project.php"><img src="public/images/shareable_energy.jpg" /></a>
                    <header>
                        <a href="project.php"><h1>Shareable energy blocks</h1></a>
                        <a href="project.php"><p>A project for green shareable energy</p></a>
                    </header>
                </article>
            </li>
            <li class="left">
                <article>
                    <a href="project.php"><img src="public/images/project_thumbnail.jpg" /></a>
                    <header>
                        <a href="project.php"><h1 class="delta">Plywood desk</h1></a>
                        <a href="project.php"><p>Easy to build plywood desk</p></a>
                    </header>
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

