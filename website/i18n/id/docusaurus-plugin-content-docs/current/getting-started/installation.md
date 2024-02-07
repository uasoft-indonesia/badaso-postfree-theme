---
sidebar_position: 1
---

# Installation

1. Anda bisa menginstal tema postfree dengan mengikuti perintah berikut.

    ```
    composer require badaso/postfree-theme
    ```

1. (Pilihan) Jalankan perintah berikut untuk mengatur badaso-core. Jika Anda tidak pernah menjalankannya sebelumnya.

    ```
    php artisan badaso:setup
    ```
1. (Pilihan) Jalankan perintah berikut untuk mengatur badaso-content. Jika Anda tidak pernah menjalankannya sebelumnya.

    ```
    php artisan badaso-content:setup
    ```

1. (Pilihan) Jalankan perintah berikut untuk mengatur badaso-post-module. Jika Anda tidak pernah menjalankannya sebelumnya.

    ```
    php artisan badaso-post:setup
    ```

1. Jalankan perintah berikut untuk mengatur tema

    ```
    php artisan badaso-postfree-theme:setup
    ```

1. Jalankan perintah berikut untuk migrate database.

    ```
    php artisan migrate
    ```

1. (Pilihan) Jalankan perintah berikut untuk generate seeder dari badaso core, dan content module. Jika Anda tidak pernah menjalankannya sebelumnya.

    ```
    php artisan db:seed --class="Database\Seeders\Badaso\BadasoSeeder"

    php artisan db:seed --class="Database\Seeders\Badaso\Content\BadasoContentModuleSeeder"

    php artisan db:seed --class="Database\Seeders\Badaso\Post\BadasoPostModuleSeeder"
    ```

1. Jalankan perintah berikut untuk generate seeder dari Postfree theme.

    ```
    php artisan db:seed --class='Database\Seeders\Badaso\PostfreeTheme\BadasoPostfreeThemeSeeder'
    ```

1. Tambahkan plugins pada MIX_BADASO_PLUGINS untuk .env.

    ```
    MIX_BADASO_PLUGINS=content-module,post-module,postfree-theme
    ```

1. Tambahkan menu plugins  ke MIX_BADASO_MENU anda pada .env.Jika anda memiliki menu lain, tambahkan mereka setelah koma (,).
    ```
    MIX_BADASO_MENU=${MIX_DEFAULT_MENU},content-module,post-module,postfree-theme
    ```

1. Install JS depedency
    ```
    npm install
    ```

1. Bangun JS dependency.
    ```
    npm run watch
    ```

1. Selesai. Anda bisa mengakses tema postfree
    ```
    http://localhost:8000/postfree
    ```

