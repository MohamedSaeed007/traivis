<?php

namespace App\Models;

use App\Traits\HasCachedMedia;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\interactsWithMedia;

class AssignmentUserResponse extends Model implements HasMedia
{
    use interactsWithMedia;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }

    protected $fillable = ['assignment_user_id', 'responseable_type', 'responseable_id', 'notes'];

    public function assignmentUser(): BelongsTo
    {
        return $this->belongsTo(AssignmentUser::class);
    }

    public function responseable(): MorphTo
    {
        return $this->morphTo();
    }
}
