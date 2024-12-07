<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Models\GallerySlider;
use App\Models\Content;

class GallerySliderController extends AdminController
{


    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Page Gallery Slider';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new GallerySlider());

        $grid->column('id', __('Id'));
        $grid->column('content.id', __('Content id'));
        $grid->column('content.title', __('Content Title'));

        $grid->column('gallery_slider_type', __('Gallery slider type'));
        $grid->column('gallery_slider_title', __('Gallery slider title'));
        $grid->column('gallery_slider_sub_title', __('Gallery slider sub title'));


        $grid->column('gallery_slider_image_one', 'Gallery slider Tab One')->image();


        //$grid->column('gallery_slider_image_two', __('Gallery slider image two'));
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
        $show = new Show(GallerySlider::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('gallery_slider_type', __('Gallery slider type'));
        $show->field('gallery_slider_image_one', __('Gallery slider image one'));

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
        $form = new Form(new GallerySlider());


        $form->select('content_id', 'Content ID')
            ->options(Content::pluck('title', 'id')->toArray())
            ->rules('required');

        $form->text('gallery_slider_title', __('Slider Section Title'));
        $form->textarea('gallery_slider_sub_title', __('Slider Section Sub Title'));

        $form->select('gallery_slider_type', 'Slider Type')
        ->options(['slider_one' => 'Slider One', 'slider_two' => 'Slider Two', 'slider_three' => 'Slider Three',  'slider_four' => 'Slider Four'])
        ->required();

        $form->multipleImage('gallery_slider_image_one', 'Gallery slider images')
            ->removable()
            ->move('uploads/gallery')
            ->uniqueName()
            ->rules('required|mimes:png,jpg,jpeg');


        return $form;
    }
}
