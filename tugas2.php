<?php

require_once 'tugas.php';

$indentitas = new identitas ('indah','88886666','cibaduyut','16','assalaam');

echo"nama =".$orang->get_nama()."<br>";
echo"tempat =".$orang->get_nis()."<br>";
echo"kelas =".$orang->get_alamat()."<br>";
echo"status =".$orang->get_umur()."<br>";
echo"status =".$orang->get_sekolah()."<br>";
?>