<?php
// Session 
if($this->session->flashdata('sukses')) { 
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
} 
// Error
echo validation_errors('<div class="alert alert-success">','</div>'); 
?>

<form method="post">

<input type="hidden" name="id_konfigurasi" value="<?php echo $site['id_konfigurasi'] ?>">

<div class="panel panel-default">
  <div class="panel-heading"><h3>About</h3></div>
  <div class="panel-body">
  <div class="form-group">
    <label>Sejarah</label>
    <textarea name="sejarah" rows="10" class="form-control" placeholder="Sejarah"><?php echo strip_tags($site['sejarah']) ?></textarea>
    </div>
    
    <div class="form-group">
    <label>Visi BP3TKI Jakarta</label>
    <input type="text" name="visi" placeholder="Visi BP3TKI Jakarta" value="<?= strip_tags($site['visi']) ?>" class="form-control">
    </div>
    
    <div class="form-group">
    <label>Misi BP3TKI Jakarta</label>
    <textarea name="misi" rows="10" class="form-control" placeholder="Misi BP3TKI Jakarta"><?= strip_tags($site['misi']) ?></textarea>
    </div>

    <div class="form-group">
    <label>Kedudukan BNP2TKI</label>
    <textarea name="kedudukan_1" rows="10" class="form-control" placeholder="Kedudukan BNP2TKI"><?= strip_tags($site['kedudukan_1']) ?></textarea>
    </div>


    <div class="form-group">
    <label>Kedudukan BP3TKI Jakarta</label>
    <textarea name="kedudukan_2" rows="10" class="form-control" placeholder="Kedudukan BP3TKI Jakarta"><?= strip_tags($site['kedudukan_2']) ?></textarea>
    </div>

    <div class="form-group">
    <label>Tugas BP3TKI Jakarta</label>
    <textarea name="tugas" rows="10" class="form-control" placeholder="Tugas BP3TKI Jakarta"><?= strip_tags($site['tugas']) ?></textarea>
    </div>

    <div class="form-group">
    <label>Fungsi / Misi</label>
    <textarea name="fungsi" rows="10" class="form-control" placeholder="Fungsi"><?= strip_tags($site['fungsi']) ?></textarea>
    </div>

  </div>
  </div>




<input type="submit" name="submit" value="Save Configuration" class="btn btn-primary">

</form>