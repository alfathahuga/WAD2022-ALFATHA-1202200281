<?php

$connect = mysqli_connect("localhost", "root", "", "modul3", "3306");

function showAll(){
    global $connect;

    $query = "SELECT * FROM showroom_alfatha_table";
    $data = mysqli_query($connect, $query);
    $penampung = [];

    while($datas=mysqli_fetch_assoc($data)){
        $penampung[] = $datas;
    }
    return $penampung;
}

    function detail($id){
        global $connect;

        $query = "SELECT * FROM showroom_alfatha_table where id_mobil = $id";
        $data = mysqli_query($connect, $query);
    
        $penampung = [];
        while ($datas = mysqli_fetch_assoc($data)) {
            $penampung[] = $datas;
        }
        return ($penampung);
    }
?>