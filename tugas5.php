<?php
class hewan
{
public $suara;
public $nama_hewan;
public $kaki;
public $tangan;

public function __construct($suara,$nama_hewan, $kaki, $tangan,);
{
$this->suara= $suara;
$this->nama_hewan = $nama_hewan;
$this->kaki= $kaki;
$this->tangan = $tangan;

}

public function get_suara()
	{
		return $this->suara;
	}
{
    public function get_nama_hewan()
    {
    	return $this->nama_hewan;
    }
	public function get_kaki()
	{
		return $this->kaki;
	}
	public function get_tangan()
	{
		return $this->tangan;
	}
}
?>