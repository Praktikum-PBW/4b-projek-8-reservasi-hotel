<!-- 5 -->
<!-- FILE YG MEMPROSES DRI FORM EDIT -->

<!-- CRUD - UPDATE -->
<?php
if (isset($_POST['edit'])) {
    $id = htmlentities(htmlspecialchars(strip_tags(trim($_POST['id']))));
    $nu_ckr = htmlentities(htmlspecialchars(strip_tags(trim($_POST['nu_ckr']))));

    $query = mysqli_query($koneksi, "UPDATE cakor SET nu_ckr='$nu_ckr' WHERE id_ckr='$id'");

    if ($query) {
        echo("<script>window.location.href='index.php?page=cakor';</script>");
    } else {
        echo "Gagal";
    }
}