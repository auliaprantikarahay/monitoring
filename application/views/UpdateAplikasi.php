<form action="<?php echo site_url('Welcome/UpdateAplikasi'); ?>" method="post">
		  <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Aplikasi</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
<table>
	<tr>
		<td>Nama Aplikasi</td>
		<td>:</td>
		<td><input type="hidden" name="id_aplikasi" value="<?php echo $detail['id_aplikasi']; ?>">
			<input type="text" name="nama" value="<?php echo $detail['nama']; ?>">
		</td>
	</tr>
	<tr>
		<td>URL</td>
		<td>:</td>
		<td>
			<input type="text" name="url" value="<?php echo $detail['url']; ?>">
		</td>
	</tr>
	<tr>
		<td>User Aplikasi</td>
		<td>:</td>
		<td>
			<input type="text" name="user_aplikasi" value="<?php echo $detail['user_aplikasi']; ?>">
		</td>
	</tr>
	<tr>
		<td>Tanggal</td>
		<td>:</td>
		<td>
			<input type="text" name="date" value="<?php echo $detail['date']; ?>">
		</td>
	</tr>
	</table>
	<tr>
			<input class="btn btn-primary" type="submit" value="Simpan">
		</td>
	</tr>

</div></form></div></form>
