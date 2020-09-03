<?php 

require_once "core/init.php";

$blog = new Blog();
$show = $blog->showBlog();

if(isset($_GET['delete'])){
    $delete = $blog->deleteBlog($_GET['delete']);
    if (!$delete) {
        echo "gagal di hapus !";
    }

    header('Location: add.php');
}

?>