<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProductRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ProductCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ProductCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Product::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/product');
        CRUD::setEntityNameStrings('product', 'products');
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
        CRUD::denyAccess('show');

        CRUD::column('name');
        CRUD::column('short_description');
        CRUD::column('category_id');
        CRUD::column('ean');
        CRUD::column('price')->typo('number')->prefix('€ ')->decimals(2)->dec_point('.');
        CRUD::column('stock');
  

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
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
            'ean' => 'required',
            'slug' => 'required',
        ]);

        CRUD::field('name')
            ->label('Product Name')
            ->wrapper(['class' => 'form-group col-md-12']);
        
        CRUD::field('slug')
            ->tab('General');

        CRUD::field('short_description')
            ->label('Short Description')
            ->type('text')
            ->tab('General');
        
        CRUD::field('category_id')
            ->label('Category')
            ->tab('General');
        

        CRUD::field('ean')
            ->tab('General');
        
        CRUD::field('price')
            ->label('Purchase Price')
            ->type('number')
            ->prefix('€ ')
            ->decimals(2)
            ->dec_point('.')
            ->wrapper(['class' => 'form-group col-md-4'])
            ->tab('Financial');

        CRUD::field('competition_price')
            ->label('Competition Price')
            ->type('number')
            ->prefix('€ ')
            ->decimals(2)
            ->dec_point('.')
            ->wrapper(['class' => 'form-group col-md-4'])
            ->tab('Financial');

         CRUD::field('sales_price')
            ->label('Sales Price')
            ->type('number')
            ->prefix('€ ')
            ->decimals(2)
            ->dec_point('.')
            ->wrapper(['class' => 'form-group col-md-4'])
            ->tab('Financial');


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
        
        CRUD::field('stock')
            ->tab('Stock');

        CRUD::field('visible')
            ->label('active')
            ->type('toggle')
            ->view_namespace('toggle-field-for-backpack::fields')
            ->tab('General');


     
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
