<!DOCTYPE html>
<html>
<head>
  <title>Star Admin Pro Laravel Dashboard Template</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">

  <link rel="shortcut icon" href="{{ asset('/favicon.ico') }}">

  <!-- plugin css -->
  <link rel="stylesheet" href="/admin/template/assets/plugins/@mdi/font/css/materialdesignicons.min.css" />

  <link rel="stylesheet" href="/admin/template/assets/plugins/perfect-scrollbar/perfect-scrollbar.css" />
  <!-- end plugin css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
  @stack('plugin-styles')

  <!-- common css -->

  <link rel="stylesheet" href="/admin/template/css/app.css" />
  <!-- end common css -->
<style type="text/css">

  #pagination{
    padding: 20px;
    background: #e9ecef;
  }

  #pagination p{
    text-align: center;
    line-height: 50px;
  }
  #pagination svg{
    width: 50px !important;
  }
</style>
  @stack('style')
</head>
<body data-base-url="{{url('/')}}">

  <div class="container-scroller" id="app">
    @include('admin.layout.header')
    <div class="container-fluid page-body-wrapper">
      @include('admin.layout.sidebar')
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('admin.layout.footer')
      </div>
    </div>
  </div>

  <!-- base js -->
  <script src="/admin/template/js/app.js"></script>
  <script src="/admin/template/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

  <!-- end base js -->

  <!-- plugin js -->
  @stack('plugin-scripts')
  <!-- end plugin js -->

  <!-- common js -->
  <script src="/admin/template/assets/js/off-canvas.js"></script>
  <script src="/admin/template/assets/js/hoverable-collapse.js"></script>
  <script src="/admin/template/assets/js/misc.js"></script>
  <script src="/admin/template/assets/js/settings.js"></script>
  <script src="/admin/template/assets/js/todolist.js"></script>
  <!-- end common js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
  @stack('custom-scripts')
</body>
</html>
 <script>
        @if (Session::has('message'))
            var type = "{{ Session::get('alert-type', 'info') }}"
            switch (type) {
                case 'info':

                    toastr.options.timeOut = 10000;
                    toastr.info("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();
                    break;
                case 'success':

                    toastr.options.timeOut = 10000;
                    toastr.success("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
                case 'warning':

                    toastr.options.timeOut = 10000;
                    toastr.warning("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
                case 'error':

                    toastr.options.timeOut = 10000;
                    toastr.error("{{ Session::get('message') }}");
                    var audio = new Audio('audio.mp3');
                    audio.play();

                    break;
            }
        @endif
    </script>