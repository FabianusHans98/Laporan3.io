<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #d4edda; /* hijau muda */
            padding-top: 5rem;
        }
        .form-container {
            max-width: 400px;
            margin: auto;
            padding: 2rem;
            background: #f8f9fa; /* warna terang tipis */
            border-radius: 0.375rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.08);
        }
        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #198754; /* hijau bootstrap */
        }
    </style>
</head>
<body>
<div class="form-container">
    <h2>Form Login</h2>
    <form action="postact.php" method="POST">
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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
