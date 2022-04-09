<!-- Mengatur lalulintas Menu navbar -->
<?php 
    if (isset($_SESSION['level']) == "") {
        $_SESSION['error'] = "Silahkan untuk login terlebih dahulu";
        header("Location: ../login.php");
    }
    // Pemeriksaan adanya variabel pada database atau tidak
    if (isset($_GET['page'])){
        // Tempat Koneksi mysql dengan PHP, panggil koneksi
        include '../Libraries/koneksidatabase.php';
        $page = $_GET['page'];    
        //Mengarahkan menu page --> ke tampilan pada tiap item navbar
//---------------------------------------------------------------------------
        switch ($page) {
            case 'dashboard':
                include 'dashboard.php'; //akan menampilkan file dashboard
                break;
//----------------------------------------------------------------------------
            case 'cakor':
                include 'cakor/index.php';
                break;
            // File php pada folder cakor
            case 'cakor_create':
                include 'cakor/create.php';
                break;
            case 'cakor_store':
                include 'cakor/store.php';
                break;
            case 'cakor_edit':
                include 'cakor/edit.php';
                break;
            case 'cakor_update':
                include 'cakor/update.php';
                break;
            case 'cakor_delete':
                include 'cakor/delete.php';
                break;
//----------------------------------------------------------------------------
            case 'identitas':
                include 'identitas/index.php';
                break;
            // File php pada folder identitas
            case 'identitas_create':
                include 'identitas/create.php';
                break;
            case 'identitas_store':
                include 'identitas/store.php';
                break;
            case 'identitas_edit':
                include 'identitas/edit.php';
                break;
            case 'identitas_update':
                include 'identitas/update.php';
                break;
            case 'identitas_delete':
                include 'identitas/delete.php';
                break;
//----------------------------------------------------------------------------
            case 'identitas':
                include 'identitas/index.php';
                break;
            // File php pada folder identitas
            case 'identitas_create':
                include 'identitas/create.php';
                break;
            case 'identitas_store':
                include 'identitas/store.php';
                break;
            case 'identitas_edit':
                include 'identitas/edit.php';
                break;
            case 'identitas_update':
                include 'identitas/update.php';
                break;
            case 'identitas_delete':
                include 'identitas/delete.php';
                break;
//----------------------------------------------------------------------------
            case 'user':
                include 'user/index.php';
                break;
            // File php pada folder identitas
            case 'user_create':
                include 'user/create.php';
                break;
            case 'user_store':
                include 'user/store.php';
                break;
            case 'user_edit':
                include 'user/edit.php';
                break;
            case 'user_update':
                include 'user/update.php';
                break;
            case 'user_delete':
                include 'user/delete.php';
                break;
                
            default:
                echo "404. Maaf halaman tidak ditemukan";
                break;
        }
    } else {
        //jika tidak ada cakor, maka akan menampilkan dashboard
        include 'dashboard.php';
    }