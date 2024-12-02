<?php


use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
});


// Route to handle slugs dynamically
Route::get('/{slug}', function ($slug) {
    
    $menuService = app(App\Services\MenuService::class);

    $menu = $menuService->getMenuBySlug($slug);
    if (!$menu) {
        abort(404);
    }

    $viewName = $menuService->getViewBySlug($slug);
    $content = $menuService->getContentByPageId($menu->id);

    if (!$content) {
        abort(404);
    }

    if (!empty($content) && isset($content[0]->id)) {
        $galleryItem = $menuService->getGalleryRepeaterItemsByContentId($content[0]->id);
    } else {
        $galleryItem = []; 
    }
    

    return view($viewName, compact('menu','content','galleryItem'));
    
})->name('menu.show');


