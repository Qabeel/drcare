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
            
            array (
                'id' => 32,
                'key' => 'browse_specializations',
                'table_name' => 'specializations',
            ),
            
            array (
                'id' => 33,
                'key' => 'read_specializations',
                'table_name' => 'specializations',
            ),
            
            array (
                'id' => 34,
                'key' => 'edit_specializations',
                'table_name' => 'specializations',
            ),
            
            array (
                'id' => 35,
                'key' => 'add_specializations',
                'table_name' => 'specializations',
            ),
            
            array (
                'id' => 36,
                'key' => 'delete_specializations',
                'table_name' => 'specializations',
            ),
            
            array (
                'id' => 37,
                'key' => 'browse_doctors',
                'table_name' => 'doctors',
            ),
            
            array (
                'id' => 38,
                'key' => 'read_doctors',
                'table_name' => 'doctors',
            ),
            
            array (
                'id' => 39,
                'key' => 'edit_doctors',
                'table_name' => 'doctors',
            ),
            
            array (
                'id' => 40,
                'key' => 'add_doctors',
                'table_name' => 'doctors',
            ),
            
            array (
                'id' => 41,
                'key' => 'delete_doctors',
                'table_name' => 'doctors',
            ),
            
            array (
                'id' => 42,
                'key' => 'browse_appointments',
                'table_name' => 'appointments',
            ),
            
            array (
                'id' => 43,
                'key' => 'read_appointments',
                'table_name' => 'appointments',
            ),
            
            array (
                'id' => 44,
                'key' => 'edit_appointments',
                'table_name' => 'appointments',
            ),
            
            array (
                'id' => 45,
                'key' => 'add_appointments',
                'table_name' => 'appointments',
            ),
            
            array (
                'id' => 46,
                'key' => 'delete_appointments',
                'table_name' => 'appointments',
            ),
            
            array (
                'id' => 47,
                'key' => 'browse_patients',
                'table_name' => 'patients',
            ),
            
            array (
                'id' => 48,
                'key' => 'read_patients',
                'table_name' => 'patients',
            ),
            
            array (
                'id' => 49,
                'key' => 'edit_patients',
                'table_name' => 'patients',
            ),
            
            array (
                'id' => 50,
                'key' => 'add_patients',
                'table_name' => 'patients',
            ),
            
            array (
                'id' => 51,
                'key' => 'delete_patients',
                'table_name' => 'patients',
            ),
            
            array (
                'id' => 52,
                'key' => 'browse_doctor_times',
                'table_name' => 'doctor_times',
            ),
            
            array (
                'id' => 53,
                'key' => 'read_doctor_times',
                'table_name' => 'doctor_times',
            ),
            
            array (
                'id' => 54,
                'key' => 'edit_doctor_times',
                'table_name' => 'doctor_times',
            ),
            
            array (
                'id' => 55,
                'key' => 'add_doctor_times',
                'table_name' => 'doctor_times',
            ),
            
            array (
                'id' => 56,
                'key' => 'delete_doctor_times',
                'table_name' => 'doctor_times',
            ),
        ));
        
        
    }
}