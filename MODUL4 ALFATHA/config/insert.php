<?php
    $connect = mysqli_connect("localhost", "root", "", "modul3", "3306");

    function tambah($data){
        global $connect;

    $nama_mobil = $data['namamobil'];
    $pemilik_mobil = $data['namapemilik'];
    $merk_mobil = $data['merk'];
    $tanggal_beli = $data['tanggal'];
    $deskripsi = $data['deskripsi'];
    $foto_mobil = $data['photo'];
    $status_pembayaran = $data['statuspembayaran'];
    
    $query = "INSERT INTO showroom_alfatha_table VALUES ('', '$nama_mobil', '$pemilik_mobil', '$merk_mobil', '$tanggal_beli', '$deskripsi', '$foto_mobil', '$status_pembayaran')";

    mysqli_query($connect, $query);
    return mysqli_affected_rows($connect);
}

?>