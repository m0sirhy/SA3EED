<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
           $user = User::create([
        	'user_name' => 'Admin'.Str::random(10), 
        	'email' =>  'admin@gmail.com',
        	'password' => bcrypt('123456')
        ]);
  
       $role = Role::create(['name' => 'SuperAdmin']);
   
        $permissions = Permission::pluck('id','id')->all();
        $user->assignRole([$role->id]);

        $role->syncPermissions($permissions);
   

        
    }
}
