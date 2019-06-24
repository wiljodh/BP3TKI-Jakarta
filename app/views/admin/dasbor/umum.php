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
    <div class="panel-heading"><h3>Basic information</h3></div>
    <div class="panel-body">
        <div class="form-group">
        <label>Company name</label>
        <input type="text" name="namaweb" placeholder="Nama organisasi/perusahaan" value="<?php echo $site['namaweb'] ?>" required class="form-control">
        </div>
        
        <div class="form-group">
        <label>Homepage Background Option</label>
        <select name="home_setting" class="form-control">
            <option value="Image">Image Background</option>
            <option value="Video" <?php if($site['home_setting']=="Video") { echo "selected"; } ?>>Video Background</option>
        </select>
        </div>

        
        <div class="form-group">
        <label>Website address</label>
        <input type="url" name="website" placeholder="<?php echo base_url() ?>" value="<?php echo $site['website'] ?>" class="form-control">
        </div>
        
        <div class="form-group">
        <label>Official email</label>
        <input type="email" name="email" placeholder="youremail@address.com" value="<?php echo $site['email'] ?>" class="form-control" required>
        </div>
        
        <div class="form-group">
        <label>Address</label>
        <textarea name="alamat" rows="3" class="form-control" placeholder="Alamat perusahaan/organisasi"><?php echo $site['alamat'] ?></textarea>
        </div>
        
        <div class="form-group">
        <label>Phone number</label>
        <input type="text" name="telepon" placeholder="021-000000" value="<?php echo $site['telepon'] ?>" class="form-control">
        </div>
        
        <div class="form-group">
        <label>Fax</label>
        <input type="text" name="fax" placeholder="021-000000" value="<?php echo $site['fax'] ?>" class="form-control">
        </div>

        <h4>Social network</h4><hr>
        
        <div class="form-group">
        <label>Facebook <i class="fa fa-facebook"></i></label>
        <input type="url" name="facebook" placeholder="http://facebook.com/namakamu" value="<?php echo $site['facebook'] ?>" class="form-control">
        </div>
        
        <div class="form-group">
        <label>Youtube <i class="fa fa-youtube"></i></label>
    <input type="url" name="twitter" placeholder="http://twitter.com/namakamu" value="<?php echo $site['twitter'] ?>" class="form-control">
        </div>
        
        <div class="form-group">
        <label>Instagram <i class="fa fa-instagram"></i></label>
    <input type="url" name="instagram" placeholder="http://instagram.com/namakamu" value="<?php echo $site['instagram'] ?>" class="form-control">
        </div>

    </div>
    </div>
</div>

<div class="panel panel-default">
<div class="panel-heading"><h3>Modul SEO (Search Engine Optimization)</h3></div>
  <div class="panel-body">
   <div class="form-group">
    <label>Keywords (Keyword search for Google, Bing, etc)</label>
    <textarea name="keywords" rows="3" class="form-control" placeholder="Kata kunci / keywords"><?php echo $site['keywords'] ?></textarea>
    </div>
    
    <div class="form-group">
    <label>Metatext</label>
    <textarea name="metatext" rows="5" class="form-control" placeholder="Kode metatext"><?php echo $site['metatext'] ?></textarea>
    </div>
    
    <h3>Google Map</h3><hr>
    <div class="form-group">
    <label>Google Map</label>
    <textarea name="google_map" rows="5" class="form-control" placeholder="Kode dari Google Map"><?php echo $site['google_map'] ?></textarea>
    </div>

    
    <div class="form-group map">
    <?php echo $site['google_map'] ?>
    </div>

  </div>
  </div>


<input type="submit" name="submit" value="Save Configuration" class="btn btn-primary">

</form>