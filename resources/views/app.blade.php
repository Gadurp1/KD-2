<!DOCTYPE html>
<html lang="en">
  <head>
    @include('partials.head')
    <script>
      tinymce.init({
        selector: '#summernote',
        skin: 'lightgray' ,
        toolbar: 'undo redo styleselect bold italic  bullist numlist indent code',
        plugins: 'code',
        browser_spellcheck: true,
          });
          tinymce.init({
            selector: '#summernote2',
      });
    </script>
  </head>
  <body style="background:#f8f8f8">
    <!--  Main Site Navigation Bar -->
    @include('partials.header')
    <!-- Errors and Session Alerts -->
    @include('errors.list')
    @if (Session::has('flash_message'))
      <script>
        swal({   title: "{{session('flash_message')}}",   text: "",   type: "success",   confirmButtonText: "Cool" });
      </script>
    @endif
    @if (Session::has('flash_message_warning'))
      <script>
        swal({   title: "{{session('flash_message_warning')}}",   text: "",   type: "error",   confirmButtonText: "Cool" });
      </script>
    @endif
    <!--  Main Site Content-->
    <div>
      @yield('content')
    </div>
    <!-- Site Footer -->
  </body>
</html>
