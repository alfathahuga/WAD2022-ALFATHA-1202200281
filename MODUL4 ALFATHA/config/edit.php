<?php
    $connect = mysqli_connect('localhost', 'root', '', 'modul3', 3306);

    function edit($data){
        global $connect;

        $id = $data['id'];
        $namamobil = $data['namamobil'];
        $namapemilik= $data['namapemilik'];
        $merk = $data['merk'];
        $tanggal = $data['tanggal'];
        $deskripsi = $data['deskripsi'];

        $query = "UPDATE showroom_alfatha_table SET
                nama_mobil='$namamobil',
                pemilik_mobil='$namapemilik',
                merk_mobil='$merk',
                tanggal_beli='$tanggal',
                deskripsi='$deskripsi'
                WHERE id_mobil=$id";

        mysqli_query($connect, $query);
        return mysqli_affected_rows($connect);


    }   
?>