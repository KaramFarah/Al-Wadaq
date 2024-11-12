<!DOCTYPE html>
<html dir="rtl" lang="ar">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Al-Wadaq</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/frontEnd/img/favicon.png')}}" rel="icon">
  <link href="{{asset('assets/niceAdmin/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/niceAdmin/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/niceAdmin/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/niceAdmin/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/niceAdmin/vendor/quill/quill.snow.css')}}" rel="stylesheet">
  <link href="{{asset('assets/niceAdmin/vendor/quill/quill.bubble.css')}}" rel="stylesheet">
  <link href="{{asset('assets/niceAdmin/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
  <link href="{{asset('assets/niceAdmin/vendor/simple-datatables/style.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/niceAdmin/css/style.css')}}" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Noto+Kufi+Arabic:wght@100..900&display=swap" rel="stylesheet">
  
</head>

<body>


    @include('dashboard.layout.header')

    @include('dashboard.layout.sidebar')
    <main id="main" class="main">
      
      @isset($pageTitle)
        <div class="pagetitle">
          <h1>{{$pageTitle['title'] ?? 'No Title'}}</h1>
          <nav>
            <ol class="breadcrumb">
              @foreach ($pageTitle['bread_crumbs'] as $item)
                <li class="breadcrumb-item"><a href="{{$item['link']}}">{{$item['title']}}</a></li>
              @endforeach
            </ol>
          </nav>
        </div><!-- End Page Title -->
      @endisset
  
      @yield('content')
    </main><!-- End #main -->

    @include('dashboard.layout.footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{asset('assets/niceAdmin/vendor/apexcharts/apexcharts.min.js')}}"></script>
    <script src="{{asset('assets/niceAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/niceAdmin/vendor/chart.js/chart.umd.js')}}"></script>
    <script src="{{asset('assets/niceAdmin/vendor/echarts/echarts.min.js')}}"></script>
    <script src="{{asset('assets/niceAdmin/vendor/quill/quill.js')}}"></script>
    <script src="{{asset('assets/niceAdmin/vendor/simple-datatables/simple-datatables.js')}}"></script>
    <script src="{{asset('assets/niceAdmin/vendor/tinymce/tinymce.min.js')}}"></script>
    <script src="{{asset('assets/niceAdmin/vendor/php-email-form/validate.js')}}"></script>
  
    <!-- Template Main JS File -->
    <script src="{{asset('assets/niceAdmin/assets/js/main.js')}}"></script>
</body>

</html>