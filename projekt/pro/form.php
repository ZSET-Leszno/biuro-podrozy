<?php 
$polaczenie=mysqli_connect("localhost","zset_spychala","Spychala_123","zset_spychala");
        if(strtoupper($_SERVER['REQUEST_METHOD']) == 'POST') {
            $imie=$_POST["imie"];
            $email=$_POST["email"];
            $tytuł=$_POST["tytuł"];
            $tresc=$_POST["tresc"];
            $wyswietlenie2=mysqli_query($polaczenie,"INSERT INTO `kontakt` (`imie`,`email`,`tytuł`,`tresc`) VALUES ('$imie','$email','$tytuł','$tresc')");
            mysqli_close($polaczenie);
            header("Location: https://www.uczniowie.zset.leszno.pl/kowalewicz/pro/pr1.php");
        }

?>