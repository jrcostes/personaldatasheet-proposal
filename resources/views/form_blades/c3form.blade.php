
@extends('welcome')

@section('content')
    @include('sweetalert::alert')
    @if(session()->has('message'))
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js%22%3E"></script>
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



    <html>

        <div class="container">
            <form method="get" action="/c3formsubmit" autocomplete="off" class="form-horizontal" onsubmit="return submitForm(this);">
            <div class="form-container">

                    <div class="1">
                        <h2>VI. VOLUNTARY WORK OR INVOLVEMENT IN CIVIC/NON-GOVERNMENT/PEOPLE/VOLUNTARY ORGANIZATION</h2>
                        <h5>{{ Form::label('orgname', 'Please fill-up the following: ') }}</h5>

                        {{-- <div class="col-1 row px-0">
                                    <div class="col-5 offset-1 px-0">
                                        <button class="btn btn-secondary btn-sm w-100" type="button" id="minus-ref" disabled>-</button>
                                    </div>
                                    <div class="col-5 offset-1 px-0">
                                        <button class="btn btn-secondary btn-sm w-100" type="button" id="add-ref">+</button>
                                    </div>
                        </div> --}}
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
                                        <button class="btn btn-secondary btn-sm w-100" type="button" id="minus-ref" disabled>-</button>
                                    </div>
                                    <div class="col-5 offset-1 px-0">
                                        <button class="btn btn-secondary btn-sm w-100" type="button" id="add-ref">+</button>
                                    </div>
                                </div>

                        </div>
                </div><br>

                    <div class="2">
                        <h2>VII. LEARNING AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS ATTENDED</h2>
                            <h6 style="font-style: italic;">(Start from the most recent L&D/training program and include only the relevant L&D/training taken for the last five (5) years for Division Chief/Executive/Managerial positions)</h6><br>
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
                                    <button class="btn btn-secondary btn-sm w-100" type="button" id="minus1-ref" disabled>-</button>
                                </div>
                                <div class="col-5 offset-1 px-0">
                                    <button class="btn btn-secondary btn-sm w-100" type="button" id="add1-ref">+</button>
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
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="minus2-ref" disabled>-</button>
                            </div>
                            <div class="col-5 offset-1 px-0">
                                <button class="btn btn-secondary btn-sm w-100" type="button" id="add2-ref">+</button>
                            </div>
                        </div>
                        <br>
                        <div style="text-align:center">
                            <button type="submit" class="btn btn-primary btn-loading" data-coreui-timeout="2000">Submit</button>
                        </div>
                    {{Form::close()}}
                    </div>
            </div>
        </div>
    </html>
    {{-- first incrementing button --}}
    <script>
        $(function() {
            var refCount = 5;
            var counter = 0

            $('#add-ref').on('click', function(e) {
                e.preventDefault();

                if (refCount <= 5 && counter == 0) {
                    $('.org1-container').removeClass('d-none');
                    $('#minus-ref').attr('disabled', false);
                    counter++;
                } else if( refCount <= 5 && counter == 1){
                    $('.org2-container').removeClass('d-none');
                    $('#minus-ref').attr('disabled', false);
                    counter++;
                } else if( refCount <= 5 && counter == 2){
                    $('.org3-container').removeClass('d-none');
                    $('#minus-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 5 && counter == 3){
                    $('.org4-container').removeClass('d-none');
                    $('#minus-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 5 && counter == 4){
                    $('.org5-container').removeClass('d-none');
                    $('#minus-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 5 && counter == 5){
                    $('.org6-container').removeClass('d-none');
                    $('#add-ref').attr('disabled', true);

                }
            });

            $('#minus-ref').on('click', function(e) {
                e.preventDefault();

                if (refCount <= 5 && counter == 5) {
                    $('.org6-container').addClass('d-none');
                    $('#add-ref').attr('disabled', false);
                    counter--;
                } else if (refCount <= 5 && counter == 4) {
                    $('.org5-container').addClass('d-none');
                    $('#minus-ref').attr('disabled', false);
                    counter--;
                } else if (refCount <= 5 && counter == 3) {
                    $('.org4-container').addClass('d-none');
                    $('#minus-ref').attr('disabled', false);
                    counter--;
                } else if (refCount <= 5 && counter == 2) {
                    $('.org3-container').addClass('d-none');
                    $('#minus-ref').attr('disabled', false);
                    counter--;
                } else if (refCount <= 5 && counter == 1) {
                    $('.org2-container').addClass('d-none');
                    $('#minus-ref').attr('disabled', false);
                    counter--;
                }else if (refCount <= 11 && counter == 0) {
                    $('.org1-container').addClass('d-none');
                    $('#minus-ref').attr('disabled', true);
                }

            });
        });
    </script>

    {{-- second incrementing button --}}
    <script>
        $(function() {
            var refCount = 5;
            var counter = 0

            $('#add1-ref').on('click', function(e) {
                e.preventDefault();

                if (refCount <= 5 && counter == 0) {
                    $('.orgLD1-container').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                } else if( refCount <= 5 && counter == 1){
                    $('.orgLD2-container').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                } else if( refCount <= 5 && counter == 2){
                    $('.orgLD3-container').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 5 && counter == 3){
                    $('.orgLD4-container').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 5 && counter == 4){
                    $('.orgLD5-container').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 5 && counter == 5){
                    $('.orgLD6-container').removeClass('d-none');
                    $('#add1-ref').attr('disabled', true);

                }
            });

            $('#minus1-ref').on('click', function(e) {
                e.preventDefault();

                if (refCount <= 5 && counter == 5) {
                    $('.orgLD6-container').addClass('d-none');
                    $('#add1-ref').attr('disabled', false);
                    counter--;
                } else if (refCount <= 5 && counter == 4) {
                    $('.orgLD5-container').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                } else if (refCount <= 5 && counter == 3) {
                    $('.orgLD4-container').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                } else if (refCount <= 5 && counter == 2) {
                    $('.orgLD3-container').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                } else if (refCount <= 5 && counter == 1) {
                    $('.orgLD2-container').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }else if (refCount <= 5 && counter == 0) {
                    $('.orgLD1-container').addClass('d-none');
                    $('#minus1-ref').attr('disabled', true);
                }

            });
        });
    </script>

    {{-- thid incrementing button --}}
    <script>
        $(function() {
            var refCount = 4;
            var counter = 0

            $('#add2-ref').on('click', function(e) {
                e.preventDefault();

                if (refCount <= 4 && counter == 0) {
                    $('.orgOI1-container').removeClass('d-none');
                    $('#minus2-ref').attr('disabled', false);
                    counter++;
                } else if( refCount <= 4 && counter == 1){
                    $('.orgOI2-container').removeClass('d-none');
                    $('#minus2-ref').attr('disabled', false);
                    counter++;
                }else if( refCount <= 4 && counter == 2){
                    $('.orgOI3-container').removeClass('d-none');
                    $('#minus2-ref').attr('disabled', false);
                    counter++;
                } else if( refCount <= 4 && counter == 3){
                    $('.orgOI4-container').removeClass('d-none');
                    $('#minus2-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 4 && counter == 4){
                    $('.orgOI5-container').removeClass('d-none');
                    $('#add2-ref').attr('disabled', true);
                }


            });

            $('#minus2-ref').on('click', function(e) {
                e.preventDefault();

                if (refCount <= 4 && counter == 4) {
                    $('.orgOI5-container').addClass('d-none');
                    $('#add2-ref').attr('disabled', false);
                    counter--;
                } else if (refCount <= 4 && counter == 3) {
                    $('.orgOI4-container').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }else if (refCount <= 4 && counter == 2) {
                    $('.orgOI3-container').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                } else if (refCount <= 4 && counter == 1) {
                    $('.orgOI2-container').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }else if (refCount <= 4 && counter == 0) {
                    $('.orgOI1-container').addClass('d-none');
                    $('#minus1-ref').attr('disabled', true);
                }

            });
        });
    </script>


    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="sweetalert/sweetalert.all.js"></script>
    <link rel="stylesheet" href="sweetalert2.min.css">
    <script>
        function submitForm(form) {
            swal({
                title: "Are you sure?",
                text: "Do you want to submit?",
                icon: "info",
                buttons: true,
                dangerMode: false
            })
            .then(function (isOkay) {
                if (isOkay) {
                    swal({
                        icon: "success",
                        text: "Your form has been submitted!",
                        buttons: false
                    });
                    form.submit();
                }
            });
            return false;
        }
    </script>
@endsection




