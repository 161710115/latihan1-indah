<?php
class guru
{
public $nama_guru;
public $pelajaran;

public function __construct($nama_guru,$pelajaran)
{
$this->nama_guru= $nama_guru;
$this->pelajaran= $pelajaran;

}

public function get_nama_guru()
	{
		return $this->nama_guru;
	}
{
    public function get_pelajaran()
    {
    	return $this->pelajaran;
	}
}
?>