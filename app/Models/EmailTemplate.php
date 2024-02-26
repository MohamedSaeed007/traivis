<?php

namespace App\Models;

class EmailTemplate extends Model
{
    protected $fillable = [
        'title',
        'key',
        'from',
        'to',
        'subject',
        'email_body',
        'is_show',
        'created_by',
        'required_data',
    ];

    protected $casts = [
        'required_data' => 'array'
    ];
    public $timestamps = true;
}