<?php

/**
 * Class iPhone
 */
class iPhone
{
	// Properties
	public string $color;
	public string $storage;

	// Constructor
	public function __construct(string $color, string $storage)
	{
		$this->color = $color;
		$this->storage = $storage;
	}

	// Methods
	public function getColor(): string
	{
		return $this->color;
	}

	public function getStorage(): string
	{
		return $this->storage;
	}
}

