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
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	</head>
  <body>
  <nav class="navbar navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="index.html"><img src="Logo1.png" width="270" height="46" ></a>
		</div>
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav navbar-right">
            <li><a href="index.html">Home</a></li>
				<li><a href="invoer-afspraken.php">Afspraak maken</a></li>
				<li><a href="team.html">Team</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</div>
    </div>
</nav>

	<div class="container">
  <div class="row">
    <div class="col-sm-7">
	<iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2439.683098517092!2d4.688754115298267!3d52.30360607977378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5e7aed1d3471b%3A0xbc60809c9fe25310!2sTuinweg+7%2C+2132+DN+Hoofddorp!5e0!3m2!1snl!2snl!4v1523265279130" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <div class="col-sm-5">
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
    </div>
  </div>
</div>

								
				<div id="screen">
					
	
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
