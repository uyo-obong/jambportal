<div class="col-sm-6">
  <div class="row">
    <div class="col-md-6">
      <div class="form-group">
        <label for="subjects"> Subjects *</label>
        <select name="sub1" value="Mathematics" class="form-control required single-select">
          <option readonly>Mathematics</option>
          {{-- @foreach($subjects as $subject)
          <option>{{ $subject->name }}</option>
          @endforeach --}}
        </select>
      </div>

      <div class="form-group">
        <select name="sub2" class="form-control single-select">
          <option readonly>English</option>
          {{-- @foreach($subjects as $subject)
          <option>{{ $subject->name }}</option>
          @endforeach --}}
        </select>
      </div>

      <div class="form-group">
        <select name="sub3" class="form-control single-select">
         <option selected>Select Subject</option>
         @foreach($subjects as $subject)
         <option>{{ $subject->name }}</option>
         @endforeach
       </select>
     </div>

     <div class="form-group">
      <select name="sub4" class="form-control single-select">
       <option selected>Select Subject</option>
       @foreach($subjects as $subject)
       <option>{{ $subject->name }}</option>
       @endforeach
     </select>
   </div>

   <div class="form-group">
    <select name="sub5" class="form-control single-select">
     <option selected>Select Subject</option>
     @foreach($subjects as $subject)
     <option>{{ $subject->name }}</option>
     @endforeach
   </select>
 </div>
</div>

<div class="col-md-6">
  <div class="form-group">
    <label for="subjects2"> Grades </label>
    <select name="grad1" class="form-control single-select">
      <option selected>Grade</option>
      @foreach($grades as $grade)
      <option>{{ $grade->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <select name="grad2" class="form-control single-select">
      <option selected>Grade</option>
      @foreach($grades as $grade)
      <option>{{ $grade->name }}</option>
      @endforeach
    </select>
  </div>

  <div class="form-group">
    <select name="grad3" class="form-control single-select">
     <option selected>Grade</option>
     @foreach($grades as $grade)
     <option>{{ $grade->name }}</option>
     @endforeach
   </select>
 </div>

 <div class="form-group">
  <select name="grad4" class="form-control single-select">
   <option selected>Grade</option>
   @foreach($grades as $grade)
   <option>{{ $grade->name }}</option>
   @endforeach
 </select>
</div>


<div class="form-group">
  <select name="grad5" class="form-control single-select">
   <option selected>Grade</option>
   @foreach($grades as $grade)
   <option>{{ $grade->name }}</option>
   @endforeach
 </select>
</div>

</div>
</div>
</div>