<!-- 
THEME: Small Apps | Bootstrap App Landing Template
VERSION: 1.0.0
AUTHOR: Themefisher

HOMEPAGE: https://themefisher.com/products/small-apps-free-app-landing-page-template/
DEMO: https://demo.themefisher.com/small-apps/
GITHUB: https://github.com/themefisher/Small-Apps-Bootstrap-App-Landing-Template

Get HUGO Version : https://themefisher.com/products/small-apps-hugo-app-landing-theme/

WEBSITE: https://themefisher.com
TWITTER: https://twitter.com/themefisher
FACEBOOK: https://www.facebook.com/themefisher
-->

<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>Selamat Datang | @yield('judul')</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Bootstrap App Landing Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Small Apps Template v1.0">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset ('site') }}/images/favicon.png" />
  
  <!-- PLUGINS CSS STYLE -->
  <link rel="stylesheet" href="{{ asset ('site') }}/plugins/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset ('site') }}/plugins/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="{{ asset ('site') }}/plugins/slick/slick.css">
  <link rel="stylesheet" href="{{ asset ('site') }}/plugins/slick/slick-theme.css">
  <link rel="stylesheet" href="{{ asset ('site') }}/plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="{{ asset ('site') }}/plugins/aos/aos.css">

  <!-- CUSTOM CSS -->
  <link href="{{ asset ('site') }}/css/style.css" rel="stylesheet">

</head>

<body class="body-wrapper" data-spy="scroll" data-target=".privacy-nav">


@yield('login')


  <!-- To Top -->
  <div class="scroll-top-to">
    <i class="ti-angle-up"></i>
  </div>
  
  <!-- JAVASCRIPTS -->
  <script src="{{ asset ('site') }}/plugins/jquery/jquery.min.js"></script>
  <script src="{{ asset ('site') }}/plugins/bootstrap/bootstrap.min.js"></script>
  <script src="{{ asset ('site') }}/plugins/slick/slick.min.js"></script>
  <script src="{{ asset ('site') }}/plugins/fancybox/jquery.fancybox.min.js"></script>
  <script src="{{ asset ('site') }}/plugins/syotimer/jquery.syotimer.min.js"></script>
  <script src="{{ asset ('site') }}/plugins/aos/aos.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgeuuDfRlweIs7D6uo4wdIHVvJ0LonQ6g"></script>
  <script src="{{ asset ('site') }}/plugins/google-map/gmap.js"></script>
  
  <script src="{{ asset ('site') }}/js/script.js"></script>
</body>

</html>