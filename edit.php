<?php

require 'connect_db.php';
$id = $_GET['id'];
$edit = "SELECT * from contact WHERE id=$id";
$result = mysqli_query($conn, $edit);
$row = mysqli_fetch_assoc($result);

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nomor = $_POST['nomor'];
    $alamat = $_POST['alamat'];
    $label = $_POST['label'];

    $sql = "UPDATE contact SET nama='$nama', email='$email', nomor='$nomor', alamat='$alamat', label='$label' WHERE id='$id'";
    $query = mysqli_query($conn, $sql);

    if( $query ) {
        header('Location: index.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }
}
?>
<!DOCTYPE html>
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
        <title>Update Contact</title>
    </head>
    <body>
        <h1>Update Contact</h1>
        <br>
        <div class="container">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $row['id']; ?>">
                <ul>
                    <li>
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" required value="<?= $row['nama']; ?>">
                    </li>
                    <br>
                    <li>
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" required value="<?= $row['email']; ?>">
                    </li>
                    <br>
                    <li>
                        <label for="nomor">Nomor Telepon</label>
                        <input type="text" name="nomor" id="nomor" required value="<?= $row['nomor']; ?>">
                    </li>
                    <br>
                    <li>
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" id="alamat" required value="<?= $row['alamat']; ?>">
                    </li>
                    <br>
                    <li>
                        <label for="label">label</label>
                        <input type="text" name="label" id="label" required value="<?= $row['label']; ?>">
                    </li>
                    <br>
                </ul>
                <div class="container">
                    <input type="submit" name="submit" id="submit">
                </div>
            </form>
        </div>
        <br>
        <div class="container">
            <a href="index.php" class="btn btn-primary">Back</a>
        </div>
    </body>
</html>