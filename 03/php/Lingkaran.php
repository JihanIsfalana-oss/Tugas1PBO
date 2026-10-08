<?php

require_once __DIR__ . '/BangunDatar.php';

class Lingkaran extends BangunDatar
{
	private int $r;

	public function __construct(int $r)
	{
		$this->r = $r;
	}

	public function luas(): float
	{
		return (float) (M_PI * $this->r * $this->r);
	}

	public function keliling(): float
	{
		return (float) (2 * M_PI * $this->r);
	}
}
