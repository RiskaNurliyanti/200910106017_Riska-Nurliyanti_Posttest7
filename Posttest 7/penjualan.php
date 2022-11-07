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
            <form class="form" method="post" action="add.php" id="inputan">
              <label for="nama">Nama :</label>
              <input
                size="30"
                name="nama"
                id="nama"
                type="text"
                placeholder="Masukkan Nama Anda"
              /><br /><br />
              <label for="email">Email :</label>
              <input
                name="email"
                size="30"
                id="email"
                type="email"
                placeholder="Masukkan Email Anda"
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
                  value="Alocasia"
                />Alocasia

                <br />
                <input
                  id="calathea"
                  type="checkbox"
                  name="tanaman[]"
                  value="Calathea"
                />Calathea
               
                <br />
                <input
                  id="faux"
                  type="checkbox"
                  name="tanaman[]"
                  value="Faux"
                />Faux
               
                <br />
                <input
                  id="kaktus"
                  type="checkbox"
                  name="tanaman[]"
                  value="Kaktus"
                />Kaktus
  
                <br />
                <input
                  id="lidahmertua"
                  type="checkbox"
                  name="tanaman[]"
                  value="Lidah Mertua"
                />Lidah Mertua
             

                <br />
                <input
                  id="monstera"
                  type="checkbox"
                  name="tanaman[]"
                  value="Monstera"
                />Monstera

                <br />
                <input
                  id="peace-lily"
                  type="checkbox"
                  name="tanaman[]"
                  value="Peace Lily"
                  />Peace Lily

                <br />
                <input
                  id="suculent"
                  type="checkbox"
                  name="tanaman[]"
                  value="Sukulen"
                />Sukulen
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
                placeholder="Masukkan Total Jumlah Tanaman Yang Ingin Dibeli"
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
                placeholder="Masukkan Nomor Telepon Anda"
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
                placeholder="Masukkan Alamat Anda"
              />
              <br />
              <br />
              <label for="keterangan">Keterangan (Wajib Diisi) </label><br />
              <textarea
                name="keterangan"
                id="info"
                row="10"
                cols="50"
              ></textarea>
              <br /><br />
              <br /><br />
              <br />
              <br />
              <label for="waktu_req">Waktu Pengantaran :</label>
              <input
                id="waktu_req"
                name="waktu_req"
                type="datetime-local"
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
                <br /><br />
                <label for="nama">Status Pembayaran:</label>
              <input
                size="30"
                name="statusbayar"
                id="status"
                type="text"
                placeholder="Lunas/Belum"
              /><br /><br />
              </div>
              <br />
              <label for ="" > Upload Bukti Bayar : </label>
              <input type = "file" name="gambar"><br><br>
              <br>
              <br />
              <br />
              <input id="kirim" type="submit" value="add" name="add"  />
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
                         alert("Data Penjualan Berhasil Ditambahkan!!!");
                        

      });
                           
    </script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
  </body>
</html>
