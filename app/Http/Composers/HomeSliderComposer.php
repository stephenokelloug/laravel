<?php
namespace App\Http\Composers;

use Illuminate\View\View;

use Web\Services\MenuService;

use Delgont\Cms\Repository\Post\PostRepository;


class HomeSliderComposer
{
    public function compose(View $view)
    {
        $view->with([
            'slides' => app(PostRepository::class)->ofCategory('home slide', 6)
        ]);
    }
}