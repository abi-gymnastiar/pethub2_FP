# FP-ALPRO
- Abiansyah Adzani Gymnastiar
- Ariel Pratama Menlolo

## Features
- Register dan login account
- Melihat profile page
- Melihat hewan-hewan yang dapat di adopsi
- Menambahkan hewan kedalam Adoption Plan user
- Melihat list hewan-hewan Adoption Plan user
- Melihat Pethub Centers yang ada
- Menambahkan hewan ke website (admin)
- Update detail hewan (admin)
- Menghapus hewan (admin)
- Menambah center baru ke website (admin)
- Update informasi center (admin)
- Delete center (admin)

## Tampilan dan fitur website:
- home ('/')
    ![home](https://user-images.githubusercontent.com/95100144/228527792-6a1a50d0-bfbf-4936-8e2d-cdec8eb3262c.png)

- registrasi dan login
    ![registration](https://user-images.githubusercontent.com/95100144/228528146-de8d0586-6ac6-4880-9045-0e3e5f757471.png)
    ![login](https://user-images.githubusercontent.com/95100144/228528162-afde4801-1f09-4a3f-9e54-f2039c2a05c8.png)

- promote user menjadi admin
    dilakukan dengan cara mengganti attribute is_admin pada user menjadi 1 (true) di phpmyadmin
    ![admin-change](https://user-images.githubusercontent.com/95100144/228528462-19c1b531-8d8e-4679-a4d8-d218a1f5a50c.png)
    
- list hewan ('/animals')
    ![animals-admin](https://user-images.githubusercontent.com/95100144/228529200-fbd379e0-40e8-47b5-9dd8-7044f9ed8ae7.png)
    tombol "+Add Animals" hanya bisa dilihat dan diakses jika user merupakan admin
    
    - storage link
        sebelum dapat menampilkan gambar hewan, perlu dilakukan storage link terlebih dahulu. Cukup lakukan ```php artisan storage:link``` di terminal
    
    - menambah hewan
        admin dapat melakukan penambahan hewan dengan tombol "+Add Animals"
        ![animals-create](https://user-images.githubusercontent.com/95100144/228529886-8c13e664-5acc-4395-9da8-44804de2604c.png)
        ![animals-after-create](https://user-images.githubusercontent.com/95100144/228529921-a825adfd-0eb8-4a59-95d1-044814b999f2.png)
    
    - melihat detail hewan
        dapat diakses dengan meng-click gambar hewan
        ![animal-show-admin](https://user-images.githubusercontent.com/95100144/228530062-f093a69d-25e9-4457-9406-7f667b48c276.png)
    
    - edit detail hewan
        dapat diakses dengan meng-click tombol edit pada detail hewan (hanya dapat diakses oleh admin)
        ![animals-edit](https://user-images.githubusercontent.com/95100144/228530288-94b36238-25ed-4c99-939c-3427d0dc0e23.png)
    - delete hewan
        dapat diakses dengan meng-click tombol delete pada detail hewan (hanya dapat diakses oleh admin)
    - Menambah hewan kedalam list adopsi
        dapat diakses dengan meng-click tombol adopt me pada detail hewan. list hewan yang ditambahkan dapat dilihat di profile user

- profil user ('/profile')
    menampilkan nama user dan juga list adoption plan yang sudah ditambahkan
    ![profile](https://user-images.githubusercontent.com/95100144/228531032-8e427ac9-c189-471f-96e4-0959d97f9b3b.png)

## Authentication
- Peojek ini menggunakan sistem middleware dari laravel. Pada website ini, kita dapat membuat user baru dan melimit apa saja yang bisa dilakukan oleh guest, user, dan admin. Pengimplementasiannya dapat dilihat sebagai berikut
    ```
    Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile');
    ```
    ```
    Route::get('/animals/create', [AnimalsController::class, 'create'])->middleware('App\Http\Middleware\Admin');
    ```
    dengan menggunakan middleware('auth') kita dapat membuat route hanya bisa diakses jika sudah login, sedangkan middleware('App\Http\Middleware\Admin') digunakan untuk akses admin
    
- Akses admin sendiri diimplementasikan dengan menambahkan Admin.php dalam app/Http/Middleware/ yang berisi
    ```
    class Admin
    {
        /**
         * Handle an incoming request.
         *
         * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
         */
        public function handle(Request $request, Closure $next): Response
        {
            if(!auth()->check() || !auth()->user()->is_admin)
            {
                abort(403);
            }
            return $next($request);
        }
    }
    ```
    dan menambahkan ``` 'auth' => \App\Http\Middleware\Authenticate::class ``` pada kernel.php. Dengan begitu, seluruh user yang memiliki value 'true' dalam attribute 'is_admin' merupakan Admin
    
## CRUD Animal
Projek ini memiliki 2 tabel database dengan keempat fitur CRUD-nya. salah satunya adalah tabel animals, dimana Read dapat diakses guest, user dan admin sedangkan Create, Update, dan Delete hanya bisa diakses oleh admin.

### References and special thanks:
- Pelatihan dari admin alpro beserta link repositori yang diberikan
- Web Programming UNPAS (youtube)
- https://www.youtube.com/watch?v=6ubzdIeb4XI&list=LL&index=1&t=344s (youtube)
- stack overflow
