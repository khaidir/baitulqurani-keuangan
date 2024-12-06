<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FinanceChartOfAccountCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            // 1. ASET (ASSETS)
    ['category_id' => null, 'category' => 'ASET (ASSETS)', 'description' => 'Assets', 'status' => true],

    // 1.1 Aset Lancar (Current Assets)
    ['category_id' => 1, 'category' => 'Aset Lancar (Current Assets)', 'description' => 'Current assets', 'status' => true],

    // 1.1.1 Kas dan Setara Kas
    ['category_id' => 2, 'category' => 'Kas dan Setara Kas', 'description' => 'Cash and cash equivalents', 'status' => true],
    ['category_id' => 3, 'category' => 'Kas Kecil', 'description' => 'Petty cash', 'status' => true],
    ['category_id' => 3, 'category' => 'Rekening Bank', 'description' => 'Bank accounts', 'status' => true],
    ['category_id' => 3, 'category' => 'Deposito Berjangka', 'description' => 'Time deposits', 'status' => true],

    // 1.1.2 Piutang Usaha
    ['category_id' => 2, 'category' => 'Piutang Usaha', 'description' => 'Trade receivables', 'status' => true],
    ['category_id' => 4, 'category' => 'Piutang SPP', 'description' => 'Tuition receivables', 'status' => true],
    ['category_id' => 4, 'category' => 'Piutang Lain-Lain', 'description' => 'Other receivables', 'status' => true],

    // 1.1.3 Persediaan Barang
    ['category_id' => 2, 'category' => 'Persediaan Barang', 'description' => 'Inventory', 'status' => true],
    ['category_id' => 5, 'category' => 'Alat Tulis Kantor', 'description' => 'Office stationery', 'status' => true],
    ['category_id' => 5, 'category' => 'Buku', 'description' => 'Books', 'status' => true],
    ['category_id' => 5, 'category' => 'Seragam', 'description' => 'Uniforms', 'status' => true],

    // 1.1.4 Biaya Dibayar Dimuka
    ['category_id' => 2, 'category' => 'Biaya Dibayar Dimuka', 'description' => 'Prepaid expenses', 'status' => true],
    ['category_id' => 6, 'category' => 'Asuransi Dibayar Dimuka', 'description' => 'Prepaid insurance', 'status' => true],
    ['category_id' => 6, 'category' => 'Sewa Gedung Dibayar Dimuka', 'description' => 'Prepaid building rent', 'status' => true],

    // 1.2 Aset Tetap (Fixed Assets)
    ['category_id' => 7, 'category' => 'Aset Tetap (Fixed Assets)', 'description' => 'Fixed assets', 'status' => true],
    ['category_id' => 8, 'category' => 'Bangunan', 'description' => 'Buildings', 'status' => true],
    ['category_id' => 8, 'category' => 'Kendaraan', 'description' => 'Vehicles', 'status' => true],
    ['category_id' => 8, 'category' => 'Mesin', 'description' => 'Machinery', 'status' => true],

    // 1.3 Aset Tidak Berwujud (Intangible Assets)
    ['category_id' => 9, 'category' => 'Aset Tidak Berwujud (Intangible Assets)', 'description' => 'Intangible assets', 'status' => true],
    ['category_id' => 10, 'category' => 'Goodwill', 'description' => 'Goodwill', 'status' => true],
    ['category_id' => 10, 'category' => 'Hak Paten', 'description' => 'Patents', 'status' => true],

    // 2. KEWAJIBAN (LIABILITIES)
    ['category_id' => null, 'category' => 'KEWAJIBAN (LIABILITIES)', 'description' => 'Liabilities', 'status' => true],

    // 2.1 Kewajiban Lancar (Current Liabilities)
    ['category_id' => 7, 'category' => 'Kewajiban Lancar (Current Liabilities)', 'description' => 'Current liabilities', 'status' => true],

    // 2.1.1 Utang Usaha
    ['category_id' => 8, 'category' => 'Utang Usaha', 'description' => 'Trade payables', 'status' => true],
    ['category_id' => 8, 'category' => 'Utang Pajak', 'description' => 'Tax payables', 'status' => true],
    ['category_id' => 9, 'category' => 'Utang Pajak Penghasilan', 'description' => 'Income tax payables', 'status' => true],
    ['category_id' => 9, 'category' => 'Utang Pajak Pertambahan Nilai', 'description' => 'Value-added tax payables', 'status' => true],

    // 2.1.2 Pendapatan Diterima Dimuka
    ['category_id' => 8, 'category' => 'Pendapatan Diterima Dimuka', 'description' => 'Unearned revenue', 'status' => true],
    ['category_id' => 10, 'category' => 'Pendapatan SPP Diterima Dimuka', 'description' => 'Unearned tuition revenue', 'status' => true],
    ['category_id' => 10, 'category' => 'Pendapatan Asrama Diterima Dimuka', 'description' => 'Unearned dormitory revenue', 'status' => true],

    // 2.2 Kewajiban Jangka Panjang (Long-Term Liabilities)
    ['category_id' => 7, 'category' => 'Kewajiban Jangka Panjang (Long-Term Liabilities)', 'description' => 'Long-term liabilities', 'status' => true],
    ['category_id' => 11, 'category' => 'Utang Bank', 'description' => 'Bank loans', 'status' => true],
    ['category_id' => 11, 'category' => 'Obligasi', 'description' => 'Bonds', 'status' => true],
    ['category_id' => 11, 'category' => 'Pinjaman Jangka Panjang', 'description' => 'Long-term loans', 'status' => true],

    // 3. EKUITAS (EQUITY)
    ['category_id' => null, 'category' => 'EKUITAS (EQUITY)', 'description' => 'Equity', 'status' => true],

    // 3.1 Modal Pemilik
    ['category_id' => 12, 'category' => 'Modal Pemilik', 'description' => 'Owner’s equity', 'status' => true],

    // 3.2 Laba Ditahan
    ['category_id' => 13, 'category' => 'Laba Ditahan', 'description' => 'Retained earnings', 'status' => true],

    // 4. PENDAPATAN (REVENUE)
    ['category_id' => null, 'category' => 'PENDAPATAN (REVENUE)', 'description' => 'Revenue', 'status' => true],

    // 4.1 Pendapatan Operasional
    ['category_id' => 14, 'category' => 'Pendapatan Operasional', 'description' => 'Operating revenue', 'status' => true],
    ['category_id' => 15, 'category' => 'Penjualan Produk/Jasa', 'description' => 'Sales of goods/services', 'status' => true],

    // 4.2 Pendapatan Non-Operasional
    ['category_id' => 16, 'category' => 'Pendapatan Non-Operasional', 'description' => 'Non-operating revenue', 'status' => true],
    ['category_id' => 17, 'category' => 'Bunga', 'description' => 'Interest', 'status' => true],
    ['category_id' => 17, 'category' => 'Dividen', 'description' => 'Dividends', 'status' => true],

    // 5. BEBAN (EXPENSES)
    ['category_id' => null, 'category' => 'BEBAN (EXPENSES)', 'description' => 'Expenses', 'status' => true],

    // 5.1 Beban Operasional
    ['category_id' => 18, 'category' => 'Beban Operasional', 'description' => 'Operating expenses', 'status' => true],
    ['category_id' => 19, 'category' => 'Gaji', 'description' => 'Salaries', 'status' => true],
    ['category_id' => 19, 'category' => 'Sewa', 'description' => 'Rent', 'status' => true],

    // 5.2 Beban Non-Operasional
    ['category_id' => 20, 'category' => 'Beban Non-Operasional', 'description' => 'Non-operating expenses', 'status' => true],
    ['category_id' => 21, 'category' => 'Bunga Pinjaman', 'description' => 'Loan interest', 'status' => true],
    ['category_id' => 21, 'category' => 'Kerugian Penjualan Aset', 'description' => 'Loss on asset sales', 'status' => true],

        ];

        // Insert categories into database
        DB::table('finance_chart_of_account_category')->insert($categories);
    }
}
