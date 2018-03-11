<?php
// 1-veri tabanına bağlan : ip/ domain , kull/şifre, veri-tabani adi 

$connection = mysqli_connect('localhost', 'root','', 'okul');
if (! $connection) {
	echo "Connection Failed".mysqli_error($connection);
}
//2- SQL komutunu veritabanına gönder(vtys çalışacak ve geriye veritabanı dönecek)
$recoverySet = mysqli_query($connection, "SELECT * FROM ders;");

if (!$recoverySet) {
	echo "Recovery Failed".mysqli_error($connection);
	}
//3- Döngü ile komutları tek tek okuyacağız ve kayıttaki verileri html tablosunun 1.satırındaki (tr) hücrelere (td)  yazacağız

	echo "<a href= 'yeni.php'>Yeni ders</a> <table style= 'border-style:solid;' >
				<tr>
					<th>Kod</th>
					<th>Ad</th>
					<th>Kredi</th>
					<th>İçerik</th>
					<th>Bölüm No</th>
					<th>Zorunlu mu?</th>
					<th>Bölüm içi mi?</th>
					<th>Ön Şartlı mı?</th>
				</tr>";

	while ($recovery = mysqli_fetch_array($recoverySet)) {

			

				echo "

				<tr>
					<td>". $recovery[0] ."</td>
					<td>". $recovery[1] ."</td>
					<td>". $recovery[2] ."</td>
					<td>". $recovery[3] ."</td>
					<td>". $recovery[4] ."</td>
					<td>". $recovery[5] ."</td>
					<td>". $recovery[6] ."</td>
					<td>". $recovery[7] ."</td>
					<td><a href = 'sil.php?kod=" . $recovery[0] . "'>Sil</a></td>
					<td><a href = 'degistir.php?kod=".$recovery[0] ."&ad=".$recovery[1] ."&kredi=".$recovery[2] ."&icerik=".$recovery[3] ."&bolumNo=".$recovery[4]."&zorunlu=".$recovery[5] ."&bolumici=".$recovery[6] ."&onsart=".$recovery[7] ."'>Degiştir</a></td>
					
				</tr>";


}

		echo "</table>";

	mysqli_close($connection);	//4- veritabanı bağlantısını kapat


	









?>