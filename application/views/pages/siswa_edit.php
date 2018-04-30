<?php
	if ($query == NULL) {
		$title = "Tambah";
	}else{
		$title = "Edit";

	}
	if($query->num_rows() == 0 ) redirect('siswa');
	$r = $query->result()[0];
?> 
<div class="card card-default" style="border-radius: 0px;  margin: 20px 0;">
	<div class="card-header"><?php echo $title; ?> Data Surat Masuk</div>
	<div class="card-body">
		<?php echo anchor ('siswa','kembali','class="btn btn-secondary"
		style="margin: 0 5px; margin-bottom: 5px;"'); ?> 
		<hr/> 
		<div class="row">
			<div class="col-md-3"></div>
			<div class="col-md-6">
				<form method="post" action="../update/<?php echo $r->siswa_id; ?>">
					<div class="form-group"> 
						<label>Tanggal_surat</label>
						<input type="text" name="tanggal_surat" value="<?php echo $r->tanggal_surat; ?>" 
						class="form-control" placeholder=".."> 
						<small class="form-text text-muted"> Isikan
						Tanggal_surat sesuai dengan data dari Website : 
						http://nisn.kemendikbud.go.id </small>
					</div>

					<div class="form-group"> 
						<label>Nomor_surat</label>
						<input type="text" name="nomor_surat" value="<?php echo $r->nomor_surat; ?>"
						class="form-control" placeholder="..."> 
					</div>

					<div class="form-group"> 
						<label>Uraian</label>
						<input type="text" name="uraian" value="<?php echo $r->uraian; ?>"
						class="form-control" placeholder="..."> 
					</div>

					<div class="form-group"> 
						<label>Asal_surat</label>
						<input type="text" name="asal_surat" value="<?php echo $r->asal_surat; ?>"
						class="form-control" placeholder="..."> 
					</div>
						

						<button type="submit" class="btn btn-primary mb-2"> Simpan </button>
					</form>
				</div>
				<div class="col-md-3"></div>
			</div>
			</div>