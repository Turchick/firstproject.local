<?php

namespace App\Admin\Controllers;

use App\Models\News;
use Encore\Admin\Controllers\AdminController;
use Encore\Admin\Form;
use Encore\Admin\Grid;
use Encore\Admin\Show;

class NewsController extends AdminController
{
    /**
     * Title for current resource.
     *
     * @var string
     */
    protected $title = 'News';

    /**
     * Make a grid builder.
     *
     * @return Grid
     */
    protected function grid()
    {
        $grid = new Grid(new News());

        $grid->column('id', __('Id'));
        $grid->column('user_id', __('User id'));
        $grid->column('category_id', __('Category id'));
        $grid->column('title', __('Title'));
        $grid->column('is_active', __('Is active'));
        $grid->column('created_at', __('Created at'));
        $grid->column('updated_at', __('Updated at'));
        $grid->column('deleted_at', __('Deleted at'));
        $grid->column('published_at', __('Published at'));

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
        $show = new Show(News::findOrFail($id));

        $show->field('id', __('Id'));
        $show->field('user_id', __('User id'));
        $show->field('category_id', __('Category id'));
        $show->field('slug', __('Slug'));
        $show->field('title', __('Title'));
        $show->field('preview', __('Preview'));
        $show->field('content', __('Content'));
        $show->field('is_active', __('Is active'));
        $show->field('created_at', __('Created at'));
        $show->field('updated_at', __('Updated at'));
        $show->field('deleted_at', __('Deleted at'));
        $show->field('published_at', __('Published at'));

        return $show;
    }

    /**
     * Make a form builder.
     *
     * @return Form
     */
    protected function form()
    {
        $form = new Form(new News());

        $form->number('user_id', __('User id'));
        $form->number('category_id', __('Category id'));
        $form->text('slug', __('Slug'));
        $form->text('title', __('Title'));
        $form->textarea('preview', __('Preview'));
        $form->textarea('content', __('Content'));
        $form->switch('is_active', __('Is active'));
        $form->datetime('published_at', __('Published at'))->default(date('Y-m-d H:i:s'));

        return $form;
    }
}
