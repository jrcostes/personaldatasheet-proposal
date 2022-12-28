<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheets2 extends Model
{
    protected $table = 'sheets2';
    protected $fillable = [ 'eligibility',  'rating', 'dateofexam', 'placeofexam', 'license', 'licenseno', 'validity', 'datefrom', 'dateto', 'position', 'department', 'salary', 'paygrade', 'appointment', 'dateofvalidity',
    'eligibility2', 'rating2', 'dateofexam2', 'placeofexam2', 'license2', 'licenseno2', 'validity2', 'datefrom2', 'dateto2', 'position2', 'department2', 'salary2', 'paygrade2', 'appointment2', 'dateofvalidity2',
    'eligibility3', 'rating3', 'dateofexam3', 'placeofexam3', 'license3', 'licenseno3', 'validity3', 'datefrom3', 'dateto3', 'position3', 'department3', 'salary3', 'paygrade3', 'appointment3', 'dateofvalidity3',
    'eligibility4', 'rating4', 'dateofexam4', 'placeofexam4', 'license4', 'licenseno4', 'validity4', 'datefrom4', 'dateto4', 'position4', 'department4', 'salary4', 'paygrade4', 'appointment4', 'dateofvalidity4',
    'eligibility5', 'rating5', 'dateofexam5', 'placeofexam5', 'license5', 'licenseno5', 'validity5', 'datefrom5', 'dateto5', 'position5', 'department5', 'salary5', 'paygrade5', 'appointment5', 'dateofvalidity5',
    'eligibility6', 'rating5', 'dateofexam5', 'placeofexam5', 'license5', 'licenseno5', 'validity5', 'datefrom5', 'dateto5', 'position5', 'department5', 'salary5', 'paygrade5', 'appointment5', 'dateofvalidity5',
    'eligibility7', 'rating5', 'dateofexam5', 'placeofexam5', 'license5', 'licenseno5', 'validity5', 'datefrom5', 'dateto5', 'position5', 'department5', 'salary5', 'paygrade5', 'appointment5', 'dateofvalidity5',
    'datefrom8', 'dateto8', 'position8', 'department8', 'salary8','paygrade8', 'appointment8', 'governmentserv8',
    'datefrom9', 'dateto9', 'position9', 'department9', 'salary9','paygrade9', 'appointment9', 'governmentserv9',
    'datefrom10', 'dateto10', 'position10', 'department10', 'salary10','paygrade10', 'appointment10', 'governmentserv10',
    'datefrom11', 'dateto11', 'position11', 'department11', 'salary11','paygrade11', 'appointment11', 'governmentserv11',
    'datefrom12', 'dateto12', 'position12', 'department12', 'salary12','paygrade12', 'appointment12', 'governmentserv12',
    'datefrom13', 'dateto13', 'position13', 'department13', 'salary13','paygrade13', 'appointment13', 'governmentserv13',
    'datefrom14', 'dateto14', 'position14', 'department14', 'salary14','paygrade14', 'appointment14', 'governmentserv14',
    'datefrom15', 'dateto15', 'position15', 'department15', 'salary15','paygrade15', 'appointment15', 'governmentserv15',
    'datefrom16', 'dateto16', 'position16', 'department16', 'salary16','paygrade16', 'appointment16', 'governmentserv16',
    'datefrom17', 'dateto17', 'position17', 'department17', 'salary17','paygrade17', 'appointment17', 'governmentserv17',
    'datefrom18', 'dateto18', 'position18', 'department18', 'salary18','paygrade18', 'appointment18', 'governmentserv18',
    'datefrom19', 'dateto19', 'position19', 'department19', 'salary19','paygrade19', 'appointment19', 'governmentserv19',
    'datefrom20', 'dateto20', 'position20', 'department20', 'salary20','paygrade20', 'appointment20', 'governmentserv20',
    'datefrom21', 'dateto21', 'position21', 'department21', 'salary21','paygrade21', 'appointment21', 'governmentserv21',
    'datefrom22', 'dateto22', 'position22', 'department22', 'salary22','paygrade22', 'appointment22', 'governmentserv22',
    'datefrom23', 'dateto23', 'position23', 'department23', 'salary23','paygrade23', 'appointment23', 'governmentserv23',
    'datefrom24', 'dateto24', 'position24', 'department24', 'salary24','paygrade24', 'appointment24', 'governmentserv24',
    'datefrom25', 'dateto25', 'position25', 'department25', 'salary25','paygrade25', 'appointment25', 'governmentserv25',
    'datefrom26', 'dateto26', 'position26', 'department26', 'salary26','paygrade26', 'appointment26', 'governmentserv26',
    'datefrom27', 'dateto27', 'position27', 'department27', 'salary27','paygrade27', 'appointment27', 'governmentserv27',
    'datefrom28', 'dateto28', 'position28', 'department28', 'salary28','paygrade28', 'appointment28', 'governmentserv28'];

    protected static $logName = 'system';
    public function getDescriptionForEvent(string $eventName): string
    {
        return "A user has {$eventName} a form";
    }
}
