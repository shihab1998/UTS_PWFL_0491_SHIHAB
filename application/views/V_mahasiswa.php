<div class="content-wrapper">
    <div class="container">
    <div id='notifications' ><center><h1><?php echo $this->session->flashdata('berhasil');?></h1></center></div>
    <div id='notifications' ><center><h1><?php echo $this->session->flashdata('gagal');?></h1></center></div>
		<section class="content">
			
			<div class="box box-warning">
	      		<div class="box-header">
			        <h3 class="box-title">
			        	<i class="fa fa-fw fa-user"></i> Data Mahasiswa
			        </h3>
	        	</div>
			<div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
				<thead>
	                <tr>
						<th>No.</th>
						<th>NIM</th>
						<th>Nama Mahasiswa</th>
						<th>Jenis Kelamin</th>
						<th>Alamat</th>
						<th>No. Hp</th>
						<th>Action</th>
					</tr>	
				<?php  $no = 1; foreach ($mhs as $itemmhs ) {?>
				</thead>
				
					<tr>
						<th><?php echo $no++; ?></th>
						<th><?php echo $itemmhs['nim']; ?></th>
						<th><?php echo $itemmhs['nama_mhs']; ?></th>
						<th><?php echo $itemmhs['jns_kelamin']; ?></th>
						<th><?php echo $itemmhs['alamat_lengkap']; ?></th>
						<th><?php echo $itemmhs['no_hp']; ?></th>
						<td align="center">

							<a href="<?php echo base_url('page/editmhs/').$itemmhs['id_mhs']; ?>" class="btn btn-flat btn-primary btn-sm"><span class="fa fa-edit"></span></a>

							<a href="<?php echo base_url('c_mahasiswa/hapusmhs/').$itemmhs['id_mhs']; ?>" onclick="return confirm('Apakah Anda Yakin, Mau Menghapus data?')" class="btn btn-flat btn-danger btn-sm"><span class="fa fa-trash"></span></a>

	                    </td>
					</tr>
				
				<?php  } ?>
			</table>
		</div>
		</div>
	</div>
</div>