<?php 

$c = mysqli_connect('localhost','root','','okul');

$sql = "UPDATE ders SET vad = '".$_GET['ad']."', vkredi = '".$_GET['kredi']."', vicerik = '".$_GET['icerik']."', vbolumNo = '".$_GET['bolumNo']."', vzorunlu = '".$_GET['zorunlu']."', vbolumici = '".$_GET['bolumici']."', vonsart = '".$_GET['onsart']."' WHERE vkod = ".$_GET['kod'].";"; 

	
$sonuc = mysqli_query($c, $sql);

if (mysqli_affected_rows($c)==0) 
	echo "Kayit bulunamadı (no={$_GET['kod']})";
else
	header("location:ders.php"); //browserdan en sondan dersleri tekrar listelemesini talep ettik. 


mysqli_close($c);




 ?>