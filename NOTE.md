CATATAN :
    Saya membuat aplikasi CRUD Laravel ini melihat dari tutorial Youtube (https://www.youtube.com/c/RolloAcademy). Saya mengubah sebagian codingan tersebut, yaitu tampilan field atau tabel, isi data tabel dari Data Warga menjadi Data Pasien, tampilan awal yang seharusnya tidak diberi judul namun saya tambahkan dengan memberi judul "Data Pasien", serta mengubah warna dan tulisan pada tombol opsi.

KENDALA ATAU HAMBATAN :
    Kendala atau hambatan yang saya temui pada saat membuat CRUD Laravel Data Pasien tersebut adalah saat saya edit data terjadi error 'undefined variable $p' itu terjadi dikarenakan value="{{$p->nama}}" pada variabel $p seharusnya menggunakan variabel $pasien yaitu value="{{$pasien->nama}}"

CRUD LARAVEL DATA PASIEN
    1. Buat project atau folder baru
    2. Buka XAMPP, jalankan Apache dan MySQL
    3. Ketik an perintah : http://localhost/phpmyadmin/
    4. Buka Terminal atau CMD
    5. Masuk ke DIR atau Folder tempat project
    6. Jalankan perintah : composer create-project laravel/laravel laravel9_crud
    7. Buka VSCode
    8. Buka Terminal di menu view-> terminal (ctrl+`)
    9. Jalankan perintah : php artisan serve
    10. Buat Route /about pada file routes/web.php
    11. Buat Database di Mysql
    12. Setting .env agar terhubung ke database
    13. Menjalankan migrasi dengan php artisan migrate
    14. Buat migration untuk tabel baru. Jalankan perintah : php artisan serve make:migration create_pasien_table
    15. Tambahkan field di database->migration->create_pasien_table
    16. Jalankan migrasi : php artisan migrate
    17. Buat model. Jalankan perintah : php artisan make:model Pasien 
    18. Sesuaikan struktur Models->Pasien.php
    19. Buat Route /pasien , function index pada file routes/web.php
    20. Buat controller dengan menjalankan perintah : php artisan make:Controller PasienController
    21. Jalankan perintah : php artisan serve
    22. Tambahkan public function index pada file app/Http/Controller/PasienController
    23. Import class pada file routes/web.php -> use App\Http\Controllers\PasienController;
    24. Import class pada file app/Http/Controller/PasienController -> use App\Models\Pasien;
    25. Buat folder pada resources/view dengan nama /pasien
    26. Buat file pada resources/view/pasien dengan nama index.blade.php , create.blade.php , edit.blade.php
    27. Buat tabel sederhana pada file resources/view/pasien/index.blade.php
    28. Buat Route /pasien/create , function create pada file routes/web.php
    29. Tambahkan public function create pada file app/Http/Controller/PasienController
    30. Buat tampilan create pasien dengan cara mengoding pada file resources/view/pasien/create.blade.php
    31. Buat Route /pasien/store , function store dengan method post pada file routes/web.php
    32. Tambahkan public function store pada file app/Http/Controller/PasienController
    33. Beri protected tambahan dengan cara setting di app/Models/Pasien.php
    34. Buat Route /pasien/{id}/edit , function edit dengan method get pada file routes/web.php
    35. Tambahkan public function edit pada file app/Http/Controller/PasienController
    36. Buat tampilan edit data pasien dengan cara mengoding pada file resources/view/pasien/edit.blade.php
    37. Buat Route /pasien/{id} , function update dengan method put pada file routes/web.php
    38. Tambahkan public function update pada file app/Http/Controller/PasienController
    39. Buat tombol delete dengan cara setting di file resources/view/pasien/index.blade.php
    40. Buat Route /pasien/{id} , function destroy dengan method delete pada file routes/web.php
    41. Tambahkan public function destroy pada file app/Http/Controller/PasienController
    42. Jalankan perintah : php artisan serve
    43. Buka chrome dan ketikkan : http://127.0.0.1:8000/pasien
    44. Data berhasil dibuat dan disimpan
