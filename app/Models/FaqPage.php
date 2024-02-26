<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class FaqPage extends Model implements Sortable
{
    use SortableTrait;
    use SoftDeletes;

    protected $fillable = ['title'];

    public function faqGroup(): BelongsTo
    {
        return $this->belongsTo(FaqGroup::class);
    }
    public function faqSections(): HasMany
    {
        return $this->hasMany(FaqSection::class);
    }

    public function buildSortQuery()
    {
        return static::query()->where('faq_group_id', $this->faq_group_id);
    }
}
