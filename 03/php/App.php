<?php

require_once __DIR__ . '/Lingkaran.php';
require_once __DIR__ . '/Persegi.php';
require_once __DIR__ . '/Segitiga.php';

$bd = new BangunDatar();
$bd->luas();
$bd->keliling();

$lk = new Lingkaran(15);
echo "Luas lingkaran: " . $lk->luas() . "\n";
echo "keliling lingkaran: " . $lk->keliling() . "\n";

$pj = new Persegi(10);
echo "Luas Bujur Sangkar: " . $pj->luas() . "\n";
echo "keliling Bujur Sangkar: " . $pj->keliling() . "\n";

$sg = new Segitiga(10, 8);
echo "Luas Segitiga: " . $sg->luas() . "\n";
$sg->keliling();
