<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Content;
use \App\Models\Category;


class ContentController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Content';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Content());

        $grid->column('id', __('Id'));
        $grid->column('page_id', __('Page id'));
        $grid->column('category.url', __('Page Slug'));
        $grid->column('title', __('Title'));
        $grid->column('description', __('Description'));
        $grid->column('is_active', __('Is active'));
        $grid->column('meta_title', __('Meta title'));
        $grid->column('meta_desc', __('Meta desc'));
        $grid->column('extra_tags', __('Extra tags'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->filter(function ($filter) {

            // Remove the default id filter
            $filter->disableIdFilter();

            // Add a column filter
            $filter->equal('page_id', 'Category/Subcategory')->select(
                ['0' => 'ROOT'] + Category::pluck('name', 'id')->toArray()
            );

            $filter->equal('is_active', 'Active')->radio([

                1 => 'Active',
                0 => 'Inactive',
            ]);
            //... additional filter options
        });
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
        $show->field('inner_page_title', __('inner_page_title'));
        $show->field('inner_page_sub_title', __('inner_page_sub_title'));
        $show->field('inner_page_banner', __('inner_page_banner'));

        $show->field('inner_page_banner', __('inner_page_banner'));

        
        $show->field('is_active', __('Is active'));
        $show->field('meta_title', __('Meta title'));
        $show->field('meta_desc', __('Meta desc'));
        $show->field('extra_tags', __('Extra tags'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));

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

        $form->tab('Page Content', function ($form) {
            $form->select('page_id', 'Page')
                ->options(Category::pluck('name', 'id'))
                ->default(0)
                ->rules('required'); // Default to no parent category

            $form->textarea('title', __('Title'))->rules('required');
            $form->ckeditor('description', __('Description'))->rules('required');
            $form->image('description_banner', 'Description Thumbnail')
                ->thumbnail('1440x450', $width = 400, $height = 400)
                ->uniqueName()
                ->rules('mimes:png,jpg,jpeg');

            $form->switch('is_active', __('Is Active'))
                ->default(1)
                ->rules('required');
        })->tab('Inner Page Banner', function ($form) {
            $form->text('inner_page_title', __('Inner Page Title'))->rules('required');
            $form->text('inner_page_sub_title', __('Inner Page Sub Title'));
            $form->image('inner_page_banner', 'Inner Page Banner')
                ->thumbnail('1440x450', $width = 1440, $height = 450)
                ->uniqueName()
                ->rules('mimes:png,jpg,jpeg');
        })->tab('Image Thumbnail Section', function ($form) {
            // Gallery Section Titles
            $form->text('gallery_section_title', __('Gallery Section Title'));
            $form->text('gallery_section_sub_title', __('Gallery Section Sub Title'));

            $form->hasMany('galleryRepeaterItems', 'Gallery Items', function ($nestedForm) {
                $nestedForm->image('thumbnail_image', 'Thumbnail Image')
                    ->uniqueName()
                    ->rules('mimes:png,jpg,jpeg');
                $nestedForm->textarea('thumbnail_description', 'Thumbnail Description')->rules('nullable');
            });


        })->tab('SEO', function ($form) {
            $form->text('meta_title', __('Meta Title'));
            $form->text('meta_desc', __('Meta Description'));
            $form->text('extra_tags', __('Other Tags'));
        });

        return $form;
    }
}
