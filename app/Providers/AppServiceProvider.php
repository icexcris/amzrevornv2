<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Category;
use App\Models\NewsCategories;
use App\Models\VideoCategory;
use App\Models\Video;
use App\Models\Posts;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('photo_cats', Category::get());
        view()->share('news_cats', NewsCategories::get());
        view()->share('videos_cats', VideoCategory::get());
        view()->share('most_recent_videos', Video::orderBy('created_at', 'DESC')->limit(10)->get());
        view()->share('most_recent_photos', Posts::where('type', '=', 1)->orderBy('created_at', 'DESC')->limit(10)->get());
        view()->share('most_recent_news', Posts::where('type', '=', 2)->orderBy('created_at', 'DESC')->limit(10)->get());
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
