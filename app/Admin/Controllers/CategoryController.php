<?php

namespace App\Admin\Controllers;

use OpenAdmin\Admin\Controllers\AdminController;
use OpenAdmin\Admin\Form;
use OpenAdmin\Admin\Grid;
use OpenAdmin\Admin\Show;
use \App\Models\Category;
use Illuminate\Validation\Rule;
use OpenAdmin\Admin\Facades\Admin;

class CategoryController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'Category';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new Category());

        $grid->column('id', __('Id'));
        $grid->column('parentCategory.name', __('Parent'))->display(function ($parentName) {
            return $parentName ?: 'ROOT';
        });

        $grid->column('name', __('Name'))->text();
        
        $grid->column('url', __('Url'))->text();
        
        $grid->column('is_active', __('Is active'))->display(function ($isActive) {
            return $isActive ? 'Active' : 'Inactive';
        });
        $grid->column('display_order', __('Display order'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->filter(function($filter){

        // Remove the default id filter
        $filter->disableIdFilter();
    
        // Add a column filter
        $filter->equal('parent', 'Category')->select(
            ['0' => 'ROOT'] + Category::Where('parent', 0)
                                    ->pluck('name', 'id')
                                    ->toArray()
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
        $show = new Show(Category::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('name', __('Name'));
        $show->field('parent', __('Parent'));
        $show->field('url', __('Url'));
        $show->field('is_active', __('Is active'));
        $show->field('display_order', __('Display order'));
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
        $form = new Form(new Category());

        // Parent category selection
        $form->select('parent', 'Parent Category')
            ->options(Category::pluck('name', 'id')->prepend('Root Category', 0))
            ->default(0)
            ->rules('required'); // Default to no parent category
        

        // Name field
        $form->text('name', __('Name'))
        ->rules('required')
        ->attribute('id', 'name-field'); // Add an ID for JavaScript targeting


        // URL field, ensuring it's unique
        $form->text('url', __('Url'))
            ->creationRules('nullable|unique:category,url')
            ->attribute('id', 'url-field'); // Add an ID for JavaScript targeting
        
        // Display order field, ensuring it's unique for each parent_id
        $form->number('display_order', __('Display Order'))
            ->rules(function ($form) {
                return [
                    Rule::unique('category', 'display_order')->where(function ($query) use ($form) {
                        return $query->where('parent', $form->parent);
                    })
                ];
            })->rules('required');
        
        // Active status field
        $form->switch('is_active', __('Is Active'))
            ->rules('required')
            ->default(1);
        
        // Add JavaScript to auto-fill the URL field based on the name field
        Admin::script("
            document.getElementById('name-field').addEventListener('input', function () {
                let nameValue = this.value;
                let slug = nameValue
                    .toLowerCase()
                    .trim()
                    .replace(/[^a-z0-9]+/g, '-') // Replace non-alphanumeric characters with hyphens
                    .replace(/^-+|-+$/g, '');   // Remove leading/trailing hyphens
        
                document.getElementById('url-field').value = slug;
            });
        ");
        
        // Return the form
        return $form;
    }
}
