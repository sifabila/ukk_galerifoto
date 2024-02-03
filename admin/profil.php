<?php
session_start();
include '../config/koneksi.php';
if ($_SESSION['status'] != 'login'){
    echo "<script>
    alert('Anda belum login!');
    location.href='../index.php';
    </script>";
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
    <style>
    .bg-pink {
      background-color: pink !important; /* Warna pink */
    }
    </style>
</head>
<body class="bg" style="background-image: url('https://wallpaperaccess.com/full/801632.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
       <a href="home.php" class="nav-link">Home</a>
       <a href="album.php" class="nav-link">Album</a>
       <a href="foto.php" class="nav-link">Foto</a>
       <a href="profil.php" class="nav-link">Profil</a>
      </div>

      <a href="../config/aksi_logout.php" class="btn btn-outline-danger m-1">Keluar</a>

    </div>
  </div>
</nav>  

<div class="container mt-3">
    <div class="row">
        <!-- <div class="col-md-3">
            <div class="card"> -->
                <!-- <img src="img/bebek.jpeg" class="card-img-top" title="" style="height:12rem;">
                <div class="card-footer text-center">
                    <a href="">10 Suka</a>
                    <a href="">3 Komentar</a> -->

                    <div class="container-fluid border-bottom border-3 shadow bg-pink">
                      <div class="row p-5 fw-bold fs-5 mx-2">
                        <div class="col text-center">
                          <div class="col pb-3">
                    <img src="http://images6.fanpop.com/image/photos/42600000/-Jungkook-jungkook-bts-42693419-1280-1920.jpg" class="rounded-circle border border-3 shadow img-fluid" width="300" height="300" style="border-radius: 50%;">
                </div>
                <div class="row fs-5 px-5 border-top border-1">
                    <div class="col mt-2">
                        <a class = " pb-2" href="https://wa.me/6282361061732"><img class="rounded-circle border borderlight border-3" src="images/wa.png" alt="whast app" style="width:60px;height:60px;"></a>
                    </div>
                    <div class="col mt-2">
                        <a class = " pb-2" href="https://www.instagram.com/sifan_bila?igsh=MWl5ZHY5cTluM3dteQ=="><img class="rounded-circle border borderlight border-3" src="images/ig.png" alt="instagram" style="width:60px;height:60px;"></a>
                    </div>
                    <div class="col mt-2">
                        <a class = " pb-2" href="https://x.com/Bilanasumi?t=WqgGrd7I9FUOjk_7M-ez4Q&s=09"><img class="rounded-circle border borderlight border-3" src="images/twt.jpg" alt="twitter" style="width:60px;height:60px;"></a>
                    </div>
                    <div class="col mt-2">
                        <a class = " pb-2" href=""><img class="rounded-circle border borderlight border-3" src="images/git.png" alt="github" style="width:60px;height:60px;"></a>
                    </div>
                </div>
               
            </div>

            <div class="col-sm py-3 my-2 rounded border-2 shadow" style="background-color: #D8BFD8;">
                <div class="col ">
                    <figure class="text-center ">
                        <figcaption class="blockquote-footer  fw-lighter fs-6">
                        โพรไฟล์ของฉัน
                        </figcaption>
                    </figure>
                    <ul class="list-group list-group-flush  fs-6 m-1 ">
                        <li class="list-group-item bg-body-tertiary"><pre>Nama             : <a class="text-dark-emphasis text-decoration-none">Syifa Nabila</a></pre></li>
                        <li class="list-group-item bg-body-tertiary"><pre>Tanggal Lahir    : <a class="text-dark-emphasis text-decoration-none">02 Juli 2006</a></pre></li>
                        <li class="list-group-item bg-body-tertiary"><pre>Tempat Tinggal   : <a class="text-dark-emphasis text-decoration-none">Tanjung Balai Paya Geli</a></pre></li>
                        <li class="list-group-item bg-body-tertiary"><pre>No.Hp            : <a class="text-dark-emphasis text-decoration-none">0823-6106-1732</a></pre></li>
                        <li class="list-group-item bg-body-tertiary"><pre>Email            : <a class="text-dark-emphasis text-decoration-none">Syifanabila@gmail.com</a></pre></li>
                      </ul>
                    
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-5 bg-msg">
            <h1 class="text-light text-center">我的故事</h1>
        <div class="container p-5 shadow rounded bg-body-tertiary ">
            <div class="text-justify">
                <p class="text-black"> ✋ 안녕하세요, </p>
                <h1 class="text-dark">Tentang</h1>
                <p class="text-black"> Website galeri foto menekankan tampilan estetis yang menarik dan menyenangkan mata. Desain yang bersih dan responsif memastikan pengguna dapat menikmati gambar-gambar dengan baik, terlepas dari perangkat yang mereka gunakan.Website ini juga memastikan bahwa gambar-gambar yang ditampilkan memiliki kualitas tinggi, sehingga pengguna dapat menghargai detail-detail halus dan kejelasan visual dalam setiap foto.
                </p>
                <p class="text-black">照片画廊强调魅力、魅力、魅力、眼睛的美形象。干净的设计反应,可以不受用户使用的装置,可以享受形象。为了了解这个网站和详细事项的形象。
                </p>
                <p class="text-black">진 갤러리 웹사이트는 매혹적이고 눈을 즐겁게 하는 미적 외관을 강조한다. 깨끗하고 반응성 있는 디자인은 사용자가 사용하는 장치에 관계없이 이미지를 잘 즐길 수 있도록 보장합니다. 이 웹 사이트는 또한 표시되는 이미지가 높은 품질을 보장하므로 사용자가 각 사진의 섬세한 디테일과 시각적 선명도를 감상할 수 있습니다.</p>
                <p class="text-black">เว็บไซต์แกลเลอรี่ภาพถ่ายเน้นรูปลักษณ์ที่สวยงามที่น่าหลงใหลและน่าเพลิดเพลิน การออกแบบที่สะอาดและตอบสนองต่อการใช้งานทำให้ผู้ใช้สามารถเพลิดเพลินกับภาพได้อย่างเต็มที่โดยไม่คำนึงถึงอุปกรณ์ที่ใช้ เว็บไซต์นี้ยังรับประกันคุณภาพภาพที่แสดงไว้สูง ทำให้ผู้ใช้สามารถชื่นชมรายละเอียดที่ละเอียดอ่อนและความคมชัดของภาพของแต่ละภาพ</p>
            </div>
        </div>
    </div>

</div>
</div>
</div>
</div>
</div>

<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
    <p>&copy; UKK RPL 2024 Nama Peserta</p>
</footer>

<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
</body>
</html>
