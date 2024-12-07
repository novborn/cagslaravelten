<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Testimonial;

class TestimonialController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Testimonial';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Testimonial());

        $grid->column('id', __('Id'));
        $grid->column('testimonial_name', __('Testimonial name'));
        $grid->column('testimonial_sub_name', __('Testimonial sub name'));
        //$grid->column('testimonial_image', __('Testimonial image'));
        $grid->column('testimonial_image')->image();
        $grid->column('testimonial_text', __('Testimonial text'));
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
        $show = new Show(Testimonial::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('testimonial_name', __('Testimonial name'));
        $show->field('testimonial_sub_name', __('Testimonial sub name'));
        $show->field('testimonial_image', __('Testimonial image'));
        $show->field('testimonial_text', __('Testimonial text'));
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
        $form = new Form(new Testimonial());

        $form->text('testimonial_name', __('Testimonial name'));
        $form->textarea('testimonial_sub_name', __('Testimonial sub name'));
        //$form->text('testimonial_image', __('Testimonial image'));


        $form->image('testimonial_image', 'Testimonial image')
        ->removable()
        ->move('uploads/gallery')
        ->uniqueName()
        ->rules('required|mimes:png,jpg,jpeg');


        $form->textarea('testimonial_text', __('Testimonial text'));

        return $form;
    }
}
