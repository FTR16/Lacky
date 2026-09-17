<?php

$koneksi = mysqli_connect("localhost","root","");

if(mysqli_select_db($koneksi, "Siswa_db")){
    echo "Berhasil";
}else{
    die("Ilang jir");

}
?>      