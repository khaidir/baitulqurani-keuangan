<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JournalDetail extends Model
{
    use HasFactory;

    protected $table = "finance_jurnal_detail";

    protected $fillable = [
        'cost_name',
        'description',
        'status',
    ];

    public function coa()
    {
        return $this->belongsTo(ChartOfAccount::class, 'coa_id');
    }

    public function jurnal()
    {
        return $this->belongsTo(Jurnal::class, 'jurnal_id');
    }
}
