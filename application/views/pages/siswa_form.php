<?php
	if ($query == NULL) {
		$title = "Tambah";
	}else{
		$title = "Edit";

	}
?> 
<div class="card card-default" style="border-radius: 0px; margin: 20px 0;">
	<div class="card-header"><?php echo $title; ?> Data Siswa</div>
	<div class="card-body">
		<?php echo anchor ('siswa','kembali','class="btn btn-secondary"
		style="margin: 0 5px; margin-bottom: 5px;"'); ?> 
		<hr/> 
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="post" action="simpan">
					<div class="form-group"> 
						<label>no</label>
						<input type="text" name="no"
						class="form-control" placeholder=".."> 
						<small class="form-text text-muted"> Isikan
						NO sesuai dengan data dari Website : 
						http://nisn.kemendikbud.go.id </small>
					</div>

					<div class="form-group">
						<label>tanggal_surat</label>
						<input type="text" name="tanggal_surat"
						class="form-control" placeholder="...">
					</div>

					<div class="form-group"> 
						<label>nomor_surat</label>
						<input type="text" name="nomor_surat"
						class="form-control" placeholder="..."> 
					</div>
					<div class="form-group"> 
						<label>Uraian</label>
						<input type="text" name="uraian"
						class="form-control" placeholder="..."> 
					</div>
					<div class="form-group"> 
						<label>Asal_surat</label>
						<input type="text" name="asal_surat"
						class="form-control" placeholder="..."> 
					</div>

						<button type="submit" class="btn btn-primary mb-2"> Simpan </button>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
			</div>