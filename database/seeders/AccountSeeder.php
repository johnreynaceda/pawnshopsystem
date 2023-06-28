<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Branch;
use App\Models\User;
use App\Models\Role;


class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $branch = Branch::create([
            'name' => 'KRISTINE PAWNSHOP TACURONG-LEDESMA',
            'address' => 'Ledesma St. Tacurong City, S.K',
            'tin' => '0000-000-000-000',
        ]);

        $role = Role::create([
            'name' => 'Administrator',
        ]);

        $user = User::create([
            'name' => 'Administrator',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'role_id' => $role->id,
            'branch_id' => $branch->id,
        ]);

         $role = Role::create([
         'name' => 'Branch Manager',
         ]);

         $user = User::create([
         'name' => 'Manager',
         'email' => 'manager@gmail.com',
         'password' => bcrypt('password'),
         'role_id' => $role->id,
         'branch_id' => $branch->id,
         ]);

          $role = Role::create([
          'name' => 'Teller',
          ]);

          $user = User::create([
          'name' => 'Teller',
          'email' => 'teller@gmail.com',
          'password' => bcrypt('password'),
          'role_id' => $role->id,
          'branch_id' => $branch->id,
          ]);

    }
}
