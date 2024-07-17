<?php
if (isset($_POST['simpan'])) {
    $email_website = $_POST['email_website'];
    $telepon_website = $_POST['no_hp_website'];
    $alamat_website = $_POST['alamat_website'];
    $facebook_link = $_POST['facebook'];
    $instagram_link = $_POST['instagram'];
    $twitter_link = $_POST['twitter'];
    $linked_link = $_POST['linkedin'];

    $querysett = mysqli_query($koneksi, "Select * FROM setting ORDER BY id DESC");
    if (mysqli_num_rows($querysetting) > 0) {
        //updated
    } else {
        //insert

        $insert = mysqli_query($koneksi, "INSERT INTO setting (email_website, no_hp_website, alamat_website, facebook, instagram, twitter, linkedin) 
    VALUES ('$email_website','$telepon_website','$alamat_website','$facebook_link','$instagram_link','$twitter_link','$linked_link')");
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="">Email Website</label>
        <input type="email" class="form-control" name="email_website" placeholder="Email Website">
    </div>
    <div class="mb-3">
        <label for="">Telepon Website</label>
        <input type="number" class="form-control" name="telepon_website" placeholder="Telepon Website">
    </div>
    <div class="mb-3">
        <label for="">Alamat</label>
        <textarea name="alamat_website" id="" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="">Facebook Link</label>
        <input type="url" class="form-control" name="facebook" placeholder="Facebook Link">
    </div>
    <div class="mb-3">
        <label for="">Instagram Link</label>
        <input type="Text" class="form-control" name="Instagram" placeholder="Instagram Link">
    </div>
    <div class="mb-3">
        <label for="">Twitter Link</label>
        <input type="url" class="form-control" name="Twitter" placeholder="Twitter Link">
    </div>
    <div class="mb-3">
        <label for="">Linkedin Link</label>
        <input type="url" class="form-control" name="Instagram" placeholder="Linkedin Link">
    </div>
    <div class="mb-3">
        <label for="">Logo</label>
        <input type="file" name="logo">
    </div>
    <div class="mb-3">
        <input type="submit" class="btn btn-primary" name="simpan" value="Simpan">
    </div>
</form>