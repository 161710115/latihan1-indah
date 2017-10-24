<?php

require_once 'tugas7.php';

$guru = new guru ('indah','mtk');

echo"nama =".$guru->get_nama_guru()."<br>";
echo"tempat =".$guru->get_pelajaran()."<br>";
?>