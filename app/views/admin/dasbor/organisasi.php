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

<form method="post" enctype="multipart/form-data">

<input type="hidden" name="id_konfigurasi" value="<?php echo $site['id_konfigurasi'] ?>">



<div class="form-group">
    <label>Organisasi BP3TKI Jakarta</label>
    <input type="file" name="organisasi_1" class="form-control">
    <br>
    <img src="<?php echo base_url('assets/images/strukturdanorganisasi/upload/'.$site['organisasi_1']) ?>" style="max-width:500px; height:auto;">
</div>
<div class="form-group">
    <label>Sub Bag Tata Usaha</label>
    <input type="file" name="organisasi_2" class="form-control">
    <br>
<img src="<?php echo base_url('assets/images/strukturdanorganisasi/upload/'.$site['organisasi_2']) ?>" style="max-width:500px; height:auto;">
</div>
<div class="form-group">
    <label>Perlindungan Pemberdayaan</label>
    <input type="file" name="organisasi_3" class="form-control">
    <br>
<img src="<?php echo base_url('assets/images/strukturdanorganisasi/upload/'.$site['organisasi_3']) ?>" style="max-width:500px; height:auto;">
</div>
<div class="form-group">
    <label>Penyiapan Penempatan</label>
    <input type="file" name="organisasi_4" class="form-control">
    <br>
<img src="<?php echo base_url('assets/images/strukturdanorganisasi/upload/'.$site['organisasi_4']) ?>" style="max-width:500px; height:auto;">
</div>
<div class="form-group">
    <label>Kelembagaan Pemasyarakatan</label>
    <input type="file" name="organisasi_5" class="form-control">
    <br>
<img src="<?php echo base_url('assets/images/strukturdanorganisasi/upload/'.$site['organisasi_5']) ?>" style="max-width:500px; height:auto;">
</div>

<br>
<br>
<br>
<input type="submit" name="submit" value="Save Configuration" class="btn btn-primary">
<input type="reset" name="reset" value="Reset" class="btn btn-primary">

</form>