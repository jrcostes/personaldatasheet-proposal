@extends('welcome')

{{-- for dropdown --}}
<?php
    $case = array(
     "Open" => "Open",
     "Inactive" => "Inactive",
     "Closed" => "Closed",
     "Reopened" => "Reopened"
    )

?>
    {{-- reference https://www.ifad.org/documents/38714170/40224860/philippines_ctn.pdf/ae0faa4a-2b65-4026-8d42-219db776c50d --}}
<?php
      $group = array(
        "" => "",
        "Abelling" => "Abelling",
        "Abiyan" => "Abiyan",
        "Adasen" => "Adasen",
        "Aeta" => "Aeta",
        "Aggay" => "Aggay",
        "Agta" => "Agta",
        "Agutaynon"=> "Agutaynon",
        "Alab"=> "Alab",
        "Alangan Mangyan" => "Alangan Mangyan",
        "Apayao" => "Apayao",
        "Aromanon" => "Aromanon",
        "Ata" => "Ata",
        "Ati" => "Ati",
        "Ayangan" => "Ayangan",
        "Badjao" => "Badjao",
        "Bugkalot" => "Bugkalot",
        "Bago" => "Bago",
        "Bagobo" => "Bagobo",
        "Buhid Mangyan" => "Buhid Mangyan",
        "Balangao" => "Balangao",
        "Balatoc" => "Balatoc",
        "Baluga" => "Baluga",
        "Banao"=> "Banao",
        "Banwaon"=> "Banwaon",
        "Barlig"=> "Barlig",
        "Basao"=> "Basao",
        "Batak" =>  "Batak",
        "Batangan Mangyan" => "Batangan Mangyan",
        "Binongan" => "Binongan",
        "Blaan" => "Blaan",
        "Bontok" => "Bontok",
        "Bukidnon" => "Bukidnon",
        "Butbut" => "Butbut",
        "Cagaluan" => "Cagaluan",
        "Central Bontok" => "Central Bontok",
        "Cimaron" => "Cimaron",
        "Cuyunon" => "Cuyunon",
        "Dacalan" => "Dacalan",
        "Dagayanen" => "Dagayanen",
        "Danak" => "Danak",
        "Dananao" => "Dananao",
        "Dibabawon" => "Dibabawon",
        "Dulangan" => "Dulangan",
        "Dumagat" => "Dumagat",
        "Eastern Bontok" => "Eastern Bontok",
        "Escaya" => "Escaya",
        "Gaddang" => "Gaddang",
        "Gubang" => "Gubang",
        "Gubatnon Mangyan" => "Gubatnon Mangyan",
        "Guilayon" => "Guilayon",
        "Guinaang" => "Guinaang",
        "Hanunuo Mangyan" => "Hanunuo Mangyan",
        "Higaonon" => "Higaonon",
        "Ibaloy" => "Ibaloy",
        "Ibanag" => "Ibanag",
        "Ifugao" => "Ifugao",
        "Iraya Mangyan" => "Iraya Mangyan",
        "Isarog" => "Isarog",
        "Isinai" => "Isinai",
        "Isneg" => "Isneg",
        "Itneg" => "Itneg",
        "Itawis" => "Itawis",
        "Itom" => "Itom",
        "Iranon" => "Iranon",
        "Jama Mapon" => "Jama Mapon",
        "Kabihug" => "Kabihug",
        "Kalagan" => "Kalagan",
        "Kalanguya" => "Kalanguya",
        "Kalibugan" => "Kalibugan",
        "Kalinga" => "Kalinga",
        "Kamigin" => "Kamigin",
        "Kankanaey Ibenguet" => "Kankanaey Ibenguet",
        "Kankanaey Iyaplay" => "Kankanaey Iyaplay",
        "Karao" => "Karao",
        "Karintik" => "Karintik",
        "Kongking" => "Kongking",
        "Korolanos" => "Korolanos",
        "Lambangian" => "Lambangian",
        "Langilan" => "Langilan",
        "Lubo" => "Lubo",
        "Lubuagan" => "Lubuagan",
        "Mabaka" => "Mabaka",
        "Madukayan" => "Madukayan",
        "Maeng" => "Maeng",
        "Magahat" => "Magahat",
        "Maguindanao" => "Maguindanao",
        "Malbong" => "Malbong",
        "Mamanwa" => "Mamanwa",
        "Mandaya" => "Mandaya",
        "Mandek-ey" => "Mandek-ey",
        "Mangali" => "Mangali",
        "Manobo" => "Manobo",
        "Manobo B‟lit" => "Manobo B‟lit",
        "Mansaka" => "Mansaka",
        "Maranao" => "Maranao",
        "Masadiit" => "Masadiit",
        "Matigsalog" => "Matigsalog",
        "Mayudan" => "Mayudan",
        "Molbog" => "Molbog",
        "Naneng" => "Naneng",
        "Negrito" => "Negrito",
        "Northern Kankanaey" => "Northern Kankanaey",
        "Palawanon" => "Palawanon",
        "Pugot" => "Pugot",
        "Pullon" => "Pullon",
        "Ratagnon Mangyan" => "Ratagnon Mangyan",
        "Remontado" => "Remontado",
        "Sadanga" => "Sadanga",
        "Salegseg" => "Salegseg",
        "Sama" => "Sama",
        "Sama Laut" => "Sama Laut",
        "Sangil" => "Sangil",
        "Subanen" => "Subanen",
        "Sulod" => "Sulod",
        "Sumadel" => "Sumadel",
        "T-boli" => "T-boli",
        "Tabangon" => "Tabangon",
        "Tadyawan Mangyan" => "Tadyawan Mangyan",
        "Tagabawa" => "Tagabawa",
        "Tagakaolo" => "Sama",
        "Talaandig" => "Talaandig",
        "Talaingod" => "Talaingod",
        "Taloctok" => "Taloctok",
        "Tao‟t Bato" => "Tao‟t Bato",
        "Tigawahanon" => "Tigawahanon",
        "Tinggian" => "Tinggian",
        "Tinglayan" => "Tinglayan",
        "Tiruray" => "Tiruray",
        "Tonglayan" => "Tonglayan",
        "Tulgao" => "Tulgao",
        "Tuwali" => "Tuwali",
        "Ubo Manobo" => "Ubo Manobo",
        "Umayamnon" => "Umayamnon",
        "Yakan" => "Yakan"

    )

?>

<?php
$validID = [
    "UMID" => "e-Card / UMID",
    "Employee ID" => "Employee's ID / Office ID",
    "Driver License" => "Driver's License",
    "Professional Regulation Commission" => "Professional Regulation Commission (PRC) ID",
    "Passport" => "Passport",
    "Senior Citizen ID" => "Senior Citizen ID",
    "SSS ID" => "SSS ID",
    "COMELEC ID" => "COMELEC / Voters ID / COMELEC Registration Form",
    "Philippine Identification ID" => "Philippine Identification (PhilID)",
    "NBI" => "NBI Clearance",
    "IBP ID" => "Integrated Bar of the Philippines (IBP) ID",
    "Firearms License" => "Firearms License",
    "AFPSLAI ID" => "AFPSLAI ID",
    "PVAO ID" => "PVAO ID",
    "AFP Beneficiary ID" => "AFP Beneficiary ID",
    "BIR (TIN)" => "BIR-TIN ID",
    "Pag-ibig ID" => "Pag-ibig ID",
    "PWD ID" => "Person’s With Disability (PWD) ID",
    "Solo Parent ID" => "Solo Parent ID",
    "Pantawid Pamilya Pilipino Program ID" => "4Ps ID",
    "Barangay ID" => "Barangay ID",
    "Philippine Postal ID" => "PhilPost ID",
    "Phil-health ID" => "Philhealth ID",
    "School ID" => "School ID",
    "Other Valid Government Issued IDs" => "Other ID",
    "Documents with Picture and Signature" => "Other Documents"

];
?>
{{-- source: https://www.gsis.gov.ph/ginhawa-for-all/list-of-acceptable-valid-ids/ --}}

@section('content')
    @if (session()->has('message'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="sweetalert/sweetalert.all.js"></script>

    <script>
        swal({
            title: "Good job!",
            text: "Successfully submitted",
            icon: "success",
            button: "Proceed",
        });

    </script>
    @endif
    <form id="submitForm" method="get" action="/c4formsubmit" autocomplete="off" class="form-horizontal">

    <title>form</title>

        <div class="box">

                <div class="box-form">

                        {{-- questions portion --}}
                        <div class="questions">
                            <b>34. Are you related by consanguinity or affinity to the appointing or recommending authority, or to chief of bureu or office or to the person who has made immediate supervision over you in the Office,
                                Bureau or Department where you will be appointed,</b><br>

                            <b>{{Form::label('34-a-answer','a. within the third degree?')}}<br></b>
                             {{Form::radio('34a', '1')}}
                             {{Form::label('34a','YES')}}

                             {{Form::radio('34a', '0')}}
                             {{Form::label('34a','NO')}}<br>

                            <b>{{Form::label('34b','b. within the fourth degree (for Local government Unit - Career Employees)?')}}<br></b>
                            {{Form::radio('34b', '1')}}
                            {{Form::label('34b','YES')}}

                            {{Form::radio('34b', '0')}}
                            {{Form::label('34b','NO')}}<br>

                            {{Form::label('34bdetails', "If YES, give details: ")}}
                            {{Form::text('34bdetails', null, array('class'=>'form-control', 'id' => '34-b-answer-details', 'disabled','autocomplete' => 'off'))}}

                            <b>{{Form::label('35a','35. a. Have you ever been found guilty of any administrative offense?')}}<br></b>
                            {{Form::radio('35a', '1')}}
                            {{Form::label('35a','YES')}}

                            {{Form::radio('35a', '0')}}
                            {{Form::label('35a','NO')}}<br>

                            {{Form::label('35adetails', "If YES, give details: ")}}
                            {{Form::text('35adetails',null, array('class'=>'form-control', 'id' => '35-a-answer-details', 'disabled', 'autocomplete' => 'off'))}}

                            <b>{{Form::label('35-b-answer','b. Have you been criminally change before any court?')}}<br></b>
                            {{Form::radio('35b', '1')}}
                            {{Form::label('35b','YES')}}

                            {{Form::radio('35b', '0')}}
                            {{Form::label('35b','NO')}}<br>

                            {{Form::label('35bdetails','If YES, give details: ')}}<br>
                            {{Form::label('35bdate','Date Field: ')}}
                            {{Form::date('35bdate', null, array('disabled'))}}<br>
                            {{Form::label('35bcase', "Status of Case/s: ")}}
                            {{ Form::select('35bcase', $case, null, ['class' => 'form-control', 'id' => '35-b-answer-case','placeholder' => 'Status', 'disabled']) }}

                            <b>{{Form::label('36a','36. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?')}}<br></b>
                            {{Form::radio('36a', '1')}}
                            {{Form::label('36a','YES')}}

                            {{Form::radio('36a', '0')}}
                            {{Form::label('36a','NO')}}<br>

                            {{Form::label('36adetails', "If YES, give details: ")}}
                            {{Form::text('36adetails',null, array('class'=>'form-control', 'id' => '36-answer-details', 'disabled', 'autocomplete' => 'off'))}}

                            <b>{{Form::label('37a','37. Have you ever been separated from the service in any of the following modes:
                            resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or
                            phased out (abolition) in the public or private sector?')}}<br></b>
                            {{Form::radio('37a', '1')}}
                            {{Form::label('37a','YES')}}

                            {{Form::radio('37a', '0')}}
                            {{Form::label('37a','NO')}}<br>

                            {{Form::label('37adetails', "If YES, give details: ")}}
                            {{Form::text('37adetails',null, array('class'=>'form-control', 'id' => '37-answer-details', 'disabled', 'autocomplete' => 'off'))}}

                            <b>{{Form::label('38a','38. a. Have you ever been a candidate in a national or local election held within the last year<br>
                            (except Barangay election)?')}}<br></b>
                            {{Form::radio('38a', '1')}}
                            {{Form::label('38a','YES')}}

                            {{Form::radio('38a', '0')}}
                            {{Form::label('38a','NO')}}<br>

                            {{Form::label('38a', "If YES, give details: ")}}
                            {{Form::text('38a',null, array('class'=>'form-control', 'id' => '38-a-answer-details', 'disabled', 'autocomplete' => 'off'))}}

                            <b>{{Form::label('38b','b. Have you resigned from the government service during the three (3)-month period before<br>
                            the last election to promote/actively campaign for a national or local candidate?')}}<br></b>
                            {{Form::radio('38b', '1')}}
                            {{Form::label('38b','YES')}}

                            {{Form::radio('38b', '0')}}
                            {{Form::label('38b','NO')}}<br>

                            {{Form::label('38bdetails', "If YES, give details: ")}}
                            {{Form::text('38bdetails',null, array('class'=>'form-control', 'id' => '38-b-answer-details', 'disabled', 'autocomplete' => 'off'))}}

                            <b>{{Form::label('39a','39. Have you acquired the status of an immigrant or permanent resident of another country?')}}<br></b>
                            {{Form::radio('39a', '1')}}
                            {{Form::label('39a','YES')}}

                            {{Form::radio('39a', '0')}}
                            {{Form::label('39a','NO')}}<br>

                            {{Form::label('39adetails', "If YES, give details: ")}}
                            {{Form::text('39adetails',null, array('class'=>'form-control', 'id' => '39-answer-details', 'disabled', 'autocomplete' => 'off'))}}

                            <b>40. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons
                                (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following items: </b><br>

                            <b>{{Form::label('40a','a.   Are you a member of any indigenous group?')}}<br></b>
                            {{Form::radio('40a', '1')}}
                            {{Form::label('40a','YES')}}

                            {{Form::radio('40a', '0')}}
                            {{Form::label('40a','NO')}}<br>

                            {{Form::label('40adetails', "If YES, please specify: ")}}
                            {{ Form::select('40adetails', $group, null, ['class' => 'form-control', 'id' => '40-a-answer-details', 'disabled']) }}

                            <b>{{Form::label('40b','b.   Are you a person with disability?')}}<br></b>
                            {{Form::radio('40b', '1')}}
                            {{Form::label('40b','YES')}}

                            {{Form::radio('40b', '0')}}
                            {{Form::label('40b','NO')}}<br>

                            {{Form::label('40bdetails', "If YES, please specify ID No: ")}}
                            {{Form::number('40bdetails',null, array('class'=>'form-control', 'id' => '40-b-answer-details', 'disabled'))}}

                            <b>{{Form::label('40c','c.   Are you a solo parent?')}}<br></b>
                            {{Form::radio('40c', '1')}}
                            {{Form::label('40c','YES')}}

                            {{Form::radio('40c', '0')}}
                            {{Form::label('40c','NO')}}<br>

                            {{Form::label('40cdetails', "If YES, please specify ID No: ")}}
                            {{Form::number('40cdetails',null, array('class'=>'form-control', 'id' => '40-c-answer-details', 'disabled'))}}

                            <hr class="line1">

                        </div>

                        {{-- references portion --}}
                        <div class="references">

                            <div class="row">
                                <div class="col-11"><b>41. REFRENCES </b></div>
                                <div class="col-1 row px-0">
                                    <div class="col-5 offset-1 px-0">
                                        <button class="btn btn-secondary btn-sm w-100" id="minus-ref" disabled>-</button>
                                    </div>
                                    <div class="col-5 offset-1 px-0">
                                        <button class="btn btn-secondary btn-sm w-100" id="add-ref">+</button>
                                    </div>
                                </div>
                            </div>
                            <i>(Person not related by consangurity or affinity to applicant/appointee)</i><br>
                            <hr>
                            <b>{{Form::label('41name', "Name: ")}}</b>
                            {{Form::text('41name',null, array('class'=>'form-control', 'id' => '41-a-answer-name','placeholder' => 'Full Name', 'autocomplete' => 'off'))}}
                            <b>{{Form::label('41address', "Address: ")}}</b>
                            {{Form::text('41address',null, array('class'=>'form-control', 'id' => '41-a-answer-address','placeholder' => 'Address', 'autocomplete' => 'off'))}}
                            <b>{{Form::label('41contactno', "Telephone Number: ")}}</b>
                            {{Form::number('41contactno',null, array('class'=>'form-control', 'id' => '41-a-answer-contact-no','placeholder' => 'Tel No'))}}<br>

                            {{-- enabled/disabled reference forms --}}
                            <div class="41-b-container d-none">
                                <hr>
                                <b>{{Form::label('42name', "Name: ")}}</b>
                                {{Form::text('42name',null, array('class'=>'form-control', 'id' => '41-b-answer-name','placeholder' => 'Full Name', 'autocomplete' => 'off'))}}
                                <b>{{Form::label('42address', "Address: ")}}</b>
                                {{Form::text('42address',null, array('class'=>'form-control', 'id' => '41-b-answer-address','placeholder' => 'Address', 'autocomplete' => 'off'))}}
                                <b>{{Form::label('42contactno', "Telephone Number: ")}}</b>
                                {{Form::number('42contactno',null, array('class'=>'form-control', 'id' => '41-b-answer-contact-no','placeholder' => 'Tel No'))}}<br>
                            </div>
                            <div class="41-c-container d-none">
                                <hr>
                                <b>{{Form::label('43name', "Name: ")}}</b>
                                {{Form::text('43name',null, array('class'=>'form-control', 'id' => '41-c-answer-name','placeholder' => 'Full Name', 'autocomplete' => 'off'))}}
                                <b>{{Form::label('43address', "Address: ")}}</b>
                                {{Form::text('43address',null, array('class'=>'form-control', 'id' => '41-c-answer-address','placeholder' => 'Address', 'autocomplete' => 'off'))}}
                                <b>{{Form::label('43contactno', "Telephone Number: ")}}</b>
                                {{Form::number('43contactno',null, array('class'=>'form-control', 'id' => '41-c-answer-contact-no','placeholder' => 'Tel No'))}}<br>
                            </div>

                        </div>

                        <div class="oath">

                            <b><i>42. I declare under oath that I have personally accomplished this Personal Data Sheet which is a 'YES', correct and
                                complete statement pursuant to the provisions of pertinent laws, rules and regulations of the Republic of the
                                Philippines. I authorize the agency head/authorized representative to verify/validate the contents stated herein.
                                I  agree that any misrepresentation made in this document and its attachments shall cause the filin'g
                                                of administrative/criminal case/s against me.</i></b>
                        </div>

                        <div class="id">

                            <br><b>Government Issued ID </b><i>(i.e.Passport, GSIS, SSS, PRC, Driver's License, etc.)</i><br>
                            <b>PLEASE INDICATE ID Number</b><br>
                            <b>{{Form::label('44govid', "Government Issued ID: ")}}</b>
                            {{ Form::select('44govid', $validID, null, ['class' => 'form-control', 'placeholder' => 'Select ID...']) }}
                            <b>{{Form::label('44valid', "ID/License/Passport No.: ")}}</b>
                            {{Form::number('44valid',null, array('class'=>'form-control', 'id' => '42-answer-valid-id-no','placeholder' => 'ID No.', 'autocomplete' => 'off' ,'maxlength' => 12))}}
                            {{Form::label('44issuanceplace','Place of Issuance: ')}}
                            {{Form::text('44issuanceplace',null, array('class'=>'form-control', 'id' => '42-answer-issuance-details','placeholder' => 'Place of Issuance', 'autocomplete' => 'off'))}}<br>
                            {{Form::label('44issuancedate','Date of Issuance: ')}}
                            {{Form::date('44issuancedate')}}

                        </div>

                            <div style="text-align: center">
                            <button type="submit" class="btn btn-primary btn-loading" data-coreui-timeout="2000">Submit</button>
                            </div>

                        {!! Form::close() !!}
                </div>
        </div>

        {{-- sweet alert for submit button --}}
        @if(session()->has('message'))
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="sweetalert/sweetalert.all.js"></script>

        <script>
            swal({
                title: "Success!",
                text: "Successfully Submitted",
                icon: "success",
                button: "Proceed",
            });
        </script>
        @endif

<script>

    // for enabling/disabling reference forms
    $(function() {
    var refCount = 1;
        $('#add-ref').on('click', function (e) {
            e.preventDefault();

            if (refCount === 1) {
                $('.41-b-container').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                refCount++;
            } else if (refCount === 2) {
                $('.41-c-container').removeClass('d-none');
                $('#add-ref').attr('disabled', true, required);
                refCount++;
            }
        });

        $('#minus-ref').on('click', function (e) {
            e.preventDefault();

            if (refCount === 2) {
                $('.41-c-container').addClass('d-none');
                $('#add-ref').attr('disabled', false);
                refCount--;
            } else if (refCount === 1) {
                $('.41-b-container').addClass('d-none');
                $('#minus-ref').attr('disabled', true, required);
                refCount--;
            }
        });

    // enabling/disabling the text boxes for questions portion
    $('input[name="34-b-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="34-b-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="34-b-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="35-a-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="35-a-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="35-a-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="35-b-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="35-b-answer-date"]').attr({
                'disabled': false,
                'required': true
            })
            $('select[name="35-b-answer-case"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="35-b-answer-date"]').attr({
                'disabled': true,
                'required': false
            })
            $('input[name="35-b-answer-case"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="36-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="36-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="36-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="37-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="37-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="37-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="38-a-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="38-a-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="38-a-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="38-b-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="38-b-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="38-b-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="39-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="39-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="39-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="40-a-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('select[name="40-a-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="40-a-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="40-b-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="40-b-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="40-b-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
    $('input[name="40-c-answer"]').change(function(){
        if ($(this).is(':checked') && $(this).val() == 'YES') {
            $('input[name="40-c-answer-details"]').attr({
                'disabled': false,
                'required': true
            })
        } else {
            $('input[name="40-c-answer-details"]').attr({
                'disabled': true,
                'required': false
            })
        }
    });
});

</script>

@endsection
