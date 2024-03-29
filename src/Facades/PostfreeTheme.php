<?php

namespace Uasoft\Badaso\Theme\PostfreeTheme\Facades;

use Illuminate\Support\Facades\Facade;

class PostfreeTheme extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'badaso-postfree-theme';
    }
}
