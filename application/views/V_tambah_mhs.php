<!DOCTYPE html>
<html lang="en">
<head>
  <title>UTS PWFL SHIHAB</title>
</head>
<body>
		<center>
		<h3>
			<a href="<?php echo base_url('page/') ?>">Home</a> &nbsp; &nbsp;
			<a href="<?php echo base_url('page/lihatmhs') ?>">Lihat Data</a> &nbsp; &nbsp;
			<a href="<?php echo base_url('page/tambahmhs') ?>">Tambah</a> &nbsp; &nbsp;
			<a href="<?php echo base_url('page/log') ?>">Log</a> &nbsp; &nbsp;
		</h3>
	</center>
<center>
	<table>
		<form action="<?php echo base_url('c_mahasiswa/tambahmhs'); ?>" method="POST">
			<tr>
				<td>NIM :</td>
				<td><input type="number" name="nim" value="" required=""></td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama" value="" required=""></td>
			</tr>
			<tr>
				<td>Jenis Kelamin :</td>
				<td>
					<select name="jkl">
						<option value="Laki-laki" >Laki-laki </option>
						<option value="Perempuan" >Perempuan</option>		
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td><input type="text" name="alamat" value="" required=""></td>
			</tr>
			<tr>
				<td>No. Telp :</td>
				<td><input type="number" name="nohp" value="" required=""></td>
			</tr>
			<tr>
				<td><input type="submit" value="Simpan" class="btn btn-primary"></td>
				<td><input type="reset" value="Batal" class="btn btn-primary"></td>
			</tr>
			
		</form>

	</table>
</center>
</body>
</html>