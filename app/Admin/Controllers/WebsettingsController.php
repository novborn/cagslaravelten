<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Websettings;

class WebsettingsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Websettings';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Websettings());

        $grid->column('id', __('Id'));
        $grid->column('logo', __('Logo'))->image();
        $grid->column('main_banner', __('Main banner'));
        $grid->column('header_script', __('Header script'));
        $grid->column('footer_script', __('Footer script'));
        $grid->column('web_title', __('Web title'));
        $grid->column('web_desc', __('Web desc'));
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
        $show = new Show(Websettings::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('logo', __('Logo'));
        $show->field('main_banner', __('Main banner'));
        $show->field('header_script', __('Header script'));
        $show->field('footer_script', __('Footer script'));
        $show->field('web_title', __('Web title'));
        $show->field('web_desc', __('Web desc'));
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
        $form = new Form(new Websettings());

        //$form->image('logo', 'Main Logo')->move('public/upload/images/')->pick();

        $form->image('logo', 'Main Logo')
        //->thumbnail('1440x450', 400, 400) 
        ->uniqueName() 
        ->rules('mimes:png,jpg,jpeg,svg');


        $form->multipleImage('main_banner', 'Homepage banner')->move('public/upload/images/');
        $form->ckeditor('header_script', __('Header script'));
        $form->ckeditor('footer_script', __('Footer script'));
        $form->text('web_title', __('Web title'));
        $form->ckeditor('web_desc', __('Web desc'));

        return $form;
    }
}
