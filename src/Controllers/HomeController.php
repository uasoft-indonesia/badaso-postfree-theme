<?php

namespace Uasoft\Badaso\Theme\PostfreeTheme\Controllers;

use Exception;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('postfree-theme::layout.index');
    }
}
