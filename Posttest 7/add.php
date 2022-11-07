<?php
    require'config.php';

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
        $nama_file = $_POST['nama_file'];


      
        $gambar = isset($_FILES['gambar']['name']) ? $_FILES['gambar']['name'] : '';
        $x = explode('.', $gambar);
        $ekstensi = strtolower(end($x));
        $gambar_bayar = "$nama_file.$ekstensi";
        $tmp =  isset($_FILES['gambar']['tmp_name']) ? $_FILES['gambar']['tmp_name'] : '';

        if(move_uploaded_file($tmp, 'gambar/'.$gambar_bayar)) {

            $kirim = mysqli_query($db, "INSERT INTO pemesanan (nama, email, tanaman , jumlah, telepon, alamat, keterangan, waktu_req, pembayaran, nama_file) 
                     VALUES ('$nama', '$email', '$tanaman',  '$jumlah', '$telepon', '$alamat', '$keterangan', '$waktu_req', '$pembayaran', '$gambar_bayar')");
            $add = mysqli_query($db, "INSERT INTO penjualan (nama,email,tanaman,jumlah,telepon,alamat,keterangan,waktu_req,pembayaran, statusbayar, nama_file) 
                   VALUES ('$gambar_bayar','$email','$tanaman','$jumlah','$telepon','$alamat', '$keterangan','$waktu_req', '$pembayaran', '$status', '$gambar_bayar')");
            if($kirim){
            echo "<script> alert('Data Berhasil Dikirim, Pemesanan Berhasil!!!');</script>";
            header("Location:daftarpesan.php");
            }else {
                echo "Gagal Membeli, Coba Lagi";
            }
      }
    }


?>







<?php 

require 'config.php';

if(isset($_POST['add'])){

  $email = $_POST['email'];
  $tanaman = implode(', ', $_POST['tanaman']);
  $jumlah = $_POST['jumlah'];
  $telepon = $_POST['telepon'];
  $alamat = $_POST['alamat'];
  $keterangan = $_POST['keterangan'];
  $waktu_req = $_POST['waktu_req'];
  $pembayaran = $_POST['pembayaran'];
  $status = $_POST['statusbayar'];
  $nama_file = $_POST['nama_file'];


      
  $gambar = isset($_FILES['gambar']['name']) ? $_FILES['gambar']['name'] : '';
  $x = explode('.', $gambar);
  $ekstensi = strtolower(end($x));
  $gambar_bayar = "$nama_file.$ekstensi";
  $tmp =  isset($_FILES['gambar']['tmp_name']) ? $_FILES['gambar']['tmp_name'] : '';

  if(move_uploaded_file($tmp, 'gambar/'.$gambar_bayar)) {

      $kirim = mysqli_query($db, "INSERT INTO pemesanan (nama, email, tanaman , jumlah, telepon, alamat, keterangan, waktu_req, pembayaran, nama_file) 
               VALUES ('$nama', '$email', '$tanaman',  '$jumlah', '$telepon', '$alamat', '$keterangan', '$waktu_req', '$pembayaran', '$gambar_bayar')");
      $add = mysqli_query($db, "INSERT INTO penjualan (nama,email,tanaman,jumlah,telepon,alamat,keterangan,waktu_req,pembayaran, statusbayar, nama_file) 
             VALUES ('$gambar_bayar','$email','$tanaman','$jumlah','$telepon','$alamat', '$keterangan','$waktu_req', '$pembayaran', '$status', '$gambar_bayar')");
      if($kirim){
      echo "<script> alert('Data Berhasil Dikirim, Pemesanan Berhasil!!!');</script>";
      header("Location:laporanpenjualan.php");
      }else {
          echo "Gagal Membeli, Coba Lagi";
      }
}
}


?>
