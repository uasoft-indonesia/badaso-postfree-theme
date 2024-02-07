---
sidebar_position: 1
---

# Installation

1. You can install the postfree theme with the following command.

    ```
    composer require badaso/postfree-theme
    ```

1. (<b>Optional</b>) Run the following command to setup the badaso-core. If you never run it before.

    ```
    php artisan badaso:setup
    ```

1. (<b>Optional</b>) Run the following command to setup the badaso-post-module. If you never run it before.

    ```
    php artisan badaso-post:setup
    ```

1. (<b>Optional</b>) Run the following command to setup the badaso-content. If you never run it before.

    ```
    php artisan badaso-content:setup
    ```

1. Run the following command to setup the theme

    ```
    php artisan badaso-postfree-theme:setup
    ```

1. Run the following command to migrate database.

    ```
    php artisan migrate
    ```

1. (Optional) Run the following command to generate seeder of badaso core, post-module and content module. If you never run it before.

    ```
    php artisan db:seed --class="Database\Seeders\Badaso\BadasoSeeder"

    php artisan db:seed --class="Database\Seeders\Badaso\Content\BadasoContentModuleSeeder"

    php artisan db:seed --class="Database\Seeders\Badaso\Post\BadasoPostModuleSeeder"
    ```

1. Run the command to generate seeder of Postfree theme.

    ```
    php artisan db:seed --class='Database\Seeders\Badaso\PostfreeTheme\BadasoPostfreeThemeSeeder'
    ```

1. Add the plugins to your MIX_BADASO_PLUGINS to .env.

    ```
    MIX_BADASO_PLUGINS=content-module,post-module,postfree-theme
    ```

1. Add the plugins menu to your MIX_BADASO_MENU to .env. If you have another menu, include them using delimiter comma (,).
    ```
    MIX_BADASO_MENU=${MIX_DEFAULT_MENU},content-module,post-module,postfree-theme
    ```

1. Install JS depedency
    ```
   npm install
    ```

1. Build JS dependency.
    ```
    npm run watch
    ```

1. Finished. You can access the postfree theme
    ```
    http://localhost:8000/postfree
    ```

