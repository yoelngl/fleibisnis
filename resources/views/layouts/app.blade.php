<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta name="author" content="">
        <meta name="description" content="">
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title') | Fleibisnis</title>

        <!-- Favicon -->
        <link rel="shortcut icon" href="images/favicon.png">
        <!-- Style CSS -->
        <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
        {{-- <link rel="stylesheet" href="{{ asset('css/colors_version/stylesheet_3.css') }}"> --}}
        <link rel="stylesheet" href="{{ asset('css/mmenu.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" id="colors">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700,800&display=swap&subset=latin-ext,vietnamese" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700,800" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.css" integrity="sha512-UiVP2uTd2EwFRqPM4IzVXuSFAzw+Vo84jxICHVbOA1VZFUyr4a6giD9O3uvGPFIuB2p3iTnfDVLnkdY7D/SJJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" integrity="sha512-6lLUdeQ5uheMFbWm3CP271l14RsX1xtx+J5x2yeIDkkiBpeVTNhTqijME7GgRKKi6hCqovwCoBTlRBEC20M8Mg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style media="screen">
        .float{
            position:fixed;
            width:60px;
            height:60px;
            bottom:20px;
            right:40px;
            background-color:#25d366;
            color:#FFF;
            border-radius:50px;
            text-align:center;
            font-size:30px;
            box-shadow: 2px 2px 3px #999;
            z-index:100;
            }

        .my-float{
            margin-top:16px;
        }

        .slick-prev:before, .slick-next:before {
            font-family: 'slick';
            font-size: 40px;
            line-height: 1;
            opacity: .75;
            color: white;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        </style>
        @yield('css')
        @livewireStyles()
    </head>
    <body onload="myWhatsappFunction()">

        <!-- Wrapper -->
        <div id="main_wrapper">
          @include('layouts.header')
          <div class="clearfix"></div>

            @yield('content')


        </div>
        <?php $whatsapp = App\Models\Footer::first(); ?>
        <a {{-- href="https://wa.me/{{ ($whatsapp) ? $whatsapp['phone'] : '' }}" --}} id="whatsapp_number" class="float" target="_blank" style="margin-right:40px;">
        <i class="fa fa-whatsapp my-float"></i>
        </a>
        @livewireScripts()


        <!-- Scripts -->
        <script src="{{ asset('scripts/jquery-3.4.1.min.js') }}"></script>
        <script src="{{ asset('scripts/chosen.min.js') }}"></script>
        <script src="{{ asset('scripts/rangeslider.min.js') }}"></script>
        <script src="{{ asset('scripts/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('scripts/magnific-popup.min.js') }}"></script>
        <script src="{{ asset('scripts/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('scripts/mmenu.js') }}"></script>
        <script src="{{ asset('scripts/tooltips.min.js') }}"></script>
        <script src="{{ asset('scripts/color_switcher.js') }}"></script>
        <script src="{{ asset('scripts/jquery_custom.js') }}"></script>
        <script src="{{ asset('scripts/typed.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lity/2.4.1/lity.min.js" integrity="sha512-UU0D/t+4/SgJpOeBYkY+lG16MaNF8aqmermRIz8dlmQhOlBnw6iQrnt4Ijty513WB3w+q4JO75IX03lDj6qQNA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
        <script src="{{ asset('scripts/extensions/themepunch.tools.min.js') }}"></script>
        <script src="{{ asset('scripts/extensions/themepunch.revolution.min.js') }}"></script>
        <script src="{{ asset('scripts/extensions/revolution.extension.actions.min.js') }}"></script>
        <script src="{{ asset('scripts/extensions/revolution.extension.carousel.min.js') }}"></script>
        <script src="{{ asset('scripts/extensions/revolution.extension.kenburn.min.js') }}"></script>
        <script src="{{ asset('scripts/extensions/revolution.extension.layeranimation.min.js') }}"></script>
        <script src="{{ asset('scripts/extensions/revolution.extension.migration.min.js') }}"></script>
        <script src="{{ asset('scripts/extensions/revolution.extension.navigation.min.js') }}"></script>
        <script src="{{ asset('scripts/extensions/revolution.extension.parallax.min.js') }}"></script>
        <script src="{{ asset('scripts/extensions/revolution.extension.slideanims.min.js') }}"></script>
        <script src="{{ asset('scripts/extensions/revolution.extension.video.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mobile-detect/1.4.3/mobile-detect.min.js"></script>
        <script src="{{ asset('scripts/slick.min.js') }}"></script>
        <script>
        var whatsapp_number = {{ ($whatsapp) ? $whatsapp['phone'] : '' }};

        function myWhatsappFunction() {
          var md = new MobileDetect(window.navigator.userAgent);
          if (md.mobile()) {
            // mobile link
            document.getElementById("whatsapp_number").href = "https://wa.me/" + whatsapp_number;
          } else {
            // desktop link
            document.getElementById("whatsapp_number").href = "https://web.whatsapp.com/send?phone=" + whatsapp_number;
          }
        };
      </script>
        <!-- Style Switcher -->
        {{-- <div id="color_switcher_preview">
          <h2>Choose Your Color <a href="#"><i class="fa fa-gear fa-spin (alias)"></i></a></h2>
            <div>
                <ul class="colors" id="color1">
                    <li><a href="#" class="stylesheet"></a></li>
                    <li><a href="#" class="stylesheet_1"></a></li>
                    <li><a href="#" class="stylesheet_2"></a></li>
                    <li><a href="#" class="stylesheet_3"></a></li>
                    <li><a href="#" class="stylesheet_4"></a></li>
                    <li><a href="#" class="stylesheet_5"></a></li>
                </ul>
            </div>
        </div> --}}
        @stack('scripts')
    </body>

</html>
