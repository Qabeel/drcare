<?php

use Illuminate\Database\Seeder;

class MenuItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menu_items')->delete();
        
        \DB::table('menu_items')->insert(array (
            
            array (
                'id' => 1,
                'menu_id' => 1,
                'title' => 'Dashboard',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-boat',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 1,
                'route' => 'voyager.dashboard',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 2,
                'menu_id' => 1,
                'title' => 'Media',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-images',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 7,
                'route' => 'voyager.media.index',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 3,
                'menu_id' => 1,
                'title' => 'Admins',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-person',
                'color' => '#000000',
                'parent_id' => 18,
                'order' => 1,
                'route' => 'voyager.users.index',
                'parameters' => 'null',
            ),
            
            array (
                'id' => 4,
                'menu_id' => 1,
                'title' => 'Roles',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-lock',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 2,
                'route' => 'voyager.roles.index',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 5,
                'menu_id' => 1,
                'title' => 'Tools',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-tools',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 8,
                'route' => NULL,
                'parameters' => NULL,
            ),
            
            array (
                'id' => 6,
                'menu_id' => 1,
                'title' => 'Menu Builder',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 1,
                'route' => 'voyager.menus.index',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 7,
                'menu_id' => 1,
                'title' => 'Database',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-data',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 2,
                'route' => 'voyager.database.index',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 8,
                'menu_id' => 1,
                'title' => 'Compass',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-compass',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 3,
                'route' => 'voyager.compass.index',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 9,
                'menu_id' => 1,
                'title' => 'BREAD',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-bread',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 4,
                'route' => 'voyager.bread.index',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 10,
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-settings',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 9,
                'route' => 'voyager.settings.index',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 11,
                'menu_id' => 1,
                'title' => 'Hooks',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-hook',
                'color' => NULL,
                'parent_id' => 5,
                'order' => 5,
                'route' => 'voyager.hooks',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 13,
                'menu_id' => 1,
                'title' => 'Specializations',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-window-list',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 4,
                'route' => 'voyager.specializations.index',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 14,
                'menu_id' => 1,
                'title' => 'Doctors',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-people',
                'color' => NULL,
                'parent_id' => 18,
                'order' => 3,
                'route' => 'voyager.doctors.index',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 15,
                'menu_id' => 1,
                'title' => 'Appointments',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-credit-cards',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 6,
                'route' => 'voyager.appointments.index',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 16,
                'menu_id' => 1,
                'title' => 'Patients',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-group',
                'color' => NULL,
                'parent_id' => 18,
                'order' => 2,
                'route' => 'voyager.patients.index',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 17,
                'menu_id' => 1,
                'title' => 'Doctor Times',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-watch',
                'color' => NULL,
                'parent_id' => NULL,
                'order' => 5,
                'route' => 'voyager.doctor-times.index',
                'parameters' => NULL,
            ),
            
            array (
                'id' => 18,
                'menu_id' => 1,
                'title' => 'Users',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-group',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 3,
                'route' => NULL,
                'parameters' => '',
            ),
        ));
        
        
    }
}