<?php

require_once __DIR__ . '/Vehicle.php';
require_once __DIR__ . '/Movable.php';
require_once __DIR__ . '/Fuelable.php';

class Boat extends Vehicle implements Movable, Fuelable
{
	public function move(): void
	{
		echo "{$this->name} bergerak di air.\n";
	}

	public function refuel(): void
	{
		echo "{$this->name} mengisi bahan bakar solar khusus kapal.\n";
	}
}
