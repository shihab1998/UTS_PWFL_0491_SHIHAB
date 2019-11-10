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
	<div class="container">
		<div style="row">
	<table border="1"> 
		<thead>
			<tr>
				<th>No.</th>
				<th>NIM</th>
				<th>Nomer Hp Lama</th>
				<th>Nomer Hp Baru</th>
				<th>Tanggal Ubah</th>
			</tr>
			<?php $no = 1;	foreach($mhs as $itemmhs){ ?>
		</thead>
			<tr>
				<th><?php echo $no++; ?></th>
				<th><?php echo $itemmhs['nim']; ?></th>
				<th><?php echo $itemmhs['no_hp_lama']; ?></th>
				<th><?php echo $itemmhs['no_hp_baru']; ?></th>
				<th><?php echo $itemmhs['tgl_ubah']; ?></th>
			</tr>

<?php  }?>
	</table>
			
		</div> 
		
	</div>
</center>
</body>
</center>
</html>