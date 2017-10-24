<?php
class kebun_binatang
{
public $nama;
public $makanan;
public $hidung

public function __construct($nama, $makanan,$hidung)
{
$this->namahewan = $nama;
$this->makanan  = $makanan;
$this->hidung = $hidung

}

public function get_nama()
	{
		return $this->nama;
	}
	public function get_makanan()
	{
		return $this->makanan;
	}
	public function get_hidung()
	{
		return $this->hidung;
	}
}
?>