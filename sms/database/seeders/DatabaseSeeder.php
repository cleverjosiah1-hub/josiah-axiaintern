<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = ['SuperAdmin', 'SchoolAdmin',
         'Teacher', 'Student', 'Parent', 'Bursar'];

    foreach ($roles as $role) {
        Role::firstOrCreate(['name' => $role]);
        }

         $superAdmin = User::firstOrCreate([
            'email' => 'superadmin@gmail.com',
        ], [
            'name' => 'Super Admin',
            'password' => bcrypt('password'),
        ]);
        $superAdmin->assignRole('SuperAdmin');

        $teacher = User::firstOrCreate([
            'email' => 'teacher@gmail.com',
        ], [
            'name' => 'Teacher Josiah',
            'password' => bcrypt('password'),
        ]);
        $teacher->assignRole('Teacher');

        $student = User::firstOrCreate([
            'email' => 'student@example.com'
        ], [
            'name' => 'Student Mary',
            'password' => bcrypt('password'),
        ]);
        $student->assignRole('Student');

    }
}
