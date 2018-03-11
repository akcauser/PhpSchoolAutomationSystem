Yeni DERS

<form action='ekle.php'>

 <table style="width:100%">

		<tr><td>Kodu    </td><td>  <input type="text" name="kod">   </td></tr>
		<tr><td>Adı     </td><td>  <input type="text" name="Ad">   </td></tr>
		<tr><td>İcerigi </td><td>  <textarea name="icerik" rows="4"></textarea>   </td></tr>
		<tr><td>Kredisi </td><td> 
			<SELECT name='kredi'>
				<OPTION value='1' >1</OPTION>
				<OPTION value='2' >2</OPTION>
				<OPTION value='3' >3</OPTION>
				<OPTION value='4' >4</OPTION>
			</SELECT>
		</td></tr>
		<tr><td>Bölümü </td><td> 
			<SELECT name='bolumNo'>
				<OPTION value='10' >Bilgisayar</OPTION>
				<OPTION value='20' >Elektrik</OPTION>
				<OPTION value='30' >Endustri</OPTION>
				<OPTION value='40' >Makine</OPTION>
			</SELECT>
		</td></tr>
		<tr><td>Zorunlu </td><td> 
			
			<input type=radio name=zorunlu value="1" id=a1> <label for=a1>Evet</label>
			<input type=radio name=zorunlu value="0" id=a2> <label for=a2>Hayır</label>
		</td></tr>


		
		<tr><td>Ozellikler</td><td> 

			<input type=checkbox name="bolumici" value="1" id="a3"><label for=a3>Bolum ici ders</label>
			<input type=checkbox name="onsart" value="1" id="a4"><label for=a4>On sartli ders</label>

		</td></tr>
			
		<tr> 
		<td></td>
		<td>
			<input type=submit value=SAKLA>
		</td>
		</tr>

	</table>


</form>