<!DOCTYPE HTML>
<html>  
<body>
<?php 

$IdAfspraak=$_GET['idAfspraak'];
$Naam=$_GET['naam'];
$Mail=$_GET['email'];
$Telefoonnummer=$_GET['telefoonnummer'];
$Datum=$_GET['datum'];
$Tijd=$_GET['tijd'];
$Behandeling=$_GET['behandeling'];
$Kapper=$_GET['kapper'];


    include("dbconnect.php");

    $query="INSERT INTO klanten(idAfspraak,naam,email,telefoonnummer,datum,tijd,behandeling,kapper) VALUES
    ('$idAfspraak','$Naam','$Mail','$Telefoonnummer','$Datum','$Tijd','$Behandeling','$Kapper')";
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