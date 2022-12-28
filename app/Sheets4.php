<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Sheets4 extends Model
{
    use LogsActivity;
    protected $table = 'sheets4';
    protected $fillable = [
        'a34', 'b34', 'detailsa34',  'detailsb34', 'a35', 'detailsa35', 'b35', 'b35date',
        'b35case', 'a36', 'a36details', 'a37', 'a38', 'b38', 'a38details','38bdetails',
        'a39', 'a39details', 'a40', 'a40details', 'b40', 'b40details', 'c40', 'c40details',
        'name41', 'address41', 'contactno41', 'name42', 'address42', 'contactno42', 'name43',
        'address43', 'contactno43', 'govid44', 'valid44', 'issuanceplace44', 'issuancedate44'
    ];

    protected static $logName = 'system';
    public function getDescriptionForEvent(string $eventName): string{
        return "A user has {$eventName} a form";
    }

}
