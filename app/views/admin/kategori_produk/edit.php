<?php
// Validasi
echo validation_errors('<div class="alert alert-success">','</div>');

// Form
echo form_open(base_url('admin/kategori_produk/edit/'.$kategori_produk->id_kategori_produk));
?>

<div class="form-group">
<label>Nama kategori</label>
<input type="text" name="nama_kategori_produk" placeholder="Nama kategori produk" value="<?php echo $kategori_produk->nama_kategori_produk ?>" required class="form-control">
</div>

<div class="form-group">
<label>Keterangan</label>
<textarea name="keterangan" class="form-control" placeholder="Keterangan"><?php echo $kategori_produk->keterangan ?></textarea>
</div>

<div class="form-group">
<label>Urutan tampil</label>
<input type="number" name="urutan" placeholder="Urutan tampil" value="<?php echo $kategori_produk->urutan ?>" required class="form-control">
</div>

<div class="form-group">
<input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
<input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
</div>


<?php echo form_close() ?>