<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Content;
use App\Models\ContentGallery;
use App\Models\GallerySlider;
use Illuminate\Support\Facades\DB;

class MenuService
{
   
    public function getMenuTree($parentId = 0)
    {
        // Fetch active menu items with the specified parent ID
        $menus = Category::where('is_active', 1)
            ->where('parent', $parentId)
            ->orderBy('display_order')
            ->get();

        foreach ($menus as $menu) {
            $menu->children = $this->getMenuTree($menu->id);
        }

        return $menus;
    }


    public function webSettings()
    {
        $lastWebSettings = DB::table('websettings')->latest('id')->first();
        return $lastWebSettings;
    }



    public function testimonial()
    {
        $testimonials = DB::table('testimonial')->get();
        return $testimonials;
    }


    public function getMenuBySlug($slug)
    {
        return Category::where('url', $slug)->first();
    }

    
    public function getViewBySlug($slug)
    {
        $viewMap = [
            'home' => 'frontend.home',
            'the-crimson-edge' => 'frontend.innerpage-design-two',
            'our-child-centric-vision' => 'frontend.innerpage',
            'philosophy-we-follow' => 'frontend.innerpage',
            'cags-undri' => 'frontend.innerpage-design-three',
            'marunji' => 'frontend.innerpage-design-three',
            'cbse-primary-school' => 'frontend.innerpage-design-four',
        ];

        // Return the mapped view or a default 404 view
        return $viewMap[$slug] ?? 'frontend.404';
    }

   
    public function getContentByPageId($pageId)
    {
        return Content::where('page_id', $pageId)->get();
    }


    public function getGalleryRepeaterItemsByContentId($contentId)
    {
        return ContentGallery::where('content_id', $contentId)->get();
    }

    public function getGallerySliderImagesByContentId($contentId)
    {
        return GallerySlider::where('content_id', $contentId)->get();
    }





}
