<!DOCTYPE html>
<html>
<head>
	<title>Data Mahasiswa</title>
</head> 
<body>
	<h2>Data Mahasiswa</h2>
	<div>
		<form method = "POST" action= "simpan.php">
			<table border="0">
				<tr>
					<td>NIM</td>
					<td><input type="text" name= "nim" id= "nim"></td>
				</tr>
				<tr>
					<td>Nama Lengkap</td>
					<td><input type="text" name="nm_lengkap" id= "nm_lengkap"></td>
				</tr>
				<tr>
					<td>TTL</td>
					<td><input type="text" name= "tmp_lahir" id= "tmp_lahir">/<input type="date" name= "tgl_lahir" id= "tgl_lahir"></td>
				</tr>
				<tr>
					<td>Jenis kelamin</td>
					<td><select name= "jk" id= "jk">
						<option disabled=""selected="">--Pilih Jenis Kelamin--</option>
						<option value="Perempuan">Perempuan</option>
						<option value="Laki-Laki">Laki-Laki</option>
					</select></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="SIMPAN"></td>
				</tr>
			</table>
		</form>
	</div>
</body>
</html>