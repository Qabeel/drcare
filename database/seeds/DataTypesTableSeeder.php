<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'voyager-person',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
            ),
            
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'voyager-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
            ),
            
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
            ),
            
            array (
                'id' => 4,
                'name' => 'customers',
                'slug' => 'customers',
                'display_name_singular' => 'Customer',
                'display_name_plural' => 'Customers',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Customer',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            
            array (
                'id' => 5,
                'name' => 'specializations',
                'slug' => 'specializations',
                'display_name_singular' => 'Specialization',
                'display_name_plural' => 'Specializations',
                'icon' => 'voyager-window-list',
                'model_name' => 'App\\Specialization',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
            ),
            
            array (
                'id' => 6,
                'name' => 'doctors',
                'slug' => 'doctors',
                'display_name_singular' => 'Doctor',
                'display_name_plural' => 'Doctors',
                'icon' => 'voyager-people',
                'model_name' => 'App\\Doctor',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            
            array (
                'id' => 7,
                'name' => 'appointments',
                'slug' => 'appointments',
                'display_name_singular' => 'Appointment',
                'display_name_plural' => 'Appointments',
                'icon' => 'voyager-credit-cards',
                'model_name' => 'App\\Appointment',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
            ),
            
            array (
                'id' => 8,
                'name' => 'patients',
                'slug' => 'patients',
                'display_name_singular' => 'Patient',
                'display_name_plural' => 'Patients',
                'icon' => 'voyager-group',
                'model_name' => 'App\\Patient',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":null}',
            ),
        ));
        
        
    }
}