<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rols = Role::ROLES;

        foreach ($rols as $role)
            Role::create([
                'name' => $role,
                'description' => fake()->sentence(14),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
    }
}
