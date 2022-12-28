<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Sheets3 extends Model
{
    use LogsActivity;
    protected $table = 'sheets3';
    protected $fillable = [
        'orgnameAddress1', 'orgdateFrom1', 'orgdateTo1','orgnumHours1','orgPosition1',
        'orgnameAddress2', 'orgdateFrom2', 'orgdateTo2','orgnumHours2','orgPosition2',
        'orgnameAddress3', 'orgdateFrom3', 'orgdateTo3','orgnumHours3','orgPosition3',
        'orgnameAddress4', 'orgdateFrom4', 'orgdateTo4','orgnumHours4','orgPosition4',
        'orgnameAddress5', 'orgdateFrom5', 'orgdateTo5','orgnumHours5','orgPosition5',
        'orgnameAddress6', 'orgdateFrom6', 'orgdateTo6','orgnumHours6','orgPosition6',
        'orgnameAddress7', 'orgdateFrom7', 'orgdateTo7','orgnumHours7','orgPosition7',
        'orgnameAddress8', 'orgdateFrom8', 'orgdateTo8','orgnumHours8', 'orgType8', 'orgnameSponsor8',
        'orgnameAddress9', 'orgdateFrom9', 'orgdateTo9','orgnumHours9', 'orgType9', 'orgnameSponsor9',
        'orgnameAddress10', 'orgdateFrom10', 'orgdateTo10','orgnumHours10', 'orgType10', 'orgnameSponsor10',
        'orgnameAddress11', 'orgdateFrom11', 'orgdateTo11','orgnumHours11', 'orgType11', 'orgnameSponsor11',
        'orgnameAddress12', 'orgdateFrom12', 'orgdateTo12','orgnumHours12', 'orgType12', 'orgnameSponsor12',
        'orgnameAddress13', 'orgdateFrom13', 'orgdateTo13','orgnumHours13', 'orgType13', 'orgnameSponsor13',
        'orgnameAddress14', 'orgdateFrom14', 'orgdateTo14','orgnumHours14', 'orgType14', 'orgnameSponsor14',
        'orgnameSkill1', 'orgnameDistinct1', 'orgnameMembership1',
        'orgnameSkill2', 'orgnameDistinct2', 'orgnameMembership2',
        'orgnameSkill3', 'orgnameDistinct3', 'orgnameMembership3',
        'orgnameSkill4', 'orgnameDistinct4', 'orgnameMembership4',
        'orgnameSkill5', 'orgnameDistinct5', 'orgnameMembership5',
        'orgnameSkill6', 'orgnameDistinct6', 'orgnameMembership6'
    ];

    protected static $logName = 'system';
    public function getDescriptionForEvent(string $eventName): string{
        return "A user has {$eventName} a form";
    }

}
