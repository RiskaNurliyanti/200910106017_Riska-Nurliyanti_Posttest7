<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM pemesanan WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
        $plant = explode(",", $row['tanaman']);
    }

    if(isset($_POST['Kirim'])){
        $nama = $_POST['nama'];
        $email = $_POST['email'];
        $tanaman = implode(', ', $_POST['tanaman']);
        $jumlah = $_POST['jumlah'];
        $telepon = $_POST['telepon'];
        $alamat = $_POST['alamat'];
        $keterangan = $_POST['keterangan'];
        $waktu_req = $_POST['waktu_req'];
        $pembayaran = $_POST['pembayaran'];

        $update = mysqli_query($db, "UPDATE pemesanan SET nama='$nama', email='$email', tanaman='$tanaman', jumlah='$jumlah', telepon='$telepon', alamat='$alamat', keterangan='$keterangan', waktu_req='$waktu_req', pembayaran='$pembayaran', WHERE id='$id'");
        $update = mysqli_query($db, "UPDATE penjualan SET nama='$nama', email='$email', tanaman='$tanaman', jumlah='$jumlah', telepon='$telepon', alamat='$alamat', keterangan='$keterangan', waktu_req='$waktu_req', pembayaran='$pembayaran', statusbayar='$status' WHERE id='$id'");
        if($update){
            header("Location:daftarpesan.php");
        }
    }
?>


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
            <img src="Assets/moon.png" alt="dark" id="icon" />
          </li>
        </ul>
      </nav>
    </div>
    <div class="main">
      <div class="copy-container">
        <div class="container">
          <h1 id="sub-judul">Toko Tanaman Polaris</h1>

          <h3 class="tanaman-title">Pesanan</h3>
        </div>
        <div class="contents" style="display: none" id="pesan">
        <div class="request-form">
            <form class="form" method="post"  id="inputan">
              <label for="nama">Nama :</label>
              <input
                size="30"
                name="nama"
                id="nama"
                type="text"
                value=<?=$row['nama'];?>
              /><br /><br />
              <label for="email">Email :</label>
              <input
                name="email"
                size="30"
                id="email"
                type="email"
                value=<?=$row['email'];?>
              />
              <br />
              <br />
              <p>Silahkan Pilih Tanaman Yang Ingin Dibeli :</p>
              <div id="checkbox">
                <br />
                <input
                  id="alocasia"
                  type="checkbox"
                  name="tanaman[]"
                  value="Alocasia" <?=in_array('Alocasia', $plant) ? print 'checked' : '' ?>>Alocasia

                <br />
                <input
                  id="calathea"
                  type="checkbox"
                  name="tanaman[]"
                  value="Calathea" <?=in_array('Calathea', $plant) ? print 'checked' : '' ?>>Calathea
               
                <br />
                <input
                  id="faux"
                  type="checkbox"
                  name="tanaman[]"
                  value="Faux" <?=in_array('Faux', $plant) ? print 'checked' : '' ?>
                >Faux
               
                <br />
                <input
                  id="kaktus"
                  type="checkbox"
                  name="tanaman[]"
                  value="Kaktus" <?=in_array('Kaktus', $plant) ? print 'checked' : '' ?>
                >Kaktus
  
                <br />
                <input
                  id="lidahmertua"
                  type="checkbox"
                  name="tanaman[]"
                  value="Lidah Mertua" <?=in_array('Lidah Mertua', $plant) ? print 'checked' : '' ?>
                >Lidah Mertua
             

                <br />
                <input
                  id="monstera"
                  type="checkbox"
                  name="tanaman[]"
                  value="Monstera" <?=in_array('Monstera', $plant) ? print 'checked' : '' ?>
                >Monstera

                <br />
                <input
                  id="peace-lily"
                  type="checkbox"
                  name="tanaman[]"
                  value="Peace Lily" <?=in_array('Peace Lily', $plant) ? print 'checked' : '' ?>
                  >Peace Lily

                <br />
                <input
                  id="suculent"
                  type="checkbox"
                  name="tanaman[]"
                  value="Sukulen" <?=in_array('Sukulen', $plant) ? print 'checked' : '' ?>
                >Sukulen
              </div>
              <br />
              <br />
              <label for="jumlah">Jumlah Tanaman :</label>
              <input
                name="jumlah"
                colspan="2"
                min="0"
                max="10"
                size="3"
                id="jumlah"
                type="number"
                value=<?=$row['jumlah'];?>
              />
              <br />
              <br />
              <label for="telepon">No Telepon :</label>
              <input
                name="telepon"
                colspan="3"
                min="0"
                size="30"
                id="telepon"
                type="text"
                value=<?=$row['telepon'];?>
              />
              <br />
              <br />
              <label for="alamat">Alamat :</label>
              <input
                name="alamat"
                row="10"
                colspan="5"
                size="50"
                id="alamat"
                type="text"
                value=<?=$row['alamat'];?>
              />
              <br />
              <br />
              <label for="keterangan">Keterangan (Wajib Diisi) </label><br />
              <textarea
                name="keterangan"
                id="info"
                row="10"
                cols="50"
                value=<?=$row['keterangan'];?>
              ></textarea>
              <br /><br />
              <br />
              <br />
              <label for="waktu_req">Waktu Pengantaran :</label>
              <input
                id="waktu_req"
                name="waktu_req"
                type="datetime-local"
                value=<?=$row['waktu_req'];?>
              /><br />
              <br />
              <br />

              <label for="pembayaran">Pembayaran </label>
              <br />
              <br />
              <div class="jenispembayaran" id="byr">
                <input
                  type="radio"
                  name="pembayaran"
                  id="gopay"
                  value="Gopay"
                /><label for="Gopay">Gopay</label>
                <input
                  type="radio"
                  name="pembayaran"
                  id="ovo"
                  value="OVO"
                /><label for="OVO">OVO</label>
                <input
                  type="radio"
                  name="pembayaran"
                  id="dana"
                  value="Dana"
                /><label for="Dana">Dana</label>
                <input
                  type="radio"
                  name="pembayaran"
                  id="bri"
                  value="BRI"
                /><label for="BRI">BRI</label>
                <input
                  type="radio"
                  name="pembayaran"
                  id="bni"
                  value="BNI"
                /><label for="BNI">BNI</label>
                <input
                  type="radio"
                  name="pembayaran"
                  id="tunai"
                  value="Tunai"
                /><label for="Tunai">Tunai</label>
              </div>
              <br />
              <label for ="" > Upload Bukti Bayar : </label>
              <input type = "hidden" name="gambar"
              value =<?=$row['nama_file'];?>>
              <br>
              <br />
              <input id="kirim" type="submit" value="Kirim" name="Kirim"  />
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
                         alert("Update Pesanan Berhasil, Terima Kasih Telah Membeli Tanamanan Kami!!!");
                        

      });
                           
    </script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
  </body>
</html>







