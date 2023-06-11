<?php 
include 'connection.php';

if(isset($_POST["ubah"])){
    $id = $_POST["id"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $nohp = $_POST["nohp"];
    $jabatan = $_POST["jabatan"];

    $query = "UPDATE pegawai SET
            nama = '$nama',
            email = '$email',
            nohp = '$nohp',
            jabatan = '$jabatan' 
            WHERE id=$id";
    mysqli_query($conn,$query);

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil diubah');
            document.location.href='dashboard.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal diubah');
            document.location.href='dashboard.php';
        </script>";
        
    }
}

?>