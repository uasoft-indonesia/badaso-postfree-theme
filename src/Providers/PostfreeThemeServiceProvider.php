<?php

namespace Uasoft\Badaso\Theme\PostfreeTheme\Providers;

use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Uasoft\Badaso\Theme\PostfreeTheme\Commands\PostfreeThemeSetup;
use Uasoft\Badaso\Theme\PostfreeTheme\Facades\PostfreeTheme as FacadesPostfreeTheme;
use Uasoft\Badaso\Theme\PostfreeTheme\PostfreeTheme;

class PostfreeThemeServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $loader = AliasLoader::getInstance();
        $loader->alias('PostfreeTheme', FacadesPostfreeTheme::class);

        $this->app->singleton('badaso-postfree-theme', function () {
            return new PostfreeTheme();
        });

        $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'badaso-postfree');
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'postfree-theme');
        $this->loadRoutesFrom(__DIR__.'/../Routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../Routes/api.php');


        $this->publishes([
            __DIR__.'/../Seeder'                       => database_path('seeders/Badaso/PostfreeTheme'),
            __DIR__.'/../Config/badaso-postfree-theme.php' => config_path('badaso-postfree-theme.php'),
            __DIR__.'/../Images/postfree-img/' => storage_path('app/public/photos/1'),
            __DIR__.'/../resources/customization/'     => resource_path('js/badaso/theme/postfree-theme/'),
            __DIR__ . '/../Tailwind/'                      => base_path(),
        ], 'BadasoPostfreeTheme');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/uasoft-indonesia/postfree-theme'),
        ], 'BadasoPostfreeThemeViews');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerConsoleCommands();
    }

    /**
     * Register the commands accessible from the Console.
     */
    private function registerConsoleCommands()
    {
        $this->commands(PostfreeThemeSetup::class);
    }
}
