<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Biuro</title>
</head>
<body>
    <nav>
        
    <div id></div>
    <div></div>
    </nav>
    <main>
        <div id="filter">
     <form>   


<p>Cena za:</p>
<input type="radio" name="Płeć" value="Kobieta">Osobe
<input type="radio" name="Płeć" value="Mężczyzna">Wszytkich

<p>wyzywienie</p>
<input type="radio" name="Wiek" value="mniej niż 15">ALL Inclusive<br>
<input type="radio" name="Wiek" value="15-19">Trzy posiłki<br>
<input type="radio" name="Wiek" value="20-29">Dwa Posiłki<br>
<input type="radio" name="Wiek" value="30-39">śniadanie<br>
<input type="radio" name="Wiek" value="40-60">4Brak<br>

<!-- Pole typu CHECKBOX -->
<p>Jaką lubisz muzykę (możesz zaznaczyć więcej możliwości)?</p>
<input type="checkbox" name="Muzyka" value="Rock">Rock<br>
<input type="checkbox" name="Muzyka" value="Heavy Metal">Heavy Metal<br>
<input type="checkbox" name="Muzyka" value="Pop">Pop<br>
<input type="checkbox" name="Muzyka" value="Techno">Techno<br>
<input type="checkbox" name="Muzyka" value="Muzyka poważna">Muzyka poważna<br>
<input type="checkbox" name="Muzyka" value="Inna">Inna (podaj jaka):
<input name="Muzyka">
<!-- Lista rozwijalna (typ podstawowy) z zaznaczoną opcją domyślną -->
<p>Jakiej przeglądarki internetowej używasz?</p>
<select name="Przeglądarka">
	<option selected>Chrome</option>
	<option>Opera</option>
	<option>Firefox</option>
    <option>Edge</option>
	<option>Inna</option>
</select>
<!-- Lista rozwijalna (typ rozszerzony) z zaznaczoną opcją domyślną i zmniejszoną wysokością -->
<p>Jakie znasz systemy operacyjne (możesz wybrać kilka opcji trzymając klawisz Ctrl)?</p>
<select name="System operacyjny" multiple size="3">
	<option selected>Windows</option>
	<option>DOS</option>
	<option>Linux</option>
	<option>Inny</option>
</select>

<!-- Przycisk WYŚLIJ -->
<input type="submit" value="Wyślij formularz">
<!-- Przycisk WYCZYŚĆ DANE -->
<input type="reset" value="Wyczyść dane">
</div></form>
        </div>





        <div class="okienko">
            <div class="foto"> <img style="width:100%;height:100%;"src="obraz.jpeg" alt="Foto"></div>
            <div class="info">
                <div class="title">SOL PARC ***</div>
                <div class="kraj">HISZPANIA/MINORKA/SON PARC</div>
                <div class="wylot">Poznań</div>
                <div class="jedzenie">Brak jedzenia</div>
            </div>
            <div class="cena"> <b>1495zł<b></div>
        </div>
        <div class="okienko">
            <div class="foto"> <img style="width:100%;height:100%;"src="obraz.jpeg" alt="Foto"></div>
            <div class="info">
                <div class="title">SOL PARC ***</div>
                <div class="kraj">HISZPANIA/MINORKA/SON PARC</div>
                <div class="wylot">Poznań</div>
                <div class="jedzenie">Brak jedzenia</div>
            </div>
            <div class="cena"> <b>1495zł<b></div>
        </div>
        <div class="okienko">
            <div class="foto"> <img style="width:100%;height:100%;"src="obraz.jpeg" alt="Foto"></div>
            <div class="info">
                <div class="title">SOL PARC ***</div>
                <div class="kraj">HISZPANIA/MINORKA/SON PARC</div>
                <div class="wylot">Poznań</div>
                <div class="jedzenie">Brak jedzenia</div>
            </div>
            <div class="cena"> <b>1495zł<b></div>
        </div>





    </main>
    <footer></footer>
</body>
</html>