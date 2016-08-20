<!DOCTYPE HTML>

<html>
	<head>
		<title>A11 : SQL Injection</title>
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
		<!-- NavBar -->
		<?php echo file_get_contents("./nav.html"); ?>

			<div class="wrapper style2">
				<article id="work">
					
						<h5>A11 : SQL Injection</h5>
					
					<div class="container">
							<b>Login (Again)</b>

							<br>
						<form method="POST" action="a11_ac.php">
							
							Username <input type="text" name="uname"><br>
							Password <input type="password" name="pwd">
							<br>
							<input type="submit" value="Submit">
							
						
						</form>
											
					</div>
					
				</article>
			</div>

		
		
			<div class="wrapper style4">
				<article id="contact" class="container small">
					<header>
				
						<p>There can be many types of Injection. This page has an SQL Command Injection flaw.</p>
					</header>
					<div>
						<div class="row">
							<div class="12u">
							<ul>
							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint1');"> Hint 1 </H5>
							<DIV id="hint1" style="display:none">
							<P>
							Manipulate the fields that reach the database to inject an SQL Command
							</P>
							</DIV></li>

							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint2');"> Hint 2 </H5>
							<DIV id="hint2" style="display:none">
							<P>
							Use a SQL string (') to escape and inject an SQL command in the query.
							</P>
							
							</DIV></li>

							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'solution');"> Solution </H5>
							<DIV id="solution" style="display:none">
							<P>
							{SELECT * FROM users WHERE user = }.{'$userInput'}<br> e.g. username = ' OR 1=1; {with the semi-colon and '}
							</P>
							
							</DIV></li>
							
							</ul>
							</div>
						</div>
					</div>
					<footer>
						<ul id="copyright">
							<li>&copy; OpenDNS. All rights reserved.</li><li><a href="http://engineering.opendns.com/security/" target="_blank">OpenDNS Security</a></li>
						</ul>
					</footer>
				</article>
			</div>

	</body>
</html>
