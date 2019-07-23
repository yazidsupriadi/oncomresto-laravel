
<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/bootstrap/css/bootstrap.min.css')}}">
    <link href="{{asset('admin/assets/vendor/fonts/circular-std/style.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('admin/assets/libs/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/charts/chartist-bundle/chartist.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/charts/morris-bundle/morris.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/charts/c3charts/c3.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendor/fonts/flag-icon-css/flag-icon.min.css')}}">
    <title>Concept - Bootstrap 4 Admin Dashboard Template</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" ></script>

    @yield('header')
</head>

<body>
    @include('sweet::alert')
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        @include('admin.inc.navbar')
        @include('admin.inc.left')
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            @yield('content')
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="{{asset('admin/assets/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
    <!-- bootstap bundle js -->
    <script src="{{asset('admin/assets/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
    <!-- slimscroll js -->
    <script src="{{asset('admin/assets/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
    <!-- main js -->
    <script src="{{asset('admin/assets/libs/js/main-js.js')}}"></script>
    <!-- chart chartist js -->
    <script src="{{asset('admin/assets/vendor/charts/chartist-bundle/chartist.min.js')}}"></script>
    <!-- sparkline js -->
    <script src="{{asset('admin/assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <!-- morris js -->
    <script src="{{asset('admin/assets/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/charts/morris-bundle/morris.js')}}"></script>
    <!-- chart c3 js -->
    <script src="{{asset('admin/assets/vendor/charts/c3charts/c3.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/charts/c3charts/C3chartjs.js')}}"></script>
    <script src="{{asset('admin/assets/libs/js/dashboard-ecommerce.js')}}"></script>
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script src="/vendor/unisharp/laravel-ckeditor/adapters/jquery.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script>
   var route_prefix = "{{ url(config('lfm.url_prefix', config('lfm.prefix'))) }}";
  </script>

  <!-- CKEditor init -->
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/ckeditor.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/ckeditor/4.5.11/adapters/jquery.js"></script>
  <script>
    $('textarea[name=description]').ckeditor({
      height: 100,
      filebrowserImageBrowseUrl: route_prefix + '?type=Images',
      filebrowserImageUploadUrl: route_prefix + '/upload?type=Images&_token={{csrf_token()}}',
      filebrowserBrowseUrl: route_prefix + '?type=Files',
      filebrowserUploadUrl: route_prefix + '/upload?type=Files&_token={{csrf_token()}}'
    });
  </script>

  
    
    @yield('footer')
</body>
 
</html>