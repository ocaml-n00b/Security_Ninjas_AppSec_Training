<!DOCTYPE HTML>

<html>
	<head>
		<title>A9 : Using Components with Known Vulnerabilities</title>
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
		<script src="jquery-1.6.1.js"></script>
		<script>
		    $(function(){
		        try { $(location.hash) } catch(e) {}
		    })
		</script>
	</head>
	<body>

		<!-- Nav -->
			<?php echo file_get_contents("./nav.html"); ?>
			
			<div class="wrapper style2">
				<article id="work">
					
						<h5>A9 : Using Components with Known Vulnerabilities</h5>
					
					<div class="container">
							<br><br>		Helloo!			<br><br>		
					</div>
					
				</article>
			</div>

		
		
			<div class="wrapper style4">
				<article id="contact" class="container small">
					<header>
				
						<p>There is a publicly known vulnerability in one of the components that this page uses</p>
					</header>
					<div>
						
						<div class="row">
							<div class="12u">
							<ul>
							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint1');"> Hint 1 </H5>
							<DIV id="hint1" style="display:none">
							<P>
							Look at all the libraries used on this page. Search the web to explore if they have any vulnerabilities. 
							</P>
							</DIV></li>

							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'hint2');"> Hint 2 </H5>
							<DIV id="hint2" style="display:none">
							<P>
							This page uses jquery-1.6.1 <br><a href="http://www.cvedetails.com/cve/CVE-2011-4969/" target="_blank" >CVE details</a>
							<br><a href="http://blog.mindedsecurity.com/2011/07/jquery-is-sink.html" target="_blank">Exploit details</a>							
							</P>
							
							</DIV></li>

							<li><H5 style="cursor: pointer" onclick="toggleBlock(this, 'solution');"> Solution </H5>
							<DIV id="solution" style="display:none">
							<P>
							Append "#&lt;img src=x onerror=alert(1)&gt;" at the end of the URL. Note that this proof of concept attack might not pop up an alert if your browser has anti-XSS protections. You might need to refresh the page or wait for a few moments for the pop up to actually show.
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
