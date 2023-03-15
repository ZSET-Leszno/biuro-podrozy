<?php 
$imie=$_POST["imie"];
$email=$_POST["email"];
$tytuł=$_POST["tytuł"];
$tresc=$_POST["tresc"];
$wyswietlenie2=mysqli_query($polaczenie,"INSERT INTO `kontakt`(`imie`,`email`,`tytuł`,`tresc`) VALUES ("$imie","$email","$tytuł","$tresc")");

?>