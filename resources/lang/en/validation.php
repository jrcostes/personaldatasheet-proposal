<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'The :attribute field is required.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        //C1 validation error messages
        'surname' => ['max' => 'Maximum amount of characters reached',],
        'firstname' => ['max' => 'Maximum amount of characters reached',],
        'birthdate' => ['before' => 'You must be at legal age to submit this form',],
        'placeofBirth' => ['max' => 'Maximum amount of characters reached',],
        'residentialhouse' => ['max' => 'Maximum amount of characters reached',],
        'residentialst' => ['max' => 'Maximum amount of characters reached',],
        'residentialsudv' => ['max' => 'Maximum amount of characters reached',],
        'residentialcity' => ['max' => 'Maximum amount of characters reached',],
        'residentialprv' => ['max' => 'Maximum amount of characters reached',],
        'residentialzip' => ['max' => 'Maximum amount of characters reached',],
        'permanenthouse' => ['max' => 'Maximum amount of characters reached',],
        'permanentst' => ['max' => 'Maximum amount of characters reached',],
        'permanentsubdv' => ['max' => 'Maximum amount of characters reached',],
        'permanentbrgy' => ['max' => 'Maximum amount of characters reached',],
        'permenentcity' => ['max' => 'Maximum amount of characters reached',],
        'permanentprv' => ['max' => 'Maximum amount of characters reached',],
        'permanentzip' => ['max' => 'Maximum amount of characters reached',],
        'telno' => ['max' => 'Maximum amount of characters reached',],
        'mobno' => ['max' => 'Maximum amount of characters reached',],
        'spousesn' => ['max' => 'Maximum amount of characters reached',],
        'spousefn' => ['max' => 'Maximum amount of characters reached',],
        'spousemn' => ['max' => 'Maximum amount of characters reached',],
        'spousenmext' => ['max' => 'Maximum amount of characters reached',],
        'spouseocc' => ['max' => 'Maximum amount of characters reached',],
        'spouseempadd' => ['max' => 'Maximum amount of characters reached',],
        'spousetel' => ['max' => 'Maximum amount of characters reached',],
        'fathersn' => ['max' => 'Maximum amount of characters reached',],
        'fatherfn' => ['max' => 'Maximum amount of characters reached',],
        'fathermn' => ['max' => 'Maximum amount of characters reached',],
        'fatherext' => ['max' => 'Maximum amount of characters reached',],
        'mothernm' => ['max' => 'Maximum amount of characters reached',],
        'mothersn' => ['max' => 'Maximum amount of characters reached',],
        'motherfn' => ['max' => 'Maximum amount of characters reached',],
        'mothermn' => ['max' => 'Maximum amount of characters reached',],
        'child0' => ['max' => 'Maximum amount of characters reached',],
        'birthchild0' => ['before' => 'Enter a valid date',],
        'child1' => ['max' => 'Maximum amount of characters reached',],
        'birthchild1' => ['before' => 'Enter a valid date',],
        'child2' => ['max' => 'Maximum amount of characters reached',],
        'birthchild2' => ['before' => 'Enter a valid date',],
        'child3' => ['max' => 'Maximum amount of characters reached',],
        'birthchild3' => ['before' => 'Enter a valid date',],
        'child4' => ['max' => 'Maximum amount of characters reached',],
        'birthchild4' => ['before' => 'Enter a valid date',],
        'child5' => ['max' => 'Maximum amount of characters reached',],
        'birthchild5' => ['before' => 'Enter a valid date',],
        'child6' => ['max' => 'Maximum amount of characters reached',],
        'birthchild6' => ['before' => 'Enter a valid date',],
        'child7' => ['max' => 'Maximum amount of characters reached',],
        'birthchild7' => ['before' => 'Enter a valid date',],
        'child8' => ['max' => 'Maximum amount of characters reached',],
        'birthchild8' => ['before' => 'Enter a valid date',],
        'child9' => ['max' => 'Maximum amount of characters reached',],
        'birthchild9' => ['before' => 'Enter a valid date',],
        'child10' => ['max' => 'Maximum amount of characters reached',],
        'birthchild10' => ['before' => 'Enter a valid date',],
        'child11' => ['max' => 'Maximum amount of characters reached',],
        'birthchild11' => ['before' => 'Enter a valid date',],
        'elemname' => ['max' => 'Maximum amount of characters reached',],
        'elemdeg' => ['max' => 'Maximum amount of characters reached',],
        //elemunitlevel
        //attendancefrom
        //attendanceto
        //yeargradelem
        'scholarshipelem' => ['max' => 'Maximum amount of characters reached',],
        'hsname' => ['max' => 'Maximum amount of characters reached',],
        'hsdeg' => ['max' => 'Maximum amount of characters reached',],
        //hsnitlevel
        //attendancefromhs
        //attendancetohs
        //yeargradhs
        'scholarshiphs' => ['max' => 'Maximum amount of characters reached',],
        'vocname' => ['max' => 'Maximum amount of characters reached',],
        'vocdeg' => ['max' => 'Maximum amount of characters reached',],
        //vocunitlevel
        //attendancefromvoc
        //attendancetovoc
        //yeargradvoc
        'scholarshipvoc' => ['max' => 'Maximum amount of characters reached',],
        'colname' => ['max' => 'Maximum amount of characters reached',],
        'coldeg' => ['max' => 'Maximum amount of characters reached',],
        //colunitlevel
        //attendancefromcol
        //attendancetovoc
        //yeargradcol
        'scholarshipcol' => ['max' => 'Maximum amount of characters reached',],
        'gradname' => ['max' => 'Maximum amount of characters reached',],
        'graddeg' => ['max' => 'Maximum amount of characters reached',],
        //gradunitlevel
        //attendnacefromgrad
        //attendancefromgrad
        //yeargrad
        'scholarshipgrad' => ['max' => 'Maximum amount of characters reached',],

        //C2 validation error messages
        'eligibility' => ['max' => 'Maximum amount of characters reached',],
        'rating' => ['max' => 'Maximum amount of characters reached',],
        'placeofexam' => ['max' => 'Maximum amount of characters reached',],
        'dateofexam' => ['before' => 'Enter a valid date',],
        'licenseno' => ['max' => 'Maximum amount of characters reached',],

        'eligibility2' => ['max' => 'Maximum amount of characters reached',],
        'rating2' => ['max' => 'Maximum amount of characters reached',],
        'placeofexam2' => ['max' => 'Maximum amount of characters reached',],
        'dateofexam2' => ['before' => 'Enter a valid date',],
        'licenseno2' => ['max' => 'Maximum amount of characters reached',],

        'eligibility3' => ['max' => 'Maximum amount of characters reached',],
        'rating3' => ['max' => 'Maximum amount of characters reached',],
        'placeofexam3' => ['max' => 'Maximum amount of characters reached',],
        'dateofexam3' => ['before' => 'Enter a valid date',],
        'licenseno3' => ['max' => 'Maximum amount of characters reached',],

        'eligibility4' => ['max' => 'Maximum amount of characters reached',],
        'rating4' => ['max' => 'Maximum amount of characters reached',],
        'placeofexam4' => ['max' => 'Maximum amount of characters reached',],
        'dateofexam4' => ['before' => 'Enter a valid date',],
        'licenseno4' => ['max' => 'Maximum amount of characters reached',],

        'eligibility5' => ['max' => 'Maximum amount of characters reached',],
        'rating5' => ['max' => 'Maximum amount of characters reached',],
        'placeofexam5' => ['max' => 'Maximum amount of characters reached',],
        'dateofexam5' => ['before' => 'Enter a valid date',],
        'licenseno5' => ['max' => 'Maximum amount of characters reached',],

        'eligibility6' => ['max' => 'Maximum amount of characters reached',],
        'rating6' => ['max' => 'Maximum amount of characters reached',],
        'placeofexam6' => ['max' => 'Maximum amount of characters reached',],
        'dateofexam6' => ['before' => 'Enter a valid date',],
        'licenseno6' => ['max' => 'Maximum amount of characters reached',],

        'eligibility7' => ['max' => 'Maximum amount of characters reached',],
        'rating7' => ['max' => 'Maximum amount of characters reached',],
        'placeofexam7' => ['max' => 'Maximum amount of characters reached',],
        'dateofexam7' => ['before' => 'Enter a valid date',],
        'licenseno7' => ['max' => 'Maximum amount of characters reached',],

        'datefrom' => ['before' => 'Enter a valid date',],
        //'dateto' => 'required_with:datefrom|after:datefrom|nullable',
        'position' => ['max' => 'Maximum amount of characters reached',],
        'department' => ['max' => 'Maximum amount of characters reached',],
        //salary
        'paygrade' => ['max' => 'Maximum amount of characters reached',],

        'datefrom2' => ['before' => 'Enter a valid date',],
        //'dateto2' => 'required_with:datefrom2|after:datefrom2|nullable',
        'position2' => ['max' => 'Maximum amount of characters reached',],
        'department2' => ['max' => 'Maximum amount of characters reached',],
        //salary2
        'paygrade2' => ['max' => 'Maximum amount of characters reached',],

        'datefrom3' => ['before' => 'Enter a valid date',],
        // 'dateto3' => 'required_with:datefrom3|after:datefrom3|nullable',
        'position3' => ['max' => 'Maximum amount of characters reached',],
        'department3' => ['max' => 'Maximum amount of characters reached',],
        //salary3
        'paygrade3' => ['max' => 'Maximum amount of characters reached',],

        'datefrom4' => ['before' => 'Enter a valid date',],
        //'dateto4' => 'required_with:datefrom4|after:datefrom4|nullable',
        'position4' => ['max' => 'Maximum amount of characters reached',],
        'department4' => ['max' => 'Maximum amount of characters reached',],
        //salary4
        'paygrade4' => ['max' => 'Maximum amount of characters reached',],

        'datefrom5' => ['before' => 'Enter a valid date',],
        //'dateto5' => 'required_with:datefrom5|after:datefrom5|nullable',
        'position5' => ['max' => 'Maximum amount of characters reached'],
        'department5' => ['max' => 'Maximum amount of characters reached'],
        //salary5
        'paygrade5' => ['max' => 'Maximum amount of characters reached'],

        'datefrom6' => ['before' => 'Enter a valid date',],
        //'dateto6' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position6' => ['max' => 'Maximum amount of characters reached'],
        'department6' => ['max' => 'Maximum amount of characters reached'],
        //salary6
        'paygrade6' => ['max' => 'Maximum amount of characters reached'],

        'datefrom7' => ['before' => 'Enter a valid date',],
        //'dateto7' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position7' => ['max' => 'Maximum amount of characters reached'],
        'department6' => ['max' => 'Maximum amount of characters reached'],
        //salary7
        'paygrade7' => ['max' => 'Maximum amount of characters reached'],

        'datefrom8' => ['before' => 'Enter a valid date',],
        //'dateto8' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position8' => ['max' => 'Maximum amount of characters reached'],
        'department8' => ['max' => 'Maximum amount of characters reached'],
        //salary8
        'paygrade8' => ['max' => 'Maximum amount of characters reached'],

        'datefrom9' => ['before' => 'Enter a valid date',],
        //'dateto9' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position9' => ['max' => 'Maximum amount of characters reached'],
        'department9' => ['max' => 'Maximum amount of characters reached'],
        //salary9
        'paygrade9' => ['max' => 'Maximum amount of characters reached'],

        'datefrom10' => ['before' => 'Enter a valid date',],
        //'dateto10' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position10' => ['max' => 'Maximum amount of characters reached'],
        'department10' => ['max' => 'Maximum amount of characters reached'],
        //salary10
        'paygrade10' => ['max' => 'Maximum amount of characters reached'],

        'datefrom11' => ['before' => 'Enter a valid date',],
        //'dateto11' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position11' => ['max' => 'Maximum amount of characters reached'],
        'department11' => ['max' => 'Maximum amount of characters reached'],
        //salary11
        'paygrade11' => ['max' => 'Maximum amount of characters reached'],

        'datefrom12' => ['before' => 'Enter a valid date',],
        //'dateto12' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position12' => ['max' => 'Maximum amount of characters reached'],
        'department12' => ['max' => 'Maximum amount of characters reached'],
        //salary12
        'paygrade12' => ['max' => 'Maximum amount of characters reached'],

        'datefrom13' => ['before' => 'Enter a valid date',],
        //'dateto13' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position13' => ['max' => 'Maximum amount of characters reached'],
        'department13' => ['max' => 'Maximum amount of characters reached'],
        //salary13
        'paygrade13' => ['max' => 'Maximum amount of characters reached'],

        'datefrom14' => ['before' => 'Enter a valid date',],
        //'dateto14' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position14' => ['max' => 'Maximum amount of characters reached'],
        'department14' => ['max' => 'Maximum amount of characters reached'],
        //salary14
        'paygrade14' => ['max' => 'Maximum amount of characters reached'],

        'datefrom15' => ['before' => 'Enter a valid date',],
        //'dateto15' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position15' => ['max' => 'Maximum amount of characters reached'],
        'department15' => ['max' => 'Maximum amount of characters reached'],
        //salary15
        'paygrade15' => ['max' => 'Maximum amount of characters reached'],

        'datefrom16' => ['before' => 'Enter a valid date',],
        //'dateto16' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position16' => ['max' => 'Maximum amount of characters reached'],
        'department16' => ['max' => 'Maximum amount of characters reached'],
        //salary16
        'paygrade16' => ['max' => 'Maximum amount of characters reached'],

        'datefrom17' => ['before' => 'Enter a valid date',],
        //'dateto17' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position17' => ['max' => 'Maximum amount of characters reached'],
        'department17' => ['max' => 'Maximum amount of characters reached'],
        //salary17
        'paygrade17' => ['max' => 'Maximum amount of characters reached'],

        'datefrom18' => ['before' => 'Enter a valid date',],
        //'dateto18' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position18' => ['max' => 'Maximum amount of characters reached'],
        'department18' => ['max' => 'Maximum amount of characters reached'],
        //salary18
        'paygrade18' => ['max' => 'Maximum amount of characters reached'],

        'datefrom19' => ['before' => 'Enter a valid date',],
        //'dateto19' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position19' => ['max' => 'Maximum amount of characters reached'],
        'department19' => ['max' => 'Maximum amount of characters reached'],
        //salary19
        'paygrade19' => ['max' => 'Maximum amount of characters reached'],

        'datefrom20' => ['before' => 'Enter a valid date',],
        //'dateto20' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position20' => ['max' => 'Maximum amount of characters reached'],
        'department20' => ['max' => 'Maximum amount of characters reached'],
        //salary20
        'paygrade20' => ['max' => 'Maximum amount of characters reached'],

        'datefrom21' => ['before' => 'Enter a valid date',],
        //'dateto21' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position21' => ['max' => 'Maximum amount of characters reached'],
        'department21' => ['max' => 'Maximum amount of characters reached'],
        //salary21
        'paygrade21' => ['max' => 'Maximum amount of characters reached'],

        'datefrom22' => ['before' => 'Enter a valid date',],
        //'dateto22' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position22' => ['max' => 'Maximum amount of characters reached'],
        'department22' => ['max' => 'Maximum amount of characters reached'],
        //salary22
        'paygrade22' => ['max' => 'Maximum amount of characters reached'],

        'datefrom23' => ['before' => 'Enter a valid date',],
        //'dateto23' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position23' => ['max' => 'Maximum amount of characters reached'],
        'department23' => ['max' => 'Maximum amount of characters reached'],
        //salary23
        'paygrade23' => ['max' => 'Maximum amount of characters reached'],

        'datefrom24' => ['before' => 'Enter a valid date',],
        //'dateto24' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position24' => ['max' => 'Maximum amount of characters reached'],
        'department24' => ['max' => 'Maximum amount of characters reached'],
        //salary24
        'paygrade24' => ['max' => 'Maximum amount of characters reached'],

        'datefrom25' => ['before' => 'Enter a valid date',],
        //'dateto25' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position25' => ['max' => 'Maximum amount of characters reached'],
        'department25' => ['max' => 'Maximum amount of characters reached'],
        //salary25
        'paygrade25' => ['max' => 'Maximum amount of characters reached'],

        'datefrom26' => ['before' => 'Enter a valid date',],
        //'dateto26' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position26' => ['max' => 'Maximum amount of characters reached'],
        'department26' => ['max' => 'Maximum amount of characters reached'],
        //salary26
        'paygrade26' => ['max' => 'Maximum amount of characters reached'],

        'datefrom27' => ['before' => 'Enter a valid date',],
        //'dateto27' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position27' => ['max' => 'Maximum amount of characters reached'],
        'department27' => ['max' => 'Maximum amount of characters reached'],
        //salary27
        'paygrade27' => ['max' => 'Maximum amount of characters reached'],

        'datefrom28' => ['before' => 'Enter a valid date',],
        //'dateto28' => 'required_with:datefrom6|after:datefrom6|nullable',
        'position28' => ['max' => 'Maximum amount of characters reached'],
        'department28' => ['max' => 'Maximum amount of characters reached'],
        //salary28
        'paygrade28' => ['max' => 'Maximum amount of characters reached'],

        //C3 validation error messages
        'orgnameAddress1' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom1
        //orgdateTo1
        //orgnumHours1
        'orgPosition1' => ['max' => 'Maximum amount of characters reached'],

        'orgnameAddress2' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom2
        //orgdateTo2
        //orgnumHours2
        'orgPosition2' => ['max' => 'Maximum amount of characters reached'],

        'orgnameAddress3' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom3
        //orgdateTo3
        //orgnumHours3
        'orgPosition3' => ['max' => 'Maximum amount of characters reached'],

        'orgnameAddress4' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom4
        //orgdateTo4
        //orgnumHours4
        'orgPosition4' => ['max' => 'Maximum amount of characters reached'],

        'orgnameAddress5' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom5
        //orgdateTo5
        //orgnumHours5
        'orgPosition5' => ['max' => 'Maximum amount of characters reached'],

        'orgnameAddress6' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom6
        //orgdateTo6
        //orgnumHours6
        'orgPosition6' => ['max' => 'Maximum amount of characters reached'],

        'orgnameAddress7' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom7
        //orgdateTo7
        //orgnumHours7
        'orgPosition7' => ['max' => 'Maximum amount of characters reached'],

        'orgnameAddress8' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom8
        //orgdateTo8
        //orgnumHours8
        'orgPosition8' => ['max' => 'Maximum amount of characters reached'],
        'orgType8' => ['max' => 'Maximum amount of characters reached'],
        'orgnameSponsor8' => ['max' => 'Maximum amount of characters reached'],


        'orgnameAddress9' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom9
        //orgdateTo9
        //orgnumHours9
        'orgPosition9' => ['max' => 'Maximum amount of characters reached'],
        'orgType9' => ['max' => 'Maximum amount of characters reached'],
        'orgnameSponsor9' => ['max' => 'Maximum amount of characters reached'],

        'orgnameAddress10' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom10
        //orgdateTo10
        //orgnumHours10
        'orgPosition10' => ['max' => 'Maximum amount of characters reached'],
        'orgType10' => ['max' => 'Maximum amount of characters reached'],
        'orgnameSponsor10' => ['max' => 'Maximum amount of characters reached'],

        'orgnameAddress11' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom11
        //orgdateTo11
        //orgnumHours11
        'orgPosition11' => ['max' => 'Maximum amount of characters reached'],
        'orgType11' => ['max' => 'Maximum amount of characters reached'],
        'orgnameSponsor11' => ['max' => 'Maximum amount of characters reached'],

        'orgnameAddress12' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom12
        //orgdateTo12
        //orgnumHours12
        'orgPosition12' => ['max' => 'Maximum amount of characters reached'],
        'orgType12' => ['max' => 'Maximum amount of characters reached'],
        'orgnameSponsor12' => ['max' => 'Maximum amount of characters reached'],

        'orgnameAddress13' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom13
        //orgdateTo13
        //orgnumHours13
        'orgPosition13' => ['max' => 'Maximum amount of characters reached'],
        'orgType13' => ['max' => 'Maximum amount of characters reached'],
        'orgnameSponsor13' => ['max' => 'Maximum amount of characters reached'],

        'orgnameAddress14' => ['max' => 'Maximum amount of characters reached'],
        //orgdateFrom14
        //orgdateTo14
        //orgnumHours14
        'orgPosition14' => ['max' => 'Maximum amount of characters reached'],
        'orgType14' => ['max' => 'Maximum amount of characters reached'],
        'orgnameSponsor14' => ['max' => 'Maximum amount of characters reached'],

        'orgnameSkill1' => ['max' => 'Maximum amount of characters reached'],
        'orgnameDistinct1' => ['max' => 'Maximum amount of characters reached'],
        'orgnameMembership1' => ['max' => 'Maximum amount of characters reached'],

        'orgnameSkill2' => ['max' => 'Maximum amount of characters reached'],
        'orgnameDistinct2' => ['max' => 'Maximum amount of characters reached'],
        'orgnameMembership2' => ['max' => 'Maximum amount of characters reached'],

        'orgnameSkill3' => ['max' => 'Maximum amount of characters reached'],
        'orgnameDistinct3' => ['max' => 'Maximum amount of characters reached'],
        'orgnameMembership3' => ['max' => 'Maximum amount of characters reached'],

        'orgnameSkill4' => ['max' => 'Maximum amount of characters reached'],
        'orgnameDistinct4' => ['max' => 'Maximum amount of characters reached'],
        'orgnameMembership4' => ['max' => 'Maximum amount of characters reached'],

        //C4 validation error messages
        'b34details' => ['max' => 'Maximum amount of characters reached'],
        'a35details' => ['max' => 'Maximum amount of characters reached'],
        'b35details' => ['max' => 'Maximum amount of characters reached'],
        'b35case' => ['max' => 'Maximum amount of characters reached'],
        'a36details' => ['max' => 'Maximum amount of characters reached'],
        'a37details' => ['max' => 'Maximum amount of characters reached'],
        'a38details' => ['max' => 'Maximum amount of characters reached'],
        'b38details' => ['max' => 'Maximum amount of characters reached'],
        'a39details' => ['max' => 'Maximum amount of characters reached'],
        'a40details' => ['max' => 'Maximum amount of characters reached'],
        'b40details' => ['max' => 'Maximum amount of characters reached'],
        'c40details' => ['max' => 'Maximum amount of characters reached'],
        'name41' => ['max' => 'Maximum amount of characters reached'],
        'address41' => ['max' => 'Maximum amount of characters reached'],
        'contactno41' => ['max' => 'Maximum amount of characters reached'],
        'name42' => ['max' => 'Maximum amount of characters reached'],
        'address42' => ['max' => 'Maximum amount of characters reached'],
        'contactno42' => ['max' => 'Maximum amount of characters reached'],
        'name43' => ['max' => 'Maximum amount of characters reached'],
        'address43' => ['max' => 'Maximum amount of characters reached'],
        'contactno43' => ['max' => 'Maximum amount of characters reached'],
        'valid44' => ['max' => 'Maximum amount of characters reached'],
        'issuanceplace44' => ['max' => 'Maximum amount of characters reached'],
        'issuancedate44' => ['before' => 'Enter a valid date',],'
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
