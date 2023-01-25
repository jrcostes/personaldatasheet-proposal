<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Sheets extends Model
{
    use LogsActivity;
    protected $fillable = [
         'id','surname', 'firstname', 'firstnameext', 'midname', 'birthdate', 'sex','civilStatus','civilOthers',
         'placeofBirth', 'height', 'weight', 'bloodType','gsisno', 'pagibigno', 'philhealthno',
         'sssno', 'tinno', 'agencyemp', 'citizens','dualcitizenType', 'country', 'residentialhouse', 'residentialst',
         'residentialsudv', 'residentialcity', 'residentialbrgy', 'residentialprv', 'residentialzip',
         'permanenthouse', 'permanentst', 'permanentsubdv', 'permanentbrgy', 'permanentcity', 'permanentprv',
         'permanentzip', 'telno', 'mobno', 'email', 'spousesn', 'spousefn', 'spousenmext', 'spousemn',
         'spouseocc', 'spouseemp', 'spouseempadd', 'spousetel', 'fathersn', 'fatherfn', 'fatherext', 'fathermn',
         'mothersn', 'motherfn', 'motherext', 'mothermn', 'child0', 'birthchild0', 'child1', 'birthchild1',
         'child2', 'birthchild2', 'child3', 'birthchild3', 'child4', 'birthchild4','child5','birthchild5','child6',
         'birthchild6','child7','birthchild7','child8','birthchild8','child9','birthchild9','child10','birthchild10',
         'child11','birthchild11', 'elemname', 'elemdeg', 'attendancefrom', 'attendanceto','elemunitLevel', 'yeargradelem',
         'scholarshipelem', 'hsname', 'hsdeg', 'attendancefromhs', 'attendancetohs','hsunitLevel', 'yeargradhs',
        'scholarhiphs', 'vocname', 'vocdeg', 'attendancefromvoc', 'attendancetovoc','vocunitLevel', 'yeargradvoc',
        'scholarshipvoc', 'colname', 'coldeg', 'attendancefromcol', 'attendancetocol', 'colunitLevel', 'yeargradcol',
        'scholarshipcol', 'gradname', 'graddeg', 'attendancefromgrad', 'attendancetograd', 'gradunitLevel', 'yeargraddeg',
        'scholarshipgrad','yeargrad','yeargrad',

        'c1answers'

    ];
    protected static $logName = 'system';
    public function getDescriptionForEvent(string $eventName): string
    {
        return "A user has {$eventName} a form";
    }
}
