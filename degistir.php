<!--<?php 
echo "<pre>"; print_r($_GET);echo "</pre>";
?>-->
<h4>Ders Güncelleme</h4>

<form action='guncelle.php'>

	<input type="hidden" name="kod" value="<?php echo $_GET['kod'] ?>">

	<table style="width:100%">
		<tr><td>Kodu    </td><td>  <input disabled type="text" name="kod" value="<?php echo $_GET['kod'] ?>"></td></tr>
		<tr><td>Adı     </td><td>  <input type="text" name="ad" value="<?php echo $_GET['ad'] ?>" >  </td></tr>
		<tr><td>İcerigi </td><td>  <textarea autofocus name="icerik" rows="4"> <?php echo $_GET['icerik'] ?> </textarea>   </td></tr>
		<tr><td>Kredisi </td><td> 
			<SELECT name='kredi' value="<?php echo $_GET['kredi'] ?>">
				<OPTION value='1' <?php if ($_GET['kredi'] == 1) { echo "selected";}; ?>>1</OPTION>
				<OPTION value='2' <?php if ($_GET['kredi'] == 2) { echo "selected";}; ?>>2</OPTION>
				<OPTION value='3' <?php if ($_GET['kredi'] == 3) { echo "selected";}; ?>>3</OPTION>
				<OPTION value='4' <?php if ($_GET['kredi'] == 4) { echo "selected";}; ?>>4</OPTION>
			</SELECT>
		</td></tr>
		<tr><td>Bölümü </td><td> 
			<SELECT name='bolumNo'>

				<OPTION value='10' <?php if ($_GET['bolumNo'] == 10) { echo "selected";}; ?>>Bilgisayar(10)</OPTION>
				<OPTION value='20' <?php if ($_GET['bolumNo'] == 20) { echo "selected";}; ?>>Elektrik(20)</OPTION>
				<OPTION value='30' <?php if ($_GET['bolumNo'] == 30) { echo "selected";}; ?>>Endustri(30)</OPTION>
				<OPTION value='40' <?php if ($_GET['bolumNo'] == 40) { echo "selected";}; ?>>Makine(40)</OPTION>
			</SELECT>
		</td></tr>
		<tr><td>Zorunlu </td><td> 
			
			<input type=radio name=zorunlu value="1" id=a1 <?php if ($_GET['zorunlu'] == 1) { echo "checked";}; ?> > <label for=a1>Evet</label>
			<input type=radio name=zorunlu value="0" id=a2 <?php if ($_GET['zorunlu'] == 0) { echo "checked";}; ?>> <label for=a2>Hayır</label>
		</td></tr>

<!--if(<?php echo $_GET['bolumici'] ?> == 1){ checked="checked"}-->
		<tr><td>Ozellikler</td><td> 
			
			<input type=checkbox name="bolumici" value="1" id="a3" <?php if ($_GET['bolumici'] == 1) { echo "checked";}; ?>><label for=a3>Bolum ici ders</label>
			<input type=checkbox name="onsart" value="1" id="a4" <?php if ($_GET['onsart'] == 1) { echo "checked";}; ?> ><label for=a4>On sartli ders</label>
			

		</td></tr>
			
		<tr> 
		<td></td>
		<td>
			<input type=submit name=gonder value=SAKLA>
		</td>
		</tr>

	</table>

</form>

