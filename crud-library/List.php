
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List.php</title>
</head>
<body>
    <div class="container">
    <h2>Daftar Buku Yang Tersedia</h2>
    <table class="table">
        <tr>
            <td>Kode buku</td>
            <td>Judul Buku</td>
            <td>Penagrang buku</td>
            <td>Penerbit buku</td>
            <td>Edit</td>
            <td>Delete</td>
        </tr>

<?php

require('Library.php');
$lib = new Library();
$show = $lib->showBooks();
while($data = $show->fetch(PDO::FETCH_OBJ)){
    echo "
    <tr>
    <td>$data->kodeBuku</td>
    <td>$data->judulBuku</td>
    <td>$data->pengarang</td>
    <td>$data->penerbit</td>
    <td><a href='List.php?delete=$data->kodeBuku'>Delete</a></td>
    <td><a href='edit.php?kode=$data->kodeBuku'>Edit</td>
    </tr>
    ";
    };
    ?>
    </table>
    <a href="index.php">Tambah Buku Baru</a>
    </div>
</body>
</html>

<?php
if(isset($_GET['delete'])){
$del = $lib->deleteBook($_GET['delete']);
    header('Location: List.php');
}
?>