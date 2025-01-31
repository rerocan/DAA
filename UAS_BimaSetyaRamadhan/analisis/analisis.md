# Analisis Sistem Manajemen Pameran Seni Berbasis Laravel, Docker, dan MySQL Dengan Metode Greedy

---

## 1. Latar Belakang

Pameran seni merupakan wadah bagi seniman untuk memamerkan karya mereka dan berinteraksi dengan audiens. Namun, manajemen pameran seni sering menghadapi kendala seperti:

- Kesulitan dalam mengelola pendaftaran seniman dan karya seni.
- Kurangnya sistem untuk mengatur jadwal dan lokasi pameran.
- Tidak adanya sistem evaluasi untuk menentukan karya seni yang layak dipamerkan.
- Manajemen keuangan dan tiket yang masih dilakukan secara manual.
- Kurangnya pemanfaatan teknologi dalam promosi dan manajemen pameran.

Oleh karena itu, diperlukan sistem manajemen berbasis teknologi untuk meningkatkan efisiensi pengelolaan pameran seni.

---

## 2. Identifikasi Masalah

1. Tidak adanya sistem terpusat untuk mengelola data seniman dan karya seni.
2. Sulitnya mengatur jadwal dan lokasi pameran secara optimal.
3. Kurangnya transparansi dalam pelaporan keuangan dan penjualan tiket.
4. Belum adanya sistem seleksi karya seni yang efisien.
5. Kurangnya sistem promosi digital untuk meningkatkan jumlah pengunjung.

---

## 3. Rumusan Masalah

1. Bagaimana membangun sistem pendaftaran seniman dan karya seni yang efisien?
2. Bagaimana merancang dashboard untuk mengelola data pameran, jadwal, dan keuangan?
3. Bagaimana mengimplementasikan fitur seleksi karya seni menggunakan metode greedy?
4. Bagaimana menyusun laporan keuangan yang transparan untuk manajemen pameran?
5. Bagaimana merancang sistem promosi berbasis digital untuk menarik lebih banyak pengunjung?
6. Bagaimana mengelola sistem penjualan tiket pameran secara daring?

---

## 4. Tujuan Penelitian

1. Membangun sistem pendaftaran seniman dan karya seni yang terstruktur.
2. Merancang dashboard untuk pengelolaan pameran, jadwal, dan keuangan.
3. Mengembangkan fitur seleksi karya seni berbasis metode greedy.
4. Membuat laporan keuangan otomatis yang transparan dan mudah diakses.
5. Merancang sistem promosi berbasis digital dan media sosial.
6. Mengimplementasikan sistem penjualan tiket daring yang efisien dan terintegrasi.

---

## 5. Metode Analisis (Greedy Algorithm)

### 5.1. Konsep Metode Greedy

Metode greedy digunakan untuk melakukan seleksi karya seni yang layak dipamerkan berdasarkan nilai estetika dan popularitasnya. Pendekatan ini memastikan bahwa setiap langkah seleksi selalu memilih karya dengan nilai tertinggi secara lokal tanpa mempertimbangkan solusi global.

### 5.2. Implementasi Algoritma Greedy

1. **Definisi Masalah:**

   - Diberikan sejumlah karya seni dengan skor estetika dan popularitas.
   - Kapasitas ruang pameran terbatas.
   - Pilih karya seni dengan nilai tertinggi hingga kapasitas terpenuhi.
2. **Algoritma:**

   - Urutkan karya seni berdasarkan skor tertinggi.
   - Tambahkan karya seni ke daftar pameran selama masih ada ruang.
   - Hentikan proses jika kapasitas ruang pameran telah terpenuhi.
3. **Analisis Greedy:**

   - **Keuntungan:** Algoritma ini cepat dan efisien dalam memilih karya seni dengan nilai tinggi.
   - **Kelemahan:** Tidak selalu memberikan solusi optimal jika terdapat kombinasi karya yang lebih baik secara keseluruhan.
   - **Alternatif Metode:** Pendekatan dynamic programming atau branch and bound dapat memberikan solusi optimal dengan kompleksitas lebih tinggi.

---

## 6. Perancangan Sistem

### 6.1. Use Case Diagram

preview ada di file preview usecase.png

### 6.2. Flowchart Sistem

preview ada di file preview flowchart.png

### 6.3. ERD(Entity Relation Diagram)

preview ada di file ERD.jpg

## 8. Implementasi Fitur

### 8.1. Pendaftaran Seniman

```sql
CREATE TABLE Seniman (
    ID_Seniman INT PRIMARY KEY AUTO_INCREMENT,
    Nama VARCHAR(100),
    Kontak VARCHAR(20)
);
```

### 8.2. Seleksi Karya Seni (Metode Greedy)

```sql
INSERT INTO Pameran (ID_KaryaSeni, Tanggal_Pameran, Lokasi)
SELECT ID_KaryaSeni, '2025-06-01', 'Galeri Seni Modern'
FROM KaryaSeni
ORDER BY Skor DESC
LIMIT 10;

```

### 8.3. Manajemen Tiket Pameran

```sql
CREATE TABLE Tiket (
    ID_Tiket INT PRIMARY KEY AUTO_INCREMENT,
    ID_Pameran INT,
    Harga FLOAT,
    Status ENUM('Tersedia', 'Terjual'),
    FOREIGN KEY (ID_Pameran) REFERENCES Pameran(ID_Pameran)
);
```

```php
// Proses pembelian tiket
function beliTiket($id_pameran) {
    $tiket = Tiket::where('ID_Pameran', $id_pameran)->where('Status', 'Tersedia')->first();
    if ($tiket) {
        $tiket->Status = 'Terjual';
        $tiket->save();
        return "Tiket berhasil dibeli!";
    } else {
        return "Tiket habis.";
    }
}
```

Dengan fitur ini, sistem dapat mengelola penjualan tiket secara daring dengan status ketersediaan yang terupdate secara otomatis.
