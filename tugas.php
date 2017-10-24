<?php
class identitas
{
public $nama;
public $nis;
public $alamat;
public $umur;
public $sekolah;

public function __construct($nama, $nis, $alamat, $umur,$sekolah)
{
$this->nama = $nama;
$this->nis  = $nis;
$this->alamat = $alamat;
$this->umur = $umur;
$this->sekolah = $sekolah;

}

public function get_nama()
	{
		return $this->nama;
	}
	public function get_nis()
	{
		return $this->nis;
	}
	public function get_alamat()
	{
		return $this->alamat;
	}
	public function get_umur()
	{
		return $this->umur;
	}
	public function get_sekolah()
	{
		return $this->sekolah;
	}
}
?>