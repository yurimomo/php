<html>
<head>
	<style type="text/css">table{border-collapse: collapse;}</style>
</head>
<body>
 <table border="1">
 <?php
 for ($i = 1; $i < 5; $i ++) {
 	echo "<tr>";
 	echo "<td>".$i."</td>";

 	for ($w = 1; $w < 5; $w ++) {
 		echo "<td>".$w."</td>";
 	}
 }

 ?>
</table>
</body>
</html>