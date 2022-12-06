<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CustomerRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class CustomerCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CustomerCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Customer::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/customer');
        CRUD::setEntityNameStrings('customer', 'customers');
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

        CRUD::column('firstname');
        CRUD::column('lastname');
        CRUD::column('email');
        CRUD::column('zip');
   
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
        CRUD::setValidation([
            // 'name' => 'required|min:2',
        ]);

        CRUD::setOperationSetting('contentClass', 'col-md-12');

        CRUD::field('firstname')
            ->label('Firstname')
            ->tab('details')
            ->wrapper(['class' => 'form-group col-md-6']);

        CRUD::field('lastname')
            ->label('Lastname')
            ->tab('details')
            ->wrapper(['class' => 'form-group col-md-6']);

        CRUD::field('street')
            ->label('Street')
            ->tab('details')
            ->wrapper(['class' => 'form-group col-md-6']);

        CRUD::field('streetnumber')
            ->label('Nr.')
            ->tab('details')
            ->wrapper(['class' => 'form-group col-md-3']);

        CRUD::field('streetaddition')
            ->label('add.')
            ->tab('details')
            ->wrapper(['class' => 'form-group col-md-3']);

        CRUD::field('zip')
            ->label('zipcode')
            ->tab('details')
            ->wrapper(['class' => 'form-group col-md-4']);

        CRUD::field('city')
            ->label('city')
            ->tab('details')
            ->wrapper(['class' => 'form-group col-md-4']);
        
        CRUD::field('email')
            ->label('Email')
            ->tab('details')
            ->wrapper(['class' => 'form-group col-md-6']);

        CRUD::field('phone')
            ->label('Phone')
            ->tab('details')
            ->wrapper(['class' => 'form-group col-md-6']);
    
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
