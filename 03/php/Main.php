<?php

require_once __DIR__ . '/MahasiswaInternational.php';

$mhsInt1 = new MahasiswaInternational();
$mhsInt1->setNama('Paolo Dicanio');
$mhsInt1->setNim('INT12345');
$mhsInt1->setUmur(21);
$mhsInt1->setNegaraAsal('Italy');
$mhsInt1->tampilkanInfo();

echo "\n";

$mhsInt2 = new MahasiswaInternational('Sarah', 'INT67890', 'Australia');
$mhsInt2->setUmur(22);
$mhsInt2->tampilkanInfo();

echo "\n";

$mhsInt3 = new MahasiswaInternational('David', 'INT54321', 23, 'UK');
$mhsInt3->tampilkanInfo();
