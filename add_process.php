<?php

include "database_conn.php";

if(count($_POST) > 0){
    $id_item = $_POST["id_item"];
    $nama_item = $_POST["nama_item"];
    $harga_item = $_POST["harga_item"];
    $jumlah_item = $_POST["jumlah_item"];

    $query = "INSERT INTO barang (id_item, nama_item, harga_item, jumlah_item) VALUES ('$id_item', '$nama_item', '$harga_item', '$jumlah_item')";

    if(mysqli_query($db_connect, $query)){
        $message = 1;
    } else {
        $message = 4;
    }
}

header("Location:index.php?message=" . $message . "");
?>