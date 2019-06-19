<p>
<a href="<?php echo base_url('admin/produk/tambah') ?>" class="btn btn-primary">
<i class="fa fa-plus"></i> Tambah Produk</a>
</p>

<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}

// Error
echo validation_errors('<div class="alert alert-success">','</div>');
?>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Gambar</th>
        <th>Nama Grafik</th>
        <th>Kategori</th>
        <th>Harga - Stok</th>
        <th>Status</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($produk as $produk) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td>
        <img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" class="img img-responsive" width="60">
        </td>
        <td><?php echo $produk->nama_produk ?></td>
        <td><?php echo $produk->nama_kategori_produk ?></td>
        <td>
        Rp. <?php echo number_format($produk->harga,'0',',','.') ?> - 
		<?php echo number_format($produk->stok,'0',',','.').' '.$produk->satuan ?> 
        </td>
        <td><?php echo $produk->status_produk ?></td>
        <td>
        <a href="<?php echo base_url('admin/produk/edit/'.$produk->id_produk) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        
        <?php include('delete.php') ?>
        
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>