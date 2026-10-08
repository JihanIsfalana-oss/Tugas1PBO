# **Tugas 06 - Abstract Class dan Interface**

## Biodata

| **Keterangan** | **Isi** |
|---|---|
| Nama | **Mochammad Jihan Isfalana** |
| NIM | **4525210110** |
| Kelas | **A** |
| Mata Kuliah | Pemrograman Berorientasi Objek |
| Dosen Pengampu | **Adi Wahyu Pribadi, S.Si., M.Kom** |

## Deskripsi Tugas

Program ini merupakan contoh penerapan abstract class dan interface dalam pemrograman berorientasi objek.
Class `Vehicle` menjadi parent class untuk berbagai jenis kendaraan, sedangkan interface `Movable` dan `Fuelable` menentukan kemampuan yang dapat dimiliki kendaraan.

Program dibuat dalam dua versi:

- Java: `Vehicle.java`, `Movable.java`, `Fuelable.java`, `Car.java`, `Motor.java`, `Boat.java`, `Building.java`, dan `Main.java`
- PHP: class dan interface yang sama pada folder `php/`

## Konsep yang Digunakan

### Class

`Vehicle` merupakan abstract class yang menyimpan property `name` dan method umum `showInfo()`.
Class `Car`, `Motor`, `Boat`, dan `Building` merupakan subclass dari `Vehicle`.

### Constructor

Constructor `Vehicle` menerima nama kendaraan. Constructor pada setiap subclass meneruskan nama tersebut ke constructor parent.

### Object

Pada file `Main.java` dan `php/Main.php`, dibuat empat object:

```text
Car: Mobil Sport
Boat: Perahu Motor
Motor: Motor Gravel
Building: Gedung Tinggi
```

### Method

Interface `Movable` menetapkan method `move()` yang diimplementasikan oleh `Car`, `Motor`, dan `Boat`.
Interface `Fuelable` menetapkan method `refuel()` untuk kendaraan yang dapat mengisi bahan bakar.

`Car` dan `Boat` mengoverride perilaku `refuel()`, sedangkan `Motor` menggunakan default method `Fuelable`.
`Building` hanya menggunakan method dari `Vehicle` karena tidak mengimplementasikan `Movable` atau `Fuelable`.

Pada PHP, default method interface Java direpresentasikan menggunakan trait `FuelableDefault`.

## Screenshot Hasil Run

### Hasil Run Java

![Hasil run Java](img/runJava.png)

### Hasil Run PHP

![Hasil run PHP](img/runPHP.png)

