<?php

namespace App\Http\Controllers;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\App;
use App\Form;
use App\Sheets;
use App\Sheets2;
use App\Sheets3;
use App\Sheets4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

use function PHPSTORM_META\map;

class PostController extends Controller
{
    //storing functions
    public function c1form(Request $request){
        $request->all();

        Sheets::create($request->all());

        return redirect('/')
            ->with('success','Entry Saved');
    }

    public function c2form(Request $request){
        $request->all();

        Sheets2::create($request->all());

        return redirect('/')
            ->with('success','Entry Saved');
    }

    public function c3form(Request $request)
    {
        $request->all();

        Sheets3::create($request->all());

        return redirect('/')
            ->with('success','Entry Saved');
    }

    public function c4form(Request $request){

        $request->all();

        Sheets4::create($request->all());

        return redirect('/')
            ->with('success','Entry Saved');
    }

    public function policy()
    {
        return view('dpa');
    }

    public function submittal(Request $request){

        $request->validate([
            // C1 FORM DATA VALIDATION
            'civilOthers' => 'required_if:civilStatus,others',
            'surname' => 'required|max:64',
            'firstname' => 'required|max:64',
            'nameext' => 'max:64|nullable',
            'midname' => 'max:64|nullable',
            'birthdate' => 'required|before:18 years ago',
            'sex' => 'required',
            'placeofBirth' => 'required|max:64',
            'civilStatus' => 'required',
            'gsisno' => 'max:11|nullable',
            'pagibigno' => 'max:12|nullable',
            'philhealth' => 'max:12|nullable',
            'sssno' => 'max:9|nullable',
            'tinno' => 'max:12|nullable',
            'citizens' => 'required',
            'citizens2' => 'required',
            'country' => 'required_if:citizens2,by naturalization',
            'residentialhouse' => 'required|max:64',
            'residentialst' => 'required|max:64',
            'residentialsudv' => 'required|max:64',
            'residentialcity' => 'required|max:64',
            'residentialprv' => 'required|max:64',
            'residentialzip' => 'required|max:5',
            'permanenthouse' => 'max:64',
            'permanentst' => 'max:64',
            'permanentsubdv' => 'max:64',
            'permanentbrgy' => 'max:64',
            'permenentcity' => 'max:64',
            'permanentprv' => 'max:64',
            'permanentzip' => 'max:5',
            'telno' => 'max:11',
            'mobno' => 'max:11',
            'email' => 'email|max:64|nullable',
            'spousesn' => 'max:64',
            'spousefn' => 'max:64',
            'spousemn' => 'max:64',
            'spousenmext' => 'max:64',
            'spouseocc' => 'max:64',
            'spouseempadd' => 'max:64',
            'spousetel' => 'max:7',
            'fathersn' => 'max:64',
            'fatherfn' => 'max:64',
            'fathermn' => 'max:64',
            'fatherext' => 'max:64',
            'mothernm' => 'max:64',
            'mothersn' => 'max:64',
            'motherfn' => 'max:64',
            'mothermn' => 'max:64',
            'child0' => 'max:64',
            'birthchild0' => 'before:today|nullable',
            'child1' => 'max:64',
            'birthchild1' => 'before:today|nullable',
            'child2' => 'max:64',
            'birthchild2' => 'before:today|nullable',
            'child3' => 'max:64',
            'birthchild3' => 'before:today|nullable',
            'child4' => 'max:64',
            'birthchild4' => 'before:today|nullable',
            'child5' => 'max:64',
            'birthchild5' => 'before:today|nullable',
            'child6' => 'max:64',
            'birthchild6' => 'before:today|nullable',
            'child7' => 'max:64',
            'birthchild7' => 'before:today|nullable',
            'child8' => 'max:64',
            'birthchild8' => 'before:today|nullable',
            'child9' => 'max:64',
            'birthchild9' => 'before:today|nullable',
            'child10' => 'max:64',
            'birthchild10' => 'before:today|nullable',
            'child11' => 'max:64',
            'birthchild11' => 'before:today|nullable',
            'elemname' => 'max:64',
            'elemdeg' => 'max:64',
            //elemunitlevel
            'attendancefrom' => 'before:attendanceto|nullable',
            'attendanceto' => 'required_with:attendancefrom|after:attendanceto|nullable',
            //yeargradelem
            'scholarshipelem' => 'max:64',
            'hsname' => 'max:64',
            'hsdeg' => 'max:64',
            //hsnitlevel
            'attendancefromhs' => 'before:attendancetohs|nullable',
            'attendancetohs' => 'required_with:attendancefromhs|after:attendancefromhs|nullable',
            //yeargradhs
            'scholarshiphs' => 'max:64',
            'vocname' => 'max:64',
            'vocdeg' => 'max:64',
            //vocunitlevel
            'attendancefromvoc' => 'before:attendancetovoc|nullable',
            'attendancetovoc' => 'required_wuth:attendancefromvoc|after:attendancefromvoc|nullable',
            //yeargradvoc
            'scholarshipvoc' => 'max:64',
            'colname' => 'max:64',
            'coldeg' => 'max:64',
            //colunitlevel
            'attendancefromcol' => 'before:attendancetocol|nullable',
            'attendancetocol' => 'required_with:attendancefromcol|after:attendancefromcol|nullable',
            //yeargradcol
            'scholarshipcol' => 'max:64',
            'gradname' => 'max:64',
            'graddeg' => 'max:64',
            //gradunitlevel
            'attendnacefromgrad' => 'before:attendancetograd|nullable',
            'attendancetograd' => 'required_with:attendnacefromgrad|after:attendancefromgrad|nullable',
            //yeargrad
            'scholarshipgrad' => 'max:64',

            // C2 FORM DATA VALIDATION\
            'eligibility' => 'max:64|nullable',
            'rating' => 'numeric|min:0|max:100|nullable',
            'placeofexam' => 'max:64|nullable',
            'dateofexam' => 'before:today|nullable',
            'licenseno' => 'max:12|nullable',
            'validity' => 'required_with:licenseno|nullable',

            'eligibility2' => 'max:64|nullable',
            'rating2' => 'numeric|min:0|max:100|nullable',
            'placeofexam2' => 'max:64|nullable',
            'dateofexam2' => 'before:today|nullable',
            'licenseno2' => 'max:12|nullable',
            'validity2' => 'required_with:licenseno2|nullable',

            'eligibility3' => 'max:64|nullable',
            'rating3' => 'numeric|min:0|max:100|nullable',
            'placeofexam3' => 'max:64|nullable',
            'dateofexam3' => 'before:today|nullable',
            'licenseno3' => 'max:12|nullable',
            'validity3' => 'required_with:licenseno3|nullable',

            'eligibility4' => 'max:64|nullable',
            'rating4' => 'numeric|min:0|max:100|nullable',
            'placeofexam4' => 'max:64|nullable',
            'dateofexam4' => 'before:today|nullable',
            'licenseno4' => 'max:12|nullable',
            'validity4' => 'required_with:licenseno4|nullable',

            'eligibility5' => 'max:64|nullable',
            'rating5' => 'numeric|min:0|max:100|nullable',
            'placeofexam5' => 'max:64|nullable',
            'dateofexam5' => 'before:today|nullable',
            'licenseno5' => 'max:12|nullable',
            'validity5' => 'required_with:licenseno5|nullable',

            'eligibility6' => 'max:64|nullable',
            'rating6' => 'numeric|min:0|max:100|nullable',
            'placeofexam6' => 'max:64|nullable',
            'dateofexam6' => 'before:today|nullable',
            'licenseno6' => 'max:12|nullable',
            'validity6' => 'required_with:licenseno6|nullable',

            'eligibility7' => 'max:64|nullable',
            'rating7' => 'numeric|min:0|max:100|nullable',
            'placeofexam7' => 'max:64|nullable',
            'dateofexam7' => 'before:today|nullable',
            'licenseno7' => 'max:12|nullable',
            'validity7' => 'required_with:licenseno7|nullable',

            'datefrom' => 'before:dateto|nullable',
            'dateto' => 'required_with:datefrom|after:datefrom|nullable',
            'position' => 'max:64',
            'department' => 'max:64',
            //salary
            'paygrade' => 'max:64',
            'governmentserv'=> 'nullable',

            'datefrom2' => 'before:dateto2|nullable',
            'dateto2' => 'required_with:datefrom2|after:datefrom2|nullable',
            'position2' => 'max:64',
            'department2' => 'max:64',
            //salary2
            'paygrade2' => 'max:64',
            'governmentserv2'=> 'nullable',

            'datefrom3' => 'before:dateto3|nullable',
            'dateto3' => 'required_with:datefrom3|after:datefrom3|nullable',
            'position3' => 'max:64',
            'department3' => 'max:64',
            //salary3
            'paygrade3' => 'max:64',
            'governmentserv3'=> 'nullable',

            'datefrom4' => 'before:dateto4|nullable',
            'dateto4' => 'required_with:datefrom4|after:datefrom4|nullable',
            'position4' => 'max:64',
            'department4' => 'max:64',
            //salary4
            'paygrade4' => 'max:64',
            'governmentserv4'=> 'nullable',

            'datefrom5' => 'before:dateto5|nullable',
            'dateto5' => 'required_with:datefrom5|after:datefrom5|nullable',
            'position5' => 'max:64',
            'department5' => 'max:64',
            //salary5
            'paygrade5' => 'max:64',
            'governmentserv5'=> 'nullable',

            'datefrom6' => 'before:dateto6|nullable',
            'dateto6' => 'required_with:datefrom6|after:datefrom6|nullable',
            'position6' => 'max:64',
            'department6' => 'max:64',
            //salary6
            'paygrade6' => 'max:64',
            'governmentserv6'=> 'nullable',

            'datefrom7' => 'before:dateto7|nullable',
            'dateto7' => 'required_with:datefrom7|after:datefrom7|nullable',
            'position7' => 'max:64',
            'department7' => 'max:64',
            //salary7
            'paygrade7' => 'max:64',
            'governmentserv7'=> 'nullable',

            'datefrom8' => 'before:dateto8|nullable',
            'dateto8' => 'required_with:datefrom8|after:datefrom8|nullable',
            'position8' => 'max:64',
            'department8' => 'max:64',
            //salary8
            'paygrade8' => 'max:64',
            'governmentserv8'=> 'nullable',

            'datefrom9' => 'before:dateto9|nullable',
            'dateto9' => 'required_with:datefrom9|after:datefrom9|nullable',
            'position9' => 'max:64',
            'department9' => 'max:64',
            //salary9
            'paygrade9' => 'max:64',
            'governmentserv9'=> 'nullable',

            'datefrom10' => 'before:dateto10|nullable',
            'dateto10' => 'required_with:datefrom10|after:datefrom10|nullable',
            'position10' => 'max:64',
            'department10' => 'max:64',
            //salary10
            'paygrade10' => 'max:64',
            'governmentserv10'=> 'nullable',

            'datefrom11' => 'before:dateto11|nullable',
            'dateto11' => 'required_with:datefrom11|after:datefrom11|nullable',
            'position11' => 'max:64',
            'department11' => 'max:64',
            //salary11
            'paygrade11' => 'max:64',
            'governmentserv11'=> 'nullable',

            'datefrom12' => 'before:dateto12|nullable',
            'dateto12' => 'required_with:datefrom12|after:datefrom12|nullable',
            'position12' => 'max:64',
            'department12' => 'max:64',
            //salary12
            'paygrade12' => 'max:64',
            'governmentserv12'=> 'nullable',

            'datefrom13' => 'before:dateto13|nullable',
            'dateto13' => 'required_with:datefrom13|after:datefrom13|nullable',
            'position13' => 'max:64',
            'department13' => 'max:64',
            //salary13
            'paygrade13' => 'max:64',
            'governmentserv13'=> 'nullable',

            'datefrom14' => 'before:dateto14|nullable',
            'dateto14' => 'required_with:datefrom14|after:datefrom14|nullable',
            'position14' => 'max:64',
            'department14' => 'max:64',
            //salary14
            'paygrade14' => 'max:64',
            'governmentserv14'=> 'nullable',

            'datefrom15' => 'before:dateto15|nullable',
            'dateto15' => 'required_with:datefrom15|after:datefrom15|nullable',
            'position15' => 'max:64',
            'department15' => 'max:64',
            //salary15
            'paygrade15' => 'max:64',
            'governmentserv15'=> 'nullable',

            'datefrom16' => 'before:dateto16|nullable',
            'dateto16' => 'required_with:datefrom16|after:datefrom16|nullable',
            'position16' => 'max:64',
            'department16' => 'max:64',
            //salary16
            'paygrade16' => 'max:64',
            'governmentserv16'=> 'nullable',

            'datefrom17' => 'before:dateto17|nullable',
            'dateto17' => 'required_with:datefrom17|after:datefrom17|nullable',
            'position17' => 'max:64',
            'department17' => 'max:64',
            //salary17
            'paygrade17' => 'max:64',
            'governmentserv17'=> 'nullable',

            'datefrom18' => 'before:dateto18|nullable',
            'dateto18' => 'required_with:datefrom18|after:datefrom18|nullable',
            'position18' => 'max:64',
            'department18' => 'max:64',
            //salary18
            'paygrade18' => 'max:64',
            'governmentserv18'=> 'nullable',

            'datefrom19' => 'before:dateto19|nullable',
            'dateto19' => 'required_with:datefrom19|after:datefrom19|nullable',
            'position19' => 'max:64',
            'department19' => 'max:64',
            //salary19
            'paygrade19' => 'max:64',
            'governmentserv19'=> 'nullable',

            'datefrom20' => 'before:dateto20|nullable',
            'dateto20' => 'required_with:datefrom20|after:datefrom20|nullable',
            'position20' => 'max:64',
            'department20' => 'max:64',
            //salary20
            'paygrade20' => 'max:64',
            'governmentserv20'=> 'nullable',

            'datefrom21' => 'before:dateto21|nullable',
            'dateto21' => 'required_with:datefrom21|after:datefrom21|nullable',
            'position21' => 'max:64',
            'department21' => 'max:64',
            //salary21
            'paygrade21' => 'max:64',
            'governmentserv21'=> 'nullable',

            'datefrom22' => 'before:dateto22|nullable',
            'dateto22' => 'required_with:datefrom22|after:datefrom22|nullable',
            'position22' => 'max:64',
            'department22' => 'max:64',
            //salary22
            'paygrade22' => 'max:64',
            'governmentserv22'=> 'nullable',

            'datefrom23' => 'before:dateto23|nullable',
            'dateto23' => 'required_with:datefrom23|after:datefrom23|nullable',
            'position23' => 'max:64',
            'department23' => 'max:64',
            //salary23
            'paygrade23' => 'max:64',
            'governmentserv23'=> 'nullable',

            'datefrom24' => 'before:dateto24|nullable',
            'dateto24' => 'required_with:datefrom24|after:datefrom24|nullable',
            'position24' => 'max:64',
            'department24' => 'max:64',
            //salary24
            'paygrade24' => 'max:64',
            'governmentserv24'=> 'nullable',

            'datefrom25' => 'before:dateto25|nullable',
            'dateto25' => 'required_with:datefrom25|after:datefrom25|nullable',
            'position25' => 'max:64',
            'department25' => 'max:64',
            //salary25
            'paygrade25' => 'max:64',
            'governmentserv25'=> 'nullable',

            'datefrom26' => 'before:dateto26|nullable',
            'dateto26' => 'required_with:datefrom26|after:datefrom26|nullable',
            'position26' => 'max:64',
            'department26' => 'max:64',
            //salary26
            'paygrade26' => 'max:64',
            'governmentserv26'=> 'nullable',

            'datefrom27' => 'before:dateto27|nullable',
            'dateto27' => 'required_with:datefrom27|after:datefrom27|nullable',
            'position27' => 'max:64',
            'department27' => 'max:64',
            //salary27
            'paygrade27' => 'max:64',
            'governmentserv27'=> 'nullable',

            'datefrom28' => 'before:dateto28|nullable',
            'dateto28' => 'required_with:datefrom28|after:datefrom28|nullable',
            'position28' => 'max:64',
            'department28' => 'max:64',
            //salary28
            'paygrade28' => 'max:64',
            'governmentserv28'=> 'nullable',


            //C3 FORM DATA VALIDATION
            'orgnameAddress1' => 'max:128',
            'orgdateFrom1' => 'before:orgdateTo1|nullable',
            'orgdateTo1' => 'required_with:orgdateFrom1|after:orgdateFrom1|nullable',
            //orgnumHours1
            'orgPosition1' => 'max:64',

            'orgnameAddress2' => 'max:128',
            'orgdateFrom2' => 'before:orgdateTo2|nullable',
            'orgdateTo2' => 'required_with:orgdateFrom2|after:orgdateFrom2|nullable',
            //orgnumHours2
            'orgPosition2' => 'max:64',

            'orgnameAddress3' => 'max:128',
            'orgdateFrom3' => 'before:orgdateTo3|nullable',
            'orgdateTo3' => 'required_with:orgdateFrom3|after:orgdateFrom3|nullable',
            //orgnumHours3
            'orgPosition3' => 'max:64',

            'orgnameAddress4' => 'max:128',
            'orgdateFrom4' => 'before:orgdateTo4|nullable',
            'orgdateTo4' => 'required_with:orgdateFrom4|after:orgdateFrom4|nullable',
            //orgnumHours4
            'orgPosition4' => 'max:64',

            'orgnameAddress5' => 'max:128',
            'orgdateFrom5' => 'before:orgdateTo5|nullable',
            'orgdateTo5' => 'required_with:orgdateFrom5|after:orgdateFrom5|nullable',
            //orgnumHours5
            'orgPosition5' => 'max:64',

            'orgnameAddress6' => 'max:128',
            'orgdateFrom6' => 'before:orgdateTo6|nullable',
            'orgdateTo6' => 'required_with:orgdateFrom6|after:orgdateFrom6|nullable',
            //orgnumHours6
            'orgPosition6' => 'max:64',

            'orgnameAddress7' => 'max:128',
            'orgdateFrom7' => 'before:orgdateTo7|nullable',
            'orgdateTo7' => 'required_with:orgdateFrom7|after:orgdateFrom7|nullable',
            //orgnumHours7
            'orgPosition7' => 'max:64',

            'orgnameAddress8' => 'max:128',
            'orgdateFrom8' => 'before:orgdateTo8|nullable',
            'orgdateTo8' => 'required_with:orgdateFrom8|after:orgdateFrom8|nullable',
            //orgnumHours8
            'orgPosition8' => 'max:64',
            'orgType8' => 'max:64',
            'orgnameSponsor8' => 'max:64',

            'orgnameAddress9' => 'max:128',
            'orgdateFrom9' => 'before:orgdateTo9|nullable',
            'orgdateTo9' => 'required_with:orgdateFrom9|after:orgdateFrom9|nullable',
            //orgnumHours9
            'orgPosition9' => 'max:64',
            'orgType9' => 'max:64',
            'orgnameSponsor9' => 'max:64',

            'orgnameAddress10' => 'max:128',
            'orgdateFrom10' => 'before:orgdateTo10|nullable',
            'orgdateTo10' => 'required_with:orgdateFrom10|after:orgdateFrom10|nullable',
            //orgnumHours10
            'orgPosition10' => 'max:64',
            'orgType10' => 'max:64',
            'orgnameSponsor10' => 'max:64',

            'orgnameAddress11' => 'max:128',
            'orgdateFrom11' => 'before:orgdateTo11|nullable',
            'orgdateTo11' => 'required_with:orgdateFrom11|after:orgdateFrom11|nullable',
            //orgnumHours11
            'orgPosition11' => 'max:64',
            'orgType11' => 'max:64',
            'orgnameSponsor11' => 'max:64',

            'orgnameAddress12' => 'max:128',
            'orgdateFrom12' => 'before:orgdateTo12|nullable',
            'orgdateTo12' => 'required_with:orgdateFrom12|after:orgdateFrom12|nullable',
            //orgnumHours12
            'orgPosition12' => 'max:64',
            'orgType12' => 'max:64',
            'orgnameSponsor12' => 'max:64',

            'orgnameAddress13' => 'max:128',
            'orgdateFrom13' => 'before:orgdateTo13|nullable',
            'orgdateTo13' => 'required_with:orgdateFrom13|after:orgdateFrom13|nullable',
            //orgnumHours13
            'orgPosition13' => 'max:64',
            'orgType13' => 'max:64',
            'orgnameSponsor13' => 'max:64',

            'orgnameAddress14' => 'max:128',
            'orgdateFrom14' => 'before:orgdateTo14|nullable',
            'orgdateTo14' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours14
            'orgPosition14' => 'max:64',
            'orgType14' => 'max:64',
            'orgnameSponsor14' => 'max:64',

            'orgnameSkill1' => 'max:64',
            'orgnameDistinct1' => 'max:64',
            'orgnameMembership1' => 'max:64',

            'orgnameSkill2' => 'max:64',
            'orgnameDistinct2' => 'max:64',
            'orgnameMembership2' => 'max:64',

            'orgnameSkill3' => 'max:64',
            'orgnameDistinct3' => 'max:64',
            'orgnameMembership3' => 'max:64',

            'orgnameSkill4' => 'max:64',
            'orgnameDistinct4' => 'max:64',
            'orgnameMembership4' => 'max:64',

            'orgnameSkill5' => 'max:64',
            'orgnameDistinct5' => 'max:64',
            'orgnameMembership5' => 'max:64',

            'orgnameSkill6' => 'max:64',
            'orgnameDistinct6' => 'max:64',
            'orgnameMembership6' => 'max:64',


            //C4 FORM VALIDATION
            'b34details' => 'max:64',
            'a35details' => 'max:64',
            'b35details' => 'max:64',
            'b35case' => 'max:128',
            'a36details' => 'max:64',
            'a37details' => 'max:64',
            'a38details' => 'max:64',
            'b38details' => 'max:64',
            'a39details' => 'max:64',
            'a40details' => 'max:64',
            'b40details' => 'max:64',
            'c40details' => 'max:64',
            'name41' => 'max:128',
            'address41' => 'max:128',
            'contactno41' => 'max:11',
            'name42' => 'max:128',
            'address42' => 'max:128',
            'contactno42' => 'max:11',
            'name43' => 'max:128',
            'address43' => 'max:128',
            'contactno43' => 'max:11',
            'valid44' => 'max:16',
            'issuanceplace44' => 'max:64',
            'issuancedate44' => 'before:today|nullable'

        ]);
        // c1form request data
        $civilOthers = $request->civilothers;
        $surname = $request->surname;
        $firstname = $request->firstname;
        $firstnameext = $request->nameext;
        $midname = $request->midname;
        $birthdate = $request->birthdate;
        $sex = $request->sex;
        $placeofBirth = $request->placeofBirth;
        $civilStatus = $request->civilStatus;
        $height = $request->input('height');
        $weight = $request->input('weight');
        $bloodType = $request->bloodType;
        $gsisno = $request->gsisno;
        $pagibigno = $request->pagibigno;
        $philhealthno = $request->philhealthno;
        $sssno = $request->sssno;
        $tinno = $request->tinno;
        $agencyemp = $request->agencyemp;
        $citizens = $request->citizens;
        $dualcitizenType = $request->citizens2;
        $country = $request->country;
        $residentialhouse = $request->residentialhouse;
        $residentialst = $request->residentialst;
        $residentialsudv = $request->residentialsudv;
        $residentialbrgy = $request->residentialbrgy;
        $residentialcity = $request->residentialcity;
        $residentialprv = $request->residentialprv;
        $residentialzip = $request->residentialzip;
        $permanenthouse = $request->permanenthouse;
        $permanentst = $request->permanentst;
        $permanentsubdv = $request->permanentsubdv;
        $permanentbrgy = $request->permanentbrgy;
        $permanentcity = $request->permanentcity;
        $permanentprv = $request->permanentprv;
        $permanentzip = $request->permanentzip;
        $telno = $request->telno;
        $mobno = $request->mobno;
        $email = $request->email;
        $spousesn = $request->spousesn;
        $spousefn = $request->spousefn;
        $spousemn = $request->spousemn;
        $spousenmext = $request->spousenmext;
        $spouseocc = $request->spouseocc;
        $spouseemp = $request->spouseemp2;
        $spouseempadd = $request->spouseempadd;
        $spousetel = $request->spousetel;
        $fathersn = $request->fathersn;
        $fatherfn = $request->fatherfn;
        $fathermn = $request->fathermn;
        $fatherext = $request->fatherext;
        $mothernm = $request->mothernm;
        $mothersn = $request->mothersn;
        $motherfn = $request->motherfn;
        $mothermn = $request->mothermn;
        $child0 = $request->child0;
        $birthchild0 = $request->birthchild0;
        $child1 = $request->child1;
        $birthchild1 = $request->birthchild1;
        $child2 = $request->child2;
        $birthchild2 = $request->birthchild2;
        $child3 = $request->child;
        $birthchild3 = $request->birthchild3;
        $child4 = $request->child4;
        $birthchild4 = $request->birthchild4;
        $child5 = $request->child5;
        $birthchild5 = $request->birthchild5;
        $child6 = $request->child6;
        $birthchild6 = $request->birthchild6;
        $child7 = $request->child7;
        $birthchild7 = $request->birthchild7;
        $child8 = $request->child8;
        $birthchild8 = $request->birthchild8;
        $child9 = $request->child9;
        $birthchild9 = $request->birthchild9;
        $child10 = $request->child10;
        $birthchild10 = $request->birthchild10;
        $child11 = $request->child11;
        $birthchild11 = $request->birthchild11;
        $elemname = $request->elemname;
        $elemdeg = $request->elemdeg;
        $attendancefrom = $request->attendancefrom;
        $attendanceto = $request->attendanceto;
        $elemunitLevel = $request->input('elemunitLevel');
        $yeargradelem = $request->input('yeargradelem');
        $scholarshipelem = $request->scholarshipelem;
        $hsname = $request->hsname;
        $hsdeg = $request->hsdeg;
        $attendancefromhs = $request->attendancefromhs;
        $attendancetohs = $request->attendancetohs;
        $hsunitLevel = $request->input('hsunitLevel');
        $yeargradhs = $request->input('yeargradhs');
        $scholarshiphs = $request->scholarshiphs;
        $vocname = $request->vocname;
        $vocdeg = $request->vocdeg;
        $attendancefromvoc = $request->attendancefromvoc;
        $attendancetovoc = $request->attendancetovoc;
        $vocunitLevel = $request->input('vocunitLevel');
        $yeargradvoc = $request->input('yeargradvoc');
        $scholarshipvoc = $request->scholarshipvoc;
        $colname = $request->colname;
        $coldeg = $request->coldeg;
        $attendancefromcol = $request->attendancefromcol;
        $attendancetocol = $request->attendancetocol;
        $colunitLevel = $request->input('colunitLevel');
        $yeargradcol = $request->input('yeargradcol');
        $scholarshipcol = $request->scholarshipcol;
        $gradname = $request->gradname;
        $graddeg = $request->graddeg;
        $attendancefromgrad = $request->attendancefromgrad;
        $attendancetograd = $request->attendancetograd;
        $gradunitLevel = $request->input('gradunitLevel');
        $yeargrad = $request->input('yeargrad');
        $scholarshipgrad = $request->scholarshipgrad;
        $datacompactc1 = compact('surname', 'firstname', 'firstnameext','midname', 'birthdate','sex','placeofBirth','civilStatus','civilOthers','height','weight','bloodType','gsisno','pagibigno','philhealthno','sssno','tinno','agencyemp','citizens','dualcitizenType','country','residentialhouse','residentialst','residentialsudv','residentialbrgy','residentialcity','residentialprv','residentialzip','permanenthouse','permanentst','permanentsubdv','permanentbrgy','permanentcity','permanentprv','permanentzip','telno','mobno','email','spousesn','spousefn','spousemn','spousenmext','spouseocc','spouseemp','spouseempadd','spousetel','fathersn','fatherfn','fathermn','fatherext','mothernm','fatherext','mothernm','mothersn','motherfn','mothermn','child0','birthchild0','child1','birthchild1','child2','birthchild2','child3','birthchild3','child4','birthchild4','child5','birthchild5','child6','birthchild6','child7','birthchild7','child8','birthchild8','child9','birthchild9','child10','birthchild10','child11','birthchild11','elemname','elemdeg','attendancefrom','attendanceto','elemunitLevel','yeargradelem','scholarshipelem','hsname','hsdeg','attendancefromhs','attendancetohs','hsunitLevel','yeargradhs','scholarshiphs','vocname','vocdeg','attendancefromvoc','attendancetovoc','vocunitLevel','yeargradvoc','scholarshipvoc','colname','coldeg','attendancefromcol','attendancetocol','colunitLevel','yeargradcol','scholarshipcol','gradname','graddeg','attendancefromgrad','attendancetograd','gradunitLevel','yeargrad','scholarshipgrad');

        //c2 form data

        $eligibility = $request->eligibility;
        $rating = $request->rating;
        $dateofexam = $request->dateofexam;
        $placeofexam = $request->placeofexam;
        $licenseno = $request->licenseno;
        $validity = $request->validity;
        $datefrom = $request->datefrom;
        $dateto = $request->dateto;
        $position = $request->position;
        $department = $request->department;
        $salary = $request->input('salary');
        $paygrade = $request->paygrade;
        $appointment = $request->appointment;
        $governmentserv = $request->governmentserv;

        $eligibility2 = $request->eligibility2;
        $rating2 = $request->rating2;
        $dateofexam2 = $request->dateofexam2;
        $placeofexam2 = $request->placeofexam2;
        $licenseno2 = $request->licenseno2;
        $validity2 = $request->validity2;
        $eligibility3 = $request->eligibility3;
        $rating3 = $request->rating3;
        $dateofexam3 = $request->dateofexam3;
        $placeofexam3 = $request->placeofexam3;
        $licenseno3 = $request->licenseno3;
        $validity3 = $request->validity3;
        $eligibility4 = $request->eligibility4;
        $rating4 = $request->rating4;
        $dateofexam4 = $request->dateofexam4;
        $placeofexam4 = $request->placeofexam4;
        $licenseno4 = $request->licenseno4;
        $validity4 = $request->validity4;
        $eligibility5 = $request->eligibility5;
        $rating5 = $request->rating5;
        $dateofexam5 = $request->dateofexam5;
        $placeofexam5 = $request->placeofexam5;
        $licenseno5 = $request->licenseno5;
        $validity5 = $request->validity5;
        $eligibility6 = $request->eligibility6;
        $rating6 = $request->rating6;
        $dateofexam6 = $request->dateofexam6;
        $placeofexam6 = $request->placeofexam6;
        $licenseno6 = $request->licenseno6;
        $validity6 = $request->validity6;
        $eligibility7 = $request->eligibility7;
        $rating7 = $request->rating7;
        $dateofexam7 = $request->dateofexam7;
        $placeofexam7 = $request->placeofexam7;
        $licenseno7 = $request->licenseno7;
        $validity7 = $request->validity7;
        $datefrom2 = $request->datefrom2;
        $dateto2 = $request->dateto2;
        $position2 = $request->position2;
        $department2 = $request->department2;
        $salary2 = $request->input('salary2');
        $paygrade2 = $request->paygrade2;
        $appointment2 = $request->appointment2;
        $governmentserv2 = $request->governmentserv2;

        $datefrom3 = $request->datefrom3;
        $dateto3 = $request->dateto3;
        $position3 = $request->position3;
        $department3 = $request->department3;
        $salary3 = $request->input('salary3');
        $paygrade3 = $request->paygrade3;
        $appointment3 = $request->appointment3;
        $governmentserv3 = $request->governmentserv3;
        $datefrom4 = $request->datefrom4;
        $dateto4 = $request->dateto4;
        $position4 = $request->position4;
        $department4 = $request->department4;
        $salary4 = $request->input('salary4');
        $paygrade4 = $request->paygrade4;
        $appointment4 = $request->appointment4;
        $governmentserv4 = $request->governmentserv4;
        $datefrom5 = $request->datefrom5;
        $dateto5 = $request->dateto5;
        $position5 = $request->position5;
        $department5 = $request->department5;
        $salary5 = $request->input('salary5');
        $paygrade5 = $request->paygrade5;
        $appointment5 = $request->appointment5;
        $governmentserv5 = $request->governmentserv5;
        $datefrom6 = $request->datefrom6;
        $dateto6 = $request->dateto6;
        $position6 = $request->position6;
        $department6 = $request->department6;
        $salary6 = $request->input('salary6');
        $paygrade6 = $request->paygrade6;
        $appointment6 = $request->appointment6;
        $governmentserv6 = $request->governmentserv6;
        $datefrom7 = $request->datefrom7;
        $dateto7 = $request->dateto7;
        $position7 = $request->position7;
        $department7 = $request->department7;
        $salary7 = $request->input('salary7');
        $paygrade7 = $request->paygrade7;
        $appointment7 = $request->appointment7;
        $governmentserv7 = $request->governmentserv7;
        $datefrom8 = $request->datefrom8;
        $dateto8 = $request->dateto8;
        $position8 = $request->position8;
        $department8 = $request->department8;
        $salary8 = $request->input('salary8');
        $paygrade8 = $request->paygrade8;
        $appointment8 = $request->appointment8;
        $governmentserv8 = $request->governmentserv8;

        $datefrom9 = $request->datefrom9;
        $dateto9 = $request->dateto9;
        $position9 = $request->position9;
        $department9 = $request->department9;
        $salary9 = $request->input('salary9');
        $paygrade9 = $request->paygrade9;
        $appointment9 = $request->appointment9;
        $governmentserv9 = $request->governmentserv9;
        $datefrom10 = $request->datefrom10;
        $dateto10 = $request->dateto10;
        $position10 = $request->position10;
        $department10 = $request->department10;
        $salary10 = $request->input('salary10');
        $paygrade10 = $request->paygrade10;
        $appointment10 = $request->appointment10;
        $governmentserv10 = $request->governmentserv10;
        $datefrom11 = $request->datefrom11;
        $dateto11 = $request->dateto11;
        $position11 = $request->position11;
        $department11 = $request->department11;
        $salary11 = $request->input('salary11');
        $paygrade11 = $request->paygrade11;
        $appointment11 = $request->appointment11;
        $governmentserv11 = $request->governmentserv11;
        $datefrom12 = $request->datefrom12;
        $dateto12 = $request->dateto12;
        $position12 = $request->position12;
        $department12 = $request->department12;
        $salary12 = $request->input('salary12');
        $paygrade12 = $request->paygrade12;
        $appointment12 = $request->appointment12;
        $governmentserv12 = $request->governmentserv12;
        $datefrom13 = $request->datefrom13;
        $dateto13 = $request->dateto13;
        $position13 = $request->position13;
        $department13 = $request->department13;
        $salary13 = $request->input('salary13');
        $paygrade13 = $request->paygrade13;
        $appointment13 = $request->appointment13;
        $governmentserv13 = $request->governmentserv13;
        $datefrom14 = $request->datefrom14;
        $dateto14 = $request->dateto14;
        $position14 = $request->position14;
        $department14 = $request->department14;
        $salary14 = $request->input('salary14');
        $paygrade14 = $request->paygrade14;
        $appointment14 = $request->appointment14;
        $governmentserv14 = $request->governmentserv14;

        $datefrom15 = $request->datefrom15;
        $dateto15 = $request->dateto15;
        $position15 = $request->position15;
        $department15 = $request->department15;
        $salary15 = $request->input('salary15');
        $paygrade15 = $request->paygrade15;
        $appointment15 = $request->appointment15;
        $governmentserv15 = $request->governmentserv15;
        $datefrom16 = $request->datefrom16;
        $dateto16 = $request->dateto16;
        $position16 = $request->position16;
        $department16 = $request->department16;
        $salary16 = $request->input('salary16');
        $paygrade16 = $request->paygrade16;
        $appointment16 = $request->appointment16;
        $governmentserv16 = $request->governmentserv16;
        $datefrom17 = $request->datefrom17;
        $dateto17 = $request->dateto17;
        $position17 = $request->position17;
        $department17 = $request->department17;
        $salary17 = $request->input('salary17');
        $paygrade17 = $request->paygrade17;
        $appointment17 = $request->appointment17;
        $governmentserv17 = $request->governmentserv17;
        $datefrom18 = $request->datefrom18;
        $dateto18 = $request->dateto18;
        $position18 = $request->position18;
        $department18 = $request->department18;
        $salary18 = $request->input('salary18');
        $paygrade18 = $request->paygrade18;
        $appointment18 = $request->appointment18;
        $governmentserv18 = $request->governmentserv18;
        $datefrom19 = $request->datefrom19;
        $dateto19 = $request->dateto19;
        $position19 = $request->position19;
        $department19 = $request->department19;
        $salary19 = $request->input('salary19');
        $paygrade19 = $request->paygrade19;
        $appointment19 = $request->appointment19;
        $governmentserv19 = $request->governmentserv19;
        $datefrom20 = $request->datefrom20;
        $dateto20 = $request->dateto20;
        $position20 = $request->position20;
        $department20 = $request->department20;
        $salary20 = $request->input('salary20');
        $paygrade20 = $request->paygrade20;
        $appointment20 = $request->appointment20;
        $governmentserv20 = $request->governmentserv20;

        $datefrom21 = $request->datefrom21;
        $dateto21 = $request->dateto21;
        $position21 = $request->position21;
        $department21 = $request->department21;
        $salary21 = $request->input('salary21');
        $paygrade21 = $request->paygrade21;
        $appointment21 = $request->appointment21;
        $governmentserv21 = $request->governmentserv21;
        $datefrom22 = $request->datefrom22;
        $dateto22 = $request->dateto22;
        $position22 = $request->position22;
        $department22 = $request->department22;
        $salary22 = $request->input('salary22');
        $paygrade22 = $request->paygrade22;
        $appointment22 = $request->appointment22;
        $governmentserv22 = $request->governmentserv22;
        $datefrom23 = $request->datefrom23;
        $dateto23 = $request->dateto23;
        $position23 = $request->position23;
        $department23 = $request->department23;
        $salary23 = $request->input('salary23');
        $paygrade23 = $request->paygrade23;
        $appointment23 = $request->appointment23;
        $governmentserv23 = $request->governmentserv23;
        $datefrom24 = $request->datefrom24;
        $dateto24 = $request->dateto24;
        $position24 = $request->position24;
        $department24 = $request->department24;
        $salary24 = $request->input('salary24');
        $paygrade24 = $request->paygrade24;
        $appointment24 = $request->appointment24;
        $governmentserv24 = $request->governmentserv24;
        $datefrom25 = $request->datefrom25;
        $dateto25 = $request->dateto25;
        $position25 = $request->position25;
        $department25 = $request->department25;
        $salary25 = $request->input('salary25');
        $paygrade25 = $request->paygrade25;
        $appointment25 = $request->appointment25;
        $governmentserv25 = $request->governmentserv25;
        $datefrom26 = $request->datefrom26;
        $dateto26 = $request->dateto26;
        $position26 = $request->position26;
        $department26 = $request->department26;
        $salary26 = $request->input('salary26');
        $paygrade26 = $request->paygrade26;
        $appointment26 = $request->appointment26;
        $governmentserv26 = $request->governmentserv26;
        $datefrom27 = $request->datefrom27;
        $dateto27 = $request->dateto27;
        $position27 = $request->position27;
        $department27 = $request->department27;
        $salary27 = $request->input('salary27');
        $paygrade27 = $request->paygrade27;
        $appointment27 = $request->appointment27;
        $governmentserv27 = $request->governmentserv27;
        $datefrom28 = $request->datefrom28;
        $dateto28 = $request->dateto28;
        $position28 = $request->position28;
        $department28 = $request->department28;
        $salary28 = $request->input('salary28');
        $paygrade28 = $request->paygrade28;
        $appointment28 = $request->appointment28;
        $governmentserv28 = $request->governmentserv28;

        $datacompactc2 = compact('eligibility',  'rating', 'dateofexam', 'placeofexam', 'licenseno', 'validity', 'datefrom', 'dateto', 'position', 'department', 'salary', 'paygrade', 'appointment',
        'eligibility2', 'rating2', 'dateofexam2', 'placeofexam2', 'licenseno2', 'validity2', 'datefrom2', 'dateto2', 'position2', 'department2', 'salary2', 'paygrade2', 'appointment2',
        'eligibility3', 'rating3', 'dateofexam3', 'placeofexam3', 'licenseno3', 'validity3', 'datefrom3', 'dateto3', 'position3', 'department3', 'salary3', 'paygrade3', 'appointment3',
        'eligibility4', 'rating4', 'dateofexam4', 'placeofexam4', 'licenseno4', 'validity4', 'datefrom4', 'dateto4', 'position4', 'department4', 'salary4', 'paygrade4', 'appointment4',
        'eligibility5', 'rating5', 'dateofexam5', 'placeofexam5', 'licenseno5', 'validity5', 'datefrom5', 'dateto5', 'position5', 'department5', 'salary5', 'paygrade5', 'appointment5',
        'eligibility6', 'rating6', 'dateofexam6', 'placeofexam6', 'licenseno6', 'validity6', 'datefrom6', 'dateto6', 'position6', 'department6', 'salary6', 'paygrade6', 'appointment6',
        'eligibility7', 'rating7', 'dateofexam7', 'placeofexam7', 'licenseno7', 'validity7', 'datefrom7', 'dateto7', 'position7', 'department7', 'salary7', 'paygrade7', 'appointment7',
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
        'datefrom28', 'dateto28', 'position28', 'department28', 'salary28','paygrade28', 'appointment28', 'governmentserv28');

        // c3 form data
        $orgnameAddress1 = $request->orgnameAddess1;
        $orgdateFrom1 = $request->orgdateFrom1;
        $orgdateTo1 = $request->orgdateTo1;
        $orgnumHours1 = $request->input('orgnumHours1');
        $orgPosition1 = $request->orgPosition1;

        $orgnameAddress2 = $request->orgnameAddess2;
        $orgdateFrom2 = $request->orgdateFrom2;
        $orgdateTo2 = $request->orgdateTo2;
        $orgnumHours2 = $request->input('orgnumHours2');
        $orgPosition2 = $request->orgPosition2;

        $orgnameAddress3 = $request->orgnameAddess3;
        $orgdateFrom3 = $request->orgdateFrom3;
        $orgdateTo3 = $request->orgdateTo3;
        $orgnumHours3 = $request->input('orgnumHours3');
        $orgPosition3 = $request->orgPosition3;

        $orgnameAddress4 = $request->orgnameAddess4;
        $orgdateFrom4 = $request->orgdateFrom4;
        $orgdateTo4 = $request->orgdateTo4;
        $orgnumHours4 = $request->input('orgnumHours4');
        $orgPosition4 = $request->orgPosition4;

        $orgnameAddress5 = $request->orgnameAddess5;
        $orgdateFrom5 = $request->orgdateFrom5;
        $orgdateTo5 = $request->orgdateTo5;
        $orgnumHours5 = $request->input('orgnumHours5');
        $orgPosition5 = $request->orgPosition5;

        $orgnameAddress6 = $request->orgnameAddess6;
        $orgdateFrom6 = $request->orgdateFrom6;
        $orgdateTo6 = $request->orgdateTo6;
        $orgnumHours6 = $request->input('orgnumHours6');
        $orgPosition6 = $request->orgPosition6;

        $orgnameAddress7 = $request->orgnameAddess7;
        $orgdateFrom7 = $request->orgdateFrom7;
        $orgdateTo7 = $request->orgdateTo7;
        $orgnumHours7 = $request->input('orgnumHours7');
        $orgPosition7 = $request->orgPosition7;

        $orgnameAddress8 = $request->orgnameAddress8;
        $orgdateFrom8 = $request->orgdateFrom8;
        $orgdateTo8 = $request->orgdateTo8;
        $orgnumHours8 = $request->input('orgnumHours8');
        $orgType8 = $request->orgType8;
        $orgnameSponsor8 = $request->orgnameSponsor8;

        $orgnameAddress9 = $request->orgnameAddress9;
        $orgdateFrom9 = $request->orgdateFrom9;
        $orgdateTo9 = $request->orgdateTo9;
        $orgnumHours9 = $request->input('orgnumHours9');
        $orgType9 = $request->orgType9;
        $orgnameSponsor9 = $request->orgnameSponsor9;

        $orgnameAddress10 = $request->orgnameAddress10;
        $orgdateFrom10 = $request->orgdateFrom10;
        $orgdateTo10 = $request->orgdateTo10;
        $orgnumHours10 = $request->input('orgnumHours10');
        $orgType10 = $request->orgType10;
        $orgnameSponsor10 = $request->orgnameSponsor10;

        $orgnameAddress11 = $request->orgnameAddress11;
        $orgdateFrom11 = $request->orgdateFrom11;
        $orgdateTo11 = $request->orgdateTo11;
        $orgnumHours11 = $request->input('orgnumHours11');
        $orgType11 = $request->orgType11;
        $orgnameSponsor11 = $request->orgnameSponsor11;

        $orgnameAddress12 = $request->orgnameAddress12;
        $orgdateFrom12 = $request->orgdateFrom12;
        $orgdateTo12 = $request->orgdateTo12;
        $orgnumHours12 = $request->input('orgnumHours12');
        $orgType12 = $request->orgType12;
        $orgnameSponsor12 = $request->orgnameSponsor12;

        $orgnameAddress13 = $request->orgnameAddress13;
        $orgdateFrom13 = $request->orgdateFrom13;
        $orgdateTo13 = $request->orgdateTo13;
        $orgnumHours13 = $request->input('orgnumHours13');
        $orgType13 = $request->orgType13;
        $orgnameSponsor13 = $request->orgnameSponsor13;

        $orgnameAddress14 = $request->orgnameAddress14;
        $orgdateFrom14 = $request->orgdateFrom14;
        $orgdateTo14 = $request->orgdateTo14;
        $orgnumHours14 = $request->input('orgnumHours14');
        $orgType14 = $request->orgType14;
        $orgnameSponsor14 = $request->orgnameSponsor14;

        $orgnameSkill1 = $request->orgnameSkill1;
        $orgnameDistinct1 = $request->orgnameDistinct1;
        $orgnameMembership1 = $request->orgnameMembership1;

        $orgnameSkill2 = $request->orgnameSkill2;
        $orgnameDistinct2 = $request->orgnameDistinct2;
        $orgnameMembership2 = $request->orgnameMembership2;

        $orgnameSkill3 = $request->orgnameSkill3;
        $orgnameDistinct3 = $request->orgnameDistinct3;
        $orgnameMembership3 = $request->orgnameMembership3;

        $orgnameSkill4 = $request->orgnameSkill4;
        $orgnameDistinct4 = $request->orgnameDistinct4;
        $orgnameMembership4 = $request->orgnameMembership4;

        $orgnameSkill5 = $request->orgnameSkill5;
        $orgnameDistinct5 = $request->orgnameDistinct5;
        $orgnameMembership5 = $request->orgnameMembership5;

        $orgnameSkill6 = $request->orgnameSkill6;
        $orgnameDistinct6 = $request->orgnameDistinct6;
        $orgnameMembership6 = $request->orgnameMembership6;

        $datacompactc3 = compact('orgnameAddress1', 'orgdateFrom1', 'orgdateTo1','orgnumHours1','orgPosition1',
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
        'orgnameSkill6', 'orgnameDistinct6', 'orgnameMembership6');

        $a34 = $request->input('34a');
        $b34 = $request->input('34b');
        $detailsb34 = $request->b34details;
        $a35 = $request->input('35a');
        $details35a = $request->a35details;
        $b35 = $request->b35details;
        $b35date = $request->input('b35date');
        $b35case = $request->b35case;
        $a36 = $request->input('36a');
        $a36details = $request->a36details;
        $a37 = $request->input('37a');
        $a37details = $request->a37details;
        $a38 = $request->input('38a');
        $b38 = $request->input('38b');
        $a38details = $request->a38details;
        $a39 = $request->input('39a');
        $b38details = $request->b38details;
        $a39details = $request->a39details;
        $a40 = $request->input('40a');
        $a40details = $request->a40details;
        $b40 = $request->input('40b');
        $b40details = $request->b40details;
        $c40 = $request->input('40c');
        $c40details = $request->c40details;
        $name41 = $request->name41;
        $address41 = $request->address41;
        $contactno41 = $request->contactno41;
        $name42 = $request->name42;
        $address42 = $request->address42;
        $contactno42 = $request->contactno42;
        $name43 = $request->name43;
        $address43 = $request->address43;
        $contactno43 = $request->contactno43;
        $govid44 = $request->govid44;
        $valid44 = $request->valid44;
        $issuanceplace44 = $request->issuanceplace44;
        $issuancedate44 = $request->issuancedate44;

        $datacompactc4 = compact('a34', 'b34', 'detailsb34', 'a35', 'details35a', 'b35', 'b35date'
        , 'b35case', 'a36', 'a36details', 'a37', 'a37details', 'a38', 'a38details', 'b38', 'b38details', 'a39', 'a39details', 'a40',
        'a40details', 'b40', 'b40details', 'c40', 'c40details', 'name41', 'address41', 'contactno41', 'name42', 'address42', 'contactno42', 'name43', 'address43', 'contactno43', 'govid44', 'valid44', 'issuancedate44');

        Sheets::create($datacompactc1);
        Sheets2::create($datacompactc2);
        Sheets3::create($datacompactc3);
        Sheets4::create($datacompactc4);

        return redirect()->back()->with('message', 'done');

    }
}
