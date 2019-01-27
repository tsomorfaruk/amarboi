<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{URL::asset('frontEnd/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('frontEnd/css/bootstrap-select.css')}}">
    <link href="{{URL::asset('frontEnd/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="{{URL::asset('frontEnd/css/flexslider.css')}}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{URL::asset('frontEnd/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('frontEnd/css/jquery-ui.theme.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('frontEnd/css/jquery-ui.structure.css')}}" />
    <link rel="stylesheet" href="{{URL::asset('frontEnd/css/jquery-ui.css')}}" />
    <!-- for-mobile-apps -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Resale Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //for-mobile-apps -->
    <!--fonts-->
    <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!--//fonts-->
    <!-- js -->
    <script type="text/javascript" src="{{URL::asset('frontEnd/js/jquery.js')}}"></script>
    <!-- js -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{URL::asset('frontEnd/js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('frontEnd/js/bootstrap-select.js')}}"></script>
    <script>
        $(document).ready(function () {
            var mySelect = $('#first-disabled2');

            $('#special').on('click', function () {
                mySelect.find('option:selected').prop('disabled', true);
                mySelect.selectpicker('refresh');
            });

            $('#special2').on('click', function () {
                mySelect.find('option:disabled').prop('disabled', false);
                mySelect.selectpicker('refresh');
            });

            $('#basic2').selectpicker({
                liveSearch: true,
                maxOptions: 1
            });
        });
    </script>
    <script type="text/javascript" src="{{URL::asset('frontEnd/js/jquery.leanModal.min.js')}}"></script>
    <link href="{{URL::asset('frontEnd/css/jquery.uls.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('frontEnd/css/jquery.uls.grid.css')}}" rel="stylesheet"/>
    <link href="{{URL::asset('frontEnd/css/jquery.uls.lcd.css')}}" rel="stylesheet"/>
    <!-- Source -->
    <script src="{{URL::asset('frontEnd/js/jquery.uls.data.js')}}"></script>
    <script src="{{URL::asset('frontEnd/js/jquery.uls.data.utils.js')}}"></script>
    <script src="{{URL::asset('frontEnd/js/jquery.uls.lcd.js')}}"></script>
    <script src="{{URL::asset('frontEnd/js/jquery.uls.languagefilter.js')}}"></script>
    <script src="{{URL::asset('frontEnd/js/jquery.uls.regionfilter.js')}}"></script>
    <script src="{{URL::asset('frontEnd/js/jquery.uls.core.js')}}"></script>
    <script>
        $( document ).ready( function() {
            $( '.uls-trigger' ).uls( {
                onSelect : function( language ) {
                    var languageName = $.uls.data.getAutonym( language );
                    $( '.uls-trigger' ).text( languageName );
                },
                quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
            } );
        } );
    </script>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('frontEnd/css/easy-responsive-tabs.css')}}"/>
    <script src="{{URL::asset('frontEnd/js/easyResponsiveTabs.js')}}"></script>
    <script src="{{URL::asset('frontEnd/js/jquery-ui.js')}}"></script>

</head>
<body>

@include('frontEnd.includes.header')
<!-- content-starts-here -->
@yield('mainContent')
<!--footer section start-->
@include('frontEnd.includes.footer')
</body>
</html>