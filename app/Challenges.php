<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Challenges extends Model
{
    protected $table = 'challenges';

    protected $fillable = [
        'user_id', 'category_id', 'title', 'goal', 'tag', 'starting_at', 'be_notified_at', 'notification', 'private',
    ];
}
