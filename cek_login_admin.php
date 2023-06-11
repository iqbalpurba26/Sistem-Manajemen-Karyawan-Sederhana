<?php 
session_start();

if(isset($_SESSION["login"])){
    header("location:dashboard.php");
    exit;
}
include 'connection.php';

if(isset($_POST["login"])){
    $username = $_POST["username"];
    $userpass = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM admin WHERE username = '$username'");
    $simpan = mysqli_fetch_assoc($result);


    if(mysqli_num_rows($result)===1){
        if(md5($userpass)===$simpan["password"]){
            //set session
            $_SESSION["login"] = TRUE;
            header("location:dashboard.php");
        }else {
            echo "<script>alert('password atau username salah');
            document.location.href='login.php'</script>";
            
        }
    } else {
        echo "<script>alert('password atau username salah');
        document.location.href='login.php';</script>";
    

    }
}

?>