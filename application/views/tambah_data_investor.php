<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">
			tambah data investor
		</h3>
	</div>
	<div class="box-body">
		<form action="<?php echo base_url() ?>index.php/Welcome/simpaninvestor" method="POST">
			<input class="from-control input-lg" type="text" placeholder="nama" name="nama">
			<input class="from-control input-lg" type="text" placeholder="alamat" name="alamat">
			<input class="from-control input-lg" type="text" placeholder="keterangan" name="keterangan">
			<br>
			<br>
			<br>
			<button class="btn btn-primary btn-md" type="submit">
				tambah data
			</button>
		</form>
		
	</div>
</div>