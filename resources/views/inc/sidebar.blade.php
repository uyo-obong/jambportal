 <!--Start sidebar-wrapper-->
 <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
   <div class="brand-logo">
    <a href="index-2.html">
     <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
     <h5 class="logo-text">Portal</h5>
   </a>
 </div>
 <ul class="sidebar-menu do-nicescrol">
  <li class="sidebar-header">NAVIGATION</li>
  @can('student')
  <li>
    <a href="/" class="waves-effect">
      <i class="icon-user icons"></i> <span>Profile</span>
    </a>
  </li>
  @endcan

  @can('view')
 <li class="{{ request()->is('schools') ? 'active' : '' }}">
  <a href="{{ route('index.school') }}" class="waves-effect">
   <i class="icon-loop"></i> <span>Faculties</span>
 </a>
</li>

<li class="{{ request()->is('departments') ? 'active' : '' }}">
  <a href="{{ route('index.department') }}" class="waves-effect">
   <i class="icon-note"></i> <span>Departments</span>
 </a>
</li>

 <li class="{{ request()->is('students') ? 'active' : '' }}">
  <a href="{{ route('getall.student') }}" class="waves-effect">
   <i class="icon-notebook"></i> <span>Students</span>
 </a>
</li>


<li class="{{ request()->is('zones') ? 'active' : '' }}">
  <a href="{{ route('index.zone') }}" class="waves-effect">
   <i class="icon-location-pin"></i> <span>Zones</span>
 </a>
</li>


<li class="{{ request()->is('types') ? 'active' : '' }}">
  <a href="javaScript:void();" class="waves-effect">
   <i class="icon-folder-alt"></i>
   <span>Exams</span> <i class="fa fa-angle-left pull-right"></i>
 </a>
 <ul class="sidebar-submenu">
  <li class="{{ request()->is('types') ? 'active' : '' }}">
    <a href="{{ route('index.type') }}"><i class="fa fa-circle-o"></i>Exam Type</a></li>
    <li class="{{ request()->is('subjects') ? 'active' : '' }}">
    <a href="{{ route('index.subject') }}"><i class="fa fa-circle-o"></i>Subjects</a></li>
    <li class="{{ request()->is('grades') ? 'active' : '' }}">
    <a href="{{ route('index.grade') }}"><i class="fa fa-circle-o"></i>Grades</a></li>
</ul>
</li>
@endcan

</ul>

</div>
<!--End sidebar-wrapper-->
