<style>
	table,th,td{
		border:1px solid black;
		border-collapse:collapse;
	}
	caption{
		font-size:20;
	}
	#json{
		padding: 10px 30px;
		background-color: #b0c4de;
		margin-top: 5px;
		width: 84%;
		font-family:'Courier New';
	}
</style>

<?echo $frm->form("dapil.php",$hidden);?>
	Dapil ID: <?echo $frm->textbox("text","dapil_id","20","16");?>&nbsp;
	<?echo $frm->button("Submit");?>
</form>
<br/>

JSON:
<br/>
<div id="json">
<?
echo $json;
?>
</div>
<br/>
<br/>
<table cellpadding="4" cellspacing="1" style="font-size:12px;width:90%;line-height:170%;">
	<tr>
		<th width=30%>Param</th>
		<th>Definition</th>
	</tr>
	<tr>
		<td>dapil_id</td>
		<td>The ID of the district</td>
	</tr>
	<tr>
		<td>tingkat_dapil</td>
		<td>The level of the district</td>
	</tr>
	<tr>
		<td>pro_id</td>
		<td>The ID of the province</td>
	</tr>
	<tr>
		<td>kab_id</td>
		<td>The ID of the kabupaten</td>
	</tr>
	<tr>
		<td>kode_dapil</td>
		<td>The code of the district</td>
	</tr>
	<tr>
		<td>nama_dapil</td>
		<td>The name of the district</td>
	</tr>
	<tr>
		<td>ppk</td>
		<td>The number of PPK</td>
	</tr>
	<tr>
		<td>pps</td>
		<td>The number of PPS</td>
	</tr>
	<tr>
		<td>tps</td>
		<td>The number of TPS</td>
	</tr>
	<tr>
		<td>jumlah_laki</td>
		<td>The number of men</td>
	</tr>
	<tr>
		<td>jumlah_perempuan</td>
		<td>The number of women</td>
	</tr>
	<tr>
		<td>jumlah_pemilih</td>
		<td>The number of voter</td>
	</tr>
</table>
<br/>
<br/>
