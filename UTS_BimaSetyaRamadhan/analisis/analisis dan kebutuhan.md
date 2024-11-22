# **Analisis Kebutuhan Sistem Pendataan Guru**

---

## **1. Kebutuhan Fungsional**
Kebutuhan yang berkaitan langsung dengan fungsi sistem yang harus dikembangkan:

1. **Pengelolaan Data Guru**:
   - Admin dapat menambahkan data guru baru.
   - Admin dapat memperbarui data guru yang sudah ada.
   - Sistem dapat memberikan notifikasi kepada guru jika terdapat perubahan pada data mereka.

2. **Pengelolaan Data Kelas**:
   - Admin dapat membuat data kelas baru.
   - Admin dapat memperbarui data kelas yang sudah ada.

---

## **2. Kebutuhan Non-Fungsional**
Kebutuhan yang berkaitan dengan kualitas dan performa sistem:

1. **Keamanan**:
   - Sistem harus memiliki mekanisme autentikasi untuk memastikan hanya admin yang dapat mengakses dan memodifikasi data.
   - Data guru dan data kelas harus dilindungi dari akses tidak sah.

2. **Ketersediaan**:
   - Sistem harus tersedia 99% sepanjang waktu agar admin dapat mengakses kapan saja.

3. **Skalabilitas**:
   - Sistem harus mampu menangani pertambahan data guru dan kelas seiring dengan pertumbuhan institusi.

4. **Kinerja**:
   - Waktu respons sistem untuk menyimpan atau memperbarui data tidak boleh melebihi 2 detik.

5. **Audit Trail**:
   - Sistem harus mencatat semua aktivitas admin seperti penambahan, pembaruan, dan penghapusan data.

---

## **3. Kebutuhan Data**
Data yang harus dikelola oleh sistem:

1. **Data Guru**:
   - Nama lengkap.
   - Mengajar di kelas mana yang diajarkan.

2. **Data Kelas**:
   - Nama kelas.
   - Tingkat (misalnya: Kelas 10, Kelas 11).
---

## **4. Kebutuhan Perangkat Lunak**
Perangkat lunak yang diperlukan untuk implementasi sistem:

1. **Backend**:
   - Sistem basis data untuk penyimpanan data (contoh: MySQL, PostgreSQL).
   - API untuk komunikasi dengan antarmuka pengguna.

2. **Frontend**:
   - Antarmuka berbasis web yang user-friendly untuk admin.

3. **Notifikasi**:
   - Sistem notifikasi (email atau push notification) untuk memberi tahu guru tentang pembaruan data.

---

## **5. Kebutuhan Perangkat Keras**
Perangkat keras yang diperlukan untuk mendukung sistem:

1. **Server**:
   - Spesifikasi minimum: CPU Quad-Core, RAM 8 GB, penyimpanan 500 GB.
   - Dapat berupa server lokal atau berbasis *cloud*.

2. **Client**:
   - Perangkat admin untuk mengakses sistem, seperti komputer atau laptop dengan koneksi internet.

---

## **6. Kebutuhan Integrasi**
1. Sistem harus dapat diintegrasikan dengan:
   - Sistem absensi guru (jika ada).
   - Sistem manajemen sekolah yang lebih luas untuk data sinkronisasi.

---

## **7. Kebutuhan Pengguna**
1. **Admin**:
   - Dapat mengakses semua modul dan melakukan pengelolaan data.
2. **Guru**:
   - Menerima notifikasi tentang pembaruan data mereka.
