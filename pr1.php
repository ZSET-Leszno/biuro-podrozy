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
		<section>
			<h2>Oferty</h2>

		<div class="kon">

<?php
$polaczenie=mysqli_connect("localhost","zset_spychala","Spychala_123","zset_spychala");
$wyswietlenie=mysqli_query($polaczenie,"SELECT * FROM hotel");
while($r=mysqli_fetch_row($wyswietlenie)){
	
	for ($i = 0; $i < $r[5]; $i++)

	echo"<div class='okienko'>";
	echo"<div class='foto'> <img style='width:100%;height:100%;'src='obraz.jpeg' alt='Foto'></div>";
	echo"<div class='info'>";
	echo"<div class='title'>$r[1]  $g</div>";
	echo"<div class='kraj'>$r[2]</div>";
	echo"<div class='wylot'>Poznań</div>";
	echo"<div class='jedzenie'>Brak jedzenia</div>";
	echo"</div>";
	echo"<div class='cena'> <b>1495zł<b></div>";
	echo"</div>";
}
mysqli_close($polaczenie);

?>
</div>
		
			<!--<div class="offer">
				<img src="obraz.jpeg" alt="Oferta 1">
				<h3>Wakacje w Egipcie</h3>
				<p>Cena od 2000 zł za osobę</p>
				<a href="#" class="button">Zobacz ofertę</a>
			</div>
			<div class="offer">
				<img src="bg.png" alt="Oferta 2">
				<h3>Zwiedzanie Rzymu</h3>
				<p>Cena od 2500 zł za osobę</p>
				<a href="#" class="button">Zobacz ofertę</a>
			</div>
			<div class="offer">
				<img src="https://via.placeholder.com/400x250" alt="Oferta 3">
				<h3>Wakacje w Chorwacji</h3>
				<p>Cena od 1500 zł za osobę</p>
				<a href="#" class="button">Zobacz ofertę</a>
			</div>-->
		</section>
		
		<section>
			<h2>O nas</h2>
			<p>Jesteśmy biurem podróży, które od kilku lat organizuje wycieczki do najpiękniejszych miejsc na świecie. Nasza oferta jest bardzo szeroka, dzięki czemu każdy znajdzie coś dla siebie. Zawsze stawiamy na jakość usług oraz zadowolenie naszych klientów.</p>
			<p>Jeśli szukasz wymarzonej wycieczki, to trafiłeś w dobre miejsce! Skontaktuj się z nami, a my pomożemy Ci zorganizować niezapomniane wakacje.</p>
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