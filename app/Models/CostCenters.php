<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CostCenters extends Model
{
    use HasFactory;

    protected $table = "finance_cost_center";

    protected $fillable = [
        'cost_name',
        'description',
        'status',
    ];
}
