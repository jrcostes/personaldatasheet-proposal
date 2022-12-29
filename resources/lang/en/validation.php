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
