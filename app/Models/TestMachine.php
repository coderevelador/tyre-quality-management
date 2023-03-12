<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestMachine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'serial_no',
    ];

    public function GenerateReport()
    {
        return $this->belongsTo(GenerateReport::class);
    }
}
