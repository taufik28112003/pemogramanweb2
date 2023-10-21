<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<table border="1" cellpadding="3" cellspacing="0">
		<tr>
			<th>Kolom 1</th>
			<th>Kolom 2</th>
			<th>Kolom 3</th>
			<th>Kolom 4</th>
			<th>Kolom 5</th>
		</tr>
		<?php
             $baris =15;
             $kolom = 5;
             for ($i=1; $i <=15 ; $i++) {
             	echo "<tr>";
             	for ($j = 1; $j <=5; $j++) { 
             		echo "<td>Baris".$i.",kolom".$j."</td>";;
             		
             	}
             	echo"</tr>";

             }
             echo "</table>";
		?>
	</table>

</body>
</html>