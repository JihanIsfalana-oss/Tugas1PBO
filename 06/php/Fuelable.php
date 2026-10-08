<?php

interface Fuelable
{
	public function refuel(): void;
}

// Padanan default method refuel() pada interface Fuelable di Java.
trait FuelableDefault
{
	public function refuel(): void
	{
		echo "Mengisi bahan bakar umum.\n";
	}
}
