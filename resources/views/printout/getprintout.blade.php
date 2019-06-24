@extends('layouts.app')

@section('content')
<!-- Start wrapper-->
<div id="wrapper">

    <div class="clearfix"></div>

    @include('messages.flash')

    <div class="content-wrapper">
        <div class="container-fluid">

            <div class="row">
                <div class="col-lg-12">
                    <div style="padding-left:12%" class="card">
                        <div class="card-body">
                            <h5 class="offset-3">Applicant Bio Data</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    Applicant Reg No: 89w89783687

                                </div>
                                <div class="col-md-6">
                                    Fullname: Eric Bassy Umoh
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    Age: 16
                                </div>

                                <div class="col-md-6">
                                    Gender: Male
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    Phone: 0902928344
                                </div>

                                <div class="col-md-6">
                                    Contact Address: Uyo, Oron road
                                </div>
                            </div>

                            <div class="row">

                                <div class="col-md-6">
                                    LGA: Etim Ekpo
                                </div>

                                <div class="col-md-6">
                                    State of Origin: Akwa Ibom State
                                </div>
                            </div>

                            {{-- CENTER DETAILS --}}
                            <h5 class="offset-3">Center Details</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    Center Name: Numek Institute

                                </div>
                                <div class="col-md-6">
                                    Zone: South South
                                </div>

                                <div class="col-md-6">
                                    Center Number: 877849348

                                </div>
                                <div class="col-md-6">
                                    Sit Number: 0083
                                </div>
                            </div>


                            {{-- CHOICE OF INSTITUTION --}}
                            <h5 class="offset-3">Choice of Institution</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    Name: Numek Institute

                                </div>
                                <div class="col-md-6">
                                    Department: South South
                                </div>
                            </div>

                            {{-- O-LEVEL RESULT --}}
                            <h5 class="offset-3">O-Level Result</h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <h5><u>First Sitting</u></h5>
                                    <p><b>Exam Type:</b> Waec</p>

                                    <p><b>RExam Number:</b> 4041103844</p>
                                    <p><b>Exam Year:</b> 2014</p>
                                    <div class="">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Subjects</th>
                                                    <th scope="col">Grades</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="1">English</td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="1">English</td>
                                                    <td>A</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="1">English</td>
                                                    <td>A</td>

                                                </tr>

                                                <tr>
                                                    <td colspan="1">English</td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1">English</td>
                                                    <td>A</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>

                                </div>

                                <div class="col-md-5">
                                    <h5><u>First Sitting</u></h5>
                                    <p><b>Exam Type:</b> Waec</p>

                                    <p><b>RExam Number:</b> 4041103844</p>
                                    <p><b>Exam Year:</b> 2014</p>
                                    <div class="">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Subjects</th>
                                                    <th scope="col">Grades</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td colspan="1">English</td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>

                                                    <td colspan="1">English</td>
                                                    <td>A</td>
                                                </tr>

                                                <tr>
                                                    <td colspan="1">English</td>
                                                    <td>A</td>

                                                </tr>

                                                <tr>
                                                    <td colspan="1">English</td>
                                                    <td>A</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="1">English</td>
                                                    <td>A</td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div><!-- End Row-->

        </div>
        <!-- End container-fluid-->

    </div>
    <!--End content-wrapper-->
    <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

</div>
<!--End wrapper-->
@endsection