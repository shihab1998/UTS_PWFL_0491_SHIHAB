<div class="content-wrapper">
    <div class="container">
		<section class="content">
			<div class="box box-warning">
	      		<div class="box-header">
			        <h3 class="box-title">
			          <i class="fa fa-fw fa-eye"></i>History Edit Mahasiswa
			        </h3>
	        	</div>
			<div class="box-body">
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No.</th>
						<th>NIM</th>
						<th>No. Hp Lama</th>
						<th>No. Hp Baru</th>
						<th>Tanggal di Ubah</th>
					</tr>	
					<?php  $no = 1; foreach ($mhs as $itemmhs) {?>
				</thead>
					<tr>
						<th><?php echo $no++; ?></th>
						<th><?php echo $itemmhs['nim']; ?></th>
						<th><?php echo $itemmhs['no_hp_lama']; ?></th>
						<th><?php echo $itemmhs['no_hp_baru']; ?></th>
						<th><?php echo $itemmhs['tgl_ubah']; ?></th>
					</tr>
				
				<?php  } ?>
			</table>
		</div>
		</div>
	</div>
</div>