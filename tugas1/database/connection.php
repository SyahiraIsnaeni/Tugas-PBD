<?php

$connect = mysqli_connect("localhost","root","Syahira_15","library_catalog");

// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}else{
//    echo "koneksi berhasil";
}
?>