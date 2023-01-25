<?php

namespace App\Http\Controllers;
use Barryvdh\Snappy\Facades\SnappyPdf as PDF;
use Illuminate\Support\Facades\App;
use App\Form;
use App\C1answers;
use App\Sheets2;
use App\Sheets3;
use App\Sheets4;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

use function PHPSTORM_META\map;

class PostController 
{
    //storing functions
    // public function c1form(Request $request){
    //     $request->all();

    //     Sheets::create($request->all());

    //     return redirect('/')
    //         ->with('success','Entry Saved');
    // }

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

        $data = $request->validate([
            //c1 corm data
            'civilOthers' => 'required_if:civilStatus,others',
            'surname' => 'required|max:64',
            'firstname' => 'required|max:64',
            'nameext' => 'max:5|nullable',
            'midname' => 'max:64|nullable',
            'birthdate' => 'required|before:18 years ago',
            'sex' => 'required',
            'placeofBirth' => 'required|max:64',
            'civilStatus' => 'required',
            'gsisno' => 'max:15|nullable',
            'pagibigno' => 'max:15|nullable',
            'philhealth' => 'max:15|nullable',
            'sssno' => 'max:15|nullable',
            'tinno' => 'max:15|nullable',
            'citizens' => 'required',
            'dualcitizenType' => 'required',
            'country' => 'required_if:dualcitizenType,by naturalization',
            'residentialhouse' => 'required|max:128',
            'residentialst' => 'required|max:128',
            'residentialsudv' => 'required|max:128',
            'residentialcity' => 'required|max:128',
            'residentialprv' => 'required|max:128',
            'residentialzip' => 'required|max:5',
            'permanenthouse' => 'max:128',
            'permanentst' => 'max:128',
            'permanentsubdv' => 'max:128',
            'permanentbrgy' => 'max:128',
            'permenentcity' => 'max:128',
            'permanentprv' => 'max:128',
            'permanentzip' => 'max:5',
            'telno' => 'max:9',
            'mobno' => 'max:12',
            'email' => 'email|max:64|nullable',
            'spousesn' => 'max:64',
            'spousefn' => 'max:64',
            'spousenmext' => 'max:5',
            'spousemn' => 'max:64', 
            'spouseocc' => 'max:64',
            'spouseempadd' => 'max:32',
            'spousetel' => 'max:9',
            'fathersn' => 'max:64',
            'fatherfn' => 'max:64',
            'fathermn' => 'max:64',
            'fatherext' => 'max:5',
            'mothernm' => 'max:64',
            'mothersn' => 'max:64',
            'motherfn' => 'max:64',
            'mothermn' => 'max:64',
            'child0' => 'max:128',
            'birthchild0' => 'before:today|nullable',
            'child1' => 'max:128',
            'birthchild1' => 'before:today|nullable',
            'child2' => 'max:128',
            'birthchild2' => 'before:today|nullable',
            'child3' => 'max:128',
            'birthchild3' => 'before:today|nullable',
            'child4' => 'max:128',
            'birthchild4' => 'before:today|nullable',
            'child5' => 'max:128',
            'birthchild5' => 'before:today|nullable',
            'child6' => 'max:128',
            'birthchild6' => 'before:today|nullable',
            'child7' => 'max:128',
            'birthchild7' => 'before:today|nullable',
            'child8' => 'max:128',
            'birthchild8' => 'before:today|nullable',
            'child9' => 'max:128',
            'birthchild9' => 'before:today|nullable',
            'child10' => 'max:128',
            'birthchild10' => 'before:today|nullable',
            'child11' => 'max:128',
            'birthchild11' => 'before:today|nullable',
            'elemname' => 'max:64',
            'elemdeg' => 'max:32',
            'elemunitLevel' => 'max:32',
            'yeargradelem' => 'max:32',
            //elemunitlevel
            'attendancefrom' => 'before:attendanceto|nullable',
            'attendanceto' => 'required_with:attendancefrom|after:attendancefrom|nullable',
            //yeargradelem
            'scholarshipelem' => 'max:64',
            'hsname' => 'max:64',
            'hsdeg' => 'max:32',
            //hsnitlevel
            'attendancefromhs' => 'before:attendancetohs|nullable',
            'attendancetohs' => 'required_with:attendancefromhs|after:attendancefromhs|nullable',
            //yeargradhs
            'scholarshiphs' => 'max:64',
            'vocname' => 'max:64',
            'vocdeg' => 'max:32',
            //vocunitlevel
            'vocunitLevel' => 'max:32',
            'attendancefromvoc' => 'before:attendancetovoc|nullable',
            'attendancetovoc' => 'required_with:attendancefromvoc|after:attendancefromvoc|nullable',
            //yeargradvoc
            'scholarshipvoc' => 'max:64',
            'colname' => 'max:64',
            'coldeg' => 'max:32',
            //colunitlevel
            'colunitLevel' => 'max:32',
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

            //c2 form data
            'eligibility' => 'max:64|nullable',
            'rating' => 'numeric|min:0|max:100|nullable',
            'placeofexam' => 'max:64|nullable',
            'dateofexam' => 'before:today|nullable',
            'licenseno' => 'max:15|nullable',
            'validity' => 'required_with:licenseno|nullable',

            'eligibility2' => 'max:64|nullable',
            'rating2' => 'numeric|min:0|max:100|nullable',
            'placeofexam2' => 'max:64|nullable',
            'dateofexam2' => 'before:today|nullable',
            'licenseno2' => 'max:15|nullable',
            'validity2' => 'required_with:licenseno2|nullable',

            'eligibility3' => 'max:64|nullable',
            'rating3' => 'numeric|min:0|max:100|nullable',
            'placeofexam3' => 'max:64|nullable',
            'dateofexam3' => 'before:today|nullable',
            'licenseno3' => 'max:15|nullable',
            'validity3' => 'required_with:licenseno3|nullable',

            'eligibility4' => 'max:64|nullable',
            'rating4' => 'numeric|min:0|max:100|nullable',
            'placeofexam4' => 'max:64|nullable',
            'dateofexam4' => 'before:today|nullable',
            'licenseno4' => 'max:15|nullable',
            'validity4' => 'required_with:licenseno4|nullable',

            'eligibility5' => 'max:64|nullable',
            'rating5' => 'numeric|min:0|max:100|nullable',
            'placeofexam5' => 'max:64|nullable',
            'dateofexam5' => 'before:today|nullable',
            'licenseno5' => 'max:15|nullable',
            'validity5' => 'required_with:licenseno5|nullable',

            'eligibility6' => 'max:64|nullable',
            'rating6' => 'numeric|min:0|max:100|nullable',
            'placeofexam6' => 'max:64|nullable',
            'dateofexam6' => 'before:today|nullable',
            'licenseno6' => 'max:15|nullable',
            'validity6' => 'required_with:licenseno6|nullable',

            'eligibility7' => 'max:64|nullable',
            'rating7' => 'numeric|min:0|max:100|nullable',
            'placeofexam7' => 'max:64|nullable',
            'dateofexam7' => 'before:today|nullable',
            'licenseno7' => 'max:15|nullable',
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

            //c3 form data
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

            'orgnameAddress15' => 'max:128',
            'orgdateFrom15' => 'before:orgdateTo14|nullable',
            'orgdateTo15' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours15
            'orgPosition15' => 'max:64',
            'orgType15' => 'max:64',
            'orgnameSponsor15' => 'max:64',

            'orgnameAddress16' => 'max:128',
            'orgdateFrom16' => 'before:orgdateTo14|nullable',
            'orgdateTo16' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours16
            'orgPosition16' => 'max:64',
            'orgType16' => 'max:64',
            'orgnameSponsor16' => 'max:64',

            'orgnameAddress17' => 'max:128',
            'orgdateFrom17' => 'before:orgdateTo14|nullable',
            'orgdateTo17' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours17
            'orgPosition17' => 'max:64',
            'orgType17' => 'max:64',
            'orgnameSponsor17' => 'max:64',

            'orgnameAddress18' => 'max:128',
            'orgdateFrom18' => 'before:orgdateTo14|nullable',
            'orgdateTo18' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours18
            'orgPosition18' => 'max:64',
            'orgType18' => 'max:64',
            'orgnameSponsor18' => 'max:64',

            'orgnameAddress19' => 'max:128',
            'orgdateFrom19' => 'before:orgdateTo14|nullable',
            'orgdateTo19' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours19
            'orgPosition19' => 'max:64',
            'orgType19' => 'max:64',
            'orgnameSponsor19' => 'max:64',

            'orgnameAddress20' => 'max:128',
            'orgdateFrom20' => 'before:orgdateTo14|nullable',
            'orgdateTo20' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours20
            'orgPosition20' => 'max:64',
            'orgType20' => 'max:64',
            'orgnameSponsor20' => 'max:64',

            'orgnameAddress21' => 'max:128',
            'orgdateFrom21' => 'before:orgdateTo14|nullable',
            'orgdateTo21' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours21
            'orgPosition21' => 'max:64',
            'orgType21' => 'max:64',
            'orgnameSponsor21' => 'max:64',

            'orgnameAddress22' => 'max:128',
            'orgdateFrom22' => 'before:orgdateTo14|nullable',
            'orgdateTo22' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours22
            'orgPosition22' => 'max:64',
            'orgType22' => 'max:64',
            'orgnameSponsor22' => 'max:64',

            'orgnameAddress23' => 'max:128',
            'orgdateFrom23' => 'before:orgdateTo14|nullable',
            'orgdateTo23' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours23
            'orgPosition23' => 'max:64',
            'orgType23' => 'max:64',
            'orgnameSponsor23' => 'max:64',

            'orgnameAddress24' => 'max:128',
            'orgdateFrom24' => 'before:orgdateTo14|nullable',
            'orgdateTo24' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours24
            'orgPosition24' => 'max:64',
            'orgType24' => 'max:64',
            'orgnameSponsor24' => 'max:64',

            'orgnameAddress25' => 'max:128',
            'orgdateFrom25' => 'before:orgdateTo14|nullable',
            'orgdateTo25' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours25
            'orgPosition25' => 'max:64',
            'orgType25' => 'max:64',
            'orgnameSponsor25' => 'max:64',

            'orgnameAddress26' => 'max:128',
            'orgdateFrom26' => 'before:orgdateTo14|nullable',
            'orgdateTo26' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours26
            'orgPosition26' => 'max:64',
            'orgType26' => 'max:64',
            'orgnameSponsor26' => 'max:64',

            'orgnameAddress27' => 'max:128',
            'orgdateFrom27' => 'before:orgdateTo14|nullable',
            'orgdateTo27' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours27
            'orgPosition27' => 'max:64',
            'orgType27' => 'max:64',
            'orgnameSponsor27' => 'max:64',

            'orgnameAddress28' => 'max:128',
            'orgdateFrom28' => 'before:orgdateTo14|nullable',
            'orgdateTo28' => 'required_with:orgdateFrom14|after:orgdateFrom14|nullable',
            //orgnumHours28
            'orgPosition28' => 'max:64',
            'orgType28' => 'max:64',
            'orgnameSponsor28' => 'max:64',

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

        $newForm = new C1answers();

        $c1answers = [
            'surname' => $data['surname'] ?? null,
            'firstname' => $data['firstname'] ?? null,
            'firstnameext' => $data['nameext'] ?? null,
            'midname' => $data['midname'] ?? null,
            'birthdate' => $data['birthdate'] ?? null,
            'sex' => $data['sex'] ?? null,
            'placeBirth' => $data['placeofBirth'] ?? null,
            'civilStataus' => $data['civilStatus'] ?? null,
            'height' => $data['height'] ?? null,
            'weight' => $data['weight'] ?? null,
            'bloodType' => $data['bloodType'] ?? null,
            'gsisno' => $data['gsisno'] ?? null,
            'pagibigno' => $data['pagibigno'] ?? null,
            'philhealthno' => $data['philhealthno'] ?? null,
            'sssno' => $data['ssno'] ?? null,
            'tinno' => $data['tinno'] ?? null,
            'agencyemp' => $data['agencyemp'] ?? null,
            'citizens' => $data['citizens'] ?? null,
            'dualcitizensType' => $data['citizens2'] ?? null,
            'country' => $data['country'] ?? null,
            'residentialhouse' => $data['residentialhouse'] ?? null,
            'residentialst' => $data['residentialst'] ?? null,
            'residentialsudv' => $data['residentialsudv'] ?? null,
            'residentialbrgy' => $data['residentialbrgy'] ?? null,
            'residentialcity' => $data['residentialcity'] ?? null,
            'residentialprv' => $data['reisdentialprv'] ?? null,
            'residentialzip' => $data['residentialzip'] ?? null,
            'permanenthouse' => $data['permanenthouse'] ?? null,
            'permanentst' => $data['permanentst'] ?? null,
            'permanentsubdv' => $data['permanentstsubdv'] ?? null,
            'permanentbrgy' => $data['permanentbrgy'] ?? null,
            'permanentcity' => $data['permanentcity'] ?? null,
            'permanentprv' => $data['permanentprv'] ?? null,
            'permanentzip' => $data['permanentzip'] ?? null,
            'telno' => $data['telno'] ?? null,
            'mobno' => $data['mobno'] ?? null,
            'email' => $data['email'] ?? null,
            'spousesn' => $data['spousesn'] ?? null,
            'spousefn' => $data['spousefn'] ?? null,
            'spousemn' => $data['spousemn'] ?? null,
            'spousenmext' => $data['spousenmext'] ?? null,
            'spouseocc' => $data['spouseocc'] ?? null,
            'spouseemp' => $data['spouseemp'] ?? null,
            'spousetel' => $data['spousetel'] ?? null,
            'fathersn' => $data['fathersn'] ?? null,
            'fatherfn' => $data['fatherfn'] ?? null,
            'fathermn' => $data['fathermn'] ?? null,
            'fatherext' => $data['fatherext'] ?? null,
            'mothernm' => $data['mothernm'] ?? null,
            'mothersn' => $data['mothersn'] ?? null,
            'motherfn' => $data['motherfn'] ?? null,
            'mothermn' => $data['mothermn'] ?? null,
            'child0' => $data['child0'] ?? null,
            'birthchild' => $data['birthchild0'] ?? null,
            'child1' => $data['child1'] ?? null,
            'birthchild1' => $data['birthchild1'] ?? null,
            'child2' => $data['child2'] ?? null,
            'birthchild2' => $data['birthchild2'] ?? null,
            'child3' => $data['child3'] ?? null,
            'birthchild3' => $data['birthchild3'] ?? null,
            'child4' => $data['child4'] ?? null,
            'birthchild4' => $data['birthchild4'] ?? null,
            'child5' => $data['child5'] ?? null,
            'birthchild5' => $data['birthchild5'] ?? null,
            'child6' => $data['child6'] ?? null,
            'birthchild6' => $data['birthchild6'] ?? null,
            'child7' => $data['child7'] ?? null,
            'birthchild7' => $data['birthchild7'] ?? null,
            'child8' => $data['child8'] ?? null,
            'birthchild8' => $data['birthchild8'] ?? null,
            'child9' => $data['child9'] ?? null,
            'birthchild9' => $data['birthchild9'] ?? null,
            'child10' => $data['child10'] ?? null,
            'birthchild10' => $data['birthchild10'] ?? null,
            'child11' => $data['child11'] ?? null,
            'birthchild11' => $data['birthchild11'] ?? null,
            'elemname' => $data['elemname'] ?? null,
            'elemdeg' => $data['elemdeg'] ?? null,
            'attendancefrom' => $data['attendancefrom'] ?? null,
            'attendanceto' => $data['attendanceto'] ?? null,
            'elemunitLevel' => $data['elemunitLevel'] ?? null,
            'yeargradelem' => $data['yeargradelem'] ?? null,
            'scholarshipelem' => $data['scholarshipelem'] ?? null,
            'hsname' => $data['hsname'] ?? null,
            'hsdeg' => $data['hsdeg'] ?? null,
            'hsunitLevel' => $data['hsunitLevel'] ?? null,
            'attendancefromhs' => $data['attendancefromhs'] ?? null,
            'attendancetohs' => $data['attendancetohs'] ?? null,
            'yeargradhs' => $data['yeargradhs'] ?? null,
            'scholarshiphs' => $data['scholarshiphs'] ?? null,
            'vocname' => $data['vocname'] ?? null,
            'vocdeg' => $data['vocdeg'] ?? null,
            'vocunitLevel' => $data['vocunitLevel'] ?? null,
            'attendancefromvoc' => $data['attendancefromvoc'] ?? null,
            'attendancetovoc' => $data['attendancetovoc'] ?? null,
            'yeargradvoc' => $data['yeargradvoc'] ?? null,
            'scholarshipvoc' => $data['scholarshipvoc'] ?? null,
            'colname' => $data['colname'] ?? null,
            'coldeg' => $data['coldeg'] ?? null,
            'colunitLevel' => $data['colunitLevel'] ?? null,
            'attendncefromcol' => $data['attendancefromcol'] ?? null,
            'attendancetocol' => $data['attendancetocol'] ?? null,
            'scholarshipcol' => $data['scholarshipcol'] ?? null,
            'gradname' => $data['gradname'] ?? null,
            'graddeg' => $data['graddeg'] ?? null,
            'gradunitLevel' => $data['gradunitLevel'] ?? null,
            'attendancefromgrad' => $data['attendancefromgrad'] ?? null,
            'attendancetograd' => $data['attendancetograd'] ?? null,
            'yeargrad' => $data['yeargrad'] ?? null,
            'scholarshipgrad' => $data['scholarshipgrad'] ?? null
        ];
        $c2answers = [
            'eligibility' => $data['eligibility'] ?? null,
            'rating' => $data['rating'] ?? null,
            'dateofexam' => $data['dateofexam'] ?? null,
            'placeofexam' => $data['placeofexam'] ?? null,
            'licenseno' => $data['licenseno'] ?? null,
            'validity' => $data['validity'] ?? null,

            'eligibility2' => $data['eligibility2'] ?? null,
            'rating2' => $data['rating2'] ?? null,
            'dateofexam2' => $data['dateofexam2'] ?? null,
            'placeofexam2' => $data['placeofexam2'] ?? null,
            'licenseno2' => $data['licenseno2'] ?? null,
            'validity2' => $data['validity2'] ?? null,

            'eligibility3' => $data['eligibility3'] ?? null,
            'rating3' => $data['rating3'] ?? null,
            'dateofexam3' => $data['dateofexam3'] ?? null,
            'placeofexam3' => $data['placeofexam3'] ?? null,
            'licenseno3' => $data['licenseno3'] ?? null,
            'validity3' => $data['validity3'] ?? null,

            'eligibility4' => $data['eligibility4'] ?? null,
            'rating4' => $data['rating4'] ?? null,
            'dateofexam4' => $data['dateofexam4'] ?? null,
            'placeofexam4' => $data['placeofexam4'] ?? null,
            'licenseno4' => $data['licenseno4'] ?? null,
            'validity4' => $data['validity4'] ?? null,

            'eligibility5' => $data['eligibility5'] ?? null,
            'rating5' => $data['rating5'] ?? null,
            'dateofexam5' => $data['dateofexam5'] ?? null,
            'placeofexam5' => $data['placeofexam5'] ?? null,
            'licenseno5' => $data['licenseno5'] ?? null,
            'validity5' => $data['validity5'] ?? null,

            'eligibility6' => $data['eligibility6'] ?? null,
            'rating6' => $data['rating6'] ?? null,
            'dateofexam6' => $data['dateofexam6'] ?? null,
            'placeofexam6' => $data['placeofexam6'] ?? null,
            'licenseno6' => $data['licensen6'] ?? null,
            'validity6' => $data['validity6'] ?? null,

            'eligibility7' => $data['eligibility7'] ?? null,
            'rating7' => $data['rating7'] ?? null,
            'dateofexam7' => $data['dateofexam7'] ?? null,
            'placeofexam7' => $data['placeofexam7'] ?? null,
            'licenseno7' => $data['licensen7'] ?? null,
            'validity7' => $data['validity7'] ?? null,

            'datefrom' => $data['datefrom'] ?? null,
            'dateto' => $data['dateto'] ?? null,
            'position' => $data['position'] ?? null,
            'department' => $data['department'] ?? null,
            'salary' => $request->input('salary') ?? null,
            'paygrade' => $data['paygrade'] ?? null,
            'appointment' => $data['appointment'] ?? null,
            'governmentserv' =>  $data['governmentserv'] ?? null,

            'datefrom2' => $data['datefrom2'] ?? null,
            'dateto2' => $data['dateto2'] ?? null,
            'position2' => $data['position2'] ?? null,
            'department2' => $data['department2'] ?? null,
            'salary2' => $request->input('salary2') ?? null,
            'paygrade2' => $data['paygrade2'] ?? null,
            'appointment2' => $data['appointment2'] ?? null,
            'governmentserv2' =>  $data['governmentserv2'] ?? null,

            'datefrom3' => $data['datefrom3'] ?? null,
            'dateto3' => $data['dateto3'] ?? null,
            'position3' => $data['position3'] ?? null,
            'department3' => $data['department3'] ?? null,
            'salary3' => $request->input('salary3') ?? null,
            'paygrade3' => $data['paygrade3'] ?? null,
            'appointment3' => $data['appointment'] ?? null,
            'governmentserv3' =>  $data['governmentserv3'] ?? null,

            'datefrom4' => $data['datefrom4'] ?? null,
            'dateto4' => $data['dateto4'] ?? null,
            'position4' => $data['position4'] ?? null,
            'department4' => $data['department4'] ?? null,
            'salary4' => $request->input('salary4') ?? null,
            'paygrade4' => $data['paygrade4'] ?? null,
            'appointment4' => $data['appointment4'] ?? null,
            'governmentserv4' =>  $data['governmentserv4'] ?? null,

            'datefrom5' => $data['datefrom5'] ?? null,
            'dateto5' => $data['dateto5'] ?? null,
            'position5' => $data['position5'] ?? null,
            'department5' => $data['department5'] ?? null,
            'salary5' => $request->input('salary5') ?? null,
            'paygrade5' => $data['paygrade5'] ?? null,
            'appointment5' => $data['appointment5'] ?? null,
            'governmentserv5' =>  $data['governmentserv5'] ?? null,

            'datefrom6' => $data['datefrom6'] ?? null,
            'dateto6' => $data['dateto6'] ?? null,
            'position6' => $data['position6'] ?? null,
            'department6' => $data['department6'] ?? null,
            'salary6' => $request->input('salary6') ?? null,
            'paygrade6' => $data['paygrade6'] ?? null,
            'appointment6' => $data['appointment6'] ?? null,
            'governmentserv6' =>  $data['governmentserv6'] ?? null,

            'datefrom7' => $data['datefrom7'] ?? null,
            'dateto7' => $data['dateto7'] ?? null,
            'position7' => $data['position7'] ?? null,
            'department7' => $data['department7'] ?? null,
            'salary7' => $request->input('salary7') ?? null,
            'paygrade7' => $data['paygrade7'] ?? null,
            'appointment7' => $data['appointment7'] ?? null,
            'governmentserv7' =>  $data['governmentserv7'] ?? null,

            'datefrom8' => $data['datefrom8'] ?? null,
            'dateto8' => $data['dateto8'] ?? null,
            'position8' => $data['position8'] ?? null,
            'department8' => $data['department8'] ?? null,
            'salary8' => $request->input('salary8') ?? null,
            'paygrade8' => $data['paygrade8'] ?? null,
            'appointment8' => $data['appointment8'] ?? null,
            'governmentserv8' =>  $data['governmentserv8'] ?? null,

            'datefrom9' => $data['datefrom9'] ?? null,
            'dateto9' => $data['dateto9'] ?? null,
            'position9' => $data['position9'] ?? null,
            'department9' => $data['department9'] ?? null,
            'salary9' => $request->input('salary9') ?? null,
            'paygrade9' => $data['paygrade9'] ?? null,
            'appointment9' => $data['appointment9'] ?? null,
            'governmentserv9' =>  $data['governmentserv9'] ?? null,

            'datefrom10' => $data['datefrom10'] ?? null,
            'dateto10' => $data['dateto10'] ?? null,
            'position10' => $data['position10'] ?? null,
            'department10' => $data['department10'] ?? null,
            'salary10' => $request->input('salary10') ?? null,
            'paygrade10' => $data['paygrade10'] ?? null,
            'appointment10' => $data['appointment10'] ?? null,
            'governmentserv10' =>  $data['governmentserv10'] ?? null,

            'datefrom11' => $data['datefrom11'] ?? null,
            'dateto11' => $data['dateto11'] ?? null,
            'position11' => $data['position11'] ?? null,
            'department11' => $data['department11'] ?? null,
            'salary11' => $request->input('salary11') ?? null,
            'paygrade11' => $data['paygrade11'] ?? null,
            'appointment11' => $data['appointment11'] ?? null,
            'governmentserv11' =>  $data['governmentserv11'] ?? null,

            'datefrom12' => $data['datefrom12'] ?? null,
            'dateto12' => $data['dateto12'] ?? null,
            'position12' => $data['position12'] ?? null,
            'department12' => $data['department12'] ?? null,
            'salary12' => $request->input('salary12') ?? null,
            'paygrade12' => $data['paygrade12'] ?? null,
            'appointment12' => $data['appointment12'] ?? null,
            'governmentserv12' =>  $data['governmentserv12'] ?? null,

            'datefrom13' => $data['datefrom13'] ?? null,
            'dateto13' => $data['dateto13'] ?? null,
            'position13' => $data['position13'] ?? null,
            'department13' => $data['department13'] ?? null,
            'salary13' => $request->input('salary13') ?? null,
            'paygrade13' => $data['paygrade13'] ?? null,
            'appointment13' => $data['appointment13'] ?? null,
            'governmentserv13' =>  $data['governmentserv13'] ?? null,

            'datefrom14' => $data['datefrom14'] ?? null,
            'dateto14' => $data['dateto14'] ?? null,
            'position14' => $data['position14'] ?? null,
            'department14' => $data['department14'] ?? null,
            'salary14' => $request->input('salary14') ?? null,
            'paygrade14' => $data['paygrade14'] ?? null,
            'appointment14' => $data['appointment14'] ?? null,
            'governmentserv14' =>  $data['governmentserv14'] ?? null,

            'datefrom15' => $data['datefrom15'] ?? null,
            'dateto15' => $data['dateto15'] ?? null,
            'position15' => $data['position15'] ?? null,
            'department15' => $data['department15'] ?? null,
            'salary15' => $request->input('salary15') ?? null,
            'paygrade15' => $data['paygrade15'] ?? null,
            'appointment15' => $data['appointment15'] ?? null,
            'governmentserv15' =>  $data['governmentserv15'] ?? null,

            'datefrom16' => $data['datefrom16'] ?? null,
            'dateto16' => $data['dateto16'] ?? null,
            'position16' => $data['position16'] ?? null,
            'department16' => $data['department16'] ?? null,
            'salary16' => $request->input('salary16') ?? null,
            'paygrade16' => $data['paygrade16'] ?? null,
            'appointment16' => $data['appointment16'] ?? null,
            'governmentserv16' =>  $data['governmentserv16'] ?? null,

            'datefrom17' => $data['datefrom17'] ?? null,
            'dateto17' => $data['dateto17'] ?? null,
            'position17' => $data['position17'] ?? null,
            'department17' => $data['department17'] ?? null,
            'salary17' => $request->input('salary17') ?? null,
            'paygrade17' => $data['paygrade17'] ?? null,
            'appointment17' => $data['appointment17'] ?? null,
            'governmentserv17' =>  $data['governmentserv17'] ?? null,

            'datefrom18' => $data['datefrom18'] ?? null,
            'dateto18' => $data['dateto18'] ?? null,
            'position18' => $data['position18'] ?? null,
            'department18' => $data['department18'] ?? null,
            'salary18' => $request->input('salary18') ?? null,
            'paygrade18' => $data['paygrade18'] ?? null,
            'appointment18' => $data['appointment18'] ?? null,
            'governmentserv18' =>  $data['governmentserv18'] ?? null,

            'datefrom19' => $data['datefrom19'] ?? null,
            'dateto19' => $data['dateto19'] ?? null,
            'position19' => $data['position19'] ?? null,
            'department19' => $data['department19'] ?? null,
            'salary19' => $request->input('salary19') ?? null,
            'paygrade19' => $data['paygrade19'] ?? null,
            'appointment19' => $data['appointment19'] ?? null,
            'governmentserv19' =>  $data['governmentserv19'] ?? null,

            'datefrom20' => $data['datefrom20'] ?? null,
            'dateto20' => $data['dateto20'] ?? null,
            'position20' => $data['position20'] ?? null,
            'department20' => $data['department20'] ?? null,
            'salary20' => $request->input('salary20') ?? null,
            'paygrade20' => $data['paygrade20'] ?? null,
            'appointment20' => $data['appointment20'] ?? null,
            'governmentserv20' =>  $data['governmentserv20'] ?? null,

            'datefrom21' => $data['datefrom21'] ?? null,
            'dateto21' => $data['dateto21'] ?? null,
            'position21' => $data['position21'] ?? null,
            'department21' => $data['department21'] ?? null,
            'salary21' => $request->input('salary21') ?? null,
            'paygrade21' => $data['paygrade21'] ?? null,
            'appointment21' => $data['appointment21'] ?? null,
            'governmentserv21' =>  $data['governmentserv21'] ?? null,

            'datefrom22' => $data['datefrom22'] ?? null,
            'dateto22' => $data['dateto22'] ?? null,
            'position22' => $data['position22'] ?? null,
            'department22' => $data['department22'] ?? null,
            'salary22' => $request->input('salary22') ?? null,
            'paygrade22' => $data['paygrade22'] ?? null,
            'appointment22' => $data['appointment22'] ?? null,
            'governmentserv22' =>  $data['governmentserv22'] ?? null,

            'datefrom23' => $data['datefrom23'] ?? null,
            'dateto23' => $data['dateto23'] ?? null,
            'position23' => $data['position23'] ?? null,
            'department23' => $data['department23'] ?? null,
            'salary23' => $request->input('salary23') ?? null,
            'paygrade23' => $data['paygrade23'] ?? null,
            'appointment23' => $data['appointment23'] ?? null,
            'governmentserv23' =>  $data['governmentserv23'] ?? null,

            'datefrom24' => $data['datefrom24'] ?? null,
            'dateto24' => $data['dateto24'] ?? null,
            'position24' => $data['position24'] ?? null,
            'department24' => $data['department24'] ?? null,
            'salary24' => $request->input('salary24') ?? null,
            'paygrade24' => $data['paygrade24'] ?? null,
            'appointment24' => $data['appointment24'] ?? null,
            'governmentserv24' =>  $data['governmentserv24'] ?? null,

            'datefrom25' => $data['datefrom25'] ?? null,
            'dateto25' => $data['dateto25'] ?? null,
            'position25' => $data['position25'] ?? null,
            'department25' => $data['department25'] ?? null,
            'salary25' => $request->input('salary25') ?? null,
            'paygrade25' => $data['paygrade25'] ?? null,
            'appointment25' => $data['appointment25'] ?? null,
            'governmentserv25' =>  $data['governmentserv25'] ?? null,

            'datefrom26' => $data['datefrom26'] ?? null,
            'dateto26' => $data['dateto26'] ?? null,
            'position26' => $data['position26'] ?? null,
            'department26' => $data['department26'] ?? null,
            'salary26' => $request->input('salary26') ?? null,
            'paygrade26' => $data['paygrade26'] ?? null,
            'appointment26' => $data['appointment26'] ?? null,
            'governmentserv26' =>  $data['governmentserv26'] ?? null,

            'datefrom27' => $data['datefrom27'] ?? null,
            'dateto27' => $data['dateto27'] ?? null,
            'position27' => $data['position27'] ?? null,
            'department27' => $data['department27'] ?? null,
            'salary27' => $request->input('salary27') ?? null,
            'paygrade27' => $data['paygrade27'] ?? null,
            'appointment27' => $data['appointment27'] ?? null,
            'governmentserv27' =>  $data['governmentserv27'] ?? null
        ];
        $c3answers = [
            'orgnameAddress1' => $data['orgnameAddress1'] ?? null,
            'orgdateFrom1' => $data['orgdateFrom1'] ?? null,
            'orgdateTo1' => $data['orgdateTo1'] ?? null,
            'orgnumHours1' => $request->input('orgnumHours1') ?? null,
            'orgPosition1' => $data['orgPosition1'] ?? null,

            'orgnameAddress2' => $data['orgnameAddress2'] ?? null,
            'orgdateFrom2' => $data['orgdateFrom2'] ?? null,
            'orgdateTo2' => $data['orgdateTo2'] ?? null,
            'orgnumHours2' => $request->input('orgnumHours2') ?? null,
            'orgPosition2' => $data['orgPosition2'] ?? null,

            'orgnameAddress3' => $data['orgnameAddress3'] ?? null,
            'orgdateFrom3' => $data['orgdateFrom3'] ?? null,
            'orgdateTo3' => $data['orgdateTo3'] ?? null,
            'orgnumHours3' => $request->input('orgnumHours3') ?? null,
            'orgPosition3' => $data['orgPosition3'] ?? null,

            'orgnameAddress4' => $data['orgnameAddress4'] ?? null,
            'orgdateFrom4' => $data['orgdateFrom4'] ?? null,
            'orgdateTo4' => $data['orgdateTo4'] ?? null,
            'orgnumHours4' => $request->input('orgnumHours4') ?? null,
            'orgPosition4' => $data['orgPosition4'] ?? null,

            'orgnameAddress5' => $data['orgnameAddress5'] ?? null,
            'orgdateFrom5' => $data['orgdateFrom5'] ?? null,
            'orgdateTo5' => $data['orgdateTo5'] ?? null,
            'orgnumHours5' => $request->input('orgnumHours5') ?? null,
            'orgPosition5' => $data['orgPosition5'] ?? null,

            'orgnameAddress6' => $data['orgnameAddress6'] ?? null,
            'orgdateFrom6' => $data['orgdateFrom6'] ?? null,
            'orgdateTo6' => $data['orgdateTo6'] ?? null,
            'orgnumHours6' => $request->input('orgnumHours6') ?? null,
            'orgPosition6' => $data['orgPosition6'] ?? null,

            'orgnameAddress7' => $data['orgnameAddress7'] ?? null,
            'orgdateFrom7' => $data['orgdateFrom7'] ?? null,
            'orgdateTo7' => $data['orgdateTo7'] ?? null,
            'orgnumHours7' => $request->input('orgnumHours7') ?? null,
            'orgPosition7' => $data['orgPosition7'] ?? null,

            'orgnameAddress8' => $data['orgnameAddress8'] ?? null,
            'orgdateFrom8' => $data['orgdateFrom8'] ?? null,
            'orgdateTo8' => $data['orgdateTo8'] ?? null,
            'orgnumHours8' => $request->input('orgnumHours8') ?? null,
            'orgType8' => $data['orgType8'] ?? null,
            'orgnameSponsor8' => $data['orgnameSponsor8'] ?? null,

            'orgnameAddress9' => $data['orgnameAddress9'] ?? null,
            'orgdateFrom9' => $data['orgdateFrom9'] ?? null,
            'orgdateTo9' => $data['orgdateTo9'] ?? null,
            'orgnumHours9' => $request->input('orgnumHours9') ?? null,
            'orgType9' => $data['orgType9'] ?? null,
            'orgnameSponsor9' => $data['orgnameSponsor9'] ?? null,

            'orgnameAddress10' => $data['orgnameAddress10'] ?? null,
            'orgdateFrom10' => $data['orgdateFrom10'] ?? null,
            'orgdateTo10' => $data['orgdateTo10'] ?? null,
            'orgnumHours10' => $request->input('orgnumHours10') ?? null,
            'orgType10' => $data['orgType10'] ?? null,
            'orgnameSponsor10' => $data['orgnameSponsor10'] ?? null,

            'orgnameAddress11' => $data['orgnameAddress11'] ?? null,
            'orgdateFrom11' => $data['orgdateFrom11'] ?? null,
            'orgdateTo11' => $data['orgdateTo11'] ?? null,
            'orgnumHours11' => $request->input('orgnumHours11') ?? null,
            'orgType11' => $data['orgType11'] ?? null,
            'orgnameSponsor11' => $data['orgnameSponsor11'] ?? null,

            'orgnameAddress12' => $data['orgnameAddress12'] ?? null,
            'orgdateFrom12' => $data['orgdateFrom12'] ?? null,
            'orgdateTo12' => $data['orgdateTo12'] ?? null,
            'orgnumHours12' => $request->input('orgnumHours12') ?? null,
            'orgType12' => $data['orgType12'] ?? null,
            'orgnameSponsor12' => $data['orgnameSponsor12'] ?? null,

            'orgnameAddress13' => $data['orgnameAddress13'] ?? null,
            'orgdateFrom13' => $data['orgdateFrom13'] ?? null,
            'orgdateTo13' => $data['orgdateTo13'] ?? null,
            'orgnumHours13' => $request->input('orgnumHours13') ?? null,
            'orgType13' => $data['orgType13'] ?? null,
            'orgnameSponsor13' => $data['orgnameSponsor13'] ?? null,

            'orgnameAddress14' => $data['orgnameAddress14'] ?? null,
            'orgdateFrom14' => $data['orgdateFrom14'] ?? null,
            'orgdateTo14' => $data['orgdateTo14'] ?? null,
            'orgnumHours14' => $request->input('orgnumHours14') ?? null,
            'orgType14' => $data['orgType14'] ?? null,
            'orgnameSponsor14' => $data['orgnameSponsor14'] ?? null,

            'orgnameAddress15' => $data['orgnameAddress15'] ?? null,
            'orgdateFrom15' => $data['orgdateFrom15'] ?? null,
            'orgdateTo15' => $data['orgdateTo15'] ?? null,
            'orgnumHours15' => $request->input('orgnumHours15') ?? null,
            'orgType15' => $data['orgType15'] ?? null,
            'orgnameSponsor15' => $data['orgnameSponsor15'] ?? null,

            'orgnameAddress16' => $data['orgnameAddress16'] ?? null,
            'orgdateFrom16' => $data['orgdateFrom16'] ?? null,
            'orgdateTo16' => $data['orgdateTo16'] ?? null,
            'orgnumHours16' => $request->input('orgnumHours16') ?? null,
            'orgType16' => $data['orgType16'] ?? null,
            'orgnameSponsor16' => $data['orgnameSponsor16'] ?? null,

            'orgnameAddress17' => $data['orgnameAddress17'] ?? null,
            'orgdateFrom17' => $data['orgdateFrom17'] ?? null,
            'orgdateTo17' => $data['orgdateTo17'] ?? null,
            'orgnumHours17' => $request->input('orgnumHours17') ?? null,
            'orgType17' => $data['orgType17'] ?? null,
            'orgnameSponsor17' => $data['orgnameSponsor17'] ?? null,

            'orgnameAddress18' => $data['orgnameAddress18'] ?? null,
            'orgdateFrom18' => $data['orgdateFrom18'] ?? null,
            'orgdateTo18' => $data['orgdateTo18'] ?? null,
            'orgnumHours18' => $request->input('orgnumHours18') ?? null,
            'orgType18' => $data['orgType18'] ?? null,
            'orgnameSponsor18' => $data['orgnameSponsor18'] ?? null,

            'orgnameAddress19' => $data['orgnameAddress19'] ?? null,
            'orgdateFrom19' => $data['orgdateFrom19'] ?? null,
            'orgdateTo19' => $data['orgdateTo19'] ?? null,
            'orgnumHours19' => $request->input('orgnumHours19') ?? null,
            'orgType19' => $data['orgType19'] ?? null,
            'orgnameSponsor19' => $data['orgnameSponsor19'] ?? null,

            'orgnameAddress20' => $data['orgnameAddress20'] ?? null,
            'orgdateFrom20' => $data['orgdateFrom20'] ?? null,
            'orgdateTo20' => $data['orgdateTo20'] ?? null,
            'orgnumHours20' => $request->input('orgnumHours20') ?? null,
            'orgType20' => $data['orgType20'] ?? null,
            'orgnameSponsor20' => $data['orgnameSponsor20'] ?? null,

            'orgnameAddress21' => $data['orgnameAddress21'] ?? null,
            'orgdateFrom21' => $data['orgdateFrom21'] ?? null,
            'orgdateTo21' => $data['orgdateTo21'] ?? null,
            'orgnumHours21' => $request->input('orgnumHours21') ?? null,
            'orgType21' => $data['orgType21'] ?? null,
            'orgnameSponsor21' => $data['orgnameSponsor21'] ?? null,

            'orgnameAddress22' => $data['orgnameAddress22'] ?? null,
            'orgdateFrom22' => $data['orgdateFrom22'] ?? null,
            'orgdateTo22' => $data['orgdateTo22'] ?? null,
            'orgnumHours22' => $request->input('orgnumHours22') ?? null,
            'orgType22' => $data['orgType22'] ?? null,
            'orgnameSponsor22' => $data['orgnameSponsor22'] ?? null,

            'orgnameAddress23' => $data['orgnameAddress23'] ?? null,
            'orgdateFrom23' => $data['orgdateFrom23'] ?? null,
            'orgdateTo23' => $data['orgdateTo23'] ?? null,
            'orgnumHours23' => $request->input('orgnumHours23') ?? null,
            'orgType23' => $data['orgType23'] ?? null,
            'orgnameSponsor23' => $data['orgnameSponsor23'] ?? null,

            'orgnameAddress24' => $data['orgnameAddress24'] ?? null,
            'orgdateFrom24' => $data['orgdateFrom24'] ?? null,
            'orgdateTo24' => $data['orgdateTo24'] ?? null,
            'orgnumHours24' => $request->input('orgnumHours24') ?? null,
            'orgType24' => $data['orgType24'] ?? null,
            'orgnameSponsor24' => $data['orgnameSponsor24'] ?? null,

            'orgnameAddress25' => $data['orgnameAddress25'] ?? null,
            'orgdateFrom25' => $data['orgdateFrom25'] ?? null,
            'orgdateTo25' => $data['orgdateTo25'] ?? null,
            'orgnumHours25' => $request->input('orgnumHours25') ?? null,
            'orgType25' => $data['orgType25'] ?? null,
            'orgnameSponsor25' => $data['orgnameSponsor25'] ?? null,

            'orgnameAddress26' => $data['orgnameAddress26'] ?? null,
            'orgdateFrom26' => $data['orgdateFrom26'] ?? null,
            'orgdateTo26' => $data['orgdateTo26'] ?? null,
            'orgnumHours26' => $request->input('orgnumHours26') ?? null,
            'orgType26' => $data['orgType26'] ?? null,
            'orgnameSponsor26' => $data['orgnameSponsor26'] ?? null,

            'orgnameAddress26' => $data['orgnameAddress26'] ?? null,
            'orgdateFrom26' => $data['orgdateFrom26'] ?? null,
            'orgdateTo26' => $data['orgdateTo26'] ?? null,
            'orgnumHours26' => $request->input('orgnumHours26') ?? null,
            'orgType26' => $data['orgType26'] ?? null,
            'orgnameSponsor26' => $data['orgnameSponsor26'] ?? null,

            'orgnameAddress27' => $data['orgnameAddress27'] ?? null,
            'orgdateFrom27' => $data['orgdateFrom27'] ?? null,
            'orgdateTo27' => $data['orgdateTo27'] ?? null,
            'orgnumHours27' => $request->input('orgnumHours27') ?? null,
            'orgType27' => $data['orgType27'] ?? null,
            'orgnameSponsor27' => $data['orgnameSponsor27'] ?? null,

            'orgnameAddress28' => $data['orgnameAddress28'] ?? null,
            'orgdateFrom28' => $data['orgdateFrom28'] ?? null,
            'orgdateTo28' => $data['orgdateTo28'] ?? null,
            'orgnumHours28' => $request->input('orgnumHours28') ?? null,
            'orgType28' => $data['orgType28'] ?? null,
            'orgnameSponsor28' => $data['orgnameSponsor28'] ?? null,

            'orgnameSkill1' => $data['orgnameSkill1'] ?? null,
            'orgnameDistinct1' => $data['orgnameDistinct1'] ?? null,
            'orgnameMembership1' => $data['orgnameMembership1'] ?? null,

            'orgnameSkill2' => $data['orgnameSkill2'] ?? null,
            'orgnameDistinct2' => $data['orgnameDistinct2'] ?? null,
            'orgnameMembership2' => $data['orgnameMembership2'] ?? null,

            'orgnameSkill3' => $data['orgnameSkill3'] ?? null,
            'orgnameDistinct3' => $data['orgnameDistinct3'] ?? null,
            'orgnameMembership3' => $data['orgnameMembership3'] ?? null,

            'orgnameSkill4' => $data['orgnameSkill4'] ?? null,
            'orgnameDistinct4' => $data['orgnameDistinct4'] ?? null,
            'orgnameMembership4' => $data['orgnameMembership4'] ?? null,

            'orgnameSkill5' => $data['orgnameSkill5'] ?? null,
            'orgnameDistinct5' => $data['orgnameDistinct5'] ?? null,
            'orgnameMembership5' => $data['orgnameMembership5'] ?? null,

            'orgnameSkill6' => $data['orgnameSkill6'] ?? null,
            'orgnameDistinct6' => $data['orgnameDistinct6'] ?? null,
            'orgnameMembership6' => $data['orgnameMembership6'] ?? null
        ];
        $c4answers= [
            'a34' => $request->input('34a') ?? null,
            'b34' => $request->input('34b') ?? null,
            'detailsb34' => $data['b34details'] ?? null,

            'a35' => $request->input('35a') ?? null,
            'details35a' => $data['a35details'] ?? null,
            'b35' => $request->input('35b') ?? null,
            'b35date' => $request->input('b35date') ?? null,
            'b35case' => $data['b35case'] ?? null,

            'a36' => $request->input('36a') ?? null,
            'a36details' => $data['a36details'] ?? null,

            'a37' => $request->input('37a') ?? null,
            'a37details' => $data['a37details'] ?? null,

            'a38' => $request->input('38a') ?? null,
            'a38details' => $data['a38details'] ?? null,
            'b38' => $request->input('38b') ?? null,
            'b38details' => $data['b38details'] ?? null,

            'a39' => $request->input('39a') ?? null,
            'a39details' => $data['a39details'] ?? null,

            'a40' => $request->input('40a') ?? null,
            'a40details' => $data['a40details'] ?? null,
            'b40' => $request->input('40a') ?? null,
            'b40details' => $data['b40details'] ?? null,
            'c40' => $request->input('40c') ?? null,
            'c40details' => $data['c40details'] ?? null,

            'name41' => $data['name41'] ?? null,
            'address41' => $data['address41'] ?? null,
            'contactno41' => $data['contactno41'] ?? null,

            'name42' => $data['name42'] ?? null,
            'address42' => $data['address42'] ?? null,
            'contactno42' => $data['contactno42'] ?? null,

            'name43' => $data['name43'] ?? null,
            'address43' => $data['address43'] ?? null,
            'contactno43' => $data['contactno43'] ?? null,

            'govid44' => $data['govid44'] ?? null,
            'valid44' => $data['valid44'] ?? null,
            'issuanceplace44' => $data['issuanceplace44'] ?? null,
            'issuancedate44' => $data['issuancedate44'] ?? null

        ];
        $newForm->c1answers = json_encode($c1answers);
        $newForm->c2answers = json_encode($c2answers);
        $newForm->c3answers = json_encode($c3answers);
        $newForm->c4answers = json_encode($c4answers);

        $newForm->save();
        return redirect()->back();
    }
}
