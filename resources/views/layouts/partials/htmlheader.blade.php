<head>
    <link rel="shortcut icon" href="images/birrete.ico">
    <meta charset="UTF-8">
    <title> VINCULACIÓN - @yield('title', '') </title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="{{ asset('/css/AdminLTE.css') }}" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
          page. However, you can choose any other skin. Make sure you
          apply the skin class to the body tag so the changes take effect.
      -->
      <link href="{{ asset('/css/skins/skin-blue.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('/css/skins/skin-red.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('/css/skins/skin-black.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('/css/skins/skin-yellow.css') }}" rel="stylesheet" type="text/css" />
      <link href="{{ asset('/css/skins/skin-purple.css') }}" rel="stylesheet" type="text/css" />
      <!-- iCheck -->
      <link href="{{ asset('/plugins/iCheck/square/blue.css') }}" rel="stylesheet" type="text/css" />
      <!-- DataTables -->
      <link rel="stylesheet" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css">

      <!-- SweetAlerts -->
      <link rel="stylesheet" href="{{ asset('/sweetalert/sweetalert.css') }}">
      <script src="{{ asset('js/sweetalert.min.js') }}"></script>
      <!-- Form Helpers -->
      <link rel="stylesheet" href="{{ asset('/form-helpers/css/bootstrap-formhelpers.min.css') }}">
      <!-- datePicker -->
      <!-- Datepicker Files -->
      <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker3.css')}}">
      <link rel="stylesheet" href="{{asset('datePicker/css/bootstrap-datepicker.standalone.css')}}">
      <script src="{{asset('datePicker/js/bootstrap-datepicker.js')}}"></script>
      <!-- Languaje -->
      <script src="{{asset('datePicker/locales/bootstrap-datepicker.es.min.js')}}"></script>

      <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('/sweetalert/sweetalert.min.js') }}" type="text/javascript"></script>
    <script
  src="http://code.jquery.com/jquery-2.2.4.min.js"
  integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44="
  crossorigin="anonymous"></script>
    <!--Hightchart-->
          <script src="{{ asset('js/highcharts.js') }}"></script>
           <script src="{{ asset('js/graficas.js') }}"></script>


</head>
