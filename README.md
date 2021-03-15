Aplikasi Sistem Pakar Backward dan Forward Chaining
- Aplikasi Diagnosa Kerusakan Handphone -

Sistem Pakar Diagnosa Kerusakan Handphone menggunakan forward chaining

Pengertian
Forward dan Backward chaining merupakan dua metode teknik penalaran yang digunakan dalam pembuatan sistem pakar.
Forward Chaining adalah pelacakan secara maju atau ke depan yang memulai dari sekumpulan fakta-fakta dengan mencari kaidah yang cocok dengan hipotesa atau perkiraan
yang dari situ menuju suatu kesimpulan.
Backward Chaining adalah pelacakan secara mundur atau ke belakang yang memulai penalaran dari sebuah kesimpulan atau tujuan akhir, menuju ke pencarian sekumpulan
hipotesa-hipotesa menuju ke fakta-fakta yang mendukung sekumpulan hipotesa atau perkiraan yang didapat tersebut.

Halaman diagnosa merupakan halaman yang digunakan untuk melakukan konsultasi dalam mendeteksi hama yang sedang menyerang tanaman padi. Pada halaman ini, pengguna diberikan gejala-gejala fakta yang sedang dialami. Misalnya ditemukan tiga buah gejala fakta yang dialami oleh petani padi, yaitu: (1) Pertumbuhan bibit terhambat; (2) Daun tergulung dan berubah warna menjadi kuning sampai kemerah-merahan; (3) Beberapa gabah tidak berisi, maka sesuai knowledge base dapat disimpulkan hama padi yang sedang menyerang adalah Trip Padi (Trips oryzae). Hasil tersebut dapat diperoleh dengan menggunakan metode forward chaining yaitu melalui proses perunutan, jika digambarkan maka akan melalui tiga proses tahapan data, aturan dan kesimpulan. GA1 : Pertumbuhan bibit terhambat GD2 : Daun tergulung dan berubah warna menjadi kuning sampai kemerah-merahan GU1 : Beberapa gabah tidak berisi H2 : Trip Padi (Trips oryzae) JIKA Padi mengalami Pertumbuhan bibit terhambat, Daun tergulung dan berubah warna menjadi kuning sampai kemerah-merahan dan Beberapa gabah tidak berisi. MAKA Padi terserang hama Trip Padi (Trips oryzae)

Data fakta yang didapatkan dilapangan meliputi GA1, GD2 dan GU1 menggunakan kaidah JIKA A = GA1 DAN B = GD2 DAN C = GU1 MAKA D = H2 maka di simpulkan berupa H2. Semua tahapan proses yang dilakukan maka akan menghasilkan sebuah kesimpulan akhir, dalam SIPADI selain menampilkan hasil kesimpulan juga disampaikan juga deskripsi tentang hama tersebut dan bagaimana cara hama tersebut merusak tanaman serta bagaimana cara pengendalian, hal ini dimaksudkan agar segera mungkin petani melakukan penanganan agar hama yang merambah tidak segera merusak tanaman padi lain dan menjadikan petani gagal panen. Berikut hasil tampilan akhir sistem ketika dilakukan diagnose dengan gejala-gejala yang dialami.

Metode forward chaining dapat digunakan penyuluh dalam membantu proses diagnosa hama pada tanaman padi dengan cara memasukkan gejala-gejala yang terjadi pada tanaman padi serta mampu memberikan informasi pengetahuan tentang hama tersebut.
