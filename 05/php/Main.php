<?php

require_once __DIR__ . '/Dokter.php';
require_once __DIR__ . '/Pasien.php';
require_once __DIR__ . '/Pemain.php';
require_once __DIR__ . '/Tim.php';
require_once __DIR__ . '/Buku.php';

// Asosiasi: Dokter menggunakan object Pasien yang sudah dibuat di luar.
$dokter = new Dokter('Dr. Andi');
$pasien = new Pasien('Budi');
$dokter->merawat($pasien);

// Agregasi: Tim menerima daftar Pemain yang dibuat di luar Tim.
$pemain1 = new Pemain('Eko');
$pemain2 = new Pemain('Dina');
$tim = new Tim('Garuda', [$pemain1, $pemain2]);
$tim->tampilkanPemain();

// Komposisi: Buku membuat object Bab di dalam constructor-nya.
$buku = new Buku('Belajar Java');
$buku->tampilkanBab();
$buku = null;
