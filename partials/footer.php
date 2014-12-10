<?php include 'partials/footernav.php';?>
<footer class="mainFooter">
	<p class="left">Webdesign made by <a href="#">Martinr.nl</a> feel free to download the designs <a href="#">here</a></p>
</footer>	
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
	$(function() {
		String.prototype.decodeHTML = function() {
			return $("<div>", {html: "" + this}).html();
  };

  var $main = $(".mainContent"),
  
  init = function() {
    // Do this when a page loads.
		$('.mainNavigation li a').click(function() {
			$('.mainNavigation li.current').removeClass('current');
			$(this).closest('li').addClass('current');
		});
		$('.logo').click(function() {
			$('.mainNavigation li.current').removeClass('current');
		});
		if(window.location.pathname === "/openthings/tutorial.php" || window.location.pathname === "/openthings/project.php"){
			UserRating();
		}
  },
  
  ajaxLoad = function(html) {
    document.title = html
      .match(/<title>(.*?)<\/title>/)[1]
      .trim()
      .decodeHTML();		

    init();
  },
  
  loadPage = function(href) {
    $main.load(href + " .mainContent>*", ajaxLoad);
  };
  
  init();
  
  $(window).on("popstate", function(e) {
    if (e.originalEvent.state !== null) {
      loadPage(location.href);
    }
  });

  $(document).on("click", "a, area", function() {
    var href = $(this).attr("href");

    if (href.indexOf(document.domain) > -1
      || href.indexOf(':') === -1)
    {
      history.pushState({}, '', href);
      loadPage(href);
      return false;
    }
  });
});
</script>
<script>
	function ShowComments(){
		$(".projectComments ul").slideToggle();
	}
	function AddProject(){
		$(".shareDesignBtn").click(function(){
			$(".postProject").fadeIn();
		});
		$(".close-icon").click(function(){
			$(".postProject").fadeOut();
		});
	}
	function UserRating(){
		$('.rating1').hover(function() {
			$('.rating').toggleClass('rated1'); // add class when mouseover happen
		});		
		$('.rating2').hover(function() {
			$('.rating').toggleClass('rated2'); // add class when mouseover happen
		});	
		$('.rating3').hover(function() {
			$('.rating').toggleClass('rated3'); // add class when mouseover happen
		});	
		$('.rating4').hover(function() {
			$('.rating').toggleClass('rated4'); // add class when mouseover happen
		});
		$('.rating5').hover(function() {
			$('.rating').toggleClass('rated5'); // add class when mouseover happen
		});
		$(".rating1").click(function(){
			$(".rating").addClass("isRated1");
			$(".rating").removeClass("isRated2 isRated3 isRated4 isRated5");
		});
		$(".rating2").click(function(){
			$(".rating").addClass("isRated2");
			$(".rating").removeClass("isRated3 isRated4 isRated5");
		});
		$(".rating3").click(function(){
			$(".rating").addClass("isRated3");
			$(".rating").removeClass("isRated4 isRated5");
		});
		$(".rating4").click(function(){
			$(".rating").addClass("isRated4");
			$(".rating").removeClass("isRated5");
		});
		$(".rating5").click(function(){
			$(".rating").addClass("isRated5");
		});
	}
</script>
</body>
</html>