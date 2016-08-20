<!DOCTYPE HTML>

<html>
	<head>
		<title>A2 : Broken Authentication and Session Management</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery.scrolly.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/init.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-desktop.css" />
		</noscript>
		<!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
	</head>
	<body>

		<!-- Nav -->
			<?php echo file_get_contents("./nav.html"); ?>

		
			<div class="wrapper style2">
				<article id="work">
					<header>
						<h5>A2 : Broken Authentication and Session Management</h5>
					</header>
					<div class="container">
							<?php

							if($_COOKIE['sessionID'] == 'b3daa77b4c04a9551b8781d03191fe098f325e67')
							{
								echo "Pesonal details for User1 <p>Name: Foo <br> Email: foo_rocks@gmail.com <br> Phone: 415-415-415</p>";

							}	

							elseif($_COOKIE['sessionID'] == 'a1881c06eec96db9901c7bbfe41c42a3f08e9cb4')
							{
								echo "Pesonal details for User2 <p>Name: Bar <br> Email: bar_rocks@gmail.com <br> Phone: 415-415-416</p>";

							}
							else
								echo "<a href=a2.php>Please Login</a>"
							?>

							</div>
						
					</div>
					
				</article>
			</div>

		
		<!-- Contact -->
			<div class="wrapper style4">
				<article id="contact" class="container small">
					
					<footer>
						<ul id="copyright">
							<li>&copy; OpenDNS. All rights reserved.</li><li><a href="http://engineering.opendns.com/security/" target="_blank">OpenDNS Security</a></li>
						</ul>
					</footer>
				</article>
			</div>

	</body>
</html>

