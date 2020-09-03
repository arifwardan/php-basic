<?php 

require_once "core/init.php";
require_once "view/header.php";

$blog = new Blog();
$show = $blog->showBlog();
?>

<!-- file css -->
<style>
body {
    background-image: url("view/gambar/images.jpeg");
    background-repeat: no-repeat, repeat;
    background-attachment: fixed;
    background-size: cover;
    margin: 40px auto;
    width: 80%;
}

</style>
<!-- akhir file css -->

<body class="">
    <div class="row">
<?php while($row = $show->fetch(PDO::FETCH_OBJ)): ?>
    <div class="column middle">
        <h3><?= $row->judul; ?></h3>
            <p><?= $row->isi; ?></p>
        <p class="waktu"><?= $row->waktu; ?></p>
        <p class="tag">tag: <a href="kategori.php?nama"><?= $row->tag; ?></a></p><br>
    </div>
<?php endwhile; ?>
    </div>
</body>

<?php 

require_once "view/footer.php";

?>