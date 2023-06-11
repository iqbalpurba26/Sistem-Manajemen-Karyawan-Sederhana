<?php 
// session_start();

include 'connection.php';

if(isset($_POST["tambah"])){
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $nohp = htmlspecialchars($_POST["nohp"]);
    $jabatan = htmlspecialchars($_POST["jabatan"]);

    $query = "INSERT INTO pegawai VALUES('','$nama','$email','$nohp','$jabatan')";
    mysqli_query($conn, $query);

    if(mysqli_affected_rows($conn)>0){
        echo "
        <script>
            alert('data berhasil ditambah');
            document.location.href='dashboard.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambah');
            document.location.href='dashboard.php';
        </script>
        ";
    }
    
}

?>