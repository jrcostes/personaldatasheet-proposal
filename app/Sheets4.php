<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Sheets4 extends Model
{
    use LogsActivity;
    protected $table = 'sheets4';
    protected $fillable = [
        '34a', '34b', '34adetails', '34bdetails', '35a', '35b', '35adetails', '35bdate', '35bcase', '36a', '36adetails',
        '37a', '37details', '38a', '38b', '38adetails', '38bdetails', '39a', '39details', '40a',
        '40b', '40c', '40adetails', '40bdetails', '40cdetails', '41name', '41address', '41contactno',
        '42name', '42address', '42contactno', '43name', '43address', '43contactno',
        '43idinsurancedate', '43idinsurranceplace'
    ];

    protected static $logName = 'system';
    public function getDescriptionForEvent(string $eventName): string{
        return "A user has {$eventName} a form";
    }

}
