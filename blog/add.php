<?php 

require_once "core/init.php";
require_once "view/header.php";

$blog = new Blog();         
$show = $blog->showBlog();

?>

<style>
body {
    background-image: url("view/gambar/admin.jpg");
    background-repeat: no-repeat, repeat;
    background-attachment: fixed;
    background-size: cover;
    margin: 40px auto;
    width: 80%;
}
</style>
<body>
<div class="add-article ">
    <form action="" method="POST" class="artikel">
            <label for="judul">Judul Blog</label>
            <input type="text" name="judul" placeholder="Masukkan Judul Blog" autofocus>
            <label for="tag">Tag Blog</label>
            <input type="text" name="tag" placeholder="Masukkan Tag Blog">
            <label for="isi">Blog Content</label>
            <textarea name="isi" placeholder="Masukkan Artikel Anda"></textarea><br>
            <div class="tbutton">
                <input type="submit" name="addBlog" value="Upload">
                <input type="reset"  value="Reset">
            </div>
    </form>

</div>

<div class="row">
    <?php while($row = $show->fetch(PDO::FETCH_OBJ)): ?>
        <div class="column middle">
            <h3><?= $row->judul; ?></h3>
                <p><?= $row->isi; ?></p>
            <p class="waktu"><?= $row->waktu; ?></p>
            <p class="tag">tag: <a href="kategori.php?nama"><?= $row->tag; ?></a></p><br>
            <?= "<a href='delete.php?delete=$row->id'>Delete</a>"; ?>
            <?= "<a href='edit.php?id=$row->id'>Edit</a>"; ?>
        </div>
    <?php endwhile; ?>
</div>


<?php 

if(isset($_POST['addBlog'])){
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $tag = $_POST['tag'];
    $add = $blog->addBlog($judul, $isi, $tag);
    if ($add == "Success") {
        header('Location: index.php');
        echo "<script>alert('berhasil menambahkan')</script>";
    }
} 

require_once "view/footer.php";

?>
</body>