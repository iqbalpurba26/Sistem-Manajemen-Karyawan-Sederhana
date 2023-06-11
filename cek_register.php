<?php 
include 'connection.php';

if(isset($_POST["register"])){
    $username = strtolower(stripslashes($_POST["username"])); 
    $email = $_POST["email"];
    $password = mysqli_real_escape_string($conn,$_POST["password"]);

    $result = mysqli_query($conn, "SELECT username FROM users WHERE username='$username'");


    if(mysqli_fetch_assoc($result)){
        echo "
            <script>
                alert('username sudah terdaftar');
            </script>
        ";
        return false;
    }

    $epassword = md5($password);
    mysqli_query($conn, "INSERT INTO users VALUES('','$username','$email','$epassword')");

    if(mysqli_affected_rows($conn)>0){
            echo "
            <script>
            alert('user berhasil dibuat');
            document.location.href='login.php';
            </script>
            ";
        } else {
            echo mysqli_error($conn);
        } 
}


?>