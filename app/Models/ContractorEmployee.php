<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class ContractorEmployee extends Model
{
    use HasFactory;
    protected $table = 'contractor_employees';
    protected $fillable = ['contractor_id','employee_id','business_id'];


    public function contractor()
    {
        return $this->belongsTo(User::class);
    }
    public function employee()
    {
        return $this->belongsTo(User::class);
    }
    public function business()
    {
        return $this->belongsTo(Business::class);
    }
}
