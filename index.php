<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Twitcha - The Twitta Switcha - by Personable Design</title>
	<meta name="description" content="A pretty pointless web app that allows you to switch phrases in Twitter status updates.">
	<meta name="author" content="Personable Design (Chris Hart)">
	<meta name="copyright" content="Copyright Personable Design (Chris Hart) 2011. All Rights Reserved.">
	<meta name="DC.title" content="Twitcha">
	<meta name="DC.subject" content="A pretty pointless web app that allows you to switch phrases in Twitter status updates.">
	<meta name="DC.creator" content="Chris Hart">
	<meta name="google-site-verification" content="">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/vnd.microsoft.icon">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!--[if !lte IE 6]><!-->
		<!-- Google font CSS -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Corben:bold">
		<!-- Main CSS -->
			<link rel="stylesheet" type="text/css" href="css/main.css" media="screen">
			
		<!-- Layout CSS -->
				<!--[if !lt IE 9]><!-->
                <link rel="stylesheet" type="text/css" href="css/bigscreen-layout.css" media="screen and (min-width:1025px)">
				<link rel="stylesheet" type="text/css" href="css/screen-layout.css" media="screen and (min-width:481px) and (max-width:1024px)">
				<link rel="stylesheet" type="text/css" href="css/mobile-layout.css" media="screen and (max-width:480px)">
				<!--<![endif]-->
				<!--[if lt IE 9]>
				<link rel="stylesheet" type="text/css" href="css/screen-layout.css" media="screen">
				<![endif]-->
		
		<!-- IE 7 and 8 Fixes CSS -->
				<!--[if (IE 7)|(IE 8)]>
                	<link rel="stylesheet" type="text/css" href="css/ie7-8.css" media="screen">
                <![endif]-->     
				
	<!--<![endif]-->
	
	<!--[if lte IE 6]>
		<link rel="stylesheet" href="http://universal-ie6-css.googlecode.com/files/ie6.1.1.css" media="screen">
	<![endif]-->
	
	<!-- JS -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
  	<script src="twitter/jquery.tweet.min.js"></script>
  	<script src="js/jquery.ba-replacetext.min.js"></script>
    <script src="js/twitcha.js"></script>
	<!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

<!--[if lte IE 6]>
<p style="background:red;color:white;font-family:Arial,sans-serif;font-weight:bold;text-align:center;padding:10px;">You are viewing a content-only version of this website because you are using an outdated version of Internet Explorer. To enjoy the full site, please upgrade your browser. Thank you!</p>
<![endif]-->

<noscript>
	<strong>So bummed right now!</strong> Your browser doesn't support JavaScript, so Twitcha's not going to work.
</noscript>

<header>
	<hgroup>
		<h1>Twitcha</h1>
        <h2>the Twitta Switcha&trade;</h2>
    </hgroup>
</header>

<section id="content">
  <form name="twitchform" onsubmit="return startitup()" id="twitchform">
      <fieldset>
      <ol>
          <li>
              <label>Replace&hellip;</label>
              <input type="text" class="text" name="wordstofind" value="my career" required>
          </li>
          <li>
              <label>With&hellip;</label>
              <input type="text" class="text" name="wordstoreplace" value="my bowel movement" required>
          </li>
      </ol>
      <div id="twitchsubmit">
         <input type="submit" class="submit glow-button" value="Try it!">
      </div>
      </fieldset>
  </form>
  <section id="counter"></section>
  <section id="twitter-statuses"></section>  
  <div id="progressmessage"><p>Search <span class="twittername">Twitter</span> for any word or phrase &amp; replace it with your own snark. <span class="weirdo">Happy Twitching!</span></p></div>
    <?php 
  include("php/config.php");
  
  $query  = "SELECT * FROM twitches";
  $result = mysql_query($query);
  while($row = mysql_fetch_array($result, MYSQL_ASSOC))
  {    
      echo "<p id=\"clickcounter\">&#151; <span id=\"loadingtwitches\">{$row['twitchnumber']}</span> Twitches since 03-23-11 &#151;</p>";
  } 
  ?> 
</section>

<footer>
  <p><strong>&copy;<?php echo date("Y"); ?> Personable Design.</strong> Built atop <a href="http://benalman.com/projects/jquery-replacetext-plugin/">replaceText</a> and <a href="http://tweet.seaofclouds.com/">Tweet!</a>. <em>This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/">Creative Commons Attribution 3.0 Unported License</a>.</em></p>
</footer>
<script>
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script>
try {
var pageTracker = _gat._getTracker("UA-12227203-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>
