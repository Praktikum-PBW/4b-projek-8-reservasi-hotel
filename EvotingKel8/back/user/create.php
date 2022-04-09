<!-- 2 -->
<!-- form menambahkan data -->
<!-- CRUD = CREATE -->
<div class="row">
    <div class="col-md-12">
        <div class="d-flex justify-content-between">
            <h4>Tambah user</h4>
        </div>
        <!-- atribut action di isi dengan form yg akan di proses oleh file yang mana? -->
        <!-- pengecekkan berada di fil store.php yg di inisialkan cakor_store pada menu.php -->
        <form action="index.php?page=user_store" method="post">
            <!-- method post lebih cocok untuk memanipulasi data ke database, 
                 seperti menambah data, mengubah data...
                 tidak akan di tampilkan parameternya seperti method get di URL
             -->
            <div class="mb-2">
                <label for="nama" class="form-label">Nama</label>
                <!-- id , for & name harus sama dengan kolom yg ada pada tabelnya -->
                <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="mb-2">
                <label for="username" class="form-label">Username</label>
                <!-- id , for & name harus sama dengan kolom yg ada pada tabelnya -->
                <input type="text" name="username" id="username" class="form-control">
            </div>
            <div class="mb-2">
                <label for="password" class="form-label">Password</label>
                <!-- id , for & name harus sama dengan kolom yg ada pada tabelnya -->
                <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="mb-2">
                <label for="level" class="form-label">Level</label>
                <!-- id , for & name harus sama dengan kolom yg ada pada tabelnya -->
                <select name="level" id="level" class="form-select">
                    <option value="admin">Admin</option>
                    <option value="writer">Mahasiswa</option>
                </select>
            </div>
            <!-- tombol Tambah(submit) -->
            <input type="submit" value="Tambah" name="tambah" class="btn btn-dark">
            <!-- pada name, berfngsi untuk mengetahui apakah data yang baru di tambah berasal dri tombl tambah atau tidak -->
        </form>
    </div>
</div>