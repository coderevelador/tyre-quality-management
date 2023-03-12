<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GenerateReportAis extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function TestMachine()
    {
        return $this->belongsTo(TestMachine::class, 'test_machine_details_id');
    }

    public function Applicant()
    {
        return $this->belongsTo(Applicant::class, 'applicant_id');
    }
}
