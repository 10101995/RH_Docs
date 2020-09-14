<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Documentation Gestion RH</title>
    <link rel="shortcut icon" type="image/png" href="https://via.placeholder.com/20.png" >
    <link href="https://fonts.googleapis.com/css?family=Heebo:300,400" rel="stylesheet">
    <link rel="stylesheet" href="sources/css/main.css" />
    <script src="sources/js/uikit.js"></script>
</head>

<body>

<header>
	<div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent; top: 200">
	  <nav class="uk-navbar-container">
	    <div class="uk-container">
	      <div data-uk-navbar>
	        <div class="uk-navbar-left">
	          <a class="uk-navbar-item uk-logo uk-visible@m" href="index.php"> <img src="images/WMC_logo.png" width="30" alt="" srcset="">   Docs RH</a>
	          <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas-docs" data-uk-toggle><span
	              data-uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Docs</span></a>
	          <ul class="uk-navbar-nav uk-visible@m">
	            <li class="uk-active"><a href="index.php">Accueil</a></li>
	            <!-- <li ><a href="doc.html">Docs</a></li>
	            <li ><a href="blog.html">Blog</a></li> -->
	            <li >
	              <!-- <a href="#">Changelogs</a> -->
	              <div class="uk-navbar-dropdown">
	                <ul class="uk-nav uk-navbar-dropdown-nav">
	                  <li><a href="changelog-timeline.html">Timeline Style</a></li>
	                  <li><a href="changelog-posts.html">Post Style</a></li>
	                </ul>
	              </div>            
	            </li>
	          </ul>
	        </div>
	        <div class="uk-navbar-center uk-hidden@m">
	          <a class="uk-navbar-item uk-logo" href="index.php">Docs</a>
	        </div>
	        <div class="uk-navbar-right">
	          <div>
	            <a id="search-navbar-toggle" class="uk-navbar-toggle" data-uk-search-icon href="#"></a>
	            <div class="uk-background-default uk-border-rounded"
	              data-uk-drop="mode: click; pos: left-center; offset: 0">
	              <form class="uk-search uk-search-navbar uk-width-1-1" onsubmit="return false;">
	                <input id="search-navbar" class="uk-search-input" type="search" placeholder="Search for answers"
	                  autofocus autocomplete="off" data-minchars="1" data-maxitems="30">
	              </form>
	            </div>
	          </div>
	          <ul class="uk-navbar-nav uk-visible@m">
	            <li>
	              <div class="uk-navbar-item">
	                <a class="uk-button uk-button-primary-outline" href="doc.php">Documentation</a>
	              </div>
	            </li>
	            <li>
	              <div class="uk-navbar-item">
	                <a class="uk-button uk-button-success" href="contact.php">Contact</a>
	              </div>
	            </li>
	          </ul>
	          <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span
	              data-uk-navbar-toggle-icon></span> <span class="uk-margin-small-left">Menu</span></a>
	        </div>
	      </div>
	    </div>
	  </nav>
	</div>
	<!-- <div class="uk-section section-hero uk-position-relative" data-uk-scrollspy="cls: uk-animation-slide-bottom-medium; repeat: true">
		<div class="uk-container uk-container-small">
			<p class="hero-image uk-text-center"><img src="https://via.placeholder.com/400x220" alt="Hero"></p>
			<h1 class="uk-heading-medium uk-text-center uk-margin-remove-top">How can we help you?</h1>
			<p class="uk-text-lead uk-text-center">Search or browse in depth articles and videos on everything on our awesome
				product, from basic setup to advanced features and everyday use</p>
			<div class="hero-search">
				<div class="uk-position-relative">
					<form class="uk-search uk-search-default uk-width-1-1" name="search-hero" onsubmit="return false;">
						<span class="uk-search-icon-flip" data-uk-search-icon></span>
						<input id="search-hero" class="uk-search-input uk-box-shadow-large" type="search"
							placeholder="Search for answers" autocomplete="off" data-minchars="1" data-maxitems="30">
					</form>
				</div>
			</div>
		</div>
	</div> -->
</header>