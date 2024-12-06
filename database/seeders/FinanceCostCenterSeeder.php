<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceCostCenterSeeder extends Seeder
{
    public function run()
    {
        DB::table('finance_cost_center')->insert([
            [
                'id' => 1,
                'cost_name' => 'Administrasi Sekolah',
                'description' => 'Pengeluaran terkait administrasi sekolah',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'cost_name' => 'Operasional Sekolah',
                'description' => 'Pengeluaran untuk operasional sekolah seperti listrik dan air',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'cost_name' => 'Gaji Guru dan Staf',
                'description' => 'Pengeluaran untuk gaji guru dan staf sekolah',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 4,
                'cost_name' => 'Penerimaan Sekolah',
                'description' => 'Penerimaan sekolah dari SPP dan hibah',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
