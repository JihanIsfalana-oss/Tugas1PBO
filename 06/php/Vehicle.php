<?php

abstract class Vehicle
{
	protected string $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function showInfo(): void
	{
		echo "Kendaraan: {$this->name}\n";
	}
}
