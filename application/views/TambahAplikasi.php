<form action="<?php echo site_url('Welcome/TambahAplikasi'); ?>" method="post">
	  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Aplikasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
	<table>
	<tr><td>Id Aplikasi</td><td>:</td><td><input type="text" name="id_aplikasi"></td></tr>
	<tr><td>Nama Aplikasi</td><td>:</td><td><input type="text" name="nama"></td></tr>
	<tr><td>URL</td><td>:</td><td><input type="text" name="url"></td></tr>
	<tr><td>User Aplikasi</td><td>:</td><td><input type="text" name="user_aplikasi"></td></tr>
	<tr><td>Tanggal</td><td>:</td><td><input type="text" name="date"></td></tr>
</table>
<input class="btn btn-primary" type="submit" value="Simpan">
</div></form></div>
</form>
