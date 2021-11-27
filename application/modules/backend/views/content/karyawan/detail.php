<div class="row">
  <div class="col-md-12 col-xl-10 mx-auto animated fadeIn delay-2s">
    <div class="card-header bg-primary text-white">
      <i class="ti-file"></i> <?=ucwords($title_module)?>
    </div>
    <div class="card">
      <div class="card-body">
        <table class="table table-bordered table-striped">
					<tr>
						<td>Nip</td>
						<td><?=$nip?></td>
					</tr>

					<tr>
						<td>Nama</td>
						<td><?=$nama?></td>
					</tr>

					<tr>
						<td>Jk</td>
						<td><?=$jk?></td>
					</tr>

					<tr>
						<td>Tempat Lahir</td>
						<td><?=$tempat_lahir?></td>
					</tr>

					<tr>
						<td>Tgl Lahir</td>
						<td><?=$tgl_lahir?></td>
					</tr>

					<tr>
						<td>Jabatan</td>
						<td><?=$jabatan?></td>
					</tr>

					<tr>
						<td>Alamat</td>
						<td><?=$alamat?></td>
					</tr>

					<tr>
						<td>Telepon</td>
						<td><?=$telepon?></td>
					</tr>

        </table>

        <a href="<?=site_url("backend/".$this->uri->segment(2))?>" class="btn btn-sm btn-danger mt-3"><?=cclang("back")?></a>
      </div>
    </div>
  </div>
</div>