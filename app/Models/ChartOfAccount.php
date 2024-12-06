<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartOfAccount extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'finance_chart_of_account';

    // Primary key
    protected $primaryKey = 'id';

    // Fillable columns
    protected $fillable = [
        'coa_id',
        'cost_id',
        'code',
        'coa_name',
        'position',
        'description',
        'status',
    ];

    // Cast attributes to specific data types
    protected $casts = [
        'status' => 'boolean',
    ];

    // Define relationships
    public function costCenter()
    {
        return $this->belongsTo(CostCenters::class, 'cost_id');
    }
}
