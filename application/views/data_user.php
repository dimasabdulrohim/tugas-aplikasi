<div>
	<a href="<?php echo base_url() ?>index.php/Welcome/tambahdatauser"><button class="btn btn-info"><h5>klik disini untuk menambahkan data</h5></button></a>
</div>
<div class="box">
	<div class="box-header">
		<h3 class="box-title">DATA USER</h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body no-padding">
		<table class="table table-condensed">
			<tr>
				<th>id user</th>
				<th>nama</th>
				<th>aksi</th>
				
			</tr>
			<?php 
			foreach ($tabeluser as $tampilkan ) {
				# code...
			
              echo "<tr>";
              	echo "<td>$tampilkan->id_user</td>";
              	echo "<td>$tampilkan->nama</td>";
              	echo "<td><a href='edit_data_user/$tampilkan->id_user'><button class='btn btn-primary btn-xs'>edit</button></a><button class='btn btn-danger btn-xs' onClick='hapus($tampilkan->id_user)'>hapus</button/></td>";
              	
              echo "</tr>";
          }
			 ?>
		</table>
	</div>
	<!-- MODAL HAPUS-->
<div class="modal modal-danger fade" id="modal-danger">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true"></span></button>
               <h4 class="modal-title">Peringatan</h4>
           </div>
           <form action="<?php echo base_url() ?>index.php/Welcome/hapusDataUser" method="POST" id="fromHapus">
               <input type="hidden" name="id_user" value="">
               <div class="modal-body">
                  <p>Apakah anda ingin menghapus data ini</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-outline">Iya</button>
              </div>
          </form>
      </div>
  </div>
</div>
<!-- SCRIPT MODAL -->
<script type="text/javascript">
  function hapus(id) {
     $('#fromHapus')[0].reset();
     $.ajax({
        url :"<?php echo base_url('index.php/Welcome/getIdUser') ?>/"+id,
        type:"GET",
        dataType:"JSON",
        success: function(data){
           $('[name="id_user"]').val(data.id_user);
           $('#modal-danger').modal('show');
       }
   });
 }
</script>
<!-- MODAL HAPUS-->
<div class="modal modal-danger fade" id="modal-danger">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true"></span></button>
               <h4 class="modal-title">Peringatan</h4>
           </div>
           <form action="<?php echo base_url() ?>index.php/Welcome/hapusDataasset" method="POST" id="fromHapus">
               <input type="hidden" name="id_asset" value="">
               <div class="modal-body">
                  <p>Apakah anda ingin menghapus data ini</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Tutup</button>
                  <button type="submit" class="btn btn-outline">Iya</button>
              </div>
          </form>
      </div>
  </div>
</div>
<!-- SCRIPT MODAL -->
<script type="text/javascript">
  function hapus(id) {
     $('#fromHapus')[0].reset();
     $.ajax({
        url :"<?php echo base_url('index.php/Welcome/getIdasset') ?>/"+id,
        type:"GET",
        dataType:"JSON",
        success: function(data){
           $('[name="id_asset"]').val(data.id_asset);
           $('#modal-danger').modal('show');
       }
   });
 }
</script>
