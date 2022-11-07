<?php 
    require 'config.php';

    $result = mysqli_query($db, "SELECT * FROM pemesanan");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="svg/icon.svg" />

    <link rel="stylesheet" href="stylesheet/pesanan.css" />
    <link rel="stylesheet" href="stylesheet/daftarpesanan.css" />
    

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
          <li>
            <a href="logout.php"> Logout </a>
          </li>
        </ul>
      </nav>
    </div>
    <div class="main">
      <div class="copy-container">
        <div class="container">
          <br>
          <br>
          <br>
          <h1 id="sub-judul">Toko Tanaman Polaris</h1>

          <h3 class="tanaman-title"> Daftar Pesanan</h3>
        </div>
        
        <!-- <div class="contents" style="display: none" id="pesan"> -->
          <div class="request-daftar">
           <br>
           <form action="" method="GET">
            <table>
                <tr>
                  <td>
                    <div class="cari">
                      <input type="text" name="keyword" id="keyword" class="form-control" placeholder="Masukkan Yang Ingin Dicari">
                    </div>
                  </td>
                  <td>
                    <button type="submit" class="cari2" name='search'>
                    <img src="svg/search.png" width="20" height="20" class="bi bi-pencil-fill" viewBox="0 0 20 20"> 
                    </button>
                  </td>
                </tr>
              </table>
            </form>
           <br>
           <a href="pesanan.php" class="tambah">Tambah Pesanan</a>
        <a href="laporanpenjualan.php" class="laporanpenjualan">Lihat Laporan Penjualan</a>
            
             
            <table id="tabel" border = "1">
                <tr class="thead">
                    <th>ID</th>
                    <th nowrap>Nama Lengkap</th>
                    <th>Email</th>
                    <th>Tanaman</th>
                    <th>Jumlah</th>
                    <th>No Telepon</th>
                    <th>Alamat</th>
                    <th>Keterangan Pesanan</th>
                    <th>Waktu Pemesanan</th>
                    <th>Pembayaran</th>
                    <th> Bukti Pembayaran</th>
                    <th colspan="2">Actions</th>
                </tr>

                <?php 
                    $i = 1;
                    while($row = mysqli_fetch_array($result)){

                ?>

                <tr>
                    <td><?=$i;?></td>
                    <td nowrap><?=$row['nama']?></td>
                    <td><?=$row['email']?></td>
                    <td><?=$row['tanaman']?></td>
                    <td><?=$row['jumlah']?></td>
                    <td><?=$row['telepon']?></td>
                    <td><?=$row['alamat']?></td>
                    <td><?=$row['keterangan']?></td>
                    <td><?=$row['waktu_req']?></td>
                    <td><?=$row['pembayaran']?></td>
                    <td> <img src = "gambar/<?=$row['nama_file']?>" alt="" width="100px">
                    <td class="edit">
                        <a href="edit.php?id=<?=$row['id'];?>">
                            
                            <img src="svg/edit.png" width="20" height="20" class="bi bi-pencil-fill" viewBox="0 0 20 20"> 
                            </img>
                        </a>
                    </td>
                    <td class="hapus">
                        <a href="hapus.php?id=<?=$row['id'];?>">
                            <!-- <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg> -->
                            <img src="svg/delete.png" width="20" height="20" class="bi bi-pencil-fill" viewBox="0 0 20 20"> 
                            </img>
                        </a>
                    </td>
                </tr>
                
                <?php
                    $i++; 
                        }
                ?>

            </table>
          </div>
        <!-- </div> -->
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

      
                           
    </script>
    <script type="text/javascript" src="script.js"></script>
    <script type="text/javascript" src="jquery.js"></script>
  </body>
</html>


<?php
  if(isset($_GET['search'])){
    //ambil keyword pencarian
    $keyword = $_GET['keyword'];

    //jalankan perintah sql
    $result = mysqli_query($db, "SELECT * FROM pemesanan WHERE nama LIKE '%$keyword%' OR alamat LIKE '%$keyword%'");
    } else {
       //jalankan perintah sql
       $result = mysqli_query($db, "SELECT * FROM pemesanan");
    }

//menyiapkan array asosiatif

$pemesanan = [];

//memindahkan dari hasil ke array rows
 while ($row = mysqli_fetch_assoc($result)) {
  $pemesanan[] = $row;
 }

?>