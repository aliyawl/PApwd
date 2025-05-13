<?php
    session_start(); //memulai session
    include "koneksi.php"; //koneksi dengan db

    //ambil inputan dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // cek apakah inputan kosong
    if (empty($username) || empty($password)) {
        echo "<script>
            alert('Username dan Password tidak boleh kosong!');
            window.location.href = '../pages/login.php';
        </script>";
        exit; // stop proses kalau kosong
    }

    //mengambil data yang sama dengan inputan login 
    $data = mysqli_query($connect, "SELECT * FROM users where username = '$username' and password = '$password'") or die (mysqli_error($connect));

    //mengecek kesesuaian data inputan dengan yang ada dalam database
    $cek = mysqli_num_rows($data);

    if($cek > 0){
        //kalau ada data yang sama maka akan menyimpan ke dalam session
        $_SESSION['username'] = $username;
        echo "<script>
            alert('Login Berhasil');
            window.location.href = '../pages/landing.php';
            </script>";
    } else {
        //kalau ngga ada maka login nya gagal:(
        echo "<script>
            alert('Login Gagal nih');
            window.location.href = '../pages/login.php';
            </script>";
    }

?>
