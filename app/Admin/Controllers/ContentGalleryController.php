<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use App\Models\ContentGallery;
use App\Models\Content;

class ContentGalleryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Thumbnail Repeater Section';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new ContentGallery());

        $grid->column('id', __('Id'));
        $grid->column('content.page_id', __('Page id'));
        $grid->column('content.id', __('Content id'));
        $grid->column('content.title', __('Content Title'));

        $grid->column('content_gallery_image')->image();
        $grid->column('content_gallery_desc', __('Content gallery description'));
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
        $show = new Show(ContentGallery::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('content_id', __('Content id'));
        $show->field('content_gallery_image', __('Content gallery image'));
        $show->field('content_gallery_desc', __('Content gallery desc'));
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
        $form = new Form(new ContentGallery());


        $form->select('content_id', 'Content ID')
            ->options(Content::pluck('title', 'id')->toArray())
            ->rules('required');

        $form->image('content_gallery_image', 'Description Thumbnail')
            ->removable()
            ->move('uploads/gallery')
            ->uniqueName()
            ->rules('required|mimes:png,jpg,jpeg');


        $form->textarea('content_gallery_desc', 'Content Gallery Description')
            ->rules('nullable|string|max:500');

        return $form;
    }
}
