<?php
    session_start();

    // menghubungkan dengan koneksi
    include 'koneksi.php';
     
    // menangkap data yang dikirim dari form
    $user = $_POST['user'];
    $password = md5($_POST['pass']);
     
    // menyeleksi data admin dengan username dan password yang sesuai
    $data = mysqli_query($mysqli, "SELECT * FROM user WHERE username='$user' AND password ='$password'");
    $row = mysqli_fetch_array($data);
    if($row['username'] == $user AND $row['password'] == $password){
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $row['password'];
        $_SESSION['status'] = "login";
        header("location:backend/");
    }else{
        echo "<script>alert('Username atau Password Admin tidak benar !!!');</script>";
        header("location:login.php?pesan=gagal");
    }
?>