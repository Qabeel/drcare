<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
            ),
            
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
            ),
            
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
            ),
            
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
            ),
            
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
            ),
            
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
            ),
            
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
            ),
            
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
            ),
            
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
            ),
            
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
            ),
            
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
            ),
            
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
            ),
            
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
            ),
            
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
            ),
            
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
            ),
            
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
            ),
            
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
            ),
            
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
            ),
            
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
            ),
            
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
            ),
            
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
            ),
            
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
            ),
            
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
            ),
            
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
            ),
            
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
            ),
            
            array (
                'id' => 26,
                'key' => 'browse_hooks',
                'table_name' => NULL,
            ),
            
            array (
                'id' => 27,
                'key' => 'browse_customers',
                'table_name' => 'customers',
            ),
            
            array (
                'id' => 28,
                'key' => 'read_customers',
                'table_name' => 'customers',
            ),
            
            array (
                'id' => 29,
                'key' => 'edit_customers',
                'table_name' => 'customers',
            ),
            
            array (
                'id' => 30,
                'key' => 'add_customers',
                'table_name' => 'customers',
            ),
            
            array (
                'id' => 31,
                'key' => 'delete_customers',
                'table_name' => 'customers',
            ),
        ));
        
        
    }
}