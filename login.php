<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Galeri Foto</title>
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    body {
            background-image: url('https://i.pinimg.com/originals/3a/ea/dd/3aeadd5a3e5502f8a72a577cd7c6a623.jpg'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: #fff; 
        }
        .navbar-brand img {
            max-width: 30px;
            height: auto;
            border-radius: 100%; 
            margin-right: 10px;
        }
        .eye-icon {
            cursor: pointer;
            position: relative;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
  <img src="assets/img/bf.jpeg" alt="logo" width="30" height="30" class="d-inline-block align-top rounded-circle ">
    <a class="navbar-brand" href="index.php">Website Galeri Foto</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me-auto">
       
      </div>
      <a href="register.php" class="btn btn-outline-primary m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>

    </div>
  </div>
</nav>  

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body bg-light">
                    <div class="text-center">
                        <h5>Login Aplikasi</h5>
                    </div>
                    <form action="config/aksi_login.php" method="POST">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" required>
                        <label class="form-label">Password</label>
                        <div class="input-group">
                                <input type="password" name="password" class="form-control" required id="password">
                                <button class="btn btn-outline-secondary eye-icon" type="button" id="showPasswordToggle">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </button>
                            </div>
                        <div class="d-grid mt-2">
                            <button class="btn btn-primary" type="submit" name="kirim">MASUK
                            </button>
                        </div>
                    </form>
                    <hr>
                    <p>Belum Punya Akun? <a href="register.php">Daftar Disini!</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="d-flex justify-content-center border-top mt-3 bg-light fixed-bottom">
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script>
        document.getElementById('showPasswordToggle').addEventListener('click', function() {
            var passwordField = document.getElementById('password');
            var eyeIcon = document.getElementById('showPasswordToggle');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                eyeIcon.classList.remove('fa-eye');
                eyeIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                eyeIcon.classList.remove('open');
            }
        });
    </script>
    <p>&copy; UKK RPL 2024  Nama Peserta</p>
</body>
</html>