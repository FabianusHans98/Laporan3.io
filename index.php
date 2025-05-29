<?php
session_start();

function esc($str) {
    return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

$show_form = true;
$show_result = false;
$show_error = false;

$nama = '';
$email = '';
$login_time = '';
$login_day = '';
$login_date = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');

    if ($nama === '' || $email === '') {
        $show_form = false;
        $show_error = true;
    } else {
        date_default_timezone_set('Asia/Jakarta');
        $login_time = date('H:i:s');
        $login_day = strftime('%A', time());
        $login_date = date('d F Y');
        $show_form = false;
        $show_result = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #d4edda;
            padding-top: 5rem;
        }
        .form-container, .container-message, .container-login {
            max-width: 420px;
            margin: auto;
            padding: 2rem;
            background: #f8f9fa;
            border-radius: 0.375rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
        }
        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #198754;
        }
        ul.list-group {
            text-align: left;
        }
    </style>
</head>
<body>

<?php if ($show_form): ?>
<div class="form-container">
    <h2>Form Login</h2>
    <form method="POST">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-success">Login</button>
            <button type="reset" class="btn btn-outline-secondary">Reset</button>
        </div>
    </form>
</div>

<?php elseif ($show_error): ?>
<div class="container-message">
    <h2>Data Tidak Lengkap</h2>
    <p><strong>Mohon isi Nama dan Email dengan lengkap!</strong></p>
    <a href="index.php" class="btn btn-success">Kembali ke Form Login</a>
</div>

<?php elseif ($show_result): ?>
<div class="container-login">
    <h2>Data Login Anda</h2>
    <ul class="list-group mb-4">
        <li class="list-group-item"><strong>Nama:</strong> <?= esc($nama) ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?= esc($email) ?></li>
        <li class="list-group-item"><strong>Jam Login:</strong> <?= $login_time ?></li>
        <li class="list-group-item"><strong>Hari Login:</strong> <?= $login_day ?></li>
        <li class="list-group-item"><strong>Tanggal Login:</strong> <?= $login_date ?></li>
    </ul>
    <a href="index.php" class="btn btn-success">Kembali ke Awal</a>
</div>
<?php endif; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
