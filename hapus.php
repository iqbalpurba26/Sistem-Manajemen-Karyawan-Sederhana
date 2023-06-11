<?php 
include 'connection.php';

$id = $_GET["id"];

mysqli_query($conn, "DELETE  FROM pegawai WHERE id=$id");

if(mysqli_affected_rows($conn)>0){
    echo "
    <script>
        alert('data berhasil dihapus');
        document.location.href='dashboard.php';
    </script>
    ";
} else {
    echo "
    <script>
        alert('data gagal dihapus');
        document.location.href='dashboard.php';
    </script>
    ";


}
?>