<?php 
include 'config.php';


// ambil id dari URL
$id = $_GET['id'] ?? null;

// ambil dari id
if($id) {
    $stmt = $koneksi->prepare("DELETE FROM tbl_zakat WHERE id_donasi = ?");
    $stmt->bind_param("i", $id);
    $query = $stmt->execute();

    if ($query) {
       header('Location: admin.php');  
       exit; 
    }
}

?>

 