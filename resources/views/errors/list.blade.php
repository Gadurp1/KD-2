@if($errors->any())

        <script>
               swal({   title: "Whaa!",   text: "@foreach($errors->all() as $error) {{$error}},  @endforeach",   type: "warning",   confirmButtonText: "Try Again" });
        </script>
   
@endif
