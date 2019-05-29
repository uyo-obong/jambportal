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
      <h4 class="page-title">Form Wizard</h4>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="javaScript:void();">Rocker</a></li>
        <li class="breadcrumb-item"><a href="javaScript:void();">Forms</a></li>
        <li class="breadcrumb-item active" aria-current="page">Form Wizard</li>
      </ol>
    </div>
    <div class="col-sm-3">
     <div class="btn-group float-sm-right">
      <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
      <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
      </button>
      <div class="dropdown-menu">
        <a href="javaScript:void();" class="dropdown-item">Action</a>
        <a href="javaScript:void();" class="dropdown-item">Another action</a>
        <a href="javaScript:void();" class="dropdown-item">Something else here</a>
        <div class="dropdown-divider"></div>
        <a href="javaScript:void();" class="dropdown-item">Separated link</a>
      </div>
    </div>
  </div>
</div>
<!-- End Breadcrumb-->


<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-header text-uppercase">
        Validation Form Wizard
      </div>
      <div class="card-body">
       <form id="wizard-validation-form" method="POST" action="{{ route('create.student') }}">
        {{ csrf_field() }}
        <div>
          <h3>Step 1</h3>
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

              <div class="col-md-6">
                <div class="form-group">
                  <label for="age2"> Age *</label>
                  <input id="age2" name="age" value="{{ auth()->user()->age }}" type="text" class="required form-control">
                </div>
              </div>

              <div class="col-md-12">
                <div class="form-group">
                  <label for="email2"> Email Address *</label>
                  <input id="email2" name="email" value="{{ auth()->user()->email }}" type="text" class="required email form-control">
                </div>
              </div>

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

              <div class="col-md-4">
                <div class="form-group">
                  <label for="state2"> State *</label>
                  <input id="state2" name="state" type="text" class="required form-control">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="country2"> Country *</label>
                  <input id="country2" name="country" type="text" class="required form-control">
                </div>
              </div>

              <div class="col-md-4">
                <div class="form-group">
                  <label for="zone2"> Zone *</label>
                  <input id="zone2" name="zone" value="2" type="text" class="required form-control">
                </div>
              </div>

              <div class="form-group">
                <label class="col-lg-12 control-label">(*) Mandatory</label>
              </div>
            </div>
          </section>
          <h3>Step 2</h3>
          <section>
            <div class="row">

              <div class="col-md-6">
               <h4>OLevel Result</h4>
               <div class="form-group">
                <label for="examtype">Exam Type </label>
                <select name="exam_type" value="1" class="form-control single-select">
                  <option>Waec</option>
                  <option>Neco</option>
                </select>
              </div>
            </div>

            {{-- Result combination --}}
            <div class="col-md-6">
             <h4>OLevel Combination</h4>
             <div class="form-group">
              <label for="examtype2">Exam Type </label>
              <select class="form-control single-select">
                <option>Waec</option>
                <option>Neco</option>
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

          
          @include('students._subjectforms')
          

          {{-- Result Combination --}}
          @include('students._subjectforms2')

        </div>

        <div class="form-group">
          <label class="col-lg-12 control-label">(*) Mandatory</label>
        </div>
      </section>
      <h3>Step 3</h3>
      <section>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="Institution"> Institution *</label>
              <input id="Institution" name="institution_name" type="text" class="required form-control">
            </div>
          </div>

          <div class="col-md-12">
            <div class="form-group">
              <label for="department"> Department *</label>
              <input id="department" name="department" type="text" class="required form-control">
            </div>
          </div>

          <div class="col-md-12">
           <div class="form-group">
            <label for="examtype2"> School </label>
            <select name="school" value="1" class="form-control single-select">
              <option>Faculty Of Science</option>
              <option>Faculty Of Engineering</option>
            </select>
          </div>
        </div>

      </div>
    </section>
    <h3>Step Final</h3>
    <section class="dropzone" id="dropzone">
      <div class="form-group">
        <div class=" col-md-12" >
          {{-- <div class="dropzone" > --}}
           {{-- <form action="#" class="dropzone" id="dropzone"> --}}
            <div class="fallback">
              <input name="file" type="file" multiple="multiple">
            </div>
          {{--  </form> --}}

        </div>
      </div>
      <button  type="submit" class="btn btn-primary">Submit</button>
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