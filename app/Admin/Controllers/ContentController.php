<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Models\Content;
use App\Models\Category;
use App\Models\ContentGallery;
use App\Models\GallerySlider;
use App\Models\GalleryRepeaterItem; // Make sure you have this model

class ContentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Page Content';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Content());


        $grid->filter(function ($filter) {

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->like('title', 'Title');
            $filter->like('description', 'Description');

            $filter->equal('page_id', 'Category/Subcategory')->select(
                ['0' => 'ROOT'] + Category::pluck('name', 'id')->toArray()
            );
            $filter->equal('is_active', 'Active')->radio([
                1 => 'Active',
                0 => 'Inactive',
            ]);
        });





        $grid->column('id', __('Id'));
        $grid->column('page_id', __('Page id'));
        $grid->column('category.url', __('Page Slug'));
        $grid->column('title')->filter('like');
        $grid->column('description', __('Description'));
        $grid->column('is_active', __('Is active'));
        $grid->column('meta_title', __('Meta title'));
        $grid->column('meta_desc', __('Meta desc'));
        $grid->column('extra_tags', __('Extra tags'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));



        return $grid;
    }

    /**
     * Make a show builder.
     *
     * @param mixed $id
     * @return Show
     */
    protected function detail($id)
    {
        $show = new Show(Content::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('page_id', __('Page id'));
        $show->field('title', __('Title'));
        $show->field('description', __('Description'));
        $show->field('inner_page_title', __('Inner Page Title'));
        $show->field('inner_page_sub_title', __('Inner Page Sub Title'));
        $show->field('inner_page_banner', __('Inner Page Banner'));
        $show->field('gallery_section_title', __('Gallery Section Title'));
        $show->field('gallery_section_sub_title', __('Gallery Section Sub Title'));


        $show->field('contentGallery', 'Thumbnail Section')->as(function () use ($id) {
            $content = Content::with('contentGallery')->find($id);
            $galleryItems = $content->contentGallery;

            if ($galleryItems->isEmpty()) {
                return 'No gallery items found.';
            }

            $html = '<ul>';
            foreach ($galleryItems as $item) {
                $thumbnail = $item->content_gallery_image
                    ? '<img src="' . asset('uploads/' . $item->content_gallery_image) . '" style="width: 100px; height: auto;">'
                    : 'No image';
                $description = $item->content_gallery_desc ?? 'No description';
                $html .= "<li>{$thumbnail}<br>{$description}</li>";
            }
            $html .= '</ul>';
            return $html;
        })->unescape();



        $show->field('is_active', __('Is Active'));
        $show->field('meta_title', __('Meta Title'));
        $show->field('meta_desc', __('Meta Description'));
        $show->field('extra_tags', __('Extra Tags'));
        $show->field('created_at', __('Created At'));
        $show->field('updated_at', __('Updated At'));



        // Render related `contentGallery` items
        $show->ContentGallery('Thumbnail Section', function ($contentGallery) {
            $contentGallery->resource('/admin/content-galleries'); // Link to related resource
            $contentGallery->id();
            $contentGallery->content_gallery_image()->image();

            $contentGallery->content_gallery_desc();
            // $contentGallery->content()->limit(10); // Limit displayed content
            $contentGallery->created_at();
            $contentGallery->updated_at();
            $contentGallery->filter(function ($filter) {
                $filter->like('content');
            });
        });



         // Render related `contentGallery` items
         $show->getGallerySlider('Gallery Sliders', function ($getGallerySlider) {
            $getGallerySlider->resource('/admin/gallery-sliders'); // Link to related resource
            $getGallerySlider->id();
            $getGallerySlider->gallery_slider_type();
            $getGallerySlider->gallery_slider_title();
            $getGallerySlider->gallery_slider_sub_title()->limit(10);
            $getGallerySlider->gallery_slider_image_one()->image();
            $getGallerySlider->created_at();
            $getGallerySlider->updated_at();
            $getGallerySlider->filter(function ($filter) {
                $filter->like('gallery_slider_title', 'Title');
                $filter->like('gallery_slider_type', 'Type');
            });
        });


        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new Content());


        $form->tab('Page About Section', function ($form) {
            $form->select('page_id', 'Page')
                ->options(Category::pluck('name', 'id'))
                ->default(0)
                ->rules('required');

            $form->textarea('title', __('Title'))->rules('required');
            $form->ckeditor('description', __('Description'))->rules('required');
            // Image input for Description Banner
            $form->image('description_banner', 'Description Thumbnail')
                //->thumbnail('1440x450', 400, 400) 
                ->uniqueName() 
                ->rules('mimes:png,jpg,jpeg');

            $form->switch('is_active', __('Is Active'))
                ->default(1)
                ->rules('required');
        })
            ->tab('Top Banner Section', function ($form) {
                $form->text('inner_page_title', __('Inner Page Title'));
                $form->text('inner_page_sub_title', __('Inner Page Sub Title'));
                $form->image('inner_page_banner', 'Inner Page Banner')
                    //->thumbnail('1440x450', $width = 1440, $height = 450)
                    ->uniqueName()
                    ->rules('mimes:png,jpg,jpeg');



            })
            ->tab('Thumbnail Repeater Section', function ($form) {
                $form->text('gallery_section_title', __('Thumbnail Section Title'));
                $form->text('gallery_section_sub_title', __('Thumbnail Section Sub Title'));

                $form->hasMany('contentGallery', 'Thumbnail Section', function (Form\NestedForm $nestedForm) {
                    $nestedForm->image('content_gallery_image', 'Thumbnail Image')
                        ->uniqueName()
                        ->rules('nullable|mimes:png,jpg,jpeg');
                    $nestedForm->textarea('content_gallery_desc', 'Thumbnail Description')
                        ->rules('nullable');
                });

            })

            ->tab('Gallery Slider Section', function ($form) {
                
                $form->hasMany('getGallerySlider', 'Gallery Sliders', function (Form\NestedForm $nestedForm) {
                    
                    $nestedForm->text('gallery_slider_title', __('Slider Section Title'));
                    $nestedForm->textarea('gallery_slider_sub_title', __('Slider Section Sub Title'));
    
                    $nestedForm->select('gallery_slider_type', 'Slider Type')
                        ->options(['slider_one' => 'Slider One', 'slider_two' => 'Slider Two', 'slider_three' => 'Slider Three',  'slider_four' => 'Slider Four'])
                        ->required();

                    $nestedForm->multipleImage('gallery_slider_image_one', 'Gallery Slider Images (Tab One)')
                        ->removable()
                        ->move('uploads/gallery_sliders')
                        ->uniqueName()
                        ->rules('nullable|mimes:png,jpg,jpeg');
                });

                
            })
            ->tab('SEO Meta Tags', function ($form) {
                $form->text('meta_title', __('Meta Title'));
                $form->text('meta_desc', __('Meta Description'));
                $form->text('extra_tags', __('Other Tags'));
            });




        return $form;
    }
}
