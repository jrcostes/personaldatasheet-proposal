@extends('welcome')
<?php
$countries = [
    '' => '',
    'Afghanistan' => 'Afghanistan',
    'Aland Islands' => 'Aland Islands',
    'Albania' => 'Albania',
    'Algeria' => 'Algeria',
    'American Samoa' => 'American Samoa',
    'Andorra' => 'Andorra',
    'Angola' => 'Angola',
    'Anguilla' => 'Anguilla',
    'Antarctica' => 'Antarctica',
    'Antigua and Barbuda' => 'Antigua and Barbuda',
    'Argentina' => 'Argentina',
    'Armenia' => 'Armenia',
    'Aruba' => 'Aruba',
    'Australia' => 'Australia',
    'Austria' => 'Austria',
    'Azerbaijan' => 'Azerbaijan',
    'Bahamas' => 'Bahamas',
    'Bahrain' => 'Bahrain',
    'Bangladesh' => 'Bangladesh',
    'Barbados' => 'Barbados',
    'Belarus' => 'Belarus',
    'Belgium' => 'Belgium',
    'Belize' => 'Belize',
    'Benin' => 'Benin',
    'Bermuda' => 'Bermuda',
    'Bhutan' => 'Bhutan',
    'Bolivia' => 'Bolivia',
    'Bonaire, Sint Eustatius and Saba' => 'Bonaire, Sint Eustatius and Saba',
    'Bosnia and Herzegovina' => 'Bosnia and Herzegovina',
    'Botswana' => 'Botswana',
    'Bouvet Island' => 'Bouvet Island',
    'Brazil' => 'Brazil',
    'British Indian Ocean Territory' => 'British Indian Ocean Territory',
    'Brunei Darussalam' => 'Brunei Darussalam',
    'Bulgaria' => 'Bulgaria',
    'Burkina Faso' => 'Burkina Faso',
    'Burundi' => 'Burundi',
    'Cambodia' => 'Cambodia',
    'Cameroon' => 'Cameroon',
    'Canada' => 'Canada',
    'Cape Verde' => 'Cape Verde',
    'Cayman Islands' => 'Cayman Islands',
    'Central African Republic' => 'Central African Republic',
    'Chad' => 'Chad',
    'Chile' => 'Chile',
    'China' => 'China',
    'Christmas Island' => 'Christmas Island',
    'Cocos (Keeling) Islands' => 'Cocos (Keeling) Islands',
    'Colombia' => 'Colombia',
    'Comoros' => 'Comoros',
    'Congo' => 'Congo',
    'The Democratic Republic of Congo' => 'Congo, the Democratic Republic of the',
    'Cook Islands' => 'Cook Islands',
    'Costa Rica' => 'Costa Rica',
    "Cote D'Ivoire" => "Cote D'Ivoire",
    'Croatia' => 'Croatia',
    'Cuba' => 'Cuba',
    'Curacao' => 'Curacao',
    'Cyprus' => 'Cyprus',
    'Czech Republic' => 'Czech Republic',
    'Denmark' => 'Denmark',
    'Djibouti' => 'Djibouti',
    'Dominica' => 'Dominica',
    'Dominican Republic' => 'Dominican Republic',
    'Ecuador' => 'Ecuador',
    'Egypt' => 'Egypt',
    'El Salvador' => 'El Salvador',
    'Equitorial Guinea' => 'Equatorial Guinea',
    'Eritrea' => 'Eritrea',
    'Estonia' => 'Estonia',
    'Ethiopia' => 'Ethiopia',
    'Falkland Islands (Malvinas)' => 'Falkland Islands (Malvinas)',
    'Faroe Islands' => 'Faroe Islands',
    'Fiji' => 'Fiji',
    'Finland' => 'Finland',
    'France' => 'France',
    'French Guiana' => 'French Guiana',
    'French Polynesia' => 'French Polynesia',
    'French Southern Teritories' => 'French Southern Territories',
    'Gabon' => 'Gabon',
    'Gambia' => 'Gambia',
    'Georgia' => 'Georgia',
    'Germany' => 'Germany',
    'Ghana' => 'Ghana',
    'Gibraltar' => 'Gibraltar',
    'Greece' => 'Greece',
    'Greenland' => 'Greenland',
    'Grenada' => 'Grenada',
    'Guadaloupe' => 'Guadeloupe',
    'Guam' => 'Guam',
    'Guatemala' => 'Guatemala',
    'Guernsey' => 'Guernsey',
    'Guinea' => 'Guinea',
    'Guinea-Bissau' => 'Guinea-Bissau',
    'Guyana' => 'Guyana',
    'Haiti' => 'Haiti',
    'Heard Island and Mcdonald Islands' => 'Heard Island and Mcdonald Islands',
    'Holy See (Vatican City State)' => 'Holy See (Vatican City State)',
    'Honduras' => 'Honduras',
    'Hong Kong' => 'Hong Kong',
    'Hungary' => 'Hungary',
    'Iceland' => 'Iceland',
    'India' => 'India',
    'Indonesia' => 'Indonesia',
    'Iran' => 'Iran, Islamic Republic of',
    'Iraq' => 'Iraq',
    'Ireland' => 'Ireland',
    'Isle of Man' => 'Isle of Man',
    'Israel' => 'Israel',
    'Italy' => 'Italy',
    'Jamaica' => 'Jamaica',
    'Japan' => 'Japan',
    'Jersey' => 'Jersey',
    'Jordan' => 'Jordan',
    'Kazakhstan' => 'Kazakhstan',
    'Kenya' => 'Kenya',
    'Kiribati' => 'Kiribati',
    "Korea, Democratic People's Republic of" => "Korea, Democratic People's Republic of",
    'Korea, Republic of' => 'Korea, Republic of',
    'Kosovo' => 'Kosovo',
    'Kuwait' => 'Kuwait',
    'Krygyzstan' => 'Kyrgyzstan',
    "Lao People's Democratic Republic" => "Lao People's Democratic Republic",
    'Latvia' => 'Latvia',
    'Lebanon' => 'Lebanon',
    'Lesotho' => 'Lesotho',
    'Liberia' => 'Liberia',
    'Libyan Arab Jamahiriya' => 'Libyan Arab Jamahiriya',
    'Liechtenstien' => 'Liechtenstein',
    'Lithuania' => 'Lithuania',
    'Luxembourg' => 'Luxembourg',
    'Macao' => 'Macao',
    'Macedonia, the Former Yugoslav Republic of' => 'Macedonia, the Former Yugoslav Republic of',
    'Madagascar' => 'Madagascar',
    'Malawi' => 'Malawi',
    'Malaysia' => 'Malaysia',
    'Maldives' => 'Maldives',
    'Mali' => 'Mali',
    'Malta' => 'Malta',
    'Marshall Islands' => 'Marshall Islands',
    'Matinique' => 'Martinique',
    'Mauritania' => 'Mauritania',
    'Mauritius' => 'Mauritius',
    'Mayotte' => 'Mayotte',
    'Mexico' => 'Mexico',
    'Micronesia, Federated States of' => 'Micronesia, Federated States of',
    'Moldova, Republic of' => 'Moldova, Republic of',
    'Monaco' => 'Monaco',
    'Mongolia' => 'Mongolia',
    'Montenegro' => 'Montenegro',
    'Monserrat' => 'Montserrat',
    'Morocco' => 'Morocco',
    'Mozambique' => 'Mozambique',
    'Myanmar' => 'Myanmar',
    'Namibia' => 'Namibia',
    'Nauru' => 'Nauru',
    'Nepal' => 'Nepal',
    'Netherlands' => 'Netherlands',
    'Netherlands Antilles' => 'Netherlands Antilles',
    'New Caledonia' => 'New Caledonia',
    'New Zealand' => 'New Zealand',
    'Nicaragua' => 'Nicaragua',
    'Niger' => 'Niger',
    'Nigeria' => 'Nigeria',
    'Niue' => 'Niue',
    'Norfolk Island' => 'Norfolk Island',
    'Northern Mariana Islands' => 'Northern Mariana Islands',
    'Norway' => 'Norway',
    'Oman' => 'Oman',
    'Pakistan' => 'Pakistan',
    'Palau' => 'Palau',
    'Palestinian Territory, Occupied' => 'Palestinian Territory, Occupied',
    'Panama' => 'Panama',
    'Papua New Guinea' => 'Papua New Guinea',
    'Paraguay' => 'Paraguay',
    'Peru' => 'Peru',
    'Philippines' => 'Philippines',
    'Pitcairn' => 'Pitcairn',
    'Poland' => 'Poland',
    'Portugal' => 'Portugal',
    'Puerto Rico' => 'Puerto Rico',
    'Qatar' => 'Qatar',
    'Reunion' => 'Reunion',
    'Romania' => 'Romania',
    'Russian Federation' => 'Russian Federation',
    'Rwanda' => 'Rwanda',
    'Saint Barthelemy' => 'Saint Barthelemy',
    'Saint Helena' => 'Saint Helena',
    'Saint Kitts and Nevis' => 'Saint Kitts and Nevis',
    'Saint Lucia' => 'Saint Lucia',
    'Saint Martin' => 'Saint Martin',
    'Saint Pierre and Miquelon' => 'Saint Pierre and Miquelon',
    'Saint Vincent and the Grenadines' => 'Saint Vincent and the Grenadines',
    'Samoa' => 'Samoa',
    'San Marino' => 'San Marino',
    'Sao Tome and Principe' => 'Sao Tome and Principe',
    'Saudi Arabia' => 'Saudi Arabia',
    'Senegal' => 'Senegal',
    'Serbia' => 'Serbia',
    'Serbia and Montenegro' => 'Serbia and Montenegro',
    'Seychelles' => 'Seychelles',
    'Sierra Leone' => 'Sierra Leone',
    'Singapore' => 'Singapore',
    'Sint Maarten' => 'Sint Maarten',
    'Slovakia' => 'Slovakia',
    'Slovenia' => 'Slovenia',
    'Solomon Islands' => 'Solomon Islands',
    'Somalia' => 'Somalia',
    'South Africa' => 'South Africa',
    'South Georgia and the South Sandwich Islands' => 'South Georgia and the South Sandwich Islands',
    'South Sudan' => 'South Sudan',
    'Spain' => 'Spain',
    'Sri Lanka' => 'Sri Lanka',
    'Sudan' => 'Sudan',
    'Suriname' => 'Suriname',
    'Svalbard and Jan Mayen' => 'Svalbard and Jan Mayen',
    'Swaziland' => 'Swaziland',
    'Sweden' => 'Sweden',
    'Switzerland' => 'Switzerland',
    'Syrian Arab Republic' => 'Syrian Arab Republic',
    'Taiwan, Province of China' => 'Taiwan, Province of China',
    'Tajikistan' => 'Tajikistan',
    'Tanzania' => 'Tanzania, United Republic of',
    'Thailand' => 'Thailand',
    'Timor-Leste' => 'Timor-Leste',
    'Togo' => 'Togo',
    'Tokelau' => 'Tokelau',
    'Tonga' => 'Tonga',
    'Trinidad and Tobago' => 'Trinidad and Tobago',
    'Tunisia' => 'Tunisia',
    'Turkey' => 'Turkey',
    'Turkmenistan' => 'Turkmenistan',
    'Turks and Caicos Islands' => 'Turks and Caicos Islands',
    'Tuvalu' => 'Tuvalu',
    'Uganda' => 'Uganda',
    'Ukraine' => 'Ukraine',
    'United Arab Emirates' => 'United Arab Emirates',
    'United Kingdom' => 'United Kingdom',
    'United States' => 'United States',
    'United States Minor Outlying Islands' => 'United States Minor Outlying Islands',
    'Uruguay' => 'Uruguay',
    'Uzbekistan' => 'Uzbekistan',
    'Vanuatu' => 'Vanuatu',
    'Venezuela' => 'Venezuela',
    'Vietnam' => 'Vietnam',
    'Virgin Islands, British' => 'Virgin Islands, British',
    'Virgin Islands, U.s.' => 'Virgin Islands, U.s.',
    'Wallis and Futuna' => 'Wallis and Futuna',
    'Western Sahara' => 'Western Sahara',
    'Yemen' => 'Yemen',
    'Zambia' => 'Zambia',
    'Zimbabwe' => 'Zimbabwe',
];
?>
<?php
$validID = [
    'UMID' => 'e-Card / UMID',
    'Employee ID' => "Employee's ID / Office ID",
    'Driver License' => "Driver's License",
    'Professional Regulation Commission' => 'Professional Regulation Commission (PRC) ID',
    'Passport' => 'Passport',
    'Senior Citizen ID' => 'Senior Citizen ID',
    'SSS ID' => 'SSS ID',
    'COMELEC ID' => 'COMELEC / Voters ID / COMELEC Registration Form',
    'Philippine Identification ID' => 'Philippine Identification (PhilID)',
    'NBI' => 'NBI Clearance',
    'IBP ID' => 'Integrated Bar of the Philippines (IBP) ID',
    'Firearms License' => 'Firearms License',
    'AFPSLAI ID' => 'AFPSLAI ID',
    'PVAO ID' => 'PVAO ID',
    'AFP Beneficiary ID' => 'AFP Beneficiary ID',
    'BIR (TIN)' => 'BIR-TIN ID',
    'Pag-ibig ID' => 'Pag-ibig ID',
    'PWD ID' => 'Person’s With Disability (PWD) ID',
    'Solo Parent ID' => 'Solo Parent ID',
    'Pantawid Pamilya Pilipino Program ID' => '4Ps ID',
    'Barangay ID' => 'Barangay ID',
    'Philippine Postal ID' => 'PhilPost ID',
    'Phil-health ID' => 'Philhealth ID',
    'School ID' => 'School ID',
    'Other Valid Government Issued IDs' => 'Other ID',
    'Documents with Picture and Signature' => 'Other Documents',
];
?>
<?php
$case = [
    'Open' => 'Open',
    'Inactive' => 'Inactive',
    'Closed' => 'Closed',
    'Reopened' => 'Reopened',
];
?>
<?php
$group = [
    '' => '',
    'Abelling' => 'Abelling',
    'Abiyan' => 'Abiyan',
    'Adasen' => 'Adasen',
    'Aeta' => 'Aeta',
    'Aggay' => 'Aggay',
    'Agta' => 'Agta',
    'Agutaynon' => 'Agutaynon',
    'Alab' => 'Alab',
    'Alangan Mangyan' => 'Alangan Mangyan',
    'Apayao' => 'Apayao',
    'Aromanon' => 'Aromanon',
    'Ata' => 'Ata',
    'Ati' => 'Ati',
    'Ayangan' => 'Ayangan',
    'Badjao' => 'Badjao',
    'Bugkalot' => 'Bugkalot',
    'Bago' => 'Bago',
    'Bagobo' => 'Bagobo',
    'Buhid Mangyan' => 'Buhid Mangyan',
    'Balangao' => 'Balangao',
    'Balatoc' => 'Balatoc',
    'Baluga' => 'Baluga',
    'Banao' => 'Banao',
    'Banwaon' => 'Banwaon',
    'Barlig' => 'Barlig',
    'Basao' => 'Basao',
    'Batak' => 'Batak',
    'Batangan Mangyan' => 'Batangan Mangyan',
    'Binongan' => 'Binongan',
    'Blaan' => 'Blaan',
    'Bontok' => 'Bontok',
    'Bukidnon' => 'Bukidnon',
    'Butbut' => 'Butbut',
    'Cagaluan' => 'Cagaluan',
    'Central Bontok' => 'Central Bontok',
    'Cimaron' => 'Cimaron',
    'Cuyunon' => 'Cuyunon',
    'Dacalan' => 'Dacalan',
    'Dagayanen' => 'Dagayanen',
    'Danak' => 'Danak',
    'Dananao' => 'Dananao',
    'Dibabawon' => 'Dibabawon',
    'Dulangan' => 'Dulangan',
    'Dumagat' => 'Dumagat',
    'Eastern Bontok' => 'Eastern Bontok',
    'Escaya' => 'Escaya',
    'Gaddang' => 'Gaddang',
    'Gubang' => 'Gubang',
    'Gubatnon Mangyan' => 'Gubatnon Mangyan',
    'Guilayon' => 'Guilayon',
    'Guinaang' => 'Guinaang',
    'Hanunuo Mangyan' => 'Hanunuo Mangyan',
    'Higaonon' => 'Higaonon',
    'Ibaloy' => 'Ibaloy',
    'Ibanag' => 'Ibanag',
    'Ifugao' => 'Ifugao',
    'Iraya Mangyan' => 'Iraya Mangyan',
    'Isarog' => 'Isarog',
    'Isinai' => 'Isinai',
    'Isneg' => 'Isneg',
    'Itneg' => 'Itneg',
    'Itawis' => 'Itawis',
    'Itom' => 'Itom',
    'Iranon' => 'Iranon',
    'Jama Mapon' => 'Jama Mapon',
    'Kabihug' => 'Kabihug',
    'Kalagan' => 'Kalagan',
    'Kalanguya' => 'Kalanguya',
    'Kalibugan' => 'Kalibugan',
    'Kalinga' => 'Kalinga',
    'Kamigin' => 'Kamigin',
    'Kankanaey Ibenguet' => 'Kankanaey Ibenguet',
    'Kankanaey Iyaplay' => 'Kankanaey Iyaplay',
    'Karao' => 'Karao',
    'Karintik' => 'Karintik',
    'Kongking' => 'Kongking',
    'Korolanos' => 'Korolanos',
    'Lambangian' => 'Lambangian',
    'Langilan' => 'Langilan',
    'Lubo' => 'Lubo',
    'Lubuagan' => 'Lubuagan',
    'Mabaka' => 'Mabaka',
    'Madukayan' => 'Madukayan',
    'Maeng' => 'Maeng',
    'Magahat' => 'Magahat',
    'Maguindanao' => 'Maguindanao',
    'Malbong' => 'Malbong',
    'Mamanwa' => 'Mamanwa',
    'Mandaya' => 'Mandaya',
    'Mandek-ey' => 'Mandek-ey',
    'Mangali' => 'Mangali',
    'Manobo' => 'Manobo',
    'Manobo B‟lit' => 'Manobo B‟lit',
    'Mansaka' => 'Mansaka',
    'Maranao' => 'Maranao',
    'Masadiit' => 'Masadiit',
    'Matigsalog' => 'Matigsalog',
    'Mayudan' => 'Mayudan',
    'Molbog' => 'Molbog',
    'Naneng' => 'Naneng',
    'Negrito' => 'Negrito',
    'Northern Kankanaey' => 'Northern Kankanaey',
    'Palawanon' => 'Palawanon',
    'Pugot' => 'Pugot',
    'Pullon' => 'Pullon',
    'Ratagnon Mangyan' => 'Ratagnon Mangyan',
    'Remontado' => 'Remontado',
    'Sadanga' => 'Sadanga',
    'Salegseg' => 'Salegseg',
    'Sama' => 'Sama',
    'Sama Laut' => 'Sama Laut',
    'Sangil' => 'Sangil',
    'Subanen' => 'Subanen',
    'Sulod' => 'Sulod',
    'Sumadel' => 'Sumadel',
    'T-boli' => 'T-boli',
    'Tabangon' => 'Tabangon',
    'Tadyawan Mangyan' => 'Tadyawan Mangyan',
    'Tagabawa' => 'Tagabawa',
    'Tagakaolo' => 'Sama',
    'Talaandig' => 'Talaandig',
    'Talaingod' => 'Talaingod',
    'Taloctok' => 'Taloctok',
    'Tao‟t Bato' => 'Tao‟t Bato',
    'Tigawahanon' => 'Tigawahanon',
    'Tinggian' => 'Tinggian',
    'Tinglayan' => 'Tinglayan',
    'Tiruray' => 'Tiruray',
    'Tonglayan' => 'Tonglayan',
    'Tulgao' => 'Tulgao',
    'Tuwali' => 'Tuwali',
    'Ubo Manobo' => 'Ubo Manobo',
    'Umayamnon' => 'Umayamnon',
    'Yakan' => 'Yakan',
];

