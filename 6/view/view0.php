	<table>

	<th> First name </th> <th> Last name </th> <th> room </th> <th> Date </th>

<?php

			$pol = new Mysqli('localhost','root','','reservation');
            
            $sql = "SELECT * FROM reservation1";
            
            $wynik = $pol -> query($sql);
            while($w = $wynik -> fetch_row());
            {
            	echo "<tr> <td> $w[0] </td> <td> $w[1] </td> <td> $w[2] </td> <td> $w[3] </td> </tr>"
            }
           
            $pol -> close();

?>

	</table>
