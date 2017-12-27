<!DOCTYPE html>
<html lang="en-US">
	<head>
		<title>Kenneth Rhodes</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Styles -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"> <!-- Bootstrap for simplicity -->
		<link rel="stylesheet" href="css/styles.css">
	</head>
	<body>
	
		<span class="openMenu" onclick="openNav();">&#9776;</span>
		<nav id="mySideNav" class="sidenav">
			<div id="navTextWrapper">
				<div class="navBrandExit">
					<a href="#" class="brand">Kenneth Rhodes</a><a href="#" class="closeBtn" onclick="event.preventDefault(); closeNav();">&times;</a>
				</div>
				
				<a href="#about">About</a>
				<!--<a href="#blog">Blog</a>-->
				<a href="#contact">Contact</a>
				
				<!-- Add some buttons like: inverted color scheme, night mode, left handed,  -->
			</div>
		</nav>
		
		<!-- I made this top button :D -->
		<a id="topButton" href="#header">^</a>
		
		<header id="header">
			<h3>Let's Create A Website, <span style="color: lime;">Together</span></h3>
			
			<!-- And this info circle -->
			<a class="infoCircle" href="#" data-toggle="tooltip" data-html="true" title="<a href='https://www.pexels.com/photo/adult-architect-blueprint-business-416405/' target='_blank'>Background photo credits</a>">?</a>
			
			<!-- Create Next Button -->
		</header>
		
		<section id="about">
			<div class="container-fluid">
				<h4 class="text-center">Hello, pleased to meet you.</h4>
				<p class="text-center">
					&nbsp;&nbsp;&nbsp;&nbsp;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus ac consequat felis, quis accumsan ligula. Praesent efficitur sollicitudin volutpat. Fusce id pellentesque arcu, eget elementum orci. In justo magna, auctor sit amet luctus a, vulputate sagittis nisi. Maecenas volutpat nunc sit amet dolor aliquet, et mollis elit lobortis. Donec dapibus ullamcorper ex, eget efficitur libero imperdiet sed. Pellentesque ut dui blandit, vulputate ligula at, tempor augue. Nulla massa ante, iaculis quis mattis ac, ullamcorper eu mi. Praesent rutrum pellentesque felis eu finibus.
				</p>
				
				<div class="row">
					<div class="col-md-6">
						<a href="#"><img src="https://via.placeholder.com/1920x1080" class="img-fluid"></a>
					</div>
					<div class="col-md-6">
						<a href="#"><img src="https://via.placeholder.com/1920x1080" class="img-fluid"></a>
					</div>
				</div>
				
			</div>
		</section>
		
		<!--<section id="blog">
			<div class="container-fluid">
				<h4>Sorry, I don't have a blog right now!</h4>
			</div>
		</section>-->
		
		<!--<section id="warning">
			<div class="container-fluid">
				<h4 class="text-center">WARNING: </h4>
			</div>
		</section>-->
		
		<section id="contact">
		
		</section>
		
		<footer>
			<!-- Add SM -->
		</footer>
	
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.6/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
		
		<!-- Custom Scripts -->
		<script src="js/main.js"></script>
		<script src="js/smoothScroll.js"></script>
	</body>
</html>