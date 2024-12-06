<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceChartOfAccountSeeder extends Seeder
{
    public function run(): void
    {
        $accounts = [
            // ASET (ASSETS)
            ['category_id' => 2, 'coa_id' => null, 'code' => 'AS001', 'coa_name' => 'Kas Kecil', 'position' => 'debit', 'description' => 'Petty cash', 'status' => true, 'cost_id' => 1],
            ['category_id' => 3, 'coa_id' => null, 'code' => 'AS002', 'coa_name' => 'Rekening Bank', 'position' => 'debit', 'description' => 'Bank accounts', 'status' => true, 'cost_id' => 2],
            ['category_id' => 3, 'coa_id' => null, 'code' => 'AS003', 'coa_name' => 'Deposito Berjangka', 'position' => 'debit', 'description' => 'Time deposits', 'status' => true, 'cost_id' => 2],

            // Piutang Usaha
            ['category_id' => 4, 'coa_id' => null, 'code' => 'PI001', 'coa_name' => 'Piutang SPP', 'position' => 'debit', 'description' => 'Tuition receivables', 'status' => true, 'cost_id' => 3],
            ['category_id' => 4, 'coa_id' => null, 'code' => 'PI002', 'coa_name' => 'Piutang Lain-Lain', 'position' => 'debit', 'description' => 'Other receivables', 'status' => true, 'cost_id' => 3],

            // Persediaan Barang
            ['category_id' => 5, 'coa_id' => null, 'code' => 'PB001', 'coa_name' => 'Alat Tulis Kantor', 'position' => 'debit', 'description' => 'Office stationery', 'status' => true, 'cost_id' => 4],
            ['category_id' => 5, 'coa_id' => null, 'code' => 'PB002', 'coa_name' => 'Buku', 'position' => 'debit', 'description' => 'Books', 'status' => true, 'cost_id' => 4],
            ['category_id' => 5, 'coa_id' => null, 'code' => 'PB003', 'coa_name' => 'Seragam', 'position' => 'debit', 'description' => 'Uniforms', 'status' => true, 'cost_id' => 4],

            // Biaya Dibayar Dimuka
            ['category_id' => 6, 'coa_id' => null, 'code' => 'BD001', 'coa_name' => 'Asuransi Dibayar Dimuka', 'position' => 'debit', 'description' => 'Prepaid insurance', 'status' => true, 'cost_id' => 5],
            ['category_id' => 6, 'coa_id' => null, 'code' => 'BD002', 'coa_name' => 'Sewa Gedung Dibayar Dimuka', 'position' => 'debit', 'description' => 'Prepaid building rent', 'status' => true, 'cost_id' => 5],

            // Aset Tetap (Fixed Assets)
            ['category_id' => 7, 'coa_id' => null, 'code' => 'AT001', 'coa_name' => 'Tanah', 'position' => 'debit', 'description' => 'Land', 'status' => true, 'cost_id' => 6],
            ['category_id' => 7, 'coa_id' => null, 'code' => 'AT002', 'coa_name' => 'Bangunan', 'position' => 'debit', 'description' => 'Building', 'status' => true, 'cost_id' => 6],
            ['category_id' => 7, 'coa_id' => null, 'code' => 'AT003', 'coa_name' => 'Kendaraan', 'position' => 'debit', 'description' => 'Vehicles', 'status' => true, 'cost_id' => 6],
            ['category_id' => 7, 'coa_id' => null, 'code' => 'AT004', 'coa_name' => 'Peralatan Kantor', 'position' => 'debit', 'description' => 'Office equipment', 'status' => true, 'cost_id' => 6],
            ['category_id' => 7, 'coa_id' => null, 'code' => 'AT005', 'coa_name' => 'Peralatan Teknologi', 'position' => 'debit', 'description' => 'Technology equipment', 'status' => true, 'cost_id' => 7],

            // Akumulasi Penyusutan
            ['category_id' => 8, 'coa_id' => null, 'code' => 'AP001', 'coa_name' => 'Akumulasi Penyusutan Bangunan', 'position' => 'credit', 'description' => 'Accumulated depreciation of buildings', 'status' => true, 'cost_id' => 6],
            ['category_id' => 8, 'coa_id' => null, 'code' => 'AP002', 'coa_name' => 'Akumulasi Penyusutan Kendaraan', 'position' => 'credit', 'description' => 'Accumulated depreciation of vehicles', 'status' => true, 'cost_id' => 6],
            ['category_id' => 8, 'coa_id' => null, 'code' => 'AP003', 'coa_name' => 'Akumulasi Penyusutan Peralatan Kantor', 'position' => 'credit', 'description' => 'Accumulated depreciation of office equipment', 'status' => true, 'cost_id' => 6],
            ['category_id' => 8, 'coa_id' => null, 'code' => 'AP004', 'coa_name' => 'Akumulasi Penyusutan Peralatan Teknologi', 'position' => 'credit', 'description' => 'Accumulated depreciation of technology equipment', 'status' => true, 'cost_id' => 7],

            // Aset Tidak Berwujud (Intangible Assets)
            ['category_id' => 9, 'coa_id' => null, 'code' => 'ATB001', 'coa_name' => 'Hak Cipta', 'position' => 'debit', 'description' => 'Copyright', 'status' => true, 'cost_id' => 5],
            ['category_id' => 9, 'coa_id' => null, 'code' => 'ATB002', 'coa_name' => 'Goodwill', 'position' => 'debit', 'description' => 'Goodwill', 'status' => true, 'cost_id' => 5],
            ['category_id' => 9, 'coa_id' => null, 'code' => 'ATB003', 'coa_name' => 'Lisensi Perangkat Lunak', 'position' => 'debit', 'description' => 'Software license', 'status' => true, 'cost_id' => 5],

            // KEWAJIBAN (LIABILITIES)
            ['category_id' => 10, 'coa_id' => null, 'code' => 'KW001', 'coa_name' => 'Utang Usaha', 'position' => 'credit', 'description' => 'Trade payables', 'status' => true, 'cost_id' => 6],
            ['category_id' => 10, 'coa_id' => null, 'code' => 'KW002', 'coa_name' => 'Utang Pajak', 'position' => 'credit', 'description' => 'Tax payables', 'status' => true, 'cost_id' => 6],

            // Kewajiban Lancar (Current Liabilities)
            ['category_id' => 11, 'coa_id' => null, 'code' => 'KL001', 'coa_name' => 'Utang Bank', 'position' => 'credit', 'description' => 'Bank loan', 'status' => true, 'cost_id' => 6],
            ['category_id' => 11, 'coa_id' => null, 'code' => 'KL002', 'coa_name' => 'Utang Sewa', 'position' => 'credit', 'description' => 'Lease liabilities', 'status' => true, 'cost_id' => 7],

            // Ekuitas (Equity)
            ['category_id' => 12, 'coa_id' => null, 'code' => 'EK001', 'coa_name' => 'Modal Saham', 'position' => 'credit', 'description' => 'Share capital', 'status' => true, 'cost_id' => 7],
            ['category_id' => 12, 'coa_id' => null, 'code' => 'EK002', 'coa_name' => 'Laba Ditahan', 'position' => 'credit', 'description' => 'Retained earnings', 'status' => true, 'cost_id' => 7],
        ];

        DB::table('finance_chart_of_account')->insert($accounts);

    }
}
