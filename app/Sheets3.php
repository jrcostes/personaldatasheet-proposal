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
        'orgnameAddress15', 'orgdateFrom15', 'orgdateTo15','orgnumHours15', 'orgType15', 'orgnameSponsor15',
        'orgnameAddress16', 'orgdateFrom16', 'orgdateTo16','orgnumHours16', 'orgType16', 'orgnameSponsor16',
        'orgnameAddress17', 'orgdateFrom17', 'orgdateTo17','orgnumHours17', 'orgType17', 'orgnameSponsor17',
        'orgnameAddress18', 'orgdateFrom18', 'orgdateTo18','orgnumHours18', 'orgType18', 'orgnameSponsor18',
        'orgnameAddress19', 'orgdateFrom19', 'orgdateTo19','orgnumHours19', 'orgType19', 'orgnameSponsor19',
        'orgnameAddress20', 'orgdateFrom20', 'orgdateTo20','orgnumHours20', 'orgType20', 'orgnameSponsor20',
        'orgnameAddress21', 'orgdateFrom21', 'orgdateTo21','orgnumHours21', 'orgType21', 'orgnameSponsor21',
        'orgnameAddress22', 'orgdateFrom22', 'orgdateTo22','orgnumHours22', 'orgType22', 'orgnameSponsor22',
        'orgnameAddress23', 'orgdateFrom23', 'orgdateTo23','orgnumHours23', 'orgType23', 'orgnameSponsor23',
        'orgnameAddress24', 'orgdateFrom24', 'orgdateTo24','orgnumHours24', 'orgType24', 'orgnameSponsor24',
        'orgnameAddress25', 'orgdateFrom25', 'orgdateTo25','orgnumHours25', 'orgType25', 'orgnameSponsor25',
        'orgnameAddress26', 'orgdateFrom26', 'orgdateTo26','orgnumHours26', 'orgType26', 'orgnameSponsor26',
        'orgnameAddress27', 'orgdateFrom27', 'orgdateTo27','orgnumHours27', 'orgType27', 'orgnameSponsor27',
        'orgnameAddress28', 'orgdateFrom28', 'orgdateTo28','orgnumHours28', 'orgType28', 'orgnameSponsor28',

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
