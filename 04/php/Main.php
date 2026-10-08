<?php

require_once __DIR__ . '/Smartphone.php';
require_once __DIR__ . '/FeaturePhone.php';

$daftarHandphone = [
	new Smartphone('Samsung', 'Galaxy S21'),
	new FeaturePhone('Nokia', '3310'),
];

// Memanggil method secara polimorfik melalui parent type.
foreach ($daftarHandphone as $hp) {
	$hp->nyalakan();
	$hp->telepon('08123456789');
	$hp->matikan();
	echo "\n";
}

// Memanggil method khusus berdasarkan tipe object.
foreach ($daftarHandphone as $hp) {
	if ($hp instanceof Smartphone) {
		$hp->aksesInternet();
	} elseif ($hp instanceof FeaturePhone) {
		$hp->mainGameSnake();
	}
}
