<?php
    include "koneksi.php"; //koneksi dengan db

    //menangkap inputan dari form register 
    $username = $_POST['username'];
    $password = $_POST['password']; 

    // cek apakah inputan kosong
    if (empty($username) || empty($password)) {
        echo "<script>
            alert('Username dan Password tidak boleh kosong!');
            window.location.href = '../pages/register.php';
        </script>";
        exit; // stop proses kalau kosong
    }

    //mengambil data username yang sama dengan inputan
    $data = mysqli_query($connect, "SELECT * FROM users where username = '$username'") or die (mysqli_error($connect));

    //cek apakah ada username yang sama
    $cek = mysqli_fetch_assoc($data);
    if ($cek){
        //kalau ada yang sama dia ngga bisa insert ke dalam database
        echo "<script>
            alert('Username sudah ada'); 
            window.location.href = '../pages/register.php';
            </script>";
    } else {
        //kalau ngga ada bisa insert data baru
        $query = mysqli_query($connect, "INSERT INTO users(username, password) values('$username', '$password')");
        echo "<script>
            alert('Register Berhasil');
            window.location.href = '../pages/login.php';
            </script>";
    }

?>
