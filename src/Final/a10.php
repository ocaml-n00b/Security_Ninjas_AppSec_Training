<!DOCTYPE HTML>

<html>
	<head>
		<title>A10 : Unvalidated Redirects and Forwards</title>
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
					
						<h5>A10 : Unvalidated Redirects and Forwards</h5>
					
					<div class="container">
							<b>Confirm that you are not a bot</b>
							<br>Verify the image below to get access (case and space sensitive)
							<p>
							</p>

							<center><img src="images/a.jpeg" alt="image" align="center"></center>
							
							<br>
							<form name="captchaform" action="check_bots.php" method="get">
							    Text <input type="text" name="captcha"><br>
							    <input type="hidden" name="redirect_to" value="opendns.com">
							    <input type="submit" value="Submit">

							</form>				
					</div>
					
				</article>
			</div>

	
			<div class="wrapper style4">
				<article id="contact" class="container small">
					<header>
				
						<p>Can you alter the redirect location?</p>
					</header>
					<div>
						
						<div class="row">
							<div class="12u">
							<ul>
							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint1');"> Hint 1 </H5>
							<DIV id="hint1" style="display:none">
							<P>
							Look at all parameters being sent to the server
							</P>
							</DIV></li>

							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint2');"> Hint 2 </H5>
							<DIV id="hint2" style="display:none">
							<P>
							Edit the parameter 'redirect_to' to include a malicious URL. Note that there is validation done on the redirect location on the back end but that is imperfect.
							</P>
							
							</DIV></li>

							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'solution');"> Solution </H5>
							<DIV id="solution" style="display:none">
							<P>
							Edit redirect_to to opendns.com.{bad URL} <br> e.g. opendns.com.internetbadguys.com
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
