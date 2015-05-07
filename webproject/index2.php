<?php session_start()?>

<!DOCTYPE HTML> 
<html>

	<head>
		<link rel="stylesheet" type="text/css" href="styles/SearchBox.css">
		<link rel="stylesheet" type="text/css" href="styles/Navbar.css">

		<link href='http://fonts.googleapis.com/css?family=Mr+Dafoe' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Amaranth:700' rel='stylesheet' type='text/css'>
	
		<link rel="stylesheet" href="styles/slideshow.css" />
		<script src="jquery.js"></script>
		<script src="player.js"></script>
	</head>

	<body> 
<div id="hmenu">
<?php 
	include "menu.php";
	include('dbconnect.php');
?>  
</div>

	
	<table width="500" cellspacing = "10" >
		<tbody>
	<?php
	$tbl_name = "Restaurant";
	$sql = "SELECT name, iconimage, address, rating FROM $tbl_name";
	$result2 = $conn->query($sql);
		
		if ($result2->num_rows > 0)
		{
			while ($row = $result2->fetch_assoc())
			{
		
				echo "<tr>";
				echo "<td>";
				echo "<b>".$row["name"]. "</b>";
				echo "<br>";
				echo "<img src=\"{$row['iconimage']}\" height=\"100\" width=\"160\">";
				echo "</td>";
				
				echo "<td>";
				echo "<b>Address:</b>";
				echo $row["address"];
				echo "</td>";
				
				echo "<td>";
				echo "<b>Rating:</b>";
				echo $row["rating"];
				echo "</td>";
				echo "</tr>";
	
		}
	}
	
	?>
			</tbody>
		</table>
		
	
</body>
</html>