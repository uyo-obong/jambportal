<div class="col-sm-6">
    <div class="row">
      <div class="col-md-6">
        <div class="form-group">
          <label for="subjects"> Subjects *</label>
          <select name="ssub1" value="Mathematics" class="form-control required single-select">
            <option readonly>Mathematics</option>
            {{-- @foreach($subjects as $subject)
            <option>{{ $subject->name }}</option>
            @endforeach --}}
          </select>
        </div>
  
        <div class="form-group">
          <select name="ssub2" class="form-control single-select">
            <option readonly>English</option>
            {{-- @foreach($subjects as $subject)
            <option>{{ $subject->name }}</option>
            @endforeach --}}
          </select>
        </div>
  
        <div class="form-group">
          <select name="ssub3" class="form-control single-select">
           <option selected>Select Subject</option>
           @foreach($subjects as $subject)
           <option>{{ $subject->name }}</option>
           @endforeach
         </select>
       </div>
  
       <div class="form-group">
        <select name="ssub4" class="form-control single-select">
         <option selected>Select Subject</option>
         @foreach($subjects as $subject)
         <option>{{ $subject->name }}</option>
         @endforeach
       </select>
     </div>
  
     <div class="form-group">
      <select name="ssub5" class="form-control single-select">
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
      <select name="sgrad1" class="form-control single-select">
        <option selected>Grade</option>
        @foreach($grades as $grade)
        <option>{{ $grade->name }}</option>
        @endforeach
      </select>
    </div>
  
    <div class="form-group">
      <select name="sgrad2" class="form-control single-select">
        <option selected>Grade</option>
        @foreach($grades as $grade)
        <option>{{ $grade->name }}</option>
        @endforeach
      </select>
    </div>
  
    <div class="form-group">
      <select name="sgrad3" class="form-control single-select">
       <option selected>Grade</option>
       @foreach($grades as $grade)
       <option>{{ $grade->name }}</option>
       @endforeach
     </select>
   </div>
  
   <div class="form-group">
    <select name="sgrad4" class="form-control single-select">
     <option selected>Grade</option>
     @foreach($grades as $grade)
     <option>{{ $grade->name }}</option>
     @endforeach
   </select>
  </div>
  
  
  <div class="form-group">
    <select name="sgrad5" class="form-control single-select">
     <option selected>Grade</option>
     @foreach($grades as $grade)
     <option>{{ $grade->name }}</option>
     @endforeach
   </select>
  </div>
  
  </div>
  </div>
  </div>