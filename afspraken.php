<!DOCTYPE HTML>
<html>  
<body>
<?php 
    include("dbconnect.php");
?>
<form action="welcome.php" method="post">
Naam: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Datum:  <input type="date" name="datum"></br>
Tijd:   <input type="time" name="tijd" value="09:00" min="09:00:00" max="21:00:00"/></br>
Behandeling:
<select name="FormBehandeling">
  <option value="">Select...</option>
  <option value="knippen">Knippen</option>
  <option value="kleuren">Kleuren</option>
  <option value="blayage">Blayage</option>
</select></br>
Kapper:
<select name="kapper">
    <option value="">Select...</option>
    <option value="brenda">Brenda</option>
    <option value="maria">Maria</option>
    <option value="gino">Gino</option>
</select></br></br>

<input type="submit">

</form>




</body>
</html>