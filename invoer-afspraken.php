<?php
include('home2.html');
?>
<html>
        <head>
            <title>invoer klant </title>      
        </head>
        <body>
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
</body>
</html>