
@if(session()->has('success'))
 <div class="load"></div>
 <script>
  window.addEventListener('load', function(event) {
    swal("Success!", "{{ session()->get('success') }}", "success");
  });
</script>
@endif