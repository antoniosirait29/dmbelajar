<?php

require 'connect_db.php';

$id = $_GET['id'];
$hapus = "DELETE from contact WHERE id=$id";
$query = mysqli_query($conn, $hapus);

if ($query) {
    header('Location: index.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

