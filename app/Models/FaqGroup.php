<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class FaqGroup extends Model implements Sortable
{
    use SortableTrait;
    use SoftDeletes;

    protected $fillable = ['title'];

    public function faqPages(): HasMany
    {
        return $this->hasMany(FaqPage::class);
    }
}
