# **Tugas 04 - Inheritance dan Polimorfisme**

## Biodata

| **Keterangan** | **Isi** |
|---|---|
| Nama | **Mochammad Jihan Isfalana** |
| NIM | **4525210110** |
| Kelas | **A** |
| Mata Kuliah | Pemrograman Berorientasi Objek |
| Dosen Pengampu | **Adi Wahyu Pribadi, S.Si., M.Kom** |

## Deskripsi Tugas

Program ini merupakan contoh penerapan inheritance dan polimorfisme pada class `Handphone`.
Class `Smartphone` dan `FeaturePhone` mewarisi class `Handphone`, kemudian mengubah perilaku method `nyalakan()`, `matikan()`, dan `telepon()` sesuai jenis handphone.

Program dibuat dalam dua versi:

- Java: `Handphone.java`, `Smartphone.java`, `FeaturePhone.java`, dan `Main.java`
- PHP: `php/Handphone.php`, `php/Smartphone.php`, `php/FeaturePhone.php`, dan `php/Main.php`

## Konsep yang Digunakan

### Class

Class `Handphone` menjadi parent class yang memiliki property `merk` dan `model`, serta method umum untuk menyalakan, mematikan, dan melakukan panggilan.
Class `Smartphone` dan `FeaturePhone` menjadi child class dari `Handphone`.

### Constructor

Constructor `Handphone` menerima parameter `merk` dan `model`. Constructor pada class turunan meneruskan nilai tersebut ke constructor parent.

### Object

Pada file `Main.java` dan `php/Main.php`, dibuat dua object dalam satu daftar:

```text
Smartphone Samsung Galaxy S21
FeaturePhone Nokia 3310
```

Daftar tersebut diproses menggunakan loop sehingga method yang dijalankan menyesuaikan jenis object.

### Method

Class `Smartphone` mengoverride method `nyalakan()`, `matikan()`, dan `telepon()` untuk menampilkan perilaku smartphone.
Class `FeaturePhone` juga mengoverride ketiga method tersebut untuk menampilkan perilaku feature phone.

Selain itu, `Smartphone` memiliki method `aksesInternet()`, sedangkan `FeaturePhone` memiliki method `mainGameSnake()`. Kedua method khusus tersebut dipanggil berdasarkan hasil pengecekan tipe object.

## Screenshot Hasil Run

### Hasil Run Java

![Hasil run Java](img/runJava.png)

### Hasil Run PHP

![Hasil run PHP](img/runPHP.png)

