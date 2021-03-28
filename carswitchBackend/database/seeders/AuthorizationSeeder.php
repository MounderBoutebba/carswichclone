<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Authorization;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Route;

class AuthorizationSeeder extends Seeder {

      /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission_ids = []; // an empty array of stored permission IDs
        // iterate though all routes^
        
        foreach (Route::getRoutes() as $key => $route)
        {
            if (!array_key_exists('uses', $route['action'])){
                break; 
            }
           // get route action
            
            $action = $route['action']['uses'];
            // separating controller and method
            $_action = explode('@',$action);
            
            $verb = $route['method'];
            $controller = last(explode("\\", $_action[0]));
            $name = str_replace('Api', '', $controller);
            $method = end($_action);
            
            // check if this permission is already exists
            $permission_check = Authorization::where(['controller'=>$controller,'method'=>$method])->first();
            if(!$permission_check){
                $permission = new Authorization;
                $permission->name = $name;
                $permission->controller = $controller;
                $permission->method = $method;
                $permission->verb = $verb;
                $permission->save();
                // add stored permission id in array
                array_push($permission_ids, $permission->id);
            }
        }

        // Attache all roles to Super Admin
        $admin_role = Role::where('name','Super Admin')->first();
        $admin_role->authorizations()->attach($permission_ids);
    }

}