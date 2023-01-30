<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class C1answers extends Model
{
    use LogsActivity;
    protected $fillable = [

        'surname','firstname','midname','sex','c1answers', 'c2answers', 'c3answers', 'c4answers'

    ];
    protected static $logName = 'system';
    public function getDescriptionForEvent(string $eventName): string
    {
        return "A user has {$eventName} a form";
    }
}
