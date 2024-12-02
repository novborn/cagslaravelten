<?php

namespace App\Services;

use App\Models\Category;
use App\Models\Content;
use App\Models\GalleryRepeaterItem;

class MenuService
{
    /**
     * Fetch menu items and handle nested listing.
     *
     * @param int $parentId
     * @return \Illuminate\Support\Collection
     */
    public function getMenuTree($parentId = 0)
    {
        // Fetch active menu items with the specified parent ID
        $menus = Category::where('is_active', 1)
            ->where('parent', $parentId)
            ->orderBy('display_order')
            ->get();

        // Recursively fetch children for each menu
        foreach ($menus as $menu) {
            $menu->children = $this->getMenuTree($menu->id);
        }

        return $menus;
    }

    /**
     * Get a menu item by its slug.
     *
     * @param string $slug
     * @return \App\Models\Category|null
     */
    public function getMenuBySlug($slug)
    {
        return Category::where('url', $slug)->first();
    }

    /**
     * Map a slug to a specific view file.
     *
     * @param string $slug
     * @return string
     */
    public function getViewBySlug($slug)
    {
        $viewMap = [
            'the-crimson-edge' => 'frontend.innerpage',
            'our-child-centric-vision' => 'frontend.innerpage',
            'philosophy-we-follow' => 'frontend.innerpage',
            'leadership' => 'frontend.innerpage',
        ];

        // Return the mapped view or a default 404 view
        return $viewMap[$slug] ?? 'frontend.404';
    }

    /**
     * Fetch content by page ID.
     *
     * @param int $pageId
     * @return \Illuminate\Support\Collection
     */
    public function getContentByPageId($pageId)
    {
        return Content::where('page_id', $pageId)->get();
    }

    /**
     * Fetch gallery repeater items by content ID.
     *
     * @param int $contentId
     * @return \Illuminate\Support\Collection
     */
    public function getGalleryRepeaterItemsByContentId($contentId)
    {
        return GalleryRepeaterItem::where('content_id', $contentId)->get();
    }
}