?>

@section('content')
    <html>

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <style>
            body {
                font-family: "Times New Roman", Times, serif;
            }

            .h2 {
                font-family: "Times New Roman", Times, serif;
            }

            /* Style the tab */
            .tab {
                overflow: hidden;
                border: 1px solid #ccc;
                background-color: #f1f1f1;
            }

            /* Style the buttons inside the tab */
            .tab button {
                background-color: inherit;
                float: left;
                border: none;
                outline: none;
                cursor: pointer;
                padding: 14px 16px;
                transition: 0.3s;
                font-size: 17px;
            }

            /* Change background color of buttons on hover */
            .tab button:hover {
                background-color: #ddd;
            }

            /* Create an active/current tablink class */
            .tab button.active {
                background-color: #ccc;
            }

            /* Style the tab content */
            .tabcontent {
                display: none;
                padding: 6px 12px;
                border: 1px solid #ccc;
                border-top: none;

            }

            #submitbtn {
                padding-top: 1%;
                padding-left: 1%;
                color: #383c54;
            }

            #submitbutton {
                background-color: #383c54;
                border-block-color: #383c54;
            }
        </style>
    </head>

    <body>

        <div class="w3-container">
            <div class="instruction">
                <h2>Personal Datasheet</h2>
                <p>Click on the buttons inside the tabbed menu.</p>
            </div>

            <div class="w3-bar w3-black">
                <button class="w3-bar-item w3-button tablink" onclick="openForm(event,'C1FORM')">Personal
                    Information</button>
                <button class="w3-bar-item w3-button tablink" onclick="openForm(event,'C2FORM')">Work Experience</button>
                <button class="w3-bar-item w3-button tablink" onclick="openForm(event,'C3FORM')">Voluntary Work</button>
                <button class="w3-bar-item w3-button tablink" onclick="openForm(event,'C4FORM')">Other Information</button>
            </div>

            <script>
                function openForm(evt, formName) {
                    var i, x, tablinks;
                    x = document.getElementsByClassName("form");
                    for (i = 0; i < x.length; i++) {
                        x[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablink");
                    for (i = 0; i < x.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace("w3", "");
                    }
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " w3";
                }
            </script>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="get" action="/c1formsubmit" autocomplete="off" class="form-horizontal">

                <div id="C1FORM" class="tabcontent">
                    <div class="box-form">
                        <div>
                            <p><em><b>WARNING: Any misrepresentation made in the Personal Data Sheet and the Work Experience
                                        Sheet
                                        shall cause the filing of administrative/criminal case/s against the person
                                        concerned.</b></em></p>
                            <p><em><b>READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA SHEET (PDS) BEFORE
                                        ACCOMPLISHING
                                        PDS
                                        FORM.</b></em></p>
                            </p>
                            <p><b>DO NOT ABBREVIATE.</b></p>
                        </div>

                        <div class="personalInformation">
                            <h2 id="personal">I. Personal Information</h2><br>

                            {{-- Full Name --}}
                            <div class="row">
                                <div class="col">
                                    {{ Form::label('surname', 'Last Name') }}
                                    {{ Form::text('surname', null, ['class' => 'form-control', 'id' => 'surname', 'placeholder' => 'Dela Cruz', 'reqiured' => 'required']) }}
                                </div>
                                <div class="col">
                                    {{ Form::label('firstname', 'First Name') }}
                                    {{ Form::text('firstname', null, ['class' => 'form-control', 'id' => 'firstname', 'placeholder' => 'Juan', 'reqiured' => 'required']) }}
                                </div>
                                <div class="col">
                                    {{ Form::label('midname', 'Middle Name') }}
                                    {{ Form::text('midname', null, ['class' => 'form-control', 'id' => 'midname', 'placeholder' => 'Santos', 'reqiured' => 'required']) }}
                                </div>
                                <div class="col col-lg-2">
                                    {{ Form::label('nameext', 'Name Extension') }}
                                    {{ Form::text('nameext', null, ['class' => 'form-control', 'id' => 'nameext', 'placeholder' => 'Jr., Sr.', 'reqiured' => 'required']) }}
                                </div>
                            </div>

                            {{-- Birth --}}
                            <div class="row">
                                <div class="col-12 col-md-8">
                                    <br>
                                    {{ Form::label('placeofBirth', 'Place of Birth') }}
                                    {{ Form::text('placeofBirth', null, ['class' => 'form-control', 'id' => 'placeofBirth', 'placeholder' => 'Municipality/City, Province, Country', 'reqiured' => 'required']) }}
                                </div>
                                <div class="col-6 col-md-4">
                                    <br>

                                    <label for="birthdate">Date of Birth</label><br>

                                    <input type="date" class="date-picker" name="birthdate" id="birthdate"
                                        data-coreui-toggle="date-picker" required>
                                </div>

                            </div>

                            <br>

                            {{-- Sex > Weight --}}
                            <div class="row">
                                <div class="col-sm">
                                    {{-- <div class="form-row align-items-center"> --}}
                                    <div class="col-auto my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Sex</label>
                                        <select class="form-select" aria-label="Default select example" id="sex"
                                            name="sex">
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="col-sm">
                                    <div class="col-auto my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Civil Status</label>
                                        <select class="form-control" aria-label="Default select example" id="civilStatus"
                                            name='civilStatus'>
                                            <option value='single'>Single</option>
                                            <option value='married'>Married</option>
                                            <option value='separated'>Separated</option>
                                            <option value='widowed'>Widowed</option>
                                            <option value='other'>Other/s</option>
                                        </select>
                                        {{ Form::text('civilothers', null, [ 'class' => 'form-control', 'id' => 'civilothers', 'placeholder' => 'If others, specify.']) }}
                                    </div>
                                </div>

                                <div class="col-sm">
                                    {{-- <div class="form-row align-items-center"> --}}
                                    <div class="col-auto my-1">
                                        <label class="mr-sm-2" for="inlineFormCustomSelect">Bloodtype</label>
                                        <select class="form-select" aria-label="Default select example" id="bloodType"
                                            name="bloodType" placeholder="Select one...">
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                            <option value="unknown">unknown</option>
                                        </select>
                                    </div>
                                    {{-- {{ Form::label('bloodType', 'Bloodtype') }}<br>
                    {{ Form::text('bloodType', '', ['required' => 'required']) }} --}}
                                    {{-- </div> --}}
                                </div>
                                <div class="col-sm">
                                    {{ Form::label('height', 'Height') }}<br>
                                    {{ Form::number('height', null, ['class' => 'form-control', 'id' => 'height', 'placeholder' => 'in cm.']) }}
                                </div>
                                <div class="col-sm">
                                    {{ Form::label('weight', 'Weight') }}<br>
                                    {{ Form::number('weight', null, ['class' => 'form-control', 'id' => 'weight', 'placeholder' => 'in kg.']) }}
                                </div>
                            </div>
                        </div>

                        <br>

                        {{-- Government IDs --}}
                        <b>{{ Form::label('Government/Company IDs') }}</b><br>
                        <div class="row">
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="gsisno">GSIS No.</span>
                                    </div>
                                    <input name="gsisno" type="text" class="form-control" aria-label="Small"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="pagibigno">PAG-IBIG No.</span>
                                    </div>
                                    <input name="pagibigno" type="text" class="form-control" aria-label="Small"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="philhealthno">PHILHEALTH No.</span>
                                    </div>
                                    <input name="philhealthno" type="text" class="form-control" aria-label="Small"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                            <div class="col">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="sssno">SSS No.</span>
                                    </div>
                                    <input name="sssno" type="text" class="form-control" aria-label="Small"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="tinno">TIN No.</span>
                                    </div>
                                    <input name="tinno" type="text" class="form-control" aria-label="Small"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="agencyemp">AGENCY EMPLOYEE No.</span>
                                    </div>
                                    <input name="agencyemp" type="text" class="form-control" aria-label="Small"
                                        aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                        </div>

                        {{-- Citizenship --}}
                        <b>{{ Form::label('citizenship', 'Citizenship') }}<br></b>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="citizens" id="flexRadioDefault1"
                                value="Filipino">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Filipino
                            </label>
                            <br>

                            <input class="form-check-input" type="radio" name="citizens" id="flexRadioDefault2"
                                value="Dual Citizenship">
                            <label class="form-check-label" for="flexRadioDefault2">
                                Dual Citizenship
                            </label>


                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="inputGroupSelect01">Select</label>
                                </div>
                                <select class="form-select" aria-label="Default select example" id="citizens2"
                                    name="citizens2" aria-placeholder="Select one...">
                                    <option value="by birth">By Birth</option>
                                    <option value="by naturalization">By Naturalization</option>
                                </select>
                            </div>
                            {{ Form::label('Please indicate country') }}
                            {{ Form::select('country', $countries, null, ['class' => 'form-control', 'placeholder' => 'Select Country...']) }}
                        </div>

                        <br>

                        {{-- Address --}}
                        {{-- <div class="container"> --}}
                        <div class="row">
                            <div class="col">
                                <b>{{ Form::label('residential-address', 'Residential Address') }}<br></b>
                                <div class="row">
                                    <div class="col">
                                        {{ Form::text('residentialhouse', null, ['class' => 'form-control', 'id' => 'houseno-R', 'placeholder' => 'House/Block/Lot No.']) }}
                                        {{ Form::text('residentialst', null, ['class' => 'form-control', 'id' => 'street-R', 'placeholder' => 'Street']) }}
                                        {{ Form::text('residentialsudv', null, ['class' => 'form-control', 'id' => 'subdivillage-R', 'placeholder' => 'Subdivision/Village']) }}
                                    </div><br>
                                    <div class="col">
                                        {{ Form::text('residentialbrgy', null, ['class' => 'form-control', 'id' => 'barangay-R', 'placeholder' => 'Barangay']) }}
                                        {{ Form::text('residentialcity', null, ['class' => 'form-control', 'id' => 'City/Municipality-R', 'placeholder' => 'City/Municipality']) }}
                                        {{ Form::text('residentialprv', null, ['class' => 'form-control', 'id' => 'province-R', 'placeholder' => 'Province', ]) }}
                                        {{-- {{ Form::number('residentialzip', null, ['class' => 'form-control', 'id' => 'zipcode-R', 'placeholder' => 'Zip Code', 'reqiured' => 'required']) }} --}}
                                    </div>
                                </div>
                                <br>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="zipcode-R">Zip Code</span>
                                    </div>
                                    <input type="text" name="residentialzip" id="residentialzip" class="form-control"
                                        aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>

                            <div class="col">
                                <b>{{ Form::label('permanentaddress', 'Permanent Address') }}<br></b>
                                <div class="row">
                                    <div class="col">
                                        {{ Form::text('permanenthouse', null, ['class' => 'form-control', 'id' => 'houseno-P', 'placeholder' => 'House/Block/Lot No.', 'reqiured' => 'required']) }}
                                        {{ Form::text('permanentst', null, ['class' => 'form-control', 'id' => 'street-P', 'placeholder' => 'Street', 'reqiured' => 'required']) }}
                                        {{ Form::text('permanentsubdv', null, ['class' => 'form-control', 'id' => 'subdivillage-P', 'placeholder' => 'Subdivision/Village', 'reqiured' => 'required']) }}
                                    </div>
                                    <div class="col">
                                        {{ Form::text('permanentbrgy', null, ['class' => 'form-control', 'id' => 'barangay-P', 'placeholder' => 'Barangay', 'reqiured' => 'required']) }}
                                        {{ Form::text('permanentcity', null, ['class' => 'form-control', 'id' => 'City/Municipality-P', 'placeholder' => 'City/Municipality', 'reqiured' => 'required']) }}
                                        {{ Form::text('permanentprv', null, ['class' => 'form-control', 'id' => 'province-P', 'placeholder' => 'Province', 'reqiured' => 'required']) }}
                                    </div>
                                </div>
                                <br>
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="zipcode-R">Zip Code</span>
                                    </div>
                                    <input name="permanentzip" id="permanentzip" type="text" class="form-control"
                                        aria-label="Small" aria-describedby="inputGroup-sizing-sm">
                                </div>
                            </div>
                        </div>
                        {{-- </div> --}}

                        <b>
                            {{ Form::label('contact', 'Contact Information') }}<br>
                        </b>
                        <div class="row">
                            <div class="col">
                                {{ Form::text('mobno', null, ['class' => 'form-control', 'id' => 'mobno', 'placeholder' => 'Mobile No.']) }}
                            </div>
                            <div class="col">
                                {{ Form::text('telno', null, ['class' => 'form-control', 'id' => 'telno', 'placeholder' => 'Telephone No.']) }}
                            </div>
                            <div class="col">
                                {{ Form::email('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email Addr.']) }}
                            </div>
                        </div>
                        <br>

                        <div class="familyInformation">
                            <h2 id="family">II. Family Background</h2>
                            <b>{{ Form::label('spouse', "Spouse's Name") }}</b><br>
                            <div class="row">
                                <div class="col">
                                    {{ Form::text('spousesn', null, ['class' => 'form-control', 'id' => 'surname-S', 'placeholder' => 'Last Name']) }}
                                </div>
                                <div class="col">
                                    {{ Form::text('spousefn', null, ['class' => 'form-control', 'id' => 'firstname-S', 'placeholder' => 'First Name']) }}
                                </div>
                                <div class="col">
                                    {{ Form::text('spousemn', null, ['class' => 'form-control', 'id' => 'midname-S', 'placeholder' => 'Middle Name']) }}
                                </div>
                                <div class="col col-lg-2">
                                    {{ Form::text('spousenmext', null, ['class' => 'form-control', 'id' => 'namext-S', 'placeholder' => 'Name Ext.']) }}
                                </div>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    {{ Form::text('spouseocc', null, ['class' => 'form-control', 'id' => 'occupation-S', 'placeholder' => 'Occupation']) }}
                                </div>
                                <div class="col">
                                    {{ Form::text('spouseemp2', null, ['class' => 'form-control', 'id' => 'spouseemp', 'placeholder' => 'Employer/Business Name']) }}
                                </div>
                                <div class="w-100"></div>
                                <div class="col">
                                    {{ Form::text('spouseempadd', null, ['class' => 'form-control', 'id' => 'employadd-S', 'placeholder' => 'Business Address']) }}
                                </div>
                                <div class="col">
                                    {{ Form::text('spousetel', null, ['class' => 'form-control', 'id' => 'telno-S', 'placeholder' => 'Telephone No.']) }}
                                </div>
                            </div><br>

                            <b>{{ Form::label('father', "Father's Name") }}</b><br>
                            <div class="row">
                                <div class="col">
                                    {{ Form::text('fathersn', null, ['class' => 'form-control', 'id' => 'surname-F', 'placeholder' => 'Last Name']) }}
                                </div>
                                <div class="col">
                                    {{ Form::text('fatherfn', null, ['class' => 'form-control', 'id' => 'firstname-F', 'placeholder' => 'First Name']) }}
                                </div>
                                <div class="col">
                                    {{ Form::text('fathermn', null, ['class' => 'form-control', 'id' => 'midname-F', 'placeholder' => 'Middle Name']) }}
                                </div>
                                <div class="col col-lg-2">
                                    {{ Form::text('fatherext', null, ['class' => 'form-control', 'id' => 'namext-F', 'placeholder' => 'Name Ext.']) }}
                                </div>
                            </div><br>

                            <b>{{ Form::label('mother', "Mother's Maiden Name") }}</b><br>
                            <div class="row">
                                <div class="col">
                                    {{ Form::text('mothersn', null, ['class' => 'form-control', 'id' => 'firstname-M', 'placeholder' => 'Last Name']) }}
                                </div>
                                <div class="col">
                                    {{ Form::text('motherfn', null, ['class' => 'form-control', 'id' => 'midname-M', 'placeholder' => 'First Name']) }}
                                </div>
                                <div class="col">
                                    {{ Form::text('mothermn', null, ['class' => 'form-control', 'id' => 'namext-M', 'placeholder' => 'Middle Name']) }}
                                </div>
                                <div class="col col-lg-2">
                                    {{ Form::text('fatherext', null, ['class' => 'form-control', 'id' => 'namext-F', 'placeholder' => 'Name Ext.']) }}
                                </div>
                            </div><br>

                            <div class="children">
                                <b>{{ Form::label('children', 'Name of Children (List all names)') }}</b>
                                <div class="col-1 row px-0">
                                    <div class="col-5 offset-1 px-0">
                                        <button class="btn btn-secondary btn-sm w-100" id="minus-refc1"
                                            disabled>-</button>
                                    </div>
                                    <div class="col-5 offset-1 px-0">
                                        <button class="btn btn-secondary btn-sm w-100" id="add-refc1">+</button>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <b>{{ Form::label('child0', 'Name: ') }}</b>
                                        {{ Form::text('child0', null, ['class' => 'form-control', 'id' => 'child0', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b><label for="birthchild0">Date of Birth:</label><br></b>
                                        <input type="date" class="date-picker" name="birthchild0" id="birthchild0"
                                            data-coreui-toggle="date-picker">
                                    </div>
                                </div>

                                <div class="child1-container d-none">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child1', 'Name: ') }}</b>
                                            {{ Form::text('child1', null, ['class' => 'form-control', 'id' => 'child1', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild1">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild1"
                                                id="birthchild1" data-coreui-toggle="date-picker">
                                        </div>
                                    </div>
                                </div>

                                <div class="child2-container d-none">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child2', 'Name: ') }}</b>
                                            {{ Form::text('child2', null, ['class' => 'form-control', 'id' => 'child2', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild2">Date of Birth:</label><br></b>
                                            <input type="date" class="date-picker" name="birthchild2"
                                                id="birthchild2" data-coreui-toggle="date-picker">
                                        </div>
                                    </div>
                                </div>

                                <div class="child3-container d-none">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child3', 'Name: ') }}</b>
                                            {{ Form::text('child3', null, ['class' => 'form-control', 'id' => 'child3', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild3">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild3"
                                                id="birthchild3" data-coreui-toggle="date-picker">
                                        </div>
                                    </div>
                                </div>

                                <div class="child4-container d-none">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child4', 'Name: ') }}</b>
                                            {{ Form::text('child4', null, ['class' => 'form-control', 'id' => 'child4', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild4">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild4"
                                                id="birthchild4" data-coreui-toggle="date-picker">
                                        </div>
                                    </div>
                                </div>

                                <div class="child5-container d-none">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child5', 'Name: ') }}</b>
                                            {{ Form::text('child5', null, ['class' => 'form-control', 'id' => 'child5', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild5">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild5"
                                                id="birthchild5" data-coreui-toggle="date-picker">
                                        </div>
                                    </div>
                                </div>

                                <div class="child6-container d-none">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child6', 'Name: ') }}</b>
                                            {{ Form::text('child6', null, ['class' => 'form-control', 'id' => 'child6', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild6">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild6"
                                                id="birthchild6" data-coreui-toggle="date-picker">
                                        </div>
                                    </div>
                                </div>

                                <div class="child7-container d-none">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child7', 'Name: ') }}</b>
                                            {{ Form::text('child7', null, ['class' => 'form-control', 'id' => 'child7', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild7">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild7"
                                                id="birthchild7" data-coreui-toggle="date-picker">
                                        </div>
                                    </div>
                                </div>

                                <div class="child8-container d-none">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child8', 'Name: ') }}</b>
                                            {{ Form::text('child8', null, ['class' => 'form-control', 'id' => 'child8', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild8">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild8"
                                                id="birthchild8" data-coreui-toggle="date-picker">
                                        </div>
                                    </div>
                                </div>

                                <div class="child9-container d-none">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child9', 'Name: ') }}</b>
                                            {{ Form::text('child9', null, ['class' => 'form-control', 'id' => 'child9', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild9">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild9"
                                                id="birthchild9" data-coreui-toggle="date-picker">
                                        </div>
                                    </div>
                                </div>

                                <div class="child10-container d-none">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child10', 'Name: ') }}</b>
                                            {{ Form::text('child10', null, ['class' => 'form-control', 'id' => 'child10', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild10">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild10"
                                                id="birthchild10" data-coreui-toggle="date-picker">
                                        </div>
                                    </div>
                                </div>

                                <div class="child11-container d-none">
                                    <div class="row">
                                        <div class="col">
                                            <b>{{ Form::label('child11', 'Name: ') }}</b>
                                            {{ Form::text('child11', null, ['class' => 'form-control', 'id' => 'child11', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                                        </div>
                                        <div class="col">
                                            <b><label for="birthchild11">Date of Birth:</label></b><br>
                                            <input type="date" class="date-picker" name="birthchild11"
                                                id="birthchild11" data-coreui-toggle="date-picker">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="educationalBackground">
                            <h2 id='education'>III. Educational Background</h2>

                            <br>
                            <b>{{ Form::label('elem', 'Elementary') }}</b><br>
                            <div class="row">
                                <div class="col">
                                    {{ Form::text('elemname', null, ['class' => 'form-control', 'id' => 'elemname', 'placeholder' => 'Name of School (No Abbreviations)']) }}<br>
                                </div>
                                <div class="col">
                                    {{ Form::text('elemdeg', null, ['class' => 'form-control', 'id' => 'elemdegree', 'placeholder' => 'Basic Education/Degree/Course (No Abbreviations)']) }}<br>
                                </div>
                            </div>

                            <b>Period of Attendance</b><br>
                            <div class="row">
                                <div class="col">

                                    {{ Form::month('attendancefrom', null, ['class' => 'form-control', 'id' => 'elemattendFrom', 'placeholder' => 'FROM']) }}
                                </div>
                                <div class="col">
                                    {{ Form::month('attendanceto', null, ['class' => 'form-control', 'id' => 'elemattendto', 'placeholder' => 'TO']) }}<br>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    {{ Form::number('elemunitLevel', null, ['class' => 'form-control', 'id' => 'unitLevelelem', 'placeholder' => 'Highest Unit / Level earned']) }}<br>
                                </div>
                                <div class="col">
                                    {{ Form::text('yeargradelem', null, ['class' => 'form-control', 'id' => 'yearelem', 'placeholder' => 'Year Graduated']) }}<br>
                                </div>
                                <div class="col-5">
                                    {{ Form::text('scholarshipelem', null, ['class' => 'form-control', 'id' => 'scholarelem', 'placeholder' => 'Scholarship/Academic Honors Recieved']) }}<br>
                                </div>
                            </div>

                            <b>{{ Form::label('hs', 'Secondary') }}</b><br>
                            <div class="row">
                                <div class="col">
                                    {{ Form::text('hsname', null, ['class' => 'form-control', 'id' => 'hsname', 'placeholder' => 'Name of School (No Abbreviations)']) }}<br>
                                </div>
                                <div class="col">
                                    {{ Form::text('hsdeg', null, ['class' => 'form-control', 'id' => 'hsdegree', 'placeholder' => 'Basic Education/Degree/Course (No Abbreviations)']) }}<br>
                                </div>
                            </div>

                            <b>Period of Attendance</b><br>
                            {{ Form::month('attendancefromhs', null, ['class' => 'form-control', 'id' => 'hsattendFrom', 'placeholder' => 'FROM']) }}
                            {{ Form::month('attendancetohs', null, ['class' => 'form-control', 'id' => 'hsattendto', 'placeholder' => 'TO']) }}<br>
                            <div class="row">
                                <div class="col">
                                    {{ Form::number('hsunitLevel', null, ['class' => 'form-control', 'id' => 'unitLevelelem', 'placeholder' => 'Highest Unit / Level earned']) }}<br>
                                </div>
                                <div class="col">
                                    {{ Form::text('yeargradhs', null, ['class' => 'form-control', 'id' => 'yearhs', 'placeholder' => 'Year Graduated']) }}<br>
                                </div>
                                <div class="col-5">
                                    {{ Form::text('scholarshiphs', null, ['class' => 'form-control', 'id' => 'scholarhs', 'placeholder' => 'Scholarship/Academic Honors Recieved']) }}<br>
                                </div>
                            </div>

                            <b>{{ Form::label('voc', 'Vocational/Trade Course') }}</b><br>
                            <div class="row">
                                <div class="col">
                                    {{ Form::text('vocname', null, ['class' => 'form-control', 'id' => 'vocname', 'placeholder' => 'Name of School (No Abbreviations)']) }}<br>
                                </div>
                                <div class="col">
                                    {{ Form::text('vocdeg', null, ['class' => 'form-control', 'id' => 'vocdegree', 'placeholder' => 'Basic Education/Degree/Course (No Abbreviations)']) }}<br>
                                </div>
                            </div>

                            <b>Period of Attendance</b><br>
                            {{ Form::month('attendancefromvoc', null, ['class' => 'form-control', 'id' => 'vocattendFrom', 'placeholder' => 'FROM']) }}
                            {{ Form::month('attendancetovoc', null, ['class' => 'form-control', 'id' => 'vocattendto', 'placeholder' => 'TO']) }}<br>
                            <div class="row">
                                <div class="col">
                                    {{ Form::number('vocunitLevel', null, ['class' => 'form-control', 'id' => 'unitLevelelem', 'placeholder' => 'Highest Unit / Level earned']) }}<br>
                                </div>
                                <div class="col">
                                    {{ Form::text('yeargradvoc', null, ['class' => 'form-control', 'id' => 'yearvoc', 'placeholder' => 'Year Graduated']) }}<br>
                                </div>
                                <div class="col-5">
                                    {{ Form::text('scholarshipvoc', null, ['class' => 'form-control', 'id' => 'scholarvoc', 'placeholder' => 'Scholarship/Academic Honors Recieved']) }}<br>
                                </div>
                            </div>

                            <b>{{ Form::label('col', 'College') }}</b><br>
                            <div class="row">
                                <div class="col">
                                    {{ Form::text('colname', null, ['class' => 'form-control', 'id' => 'colname', 'placeholder' => 'Name of School (No Abbreviations)']) }}<br>
                                </div>
                                <div class="col">
                                    {{ Form::text('coldeg', null, ['class' => 'form-control', 'id' => 'coldegree', 'placeholder' => 'Basic Education/Degree/Course (No Abbreviations)']) }}<br>
                                </div>
                            </div>

                            <b>Period of Attendance</b><br>
                            {{ Form::month('attendancefromcol', null, ['class' => 'form-control', 'id' => 'colattendFrom', 'placeholder' => 'FROM']) }}
                            {{ Form::month('attendancetocol', null, ['class' => 'form-control', 'id' => 'colattendto', 'placeholder' => 'TO']) }}<br>
                            <div class="row">
                                <div class="col">
                                    {{ Form::number('colunitLevel', null, ['class' => 'form-control', 'id' => 'unitLevelelem', 'placeholder' => 'Highest Unit / Level earned']) }}<br>
                                </div>
                                <div class="col">
                                    {{ Form::text('yeargradcol', null, ['class' => 'form-control', 'id' => 'yearcol', 'placeholder' => 'Year Graduated']) }}<br>
                                </div>
                                <div class="col-5">
                                    {{ Form::text('scholarshipcol', null, ['class' => 'form-control', 'id' => 'scholarcol', 'placeholder' => 'Scholarship/Academic Honors Recieved']) }}<br>
                                </div>
                            </div>

                            <b>{{ Form::label('grad', 'Graduate Studies') }}</b><br>
                            <div class="row">
                                <div class="col">
                                    {{ Form::text('gradname', null, ['class' => 'form-control', 'id' => 'gradname', 'placeholder' => 'Name of School (No Abbreviations)']) }}<br>
                                </div>
                                <div class="col">
                                    {{ Form::text('graddeg', null, ['class' => 'form-control', 'id' => 'graddegree', 'placeholder' => 'Basic Education/Degree/Course (No Abbreviations)']) }}<br>
                                </div>
                            </div>

                            <b>Period of Attendance</b><br>
                            {{ Form::month('attendancefromgrad', null, ['class' => 'form-control', 'id' => 'gradattendFrom', 'placeholder' => 'FROM']) }}
                            {{ Form::month('attendancetograd', null, ['class' => 'form-control', 'id' => 'gradattendto', 'placeholder' => 'TO']) }}<br>
                            <div class="row">
                                <div class="col">
                                    {{ Form::number('gradunitLevel', null, ['class' => 'form-control', 'id' => 'unitLevelelem', 'placeholder' => 'Highest Unit / Level earned']) }}<br>
                                </div>
                                <div class="col">
                                    {{ Form::text('yeargradgrad', null, ['class' => 'form-control', 'id' => 'yeargrad', 'placeholder' => 'Year Graduated']) }}<br>
                                </div>
                                <div class="col-5">
                                    {{ Form::text('scholarshipgrad', null, ['class' => 'form-control', 'id' => 'scholargrad', 'placeholder' => 'Scholarship/Academic Honors Recieved']) }}<br>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>

                <div id="C2FORM" class="tabcontent">
                    <div class="box-form">
                        <div class="col-1 row px-0">
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="minus-refc2"
                                    disabled>-</button>
                            </div>
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="add-refc2">+</button>
                            </div>
                        </div>

                        <div class="form-container static">
                            <div class="container">
                                <h3>#1</h3>
                                <div class="row align-items-center">
                                    <div class="col">
                                        {{ Form::label('eligibility', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                        {{ Form::text('eligibility', '', ['class' => 'form-control']) }}

                                        {{ Form::label('rating', 'Rating (if applicable)') }}
                                        {{ Form::text('rating', '', ['class' => 'form-control']) }}

                                        {{ Form::label('dateofexam', 'Date of Examination/Conferment') }}<br>
                                        {{ Form::date('dateofexam', '', ['class' => '']) }}<br>
                                    </div>
                                    <div class="col">
                                        {{ Form::label('placeofexam', 'Place of Examination/Conferment') }}
                                        {{ Form::text('placeofexam', '', ['class' => 'form-control']) }}

                                        {{ Form::label('licenseno', 'Licsense number (if applicable)') }}
                                        {{ Form::number('licenseno', '', ['class' => 'form-control']) }}

                                        {{ Form::label('validity', 'Date of Validity') }}<br>
                                        {{ Form::date('validity', '', ['class' => '']) }}
                                    </div>
                                </div>
                                <br>
                            </div>
                        </div>

                        <div class='form-container1 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#2</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            {{ Form::label('eligibility2', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                            {{ Form::text('eligibility2', '', ['class' => 'form-control']) }}
                                            {{ Form::label('rating2', 'Rating (if applicable)') }}
                                            {{ Form::text('rating2', '', ['class' => 'form-control']) }}
                                            {{ Form::label('dateofexam2', 'Date of Examination/Conferment') }}<br>
                                            {{ Form::date('dateofexam2', '', ['class' => '']) }}<br>
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('placeofexam2', 'Place of Examination/Conferment') }}
                                            {{ Form::text('placeofexam2', '', ['class' => 'form-control']) }}
                                            {{ Form::label('licenseno2', 'License number (if applicable)') }}
                                            {{ Form::number('licenseno2', '', ['class' => 'form-control']) }}
                                            {{ Form::label('validity2', 'Date of Validity') }}<br>
                                            {{ Form::date('validity2', '', ['class' => '']) }}<br>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class='form-container2 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#3</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            {{ Form::label('eligibility3', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                            {{ Form::text('eligibility3', '', ['class' => 'form-control']) }}
                                            {{ Form::label('rating3', 'Rating (if applicable)') }}
                                            {{ Form::text('rating3', '', ['class' => 'form-control']) }}
                                            {{ Form::label('dateofexam3', 'Date of Examination/Conferment') }}<br>
                                            {{ Form::date('dateofexam3', '', ['class' => '']) }}<br>
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('placeofexam3', 'Place of Examination/Conferment') }}
                                            {{ Form::text('placeofexam3', '', ['class' => 'form-control']) }}
                                            {{ Form::label('licenseno3', 'License number (if applicable)') }}
                                            {{ Form::number('licenseno3', '', ['class' => 'form-control']) }}
                                            {{ Form::label('validity3', 'Date of Validity') }}<br>
                                            {{ Form::date('validity3', '', ['class' => '']) }}<br>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class='form-container3 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#4</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            {{ Form::label('eligibility4', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                            {{ Form::text('eligibility4', '', ['class' => 'form-control']) }}
                                            {{ Form::label('rating4', 'Rating (if applicable)') }}
                                            {{ Form::text('rating4', '', ['class' => 'form-control']) }}
                                            {{ Form::label('dateofexam4', 'Date of Examination/Conferment') }}<br>
                                            {{ Form::date('dateofexam4', '', ['class' => '']) }}<br>
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('placeofexam4', 'Place of Examination/Conferment') }}
                                            {{ Form::text('placeofexam4', '', ['class' => 'form-control']) }}
                                            {{ Form::label('licenseno4', 'License number (if applicable)') }}
                                            {{ Form::number('licenseno4', '', ['class' => 'form-control']) }}
                                            {{ Form::label('validity4', 'Date of Validity') }}<br>
                                            {{ Form::date('validity4', '', ['class' => '']) }}<br>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class='form-container4 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#5</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            {{ Form::label('eligibility5', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                            {{ Form::text('eligibility5', '', ['class' => 'form-control']) }}
                                            {{ Form::label('rating5', 'Rating (if applicable)') }}
                                            {{ Form::text('rating5', '', ['class' => 'form-control']) }}
                                            {{ Form::label('dateofexam5', 'Date of Examination/Conferment') }}<br>
                                            {{ Form::date('dateofexam5', '', ['class' => '']) }}<br>
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('placeofexam5', 'Place of Examination/Conferment') }}
                                            {{ Form::text('placeofexam5', '', ['class' => 'form-control']) }}
                                            {{ Form::label('licenseno5', 'License number (if applicable)') }}
                                            {{ Form::number('licenseno5', '', ['class' => 'form-control']) }}
                                            {{ Form::label('validity5', 'Date of Validity') }}<br>
                                            {{ Form::date('validity5', '', ['class' => '']) }}<br>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class='form-container5 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#6</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            {{ Form::label('eligibility6', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                            {{ Form::text('eligibility6', '', ['class' => 'form-control']) }}
                                            {{ Form::label('rating6', 'Rating (if applicable)') }}
                                            {{ Form::text('rating6', '', ['class' => 'form-control']) }}
                                            {{ Form::label('dateofexam6', 'Date of Examination/Conferment') }}<br>
                                            {{ Form::date('dateofexam6', '', ['class' => '']) }}<br>
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('placeofexam6', 'Place of Examination/Conferment') }}
                                            {{ Form::text('placeofexam6', '', ['class' => 'form-control']) }}
                                            {{ Form::label('licenseno6', 'License number (if applicable)') }}
                                            {{ Form::number('licenseno6', '', ['class' => 'form-control']) }}
                                            {{ Form::label('validity6', 'Date of Validity') }}<br>
                                            {{ Form::date('validity6', '', ['class' => '']) }}<br>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>
                        <div class='form-container6 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#7</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            {{ Form::label('eligibility7', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License") }}
                                            {{ Form::text('eligibility7', '', ['class' => 'form-control']) }}
                                            {{ Form::label('rating7', 'Rating (if applicable)') }}
                                            {{ Form::text('rating7', '', ['class' => 'form-control']) }}
                                            {{ Form::label('dateofexam7', 'Date of Examination/Conferment') }}<br>
                                            {{ Form::date('dateofexam7', '', ['class' => '']) }}<br>
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('placeofexam7', 'Place of Examination/Conferment') }}
                                            {{ Form::text('placeofexam7', '', ['class' => 'form-control']) }}
                                            {{ Form::label('licenseno7', 'License number (if applicable)') }}
                                            {{ Form::number('licenseno7', '', ['class' => 'form-control']) }}
                                            {{ Form::label('validity7', 'Date of Validity') }}<br>
                                            {{ Form::date('validity7', '', ['class' => '']) }}<br>
                                        </div>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </div>

                        <h2>V. WORK EXPERIENCE</h2><br>

                        <div class="col-1 row px-0">
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="minus-refc21"
                                    disabled>-</button>
                            </div>
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="add-refc21">+</button>
                            </div>
                        </div>


                        <div class="form-container static">
                            <div class='container'>
                                <h2>#1</h2>
                                <div class='row align-items-center'>
                                    <div class='col'>
                                        <label>Inclusive Dates</label><br>
                                        {{ Form::label('datefrom', 'From') }}
                                        {{ Form::date('datefrom', '', ['class' => '']) }}

                                        {{ Form::label('dateto', 'To') }}
                                        {{ Form::date('dateto', '', ['class' => '']) }}<br>

                                        {{ Form::label('position', 'Position/Title (Do Not Abbreviate)') }}
                                        {{ Form::text('position', '', ['class' => 'form-control']) }}

                                        {{ Form::label('department', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                        {{ Form::text('department', '', ['class' => 'form-control']) }}

                                        {{ Form::label('salary', 'Monthly Salary') }}
                                        {{ Form::text('salary', '', ['class' => 'form-control']) }}
                                    </div>
                                    <div class='col'>
                                        {{ Form::label('paygrade', 'Salary/Job/Pay Grade (if applicable)') }}
                                        {{ Form::text('paygrade', '', ['class' => 'form-control']) }}

                                        {{ Form::label('appointment', 'Status of Appointment') }}
                                        {{ Form::text('appointment', '', ['class' => 'form-control']) }}

                                        {{ Form::label('governmentserv', 'Government service (Y/N)') }}
                                        <select class="custom-select mr-sm-2" id="governmentserv" name="governmentserv"
                                            >
                                            <option value=''></option>
                                            <option value="Yes">YES</option>
                                            <option value="No">NO</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div><br>

                        <div class='form-container21 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#2</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom2', 'From') }}
                                            {{ Form::date('datefrom2', '', ['class' => '']) }}
                                            {{ Form::label('dateto2', 'To') }}
                                            {{ Form::date('dateto2', '', ['class' => '']) }}<br>
                                            {{ Form::label('position2', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position2', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department2', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department2', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary2', 'Monthly Salary') }}
                                            {{ Form::text('salary2', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade2', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade2', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment2', 'Status of Appointment') }}
                                            {{ Form::text('appointment2', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv2', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv2'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container22 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#3</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom3', 'From') }}
                                            {{ Form::date('datefrom3', '', ['class' => '']) }}
                                            {{ Form::label('dateto3', 'To') }}
                                            {{ Form::date('dateto3', '', ['class' => '']) }}<br>
                                            {{ Form::label('position3', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position3', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department3', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department3', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary3', 'Monthly Salary') }}
                                            {{ Form::text('salary3', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade3', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade3', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment3', 'Status of Appointment') }}
                                            {{ Form::text('appointment3', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv3', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv3'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container23 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#4</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom4', 'From') }}
                                            {{ Form::date('datefrom4', '', ['class' => '']) }}
                                            {{ Form::label('dateto4', 'To') }}
                                            {{ Form::date('dateto4', '', ['class' => '']) }}<br>
                                            {{ Form::label('position4', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position4', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department4', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department4', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary4', 'Monthly Salary') }}
                                            {{ Form::text('salary4', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade4', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade4', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment4', 'Status of Appointment') }}
                                            {{ Form::text('appointment4', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv4', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv4'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container24 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#5</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom5', 'From') }}
                                            {{ Form::date('datefrom5', '', ['class' => '']) }}
                                            {{ Form::label('dateto5', 'To') }}
                                            {{ Form::date('dateto5', '', ['class' => '']) }}<br>
                                            {{ Form::label('position5', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position5', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department5', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department5', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary5', 'Monthly Salary') }}
                                            {{ Form::text('salary5', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade5', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade5', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment5', 'Status of Appointment') }}
                                            {{ Form::text('appointment5', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv5', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv5'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container25 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#6</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom6', 'From') }}
                                            {{ Form::date('datefrom6', '', ['class' => '']) }}
                                            {{ Form::label('dateto6', 'To') }}
                                            {{ Form::date('dateto6', '', ['class' => '']) }}<br>
                                            {{ Form::label('position6', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position6', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department6', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department6', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary6', 'Monthly Salary') }}
                                            {{ Form::text('salary6', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade6', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade6', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment6', 'Status of Appointment') }}
                                            {{ Form::text('appointment6', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv6', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv6'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container26 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#7</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom7', 'From') }}
                                            {{ Form::date('datefrom7', '', ['class' => '']) }}
                                            {{ Form::label('dateto7', 'To') }}
                                            {{ Form::date('dateto7', '', ['class' => '']) }}<br>
                                            {{ Form::label('position7', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position7', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department7', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department7', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary7', 'Monthly Salary') }}
                                            {{ Form::text('salary7', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade7', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade7', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment7', 'Status of Appointment') }}
                                            {{ Form::text('appointment7', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv7', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv7'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container27 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#8</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom8', 'From') }}
                                            {{ Form::date('datefrom8', '', ['class' => '']) }}
                                            {{ Form::label('dateto8', 'To') }}
                                            {{ Form::date('dateto8', '', ['class' => '']) }}<br>
                                            {{ Form::label('position8', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position8', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department8', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department8', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary8', 'Monthly Salary') }}
                                            {{ Form::text('salary8', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade8', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade8', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment8', 'Status of Appointment') }}
                                            {{ Form::text('appointment8', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv8', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv8'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container28 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#9</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom9', 'From') }}
                                            {{ Form::date('datefrom9', '', ['class' => '']) }}
                                            {{ Form::label('dateto9', 'To') }}
                                            {{ Form::date('dateto9', '', ['class' => '']) }}<br>
                                            {{ Form::label('position9', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position9', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department9', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department9', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary9', 'Monthly Salary') }}
                                            {{ Form::text('salary9', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade9', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade9', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment9', 'Status of Appointment') }}
                                            {{ Form::text('appointment9', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv9', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv9'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container29 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#10</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom10', 'From') }}
                                            {{ Form::date('datefrom10', '', ['class' => '']) }}
                                            {{ Form::label('dateto10', 'To') }}
                                            {{ Form::date('dateto10', '', ['class' => '']) }}<br>
                                            {{ Form::label('position10', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position10', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department10', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department10', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary10', 'Monthly Salary') }}
                                            {{ Form::text('salary10', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade10', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade10', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment10', 'Status of Appointment') }}
                                            {{ Form::text('appointment10', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv10', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv10'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container30 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#11</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom11', 'From') }}
                                            {{ Form::date('datefrom11', '', ['class' => '']) }}
                                            {{ Form::label('dateto11', 'To') }}
                                            {{ Form::date('dateto11', '', ['class' => '']) }}<br>
                                            {{ Form::label('position11', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position11', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department11', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department11', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary11', 'Monthly Salary') }}
                                            {{ Form::text('salary11', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade11', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade11', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment11', 'Status of Appointment') }}
                                            {{ Form::text('appointment11', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv11', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv11'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container31 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#12</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom12', 'From') }}
                                            {{ Form::date('datefrom12', '', ['class' => '']) }}
                                            {{ Form::label('dateto12', 'To') }}
                                            {{ Form::date('dateto12', '', ['class' => '']) }}<br>
                                            {{ Form::label('position12', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position12', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department12', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department12', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary12', 'Monthly Salary') }}
                                            {{ Form::text('salary12', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade12', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade12', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment12', 'Status of Appointment') }}
                                            {{ Form::text('appointment12', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv12', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv12'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container32 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#13</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom13', 'From') }}
                                            {{ Form::date('datefrom13', '', ['class' => '']) }}
                                            {{ Form::label('dateto13', 'To') }}
                                            {{ Form::date('dateto13', '', ['class' => '']) }}<br>
                                            {{ Form::label('position13', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position13', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department13', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department13', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary13', 'Monthly Salary') }}
                                            {{ Form::text('salary13', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade13', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade13', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment13', 'Status of Appointment') }}
                                            {{ Form::text('appointment13', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv13', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv13'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container33 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#14</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom14', 'From') }}
                                            {{ Form::date('datefrom14', '', ['class' => '']) }}
                                            {{ Form::label('dateto14', 'To') }}
                                            {{ Form::date('dateto14', '', ['class' => '']) }}<br>
                                            {{ Form::label('position14', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position14', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department14', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department14', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary14', 'Monthly Salary') }}
                                            {{ Form::text('salary14', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade14', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade14', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment14', 'Status of Appointment') }}
                                            {{ Form::text('appointment14', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv14', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv14'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container34 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#15</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom15', 'From') }}
                                            {{ Form::date('datefrom15', '', ['class' => '']) }}
                                            {{ Form::label('dateto15', 'To') }}
                                            {{ Form::date('dateto15', '', ['class' => '']) }}<br>
                                            {{ Form::label('position15', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position15', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department15', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department15', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary15', 'Monthly Salary') }}
                                            {{ Form::text('salary15', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade15', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade15', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment15', 'Status of Appointment') }}
                                            {{ Form::text('appointment15', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv15', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv15'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container35 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#16</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom16', 'From') }}
                                            {{ Form::date('datefrom16', '', ['class' => '']) }}
                                            {{ Form::label('dateto16', 'To') }}
                                            {{ Form::date('dateto16', '', ['class' => '']) }}<br>
                                            {{ Form::label('position16', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position16', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department16', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department16', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary16', 'Monthly Salary') }}
                                            {{ Form::text('salary16', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade16', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade16', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment16', 'Status of Appointment') }}
                                            {{ Form::text('appointment16', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv16', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv16'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container36 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#17</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom17', 'From') }}
                                            {{ Form::date('datefrom17', '', ['class' => '']) }}
                                            {{ Form::label('dateto17', 'To') }}
                                            {{ Form::date('dateto17', '', ['class' => '']) }}<br>
                                            {{ Form::label('position17', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position17', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department17', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department17', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary17', 'Monthly Salary') }}
                                            {{ Form::text('salary17', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade17', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade17', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment17', 'Status of Appointment') }}
                                            {{ Form::text('appointment17', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv17', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv17'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container37 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#18</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom18', 'From') }}
                                            {{ Form::date('datefrom18', '', ['class' => '']) }}
                                            {{ Form::label('dateto18', 'To') }}
                                            {{ Form::date('dateto18', '', ['class' => '']) }}<br>
                                            {{ Form::label('position18', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position18', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department18', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department18', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary18', 'Monthly Salary') }}
                                            {{ Form::text('salary18', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade18', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade18', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment18', 'Status of Appointment') }}
                                            {{ Form::text('appointment18', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv18', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv18'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container38 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#19</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom19', 'From') }}
                                            {{ Form::date('datefrom19', '', ['class' => '']) }}
                                            {{ Form::label('dateto19', 'To') }}
                                            {{ Form::date('dateto19', '', ['class' => '']) }}<br>
                                            {{ Form::label('position19', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position19', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department19', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department19', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary19', 'Monthly Salary') }}
                                            {{ Form::text('salary19', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade19', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade19', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment19', 'Status of Appointment') }}
                                            {{ Form::text('appointment19', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv19', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv19'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container39 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#20</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom20', 'From') }}
                                            {{ Form::date('datefrom20', '', ['class' => '']) }}
                                            {{ Form::label('dateto20', 'To') }}
                                            {{ Form::date('dateto20', '', ['class' => '']) }}<br>
                                            {{ Form::label('position20', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position20', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department20', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department20', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary20', 'Monthly Salary') }}
                                            {{ Form::text('salary20', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade20', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade20', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment20', 'Status of Appointment') }}
                                            {{ Form::text('appointment20', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv20', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv20'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container40 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#21</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom21', 'From') }}
                                            {{ Form::date('datefrom21', '', ['class' => '']) }}
                                            {{ Form::label('dateto21', 'To') }}
                                            {{ Form::date('dateto21', '', ['class' => '']) }}<br>
                                            {{ Form::label('position21', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position21', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department21', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department21', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary21', 'Monthly Salary') }}
                                            {{ Form::text('salary21', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade21', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade21', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment21', 'Status of Appointment') }}
                                            {{ Form::text('appointment21', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv21', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv21'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container41 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#22</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom22', 'From') }}
                                            {{ Form::date('datefrom22', '', ['class' => '']) }}
                                            {{ Form::label('dateto22', 'To') }}
                                            {{ Form::date('dateto22', '', ['class' => '']) }}<br>
                                            {{ Form::label('position22', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position22', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department22', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department22', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary22', 'Monthly Salary') }}
                                            {{ Form::text('salary22', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade22', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade22', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment22', 'Status of Appointment') }}
                                            {{ Form::text('appointment22', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv22', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv22'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container42 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#23</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom23', 'From') }}
                                            {{ Form::date('datefrom23', '', ['class' => '']) }}
                                            {{ Form::label('dateto23', 'To') }}
                                            {{ Form::date('dateto23', '', ['class' => '']) }}<br>
                                            {{ Form::label('position23', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position23', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department23', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department23', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary23', 'Monthly Salary') }}
                                            {{ Form::text('salary23', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade23', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade23', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment23', 'Status of Appointment') }}
                                            {{ Form::text('appointment23', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv23', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv23'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container43 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#24</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom24', 'From') }}
                                            {{ Form::date('datefrom24', '', ['class' => '']) }}
                                            {{ Form::label('dateto24', 'To') }}
                                            {{ Form::date('dateto24', '', ['class' => '']) }}<br>
                                            {{ Form::label('position24', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position24', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department24', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department24', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary24', 'Monthly Salary') }}
                                            {{ Form::text('salary24', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade24', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade24', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment24', 'Status of Appointment') }}
                                            {{ Form::text('appointment24', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv24', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv24'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container44 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#25</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom25', 'From') }}
                                            {{ Form::date('datefrom25', '', ['class' => '']) }}
                                            {{ Form::label('dateto25', 'To') }}
                                            {{ Form::date('dateto25', '', ['class' => '']) }}<br>
                                            {{ Form::label('position25', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position25', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department25', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department25', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary25', 'Monthly Salary') }}
                                            {{ Form::text('salary25', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade25', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade25', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment25', 'Status of Appointment') }}
                                            {{ Form::text('appointment25', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv25', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv25'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container45 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#26</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom26', 'From') }}
                                            {{ Form::date('datefrom26', '', ['class' => '']) }}
                                            {{ Form::label('dateto26', 'To') }}
                                            {{ Form::date('dateto26', '', ['class' => '']) }}<br>
                                            {{ Form::label('position26', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position26', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department26', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department26', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary26', 'Monthly Salary') }}
                                            {{ Form::text('salary26', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade26', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade26', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment26', 'Status of Appointment') }}
                                            {{ Form::text('appointment26', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv26', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv26'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container46 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#27</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom27', 'From') }}
                                            {{ Form::date('datefrom27', '', ['class' => '']) }}
                                            {{ Form::label('dateto27', 'To') }}
                                            {{ Form::date('dateto27', '', ['class' => '']) }}<br>
                                            {{ Form::label('position27', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position27', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department27', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department27', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary27', 'Monthly Salary') }}
                                            {{ Form::text('salary27', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade27', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade27', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment27', 'Status of Appointment') }}
                                            {{ Form::text('appointment27', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv27', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv27'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                        <div class='form-container47 d-none'>
                            <div class='form-group'>
                                <div class='container'>
                                    <h3>#28</h3>
                                    <div class='row align-items-center'>
                                        <div class='col'>
                                            <label>Inclusive Dates</label><br>
                                            {{ Form::label('datefrom28', 'From') }}
                                            {{ Form::date('datefrom28', '', ['class' => '']) }}
                                            {{ Form::label('dateto28', 'To') }}
                                            {{ Form::date('dateto28', '', ['class' => '']) }}<br>
                                            {{ Form::label('position28', 'Position/Title (Do Not Abbreviate)') }}
                                            {{ Form::text('position28', '', ['class' => 'form-control']) }}
                                            {{ Form::label('department28', 'Department/Agency/Office/Company (Do Not Abbreviate)') }}
                                            {{ Form::text('department28', '', ['class' => 'form-control']) }}
                                            {{ Form::label('salary28', 'Monthly Salary') }}
                                            {{ Form::text('salary28', '', ['class' => 'form-control']) }}
                                        </div>
                                        <div class='col'>
                                            {{ Form::label('paygrade28', 'Salary/Job/Pay Grade (if applicable)') }}
                                            {{ Form::text('paygrade28', '', ['class' => 'form-control']) }}
                                            {{ Form::label('appointment28', 'Status of Appointment') }}
                                            {{ Form::text('appointment28', '', ['class' => 'form-control']) }}
                                            {{ Form::label('governmentserv28', 'Government service (Y/N)') }}
                                            <select class='custom-select mr-sm-2' id='governmentserv'
                                                name='governmentserv28'>
                                                <option value=''></option>
                                                <option value='Yes'>YES</option>
                                                <option value='No'>NO</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>
                        </div>
                    </div>
                </div>
                <div id="C3FORM" class="tabcontent">

                    <div class="box-form">

                        <h2>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC/NON-GOVERNMENT/PEOPLE/VOLUNTARY ORGANIZATION</h2>
                        <h5>{{ Form::label('orgname', 'Please fill-up the following: ') }}</h5>
                        <br>
                        <div class="org0-static">
                            <div class="orgname1">
                                <div class="row">
                                    <div class="col">
                                        <b>{{ Form::label('orgnameAddress1', 'Name & Address of Organization: ') }}</b>
                                        {{ Form::text('orgnameAddress1', null, ['class' => 'form-control', 'id' => 'orgnameAddress1', 'placeholder' => 'Name & Address of Organization...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateFrom1', 'From: ') }}</b><br>
                                            {{ Form::date('orgdateFrom1', '') }}
                                        </div>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateTo1', 'To: ') }}</b><br>
                                            {{ Form::date('orgdateTo1', '') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <b>{{ Form::label('orgnumHours1', 'Number of Hours: ') }}</b><br>
                                        {{ Form::text('orgnumHours1', null, ['class' => 'form-control', 'id' => 'orgnumHours1', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgPosition1', 'Position/Nature of Work: ') }}</b>
                                        {{ Form::text('orgPosition1', null, ['class' => 'form-control', 'id' => 'orgPosition1', 'placeholder' => 'Position/Nature of Work...', 'autocomplete' => 'off']) }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="org1-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress2', 'Name & Address of Organization: ') }}</b>
                                    {{ Form::text('orgnameAddress2', null, ['class' => 'form-control', 'id' => 'orgnameAddress2', 'placeholder' => 'Name & Address of Organization...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom2', 'From: ') }}</b><br>
                                        {{ Form::date('orgdateFrom2', '') }}
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo2', 'To: ') }}</b><br>
                                        {{ Form::date('orgdateTo2', '') }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <b>{{ Form::label('orgnumHours2', 'Number of Hours: ') }}</b><br>
                                    {{ Form::text('orgnumHours2', null, ['class' => 'form-control', 'id' => 'orgnumHours2', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgPosition2', 'Position/Nature of Work: ') }}</b>
                                    {{ Form::text('orgPosition2', null, ['class' => 'form-control', 'id' => 'orgPosition2', 'placeholder' => 'Position/Nature of Work...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="org2-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress3', 'Name & Address of Organization: ') }}</b>
                                    {{ Form::text('orgnameAddress3', null, ['class' => 'form-control', 'id' => 'orgnameAddress3', 'placeholder' => 'Name & Address of Organization...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom3', 'From: ') }}</b><br>
                                        {{ Form::date('orgdateFrom3', '') }}
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo3', 'To: ') }}</b><br>
                                        {{ Form::date('orgdateTo3', '') }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <b>{{ Form::label('orgnumHours3', 'Number of Hours: ') }}</b><br>
                                    {{ Form::text('orgnumHours3', null, ['class' => 'form-control', 'id' => 'orgnumHours3', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgPosition3', 'Position/Nature of Work: ') }}</b>
                                    {{ Form::text('orgPosition3', null, ['class' => 'form-control', 'id' => 'orgPosition3', 'placeholder' => 'Position/Nature of Work...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="org3-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress4', 'Name & Address of Organization: ') }}</b>
                                    {{ Form::text('orgnameAddress4', null, ['class' => 'form-control', 'id' => 'orgnameAddress4', 'placeholder' => 'Name & Address of Organization...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom4', 'From: ') }}</b><br>
                                        {{ Form::date('orgdateFrom4', '') }}
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo4', 'To: ') }}</b><br>
                                        {{ Form::date('orgdateTo4', '') }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <b>{{ Form::label('orgnumHours4', 'Number of Hours: ') }}</b><br>
                                    {{ Form::text('orgnumHours4', null, ['class' => 'form-control', 'id' => 'orgnumHours4', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgPosition4', 'Position/Nature of Work: ') }}</b>
                                    {{ Form::text('orgPosition4', null, ['class' => 'form-control', 'id' => 'orgPosition4', 'placeholder' => 'Position/Nature of Work...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="org4-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress5', 'Name & Address of Organization: ') }}</b>
                                    {{ Form::text('orgnameAddress5', null, ['class' => 'form-control', 'id' => 'orgnameAddress5', 'placeholder' => 'Name & Address of Organization...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom5', 'From: ') }}</b><br>
                                        {{ Form::date('orgdateFrom5', '') }}
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo5', 'To: ') }}</b><br>
                                        {{ Form::date('orgdateTo5', '') }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <b>{{ Form::label('orgnumHours5', 'Number of Hours: ') }}</b><br>
                                    {{ Form::text('orgnumHours5', null, ['class' => 'form-control', 'id' => 'orgnumHours5', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgPosition5', 'Position/Nature of Work: ') }}</b>
                                    {{ Form::text('orgPosition5', null, ['class' => 'form-control', 'id' => 'orgPosition5', 'placeholder' => 'Position/Nature of Work...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="org5-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress6', 'Name & Address of Organization: ') }}</b>
                                    {{ Form::text('orgnameAddress6', null, ['class' => 'form-control', 'id' => 'orgnameAddress6', 'placeholder' => 'Name & Address of Organization...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom6', 'From: ') }}</b><br>
                                        {{ Form::date('orgdateFrom6', '') }}
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo6', 'To: ') }}</b><br>
                                        {{ Form::date('orgdateTo6', '') }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <b>{{ Form::label('orgnumHours6', 'Number of Hours: ') }}</b><br>
                                    {{ Form::text('orgnumHours6', null, ['class' => 'form-control', 'id' => 'orgnumHours6', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgPosition6', 'Position/Nature of Work: ') }}</b>
                                    {{ Form::text('orgPosition6', null, ['class' => 'form-control', 'id' => 'orgPosition6', 'placeholder' => 'Position/Nature of Work...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="org6-container d-none">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameAddress7', 'Name & Address of Organization: ') }}</b>
                                    {{ Form::text('orgnameAddress7', null, ['class' => 'form-control', 'id' => 'orgnameAddress7', 'placeholder' => 'Name & Address of Organization...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('Inclusive Dates: ') }}</b><br>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateFrom7', 'From: ') }}</b><br>
                                        {{ Form::date('orgdateFrom7', '') }}
                                    </div>
                                    <div class="form-inline">
                                        <b>{{ Form::label('orgdateTo7', 'To: ') }}</b><br>
                                        {{ Form::date('orgdateTo7', '') }}
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <b>{{ Form::label('orgnumHours7', 'Number of Hours: ') }}</b><br>
                                    {{ Form::text('orgnumHours7', null, ['class' => 'form-control', 'id' => 'orgnumHours7', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgPosition5', 'Position/Nature of Work: ') }}</b>
                                    {{ Form::text('orgPosition7', null, ['class' => 'form-control', 'id' => 'orgPosition7', 'placeholder' => 'Position/Nature of Work...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-1 row px-0">
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="minus-refc3"
                                    disabled>-</button>
                            </div>
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="add-refc3">+</button>
                            </div>
                        </div>

                        <h2>VII. LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS ATTENDED</h2>
                        <h6 style="font-style: italic;">(Start from the most recent L&D/training program and include only
                            the
                            relevant L&D/training taken for the last five (5) years for Division Chief/Executive/Managerial
                            positions)</h6><br>
                        <h5>{{ Form::label('orgname', 'Please fill-up the following:') }}</h5>
                        <br>

                        <div class="org-static2">

                            <div class="orgname7-static">
                                <div class="row">
                                    <div class="col">
                                        <b>{{ Form::label('orgnameAddress8', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                        {{ Form::text('orgnameAddress8', null, ['class' => 'form-control', 'id' => 'orgnameAddress8', 'placeholder' => 'Title of Learning and Development Interventions/Training Programs...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateFrom8', 'From: ') }}</b><br>
                                            {{ Form::date('orgdateFrom8', '') }}
                                        </div>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateTo8', 'To: ') }}</b><br>
                                            {{ Form::date('orgdateTo8', '') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <b>{{ Form::label('orgnumHours8', 'Number of Hours: ') }}</b><br>
                                        {{ Form::text('orgnumHours8', null, ['class' => 'form-control', 'id' => 'orgnumHours8', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgType8', 'Type of LD: ') }}</b>
                                        {{ Form::text('orgType8', null, ['class' => 'form-control', 'id' => 'orgType8', 'placeholder' => 'Type of LD...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgnameSponsor8', 'Conducted/Sponsored by: ') }}</b>
                                        {{ Form::text('orgnameSponsor8', null, ['class' => 'form-control', 'id' => 'orgnameSponsor8', 'placeholder' => 'Conducted/Sponsored by...', 'autocomplete' => 'off']) }}
                                    </div>
                                </div>
                            </div>


                            <div class="orgLD1-container d-none">
                                <div class="row">
                                    <div class="col">
                                        <b>{{ Form::label('orgnameAddress9', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                        {{ Form::text('orgnameAddress9', null, ['class' => 'form-control', 'id' => 'orgnameAddress9', 'placeholder' => 'Title of Learning and Development Interventions/Training Programs...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateFrom9', 'From: ') }}</b><br>
                                            {{ Form::date('orgdateFrom9', '') }}
                                        </div>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateTo9', 'To: ') }}</b><br>
                                            {{ Form::date('orgdateTo9', '') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <b>{{ Form::label('orgnumHours9', 'Number of Hours: ') }}</b><br>
                                        {{ Form::text('orgnumHours9', null, ['class' => 'form-control', 'id' => 'orgnumHours9', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgType9', 'Type of LD: ') }}</b>
                                        {{ Form::text('orgType9', null, ['class' => 'form-control', 'id' => 'orgType9', 'placeholder' => 'Type of LD...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgnameSponsor9', 'Conducted/Sponsored by: ') }}</b>
                                        {{ Form::text('orgnameSponsor9', null, ['class' => 'form-control', 'id' => 'orgnameSponsor9', 'placeholder' => 'Conducted/Sponsored by...', 'autocomplete' => 'off']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="orgLD2-container d-none">
                                <div class="row">
                                    <div class="col">
                                        <b>{{ Form::label('orgnameAddress10', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                        {{ Form::text('orgnameAddress10', null, ['class' => 'form-control', 'id' => 'orgnameAddress10', 'placeholder' => 'Title of Learning and Development Interventions/Training Programs...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateFrom10', 'From: ') }}</b><br>
                                            {{ Form::date('orgdateFrom10', '') }}
                                        </div>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateTo10', 'To: ') }}</b><br>
                                            {{ Form::date('orgdateTo10', '') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <b>{{ Form::label('orgnumHours10', 'Number of Hours: ') }}</b><br>
                                        {{ Form::text('orgnumHours10', null, ['class' => 'form-control', 'id' => 'orgnumHours10', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgType10', 'Type of LD: ') }}</b>
                                        {{ Form::text('orgType10', null, ['class' => 'form-control', 'id' => 'orgType10', 'placeholder' => 'Type of LD...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgnameSponsor10', 'Conducted/Sponsored by: ') }}</b>
                                        {{ Form::text('orgnameSponsor10', null, ['class' => 'form-control', 'id' => 'orgnameSponsor10', 'placeholder' => 'Conducted/Sponsored by...', 'autocomplete' => 'off']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="orgLD3-container d-none">
                                <div class="row">
                                    <div class="col">
                                        <b>{{ Form::label('orgnameAddress11', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                        {{ Form::text('orgnameAddress11', null, ['class' => 'form-control', 'id' => 'orgnameAddress11', 'placeholder' => 'Title of Learning and Development Interventions/Training Programs...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateFrom11', 'From: ') }}</b><br>
                                            {{ Form::date('orgdateFrom11', '') }}
                                        </div>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateTo11', 'To: ') }}</b><br>
                                            {{ Form::date('orgdateTo11', '') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <b>{{ Form::label('orgnumHours11', 'Number of Hours: ') }}</b><br>
                                        {{ Form::text('orgnumHours11', null, ['class' => 'form-control', 'id' => 'orgnumHours11', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgType11', 'Type of LD: ') }}</b>
                                        {{ Form::text('orgType11', null, ['class' => 'form-control', 'id' => 'orgType11', 'placeholder' => 'Type of LD...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgnameSponsor11', 'Conducted/Sponsored by: ') }}</b>
                                        {{ Form::text('orgnameSponsor11', null, ['class' => 'form-control', 'id' => 'orgnameSponsor11', 'placeholder' => 'Conducted/Sponsored by...', 'autocomplete' => 'off']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="orgLD4-container d-none">
                                <div class="row">
                                    <div class="col">
                                        <b>{{ Form::label('orgnameAddress12', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                        {{ Form::text('orgnameAddress12', null, ['class' => 'form-control', 'id' => 'orgnameAddress12', 'placeholder' => 'Title of Learning and Development Interventions/Training Programs...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateFrom12', 'From: ') }}</b><br>
                                            {{ Form::date('orgdateFrom12', '') }}
                                        </div>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateTo12', 'To: ') }}</b><br>
                                            {{ Form::date('orgdateTo12', '') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <b>{{ Form::label('orgnumHours12', 'Number of Hours: ') }}</b><br>
                                        {{ Form::text('orgnumHours12', null, ['class' => 'form-control', 'id' => 'orgnumHours12', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgType12', 'Type of LD: ') }}</b>
                                        {{ Form::text('orgType12', null, ['class' => 'form-control', 'id' => 'orgType11', 'placeholder' => 'Type of LD...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgnameSponsor12', 'Conducted/Sponsored by: ') }}</b>
                                        {{ Form::text('orgnameSponsor12', null, ['class' => 'form-control', 'id' => 'orgnameSponsor12', 'placeholder' => 'Conducted/Sponsored by...', 'autocomplete' => 'off']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="orgLD5-container d-none">
                                <div class="row">
                                    <div class="col">
                                        <b>{{ Form::label('orgnameAddress13', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                        {{ Form::text('orgnameAddress13', null, ['class' => 'form-control', 'id' => 'orgnameAddress13', 'placeholder' => 'Title of Learning and Development Interventions/Training Programs...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateFrom13', 'From: ') }}</b><br>
                                            {{ Form::date('orgdateFrom13', '') }}
                                        </div>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateTo13', 'To: ') }}</b><br>
                                            {{ Form::date('orgdateTo13', '') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <b>{{ Form::label('orgnumHours13', 'Number of Hours: ') }}</b><br>
                                        {{ Form::text('orgnumHours13', null, ['class' => 'form-control', 'id' => 'orgnumHours13', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgType13', 'Type of LD: ') }}</b>
                                        {{ Form::text('orgType13', null, ['class' => 'form-control', 'id' => 'orgType13', 'placeholder' => 'Type of LD...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgnameSponsor13', 'Conducted/Sponsored by: ') }}</b>
                                        {{ Form::text('orgnameSponsor13', null, ['class' => 'form-control', 'id' => 'orgnameSponsor13', 'placeholder' => 'Conducted/Sponsored by...', 'autocomplete' => 'off']) }}
                                    </div>
                                </div>
                            </div>

                            <div class="orgLD6-container d-none">
                                <div class="row">
                                    <div class="col">
                                        <b>{{ Form::label('orgnameAddress14', 'Title of Learning and Development Interventions/Training Programs: ') }}</b>
                                        {{ Form::text('orgnameAddress14', null, ['class' => 'form-control', 'id' => 'orgnameAddress14', 'placeholder' => 'Title of Learning and Development Interventions/Training Programs...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('Inclusive Dates of Attendance: ') }}</b><br>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateFrom14', 'From: ') }}</b><br>
                                            {{ Form::date('orgdateFrom14', '') }}
                                        </div>
                                        <div class="form-inline">
                                            <b>{{ Form::label('orgdateTo14', 'To: ') }}</b><br>
                                            {{ Form::date('orgdateTo14', '') }}
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2">
                                        <b>{{ Form::label('orgnumHours14', 'Number of Hours: ') }}</b><br>
                                        {{ Form::text('orgnumHours14', null, ['class' => 'form-control', 'id' => 'orgnumHours14', 'placeholder' => 'No. of Hours...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgType14', 'Type of LD: ') }}</b>
                                        {{ Form::text('orgType14', null, ['class' => 'form-control', 'id' => 'orgType14', 'placeholder' => 'Type of LD...', 'autocomplete' => 'off']) }}
                                    </div>
                                    <div class="col">
                                        <b>{{ Form::label('orgnameSponsor14', 'Conducted/Sponsored by: ') }}</b>
                                        {{ Form::text('orgnameSponsor14', null, ['class' => 'form-control', 'id' => 'orgnameSponsor14', 'placeholder' => 'Conducted/Sponsored by...', 'autocomplete' => 'off']) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="col-1 row px-0">
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="minus-refc31"
                                    disabled>-</button>
                            </div>
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="add-refc31">+</button>
                            </div>
                        </div><br>

                        <h2>VIII. OTHER INFORMATION</h2>
                        <h5>{{ Form::label('orgname', 'Please fill-up the following: ') }}</h5>
                        <br>
                        <div class="org-static3">
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameSkill1', 'Special Skills and Hobbies: ') }}</b><br>
                                    {{ Form::text('orgnameSkill1', null, ['class' => 'form-control', 'id' => 'orgnameSkill1', 'placeholder' => 'Special Skills and Hobbies...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameDistinct1', 'Non-Academic Distinctions/Recognition: ') }}</b>
                                    {{ Form::text('orgnameDistinct1', null, ['class' => 'form-control', 'id' => 'orgnameDistinct1', 'placeholder' => 'Non-Academic Distinctions/Recognition...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameMembership1', 'Membership in Association/Organization: ') }}</b>
                                    {{ Form::text('orgnameMembership1', null, ['class' => 'form-control', 'id' => 'orgnameMembership1', 'placeholder' => 'Membership in Association/Organization...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="orgOI1-container d-none"><br>
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameSkill2', 'Special Skills and Hobbies: ') }}</b><br>
                                    {{ Form::text('orgnameSkill2', null, ['class' => 'form-control', 'id' => 'orgnameSkill2', 'placeholder' => 'Special Skills and Hobbies...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameDistinct2', 'Non-Academic Distinctions/Recognition: ') }}</b>
                                    {{ Form::text('orgnameDistinct2', null, ['class' => 'form-control', 'id' => 'orgnameDistinct2', 'placeholder' => 'Non-Academic Distinctions/Recognition...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameMembership2', 'Membership in Association/Organization: ') }}</b>
                                    {{ Form::text('orgnameMembership2', null, ['class' => 'form-control', 'id' => 'orgnameMembership2', 'placeholder' => 'Membership in Association/Organization...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="orgOI2-container d-none"><br>
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameSkill3', 'Special Skills and Hobbies: ') }}</b><br>
                                    {{ Form::text('orgnameSkill3', null, ['class' => 'form-control', 'id' => 'orgnameSkill3', 'placeholder' => 'Special Skills and Hobbies...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameDistinct3', 'Non-Academic Distinctions/Recognition: ') }}</b>
                                    {{ Form::text('orgnameDistinct3', null, ['class' => 'form-control', 'id' => 'orgnameDistinct3', 'placeholder' => 'Non-Academic Distinctions/Recognition...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameMembership3', 'Membership in Association/Organization: ') }}</b>
                                    {{ Form::text('orgnameMembership3', null, ['class' => 'form-control', 'id' => 'orgnameMembership3', 'placeholder' => 'Membership in Association/Organization...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="orgOI3-container d-none"><br>
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameSkill4', 'Special Skills and Hobbies: ') }}</b><br>
                                    {{ Form::text('orgnameSkill4', null, ['class' => 'form-control', 'id' => 'orgnameSkill4', 'placeholder' => 'Special Skills and Hobbies...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameDistinct4', 'Non-Academic Distinctions/Recognition: ') }}</b>
                                    {{ Form::text('orgnameDistinct4', null, ['class' => 'form-control', 'id' => 'orgnameDistinct4', 'placeholder' => 'Non-Academic Distinctions/Recognition...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameMembership4', 'Membership in Association/Organization: ') }}</b>
                                    {{ Form::text('orgnameMembership4', null, ['class' => 'form-control', 'id' => 'orgnameMembership4', 'placeholder' => 'Membership in Association/Organization...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="orgOI4-container d-none"><br>
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameSkill5', 'Special Skills and Hobbies: ') }}</b><br>
                                    {{ Form::text('orgnameSkill5', null, ['class' => 'form-control', 'id' => 'orgnameSkill5', 'placeholder' => 'Special Skills and Hobbies...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameDistinct5', 'Non-Academic Distinctions/Recognition: ') }}</b>
                                    {{ Form::text('orgnameDistinct5', null, ['class' => 'form-control', 'id' => 'orgnameDistinct5', 'placeholder' => 'Non-Academic Distinctions/Recognition...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameMembership5', 'Membership in Association/Organization: ') }}</b>
                                    {{ Form::text('orgnameMembership5', null, ['class' => 'form-control', 'id' => 'orgnameMembership5', 'placeholder' => 'Membership in Association/Organization...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>

                        <div class="orgOI5-container d-none"><br>
                            <div class="row">
                                <div class="col">
                                    <b>{{ Form::label('orgnameSkill6', 'Special Skills and Hobbies: ') }}</b><br>
                                    {{ Form::text('orgnameSkill6', null, ['class' => 'form-control', 'id' => 'orgnameSkill6', 'placeholder' => 'Special Skills and Hobbies...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameDistinct6', 'Non-Academic Distinctions/Recognition: ') }}</b>
                                    {{ Form::text('orgnameDistinct6', null, ['class' => 'form-control', 'id' => 'orgnameDistinct6', 'placeholder' => 'Non-Academic Distinctions/Recognition...', 'autocomplete' => 'off']) }}
                                </div>
                                <div class="col">
                                    <b>{{ Form::label('orgnameMembership6', 'Membership in Association/Organization: ') }}</b>
                                    {{ Form::text('orgnameMembership6', null, ['class' => 'form-control', 'id' => 'orgnameMembership6', 'placeholder' => 'Membership in Association/Organization...', 'autocomplete' => 'off']) }}
                                </div>
                            </div>
                        </div>
                        <br>

                        <div class="col-1 row px-0">
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="minus-refc32"
                                    disabled>-</button>
                            </div>
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="add-refc32">+</button>
                            </div>
                        </div>
                        <br>

                    </div>
                </div>

                <div id="C4FORM" class="tabcontent">

                    <div class="box-form">

                        {{-- questions portion --}}
                        <div class="questions">
                            <b>34. Are you related by consanguinity or affinity to the appointing or recommending authority,
                                or
                                to chief of bureu or office or to the person who has made immediate supervision over you in
                                the
                                Office,
                                Bureau or Department where you will be appointed,</b><br>

                            <b>{{ Form::label('34-a-answer', 'a. within the third degree?') }}<br></b>
                            {{ Form::radio('34a', '1') }}
                            {{ Form::label('34a', 'YES') }}

                            {{ Form::radio('34a', '0') }}
                            {{ Form::label('34a', 'NO') }}<br>

                            <b>{{ Form::label('34b', 'b. within the fourth degree (for Local government Unit - Career Employees)?') }}<br></b>
                            {{ Form::radio('34b', '1') }}
                            {{ Form::label('34b', 'YES') }}

                            {{ Form::radio('34b', '0') }}
                            {{ Form::label('34b', 'NO') }}<br>

                            {{ Form::label('34bdetails', 'If YES, give details: ') }}
                            {{ Form::text('b34details', null, ['class' => 'form-control', 'id' => '34-b-answer-details', 'disabled', 'autocomplete' => 'off']) }}

                            <b>{{ Form::label('35a', '35. a. Have you ever been found guilty of any administrative offense?') }}<br></b>
                            {{ Form::radio('35a', '1') }}
                            {{ Form::label('35a', 'YES') }}

                            {{ Form::radio('35a', '0') }}
                            {{ Form::label('35a', 'NO') }}<br>

                            {{ Form::label('35adetails', 'If YES, give details: ') }}
                            {{ Form::text('a35details', null, ['class' => 'form-control', 'id' => '35-a-answer-details', 'disabled', 'autocomplete' => 'off']) }}

                            <b>{{ Form::label('35-b-answer', 'b. Have you been criminally change before any court?') }}<br></b>
                            {{ Form::radio('35b', '1') }}
                            {{ Form::label('35b', 'YES') }}

                            {{ Form::radio('35b', '0') }}
                            {{ Form::label('35b', 'NO') }}<br>

                            {{ Form::label('b35details', 'If YES, give details: ') }}<br>
                            {{ Form::label('b35date', 'Date Field: ') }}
                            {{ Form::date('b35date', null, ['disabled']) }}<br>
                            {{ Form::label('b35cases', 'Status of Case/s: ') }}
                            {{ Form::select('b35case', $case, null, ['class' => 'form-control', 'id' => '35-b-answer-case', 'placeholder' => 'Status', 'disabled']) }}

                            <b>{{ Form::label('36a', '36. Have you ever been convicted of any crime or violation of any law, decree, ordinance or regulation by any court or tribunal?') }}<br></b>
                            {{ Form::radio('36a', '1') }}
                            {{ Form::label('36a', 'YES') }}

                            {{ Form::radio('36a', '0') }}
                            {{ Form::label('36a', 'NO') }}<br>

                            {{ Form::label('a36details', 'If YES, give details: ') }}
                            {{ Form::text('a36details', null, ['class' => 'form-control', 'id' => '36-answer-details', 'disabled', 'autocomplete' => 'off']) }}

                            <b>{{ Form::label(
                                '37a',
                                '37. Have you ever been separated from the service in any of the following modes:
                                                                                                                                                                                                                                                                            resignation, retirement, dropped from the rolls, dismissal, termination, end of term, finished contract or
                                                                                                                                                                                                                                                                            phased out (abolition) in the public or private sector?',
                            ) }}<br></b>
                            {{ Form::radio('37a', '1') }}
                            {{ Form::label('37a', 'YES') }}

                            {{ Form::radio('37a', '0') }}
                            {{ Form::label('37a', 'NO') }}<br>

                            {{ Form::label('a37details', 'If YES, give details: ') }}
                            {{ Form::text('a37details', null, ['class' => 'form-control', 'id' => '37-answer-details', 'disabled', 'autocomplete' => 'off']) }}

                            <b>{{ Form::label(
                                '38a',
                                '38. a. Have you ever been a candidate in a national or local election held within the last year<br>
                                                                                                                                                                                                                                                                            (except Barangay election)?',
                            ) }}<br></b>
                            {{ Form::radio('38a', '1') }}
                            {{ Form::label('38a', 'YES') }}

                            {{ Form::radio('38a', '0') }}
                            {{ Form::label('38a', 'NO') }}<br>

                            {{ Form::label('38a', 'If YES, give details: ') }}
                            {{ Form::text('a38details', null, ['class' => 'form-control', 'id' => '38-a-answer-details', 'disabled', 'autocomplete' => 'off']) }}

                            <b>{{ Form::label(
                                '38b',
                                'b. Have you resigned from the government service during the three (3)-month period before<br>
                                                                                                                                                                                                                                                                            the last election to promote/actively campaign for a national or local candidate?',
                            ) }}<br></b>
                            {{ Form::radio('38b', '1') }}
                            {{ Form::label('38b', 'YES') }}

                            {{ Form::radio('38b', '0') }}
                            {{ Form::label('38b', 'NO') }}<br>

                            {{ Form::label('b38details', 'If YES, give details: ') }}
                            {{ Form::text('b38details', null, ['class' => 'form-control', 'id' => '38-b-answer-details', 'disabled', 'autocomplete' => 'off']) }}

                            <b>{{ Form::label('39a', '39. Have you acquired the status of an immigrant or permanent resident of another country?') }}<br></b>
                            {{ Form::radio('39a', '1') }}
                            {{ Form::label('39a', 'YES') }}

                            {{ Form::radio('39a', '0') }}
                            {{ Form::label('39a', 'NO') }}<br>

                            {{ Form::label('a39details', 'If YES, give details: ') }}
                            {{ Form::text('a39details', null, ['class' => 'form-control', 'id' => '39-answer-details', 'disabled', 'autocomplete' => 'off']) }}

                            <b>40. Pursuant to: (a) Indigenous People's Act (RA 8371); (b) Magna Carta for Disabled Persons
                                (RA 7277); and (c) Solo Parents Welfare Act of 2000 (RA 8972), please answer the following
                                items: </b><br>

                            <b>{{ Form::label('40a', 'a.   Are you a member of any indigenous group?') }}<br></b>
                            {{ Form::radio('40a', '1') }}
                            {{ Form::label('40a', 'YES') }}

                            {{ Form::radio('40a', '0') }}
                            {{ Form::label('40a', 'NO') }}<br>

                            {{ Form::label('a40details', 'If YES, please specify: ') }}
                            {{ Form::select('a40details', $group, null, ['class' => 'form-control', 'id' => '40-a-answer-details', 'disabled']) }}

                            <b>{{ Form::label('40b', 'b.   Are you a person with disability?') }}<br></b>
                            {{ Form::radio('40b', '1') }}
                            {{ Form::label('40b', 'YES') }}

                            {{ Form::radio('40b', '0') }}
                            {{ Form::label('40b', 'NO') }}<br>

                            {{ Form::label('b40details', 'If YES, please specify ID No: ') }}
                            {{ Form::number('b40details', null, ['class' => 'form-control', 'id' => '40-b-answer-details', 'disabled']) }}

                            <b>{{ Form::label('40c', 'c.   Are you a solo parent?') }}<br></b>
                            {{ Form::radio('40c', '1') }}
                            {{ Form::label('40c', 'YES') }}

                            {{ Form::radio('40c', '0') }}
                            {{ Form::label('40c', 'NO') }}<br>

                            {{ Form::label('c40details', 'If YES, please specify ID No: ') }}
                            {{ Form::number('c40details', null, ['class' => 'form-control', 'id' => '40-c-answer-details', 'disabled']) }}

                            <hr class="line1">

                        </div>

                        {{-- references portion --}}
                        <div class="references">

                            <div class="row">
                                <div class="col-11"><b>41. REFRENCES </b></div>
                                <div class="col-1 row px-0">
                                    <div class="col-5 offset-1 px-0">
                                        <button class="btn btn-secondary btn-sm w-100" id="minusc4-ref"
                                            disabled>-</button>
                                    </div>
                                    <div class="col-5 offset-1 px-0">
                                        <button class="btn btn-secondary btn-sm w-100" id="addc4-ref">+</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <i>(Person not related by consangurity or affinity to applicant/appointee)</i><br>
                        <hr>
                        <b>{{ Form::label('name41', 'Name: ') }}</b>
                        {{ Form::text('name41', null, ['class' => 'form-control', 'id' => '41-a-answer-name', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                        <b>{{ Form::label('address41', 'Address: ') }}</b>
                        {{ Form::text('address41', null, ['class' => 'form-control', 'id' => '41-a-answer-address', 'placeholder' => 'Address', 'autocomplete' => 'off']) }}
                        <b>{{ Form::label('contactno', 'Telephone Number: ') }}</b>
                        {{ Form::number('contactno41', null, ['class' => 'form-control', 'id' => '41-a-answer-contact-no', 'placeholder' => 'Tel No']) }}<br>

                        {{-- enabled/disabled reference forms --}}
                        <div class="41-b-container d-none">
                            <hr>
                            <b>{{ Form::label('name42', 'Name: ') }}</b>
                            {{ Form::text('name42', null, ['class' => 'form-control', 'id' => '41-b-answer-name', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                            <b>{{ Form::label('address42', 'Address: ') }}</b>
                            {{ Form::text('address42', null, ['class' => 'form-control', 'id' => '41-b-answer-address', 'placeholder' => 'Address', 'autocomplete' => 'off']) }}
                            <b>{{ Form::label('contactno42', 'Telephone Number: ') }}</b>
                            {{ Form::number('contactno42', null, ['class' => 'form-control', 'id' => '41-b-answer-contact-no', 'placeholder' => 'Tel No']) }}<br>
                        </div>
                        <div class="41-c-container d-none">
                            <hr>
                            <b>{{ Form::label('name43', 'Name: ') }}</b>
                            {{ Form::text('name43', null, ['class' => 'form-control', 'id' => '41-c-answer-name', 'placeholder' => 'Full Name', 'autocomplete' => 'off']) }}
                            <b>{{ Form::label('address43', 'Address: ') }}</b>
                            {{ Form::text('address43', null, ['class' => 'form-control', 'id' => '41-c-answer-address', 'placeholder' => 'Address', 'autocomplete' => 'off']) }}
                            <b>{{ Form::label('contactno43', 'Telephone Number: ') }}</b>
                            {{ Form::number('contactno43', null, ['class' => 'form-control', 'id' => '41-c-answer-contact-no', 'placeholder' => 'Tel No']) }}<br>
                        </div>



                        <div class="oath">

                            <b><i>42. I declare under oath that I have personally accomplished this Personal Data Sheet
                                    which is
                                    a 'YES', correct and
                                    complete statement pursuant to the provisions of pertinent laws, rules and regulations
                                    of
                                    the Republic of the
                                    Philippines. I authorize the agency head/authorized representative to verify/validate
                                    the
                                    contents stated herein.
                                    I agree that any misrepresentation made in this document and its attachments shall cause
                                    the
                                    filin'g
                                    of administrative/criminal case/s against me.</i></b>
                        </div>

                        <div class="id">

                            <br><b>Government Issued ID </b><i>(i.e.Passport, GSIS, SSS, PRC, Driver's License,
                                etc.)</i><br>
                            <b>PLEASE INDICATE ID Number</b><br>
                            <b>{{ Form::label('govid44', 'Government Issued ID: ') }}</b>
                            {{ Form::select('govid44', $validID, null, ['class' => 'form-control', 'placeholder' => 'Select ID...']) }}
                            <b>{{ Form::label('valid44', 'ID/License/Passport No.: ') }}</b>
                            {{ Form::number('valid44', null, ['class' => 'form-control', 'id' => '42-answer-valid-id-no', 'placeholder' => 'ID No.', 'autocomplete' => 'off', 'maxlength' => 12]) }}
                            {{ Form::label('issuanceplace44', 'Place of Issuance: ') }}
                            {{ Form::text('issuanceplace44', null, ['class' => 'form-control', 'id' => '42-answer-issuance-details', 'placeholder' => 'Place of Issuance', 'autocomplete' => 'off']) }}<br>
                            {{ Form::label('issuancedate44', 'Date of Issuance: ') }}
                            {{ Form::date('issuancedate44') }}

                        </div>


                    </div>
                </div>

                <div class="button" id="submitbtn">
                    <button type="submit" id="submitbutton" class="btn btn-primary btn-loading"
                        data-coreui-timeout="2000" value="submit">Submit</button>
                </div>

            </form>
            <script>
                function openForm(evt, formName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(formName).style.display = "block";
                    evt.currentTarget.className += " active";
                }
            </script>

            {{-- c4 increment button--}}
            <script>
                $(function(){
                    var refCount = 1;
                    $('#addc4-ref').on('click', function (e) {
                    e.preventDefault();

                    if (refCount === 1) {
                        $('.41-b-container').removeClass('d-none');
                        $('#minusc4-ref').attr('disabled', false);
                        refCount++;
                    } else if (refCount === 2) {
                        $('.41-c-container').removeClass('d-none');
                        $('#addc4-ref').attr('disabled', true, required);
                        refCount++;
                    }
                    });
                    $('#minusc4-ref').on('click', function (e) {
                    e.preventDefault();

                    if (refCount === 2) {
                        $('.41-c-container').addClass('d-none');
                        $('#addc4-ref').attr('disabled', false);
                        refCount--;
                    } else if (refCount === 1) {
                        $('.41-b-container').addClass('d-none');
                        $('#minusc4-ref').attr('disabled', true, required);
                        }
                    });
                });
            </script>

            {{-- c4 hidden form scripts --}}
            <script>
                $(function(){
                    $('input[name="34b"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="b34details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="b34details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="35a"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="a35details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="a35details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="35b"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="b35date"]').attr({
                                'disabled': false,
                                'required': true
                            })
                            $('select[name="b35case"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="b35date"]').attr({
                                'disabled': true,
                                'required': false
                            })
                            $('select[name="b35case"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="36a"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="a36details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="a36details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="37a"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="a37details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="a37details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="38a"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="a38details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="a38details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="38b"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="b38details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="b38details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="39a"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="a39details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="a39details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="40a"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('select[name="a40details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('select[name="a40details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="40b"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="b40details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="b40details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });
                $(function(){
                    $('input[name="40c"]').change(function(){
                        if ($(this).is(':checked') && $(this).val() == '1') {
                            $('input[name="c40details"]').attr({
                                'disabled': false,
                                'required': true
                            })
                        } else {
                            $('input[name="c40details"]').attr({
                                'disabled': true,
                                'required': false
                            })
                        }
                    });
                });

            </script>

            {{-- c3 first incrementing button --}}
            <script>
                $(function() {
                    var refCount = 5;
                    var counter = 0

                    $('#add-refc3').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 5 && counter == 0) {
                            $('.org1-container').removeClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 1) {
                            $('.org2-container').removeClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 2) {
                            $('.org3-container').removeClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 3) {
                            $('.org4-container').removeClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 4) {
                            $('.org5-container').removeClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 5) {
                            $('.org6-container').removeClass('d-none');
                            $('#add-refc3').attr('disabled', true);

                        }
                    });

                    $('#minus-refc3').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 5 && counter == 5) {
                            $('.org6-container').addClass('d-none');
                            $('#add-refc3').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 4) {
                            $('.org5-container').addClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 3) {
                            $('.org4-container').addClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 2) {
                            $('.org3-container').addClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 1) {
                            $('.org2-container').addClass('d-none');
                            $('#minus-refc3').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 0) {
                            $('.org1-container').addClass('d-none');
                            $('#minus-refc3').attr('disabled', true);
                        }

                    });
                });
            </script>

            {{-- c3 second incrementing button --}}
            <script>
                $(function() {
                    var refCount = 5;
                    var counter = 0

                    $('#add-refc31').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 5 && counter == 0) {
                            $('.orgLD1-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 1) {
                            $('.orgLD2-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 2) {
                            $('.orgLD3-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 3) {
                            $('.orgLD4-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 4) {
                            $('.orgLD5-container').removeClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 5) {
                            $('.orgLD6-container').removeClass('d-none');
                            $('#add-refc31').attr('disabled', true);

                        }
                    });

                    $('#minus-refc31').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 5 && counter == 5) {
                            $('.orgLD6-container').addClass('d-none');
                            $('#add-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 4) {
                            $('.orgLD5-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 3) {
                            $('.orgLD4-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 2) {
                            $('.orgLD3-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 1) {
                            $('.orgLD2-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 0) {
                            $('.orgLD1-container').addClass('d-none');
                            $('#minus-refc31').attr('disabled', true);
                        }

                    });
                });
            </script>

            {{-- c3 third incrementing button --}}
            <script>
                $(function() {
                    var refCount = 4;
                    var counter = 0

                    $('#add-refc32').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 4 && counter == 0) {
                            $('.orgOI1-container').removeClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 4 && counter == 1) {
                            $('.orgOI2-container').removeClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 4 && counter == 2) {
                            $('.orgOI3-container').removeClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 4 && counter == 3) {
                            $('.orgOI4-container').removeClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 4 && counter == 4) {
                            $('.orgOI5-container').removeClass('d-none');
                            $('#add-refc32').attr('disabled', true);
                        }


                    });

                    $('#minus-refc32').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 4 && counter == 4) {
                            $('.orgOI5-container').addClass('d-none');
                            $('#add-refc32').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 4 && counter == 3) {
                            $('.orgOI4-container').addClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 4 && counter == 2) {
                            $('.orgOI3-container').addClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 4 && counter == 1) {
                            $('.orgOI2-container').addClass('d-none');
                            $('#minus-refc32').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 4 && counter == 0) {
                            $('.orgOI1-container').addClass('d-none');
                            $('#minus-refc32').attr('disabled', true);
                        }

                    });
                });
            </script>

            {{-- c2 first incrementing button  --}}
            <script>
                $(function() {
                    var refCount = 5;
                    var counter = 0

                    $('#add-refc2').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 5 && counter == 0) {
                            $('.form-container1').removeClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 1) {
                            $('.form-container2').removeClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 2) {
                            $('.form-container3').removeClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 3) {
                            $('.form-container4').removeClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 4) {
                            $('.form-container5').removeClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 5 && counter == 5) {
                            $('.form-container6').removeClass('d-none');
                            $('#add-refc2').attr('disabled', true);

                        }
                    });

                    $('#minus-refc2').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 5 && counter == 5) {
                            $('.form-container6').addClass('d-none');
                            $('#add-refc2').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 4) {
                            $('.form-container5').addClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 3) {
                            $('.form-container4').addClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 2) {
                            $('.form-container3').addClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 1) {
                            $('.form-container2').addClass('d-none');
                            $('#minus-refc2').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 5 && counter == 0) {
                            $('.form-container1').addClass('d-none');
                            $('#minus-refc2').attr('disabled', true);
                        }

                    });
                });
            </script>

            {{-- c2 second incrementing button --}}
            <script>
                $(function() {
                    var refCount = 26;
                    var counter = 0

                    $('#add-refc21').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 26 && counter == 0) {
                            $('.form-container21').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 1) {
                            $('.form-container22').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 2) {
                            $('.form-container23').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 3) {
                            $('.form-container24').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 4) {
                            $('.form-container25').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 5) {
                            $('.form-container26').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', );
                            counter++;
                        } else if (refCount <= 26 && counter == 6) {
                            $('.form-container27').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 7) {
                            $('.form-container28').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 29 && counter == 8) {
                            $('.form-container29').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 9) {
                            $('.form-container30').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 10) {
                            $('.form-container31').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 11) {
                            $('.form-container32').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 12) {
                            $('.form-container33').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 13) {
                            $('.form-container34').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 14) {
                            $('.form-container35').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 15) {
                            $('.form-container36').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 16) {
                            $('.form-container37').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 17) {
                            $('.form-container38').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 18) {
                            $('.form-container39').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 19) {
                            $('.form-container40').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 20) {
                            $('.form-container41').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 21) {
                            $('.form-container42').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 22) {
                            $('.form-container43').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 23) {
                            $('.form-container44').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 24) {
                            $('.form-container45').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 25) {
                            $('.form-container46').removeClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 26 && counter == 26) {
                            $('.form-container47').removeClass('d-none');
                            $('#add-refc21').attr('disabled', true);
                        }
                    });

                    $('#minus-refc21').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 26 && counter == 26) {
                            $('.form-container47').addClass('d-none');
                            $('#add-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 25) {
                            $('.form-container46').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 24) {
                            $('.form-container45').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 23) {
                            $('.form-container44').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 22) {
                            $('.form-container43').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 21) {
                            $('.form-container42').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 20) {
                            $('.form-container41').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 19) {
                            $('.form-container40').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 18) {
                            $('.form-container39').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 17) {
                            $('.form-container38').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 16) {
                            $('.form-container37').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 15) {
                            $('.form-container36').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 14) {
                            $('.form-container35').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 13) {
                            $('.form-container34').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 12) {
                            $('.form-container33').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 11) {
                            $('.form-container32').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 10) {
                            $('.form-container31').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 9) {
                            $('.form-container30').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 8) {
                            $('.form-container29').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 7) {
                            $('.form-container28').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 6) {
                            $('.form-container27').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 5) {
                            $('.form-container26').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 4) {
                            $('.form-container25').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 3) {
                            $('.form-container24').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 2) {
                            $('.form-container23').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 1) {
                            $('.form-container22').addClass('d-none');
                            $('#minus-refc21').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 26 && counter == 0) {
                            $('.form-container21').addClass('d-none');
                            $('#minus-refc21').attr('disabled', true);
                        }

                    });
                });
            </script>

            {{-- c1 incrementing button --}}
            <script>
                $(function() {
                    var refCount = 11;
                    var counter = 0

                    $('#add-refc1').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 11 && counter == 0) {
                            $('.child1-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 1) {
                            $('.child2-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 2) {
                            $('.child3-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 3) {
                            $('.child4-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 4) {
                            $('.child5-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 5) {
                            $('.child6-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 6) {
                            $('.child6-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 7) {
                            $('.child7-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 8) {
                            $('.child8-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 9) {
                            $('.child9-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 10) {
                            $('.child10-container').removeClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter++;
                        } else if (refCount <= 11 && counter == 11) {
                            $('.child11-container').removeClass('d-none');
                            $('#add-refc1').attr('disabled', true);
                        }
                    });

                    $('#minus-refc1').on('click', function(e) {
                        e.preventDefault();

                        if (refCount <= 11 && counter == 11) {
                            $('.child11-container').addClass('d-none');
                            $('#add-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 10) {
                            $('.child10-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 9) {
                            $('.child9-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 8) {
                            $('.child8-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 7) {
                            $('.child7-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 6) {
                            $('.child6-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 5) {
                            $('.child5-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 4) {
                            $('.child4-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 3) {
                            $('.child3-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 2) {
                            $('.child2-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', false);
                            counter--;
                        } else if (refCount <= 11 && counter == 1) {
                            $('.child1-container').addClass('d-none');
                            $('#minus-refc1').attr('disabled', true);
                            counter--;
                        }

                    });
                });
            </script>

            {{-- C4 incrementing button --}}
            <script>
                // for enabling/disabling reference forms
                $(function() {
                    var refCount = 1;
                    $('#addc4-ref').on('click', function(e) {
                        e.preventDefault();

                        if (refCount === 1) {
                            $('.41-b-container').removeClass('d-none');
                            $('#minusc4-ref').attr('disabled', false);
                            refCount++;
                        } else if (refCount === 2) {
                            $('.41-c-container').removeClass('d-none');
                            $('#addc4-ref').attr('disabled', true, required);
                            refCount++;
                        }
                    });

                    $('#minus-ref').on('click', function(e) {
                        e.preventDefault();

                        if (refCount === 2) {
                            $('.41-c-container').addClass('d-none');
                            $('#addc4-ref').attr('disabled', false);
                            refCount--;
                        } else if (refCount === 1) {
                            $('.41-b-container').addClass('d-none');
                            $('#minusc4-ref').attr('disabled', true, required);
                            refCount--;
                        }
                    });

                    // enabling/disabling the text boxes for questions portion
                    $('input[name="34-b-answer"]').change(function() {
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
                    $('input[name="35-a-answer"]').change(function() {
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
                    $('input[name="35-b-answer"]').change(function() {
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
                    $('input[name="36-answer"]').change(function() {
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
                    $('input[name="37-answer"]').change(function() {
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
                    $('input[name="38-a-answer"]').change(function() {
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
                    $('input[name="38-b-answer"]').change(function() {
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
                    $('input[name="39-answer"]').change(function() {
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
                    $('input[name="40-a-answer"]').change(function() {
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
                    $('input[name="40-b-answer"]').change(function() {
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
                    $('input[name="40-c-answer"]').change(function() {
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
    </body>

    </html>
@endsection
