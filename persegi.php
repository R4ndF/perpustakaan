<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator persegi</title>
</head>
<body background="404.jpg" text="cyan">
	 <h1>Hitung luas persegi</h1>
    <form action="persegi.php" method="POST" enctype="multipart/form-data">
    	<table>
    		<tr>
    			<td> sisi persegi</td>
    			<td>:</td>
    			<td><input type="text" name="sisi" required></td>
    		</tr>
    		<tr>
    			<td> sisi persegi</td>
    			<td>:</td>
    			<td><input type="text" name="sisi" required></td>
    		</tr>
    		<tr>
    			<td></td>
    			<td></td>
    			<td><input type="submit" name="submit" value="Hitung"></td>
    		</tr>
    	</table>
    </form>
    <?php
    if (isset($_POST['submit'])) 
     {
     	$sisi1 = $_POST['sisi'];
     	$sisi2 = $_POST['sisi'];

     	$luas_persegi = $sisi1*$sisi2;

     	echo "Hasil hitung luas persegi adalah sebagai berikut:<br/>";
     	echo "Diketahui;<br/>";
     	echo "sisi segitiga = $sisi1<br/>";
     	echo "sisi segitiga = $sisi2<br/>";
     	echo "Maka luas persegi sama dengan ($sisi1 x $sisi2) = $luas_persegi";
     } 
    ?>
    <li><a href="index.php">back</a></li>
</body>
</html>