<!-- 1 -->
<!-- UNTUK MENAMPILKAN DATA, VIEWNYA -->
<div class="row">
    <div class="col-md-12">

        <div class="d-flex justify-content-between">
            <h4>Data Calon Koordinator</h4>
            <a href="index.php?page=identitas_create" class="btn btn-dark">Tambah</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>No Urut</th>
                        <th>Foto</th>

                        <th>Nama</th>
                        <th>Slogan</th>
                        <th>Visi Misi</th>
                        <th>Ubah</th>

                    </tr>

                </thead>
                <!-- CRUD = READ -->
                <tbody>
                    <!-- KODE PSP -->
                    <?php
                        // database cakor
                        $query = mysqli_query($koneksi, "SELECT * FROM identitas JOIN cakor ON identitas.id_ckr = cakor.id_ckr"); 

                        //menampilkan cakor
                        $no = 1;
                        if (mysqli_num_rows($query) > 0) {
                            // Menampilkan databse ke dalam tabel php.
                            foreach ($query as $data){
                    ?>

                    <!-- tampilkan ini -->
                    <tr>
                        <td><?= $no++ ?></td>

                        <!-- cakor -->
                        <td>
                            <span class="bg-success text-white px-4">
                                <?= $data['nu_ckr'] ?>
                            </span>
                        </td>

                        <!-- menampilkan file gambar yg ke input -->
                        <td>
                            <!-- menampilkan gambar ketika gambar di klik -->
                            <a href="./assets/img/<?=$data['foto']?>">
                                <img src="./assets/img/<?=$data['foto']?>" class="img-fluid" width="200px" alt="">
                            </a>
                        </td>

                        <td><?=$data['nama'] ?></td>
                        <td><?=$data['slogan'] ?></td>

                        <td><?=$data['vm'] ?></td>


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