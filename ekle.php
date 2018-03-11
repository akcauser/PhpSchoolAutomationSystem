<?php 
$c = mysqli_connect('localhost', 'root' , '' , 'okul');
$sql = "INSERT INTO ders(vkod, vad, vkredi, vicerik, vbolumNo, vzorunlu, vbolumici, vonsart) VALUES('".$_GET['kod']."','".$_GET['ad']."','".$_GET['kredi']."','".$_GET['icerik']."','".$_GET['bolumNo']."','".$_GET['zorunlu']."','".$_GET['bolumici']."','".$_GET['onsart']."');";

$sonuc = mysqli_query($c, $sql);

mysqli_close($c);

header("location:ders.php"); //browserdan en sondan dersleri tekrar listelemesini talep ettik. 







 ?>