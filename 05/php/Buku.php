<?php

require_once __DIR__ . '/Bab.php';

class Buku
{
	private string $judulBuku;
	private array $daftarBab;

	public function __construct(string $judulBuku)
	{
		$this->judulBuku = $judulBuku;
		$this->daftarBab = [];
		$this->tambahBab();
	}

	private function tambahBab(): void
	{
		$this->daftarBab[] = new Bab('Pendahuluan');
		$this->daftarBab[] = new Bab('Isi');
		$this->daftarBab[] = new Bab('Penutup');
	}

	public function tampilkanBab(): void
	{
		echo "Buku {$this->judulBuku} memiliki bab:\n";
		foreach ($this->daftarBab as $bab) {
			echo '- ' . $bab->getJudulBab() . "\n";
		}
	}
}
