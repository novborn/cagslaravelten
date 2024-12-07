<?php


use Illuminate\Support\Facades\Route;
use App\Admin\Controllers\ContentController;



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



Route::get('/', function () {
    $menuService = app(App\Services\MenuService::class);

    $homePageId = 18;
    $content = $menuService->getContentByPageId($homePageId); 
    $gallerySliderImages = $menuService->getGallerySliderImagesByContentId($homePageId);

    if ($content->isEmpty()) {
        $content = [];
    }

    if ($gallerySliderImages->isEmpty()) {
        $gallerySliderImages = [];
    }

    if ($content->isEmpty()) {
        abort(404, 'No content found');
    }

    $view = $menuService->getViewBySlug('home'); // Should point to 'frontend.home'

    return view($view, compact('content', 'gallerySliderImages'));
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

    if (!empty($content) || isset($content[0]->id)) {
        //echo "Content_id_".$content[0]->id;
        $galleryItems = $menuService->getGalleryRepeaterItemsByContentId($content[0]->id);
        $gallerySliderImages = $menuService->getGallerySliderImagesByContentId($content[0]->id);

    } else {
        $galleryItems = array();
        $gallerySliderImages = array();
 
    }
    
    return view($viewName, compact('menu','content','galleryItems','gallerySliderImages'));
    
})->name('menu.show');



//Route::get('admin/contents/{content}/edit', [ContentController::class, 'form']);
