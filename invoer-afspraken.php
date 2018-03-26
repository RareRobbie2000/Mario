<html>
        <head>
            <title>invoer klant </title>      
        </head>
        <body>
<?php
    include("dbconnect.php");
    $query="SELECT naamKappers FROM kappers";
    $resultaat= mysqli_query($con, $query);
    while($rij = mysqli_fetch_array($resultaat)){
        $Brenda = $rij['Brenda'];
        $Maria = $rij['Maria'];
        $Gino = $rij['Gino'];
    }
?>

<?php
    include("dbconnect.php");
    $query1="SELECT naamBehandeling FROM behandeling";
    $resultaat1= mysqli_query($con, $query1);
    while($rij1 = mysqli_fetch_array($resultaat1)){
        $Knippen = $rij1['knippen'];
        $Kleuren = $rij1['kleuren'];
        $Balayage = $rij1['balayage'];
        $highlight4 = $rij1['highlight-1/4'];
        $highlight2 = $rij['highlight-1/2'];
        $highlight1 = $rij['highlight-1/1'];
    } 
?>
<form action="afspraken.php" method="GET">
        <table>
            <td><input type="hidden" name="idAfspraak"></td></tr>
            <tr><td>Naam: </td>
            <td><input name="naam"></td></tr>
            <tr><td>E-Mail: </td>
            <td><input name="email"></td></tr>
            <tr><td>Telefoonnummer: </td>
            <td><input name="telefoonnummer"></td></tr>
            <tr><td>Datum: </td>
            <td><input type="date" name="datum"></td></tr>
            <tr><td>Tijd: </td>
            <td><input type="time" value="09:00" name="tijd" min="09:00:00" max="21:00:00"></td></tr>
             <tr><td>Behandeling: </td>
            <td><select name="FormBehandeling">
                    <option value="">Select...</option>
                    <option value="<?php echo $knippen ?>">Knippen</option>
                    <option value="<?php echo $kleuren ?>">Kleuren</option>
                    <option value="<?php echo $balayage ?>">Balayage</option>
                    <option value="<?php echo $highlight4 ?>">Highlight 1/4</option>
                    <option value="<?php echo $highlight2 ?>">Highlight 1/2</option>
                    <option value="<?php echo $highlight1 ?>">Highlight 1/1</option>

                  </select></td></tr>
                  <tr><td>Kapper: </td>
            <td><select name="kapper">
                    <option value="">Select...</option>
                    <option value="<?php echo $Brenda ?>">Brenda</option>
                    <option value="<?php echo $Maria ?>">Maria</option>
                    <option value="<?php echo $Gino ?>">Gino</option>
                </select></td></tr>
             </tr>
             <tr>
                <td colspan="2" >
                    <input type ="submit" name="submit"/>
                    <input type ="button"  value="naar overzicht" onclick="window.location.href= 'overzicht.html'"/>
                </td>
            </tr>                
        </table>      
    </form>  
</body>
</html>