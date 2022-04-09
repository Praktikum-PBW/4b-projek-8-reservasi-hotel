<!-- 2 -->
<!-- form menambahkan data -->
<!-- CRUD = CREATE -->
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Tambah Identitas</h4>
        </div>
        <form action="index.php?page=identitas_store" method="post" enctype="multipart/form-data">
            <!-- 
                 ketika upload file pake atribut :  enctype="multipart/form-data"
             -->
            <div class="mb-2">
                <!-- DATALIST BOOSTRAP -->
                <label for="id_ckr" class="form-label">cakor</label>
                <!-- <input class="form-control" id="id_ckr" placeholder="Pilih cakor"> -->


                <select name="id_ckr" id="id_ckr" class="form-select">

                    <?php
                        // membuat query
                        $cakor = mysqli_query($koneksi, "SELECT * FROM cakor");

                        // perulangan
                        foreach ($cakor as $data) {
                            ?>
                    <option value="<?= $data['id_ckr'] ?>"><?= $data['nu_ckr'] ?></option>
                    <?php
                        }
                        ?>
                </select>
            </div>

            <div class="mb-2">
                <label for="nama" class="form-label">Nama</label>
                <!-- id , for & name harus sama dengan kolom yg ada pada tabelnya -->
                <input type="text" name="nama" id="nama" class="form-control">
            </div>

            <div class="mb-2">
                <label for="slogan" class="form-label">Slogan</label>
                <!-- id , for & name harus sama dengan kolom yg ada pada tabelnya -->
                <input type="text" name="slogan" id="slogan" class="form-control">
            </div>

            <!-- menambah file foto -->
            <!-- File input BOOSTRAP -->
            <div class="mb-2">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" name="foto" id="foto">
            </div>

            <div class="mb-2">
                <label for="vm" class="form-label">Visi Misi</label>
                <!-- id , for & name harus sama dengan kolom yg ada pada tabelnya -->
                <textarea class="form-control" name=" vm" id="vm"></textarea>
            </div>


            <!-- tombol Tambah(submit) -->
            <input type="submit" value="Tambah" name="tambah" class="btn btn-dark">
            <!-- pada name, berfngsi untuk mengetahui apakah data yang baru di tambah berasal dri tombl tambah atau tidak -->
        </form>
    </div>
</div>