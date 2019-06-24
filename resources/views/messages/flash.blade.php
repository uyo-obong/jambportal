
@if(session()->has('success'))
 <div class="load"></div>
 <script>
  window.addEventListener('load', function(event) {
    swal("Success!", "{{ session()->get('success') }}", "success");
  });
</script>
@endif


@if(session()->has('payment'))
 <div class="load"></div>
 <script>
  window.addEventListener('load', function(event) {
    swal("Congrats!", "{{ session()->get('payment') }}", "success");
  });
</script>
@endif

