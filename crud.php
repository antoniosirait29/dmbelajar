<?php

require 'connect_db.php';

//insert data from the form to database
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];
    $label = $_POST['label'];

    // var_dump($judul, $penulis);

    $sql = "INSERT INTO contact (nama, email, nomor, alamat, label) VALUES ('$nama', '$email', '$nomor', '$alamat', '$label')";
    $query = mysqli_query($conn, $sql);

    if( $query ) {

    } else {
        die("Gagal menyimpan perubahan...");
    }
}

?>

<!DOCTYPE HTML> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        h1 {
            text-align: center;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .mb-3 {
            margin: 30px;
        }
        .form-control {
            width: 500px;
        }
        .submit {
            padding: 20px;
        }
    </style>
    <title>Input Contact</title>
</head>
<body>
    <h1>Input Contact</h1>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" id="email" name="email">
            </div>
            <div class="mb-3">
                <label for="nomor" class="form-label">Nomor Telepon</label>
                <input type="text" class="form-control" id="nomor" name="nomor">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <div class="mb-3">
                <label for="label" class="form-label">Label</label>
                <input type="text" class="form-control" id="label" name="label">
            </div>

            <div class="submit">
                <input type="submit" class="form-control" id="submit" name="submit">
            </div>
        </form>
    </div>
    <div class="container">
        <a href="index.php" class="btn btn-primary">Back</a>
    </div>
    <div class="container">
        <?php if(isset($_POST['submit'])) : ?>
            <?php if( $query ) : ?>
                <div class="alert alert-success" role="alert">
                    Data berhasil ditambahkan!
                </div>
            <?php else : ?>
                <div class="alert alert-danger" role="alert">
                    Data gagal ditambahkan!
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
</body>
</html>