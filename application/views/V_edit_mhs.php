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
	<?php foreach ($mhse as $itemmhs) {?> 
<center>
	<table>
		<form action="<?php echo base_url('c_mahasiswa/ubahmhs'); ?>" method="POST">
			<tr>
				<input type="hidden" value="<?php echo $itemmhs['id_mhs']; ?>" name="id_mhs"></input>
			</tr>
			<tr>
				<td>Nim :</td>
				<td><input type="text" name="nim"value="<?php echo $itemmhs['nim']; ?>"></td>
			</tr>
			<tr>
				<td>Nama :</td>
				<td><input type="text" name="nama" value="<?php echo $itemmhs['nama_mhs']; ?>"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin :</td>
				<td>
					<select name="jkl">
						<option value="Laki-laki" <?php echo $itemmhs['jns_kelamin'] == 'Laki-laki'?'selected':'' ?>>Laki-laki</option>
						<option value="Perempuan" <?php echo $itemmhs['jns_kelamin'] == 'Perempuan'?'selected':'' ?>>Perempuan</option>		
					</select>
				</td>
			</tr>
			<tr>
				<td>Alamat :</td>
				<td><input type="text" name="alamat"value="<?php echo $itemmhs['alamat_lengkap']; ?>"></td>
			</tr>
			<tr>
				<td>No. Telp :</td>
				<td><input type="text" name="nohp"value="<?php echo $itemmhs['no_hp']; ?>"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Update" class="btn btn-primary">
			</tr>
			
		</form>
	<?php } ?>
	</table>
</center>
</body>
</html>