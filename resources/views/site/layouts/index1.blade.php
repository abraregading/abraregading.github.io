@include('site.layouts.komponen1.head')

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


@include('site.layouts.komponen1.navbar')

<!--==================================
=            Konten                   =
===================================-->

@yield('konten')

<!--============================
=            Footer            =
=============================-->
@include('site.layouts.komponen1.footer')



  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
    @include('site.layouts.komponen1.script')

  
</body>

</html>