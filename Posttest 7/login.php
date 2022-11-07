

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

          <h3 class="tanaman-title">Login</h3>
        </div>
        <div class="contents" style="display: none" id="pesan">
          <div class="request-form">
          <form action="" method="post">
            <label for =""> Username/Email </label> <br><br>
            <input type ='text' name="user"> <br> <br>


            <label for =""> Password </label> <br><br>
            <input type ='password' name="password"> <br> <br>


        <input type ='submit' name="login" value="Login"> <br> <br>

        <p> Belum Punya Akun? <a href = regist.php> Registrasi</a>
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
    
    session_start();

    if(isset($_POST['login'])) {
        $user = $_POST['user'];
        $password = $_POST['password'];


        $sql = "SELECT * FROM akun WHERE username = '$user' OR email= '$user'";
        $result = $db -> query($sql); 

        if (mysqli_num_rows($result) > 0) {
           
            $row = mysqli_fetch_array($result);
            $username = $row['username'];


            if(password_verify($password, $row['psw'])){

                $_SESSION['login'] = true;
                echo "<script>
                alert('Selamat Datang $username')
                document.location.href = 'index.html';
                </script>";
               
            } else {
                echo "<script>
                alert('Username dan Password Salah!!!') </script>";
            }

            
        }else {
            echo "<script>
            alert('Username/Password Tidak Ditemukan') </script>";
        }

    }
