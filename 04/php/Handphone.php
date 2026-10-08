<?php

class Handphone
{
	protected string $merk;
	protected string $model;

	public function __construct(string $merk, string $model)
	{
		$this->merk = $merk;
		$this->model = $model;
	}

	public function nyalakan(): void
	{
		echo "Handphone dinyalakan.\n";
	}

	public function matikan(): void
	{
		echo "Handphone dimatikan.\n";
	}

	public function telepon(string $nomor): void
	{
		echo "Memanggil nomor {$nomor}\n";
	}
}
