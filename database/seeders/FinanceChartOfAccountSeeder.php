<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceChartOfAccountSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('finance_chart_of_account')->insert([
            // Aset Lancar
            ['id' => 1, 'cost_id' => 1, 'code' => '111', 'coa_name' => 'Kas', 'position' => 'debit', 'description' => 'Aset Lancar', 'status' => true, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 2, 'cost_id' => 1, 'code' => '112', 'coa_name' => 'Piutang SPP', 'position' => 'debit', 'description' => 'Aset Lancar', 'status' => true, 'created_at' => now(), 'updated_at' => now()],

            // Aset Tetap
            ['id' => 3, 'cost_id' => 2, 'code' => '121', 'coa_name' => 'Gedung Sekolah', 'position' => 'debit', 'description' => 'Aset Tetap', 'status' => true, 'created_at' => now(), 'updated_at' => now()],

            // Kewajiban
            ['id' => 4, 'cost_id' => 1, 'code' => '211', 'coa_name' => 'Utang Usaha', 'position' => 'credit', 'description' => 'Kewajiban', 'status' => true, 'created_at' => now(), 'updated_at' => now()],

            // Ekuitas
            ['id' => 5, 'cost_id' => 1, 'code' => '311', 'coa_name' => 'Modal Awal', 'position' => 'credit', 'description' => 'Ekuitas', 'status' => true, 'created_at' => now(), 'updated_at' => now()],

            // Pendapatan
            ['id' => 6, 'cost_id' => 4, 'code' => '411', 'coa_name' => 'Pendapatan SPP', 'position' => 'credit', 'description' => 'Pendapatan Operasional', 'status' => true, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 7, 'cost_id' => 4, 'code' => '412', 'coa_name' => 'Pendapatan Hibah', 'position' => 'credit', 'description' => 'Pendapatan Lainnya', 'status' => true, 'created_at' => now(), 'updated_at' => now()],

            // Beban Operasional
            ['id' => 8, 'cost_id' => 2, 'code' => '511', 'coa_name' => 'Beban Listrik', 'position' => 'debit', 'description' => 'Beban Operasional', 'status' => true, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 9, 'cost_id' => 2, 'code' => '512', 'coa_name' => 'Beban Air', 'position' => 'debit', 'description' => 'Beban Operasional', 'status' => true, 'created_at' => now(), 'updated_at' => now()],

            // Beban Gaji
            ['id' => 10, 'cost_id' => 3, 'code' => '521', 'coa_name' => 'Gaji Guru', 'position' => 'debit', 'description' => 'Beban Gaji', 'status' => true, 'created_at' => now(), 'updated_at' => now()],
            ['id' => 11, 'cost_id' => 3, 'code' => '522', 'coa_name' => 'Gaji Staf Administrasi', 'position' => 'debit', 'description' => 'Beban Gaji', 'status' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
