<?php

require_once __DIR__ . '/Handphone.php';

class Smartphone extends Handphone
{
	public function nyalakan(): void
	{
		echo "Smartphone {$this->merk} {$this->model} sedang booting.\n";
	}

	public function matikan(): void
	{
		echo "Smartphone {$this->merk} {$this->model} sedang shutdown.\n";
	}

	public function telepon(string $nomor): void
	{
		echo "Melakukan panggilan video ke nomor {$nomor}\n";
	}

	public function aksesInternet(): void
	{
		echo "Mengakses internet melalui Smartphone.\n";
	}
}
