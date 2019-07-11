<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Print-Out</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />

    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
</head>

@if (!$print)
<div style="margin-right:30%; margin-top:5%" class="card text-center offset-3">
    <div class="card-header">
        Acknowledgement Slip
    </div>
    <div class="card-body">
        <p class="card-text">We are kindly sorry! Your acknowledgement slip will be available within 24hrs.</p>
        <a href="/" class="btn btn-primary">Go back</a>
    </div>
    <div class="card-footer text-muted">
        <script>
            var currentTime = new Date(),
             hours = currentTime.getHours(),
              minutes = currentTime.getMinutes();
                    
               if (minutes < 10) {
                        minutes = "0" + minutes;
                }
                    
                var suffix = "AM";
                if (hours >= 12) {
                 suffix = "PM";
                  hours = hours - 12;
                }
                 if (hours == 0) {
                  hours = 12;
                }
                    
            document.write(hours + ":" + minutes + " " + suffix)
        </script>
    </div>
</div>
@else

<body onload="window.print()">
    <section class="mt-5">
        <div class="container border p-5">
            <div class="row mb-3">
                <div class="col-md-3 text-center"><img src="assets/images/logo-icon.png" height="100px" width="100px"
                        alt=""></div>
                <div class="col-md-6 text-center">
                    <h5>Joint Admission and Matriculation Board</h5>
                    <p>2019/2020 Putme Acknoledgement slip</p>
                </div>
                <div class="col-md-3 text-center"><img src="{{ url('uploads/'.auth()->user()->image) }}" height="100px"
                        width="100px" alt=""></div>

            </div>
            <div class="row">
                <div class="col-md-12 text-center mt-3 mb-3 bg-primary text-light">
                    <h3>Applicant Bio Data</h3>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="col-md-6">
                    <div class="row mx-auto">
                        <div class="col-md-6">
                            <p>Reg. Number</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $print->regno }}</p>
                        </div>
                    </div>
                    <div class="row mx-auto">
                        <div class="col-md-6">
                            <p>Applicant name</p>
                        </div>
                        <div class="col-md-6">
                            <p>wisdom steve tim</p>
                        </div>
                    </div>
                    <div class="row mx-auto">
                        <div class="col-md-6">
                            <p>Sex</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $print->gender }}</p>
                        </div>
                    </div>
                    <div class="row mx-auto">
                        <div class="col-md-6">
                            <p>Age</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $print->age }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row mx-auto">
                        <div class="col-md-6">
                            <p>State Of Origin</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $print->state }}</p>
                        </div>
                    </div>
                    <div class="row mx-auto">
                        <div class="col-md-6">
                            <p>LGA Of Origin</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $print->city }}</p>
                        </div>
                    </div>
                    <div class="row mx-auto">
                        <div class="col-md-6">
                            <p>Contact Address</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $print->address }}</p>
                        </div>
                    </div>
                    <div class="row mx-auto">
                        <div class="col-md-6">
                            <p>Mobile No.</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $print->phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-md-12 text-center bg-primary text-light">
                    <h3>Jamb Details</h3>
                </div>
            </div> --}}
            {{-- <div class="row mx-auto">
                <div class="col-md-6">
                    <div class="row mb-4 mt-4">
                        <div class="col-md-6">
                            <p>applicant name</p>
                        </div>
                        <div class="col-md-6">
                            <p>wisdom steve tim</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row mb-4 mt-4 mx-auto">
                        <div class="col-md-6">
                            <p>applicant name</p>
                        </div>
                        <div class="col-md-6">
                            <p>wisdom steve tim</p>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row">
                <div class="col-md-12 text-center mt-4 mb-1 text-light bg-primary">
                    <h3>Programme Details</h3>
                </div>
            </div>
            <div class="row mt-4 mb-4 mx-auto">
                @foreach ($institutions as $institution)
                @foreach ($centers as $center)
                @if($institution->id == $user->all_institution_id && $center->id == $print->center_id)
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Choice Of Instituion</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $institution->institution_name}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Department</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{$user->institution->department }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Center Name</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $center->name}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <p>Sit Number</p>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $print->sit_no }}</p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
                @endforeach
            </div>
            <div class="row text-center">
                <div class="col-md-12 bg-primary text-light">
                    <h3>O-Level Result</h3>
                </div>
            </div>
            <div class="row mt-4 mb-4">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h5>First Sitting</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>O-level Type:</h5>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $olevel->type }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Exam No.:</h5>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $olevel->reg_no}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Exam Year:</h5>
                        </div>
                        <div class="col-md-6">
                            <p>{{ $olevel->exam_year}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h5>Second Sitting</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>O-level Type:</h5>
                        </div>
                        <div class="col-md-6">
                            <p></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Exam No.:</h5>
                        </div>
                        <div class="col-md-6">
                            <p></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Exam Year:</h5>
                        </div>
                        <div class="col-md-6">
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Subjects</th>
                                <th scope="col">Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $olevel->sub1 }}</td>
                                <td>{{ $olevel->grad1 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $olevel->sub2 }}</td>
                                <td>{{ $olevel->grad2 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $olevel->sub3 }}</td>
                                <td>{{ $olevel->grad3 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $olevel->sub4 }}</td>
                                <td>{{ $olevel->grad4 }}</td>
                            </tr>
                            <tr>
                                <td>{{ $olevel->sub5 }}</td>
                                <td>{{ $olevel->grad5 }}</td>
                            </tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Subjects</th>
                                <th scope="col">Grade</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $olevel? $olevel->ssub1 :"&nbsp;" }}&nbsp;</td>
                                <td>{{ $olevel? $olevel->sgrad1 : "&nbsp;" }}&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <hr>
            <p style="text-align:center;"> <a href="/">done</a></p>
        </div>
    </section>

    <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>

    <!-- Include a polyfill for ES6 Promises (optional) for IE11 -->
    <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js">
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>
@endif

</html>