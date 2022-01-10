<?php 
if(isset($_POST["naam"])){
	$conn = mysqli_connect('localhost', 'root', '', 'webapplicatie');
	$naam = $_POST["naam"];
	$email = $_POST["email"];
	$bestelling = '';
if(isset($_POST["Ms8.1"])){
echo 'ik ben hier';	
	$bestelling .= "Microsoft 8.1 + ";
}
if(isset($_POST["Ms10H"])){
	$bestelling .= "Microsoft 10 home + ";
}

if(isset($_POST["Ms10P"])){
	$bestelling .= "Microsoft 10 pro + ";
}

if(isset($_POST["Ms7"])){
	$bestelling .= "Microsoft 7 + ";
}
$bestelling = substr($bestelling, 0, strlen($bestelling)-3);
echo 'bestelling: '. $bestelling;
die();
	$sql = mysqli_query($conn, "INSERT bestelling (naam, email, bestelling) VALUES('$naam', '$email', '$bestelling')") ;

}?>

<!DOCTYPE html>
<html>
<head>
<title>Homepage</title>

<link rel="stylesheet" type="text/css" href="style.css" >

</head>
<body>
<h1>Welkom op techweb!</h1>
<div>Op deze site kun je mijn softwareproducten bestellen, ik heb de volgende softwareproducten:</div>
<div>(vink aan welke van de producten je zou willen)</div>
<ul>
<li>Windows 8.1 pro edition (70 euro) <input type='checkbox' name='Ms8.1' value='1'></li><br>
<img src="Microsoft windows 8.1.jpg" width="250" height="300"><br>
<li>Windows 10 home edition (80 euro) <input type='checkbox' name='Ms10H' value='2'></li><br>
<img src="Microsoft windows 10 home.jpg" width="250" height="300"><br>
<li>Windows 10 pro edition (100 euro) <input type='checkbox' name='Ms10P' value='3'></li><br>
<img src="Microsoft windows 10 pro.jpg" width="250" height="300"><br>
<li>Windows 7 pro edition (60 euro) <input type='checkbox' name='Ms7' value='4'></li><br>
<img src="Microsoft windows 7.jpg" width="250" height="300"> <br>
</ul>
<div>
<form method="POST" action="school.php">
Name: <input type="text" id="naam" name="naam"><br>
E-mail: <input type="text" id="email" name="email"><br>
<input type="submit" value="Bestellen"><br>
</form>
<div/>
<div>Wat kan welke windows: (klik op windows x voor info)</div><br>
<a href="https://nl.wikipedia.org/wiki/Windows_10"><button  autofocus="autofocus">Windows 10</button></a><br>
<a href="https://nl.wikipedia.org/wiki/Windows_8"><button  autofocus="autofocus">Windows 8</button></a><br>
<a href="https://nl.wikipedia.org/wiki/Windows_7"><button  autofocus="autofocus">Windows 7</button></a><br>
</p>
</body>
</html>