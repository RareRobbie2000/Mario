<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mario.css" rel="stylesheet">
	<link href="css/contact.css" rel="stylesheet">
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="img/retrocade-favicon2.ico" />
</head>
<body>
    <div class="main">
		
			<a class="navbar-brand" href="#">Mario</a>
		
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Home</a></li>
				<li><a href="#">Afspraak maken</a></li>
				<li><a href="#">Team</a></li>
				<li><a href="#">Contact</a></li>
			</ul>
		</div>					
				<div id="screen">
					<h1> Contact </h1>
					<br/>
					<form>
					
					<input type="text" placeholder="Name" id="name" name="name"><br>
					<br>
					<input type="text" placeholder="Email" id="email" name="email"><br>
					<br>
					<input type="text" placeholder="Subject" id="subject" name="subject"><br>
					<br>
					<textarea name="invoer" placeholder="Your Message" cols="25" rows="10" class="form"></textarea>
					<br>
					<input type="button" value="Send" onClick="mailfunctie()" class="formbutton">
					</form>
				</div>
				
			 </div>

	</div>
	
<footer>
 <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> MDBootstrap.com </a>
    </div>
    <!--/.Copyright-->

</footer>
</body>
</html>
