<!DOCTYPE html>
<html>
<head>
	<title>Biuro podróży - Wycieczki marzeń</title>
	<link rel="stylesheet" type="text/css" href="style1.css">
	<link rel="stylesheet" type="text/css" href="napis.css">
    <link rel="stylesheet" href="form.css">
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200&display=swap');
    @import url('https://fonts.googleapis.com/css?family=Fjalla+One');
    @import url('https://fonts.googleapis.com/css2?family=Dosis:wght@200&family=Lobster&display=swap');
    </style>
    <link rel="stylesheet" href="./style_button.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

	<header>
		<div id=logo>
			<img style="width:190px; height:100%;" src="logo.png" alt="tu bedzie logo">
		</div>
		<div id="menu">
			<ul>
				<li><a href="#main_foto - 10px">Home</a></li>
				<li><a href="#ofertymain">Oferty</a></li>
				<li><a href="#infoblock2">O nas</a></li>
				<li><a href="#">Kontakt</a></li>
			</ul>
		</div>
	</header>

	
	<div id="main_foto">
		<div id="napis">
		<h2>Wakacje Marzeń!</h2>
		<h2>Wakacje Marzeń!</h2>
		</div>
	</div>


	



<section id=ofertymain>

<?php

$polaczenie=mysqli_connect("localhost","zset_spychala","Spychala_123","zset_spychala");
$wyswietlenie=mysqli_query($polaczenie,"SELECT * FROM hotel");
while($r=mysqli_fetch_row($wyswietlenie)){

	echo"<div class=oferta style='background-image: url(zdjecia/$r[7]);'>";
		echo"<div class=tresc>";
			echo"<div class='title'> $r[1]</div>";
			echo"<div class='gwiazdki'>";
			for ($i = 0; $i < $r[5]; $i++){
				echo "<img src='gwiazdka.png'>";
			}
			echo"</div>";
			echo"<div class='kraj'>$r[2]</div>";
			echo"<div class='wylot'>Poznań</div>";
			echo"<div class='jedzenie'>Czy jest jedzenie?:$r[4]</br></div>";
			echo"<div class='rozrywka'>$r[6]</div>";
			echo"<div class='cena'> $r[8] zł </div>";
		echo"</div>";
	echo"</div>";
	
}


?>
</section>
		
<div style="clear:both"></div>


<div id="infoblock"> 
                <div id="title"> <B>Dlaczego warto latać  <br>z <d>DREAM</d ></B></div>
                <div id="left"> 
                    <div class="circle"><img style="width:100%; height: 200px; border-radius: 50%; margin-top: 20px;" src="zdjecia/samolot.png"> </div>
                    <div class="text"><br><br><t><B>NAJSZYBSZE LOTY</B></t><br><br>
                    Zapewniamy naszym pasażerom najlepsze doświadczenia 
                    lotnicze dzięki naszej ofercie najszybszych lotów. Dzięki temu nasi klienci oszczędzają czas i unikają 
                    zbędnych opóźnień. Nasze loty są zaplanowane z uwzględnieniem najlepszych tras i godzin,
                     aby zapewnić jak najkrótszy czas podróży. Oferujemy 
                    również liczne połączenia bezpośrednie, co oznacza, 
                    że ​​pasażerowie nie muszą marnować czasu na przesiadki.
					</div>
                </div>
                <div id="mid"> 
                    <div class="circle"><img style="width: 100%; height: 200px; border-radius: 50%; margin-top: 20px;" src="zdjecia/comfort.png"> </div>
                    <div class="text"><br><br><t><B>WYGODA</B></t><br><br>
                    Nie tylko oferujemy szybkie loty, ale także gwarantujemy wygodę naszych pasażerów. 
                    Nasze samoloty są wyposażone w ergonomiczne siedzenia, zapewniające komfort i wsparcie podczas długich lotów. 
                    Posiadamy również wiele udogodnień, takich jak system rozrywki na pokładzie, przekąski i napoje, a także
                     bezpłatny dostęp do internetu.
                     Nasza załoga zawsze stara się, aby pasażerowie czuli się jak najlepiej podczas podróży.
                	 </div>
                </div>
                <div id="right"> 
                    <div class="circle"><img style="width: 100%; height: 200px; border-radius: 50%; margin-top: 20px;" src="zdjecia/cash.svg"> </div>
                    <div class="text"><br><br><t><B>NISKIE CENY</B></t><br><br> </div>
                    <div id="textofer">
                    Nie musisz płacić fortuny za podróż lotniczą, aby korzystać z naszych usług. Oferujemy niskie ceny, które umożliwiają pasażerom oszczędność pieniędzy na swoich podróżach. Nasza oferta obejmuje wiele opcji cenowych, dzięki czemu nasi klienci mogą wybrać najlepszą dla siebie opcję w zależności od swojego budżetu. Jednocześnie zapewniamy najwyższą jakość usług i bezpieczeństwo, co sprawia, że ​​nasze loty są doskonałym wyborem dla tych, którzy chcą podróżować szybko, wygodnie i tanio.
                    </div>
                </div>
            <div style="clear: both;"></div>

            </div> <!--infoblock -->




	
		</section>
		
		
<div id="kontakt">
	<div id=konform>
			<form  method="post" action="form.php">
				
				<div class="input-group">
					<input required="" type="text" name="imie" autocomplete="off" class="input">
					<label class="user-label">Imie Nazwisko</label>
				</div>
				<div class="input-group">
					<input required="" type="text" name="email" autocomplete="off" class="input">
					<label class="user-label">Adres E-mail</label>
				</div>
				<div class="input-group">
					<input required="" type="text" name="tytuł" autocomplete="off" class="input">
					<label class="user-label">Tytuł</label>
				</div>
				<div class="input-group">
					<input required="" type="text" name="tresc" autocomplete="off" class="input2">
					<label class="user-label">Wiadomość</label>
				</div>

				
          
                
                
                
                <button type="submit" class="order">Wyślij Wiadomość</button>
			</form>
	</div>		
		<div id="konfoto">
			<img style="width=100%;height: 100%; border-radius: 0%;" src="zdjecia/cons2.png" alt="">
		</div>
	
        

</div>
		<div style="clear:both"></div>
	</main>
	

	<footer>
		<ul>
			<li style="--i:#a955ff; --j:#ea51ff;">
			<span class ="icon"><i class="fa fa-facebook"></i></span>
			<span class="titulo">facebook</span>
			</li>
			<li style="--i:#56CCF2;--j:#2F80ED;">
			<span class ="icon"><i class="fa fa-twitter"></i></span>
			<span class="titulo">twitter</span>
			</li>
			<li style="--i:#f82b2b;--j:#fa9e9e;">
			<span class ="icon"><i class="fa fa-youtube"></i></span>
			<span class="titulo">Youtube</span>
			</li>
			<li style="--i:#FFA9C6;--j:#F434E2;">
			<span class ="icon"><i class="fa fa-instagram"></i></span>
			<span class="titulo">instagram</span>
			</li>
		</ul>
	</footer>







	
	<script src="animacja.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.js'></script><script  src="./script.js"></script>

</body>
</html>


