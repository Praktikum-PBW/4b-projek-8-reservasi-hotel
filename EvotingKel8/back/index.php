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

<!-- HALAMAN LOGIN yg di manipulasi -->

<body>
    <?php
        session_start();
    ?>
    <!-- TEMPLATE JavaScript BOOSTRAP V5.1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- 
        Tugas Kelompok Pertemuan 7 (DL : 31MAR22) :
        1. Membuat Diagram Database di website dbdiagram.io,
        2. Implementasi Database pada SQL website LocalHost/PHPMyAdmin,
        3. Membuat CRUD dari database yang di buat pada PHPMyAdmin yang
    -->

    <!-- MEMBUAT HALAMAN CRUD (CREATE, READ, UPDATE, DELETE) -->
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">

            <a class="navbar-brand h4" href="#">E-Voting TI B'20</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"
                ria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar"
                aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">E-Voting TI B'20</h5>
                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                        aria-label="Close"></button>
                </div>

                <!-- LIST NAVBAR ITEM -->
                <div class="offcanvas-body navbar-dark bg-dark">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                        <!-- 1. -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php?page=Profile"
                                id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">

                                Profile

                            </a>

                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li style="text-align: center;">
                                    <a class="btn btn-outline-success my-2 my-sm-0" type="submit"
                                        href="index.php?page=signin">SignIn</a>

                                    <a class="btn btn-outline-success my-2 my-sm-0" type="submit"
                                        href="index.php?page=signup">SignUp</a>

                                </li>
                            </ul>

                        </li> -->

                        <!-- 3 -->
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Dashboard</a>
                        </li>

                        <?php
                        if ($_SESSION['level'] == "admin") {
                        ?>

                        <!-- 2. -->
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?page=cakor">Cakor</a>
                        </li>

                        <!-- 3 -->
                        <li class="nav-item">
                            <a class="nav-link " href="index.php?page=identitas">Identitas</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="index.php?page=user">User</a>
                        </li>

                        <?php
                        } else if ($_SESSION['level'] == "writer") {
                        ?>

                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=cakor">Cakor</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="index.php?page=identitas">Identitas</a>
                        </li>
                    <?php
                    }
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= $_SESSION['nama'] ?>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                        </ul>
                    </li>
                        <!-- 4 -->
                        <!-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="index.php?page=KandidatCakor"
                                id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">

                                Kandidat CAKOR

                            </a>

                            <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                <li><a class="dropdown-item" href="index.php?page=smstr4">Semester 4</a></li>
                                <li><a class="dropdown-item" href="index.php?page=smstr5">Semester 5</a></li>
                            </ul>
                        </li> -->

                        <!-- 5 -->
                        <li class="nav-item">
                            <a class="nav-link" href="index.php?page=hasilpolling">Hasil
                                Polling</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- PANGGIL FILE MENU -->
    <div class="container mt-4">
        <?php
            include "menu.php";
        ?>
    </div>

</body>

</html>