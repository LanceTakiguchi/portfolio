<!-- *********** 
Project Name: My Portfolio
File Name: index.php
Author: Lance Takiguchi
Created: 11/02/2016 Time: 16:23 
Objective: My online portfolio. Displays my web developement skils through projects I have completed
Version: 1.5
Version Objective: Bring apps online onto the website
Version Date: 12/06/2016 Time: 20:53
*********** -->
<!-- To my inspecting introter. Hello! If you have any critisims about my code here please email me at lancetakiguchi@gmail.com. I would love to know where I could improve! -->
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
	<meta name="keywords" content="PHP, CSS, HTML, JS, Javascript, firebase, bootstrap, angular.js, home, Lance Takiguchi, portfolio, resume, projects, index, website, homepage, landing page, web development, learning fuze, application, apps, website, webpage">
	<meta name="author" content="Lance Takiguchi">
	<meta name="description" content="Lance Takiguchi's Portfolio Website">
	<meta name="date" content="11/02/16, November 02, 2016">
	<link rel="icon" href="assets/images/sun_icon.png">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poiret+One|Raleway" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
	<link rel="stylesheet" type="text/css" href="css/background.css">
	<link rel="stylesheet" type="text/css" href="css/planets.css">
	<link rel="stylesheet" type="text/css" href="css/pulse.css">
	<script src="js/responsive.js"></script>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-88376823-1', 'auto');
	ga('send', 'pageview');
	</script>
	<title> Lance Takiguchi | Portfolio </title>
