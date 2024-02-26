<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Certification extends Model
{
    use HasFactory;

    protected $fillable = [
        ''
    ];
    protected $table = 'certifications';

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
