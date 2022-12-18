<?php
    $connect = mysqli_connect("localhost", "root", "", "modul3", "3306");
    $id = $_GET['id'];
    

    function delete(){
        global $connect;
        global $id;


        $query = "DELETE FROM showroom_alfatha_tabel WHERE id_mobil = $id";
        mysqli_query($connect, $query);
        return mysqli_affected_rows($connect);
    }

    if(delete()){
        header("location: ../page/listcar-alfatha.php");
        exit;
    }
?>