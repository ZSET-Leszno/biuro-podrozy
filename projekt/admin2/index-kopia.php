<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Panel Administracyjny</title>
</head>
<body>
  


  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<section class="hero-section">
  <div class="card-grid">
    <a class="card" href="javascript:openfun1()">
      <div class="card__background" style="background-image: url(img/klient.jpeg)"></div>
      <div class="card__content">
        <p class="card__category">Dodaj</p>
        <h3 class="card__heading">Klienta</h3>
      </div>
    </a>
    <a class="card" href="javascript:openfun2()">
      <div class="card__background" style="background-image: url(img/hotel.png)"></div>
      <div class="card__content">
        <p class="card__category">Dodaj</p>
        <h3 class="card__heading">Hotel</h3>
      </div>
    </a>
    <a class="card" href="javascript:openfun3()">
      <div class="card__background" style="background-image: url(img/trip.jpeg)"></div>
      <div class="card__content">
        <p class="card__category">Dodaj</p>
        <h3 class="card__heading">Wycieczke</h3>
      </div>
    </li>
    <a class="card" href="javascript:openfun4()">
      <div class="card__background" style="background-image: url(img/call.jpeg)"></div>
      <div class="card__content">
        <p class="card__category">Czytaj</p>
        <h3 class="card__heading">Wiadomośći</h3>
      </div>
    </a>
  
  <div>
</section> 


    <!-- tabela klientów -->

    <div id="info_klient">
        <div>
            <form action="">
                <label>Imie:</label>
                <input type="text">
                <label>Nazwisko:</label>
                <input type="text">
                <label>Telefon:</label>
                <input type="text">
                <input id="button" type="button" value="Dodaj">
            </form>
        </div>
    <?php 
    $polaczenie=mysqli_connect("localhost","zset_spychala","Spychala_123","zset_spychala");
    $wyswietlenie=mysqli_query($polaczenie,"SELECT * FROM klienci");
    echo"<table><tr><td>ID</td><td>imie</td><td>nazwisko</td><td>tel</td></tr>";
    $lp=1;
    while($t=mysqli_fetch_row($wyswietlenie)){

        echo"<table>";
        echo"<td>";
        echo"$lp";
        echo"</td>";

        echo"<td>";
        echo"$t[1]";
        echo"</td>";

        echo"<td>";
        echo"$t[2]";
        echo"</td>";

        echo"<td>";
        echo"$t[3]";
        echo"</td>";
        
        $lp++;
    }
    mysqli_close($polaczenie);
    echo"</table>";
    ?>
    </div>


<!-- tabela Hoteli -->

<div id="info_hotel">
        <div>
            <form action="">
                <label>Imie:</label>
                <input type="text">
                <label>Nazwisko:</label>
                <input type="text">
                <label>Telefon:</label>
                <input type="text">
                <input id="button" type="button" value="Dodaj">
            </form>
        </div>
        <?php 
    $polaczenie=mysqli_connect("localhost","zset_spychala","Spychala_123","zset_spychala");
    $wyswietlenie=mysqli_query($polaczenie,"SELECT * FROM hotel");
    echo"<table><tr><td>ID</td><td>nazwa</td><td>miejscowosc</td><td>ile osob</td></tr>";
    while($t=mysqli_fetch_row($wyswietlenie)){

        
        echo"<td>";
        echo"$t[0]";
        echo"</td>";

        echo"<td>";
        echo"$t[1]";
        echo"</td>";

        echo"<td>";
        echo"$t[2]";
        echo"</td>";

        echo"<td>";
        echo"$t[3]";
        echo"</td>";

        echo"</table>";
        
    }
    mysqli_close($polaczenie);
    ?>
    </div>

<!-- tabela wycieczki -->

<div id="info_trip">
        <div>
            <form action="">
                <label>Imie:</label>
                <input type="text">
                <label>Nazwisko:</label>
                <input type="text">
                <label>Telefon:</label>
                <input type="text">
                <input id="button" type="button" value="Dodaj">
            </form>
        </div>
        <?php 
    $polaczenie=mysqli_connect("localhost","zset_spychala","Spychala_123","zset_spychala");
    $wyswietlenie=mysqli_query($polaczenie,"SELECT * FROM wycieczki");
    echo"<table><tr><td>ID_wycieczki</td><td>Odlot</td><td>miejscowosc</td><td>data odlotu</td><td>data przylotu</td><td>hotel</td></tr>";
    while($t=mysqli_fetch_row($wyswietlenie)){

        echo"<table>";
        echo"<td>";
        echo"$t[0]";
        echo"</td>";

        echo"<td>";
        echo"$t[1]";
        echo"</td>";

        echo"<td>";
        echo"$t[2]";
        echo"</td>";

        echo"<td>";
        echo"$t[3]";
        echo"</td>";

        echo"<td>";
        echo"$t[4]";
        echo"</td>";

        echo"<td>";
        echo"$t[5]";
        echo"</td>";

        echo"</table>";
        
    }
    mysqli_close($polaczenie);
    ?>
    </div>


<!-- tabela kontakt -->

<div id="info_call">
        <div>
            <form action="">
                <label>Imie:</label>
                <input type="text">
                <label>Nazwisko:</label>
                <input type="text">
                <label>Telefon:</label>
                <input type="text">
                <input id="button" type="button" value="Dodaj">
            </form>
        </div>
        <?php 
    $polaczenie=mysqli_connect("localhost","zset_spychala","Spychala_123","zset_spychala");
    $wyswietlenie=mysqli_query($polaczenie,"SELECT * FROM kontakt");
    echo"<table><tr><td>Imie</td><td>Email</td><td>Telefon</td><td>Treść</td></tr>";
    while($t=mysqli_fetch_row($wyswietlenie)){

        echo"<table>";
        echo"<td>";
        echo"$t[0]";
        echo"</td>";

        echo"<td>";
        echo"$t[1]";
        echo"</td>";

        echo"<td>";
        echo"$t[2]";
        echo"</td>";

        echo"<td>";
        echo"$t[3]";
        echo"</td>";

        echo"</table>";
        
    }
    mysqli_close($polaczenie);
    ?>
    </div>






















    <script>
        //funkcja przypsiania obiektu jako przycisk 
//elemnt klikany


function open()
{
     
    let closeBtn1 = document.getElementById("przycisk");
    closeBtn1.onclick =  closefun1 ;  

}

//funkcje otwierajace popup'y
function openfun1()
{
    document.getElementById("info_klient").style.display = "block";
    document.getElementById("info_hotel").style.display = "none";
    document.getElementById("info_trip").style.display = "none";
    document.getElementById("info_call").style.display = "none";
}
function openfun2()
{
    document.getElementById("info_klient").style.display = "none";
    document.getElementById("info_hotel").style.display = "block";
    document.getElementById("info_trip").style.display = "none";
    document.getElementById("info_call").style.display = "none";
}
function openfun3()
{
    document.getElementById("info_klient").style.display = "none";
    document.getElementById("info_hotel").style.display = "none";
    document.getElementById("info_trip").style.display = "block";
    document.getElementById("info_call").style.display = "none";
}
function openfun4()
{
    document.getElementById("info_klient").style.display = "none";
    document.getElementById("info_hotel").style.display = "none";
    document.getElementById("info_trip").style.display = "none";
    document.getElementById("info_call").style.display = "block";
}
//funkcje zamykajace popup'y

function closefun1()
        {
            document.getElementById("info_klient").style.display = "none";
        }
document.addEventListener("DOMContentLoaded", open);
    </script>
</body>
</html>

