<!DOCTYPE html>
<html lang="en">
<head>
    <title>Layanan Pembayaran SPP</title>
    <meta charset="UTF-8">
    <meta name="description" contents="Sekolah ABCD">
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <header>
        <h1 class="title">Sekolah ABCD</h1>
        <h3 class="desc">Selamat Datang di Layanan Pembayaran SPP</h3>
        <nav id="navigation">
            <ul>
                <li><a href="index.php?page=beranda">Beranda</a></li>
                <li><a href="index.php?page=siswa">Sisiwa</a></li>
                <li><a href="index.php?page=kontak">Kontak</a></li>
            </ul>
        </nav>
    </header>
    <div id="contents">
        <?php 
        if(isset($_GET['page'])){
            $page = $_GET['page'];
 
            switch ($page) {
                case 'beranda':
                include "beranda.php";
                break;
                case 'siswa':
                include "siswa.php";
                break;
                case 'kontak':
                include "kontak.php";
                break;          
            }
        }
else{
            include "beranda.php";
        }
        ?>
 
    </div>
    <footer>
        &copy Copyright 2023 | Kelompok
    </footer>
</body>
</html>