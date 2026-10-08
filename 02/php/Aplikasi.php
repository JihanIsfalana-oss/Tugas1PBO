<?php

require_once __DIR__ . '/Mahasiswa.php';

$soja = new Mahasiswa();
$soja->tampilkanInfo();

// Memberikan nilai menggunakan setter, lalu membacanya menggunakan getter.
$soja->setNama('Soja Purnamasari');
echo "Nama : " . $soja->getNama() . "\n";

$soja->setNim('4523210104');
echo "NIM : " . $soja->getNim() . "\n";

$soja->setUmur(15);
echo "Umur : " . $soja->getUmur() . "\n";

// Constructor dengan seluruh parameter.
$nenden = new Mahasiswa('Nenden Nuraini', '4523210144', 17);
$nenden->tampilkanInfo();

