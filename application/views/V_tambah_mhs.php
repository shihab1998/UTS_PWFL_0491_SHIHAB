<!DOCTYPE html>
<html lang="en">
<head>
  <title>UTS PWFL SHIHAB</title>
</head>
<body>
		<center>
		<h3>
			<a href="<?php echo base_url('page/') ?>">Kembali</a> &nbsp; &nbsp;
		</h3>
	</center>
<center>
	<table>
		<form action="<?php echo base_url('c_mahasiswa/tambahmhs'); ?>" method="POST">
			<tr>
				<td>NIM :</td>
				<td><input type="text" name="nim"value=""></td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama"value=""></td>
			</tr>
			<tr>
				<td>Jenis Kelamin :</td>
				<td>
					<select name="jkl">
						<option value="Laki-laki">Laki-laki</option>
						<option value="Perempuan">Perempuan</option>		
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td><input type="text" name="alamat"value=""></td>
			</tr>
			<tr>
				<td>No. Telp :</td>
				<td><input type="text" name="nohp"value=""></td>
			</tr>
			<tr>
				<td><input type="submit" value="Simpan" class="btn btn-primary">
			</tr>
			
		</form>

	</table>
</center>
</body>
</html>