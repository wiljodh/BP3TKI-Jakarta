<p>
<?php include ('tambah.php') ?>
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
        <th>Nama Kategori</th>
        <th>Keterangan</th>
        <th>Urutan</th>
        <th>Slug</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($kategori_produk as $kategori_produk) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td><?php echo $kategori_produk->nama_kategori_produk ?></td>
        <td><?php echo $kategori_produk->keterangan ?></td>
        <td><?php echo $kategori_produk->urutan ?></td>
        <td><?php echo $kategori_produk->slug_kategori_produk ?></td>
        <td>
        <a href="<?php echo base_url('admin/kategori_produk/edit/'.$kategori_produk->id_kategori_produk) ?>"class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
        
        <?php include('delete.php') ?>
        
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>