# Solution for Product

## 1. Definisi Nama Produk
- Nama produk menggunakan tipe data `string`.
- Menyimpan nama produk seperti "Adidas", "Nike", dll.
- Panjang maksimal string diatur hingga 255 karakter.

## 2. Harga Produk
- Harga produk menggunakan tipe data `integer`.
- Menyimpan harga produk dalam bentuk angka bulat seperti 1000, 999, atau 500.

## 3. Kategori Produk
- Setiap produk memiliki kategori yang didefinisikan menggunakan tipe data `enum`.
- Nilai kategori terbatas pada:
  - "sepatu"
  - "baju"
  - "celana"

## 4. Pengelompokan Kategori dengan Enum
- Kategori produk menggunakan opsi `enum` di database.
- Enum memastikan kategori hanya bisa berisi nilai tertentu.

## 5. Relasi dan Integritas Data
- Untuk saat ini, penggunaan `enum` pada kategori sudah cukup efisien.
- Jika diperlukan pengelolaan kategori yang lebih kompleks di masa depan, kategori dapat dipindahkan ke tabel terpisah.

---

## Analisis Proses Implementasi

### a. Tabel Database
Tabel **products** akan memiliki kolom:
- `id` (Primary Key): Pengenal unik untuk setiap produk.
- `name` (`string`): Menyimpan nama produk.
- `price` (`integer`): Menyimpan harga produk.
- `category` (`enum`): Menyimpan kategori produk dengan nilai tetap seperti "sepatu", "baju", "celana".

### b. Seeder Data
Seeder akan dibuat untuk mengisi tabel **products** dengan data awal:
1. Adidas - 1000 - Sepatu.
2. Nike - 999 - Sepatu.
3. Levis - 500 - Celana.
4. Uniqlo - 100 - Baju.

---

