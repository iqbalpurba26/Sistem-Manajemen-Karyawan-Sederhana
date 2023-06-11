<?php 
session_start();
if(!isset($_SESSION["login"])){
    header("location:dashboard.php");
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
    <title>Home Users</title>
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
            <p id="admin"><i class="fa-solid fa-user"></i><span>Selamat Datang, User</span></p>
            <a href="index_login.php" target="_blank"><i class="fa-solid fa-house"></i><span>Homepage</span></a>
            <a href="halaman_users.php"><i class="fa-solid fa-gauge"></i><span>Dashboard</span></a>
            <a href="nonadmin.php"><i class="fa-solid fa-plus"></i><span>Tambah Pegawai</span></a>
            <a href="nonadmin.php"><i class="fa-sharp fa-solid fa-gear"></i><span>Atur Data</span></a>
            <a href="logout.php" id="logout"><i class="fa-solid fa-right-from-bracket"></i><span>Logout</span></a>  
        </div> 
    </div>



    <div class="content">
        <div class="home-text">
            <p>Maaf... Anda tidak dapat mengakses halaman ini karena Anda bukan admin. Silakan login sebagai admin</p>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>