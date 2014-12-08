<?php include 'partials/head.php';?>
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
    <?php include 'partials/footernav.php';?>
    <footer class="mainFooter">
        <p class="left">Webdesign made by <a href="#">Martinr.nl</a> feel free to download the designs <a href="#">here</a></p>
    </footer>
		<script>
			$(".shareDesignBtn").click(function(){
				$(".postProject").slideToggle();
			});
			$("body").load("partials/tutorials.php");
		</script>
</body>
</html>