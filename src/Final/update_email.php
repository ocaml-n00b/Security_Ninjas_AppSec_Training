<!DOCTYPE HTML>

<html>
	<head>
		<title>A8 : Cross-Site Request Forgery (CSRF)</title>
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
					
						<h5>A8 : Cross-Site Request Forgery (CSRF)</h5>
					
					<div class="container">
							<?php

							 echo '<script type="text/javascript" src="logout.js"></script>';

							$new_email = $_GET['new_email'];
							$user = $_GET['user'];

							$sess = $_COOKIE['sessionID'];

							//user2
							if(($sess == 'ce17a24dc6d126a329f150f1ecedbddd3c0178db3ce828d3b3a0155925d38a55') && ($user == 'user2'))
							{
								$myfile = fopen("user2.txt", "w") or die("Unable to open file!");
								fwrite($myfile, $new_email);
								echo "Email changed successfully!";

							}	

							elseif(($sess == '39d5e11038e580555a9e40382f43083970a7c13bcedfd314fb551f923fb2572f') && ($user == 'user1'))
							{
								$myfile = fopen("user1.txt", "w") or die("Unable to open file!");
								fwrite($myfile, $new_email);
								echo "Email changed successfully!";

							}	
							else {
								echo "\nSorry you don't have the right privileges to perform this action.";
							}

							echo "<br><a href='view_email.php'>Back to viewing email</a><br>";
							echo '<button onclick="logoff()"">Log Off</button>';


							?>

					
					</div>
					
				</article>
			</div>

		
		
			<div class="wrapper style4">
				<article id="contact" class="container small">
					<header>
				
						<p>This page doesn't have any CSRF protection. e.g., unique random token, etc.</p>
					</header>
					
					<footer>
						<ul id="copyright">
							<li>&copy; OpenDNS. All rights reserved.</li><li><a href="http://engineering.opendns.com/security/" target="_blank">OpenDNS Security</a></li>
						</ul>
					</footer>
				</article>
			</div>

	</body>
</html>
