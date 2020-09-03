<?php 

class Blog{

    public function __construct(){
        $user     = "root";
        $host     = "localhost";
        $pass     = "?>bismillah";
        $dbname   = "my_blog";
        $this->db = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass) or die("Db Gak connect");
    }

    public function showBlog(){
        $sql  = "SELECT * FROM content_blog";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(([]));
        return $stmt;
    }

    public function addBlog($judul, $isi, $tag){
        $sql  = "INSERT INTO content_blog(judul, isi, tag) VALUES (?,?,?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(([$judul, $isi, $tag]));
        // return $stmt;
        if ($stmt) {
            return "Success";
        }else{
            die();
        }
    }

    public function register($username, $email, $password){
        $sql = "INSERT INTO user (username, email, password) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(([$username, $email, $password]));

        if ($stmt){
            return "Success";
        }else{
            die();
        }
    }

    public function deleteBlog($id){
        $sql  = "DELETE FROM content_blog WHERE id='$id'";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(([$id]));
        if ($stmt) {
            return "delete Success";
        }else {
            die();
        }
    }

    public function editBlog($id){
        $sql  = "SELECT * FROM content_blog WHERE id='$id' ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(([$id]));
        return $stmt;
    }

    public function updateBlog($id, $judul, $isi, $tag){
        $sql  = "UPDATE content_blog SET judul ='$judul', isi = '$isi', tag = '$tag' WHERE id='$id' ";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(([$id, $judul, $isi, $tag]));
        if ($stmt) {
            return "Success";
        }
    }

}

// $con = new Blog();
// print_r($con->register('arif', 'pass', 'wardan'));

?>