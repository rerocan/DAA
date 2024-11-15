<?php

namespace Database\Seeders;

use App\Models\Guru;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this -> callSeeders();
        $this -> seedUsers();
    }
    private function seedUsers(): void {
        if (!User::where('email', 'admin@admin.com')->exists()){
            $users = User::factory ()->createMany([
            [
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('password'),
            ],
            [
                'name' => 'Guru',
                'email' => 'gru@admin.com',
                'password' => bcrypt('password'),
            ],
            ]);
            foreach($users as $user){
                if ($user->email == 'admin@admin.com'){
                    $user->assignRole('super_admin');
                }else{
                    $user->assignRole('guru');
                }
            }
        }
    }

    private function callseeders(): void {
        $this -> call ([
            GuruSeeder::class,
            KelasSeeder::class,
            RoleSeeder::class,
        ]);
    }
}
