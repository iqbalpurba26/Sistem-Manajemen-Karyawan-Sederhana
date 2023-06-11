<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("location:login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-icons/6.15.0/simpleicons.svg">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="myProjects/webProject/icofont/css/icofont.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Home Admin</title>
</head>
<body>
    <header>
       <div class="left_area">
            <h3>PT Jumaku Berjaya Sentosa</h3>  
       </div>

       <div class="right_area">
            <i class="fa-solid fa-bars" id="btn"></i>
       </div>
    </header>

    <div class="sidebar">
        <div class="logo_profile">
            <img src="asset/jumaku.png " class="logo" alt="" width="200px" >
        </div>
            
        <div class="menu">
            <p id="admin"><i class="fa-solid fa-user"></i><span>Selamat Datang, Admin</span></p>
            <a href="index_login.php" target="_blank"><i class="fa-solid fa-house"></i><span>Homepage</span></a>
            <a href="dashboard.php"><i class="fa-solid fa-gauge"></i><span>Dashboard</span></a>
            <a href="tambah_data.php"><i class="fa-solid fa-plus"></i><span>Tambah Pegawai</span></a>
            <a href="setting_data.php"><i class="fa-sharp fa-solid fa-gear"></i><span>Atur Data</span></a>
            <a href="logout.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>  
        </div> 
    </div>



    <div class="content">

    <form action="cek_tambah_data.php" method="POST" id="tambah">
        <center>

        <h1>Tambah Data </h1>
        <table width="80%" id="tambah">
            <tr>
                <td><label for="nama">Nama</label></td>
                <td ><input type="text" name="nama" id="nama" required></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td><input type="email" name="email" id="email" required></td>
            </tr>
            <tr>
                <td><label for="nohp">Nomor Hp</label></td>
                <td><input type="text" name="nohp" id="nohp" required></td>
            </tr>
            <tr>
                <td><label for="jabatan">Jabatan</label></td>
                <td><input type="text" name="jabatan" id="jabatan" required></td>
            </tr>
         
    
        </table>

        <button type="submit" name="tambah">Tambah</button>
        </center>
    </form>
    </div>

    <script src="script.js"></script>
</body>
</html>