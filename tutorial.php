<!DOCTYPE html>
<html lang="en-US" class="white">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="project description" />

    <title>Basic HTML start template</title>
    <link rel="icon" href="public/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="public/stylesheets/main.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</head>
<body class="projectPage">
    <?php include 'partials/navigation.html';?>
    <?php include 'partials/search.html';?>
		<?php include 'partials/addproject.html';?>
    <section class="mainContent left">
        <header class="projectHeader left">
            <img class="left" src="public/images/partworks.jpg" />
            <div class="left">
                <h1>Partworks tutorial</h1>
                <p>This is a tutorial for using PartWorks to prepare a file for the ShopBot at the Heads on Fire :: Fab Lab in San Diego, CA. This was prepared by Christian Gonzalez and Kayla Richardson.</p>
								<p><strong>Made by:</strong> Christian Gonzalez and Kayla Richardson</p>
            </div>
        </header>
        <section class="projectDetails left">
					<ul>
						<li class="left">
							<a href="#">
								<span class="icon-icon_text"></span>
								<h5>Download</h5>
								<h6>manual & files</h6>
							</a>
						</li>
						<li class="left">
							<a href="user.php">
								<span class="icon-icon_hammer"></span>
								<h5>Ask</h5>
								<h6>the maker</h6>
							</a>
						</li>
						<li class="left">
							<span class="icon-icons_difficulty4"></span>
							<h5>Project</h5>
							<h6>difficulty</h6>
						</li>
						<li class="left">
							<span class="icon-icon_share"></span>
							<h5>Share</h5>
							<h6>project</h6>
						</li>
					</ul>
        </section>
        <section class="projectComments right">
					<header class="left">
						<div class="rating left">
							<p>Rate tutorial: <span class="icon-icon_star"></span> <span class="icon-icon_star"></span> <span class="icon-icon_star"></span> <span class="icon-icon_star"></span> <span class="icon-icon_star"></span></p>
						</div>						
						<div class="right">
							<p class="viewcomments"><span class="icon-icon_down"></span>View comments</p>
						</div>
					</header>
					<ul class="left">
						<li>
							<article class="comment">
								<h1 class="gamma">What about the electronics</h1>
								<h2 class="zeta">Posted by: Martin Risseeuw</h2>
								<p>Selling excess solar or wind energy back to the power company is not a new idea. But what if, instead of selling renewable energy back to companies who then sell it to our neighbors, we could sell the energy directly to our neighbors?</p>
							</article>
						</li>
						<li>
							<article class="comment">
								<h1 class="gamma">What about the electronics</h1>
								<h2 class="zeta">Posted by: Martin Risseeuw</h2>
								<p>Selling excess solar or wind energy back to the power company is not a new idea. But what if, instead of selling renewable energy back to companies who then sell it to our neighbors, we could sell the energy directly to our neighbors?</p>
							</article>
						</li>
						<li>
							<article class="comment">
								<h1 class="gamma">What about the electronics</h1>
								<h2 class="zeta">Posted by: Martin Risseeuw</h2>
								<p>Selling excess solar or wind energy back to the power company is not a new idea. But what if, instead of selling renewable energy back to companies who then sell it to our neighbors, we could sell the energy directly to our neighbors?</p>
							</article>
						</li>
						<li>
							<article class="comment">
								<h1 class="gamma">What about the electronics</h1>
								<h2 class="zeta">Posted by: Martin Risseeuw</h2>
								<p>Selling excess solar or wind energy back to the power company is not a new idea. But what if, instead of selling renewable energy back to companies who then sell it to our neighbors, we could sell the energy directly to our neighbors?</p>
							</article>
						</li>
						<li>
							<article class="comment">
								<h1 class="gamma">What about the electronics</h1>
								<h2 class="zeta">Posted by: Martin Risseeuw</h2>
								<p>Selling excess solar or wind energy back to the power company is not a new idea. But what if, instead of selling renewable energy back to companies who then sell it to our neighbors, we could sell the energy directly to our neighbors?</p>
							</article>
						</li>
					</ul>
					<section class="commentInput left">
						<form class="left" >
							<h1 class="gamma">Add your comment</h1>
							<input placeholder="Name">
							<textarea placeholder="Your comment" rows="6"></textarea>
							<button class="left" ><span class="icon-icon_chat"></span> Submit comment</button>
						</form>
					</section>
        </section>		
			
    </section>
    <?php include 'partials/footernav.html';?>
    <footer class="mainFooter">
        <p class="left">Webdesign made by <a href="#">Martinr.nl</a> feel free to download the designs <a href="#">here</a></p>
    </footer>
	
		<script>
			$(".viewcomments").click(function(){
				$(".projectComments ul").slideToggle();
			});
			$(".shareDesignBtn").click(function(){
				$(".postProject").slideToggle();
			});
		</script>
	
</body>
</html>