</head>
<body>
	<!-- The Background -->
	<div class="stars"></div>
	<div class="twinkling"></div>
	<div id="solar_system">
		<div id="sun" class="plantoid_body">  </div>
		<div id="mercury" class="plantoid"> 
			<div class="plantoid_body"></div>
		</div>	
		<div id="venus" class="plantoid"> 
			<div class="plantoid_body"></div>
		</div>
		<div id="earth" class="plantoid"> 
			<div class="plantoid_body">
				<div id="moon" class="plantoid">
					<div class="plantoid_body"></div>
				</div>
			</div>
		</div>
		<div id="mars" class="plantoid"> 
			<div class="plantoid_body"></div>
		</div>
		<div id="jupiter" class="plantoid"> 
			<div class="plantoid_body">
				<div id="io" class="plantoid">
					<div class="plantoid_body"></div>
				</div>
				<div id="europa" class="plantoid">
					<div class="plantoid_body"></div>
				</div>
				<div id="ganymede" class="plantoid">
					<div class="plantoid_body"></div>
				</div>
				<div id="callisto" class="plantoid">
					<div class="plantoid_body"></div>
				</div>
			</div>
		</div>
		<div id="saturn" class="plantoid"> 
			<div class="plantoid_body"></div>
		</div>
		<div id="uranus" class="plantoid"> 
			<div class="plantoid_body"></div>
		</div>
		<div id="neptune" class="plantoid"> 
			<div class="plantoid_body"></div>
		</div>
	</div>
	<nav class="navbar">
		<ul class="nav_list" id="top_nav">
			<li id="nav_home"> <a href="#"> Home </a> </li>
			<li> <a href="#applications"> Applications </a> </li>
			<li> <a href="#skills"> Skills </a> </li>
			<li> <a href="#contact"> Contact </a> </li>
			<li class="menu">
				<a href="javascript:void(0);" onclick="respon_js()">☰</a>
			</li>
		</ul>
	</nav>
	
	<div id="home" class="set_height margin_center navbar_avoid_padding">
		<div id="quote" class="faded_background">
			<p>Astronomy compels the soul to look upward, and leads us from this world to another.</p>
			<p> - <span class="italic">Plato</span>, The Republic, <span class="italic"> 343 BCE.</span></p>
		</div>
	</div>
	<div id="applications" class="set_height margin_center navbar_avoid_padding">
		<h2 class="title"><a href="#applications"> Applications </a> </h2>
		<div class="container">
			<div class="app_hover app_light">
				<div>
					<a class="see_link" href="#applications"> 
						<p> Student Grade Table </p>
						<figure><img src="assets/images/apps/sgt_app.png" /></figure>
					</a>
				</div>
			</div>
			<div class="app_hover">
				<div>
					<a class="see_link" href="https://collette-tamez.com/c10_game/"> 
						<p> Rogue Fighter </p>
						<figure><img src="assets/images/apps/rebel_app.png" /></figure>
					</a>
				</div>
			</div>
			<div class="app_hover app_light">
				<div>
					<a class="see_link" href="#applications"> 
						<p> Calculator </p>
						<figure><img src="assets/images/apps/calc_app.png" /></figure>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div id="skills" class="set_height margin_center navbar_avoid_padding">
		<h2 class="title"> <a href="#skills"> Skills </a> </h2>
		<div class="code faded_background">
			<p> var <span class="code_name">education</span> = { </p>
			<p class="indent_1"> <span class="code_name">learning_fuze: "<span class="code_value">Web Development</span>",</span></p>
			<p class="indent_1"> <span class="code_name">uc_irvine: "<span class="code_value">Informatics</span>"</span></p>
			<p> }; </p>
			<br>
			<p> var <span class="code_name">work_experince</span> = { </p>
			<p class="indent_1"> <span class="code_name">learning_fuze: "<span class="code_value">Code Review</span>"</span>,</p>
			<p> }; </p>
			<br>
			<p> var <span class="code_name">skills</span> = [ </p>
			<p class="indent_1"> <span class="code_name">"<span class="code_value">HTML</span>",
				"<span class="code_value">CSS</span>",
				"<span class="code_value">Javascript</span>", 
				"<span class="code_value">jQuery</span>", 
				"<span class="code_value">git</span>"
				"<span class="code_value">AngularJS</span>", 
				"<span class="code_value">Firebase</span>"
				"<span class="code_value">Bootstrap</span>"
				"<span class="code_value">PHP</span>"
			</span> </p>
			<p> ]; </p> 
		</div>	
	</div>
	<div id="contact" class="set_height margin_center navbar_avoid_padding">
		<h2 class="title"> <a href="#contact"> Contacts </a> </h2>
		<div class="faded_background">
			<form name="contact_form" method="post" action="">
				<table>
					<tr>
						<td><input id="form_name"  type="text" name="name" maxlength="50" size="30" placeholder=" Name" required="required"></td>
						<td><input id="form_email" type="text" name="email" maxlength="80" size="30" placeholder=" Email" required="required"></td>
					</tr>
					<tr>
						<td colspan="2"><textarea id="form_message" name="message" maxlength="1000" placeholder=" Message" required="required"></textarea></td>
					</tr>
					<tr>
						<td><input id="form_submit" type="submit" value="Submit"></td>
					</tr>
					<tr>
						<td colspan="2" > <p id="contact_links"> <a href="https://www.linkedin.com/in/lancetakiguchi"> <i id="linkedin" class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="https://github.com/LanceTakiguchi"><i id="github" class="fa fa-github" aria-hidden="true"></i></a></p> </td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<?php

	if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED

		$email_to = "lancetakiguchi@gmail.com";

		$email_subject = "LANCETAKIGUCHI.COM MESSAGE";

		function died($error) {

        // your error code can go here

			echo "We are very sorry, but there were error(s) found with the form you submitted. ";

			echo "These errors appear below.<br /><br />";

			echo $error."<br /><br />";

			echo "Please go back and fix these errors.<br /><br />";

			die();

		}

    // validation expected data exists

		if(!isset($_POST['name']) ||

			!isset($_POST['email']) ||

			!isset($_POST['message'])) {

			died('We are sorry, but there appears to be a problem with the form you submitted.');       

	}

    $name = $_POST['name']; // required

    $email_from = $_POST['email']; // required

    $message = $_POST['message']; // required    

    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(!preg_match($email_exp,$email_from)) {

    	$error_message .= 'The Email Address you entered does not appear to be valid.<br />';

    }

    $string_exp = "/^[A-Za-z .'-]+$/";

    if(!preg_match($string_exp,$name)) {

    	$error_message .= 'The Name you entered does not appear to be valid.<br />';

    }

    if(strlen($message) < 2) {

    	$error_message .= 'The Comments you entered do not appear to be valid.<br />';

    }

    if(strlen($error_message) > 0) {

    	died($error_message);

    }

    $email_message = "Form details below.\n\n";

    function clean_string($string) {

    	$bad = array("content-type","bcc:","to:","cc:","href");

    	return str_replace($bad,"",$string);
    }



    $email_message .= "Name: ".clean_string($name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Comments: ".clean_string($message)."\n";





// create email headers

    $headers = 'From: '.$email_from."\r\n".

    'Reply-To: '.$email_from."\r\n" .

    'X-Mailer: PHP/' . phpversion();

    @mail($email_to, $email_subject, $email_message, $headers);  

    ?>


    <?php

}

?>
</body>	
</html>
