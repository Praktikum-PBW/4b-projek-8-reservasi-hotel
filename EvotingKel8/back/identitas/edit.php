<!-- 4 -->
<!-- form edit -->

<?php

//Cari tau id tersebut ada apa tidak, jika ada akan pergi ke halaman utama direct cakor
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    //lakukan pemeriksaan id
    //Parameter = (mysql, query)
    $query = mysqli_query($koneksi, "SELECT * FROM cakor WHERE id_ckr='$id'");

    // variabel dri query di tampung kedalam datanya
    $data = mysqli_fetch_array($query);

    //jika isi id = 1 , 
    if (mysqli_num_rows($query) == 1){
        // maka tampilkan datanya
?>

<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Edit cakor</h4>
        </div>

        <!-- pengecekkan berada di file store.php yg di inisialkan cakor_store pada menu.php -->
        <form action="index.php?page=cakor_update" method="post">
            <input type="hidden" name="id_ckr" value="<?= $id ?>"> <!-- terlihat pake inspeksi -->
            <div class="mb-2">
                <label for="nu_ckr" class="form-label">Nama cakor</label>
                <!-- id , for & name harus sama dengan kolom yg ada pada tabelnya -->
                <input type="text" name="nu_ckr" id="nu_ckr" class="form-control" value="<?= $data['nu_ckr']?>">
                <!-- value untuk menampilkan nama cakor yg terinput -->

            </div>

            <!-- tombol Tambah(submit) -->
            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
            <!-- pada name, berfngsi untuk mengetahui apakah data yang baru di tambah berasal dri tombl tambah atau tidak -->
        </form>
    </div>
</div>
<?php
    } else { //jika id tidak sama dengan 1, atau tidak ada maka kembali ke menu cakor
        echo("<script>window.location.href='index.php?page=cakor';</script>");
    }
} else {
    echo("<script>window.location.href='index.php?page=cakor';</script>");
}