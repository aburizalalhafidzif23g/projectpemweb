<?php
session_start();
$message = isset($_SESSION['message']) ? $_SESSION['message'] : '';
unset($_SESSION['message']); // Hapus pesan setelah ditampilkan
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            width: 300px;
        }
        .login-header {
            background-color: #f8f8f8;
            padding: 15px;
            border-bottom: 1px solid #ddd;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }
        .login-header h2 {
            margin: 0;
            font-size: 18px;
        }
        .login-body {
            padding: 20px;
        }
        .login-body button {
            width: 100%;
        }
    </style>
</head>
<body>
<?php if ($message): ?>
        <div class="alert alert-success" role="alert">
            <?= $message; ?>
        </div>
    <?php endif; ?>
    <div class="login-container card">
        <div class="login-header card-header">
            <h2>Halaman Login</h2>
        </div>
        <div class="login-body card-body">
            <form action="./backend/login.php" method="post">
                <div class="form-group">
                    <label for="email">Username</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="masukkan email anda">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="masukkan password anda">
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Masuk</button>
            </form>
            <div class="text-center mt-3">
          <p>Belum memiliki akun? <b><a href="register.php" class="btn btn-warning">Daftar di
                sini</a></b></p>
        </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>