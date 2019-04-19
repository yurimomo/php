<html>
<head>
	<style type="text/css">
		table{border-collapse: collapse;}
	</style>
</head>

<body>

	<!-- trを作成 -->
	<!--  td8回作成-->
	<!-- trに戻る -->
 <table border="1">
 <?php
 for ($i = 1; $i <= 5; $i ++) {
 	echo "<tr>";
 	for ($w = 1; $w <= 8; $w ++) {
 		echo "<td> i= ".$i." w = ".$w."</td>";
 	}
 	echo '</tr>';
 }

 ?>
</table>

<?php
  $alphabet = array("", "A", "B", "C", "D");

  for( $i = 0; $i <= 4; $i++) {
  	echo $i."->".$alphabet[$i]."<br>";
  }


?>

<table border="1">
<?php
  $alphabet = array("","A","B","C");

  for( $i = 1; $i <= 3; $i++) {
  	echo '<tr>';
  	for( $w = 1; $w <= 3; $w++) {
  		echo "<td>".$alphabet[$i].$w."</td>";
  	}
  	echo '</tr>';
  }


?>
</table>
</body>
</html>