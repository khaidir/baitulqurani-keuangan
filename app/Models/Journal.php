<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    use HasFactory;

    protected $table = "finance_jurnal";

    protected $fillable = [
        'cost_name',
        'description',
        'status',
    ];

    public function details()
    {
        return $this->hasMany(JournalDetail::class, 'jurnal_id');
    }
}
