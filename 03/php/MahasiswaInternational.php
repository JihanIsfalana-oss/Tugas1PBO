<?php

require_once __DIR__ . '/Mahasiswa.php';

class MahasiswaInternational extends Mahasiswa
{
	private string $negaraAsal;

	public function __construct(
		string $nama = 'Belum Diisi',
		string $nim = 'Belum Diisi',
		$umurAtauNegara = 0,
		?string $negaraAsal = null
	) {
		if (is_string($umurAtauNegara)) {
			parent::__construct($nama, $nim);
			$this->negaraAsal = $umurAtauNegara;
			return;
		}

		parent::__construct($nama, $nim, $umurAtauNegara);
		$this->negaraAsal = $negaraAsal ?? 'Belum Diisi';
	}

	public function getNegaraAsal(): string
	{
		return $this->negaraAsal;
	}

	public function setNegaraAsal(string $negaraAsal): void
	{
		$this->negaraAsal = $negaraAsal;
	}

	public function tampilkanInfo(): void
	{
		parent::tampilkanInfo();
		echo "Negara Asal: {$this->negaraAsal}\n";
	}
}
