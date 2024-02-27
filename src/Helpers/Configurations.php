<?php

namespace Uasoft\Badaso\Theme\PostfreeTheme\Helpers;

use Uasoft\Badaso\Models\Configuration;

class Configurations
{
    public static function index()
    {
        $configurations = Configuration::where('group', 'postfreeTheme')->get();
        foreach ($configurations as $key => $config) {
            if ($config->key == 'postfreeThemeSiteTitle') {
                $site_title = $config->value;
            }

        }

        $title = (object)[
            "siteTitle" => $site_title
        ];
        return $title;
    }
}
