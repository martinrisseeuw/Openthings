<nav class="mainNavigation">
	<a href="index.php" class="logo left"><span class="icon-icon_gift"></span> openthings</a>
	<ul class="left">
			<li class="left"><a class="navitem-tutorials" href="tutorials.php">Tutorials</a></li>
			<li class="left"><a class="navitem-designers" href="designers.php">Designers</a></li>
	</ul>
	<a href="#" class="shareDesignBtn right" onClick="AddProject();"><span class="icon-icon_plus"></span> Share your designs</a>
</nav>
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