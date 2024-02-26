<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class FacebookApi extends Model
{
    use HasFactory;
    protected $fillable=[
        'actions',
        'admin_creator',
        'allowed_advertising_objectives',
        'application',
        'backdated_time',
        'call_to_action',
        'can_reply_privately',
        'child_attachments',
        'comments_mirroring_domain',
        'coordinates',
        'created_time',
        'event',
        'expanded_height',
        'expanded_width',
        'feed_targeting',
        'from',
        'full_picture',
        'height',
        'icon',
        'is_app_share',
        'is_eligible_for_promotion',
        'is_expired',
        'is_hidden',
        'is_inline_created',
        'is_popular',
        'is_published',

    ];
}
