<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // NOTES
        // 1.) Soft Delete -> Trash
        // 2.) Admin role can view user logs
        // 3.) 

        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        //Controller
        // abort_if(Gate::denies('applicant_create'), Response::HTTP_FORBIDDEN, '403 Forbidden')

        // create permissions
        Permission::create(['name' => 'applicant_import']);
        Permission::create(['name' => 'applicant_export']);
        Permission::create(['name' => 'applicant_create']);
        Permission::create(['name' => 'applicant_access']); //access - index
        Permission::create(['name' => 'applicant_show']);
        Permission::create(['name' => 'applicant_edit']);
        Permission::create(['name' => 'applicant_delete']); //considered as soft delete
        Permission::create(['name' => 'applicant_force_delete']); //force delete - admin
        Permission::create(['name' => 'role_create']);
        Permission::create(['name' => 'role_edit']);
        Permission::create(['name' => 'role_delete']);
        Permission::create(['name' => 'role_access']);
        Permission::create(['name' => 'user_create']);
        Permission::create(['name' => 'user_update']);
        Permission::create(['name' => 'user_delete']);
        Permission::create(['name' => 'user_access']);
        Permission::create(['name' => 'access_logs']); //for viewing logs of users - admin 

        $userPermissions = [
            'applicant_access',
            'applicant_show',
            'applicant_export',
            'applicant_create',
            'applicant_edit',
            'applicant_delete',
        ];

        $role = Role::create(['name' => 'User'])->givePermissionTo($userPermissions);

        $role = Role::create(['name' => 'Admin']);
        $role->givePermissionTo(Permission::all());
    }
}
