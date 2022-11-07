

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="svg/icon.svg" />

    <link rel="stylesheet" href="stylesheet/pesanan.css" />

    <title>Toko Tanaman Polaris</title>
  </head>
  <body>
    <div class="header">
      <nav>
        <div class="header-logo">Toko Tanaman Polaris</div>
        <ul class="navbar">
          <li>
            <a href="index.html"> Home </a>
          </li>
          <li>
            <a class="about" href="about.html"> About </a>
          </li>
          <li>
            <a href="katalog.html"> Katalog </a>
          </li>
          <li>
            <a href="daftarpesan.php"> Daftar Pesanan </a>
          </li> 
          <li>
            <img src="Assets/moon.png" alt="dark" id="icon" />
          </li>
        </ul>
      </nav>
    </div>
    <div class="main">
      <div class="copy-container">
        <div class="container">
          <h1 id="sub-judul">Toko Tanaman Polaris</h1>

          <h3 class="tanaman-title">Register</h3>
        </div>
        <div class="contents" style="display: none" id="pesan">
          <div class="request-form">
          
     <form action="" method="post">
        <label for =""> Email </label> <br><br>
        <input type ='email' name="email"> <br> <br>

        <label for =""> Username </label> <br><br>
        <input type ='text' name="username"> <br> <br>

        <label for =""> Password </label> <br><br>
        <input type ='password' name="password"> <br> <br>

        <label for =""> Konfirmasi Password </label> <br><br>
        <input type ='password' name="konfirmasi"> <br> <br>

        <input type ='submit' name="regis" value="Regis"> <br> <br>

        <p> Sudah Punya Akun? <a href = login.php> Login</a>
       </p>  


     </form>
    
          </div>
        </div>
      </div>
    </div>
    <footer class="footer">
      <div class="footer-logo">Toko Tanaman Polaris</div>
      <hr />
      <p>Copyright &copy 2022 All Rights Reserved by Riska Nurliyanti</p>
    </footer>
    <script>
      var icon = document.getElementById("icon");

      icon.onclick = function () {
        document.body.classList.toggle("dark-theme");
        if (document.body.classList.contains("dark-theme")) {
          icon.src = "Assets/sun.png";
          alert("Dark-Mode Berhasil!");
          const desk = document.getElementById("det");
          desk.style.fontStyle = "italic";
        } else {
          icon.src = "Assets/moon.png";
          alert("Light-Mode Berhasil!");
          const desk = document.getElementById("det");
          desk.style.fontStyle = "normal";
        }
      };

      
      document.getElementById("kirim").addEventListener("click", function() {
                         alert("Terima Kasih Telah Membeli Tanamanan Kami!!!");
                        
      });
                           
    </script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
  </body>
</html>






<?php 
    
    
require 'config.php';

if(isset($_POST['regis'])) {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $konfirmasi = $_POST['konfirmasi'];


    $sql = "SELECT * FROM akun WHERE username = '$username'";
    $user = $db -> query($sql); 

    if (mysqli_num_rows($user) > 0) {
        echo "<script>
                alert('Username telah digunakan, silahkan gunakan username lain') </script>";
    }else {
        //konfirmasi password
        if($password == $konfirmasi) {


            $password = password_hash($password, PASSWORD_DEFAULT);
          
            $query = "INSERT INTO akun (email, username, psw)
                        VALUES ('$email', '$username', '$password')";
            $result = $db -> query($query);


            if($result) {
                echo "<script>
                alert('Registrasi Berhasil') </script>";
                header("location:login.php");

            } else {
                echo "<script>
                alert('Registrasi Gagal') </script>";
            }
        } else {
            echo "<script>
            alert('Konfirmasi Password Salah') </script>";
        }

    }

}