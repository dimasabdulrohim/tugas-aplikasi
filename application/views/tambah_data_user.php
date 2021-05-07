<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title">
			tambah data user
		</h3>
	</div>
	<div class="box-body">
		<form action="<?php echo base_url() ?>index.php/Welcome/simpanuser" method="POST">
			<input class="from-control input-lg" type="text" placeholder="nama" name="nama">
			<input class="from-control input-lg" type="text" placeholder="username" name="username">
			<input class="from-control input-lg" type="text" placeholder="password" name="password">
			<br>
			<br>
			<br>
			<button class="btn btn-primary btn-md" type="submit">
				tambah data
			</button>
		</form>
		
	</div>
</div>