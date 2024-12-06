<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Users;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Khaidir Hasan',
            'email' => 'khaidirhasan@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // Buat pengguna biasa
        User::create([
            'name' => 'Labs Games',
            'email' => 'labs.games@example.com',
            'password' => Hash::make('password'),
        ]);

        $this->call(FinanceChartOfAccountCategorySeeder::class);
        $this->call(FinanceCostCenterSeeder::class);
        $this->call(FinanceChartOfAccountSeeder::class);
        $this->call(FinanceJurnalSeeder::class);
    }
}
