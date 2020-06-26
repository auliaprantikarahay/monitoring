<section class="content">
	<div class="box box-info">
      <div class="row">
        <div class="col-xs-12">
            <div class="box-header">
              <h3 class="box-title">List Aplikasi</h3>
            </div>

            <a href="<?php echo site_url('Welcome/FormTambahAplikasi'); ?>"><button type="button" class="btn btn-primary">Tambah Aplikasi</button> </a>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>

	<tr>
		<th>Id Aplikasi</th>
		<th>Nama Aplikasi</th>
		<th>URL</th>
		<th>User Aplikasi</th>
		<th>Tanggal</th>
		<th>Tools</th>
	</tr>
	<?php
	if(!empty($ListAplikasi))
	{
		foreach($ListAplikasi as $ReadDS)
		{
	?>

	<tr>
		<td><?php echo $ReadDS->id_aplikasi; ?></td>
		<td><?php echo $ReadDS->nama; ?></td>
		<td><?php echo $ReadDS->url; ?></td>
		<td><?php echo $ReadDS->user_aplikasi; ?></td>
		<td><?php echo $ReadDS->date; ?></td>
		<td>
			<a href="<?php echo site_url('Welcome/ListAplikasi/'.$ReadDS->id_aplikasi.'/view') ?>"><button type="button" class="btn btn-primary">Edit</button></a>
			<a href="<?php echo site_url('Welcome/DeleteAplikasi/'.$ReadDS->id_aplikasi) ?>"><button type="button" class="btn btn-danger"> Delete</button></a>
		</td>
	</tr>

	<?php		
		}
	}
	?>
</table>


</div></thead></table></div></div></div></div></section>