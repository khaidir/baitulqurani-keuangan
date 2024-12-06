<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FinanceJurnalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Modal Awal (Initial Capital)
        DB::table('finance_jurnal')->insert([
            'user_id' => 1, // Set the user who created the entry
            'reference' => 'JURNAL-001',
            'uuid' => (string) Str::uuid(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $jurnalId = DB::getPdo()->lastInsertId(); // Get the last inserted jurnal ID

        DB::table('finance_jurnal_detail')->insert([
            ['jurnal_id' => $jurnalId, 'coa_id' => 11, 'amount' => 1000000, 'description' => 'Modal Awal', 'created_at' => now(), 'updated_at' => now()],
            ['jurnal_id' => $jurnalId, 'coa_id' => 1, 'amount' => 1000000, 'description' => 'Modal Awal', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Penerimaan SPP (Tuition Fee Income)
        DB::table('finance_jurnal')->insert([
            'user_id' => 1,
            'reference' => 'JURNAL-002',
            'uuid' => (string) Str::uuid(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $jurnalId = DB::getPdo()->lastInsertId();

        DB::table('finance_jurnal_detail')->insert([
            ['jurnal_id' => $jurnalId, 'coa_id' => 13, 'amount' => 500000, 'description' => 'Pendapatan SPP', 'created_at' => now(), 'updated_at' => now()],
            ['jurnal_id' => $jurnalId, 'coa_id' => 1, 'amount' => 500000, 'description' => 'Penerimaan SPP', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Pembayaran Gaji (Salary Payment)
        DB::table('finance_jurnal')->insert([
            'user_id' => 1,
            'reference' => 'JURNAL-003',
            'uuid' => (string) Str::uuid(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $jurnalId = DB::getPdo()->lastInsertId();

        DB::table('finance_jurnal_detail')->insert([
            ['jurnal_id' => $jurnalId, 'coa_id' => 19, 'amount' => 300000, 'description' => 'Gaji Guru', 'created_at' => now(), 'updated_at' => now()],
            ['jurnal_id' => $jurnalId, 'coa_id' => 20, 'amount' => 200000, 'description' => 'Gaji Staf Administrasi', 'created_at' => now(), 'updated_at' => now()],
            ['jurnal_id' => $jurnalId, 'coa_id' => 2, 'amount' => 500000, 'description' => 'Pembayaran Gaji', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Bayar Listrik (Electricity Payment)
        DB::table('finance_jurnal')->insert([
            'user_id' => 1,
            'reference' => 'JURNAL-004',
            'uuid' => (string) Str::uuid(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $jurnalId = DB::getPdo()->lastInsertId();

        DB::table('finance_jurnal_detail')->insert([
            ['jurnal_id' => $jurnalId, 'coa_id' => 16, 'amount' => 100000, 'description' => 'Beban Listrik', 'created_at' => now(), 'updated_at' => now()],
            ['jurnal_id' => $jurnalId, 'coa_id' => 2, 'amount' => 100000, 'description' => 'Pembayaran Listrik', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Bayar Pajak (Tax Payment)
        DB::table('finance_jurnal')->insert([
            'user_id' => 1,
            'reference' => 'JURNAL-005',
            'uuid' => (string) Str::uuid(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $jurnalId = DB::getPdo()->lastInsertId();

        DB::table('finance_jurnal_detail')->insert([
            ['jurnal_id' => $jurnalId, 'coa_id' => 21, 'amount' => 50000, 'description' => 'Beban Pajak Penghasilan', 'created_at' => now(), 'updated_at' => now()],
            ['jurnal_id' => $jurnalId, 'coa_id' => 2, 'amount' => 50000, 'description' => 'Pembayaran Pajak', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Utang Usaha (Accounts Payable)
        DB::table('finance_jurnal')->insert([
            'user_id' => 1,
            'reference' => 'JURNAL-006',
            'uuid' => (string) Str::uuid(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $jurnalId = DB::getPdo()->lastInsertId();

        DB::table('finance_jurnal_detail')->insert([
            ['jurnal_id' => $jurnalId, 'coa_id' => 8, 'amount' => 150000, 'description' => 'Utang Usaha', 'created_at' => now(), 'updated_at' => now()],
            ['jurnal_id' => $jurnalId, 'coa_id' => 2, 'amount' => 150000, 'description' => 'Pembayaran Utang Usaha', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Utang Bank (Bank Loan)
        DB::table('finance_jurnal')->insert([
            'user_id' => 1,
            'reference' => 'JURNAL-007',
            'uuid' => (string) Str::uuid(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $jurnalId = DB::getPdo()->lastInsertId();

        DB::table('finance_jurnal_detail')->insert([
            ['jurnal_id' => $jurnalId, 'coa_id' => 9, 'amount' => 200000, 'description' => 'Utang Bank', 'created_at' => now(), 'updated_at' => now()],
            ['jurnal_id' => $jurnalId, 'coa_id' => 2, 'amount' => 200000, 'description' => 'Pembayaran Utang Bank', 'created_at' => now(), 'updated_at' => now()],
        ]);

        // Utang Pajak (Tax Payable)
        DB::table('finance_jurnal')->insert([
            'user_id' => 1,
            'reference' => 'JURNAL-008',
            'uuid' => (string) Str::uuid(),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        $jurnalId = DB::getPdo()->lastInsertId();

        DB::table('finance_jurnal_detail')->insert([
            ['jurnal_id' => $jurnalId, 'coa_id' => 10, 'amount' => 30000, 'description' => 'Utang Pajak', 'created_at' => now(), 'updated_at' => now()],
            ['jurnal_id' => $jurnalId, 'coa_id' => 2, 'amount' => 30000, 'description' => 'Pembayaran Utang Pajak', 'created_at' => now(), 'updated_at' => now()],
        ]);

    }
}
