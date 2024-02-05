<?php

namespace Uasoft\Badaso\Theme\PostfreeTheme\Controllers;

use Exception;
use Illuminate\Http\Request;
use Uasoft\Badaso\Module\Post\Models\Post;
use Uasoft\Badaso\Module\Post\Models\Category;
use Uasoft\Badaso\Theme\PostfreeTheme\Helpers\Configurations;

class HomeController extends Controller
{
    public function index(){
        $category = Category::where('slug', 'postfree')->first();

        $data_json = Post::where('category_id', $category['id'])->get();
        $title = $data_json[0]->title;
        $content = $data_json[0]->content;

        $config = Configurations::index();
        $sitetitle = $config->siteTitle;

        return view('postfree-theme::pages.landing-page', [
            'title' => $title,
            'content' => $content,
            'sitetitle' => $sitetitle,
        ]);
    }
}
