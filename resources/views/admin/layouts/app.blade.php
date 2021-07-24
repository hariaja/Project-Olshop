<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">
  
    <title>@yield('title')</title>
    
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />

    <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />
  
    <!-- PLUGINS CSS STYLE -->
    <link href="{{ asset('assets/sleek/plugins/simplebar/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/sleek/plugins/nprogress/nprogress.css') }}" rel="stylesheet" />
  
    <!-- No Extra plugin used -->
    <link href='{{ asset('assets/sleek/plugins/jvectormap/jquery-jvectormap-2.0.3.css') }}' rel='stylesheet'>
    <link href='{{ asset('assets/sleek/plugins/daterangepicker/daterangepicker.css') }}' rel='stylesheet'>
    <link href='{{ asset('assets/sleek/plugins/toastr/toastr.min.css') }}' rel='stylesheet'>
    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{ asset('assets/sleek/css/sleek.css') }}" />
    <!-- FAVICON -->
    <link href="{{ asset('assets/sleek/img/favicon.png') }}" rel="shortcut icon" />

    <link href="{{ asset('assets/sleek/options/optionswitch.css') }}" rel="stylesheet">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="{{ asset('assets/sleek/fontawesome/css/all.min.css') }}">
  
    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{ asset('assets/sleek/plugins/nprogress/nprogress.js') }}"></script>

    <style>
      i {
        margin-right: 3pt;
      }

      .atas {
        margin-top: 15px;
      }

      .bawah {
        margin-bottom: 15px;
      }
    </style>

  </head>

  <body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
    <script>
      NProgress.configure({ showSpinner: false });
      NProgress.start();
    </script>

    {{-- <div id="toaster"></div> --}}

    <!-- ====================================
    ——— WRAPPER
    ===================================== -->
    <div class="wrapper">
      <!-- ====================================
        ——— LEFT SIDEBAR WITH OUT FOOTER
      ===================================== -->
      <aside class="left-sidebar bg-sidebar">
        @include('admin.layouts.sidebar')
      </aside>

        <!-- ====================================
      ——— PAGE WRAPPER
      ===================================== -->
      <div class="page-wrapper">
        
        <!-- Header -->
        <header class="main-header " id="header">
          @include('admin.layouts.header')
        </header>

        <!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
        <div class="content-wrapper">
          @yield('content')
        </div> <!-- End Content Wrapper -->
      
      
        <!-- Footer -->
        <footer class="footer mt-auto">
          @include('admin.layouts.footer')
          <script>
            var d = new Date();
            var year = d.getFullYear();
            document.getElementById("copy-year").innerHTML = year;
          </script>
        </footer>

      </div> <!-- End Page Wrapper -->
    </div> <!-- End Wrapper -->

    <!-- Javascript -->
    <script src="{{ asset('assets/sleek/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/sleek/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/sleek/plugins/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/sleek/plugins/charts/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/sleek/js/chart.js') }}"></script>
    <script src="{{ asset('assets/sleek/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js') }}"></script>
    <script src="{{ asset('assets/sleek/plugins/jvectormap/jquery-jvectormap-world-mill.js') }}"></script>
    <script src="{{ asset('assets/sleek/js/vector-map.js') }}"></script>
    <script src="{{ asset('assets/sle"k/plugins/daterangepicker/moment.min.js') }}"></script>
    <script src="{{ asset('assets/sleek/pl"gins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('assets/sleek/js/date-range.js') }}"></script>
    <script src="{{ asset('assets/sleek/plugins/toastr/toastr.min.js') }}"></script>
    <script src="{{ asset('assets/sleek/js/sleek.js') }}"></script>
    <script src="{{ asset('assets/sleek/options/optionswitcher.js') }}"></script>

    <script>
      $('.delete').on('submit', function() {
        return confirm('Do You Want To Remove This?');
      });

      function showHideConfigurableAttributes() {
			var productType = $(".product-type").val();
				
			if (productType == 'configurable') {
				$(".configurable-attributes").show();
        } else {
          $(".configurable-attributes").hide();
        }
      }

		$(function(){
			showHideConfigurableAttributes();
			$(".product-type").change(function() {
				showHideConfigurableAttributes();
			});
		});

    </script>

</body>
</html>

