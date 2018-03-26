<!DOCTYPE HTML>
<html>  
<body>
<?php 

$Naam=$_GET['naam'];
$Woonplaats=$_GET['mail'];
$Postcode=$_GET['datum'];
$Lidmaatschapnummer=$_GET['tijd'];
$geboortedatum=$_GET['behandeling'];
$Email=$_GET['kapper'];

echo $Naam;
echo $;
echo $Adres;
echo $Woonplaats;
echo $Postcode;
echo $Lidmaatschapnummer;
echo $geboortedatum;
echo $Email;
echo $Wachtwoord;

    include("dbconnect.php");

    $query="INSERT INTO klanten(id,naam,woonplaats,postcode,telefoonnummer,mail) VALUES
    ('$id','$Naam','$Woonplaats','$Postcode','$Telefoonnummer','$Mail')";
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