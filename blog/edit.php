<?php 

require_once "core/init.php";
require_once "view/header.php";

if(isset($_GET['id'])){
    $blog = new Blog();
    $edit = $blog->editBlog($_GET['id']);
    $edit = $edit->fetch(PDO::FETCH_OBJ);

?>
<style>
    body{
        background-image: url("view/gambar/admin.jpg");
    }
</style>

<div class="add-article">
    <form action="edit.php" method="POST" class="artikel">
        <label for="judul">Judul</label>
            <input type="hidden" name="id" value="<?="$edit->id";?>">
            <input type="text" name="judul" placeholder="Judul" value="<?="$edit->judul";?>">
        <label for="tag">Tag Artikel</label>
            <input type="text" name="tag" placeholder="Masukkan Tag Blog" value="<?="$edit->tag";?>">
        <label for="isi">Artikel</label>
            <textarea name="isi"  cols="65%" rows="10" autofocus><?="$edit->isi";?></textarea><br>
            <input type="submit" name="updateBlog" value="Update">
            <input type="reset"  value="Reset">
    </form>

</div>

<?php 
}

if (isset($_POST['updateBlog'])) {
    $id    = $_POST['id'];
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];
    $tag   = $_POST['tag'];

    $updt       = new Blog();
    $update     = $updt->updateBlog($id, $judul, $isi, $tag);
    if ($update == "Success") {
        header('Location: add.php');
    }
    
}

?>