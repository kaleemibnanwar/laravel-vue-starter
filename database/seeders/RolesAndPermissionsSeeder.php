<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{

    public function run(): void
    {

        $portcullis = json_decode(json_encode(config('portcullis')));

        foreach ($portcullis->roles as $role) {
            Role::query()->updateOrCreate(['name' => $role, 'guard_name' => 'web'], ['name' => $role]);
        }

        foreach ($portcullis->permissions as $model => $permissions) {
            foreach ($permissions as $permission) {
                Permission::query()->updateOrCreate(['name' => $permission], ['name' => $permission]);
            }
        }

        foreach ($portcullis->associations as $role_name => $permissions) {
            $role = Role::findByName($role_name);
            if ($role_name === 'super-admin') {
                $role->syncPermissions(Permission::all());
            } else {
                $role->syncPermissions($permissions);
            }
        }

    }
}
