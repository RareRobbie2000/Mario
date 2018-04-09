
<?php 
$id = 0;
$Naam=$_GET['naam'];
$Mail=$_GET['email'];
$Telefoonnummer=$_GET['telefoonnummer'];
$Datum=$_GET['datum'];
$Tijd=$_GET['tijd'];
$Behandeling=$_GET['behandeling'];
$Kapper=$_GET['kapper'];


    include("dbconnect.php");
    $query1="SELECT tijd, prijs FROM behandeling WHERE naamBehandeling ='$Behandeling'";
    $resultaat1 = mysqli_query($con,$query1);
    while ($rij = mysqli_fetch_array($resultaat1))
    {
        $tijd = $rij['tijd'];
        $prijs = $rij['prijs'];    
    }

?>
<?php
    $query="INSERT INTO afspraken(idAfspraak,naam,email,telefoonnummer,datum,tijd,behandeling,kapper) VALUES
    ('$id','$Naam','$Mail','$Telefoonnummer','$Datum','$Tijd','$Behandeling','$Kapper')";
$resultaat = mysqli_query($con,$query);
?>
<?php
    include('home2.html');
?>
de behandeling duurt: <?php echo $tijd ?> uur<br/>
uw behandeling kost: &euro; <?php echo $prijs ?><br/>
<input type ="button"  value="naar homepagina" onclick="window.location.href= 'home.html'"/>



</body>
</html>