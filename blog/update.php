<?php 

require_once "core/init.php";

if (isset($_GET['id'])) {
    $blog = new Blog();
    $show = $blog->editBlog($_GET['id']);
    $edit = $show->fetch(PDO::FETCH_OBJ);
}



if (isset($_POST['updateBlog'])) {
    $id    = $_POST['id'];
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];
    $tag   = $_POST['tag'];

    $updt = new Blog();
    $update = $updt->updateBlog($id, $judul, $isi, $tag);
    if ($update == "Success") {
        header('Location: add.php');
    }
    
}

?>