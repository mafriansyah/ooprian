<?php

include "buku.php";

$objek=new buku();
$objek->isidata("pemerograman web","rian","smk1");
$objek->cetakinfo();


$objek1=new buku();
$objek->isidata("pemerograman berorientasi objek","rian","smk1");
$objek1->cetakinfo();