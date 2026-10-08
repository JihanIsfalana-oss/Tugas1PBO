<?php

class Bab
{
	private string $judulBab;

	public function __construct(string $judulBab)
	{
		$this->judulBab = $judulBab;
	}

	public function getJudulBab(): string
	{
		return $this->judulBab;
	}
}
