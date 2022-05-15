<?php
 $connect = mysqli_connect("localhost","root","","www") or die ("Brak polaczenia z baza");
 $imie=$_POST['imie'];
 $email=$_POST['email'];
 $wiadomosc=$_POST['wiadomosc'];

 $add=mysqli_query($connect,"INSERT INTO customers (imie,email,message) VALUES ('$imie','$email','$wiadomosc')");
 echo "Dane dodane pomyslnie";
 mysqli_close($connect);
?>