<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/mario.css" rel="stylesheet">
	
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
			<a class="navbar-brand" href="#">Mario</a>
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
<form action="afspraken.php" method="GET">
        <table>
            <tr><td>Naam: </td>
            <td><input name="naam"></td></tr>
            <tr><td>E-Mail: </td>
            <td><input name="email"></td></tr>
            <tr><td>Telefoonnummer: </td>
            <td><input type="number" name="telefoonnummer"></td></tr>
                  <tr><td>Kapper: </td>
            <td><select name="kapper">
                    <option value="">Select...</option>
                    <option value="Brenda">Brenda</option>
                    <option value="Maria">Maria</option>
                    <option value="Gino">Gino</option>
                </select></td></tr>
                <tr><td>Behandeling: </td>
            <td><select name="behandeling">
            <option value="">Select...</option>
                    <option value="Knippen">knippen</option>
                    <option value="Kleuren">kleuren</option>
                    <option value="Balayage">balayage</option>
                    <option value="Highlight 1/4">highlight 1/4</option>
                    <option value="Highlight 1/2">highlight 1/2</option>
                    <option value="Highlight 1/1">highlight 1/1</option>
                  </select></td></tr>
                  <tr><td>Datum: </td>
            <td><input type="date" name="datum"></td></tr>
            <tr><td>Tijd: </td>
            <td><input type="time" value="09:00" name="tijd" min="09:00:00" max="21:00:00"></td></tr>
             </tr>
                <td colspan="2" >
                    <input type ="submit" name="submit"/>
                    <input type ="button"  value="naar overzicht" onclick="window.location.href= 'overzicht.html'"/>
                </td>
            </tr>                
        </table>      
    </form> 
</div>
</div>
    <footer>
 <!--Copyright-->
    <div class="footer-copyright py-3 text-center">
        © 2018 Copyright:
        <a href="https://mdbootstrap.com/material-design-for-bootstrap/"> MDBootstrap.com </a>
    <!--/.Copyright-->

</footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>