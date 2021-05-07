<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">
			tambah data asset
		</h3>
	</div>
	<div class="box-body">
		<form action="<?php echo base_url() ?>index.php/Welcome/simpanasset" method="POST">
			<input class="from-control input-lg" type="text" placeholder="nama_barang" name="nama_barang">
			<input class="from-control input-lg" type="text" placeholder="jumlah" name="jumlah">
			<input class="from-control input-lg" type="text" placeholder="kondisi" name="kondisi">
			<input class="from-control input-lg" type="text" placeholder="keterangan" name="keterangan">
			<br>
			<br>
			<br>
			<br>
			<button class="btn btn-primary btn-md" type="submit">
				tambah data
			</button>
		</form>
		
	</div>
</div>