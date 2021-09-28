<!DOCTYPE html>
<html>
<head>
	<title>kalkulator luas segitiga</title>
</head>
<body background="404.jpg" text="cyan">
	<h1> Hitung luas segitiga dengan PHP</h1>
    <form action="segitiga.php" method="POST" enctype="multipart/form-data">
    	<table>
    		<tr>
    			<td>Alas Segitiga</td>
    			<td>:</td>
    			<td><input type="text" name=" alas" required></td>
    		</tr>
    		<tr>
    			<td>Tinggi segitiga</td>
    			<td>:</td>
    			<td><input type="text" name="tinggi" required></td>
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
    	$alas =$_POST['alas'];
    	$tinggi =$_POST['tinggi'];

    	$luas_segitiga = 1/2*$alas*$tinggi;

    	echo "Hasil hitung luas segitiga adalah sebagai berikut:<br/>";
    	echo "Diketahui;<br/>";
    	echo "Alas Segitiga = $alas<br/>";
    	echo "Tinggi segitiga = $tinggi<br/>";
    	echo "Maka luas segitigga sama dengan 1/2 ($alas x $tinggi) = $luas_segitiga"; 
    }
    ?>
    <li><a href="index.php">back</a></li>
</body>
</html>