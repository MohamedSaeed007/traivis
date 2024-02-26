<?php

namespace App\Models;

use App\Traits\HasCachedMedia;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media as BaseMedia;

class FaqSection extends Model implements HasMedia, Sortable
{
    use SortableTrait;
    use SoftDeletes;
    use InteractsWithMedia;
    use HasCachedMedia {
        HasCachedMedia::getMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMedia insteadof InteractsWithMedia;
        HasCachedMedia::getFirstMediaUrl insteadof InteractsWithMedia;
    }

    public static $q;
    private static $illegalCharacters = ['(', ')', '*', '+', '-', '<', '>', '@', '~'];
    protected $fillable = ['question', 'answer'];

    public static function search($term)
    {
        //remove illegal characters
        self::$q = str_ireplace(self::$illegalCharacters, '', $term);

        $searchString = array_filter(explode(' ', self::$q), fn($word) => !empty($word));

        $q_optimized = collect($searchString)
            ->map(function ($val) {
                return '+*' . $val . '*';
            })
            ->values()
            ->join(' ');

        $match = '`question`,`answer`';
        $against_mode = 'BOOLEAN';
        $query = self::query();
        $query->selectRaw("*,MATCH($match) AGAINST (? IN $against_mode MODE) as score", [$q_optimized]);
        $query->whereRaw("MATCH($match) AGAINST (? IN $against_mode MODE)", [$q_optimized]);
        $query->orderByDesc('score');
        return $query;
    }

    public function faqPage(): BelongsTo
    {
        return $this->belongsTo(FaqPage::class);
    }

    public function buildSortQuery()
    {
        return static::query()->where('faq_page_id', $this->faq_page_id);
    }

    public function registerMediaConversions(BaseMedia $media = null): void
    {
        $this->addMediaConversion('preview')
            ->performOnCollections('attachments')
            ->width(800)
            ->nonQueued();
    }
}
