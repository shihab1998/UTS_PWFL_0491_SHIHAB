<!DOCTYPE html>
<html lang="en">
<head>
  <title>UTS PWFL SHIHAB</title>
</head>
<body>
	<center>
		<h3>

			<a href="<?php echo base_url('page') ?>">Home</a> &nbsp; &nbsp;
			<a href="<?php echo base_url('page/lihatmhs') ?>">Lihat Data</a> &nbsp; &nbsp;
			<a href="<?php echo base_url('page/tambahmhs') ?>">Tambah</a> &nbsp; &nbsp;
			<a href="<?php echo base_url('page/log') ?>">Log</a>
		</h3>
	</center>
<center>
	<div class="container">
		<div style="row">
	<table border="1"> 
		<thead>
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Jenis Kelamin</th>
				<th>Alamat</th>
				<th>No.Hp</th>
				<th>Action</th>
			</tr>
			<?php $no = 1;	foreach($mhs as $itemmhs){ ?>
		</thead>
			<tr>
				<th><?php echo $no++; ?></th>
				<th><?php echo $itemmhs['nim']; ?></th>
				<th><?php echo $itemmhs['nama_mhs']; ?></th>
				<th><?php echo $itemmhs['jns_kelamin']; ?></th>
				<th><?php echo $itemmhs['alamat_lengkap']; ?></th>
				<th><?php echo $itemmhs['no_hp']; ?></th>
			<td align="center">
				<a href="<?php echo base_url('page/editmhs/').$itemmhs['id_mhs']; ?>">EDIT</a>
				<a href="<?php echo base_url('c_mahasiswa/hapusmhs/').$itemmhs['id_mhs']; ?>" onclick ="return confirm('Apakah anda ingin menghapusnya?')">HAPUS</a>
			</td>
			</tr>

<?php  }?>
	</table>
			
		</div> 
		
	</div>
</center>
</body>
</html>