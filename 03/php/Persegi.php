<?php

require_once __DIR__ . '/BangunDatar.php';

class Persegi extends BangunDatar
{
	private int $sisi;

	public function __construct(int $sisi)
	{
		$this->sisi = $sisi;
	}

	public function luas(): float
	{
		return (float) ($this->sisi * $this->sisi);
	}

	public function keliling(): float
	{
		return (float) ($this->sisi * 4);
	}
}
