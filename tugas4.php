<?php

require_once 'tugas3.php';

$kebunbinatang= new kebun_binatang ('sapi','rumput','1','16');

echo"nama =".$kebun_binatang->get_nama()."<br>";
echo"makanan =".$kebun_binatang->get_makanan()."<br>";
echo"hidung =".$kebun_binatang->get_hidung()."<br>";
?>