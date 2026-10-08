<?php

// Class Mahasiswa dengan constructor, setter, dan getter
class Mahasiswa
{
	private string $nama;
	private string $nim;
	private int $umur;

	// Parameter opsional digunakan untuk meniru constructor Java yang overloaded.
	public function __construct(
		string $nama = 'Belum Diisi',
		string $nim = 'Belum Diisi',
		int $umur = 0
	) {
		$this->nama = $nama;
		$this->nim = $nim;
		$this->umur = $umur;
	}

	public function getNama(): string
	{
		return $this->nama;
	}

	public function setNama(string $nama): void
	{
		$this->nama = $nama;
	}

	public function getNim(): string
	{
		return $this->nim;
	}

	public function setNim(string $nim): void
	{
		$this->nim = $nim;
	}

	public function getUmur(): int
	{
		return $this->umur;
	}

	public function setUmur(int $umur): void
	{
		$this->umur = $umur;
	}

	public function tampilkanInfo(): void
	{
		echo "Nama: {$this->nama}\n";
		echo "NIM: {$this->nim}\n";
		echo "Umur: {$this->umur}\n";
	}
}

