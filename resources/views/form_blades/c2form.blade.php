@extends('welcome')

@section('content')

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<html>

<body class="wrapper">
   <!--  <nav class="navbar navbar-expand d-flex flex-column align-item-start" id="sidebar">
        <a href="#" class="navbar-brand text-light mt-5">
            <div class="display-5 font-weight-bold">Options</div>
        </a>
        <ul class="navbar-nav d-flex flex-column mt-5 w-100">
            <li class="nav-item w-100">
                <a href="/home" class="nav-link text-light pl-4">Login to Download</a>
            </li>
            <li class="nav-item w-100">
                <a href="#" class="nav-link text-light pl-4"></a>
            </li>
            <li class="nav-item w-100">
                <a href="#" class="nav-link text-light pl-4"></a>
            </li>
            <!--
            <li class="nav-item dropdown w-100">
                <a href="#" class="nav-link dropdown-toggle text-light pl-4" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">Service</a>
                <ul class="dropdown-menu w-100" aria-labelledby="navbarDropdown">
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 01</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 02</a></li>
                    <li><a href="#" class="dropdown-item text-light pl-4 p-2">Service 03</a></li>
                </ul>
            </li>
            <li class="nav-item w-100">
                <a href="#" class="nav-link text-light pl-4">Contact</a>
            </li>


        </ul>
    </nav>-->
    <section class="p-4 my-container">
        <!--<button class="btn my-4" id="menu-btn">Options</button>  -->

        <!-- insert forms here -->
        <h1>IV. CIVIL SERVICE ELIGIBILITY</h1></br>

        <form id="submitForm" method="get" action="/c2formsubmit" autocomplete="off" class="form-horizontal">
        @csrf
            <div class="col-1 row px-0">
                <div class="col-5 offset-1 px-0">
                    <button class="btn btn-secondary btn-sm w-100" type="button" id="minus-ref" disabled>-</button>
                </div>
                <div class="col-5 offset-1 px-0">
                    <button class="btn btn-secondary btn-sm w-100" type="button" id="add-ref">+</button>
                </div>
            </div>

            <div class="form-container static">
                <div class="container">
                <h3>#1</h3>
                <div class="row align-items-center">
                    <div class ="col">
                        {{Form:: label('eligibility', "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License")}}
                        {{Form:: text('eligibility', '', ['class' => 'form-control'])}}

                        {{Form:: label('rating', 'Rating (if applicable)')}}
                        {{Form:: text('rating', '', ['class' => 'form-control'])}}

                        {{Form:: label('dateofexam', 'Date of Examination/Conferment')}}<br>
                        {{Form:: date('dateofexam', '', ['class' => ''])}}<br>
                    </div>
                    <div class ="col">
                        {{Form:: label('placeofexam', 'Place of Examination/Conferment')}}
                        {{Form:: text('placeofexam', '', ['class' => 'form-control'])}}

                        {{Form:: label('licenseno', 'Licsense number (if applicable)')}}
                        {{Form:: number('licenseno', '', ['class' => 'form-control'])}}

                        {{Form:: label('validity', 'Date of Validity')}}<br>
                        {{Form:: date('validity', '', ['class' => ''])}}
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
                            <div class ='col'>
                                {{Form:: label("eligibility2", "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License")}}
                                {{Form:: text('eligibility2', '', ['class' => 'form-control'])}}
                                {{Form:: label('rating2', 'Rating (if applicable)')}}
                                {{Form:: text('rating2', '', ['class' => 'form-control'])}}
                                {{Form:: label('dateofexam2', 'Date of Examination/Conferment')}}<br>
                                {{Form:: date('dateofexam2', '', ['class' => ''])}}<br>
                            </div>
                            <div class ='col'>
                                {{Form:: label('placeofexam2', 'Place of Examination/Conferment')}}
                                {{Form:: text('placeofexam2', '', ['class' => 'form-control'])}}
                                {{Form:: label('licenseno2', 'License number (if applicable)')}}
                                {{Form:: number('licenseno2', '', ['class' => 'form-control'])}}
                                {{Form:: label('validity2', 'Date of Validity')}}<br>
                                {{Form:: date('validity2', '', ['class' => ''])}}<br>
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
                            <div class ='col'>
                                {{Form:: label("eligibility3", "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License")}}
                                {{Form:: text('eligibility3', '', ['class' => 'form-control'])}}
                                {{Form:: label('rating3', 'Rating (if applicable)')}}
                                {{Form:: text('rating3', '', ['class' => 'form-control'])}}
                                {{Form:: label('dateofexam3', 'Date of Examination/Conferment')}}<br>
                                {{Form:: date('dateofexam3', '', ['class' => ''])}}<br>
                            </div>
                            <div class ='col'>
                                {{Form:: label('placeofexam3', 'Place of Examination/Conferment')}}
                                {{Form:: text('placeofexam3', '', ['class' => 'form-control'])}}
                                {{Form:: label('licenseno3', 'License number (if applicable)')}}
                                {{Form:: number('licenseno3', '', ['class' => 'form-control'])}}
                                {{Form:: label('validity3', 'Date of Validity')}}<br>
                                {{Form:: date('validity3', '', ['class' => ''])}}<br>
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
                            <div class ='col'>
                                {{Form:: label("eligibility4", "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License")}}
                                {{Form:: text('eligibility4', '', ['class' => 'form-control'])}}
                                {{Form:: label('rating4', 'Rating (if applicable)')}}
                                {{Form:: text('rating4', '', ['class' => 'form-control'])}}
                                {{Form:: label('dateofexam4', 'Date of Examination/Conferment')}}<br>
                                {{Form:: date('dateofexam4', '', ['class' => ''])}}<br>
                            </div>
                            <div class ='col'>
                                {{Form:: label('placeofexam4', 'Place of Examination/Conferment')}}
                                {{Form:: text('placeofexam4', '', ['class' => 'form-control'])}}
                                {{Form:: label('licenseno4', 'License number (if applicable)')}}
                                {{Form:: number('licenseno4', '', ['class' => 'form-control'])}}
                                {{Form:: label('validity4', 'Date of Validity')}}<br>
                                {{Form:: date('validity4', '', ['class' => ''])}}<br>
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
                            <div class ='col'>
                                {{Form:: label("eligibility5", "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License")}}
                                {{Form:: text('eligibility5', '', ['class' => 'form-control'])}}
                                {{Form:: label('rating5', 'Rating (if applicable)')}}
                                {{Form:: text('rating5', '', ['class' => 'form-control'])}}
                                {{Form:: label('dateofexam5', 'Date of Examination/Conferment')}}<br>
                                {{Form:: date('dateofexam5', '', ['class' => ''])}}<br>
                            </div>
                            <div class ='col'>
                                {{Form:: label('placeofexam5', 'Place of Examination/Conferment')}}
                                {{Form:: text('placeofexam5', '', ['class' => 'form-control'])}}
                                {{Form:: label('licenseno5', 'License number (if applicable)')}}
                                {{Form:: number('licenseno5', '', ['class' => 'form-control'])}}
                                {{Form:: label('validity5', 'Date of Validity')}}<br>
                                {{Form:: date('validity5', '', ['class' => ''])}}<br>
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
                            <div class ='col'>
                                {{Form:: label("eligibility6", "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License")}}
                                {{Form:: text('eligibility6', '', ['class' => 'form-control'])}}
                                {{Form:: label('rating6', 'Rating (if applicable)')}}
                                {{Form:: text('rating6', '', ['class' => 'form-control'])}}
                                {{Form:: label('dateofexam6', 'Date of Examination/Conferment')}}<br>
                                {{Form:: date('dateofexam6', '', ['class' => ''])}}<br>
                            </div>
                            <div class ='col'>
                                {{Form:: label('placeofexam6', 'Place of Examination/Conferment')}}
                                {{Form:: text('placeofexam6', '', ['class' => 'form-control'])}}
                                {{Form:: label('licenseno6', 'License number (if applicable)')}}
                                {{Form:: number('licenseno6', '', ['class' => 'form-control'])}}
                                {{Form:: label('validity6', 'Date of Validity')}}<br>
                                {{Form:: date('validity6', '', ['class' => ''])}}<br>
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
                            <div class ='col'>
                                {{Form:: label("eligibility7", "Career Service/RA 1080 (Board/Bar)Under Special Laws/ CES/ CSEE Barangay Eligibility/ Driver's License")}}
                                {{Form:: text('eligibility7', '', ['class' => 'form-control'])}}
                                {{Form:: label('rating7', 'Rating (if applicable)')}}
                                {{Form:: text('rating7', '', ['class' => 'form-control'])}}
                                {{Form:: label('dateofexam7', 'Date of Examination/Conferment')}}<br>
                                {{Form:: date('dateofexam7', '', ['class' => ''])}}<br>
                            </div>
                            <div class ='col'>
                                {{Form:: label('placeofexam7', 'Place of Examination/Conferment')}}
                                {{Form:: text('placeofexam7', '', ['class' => 'form-control'])}}
                                {{Form:: label('licenseno7', 'License number (if applicable)')}}
                                {{Form:: number('licenseno7', '', ['class' => 'form-control'])}}
                                {{Form:: label('validity7', 'Date of Validity')}}<br>
                                {{Form:: date('validity7', '', ['class' => ''])}}<br>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>
            </div>

            <h2>V. WORK EXPERIENCE</h2><br>

            <div class="col-1 row px-0">
                <div class="col-5 offset-1 px-0">
                    <button class="btn btn-secondary btn-sm w-100" type="button" id="minus1-ref" disabled>-</button>
                </div>
                <div class="col-5 offset-1 px-0">
                    <button class="btn btn-secondary btn-sm w-100" type="button" id="add1-ref">+</button>
                </div>
            </div>


            <div class="form-container static">
                <div class='container'>
                    <h2>#1</h2>
                    <div class='row align-items-center'>
                        <div class ='col'>
                            <label>Inclusive Dates</label><br>
                            {{Form:: label('datefrom', 'From')}}
                            {{Form:: date('datefrom', '', ['class' => ''])}}

                            {{Form:: label('dateto', 'To')}}
                            {{Form:: date('dateto', '', ['class' => ''])}}<br>

                            {{Form:: label('position', 'Position/Title (Do Not Abbreviate)')}}
                            {{Form:: text('position', '', ['class' => 'form-control'])}}

                            {{Form:: label('department', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                            {{Form:: text('department', '', ['class' => 'form-control'])}}

                            {{Form:: label('salary', 'Monthly Salary')}}
                            {{Form:: text('salary', '', ['class' => 'form-control'])}}
                        </div>
                        <div class ='col'>
                            {{Form:: label('paygrade', 'Salary/Job/Pay Grade (if applicable)')}}
                            {{Form:: text('paygrade', '', ['class' => 'form-control'])}}

                            {{Form:: label('appointment', 'Status of Appointment')}}
                            {{Form:: text('appointment', '', ['class' => 'form-control'])}}

                            {{Form:: label('governmentserv', 'Government service (Y/N)')}}
                            <select class="custom-select mr-sm-2" id="governmentserv" name="governmentserv" required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom2', 'From')}}
                                {{Form:: date('datefrom2', '', ['class' => ''])}}
                                {{Form:: label('dateto2', 'To')}}
                                {{Form:: date('dateto2', '', ['class' => ''])}}<br>
                                {{Form:: label('position2', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position2', '', ['class' => 'form-control'])}}
                                {{Form:: label('department2', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department2', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary2', 'Monthly Salary')}}
                                {{Form:: text('salary2', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade2', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade2', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment2', 'Status of Appointment')}}
                                {{Form:: text('appointment2', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv2', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv2' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom3', 'From')}}
                                {{Form:: date('datefrom3', '', ['class' => ''])}}
                                {{Form:: label('dateto3', 'To')}}
                                {{Form:: date('dateto3', '', ['class' => ''])}}<br>
                                {{Form:: label('position3', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position3', '', ['class' => 'form-control'])}}
                                {{Form:: label('department3', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department3', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary3', 'Monthly Salary')}}
                                {{Form:: text('salary3', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade3', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade3', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment3', 'Status of Appointment')}}
                                {{Form:: text('appointment3', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv3', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv3' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom4', 'From')}}
                                {{Form:: date('datefrom4', '', ['class' => ''])}}
                                {{Form:: label('dateto4', 'To')}}
                                {{Form:: date('dateto4', '', ['class' => ''])}}<br>
                                {{Form:: label('position4', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position4', '', ['class' => 'form-control'])}}
                                {{Form:: label('department4', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department4', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary4', 'Monthly Salary')}}
                                {{Form:: text('salary4', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade4', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade4', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment4', 'Status of Appointment')}}
                                {{Form:: text('appointment4', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv4', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv4' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom5', 'From')}}
                                {{Form:: date('datefrom5', '', ['class' => ''])}}
                                {{Form:: label('dateto5', 'To')}}
                                {{Form:: date('dateto5', '', ['class' => ''])}}<br>
                                {{Form:: label('position5', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position5', '', ['class' => 'form-control'])}}
                                {{Form:: label('department5', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department5', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary5', 'Monthly Salary')}}
                                {{Form:: text('salary5', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade5', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade5', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment5', 'Status of Appointment')}}
                                {{Form:: text('appointment5', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv5', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv5' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom6', 'From')}}
                                {{Form:: date('datefrom6', '', ['class' => ''])}}
                                {{Form:: label('dateto6', 'To')}}
                                {{Form:: date('dateto6', '', ['class' => ''])}}<br>
                                {{Form:: label('position6', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position6', '', ['class' => 'form-control'])}}
                                {{Form:: label('department6', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department6', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary6', 'Monthly Salary')}}
                                {{Form:: text('salary6', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade6', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade6', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment6', 'Status of Appointment')}}
                                {{Form:: text('appointment6', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv6', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv6' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom7', 'From')}}
                                {{Form:: date('datefrom7', '', ['class' => ''])}}
                                {{Form:: label('dateto7', 'To')}}
                                {{Form:: date('dateto7', '', ['class' => ''])}}<br>
                                {{Form:: label('position7', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position7', '', ['class' => 'form-control'])}}
                                {{Form:: label('department7', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department7', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary7', 'Monthly Salary')}}
                                {{Form:: text('salary7', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade7', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade7', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment7', 'Status of Appointment')}}
                                {{Form:: text('appointment7', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv7', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv7' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom8', 'From')}}
                                {{Form:: date('datefrom8', '', ['class' => ''])}}
                                {{Form:: label('dateto8', 'To')}}
                                {{Form:: date('dateto8', '', ['class' => ''])}}<br>
                                {{Form:: label('position8', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position8', '', ['class' => 'form-control'])}}
                                {{Form:: label('department8', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department8', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary8', 'Monthly Salary')}}
                                {{Form:: text('salary8', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade8', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade8', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment8', 'Status of Appointment')}}
                                {{Form:: text('appointment8', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv8', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv8' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom9', 'From')}}
                                {{Form:: date('datefrom9', '', ['class' => ''])}}
                                {{Form:: label('dateto9', 'To')}}
                                {{Form:: date('dateto9', '', ['class' => ''])}}<br>
                                {{Form:: label('position9', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position9', '', ['class' => 'form-control'])}}
                                {{Form:: label('department9', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department9', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary9', 'Monthly Salary')}}
                                {{Form:: text('salary9', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade9', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade9', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment9', 'Status of Appointment')}}
                                {{Form:: text('appointment9', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv9', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv9' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom10', 'From')}}
                                {{Form:: date('datefrom10', '', ['class' => ''])}}
                                {{Form:: label('dateto10', 'To')}}
                                {{Form:: date('dateto10', '', ['class' => ''])}}<br>
                                {{Form:: label('position10', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position10', '', ['class' => 'form-control'])}}
                                {{Form:: label('department10', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department10', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary10', 'Monthly Salary')}}
                                {{Form:: text('salary10', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade10', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade10', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment10', 'Status of Appointment')}}
                                {{Form:: text('appointment10', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv10', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv10' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom11', 'From')}}
                                {{Form:: date('datefrom11', '', ['class' => ''])}}
                                {{Form:: label('dateto11', 'To')}}
                                {{Form:: date('dateto11', '', ['class' => ''])}}<br>
                                {{Form:: label('position11', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position11', '', ['class' => 'form-control'])}}
                                {{Form:: label('department11', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department11', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary11', 'Monthly Salary')}}
                                {{Form:: text('salary11', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade11', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade11', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment11', 'Status of Appointment')}}
                                {{Form:: text('appointment11', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv11', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv11' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom12', 'From')}}
                                {{Form:: date('datefrom12', '', ['class' => ''])}}
                                {{Form:: label('dateto12', 'To')}}
                                {{Form:: date('dateto12', '', ['class' => ''])}}<br>
                                {{Form:: label('position12', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position12', '', ['class' => 'form-control'])}}
                                {{Form:: label('department12', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department12', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary12', 'Monthly Salary')}}
                                {{Form:: text('salary12', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade12', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade12', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment12', 'Status of Appointment')}}
                                {{Form:: text('appointment12', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv12', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv12' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom13', 'From')}}
                                {{Form:: date('datefrom13', '', ['class' => ''])}}
                                {{Form:: label('dateto13', 'To')}}
                                {{Form:: date('dateto13', '', ['class' => ''])}}<br>
                                {{Form:: label('position13', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position13', '', ['class' => 'form-control'])}}
                                {{Form:: label('department13', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department13', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary13', 'Monthly Salary')}}
                                {{Form:: text('salary13', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade13', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade13', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment13', 'Status of Appointment')}}
                                {{Form:: text('appointment13', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv13', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv13' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom14', 'From')}}
                                {{Form:: date('datefrom14', '', ['class' => ''])}}
                                {{Form:: label('dateto14', 'To')}}
                                {{Form:: date('dateto14', '', ['class' => ''])}}<br>
                                {{Form:: label('position14', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position14', '', ['class' => 'form-control'])}}
                                {{Form:: label('department14', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department14', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary14', 'Monthly Salary')}}
                                {{Form:: text('salary14', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade14', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade14', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment14', 'Status of Appointment')}}
                                {{Form:: text('appointment14', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv14', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv14' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom15', 'From')}}
                                {{Form:: date('datefrom15', '', ['class' => ''])}}
                                {{Form:: label('dateto15', 'To')}}
                                {{Form:: date('dateto15', '', ['class' => ''])}}<br>
                                {{Form:: label('position15', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position15', '', ['class' => 'form-control'])}}
                                {{Form:: label('department15', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department15', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary15', 'Monthly Salary')}}
                                {{Form:: text('salary15', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade15', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade15', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment15', 'Status of Appointment')}}
                                {{Form:: text('appointment15', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv15', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv15' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom16', 'From')}}
                                {{Form:: date('datefrom16', '', ['class' => ''])}}
                                {{Form:: label('dateto16', 'To')}}
                                {{Form:: date('dateto16', '', ['class' => ''])}}<br>
                                {{Form:: label('position16', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position16', '', ['class' => 'form-control'])}}
                                {{Form:: label('department16', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department16', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary16', 'Monthly Salary')}}
                                {{Form:: text('salary16', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade16', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade16', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment16', 'Status of Appointment')}}
                                {{Form:: text('appointment16', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv16', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv16' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom17', 'From')}}
                                {{Form:: date('datefrom17', '', ['class' => ''])}}
                                {{Form:: label('dateto17', 'To')}}
                                {{Form:: date('dateto17', '', ['class' => ''])}}<br>
                                {{Form:: label('position17', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position17', '', ['class' => 'form-control'])}}
                                {{Form:: label('department17', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department17', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary17', 'Monthly Salary')}}
                                {{Form:: text('salary17', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade17', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade17', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment17', 'Status of Appointment')}}
                                {{Form:: text('appointment17', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv17', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv17' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom18', 'From')}}
                                {{Form:: date('datefrom18', '', ['class' => ''])}}
                                {{Form:: label('dateto18', 'To')}}
                                {{Form:: date('dateto18', '', ['class' => ''])}}<br>
                                {{Form:: label('position18', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position18', '', ['class' => 'form-control'])}}
                                {{Form:: label('department18', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department18', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary18', 'Monthly Salary')}}
                                {{Form:: text('salary18', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade18', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade18', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment18', 'Status of Appointment')}}
                                {{Form:: text('appointment18', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv18', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv18' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom19', 'From')}}
                                {{Form:: date('datefrom19', '', ['class' => ''])}}
                                {{Form:: label('dateto19', 'To')}}
                                {{Form:: date('dateto19', '', ['class' => ''])}}<br>
                                {{Form:: label('position19', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position19', '', ['class' => 'form-control'])}}
                                {{Form:: label('department19', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department19', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary19', 'Monthly Salary')}}
                                {{Form:: text('salary19', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade19', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade19', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment19', 'Status of Appointment')}}
                                {{Form:: text('appointment19', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv19', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv19' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom20', 'From')}}
                                {{Form:: date('datefrom20', '', ['class' => ''])}}
                                {{Form:: label('dateto20', 'To')}}
                                {{Form:: date('dateto20', '', ['class' => ''])}}<br>
                                {{Form:: label('position20', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position20', '', ['class' => 'form-control'])}}
                                {{Form:: label('department20', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department20', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary20', 'Monthly Salary')}}
                                {{Form:: text('salary20', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade20', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade20', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment20', 'Status of Appointment')}}
                                {{Form:: text('appointment20', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv20', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv20' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom21', 'From')}}
                                {{Form:: date('datefrom21', '', ['class' => ''])}}
                                {{Form:: label('dateto21', 'To')}}
                                {{Form:: date('dateto21', '', ['class' => ''])}}<br>
                                {{Form:: label('position21', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position21', '', ['class' => 'form-control'])}}
                                {{Form:: label('department21', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department21', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary21', 'Monthly Salary')}}
                                {{Form:: text('salary21', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade21', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade21', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment21', 'Status of Appointment')}}
                                {{Form:: text('appointment21', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv21', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv21' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom22', 'From')}}
                                {{Form:: date('datefrom22', '', ['class' => ''])}}
                                {{Form:: label('dateto22', 'To')}}
                                {{Form:: date('dateto22', '', ['class' => ''])}}<br>
                                {{Form:: label('position22', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position22', '', ['class' => 'form-control'])}}
                                {{Form:: label('department22', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department22', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary22', 'Monthly Salary')}}
                                {{Form:: text('salary22', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade22', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade22', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment22', 'Status of Appointment')}}
                                {{Form:: text('appointment22', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv22', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv22' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom23', 'From')}}
                                {{Form:: date('datefrom23', '', ['class' => ''])}}
                                {{Form:: label('dateto23', 'To')}}
                                {{Form:: date('dateto23', '', ['class' => ''])}}<br>
                                {{Form:: label('position23', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position23', '', ['class' => 'form-control'])}}
                                {{Form:: label('department23', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department23', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary23', 'Monthly Salary')}}
                                {{Form:: text('salary23', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade23', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade23', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment23', 'Status of Appointment')}}
                                {{Form:: text('appointment23', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv23', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv23' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom24', 'From')}}
                                {{Form:: date('datefrom24', '', ['class' => ''])}}
                                {{Form:: label('dateto24', 'To')}}
                                {{Form:: date('dateto24', '', ['class' => ''])}}<br>
                                {{Form:: label('position24', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position24', '', ['class' => 'form-control'])}}
                                {{Form:: label('department24', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department24', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary24', 'Monthly Salary')}}
                                {{Form:: text('salary24', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade24', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade24', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment24', 'Status of Appointment')}}
                                {{Form:: text('appointment24', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv24', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv24' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom25', 'From')}}
                                {{Form:: date('datefrom25', '', ['class' => ''])}}
                                {{Form:: label('dateto25', 'To')}}
                                {{Form:: date('dateto25', '', ['class' => ''])}}<br>
                                {{Form:: label('position25', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position25', '', ['class' => 'form-control'])}}
                                {{Form:: label('department25', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department25', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary25', 'Monthly Salary')}}
                                {{Form:: text('salary25', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade25', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade25', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment25', 'Status of Appointment')}}
                                {{Form:: text('appointment25', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv25', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv25' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom26', 'From')}}
                                {{Form:: date('datefrom26', '', ['class' => ''])}}
                                {{Form:: label('dateto26', 'To')}}
                                {{Form:: date('dateto26', '', ['class' => ''])}}<br>
                                {{Form:: label('position26', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position26', '', ['class' => 'form-control'])}}
                                {{Form:: label('department26', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department26', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary26', 'Monthly Salary')}}
                                {{Form:: text('salary26', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade26', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade26', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment26', 'Status of Appointment')}}
                                {{Form:: text('appointment26', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv26', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv26' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom27', 'From')}}
                                {{Form:: date('datefrom27', '', ['class' => ''])}}
                                {{Form:: label('dateto27', 'To')}}
                                {{Form:: date('dateto27', '', ['class' => ''])}}<br>
                                {{Form:: label('position27', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position27', '', ['class' => 'form-control'])}}
                                {{Form:: label('department27', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department27', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary27', 'Monthly Salary')}}
                                {{Form:: text('salary27', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade27', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade27', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment27', 'Status of Appointment')}}
                                {{Form:: text('appointment27', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv27', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv27' required>
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
                            <div class ='col'>
                                <label>Inclusive Dates</label><br>
                                {{Form:: label('datefrom28', 'From')}}
                                {{Form:: date('datefrom28', '', ['class' => ''])}}
                                {{Form:: label('dateto28', 'To')}}
                                {{Form:: date('dateto28', '', ['class' => ''])}}<br>
                                {{Form:: label('position28', 'Position/Title (Do Not Abbreviate)')}}
                                {{Form:: text('position28', '', ['class' => 'form-control'])}}
                                {{Form:: label('department28', 'Department/Agency/Office/Company (Do Not Abbreviate)')}}
                                {{Form:: text('department28', '', ['class' => 'form-control'])}}
                                {{Form:: label('salary28', 'Monthly Salary')}}
                                {{Form:: text('salary28', '', ['class' => 'form-control'])}}
                            </div>
                            <div class ='col'>
                                {{Form:: label('paygrade28', 'Salary/Job/Pay Grade (if applicable)')}}
                                {{Form:: text('paygrade28', '', ['class' => 'form-control'])}}
                                {{Form:: label('appointment28', 'Status of Appointment')}}
                                {{Form:: text('appointment28', '', ['class' => 'form-control'])}}
                                {{Form:: label('governmentserv28', 'Government service (Y/N)')}}
                                <select class='custom-select mr-sm-2' id='governmentserv' name='governmentserv28' required>
                                    <option value=''></option>
                                    <option value='Yes'>YES</option>
                                    <option value='No'>NO</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div><br>
            </div>


            <div class="button" style="text-align: center">
                <button type="submit"  name="action" value="submit" class="btn btn-primary" onclick = "submitAlert()" data-coreui-timeout="2000">Submit</button>

            </div>
        </form>
    </section>
    <!-- bootstrap js -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>
    <!-- custom js -->
    <script>
        var menu_btn = document.querySelector("#menu-btn")
        var sidebar = document.querySelector("#sidebar")
        var container = document.querySelector(".my-container")
        menu_btn.addEventListener("click", () => {
            sidebar.classList.toggle("active-nav")
            container.classList.toggle("active-cont")
        })
    </script>

</body>
</table>
</html>

<script>
    function submitAlert() {
        event.preventDefault();
        Swal.fire({
            title: 'Do you want to save the changes?',
            showDenyButton: true,
            confirmButtonText: 'Yes',
            denyButtonText: 'No',
            customClass: {
                actions: 'my-actions',
                confirmButton: 'order-2',
                denyButton: 'order-3',
            }
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire('Saved!', '', 'success');
                document.getElementById("submitForm").submit();
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
            })
    }

</script>
{{-- first incrementing form function --}}
<script>
    $(function() {
        var refCount = 5;
        var counter = 0

        $('#add-ref').on('click', function(e) {
            e.preventDefault();

            if (refCount <= 5 && counter == 0) {
                $('.form-container1').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            } else if( refCount <= 5 && counter == 1){
                $('.form-container2').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            } else if( refCount <= 5 && counter == 2){
                $('.form-container3').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            }
            else if( refCount <= 5 && counter == 3){
                $('.form-container4').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            }
            else if( refCount <= 5 && counter == 4){
                $('.form-container5').removeClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter++;
            }
            else if( refCount <= 5 && counter == 5){
                $('.form-container6').removeClass('d-none');
                $('#add-ref').attr('disabled', true);

            }
        });

        $('#minus-ref').on('click', function(e) {
            e.preventDefault();

            if (refCount <= 5 && counter == 5) {
                $('.form-container6').addClass('d-none');
                $('#add-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 5 && counter == 4) {
                $('.form-container5').addClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 5 && counter == 3) {
                $('.form-container4').addClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 5 && counter == 2) {
                $('.form-container3').addClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter--;
            } else if (refCount <= 5 && counter == 1) {
                $('.form-container2').addClass('d-none');
                $('#minus-ref').attr('disabled', false);
                counter--;
            }else if (refCount <= 5 && counter == 0) {
                $('.form-container1').addClass('d-none');
                $('#minus-ref').attr('disabled', true);
            }

        });
    });
</script>
{{-- second incrementing function --}}
<script>
$(function() {
            var refCount = 26;
            var counter = 0

            $('#add1-ref').on('click', function(e) {
                e.preventDefault();

                if (refCount <= 26 && counter == 0) {
                    $('.form-container21').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                } else if( refCount <= 26 && counter == 1){
                    $('.form-container22').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                } else if( refCount <= 26 && counter == 2){
                    $('.form-container23').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 3){
                    $('.form-container24').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 4){
                    $('.form-container25').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 5){
                    $('.form-container26').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', );
                    counter++;
                }
                else if( refCount <= 26 && counter == 6){
                    $('.form-container27').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 7){
                    $('.form-container28').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 29 && counter == 8){
                    $('.form-container29').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 9){
                    $('.form-container30').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 10){
                    $('.form-container31').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 11){
                    $('.form-container32').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 12){
                    $('.form-container33').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 13){
                    $('.form-container34').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 14){
                    $('.form-container35').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 15){
                    $('.form-container36').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 16){
                    $('.form-container37').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 17){
                    $('.form-container38').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 18){
                    $('.form-container39').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 19){
                    $('.form-container40').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 20){
                    $('.form-container41').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 21){
                    $('.form-container42').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 22){
                    $('.form-container43').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 23){
                    $('.form-container44').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 24){
                    $('.form-container45').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 25){
                    $('.form-container46').removeClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter++;
                }
                else if( refCount <= 26 && counter == 26){
                    $('.form-container47').removeClass('d-none');
                    $('#add1-ref').attr('disabled', true);
                }
            });

            $('#minus1-ref').on('click', function(e) {
                e.preventDefault();

                if (refCount <= 26 && counter == 26) {
                    $('.form-container47').addClass('d-none');
                    $('#add1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 25) {
                    $('.form-container46').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 24) {
                    $('.form-container45').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 23) {
                    $('.form-container44').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 22) {
                    $('.form-container43').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 21) {
                    $('.form-container42').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 20) {
                    $('.form-container41').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 19) {
                    $('.form-container40').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 18) {
                    $('.form-container39').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 17) {
                    $('.form-container38').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 16) {
                    $('.form-container37').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 15) {
                    $('.form-container36').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 14) {
                    $('.form-container35').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 13) {
                    $('.form-container34').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 12) {
                    $('.form-container33').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 11) {
                    $('.form-container32').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 10) {
                    $('.form-container31').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 9) {
                    $('.form-container30').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 8) {
                    $('.form-container29').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 7) {
                    $('.form-container28').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 6) {
                    $('.form-container27').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 5) {
                    $('.form-container26').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 4) {
                    $('.form-container25').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 3) {
                    $('.form-container24').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 2) {
                    $('.form-container23').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 1) {
                    $('.form-container22').addClass('d-none');
                    $('#minus1-ref').attr('disabled', false);
                    counter--;
                }
                else if (refCount <= 26 && counter == 0) {
                    $('.form-container21').addClass('d-none');
                    $('#minus1-ref').attr('disabled', true);
                }

            });
        });
</script>
@endsection
