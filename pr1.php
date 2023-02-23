<!DOCTYPE html>
<html>
<head>
	<title>Biuro podróży - Wycieczki marzeń</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<header>
		<h1>Wycieczki marzeń</h1>
		<nav>
			<ul>
				<li><a href="#">Oferty</a></li>
				<li><a href="#">O nas</a></li>
				<li><a href="#">Kontakt</a></li>
			</ul>
		</nav>
	</header>
	
	<main>
		
			<h2>Oferty</h2>

		<div class="kon">

<?php
$polaczenie=mysqli_connect("localhost","zset_spychala","Spychala_123","zset_spychala");
$wyswietlenie=mysqli_query($polaczenie,"SELECT * FROM hotel");
while($r=mysqli_fetch_row($wyswietlenie)){
	
	

	echo"<div class='okienko'>";
	echo"<div class='foto'> <img style='width:100%;height:100%;'src='zdjecia/$r[7]' alt='Foto'></div>";
	echo"<div class='info'>";
	echo"<div class='title'>$r[1]";
	for ($i = 0; $i < $r[5]; $i++){
		echo "<img src='gwiazdka.png'>";
	}
	
	
	echo"</div>";
	
	echo"<div class='kraj'>$r[2]</div>";
	echo"<div class='wylot'>Poznań</div>";
	echo"<div>";
	for ($i = 0; $i < $r[3]; $i++){
		echo "<img src='zdjecia/human.png'>";
	}
	echo"</div>";
	echo"<div class='jedzenie'>Czy jest jedzenie?:$r[4]</br>
	rozrywka:$r[6]
	</div>";
	echo"</div>";
	echo"<div class='cena'> <b>1495zł<b></div>";
	echo"</div>";
}
mysqli_close($polaczenie);

?>
</div>
		





<div id="infoblock2">
    <div id="infohalf1"> <d style="font-size: 30px;">O nas </d><br> <br>
	<p>Jesteśmy biurem podróży, które od kilku lat organizuje wycieczki do najpiękniejszych miejsc na świecie. Nasza oferta jest bardzo szeroka, dzięki czemu każdy znajdzie coś dla siebie. Zawsze stawiamy na jakość usług oraz zadowolenie naszych klientów.</p>
			<p>Jeśli szukasz wymarzonej wycieczki, to trafiłeś w dobre miejsce! Skontaktuj się z nami, a my pomożemy Ci zorganizować niezapomniane wakacje.</p>        

</div>
    <div id="infohalf2"> <img style= "width: 90%; height: 400px;" src="ludek.svg" > </div>
    <div style="clear: both;"></div>
</div>
		<section>
			<h2></h2>
			
		</section>
		
		<section>
			<h2>Kontakt</h2>
			<form>
				<label>Imię i nazwisko:</label>
				<input type="text" name="name">
				<label>Adres e-mail:</label>
				<input type="email" name="email">
				<label>Wiadomość:</label>
				<textarea name="message"></textarea>
				<input type="submit" value="Wyślij">
			</form>
		</section>
	</main>
	
	<footer>
		<p>Wycieczki marzeń &copy; 2023</p>
	</footer>
</body>
</html>