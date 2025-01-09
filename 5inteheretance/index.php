<?php

include 'koneksi.php';

$objek=new koneksi('locallhost','root','','buku');
$objek->cekkoneksi();


$objek1=new buku('locallhost','root','','buku');
$objek1->cekkoneksi();
$objek1->tambahbuku();