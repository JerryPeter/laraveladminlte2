<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>

  @include('layouts.includes.header_script') 

  @yield('additional_header')

</head>
<body class="hold-transition skin-black sidebar-mini">    
<!-- Site wrapper -->
<div class="wrapper">
  @include('layouts.includes.header') 


  @include('layouts.includes.sidebar') 


  <!-- ======================= BEGIN: CONTENT ==============================-->
  @yield('container')
  <!-- ======================= END: CONTENT ==============================-->

  @include('layouts.includes.footer') 

  @include('layouts.includes.left_sidebar') 

</div>
<!-- ./wrapper -->

@include('layouts.includes.footer_script') 

@yield('additional_footer')

</body>
</html>