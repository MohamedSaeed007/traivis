<?php

namespace App\Models;

use App\Traits\HasCachedMedia;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class CertificateUser extends Model implements HasMedia
{
    use InteractsWithMedia;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }
    protected $table = 'certificate_user';
    protected $fillable = [
        'certificate_id',
        'user_id',
    ];

    public function certificate()
    {
        return $this->belongsTo(Certificate::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
