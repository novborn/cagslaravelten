<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Services\MenuService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */

    protected $menuService;

    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        
        // Instantiate the MenuService
        $this->menuService = new MenuService();

        // Fetch the menu tree using the service
        $menuTree = $this->menuService->getMenuTree();

        // Share the menu tree globally across all views
        View::share('menuTree', $menuTree);


    }
}
