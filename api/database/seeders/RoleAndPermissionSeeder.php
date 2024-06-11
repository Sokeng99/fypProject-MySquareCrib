<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    private function namePermission($name, $permissions)
    {
        for ($i = 0; $i < count($permissions); $i++)
            $groupPermission[$i] = $name . '.' . $permissions[$i];

        return [
            'group_name' => $name,
            'permissions' => $groupPermission
        ];
    }
    public function run(): void
    {
        $all = ['create','view','edit','delete'];
        $permissions=[
            $this->namePermission('dashboard',['view']),
            $this->namePermission('user',$all),
            $this->namePermission('admin',$all),
            $this->namePermission('property',$all)
        ];
        $roleSuperAdmin = Role::create(['name'=>'SuperAdmin']);
        for($i = 0; $i<count($permissions); $i++){
            $permissionGroup = $permissions[$i]['group_name'];
            for($j=0; $j<count($permissions[$i]['permissions']); $j++){
                $permission = Permission::create(['name'=>$permissions[$i]['permissions'][$j], 'group_name'=>$permissionGroup,'guard_name'=>'web']);
                $roleSuperAdmin->givePermissionTo($permission);
                $permission->assignRole($roleSuperAdmin);
            }
        }
        $admin = Admin::where('name', 'SuperAdmin')->first();
        if($admin){
            $admin->assignRole($roleSuperAdmin);
        }
    }
}
