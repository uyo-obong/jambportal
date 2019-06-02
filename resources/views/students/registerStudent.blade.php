@extends('layouts.app')

@section('header_css')
<!-- jquery steps CSS-->
<link rel="stylesheet" type="text/css" href="{{ URL::to('assets/plugins/jquery.steps/css/jquery.steps.css') }}">
<!--Select Plugins-->
<link href="{{ URL::to('assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet" />
<!-- Dropzone css -->
<link href="{{ URL::to('assets/plugins/dropzone/css/dropzone.css') }}" rel="stylesheet" type="text/css">
@stop

@section('content')
<div class="clearfix"></div>

<div class="content-wrapper">
  <div class="container-fluid">
   <!-- Breadcrumb-->
   <div class="row pt-2 pb-2">
    <div class="col-sm">
      <h4 class="page-title">CBT Registration Portal</h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Jamb</a></li>
        <li class="breadcrumb-item active" aria-current="page">registration</li>
      </ol>
    </div>
    
  </div>
  <!-- End Breadcrumb-->


  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-header text-uppercase">
          Registration Form
        </div>
        <div class="card-body">
         <form id="wizard-validation-form" method="POST" action="{{ route('create.student') }}">
          {{ csrf_field() }}
          <div>
            <h3>Bio Data</h3>
            <section>
              <div class="row">

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="lastName2"> Last Name *</label>
                    <input class="required form-control" name="last_name" type="text">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="firstName2"> First Name *</label>
                    <input id="firstName2" name="first_name" type="text" class="required form-control">
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="form-group">
                    <label for="middleName2"> Middle Name *</label>
                    <input id="middleName2" name="middle_name" type="text" class="required form-control">
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <label for="number2"> Phone Number *</label>
                    <input id="number2" name="phone_number" type="text" class="required form-control">
                  </div>
                </div>

              {{-- <div class="col-md-6">
                <div class="form-group">
                  <label for="age2"> Age *</label>
                  
                </div>
              </div> --}}
              <input id="age2" name="age" value="{{ auth()->user()->age }}" type="hidden" class=" form-control">

              <input id="email2" name="email" value="{{ auth()->user()->email }}" type="hidden" class=" email form-control">

             {{--  <div class="col-md-12">
                <div class="form-group">
                  <label for="email2"> Email Address *</label>
                  
                </div>
              </div> --}}

              <div class="col-md-6">
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

              <div class="form-group">
                <label class="col-lg-12 control-label">(*) Mandatory</label>
              </div>
            </div>
          </section>
          <h3>O-level</h3>
          <section>
            <div class="row">

              <div class="col-md-6">
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
            <div class="col-md-6">
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


          <div class="col-md-6">
            <div class="form-group">
              <label for="cnumber2"> Center Number *</label>
              <input id="cnumber2" name="center_number" type="text" class="required form-control">
            </div>
          </div>

          {{-- Olevel combination --}}
          <div class="col-md-6">
            <div class="form-group">
              <label for="cnumber2"> Center Number</label>
              <input id="cnumber2" name="cnumber2" type="text" class=" form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="Rnumber2"> Registration Number *</label>
              <input id="Rnumber2" name="reg_no" type="text" class="required form-control">
            </div>
          </div>

          {{-- Olevel Combination --}}
          <div class="col-md-6">
            <div class="form-group">
              <label for="Rnumber2"> Registration Number</label>
              <input id="Rnumber2" name="rnumber" type="text" class=" form-control">
            </div>
          </div>

          <div class="col-md-6">
            <div class="form-group">
              <label for="email2">  Exam Year *</label>
              <input id="email2" name="exam_year" type="text" class="required form-control">
            </div>
          </div>

          {{-- Olevel Combination--}}
          <div class="col-md-6">
            <div class="form-group">
              <label for="examyear2">Exam Year</label>
              <input id="examyear2" name="examyear" type="text" class=" form-control">
            </div>
          </div>

          
        </div>
        @include('students._subjectforms')


        {{-- Result Combination --}}
        @include('students._subjectforms2')
        <div class="form-group">
          <label class="col-lg-12 control-label">(*) Mandatory</label>
        </div>
      </section>
      <h3>Subject</h3>
      <section>
        <div class="row">

         @include('students._subjectforms')


         {{-- Result Combination --}}
         @include('students._subjectforms2')
       </div>
       <div class="form-group">
        <label class="col-lg-12 control-label">(*) Mandatory</label>
      </div>
    </section>
    <h3>Institution</h3>
    <section>
      <div class="row">

       <div class="col-md-12">
        <div class="form-group">
          <label for="Institution"> Institution *</label>
          <select name="institution_name" class="form-control single-select">
            @foreach($institutions as $institution)
            <option>{{ $institution->institution_name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="col-md-12">
        <div class="form-group">
          <label for="department"> Department *</label>
          <select name="department" class="form-control single-select">
            @foreach($departments as $department)
            <option>{{ $department->name }}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="col-md-12">
       <div class="form-group">
        <label for="examtype2"> School </label>
        <select name="school" class="form-control single-select">
          @foreach($schools as $school)
          <option>{{ $school->name }}</option>
          @endforeach
        </select>
      </div>
    </div>

    <div class="dropzone form-group" id="dropzone">
      <div class=" col-md-12" >
        <div class="fallback">
          <input name="file" type="file" multiple="multiple">
        </div>
      </div>
    </div>

    <div class="form-group">
      <label class="col-lg-12 control-label">(*) Mandatory</label>
    </div>
  </div>
  <div  class="form-group float-right">
    <button  type="submit" class="btn btn-primary">Submit</button>
  </div>
</section>
</div>
</form>
</div>
</div>
</div>
</div><!-- End Row-->

</div>
<!-- End container-fluid-->

</div><!--End content-wrapper-->
<!--Start Back To Top Button-->
<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
<!--End Back To Top Button-->
@stop
@section('footer_js')
<!--Form Wizard-->
<script src="{{ URL::to('assets/plugins/jquery.steps/js/jquery.steps.min.js') }}" type="text/javascript"></script>
<script type="text/javascript" src="{{ URL::to('assets/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
<!--wizard initialization-->
<script src="{{ URL::to('assets/plugins/jquery.steps/js/jquery.wizard-init.js') }}" type="text/javascript"></script>
<!--Select Plugins Js-->
<script src="{{ URL::to('assets/plugins/select2/js/select2.min.js') }}"></script>
<!-- Dropzone JS  -->
<script src="{{ URL::to('assets/plugins/dropzone/js/dropzone.js') }}"></script>
@stop