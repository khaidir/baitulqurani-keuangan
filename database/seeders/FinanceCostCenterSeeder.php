<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceCostCenterSeeder extends Seeder
{
    public function run()
    {
        $cost_centers = [
            // Contoh cost centers
            ['id' => 1, 'cost_name' => 'Administrasi', 'description' => 'Cost center untuk administrasi'],
            ['id' => 2, 'cost_name' => 'Operasional', 'description' => 'Cost center untuk operasional'],
            ['id' => 3, 'cost_name' => 'Pemasaran', 'description' => 'Cost center untuk pemasaran'],
            ['id' => 4, 'cost_name' => 'Produksi', 'description' => 'Cost center untuk produksi'],
            ['id' => 5, 'cost_name' => 'Penelitian dan Pengembangan', 'description' => 'Cost center untuk R&D'],
            ['id' => 6, 'cost_name' => 'Keuangan', 'description' => 'Cost center untuk keuangan'],
            ['id' => 7, 'cost_name' => 'IT', 'description' => 'Cost center untuk IT'],
        ];
        DB::table('finance_cost_center')->insert($cost_centers);
    }
}
