<?php

require_once __DIR__ . '/Vehicle.php';
require_once __DIR__ . '/Movable.php';
require_once __DIR__ . '/Fuelable.php';

class Car extends Vehicle implements Movable, Fuelable
{
	public function move(): void
	{
		echo "{$this->name} bergerak di jalan.\n";
	}

	public function refuel(): void
	{
		echo "{$this->name}Isi bahan bakar mobil\n";
	}
}
