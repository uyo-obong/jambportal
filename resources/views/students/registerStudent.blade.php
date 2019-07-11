<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>Jamb Registration Portal</title>

  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
  <meta name="viewport" content="width=device-width" />

  <!--     Fonts and icons     -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">

  <!-- CSS Files -->
  <link href="{{ URL::to('studreg/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link href="{{ URL::to('studreg/css/gsdk-bootstrap-wizard.css') }}" rel="stylesheet" />

  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{ URL::to('studreg/css/demo.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="image-container set-full-height" style="background-image: url('/studreg/img/IMG_0674.jpg')">

    <!--   Big container   -->
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-sm-offset-2">

          <!--      Wizard container        -->
          <div class="wizard-container">

            <div class="card wizard-card" data-color="blue" id="wizardProfile">
              <form method="POST" action="{{ route('create.student') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <!--  You can switch ' data-color="orange" '  with one of the next bright colors: "blue", "green", "orange", "red"          -->

                <div class="wizard-header">
                  <h3>
                   <b> Registration Portal <br>
                     <small>Complete your registration by filling the form.</small>
                   </h3>
                 </div>

                 <div class="wizard-navigation">
                  <ul>
                    <li><a href="#about" data-toggle="tab">Bio Data</a></li>
                    <li><a href="#olevel" data-toggle="tab">O level</a></li>
                    <li><a href="#institution" data-toggle="tab">Institution</a></li>
                  </div>

                  {{-- Bio Data Information --}}
                  <div class="tab-content">
                    <div class="tab-pane" id="about">
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="lastName2"> Last Name *</label>
                              <input class="required form-control" name="last_name" type="text">
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="firstName2"> First Name *</label>
                              <input id="firstName2" name="first_name" type="text" class="required form-control">
                            </div>
                          </div>

                          <div class="col-sm-4">
                            <div class="form-group">
                              <label for="middleName2"> Middle Name *</label>
                              <input id="middleName2" name="middle_name" type="text" class="required form-control">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="gender"> Gender *</label>
                              <select name="gender" class="required form-control single-select">
                                <option selected="">Select...</option>
                                <option>Male</option>
                                <option>Female</option>
                                <option>Others</option>
                              </select>
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="number2"> Phone Number *</label>
                              <input id="number2" name="phone_number" type="text" class="required form-control">
                            </div>
                          </div>

                          <input id="age2" name="age" value="{{ auth()->user()->age }}" type="hidden" class=" form-control">

                          <input id="email2" name="email" value="{{ auth()->user()->email }}" type="hidden" class=" email form-control">


                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="address"> Address *</label>
                              <input id="address" name="address" type="text" class="required form-control">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="city"> City *</label>
                              <input id="city" name="city" type="text" class="required form-control">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="state2"> State *</label>
                              <input id="state2" name="state" type="text" class="required form-control">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="country2"> Country *</label>
                              <input id="country2" name="country" type="text" class="required form-control">
                            </div>
                          </div>

                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="zone2"> Zone *</label>
                              <select name="zone" class="form-control single-select">
                                @foreach($zones as $zone)
                                <option>{{ $zone->name }}</option>
                                @endforeach
                              </select>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    {{-- Bio data information end --}}
                    <div class="tab-pane" id="olevel">
                      <div class="row">
                        <div class="col-sm-12">


                          <div class="col-sm-6">
                           <h4>OLevel (1st sitting)</h4>
                           <div class="form-group">
                            <label for="examtype">Exam Type </label>
                            <select name="exam_type" class="form-control single-select">
                              @foreach($types as $type)
                              <option>{{ $type->name }}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>

                        {{-- Result combination --}}
                        <div class="col-sm-6">
                         <h4>OLevel (2nd sitting)</h4>
                         <div class="form-group">
                          <label for="examtype2">Exam Type </label>
                          <select class="form-control single-select">
                            @foreach($types as $type)
                            <option>{{ $type->name }}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>


                      <div class="row">
                        <div class="col-sm-12">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="cnumber2"> Center Number *</label>
                              <input id="cnumber2" name="center_number" type="text" class="required form-control">
                            </div>
                          </div>

                          {{-- Olevel combination --}}
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="cnumber2"> Center Number</label>
                              <input id="cnumber2" name="cnumber2" type="text" class=" form-control">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="Rnumber2"> Registration Number *</label>
                              <input id="Rnumber2" name="reg_no" type="text" class="required form-control">
                            </div>
                          </div>

                          {{-- Olevel Combination --}}
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="Rnumber2"> Registration Number</label>
                              <input id="Rnumber2" name="rnumber" type="text" class=" form-control">
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-sm-12">
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="email2">  Exam Year *</label>
                              <input id="email2" name="exam_year" type="text" class="required form-control">
                            </div>
                          </div>

                          {{-- Olevel Combination--}}
                          <div class="col-sm-6">
                            <div class="form-group">
                              <label for="examyear2">Exam Year</label>
                              <input id="examyear2" name="examyear" type="text" class="  form-control">
                            </div>
                          </div>
                        </div>

                      </div>

                      @include('students._subjectforms')


                      {{-- Result Combination --}}
                      @include('students._subjectforms2')

                    </div>
                  </div>
                </div>

                <div class="tab-pane" id="institution">
                  <div class="row">
                    <div class="col-sm-12">

                     <div class="col-sm-4 ">
                       <div class="picture-container">
                        <div class="picture">
                          <img src="{{ URL::to('studreg/img/default-avatar.png') }}" class="picture-src" id="wizardPicturePreview" title=""/>
                          <input type="file" name="file" id="wizard-picture">
                        </div>
                        <h6>Upload Passport</h6>
                      </div>
                    </div>


                    <div class="col-sm-8">
                      <div class="form-group">
                        <label for="Institution"> Institution *</label>
                        <select name="allinstitution_id" class="form-control single-select">
                          @foreach($institutions as $institution)
                          <option value="{{ $institution->id }}">
                            {{ $institution->institution_name }} <b>(has {{ $institution->registered_students }}/{{ $institution->number_of_students }} registered applicants)</b>
                            </option>
                          @endforeach
                        </select>
                      </div>

                      <div class="form-group">
                        <label for="school"> Faculty </label>
                        <select name="school" class="form-control single-select">
                          @foreach($schools as $school)
                          <option>{{ $school->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>

                    <div class="col-sm-12">
                      <div class="form-group">
                        <label for="department"> Department *</label>
                        <select name="department" class="form-control single-select">
                          @foreach($departments as $department)
                          <option>{{ $department->name }}</option>
                          @endforeach
                        </select>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
            </div>

            <div class="wizard-footer height-wizard">
              <div class="pull-right">
                <input type='button' class='btn btn-next btn-fill btn-primary btn-wd btn-sm' name='next' value='Next' />
                <input type='submit' class='btn btn-finish btn-fill btn-primary btn-wd btn-sm' name='finish' value='Finish' />
              </div>

              <div class="pull-left">
                <input type='button' class='btn btn-previous btn-fill btn-default btn-wd btn-sm' name='previous' value='Previous' />
              </div>
              <div class="clearfix"></div>
            </div>

          </form>
        </div>
      </div> <!-- wizard container -->
    </div>
  </div><!-- end row -->
</div> <!--  big container -->

<div class="footer">
  <div class="container">
   {{-- Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/bootstrap-wizard">here.</a> --}}
 </div>
</div>

</div>

</body>

<!--   Core JS Files   -->
<script src="{{ URL::to('studreg/js/jquery-2.2.4.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('studreg/js/bootstrap.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::to('studreg/js/jquery.bootstrap.wizard.js') }}" type="text/javascript"></script>

<!--  Plugin for the Wizard -->
<script src="{{ URL::to('studreg/js/gsdk-bootstrap-wizard.js') }}"></script>

<!--  More information about jquery.validate here: http://jqueryvalidation.org/  -->
<script src="{{ URL::to('studreg/js/jquery.validate.min.js') }}"></script>

</html>
