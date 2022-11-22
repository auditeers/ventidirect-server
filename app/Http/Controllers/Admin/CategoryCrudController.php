<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CategoryRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CategoryCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CategoryCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Category::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/category');
        CRUD::setEntityNameStrings('category', 'categories');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setDefaultPageLength(50);

        CRUD::column('name');
        CRUD::column('parent_id');

        CRUD::column('internal_name');
        CRUD::column('internal_code');

        CRUD::denyAccess('show');


    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setOperationSetting('contentClass', 'col-md-12');

        CRUD::setValidation([
            'name' => 'required|min:2',
            'slug' => 'required'
        ]);

        CRUD::field('name')
            ->label('Category Name')
            ->wrapper(['class' => 'form-group col-md-6'])
            ->tab('General');

        CRUD::field('parent_id')
            ->label('Parent')
            ->wrapper(['class' => 'form-group col-md-6'])
            ->tab('General');

        CRUD::field('internal_name')
            ->label('Internal Name')
            ->wrapper(['class' => 'form-group col-md-6'])
            ->tab('General');
        

        CRUD::field('internal_code')
            ->label('Internal Code')
            ->wrapper(['class' => 'form-group col-md-6'])
            ->tab('General');

        CRUD::field('slug')
            ->label('Slug')
            ->wrapper(['class' => 'form-group col-md-12'])
            ->tab('General');
        
        CRUD::field('intro')
            ->label('Introductie')
            ->type('text')
            ->wrapper(['class' => 'form-group col-md-12'])
            ->tab('General');

        CRUD::field('description')
            ->label('Description')
            ->type('summernote')
            ->options(['height'=> '400', 'lang' => 'nl-NL'])
            ->wrapper(['class' => 'form-group col-md-12'])
            ->tab('General');

        CRUD::field('image')
            ->label('Afbeelding')
            ->crop(true)
            ->aspect_ratio(1)
            ->type('image')
            ->disk('local')
            ->tab('General');
        
        CRUD::field('seo_title')
            ->label('Seo Title')
            ->type('text')
            ->wrapper(['class' => 'form-group col-md-12'])
            ->tab('SEO');

        CRUD::field('seo_description')
            ->label('Seo Description')
            ->type('text')
            ->wrapper(['class' => 'form-group col-md-12'])
            ->tab('SEO');
    

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
