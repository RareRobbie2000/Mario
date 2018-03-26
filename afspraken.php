<!DOCTYPE HTML>
<html>  
<body>
<?php 

$Naam=$_GET['naam'];
$Mail=$_GET['mail'];
$Datum=$_GET['datum'];
$Tijd=$_GET['tijd'];
$Behandeling=$_GET['behandeling'];
$Kapper=$_GET['kapper'];

echo $Naam;
echo $Mail;
echo $Datum;
echo $Tijd;
echo $Behandeling;
echo $Kapper;

    include("dbconnect.php");

    $query="INSERT INTO klanten(id,naam,woonplaats,postcode,telefoonnummer,mail) VALUES
    ('$id','$Naam','$Woonplaats','$Postcode','$Telefoonnummer','$Mail')";
?>

<script type="text/javascript">
setTimeout('Redirect()',10);
function Redirect()
{
  location.href = 'home.html';
}
</script>
<?php
    echo '<script language="text/javascript">';
    echo 'alert("Afspraak is gemaakt")';
    echo '</scipt>';
?>




</body>
</html>