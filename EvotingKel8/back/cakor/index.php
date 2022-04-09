<!-- 1 -->
<!-- UNTUK MENAMPILKAN DATA, VIEWNYA -->
<div class="row">
    <div class="col-md-12">

        <div class="d-flex justify-content-between">
            <h4>Data cakor</h4>
            <a href="index.php?page=cakor_create" class="btn btn-dark">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No Urut Calon Koordinator</th>
                        <th>Ubah</th>
                    </tr>
                </thead>
                <!-- CRUD = READ -->
                <tbody>
                    <!-- KODE PSP -->
                    <?php
                        // database cakor
                        $query = mysqli_query($koneksi, "SELECT * FROM cakor ORDER BY nu_ckr DESC");
                        $no = 1;
                        if (mysqli_num_rows($query) > 0) {
                            // Menampilkan databse ke dalam tabel php.
                            //jika data ada atau lebih dari 0, maka tampilkan ...
                            foreach ($query as $data){
                                //quer dimisalkan jadi data
                    ?>
                    <!-- tampilkan ini -->
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $data['nu_ckr'] ?></td>

                        <!-- aksi -->
                        <td>
                            <div class="btn-group">

                                <!-- button edit -->
                                <a href="index.php?page=cakor_edit&id=<?= $data['id_ckr'] ?>"
                                    class="btn btn-sm btn-success">Edit</a>


                                <!-- button  delete-->
                                <a href="index.php?page=cakor_delete&id=<?= $data['id_ckr'] ?>"
                                    class="btn btn-sm btn-danger"
                                    onclick="return confirm('Apakah anda yakin ingin menghapus data ini ?')">Delete</a>
                            </div>
                        </td>
                    </tr>
                    <?php
                            }
                        } else { 
                        //jika data 0 atau kurang dari 0, maka tampilkan ...
                    ?>
                    <tr>
                        <td colspan="3">
                            <div class="alert alert-danger">Tidak ada data</div>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>

            </table>
        </div>
    </div>
</div>