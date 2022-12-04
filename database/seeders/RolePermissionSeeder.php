<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Permission List as array
        $permissions = [
            [
                'group_name' => 'dashboard',
                'permissions' => [
                    'dashboard.view',
                ]
            ],
            [
                'group_name' => 'blog',
                'permissions' => [
                    'blog.create',
                    'blog.view',
                    'blog.edit',
                    'blog.delete',
                    'blog.approve',
                ]
            ],
            [
                'group_name' => 'user',
                'permissions' => [
                    'user.create',
                    'user.view',
                    'user.edit',
                    'user.delete',
                    'user.approve',
                ]
            ],
            [
                'group_name' => 'role',
                'permissions' => [
                    'role.create',
                    'role.view',
                    'role.edit',
                    'role.delete',
                    'role.approve',
                ]
            ],
            [
                'group_name' => 'profile',
                'permissions' => [
                    'profile.view',
                    'profile.edit',
                ]
            ],
            [
                'group_name' => 'category',
                'permissions' => [
                    'category.create',
                    'category.view',
                    'category.edit',
                    'category.delete',
                ]
            ],
            [
                'group_name' => 'page',
                'permissions' => [
                    'page.create',
                    'page.view',
                    'page.edit',
                    'page.delete',
                ]
            ],
            [
                'group_name' => 'course',
                'permissions' => [
                    'course.create',
                    'course.view',
                    'course.edit',
                    'course.delete',
                    'course.approve',
                ]
            ],
            [
                'group_name' => 'lecture',
                'permissions' => [
                    'lecture.create',
                    'lecture.view',
                    'lecture.edit',
                    'lecture.delete',
                    'lecture.approve',
                ]
            ],
            [
                'group_name' => 'chapter',
                'permissions' => [
                    'chapter.create',
                    'chapter.view',
                    'chapter.edit',
                    'chapter.delete',
                ]
            ],
            [
                'group_name' => 'invoice',
                'permissions' => [
                    'invoice.view',
                    'invoice.delete',
                    'payment.create',
                    'payment.edit',
                    'payment.delete',
                ]
            ],
            [
                'group_name' => 'enroll',
                'permissions' => [
                    'enroll.view',
                    'enroll.edit',
                    'enroll.delete',
                ]
            ],
            [
                'group_name' => 'contact',
                'permissions' => [
                    'contact.view',
                    'contact.delete',
                ]
            ],
            [
                'group_name' => 'report',
                'permissions' => [
                    'report.view',
                ]
            ],
        ];

        $role = Role::create(['name' => 'superadmin']);

        // Create and Assign Permissions
        for ($i = 0; $i < count($permissions); $i++) {
            $permissionGroup = $permissions[$i]['group_name'];

            for ($j = 0; $j < count($permissions[$i]['permissions']); $j++) {
                // Create Permission
                $permission = Permission::create(['name' => $permissions[$i]['permissions'][$j], 'group_name' => $permissionGroup]);
                $role->givePermissionTo($permission);
                $permission->assignRole($role);
            }
        }

        // Give this permission to user.
        $user = User::where('email', 'manirujjamanakash@gmail.com')->first();
        if ($user) {
            $user->assignRole($role);
        }
    }
}
