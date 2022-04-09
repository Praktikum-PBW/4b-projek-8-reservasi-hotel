<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TEMPLATE CSS BOOSTRAP V5.1-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Evoting</title>

</head>
<body>

<div class="container mt-5">
        <div class="row">
            <?php
            include 'libraries/koneksidatabase.php';
            $query = mysqli_query($koneksi, "SELECT * FROM identitas JOIN cakor ON identitas.id_ckr = cakor.id_ckr");
            foreach ($query as $data) {
            ?>
                <div class="col-md-4">
                    <div class="card p-2" style="width:18rem;">
                        <img src="back/assets/img/<?= $data['foto']?>" alt="" class="img-fluid"> 
                        <p class="text-secondary mt-3 mb-0">
                            <?= $data['nu_ckr'] ?>
                        </p>
                        <h3><?= $data['nama'] ?></h3>
                        <p class="lead"><?= $data['slogan'] ?></p>
                        <a href="#" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>


    <!-- TEMPLATE JavaScript BOOSTRAP V5.1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

</body>

</html>