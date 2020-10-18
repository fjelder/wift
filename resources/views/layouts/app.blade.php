<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('assets\images\favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('bower_components\bootstrap\css\bootstrap.min.css') }}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\icon\themify-icons\themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\icon\icofont\css\icofont.css') }}">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\icon\feather\css\feather.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets\css\jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets\scss\partials\menu\_pcmenu.htm') }}">

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->

    @livewireStyles

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
</head>
<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <x-layouts.header />

            <!-- Sidebar chat start -->
            <x-layouts.sidebar-chat />
            <!-- Sidebar inner chat start-->
            <x-layouts.sidebar-chat-inner />
            <!-- Sidebar inner chat end-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <x-layouts.navbar />
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <div class="d-inline">
                                                        <h4>{{ $header_title }}</h4>
                                                        @if(isset($header_small))<span>{{ $header_small }}</span>@endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <x-layouts.breadcrumbs />
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->

                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <main>
                                                    {{ $slot }}
                                                </main>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="styleSelector2">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Warning Section Starts -->
    <!-- Older IE warning message -->
<!--[if lt IE 10]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers
        to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="../files/assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="../files/assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="../files/assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="../files/assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="../files/assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('bower_components\jquery\js\jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components\jquery-ui\js\jquery-ui.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components\popper.js\js\popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components\bootstrap\js\bootstrap.min.js') }}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('bower_components\jquery-slimscroll\js\jquery.slimscroll.js') }}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('bower_components\modernizr\js\modernizr.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components\modernizr\js\css-scrollbars.js') }}"></script>

<!-- i18next.min.js -->
<script type="text/javascript" src="{{ asset('bower_components\i18next\js\i18next.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components\i18next-xhr-backend\js\i18nextXHRBackend.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components\i18next-browser-languagedetector\js\i18nextBrowserLanguageDetector.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('bower_components\jquery-i18next\js\jquery-i18next.min.js') }}"></script>
<script src="{{ asset('assets\js\pcoded.min.js') }}"></script>
<script src="{{ asset('assets\js\vartical-layout.min.js') }}"></script>
<script src="{{ asset('assets\js\jquery.mCustomScrollbar.concat.min.js') }}"></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ asset('assets\js\script.js') }}"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

@stack('modals')
@stack('test')

@livewireScripts
</body>

</html>
