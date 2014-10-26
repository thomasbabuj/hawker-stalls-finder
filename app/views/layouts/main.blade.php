<!DOCTYPE html>
<html lang="en">
<head>
    <!--
        ===
        This comment should NOT be removed.

        Charisma v2.0.0

        Copyright 2012-2014 Muhammad Usman
        Licensed under the Apache License v2.0
        http://www.apache.org/licenses/LICENSE-2.0

        http://usman.it
        http://twitter.com/halalit_usman
        ===
    -->
    <meta charset="utf-8">
    <title>Hawker Centre</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Hawker Stall finder app">
    <meta name="author" content="Thomas Babu">

    <!-- The styles -->
    {{ HTML::style('css/bootstrap-united.min.css', array( 'id' => "bs-css")) }}

    {{ HTML::style('css/charisma-app.css') }}
    {{ HTML::style('bower_components/fullcalendar/dist/fullcalendar.css') }}
    {{ HTML::style('bower_components/fullcalendar/dist/fullcalendar.print.css', array('media' => 'print')) }}
    {{ HTML::style('bower_components/chosen/chosen.min.css') }}
    {{ HTML::style('bower_components/colorbox/example3/colorbox.css') }}
    {{ HTML::style('bower_components/responsive-tables/responsive-tables.css') }}
    {{ HTML::style('bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css') }}
    {{ HTML::style('css/jquery.noty.css') }}
    {{ HTML::style('css/noty_theme_default.css') }}
    {{ HTML::style('css/elfinder.min.css') }}
    {{ HTML::style('css/elfinder.theme.css') }}
    {{ HTML::style('css/jquery.iphone.toggle.css') }}
    {{ HTML::style('css/uploadify.css') }}
    {{ HTML::style('css/animate.min.css')}}


    <!-- jQuery -->
    <script src="bower_components/jquery/jquery.min.js"></script>
    {{ HTML::script('bower_components/jquery/jquery.min.js') }}

    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    {{ HTML::script('http://html5shim.googlecode.com/svn/trunk/html5.js')}}
    <![endif]-->

    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">


</head>

<body>
    <!-- topbar starts -->
        @include('layouts.topbar')
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row">

        <!-- left menu starts -->
           @include( 'layouts.leftmenu')
        <!--/span-->
        <!-- left menu ends -->

        <noscript>
            <div class="alert alert-block col-md-12">
                <h4 class="alert-heading">Warning!</h4>

                <p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a>
                    enabled to use this site.</p>
            </div>
        </noscript>

        <div id="content" class="col-lg-10 col-sm-10">

            @include('layouts.breadcrumb')

            @if ( Session::has('message'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ Session::get('message') }}
                </div>
            @endif


            @yield ('content')

        </div>
</div><!--/fluid-row-->
    <hr>

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
         aria-hidden="true">

        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">×</button>
                    <h3>Settings</h3>
                </div>
                <div class="modal-body">
                    <p>Here settings can be configured...</p>
                </div>
                <div class="modal-footer">
                    <a href="#" class="btn btn-default" data-dismiss="modal">Close</a>
                    <a href="#" class="btn btn-primary" data-dismiss="modal">Save changes</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="row">
        <p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="#" target="_blank">Choppe Lah
                </a> 2014</p>

        <p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
                href="#"></a></p>
    </footer>

</div><!--/.fluid-container-->

<!-- external javascript -->

{{ HTML::script('bower_components/bootstrap/dist/js/bootstrap.min.js') }}

<!-- library for cookie management -->
{{ HTML::script('js/jquery.cookie.js') }}
<!-- calender plugin -->
{{ HTML::script('bower_components/moment/min/moment.min.js') }}
{{ HTML::script('bower_components/fullcalendar/dist/fullcalendar.min.js') }}
<!-- data table plugin -->
{{ HTML::script('js/jquery.dataTables.min.js') }}


<!-- select or dropdown enhancer -->
{{ HTML::script('') }}
<script src="bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
{{ HTML::script('') }}
<script src="bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
{{ HTML::script('') }}
<script src="js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
{{ HTML::script('bower_components/responsive-tables/responsive-tables.js') }}

<!-- tour plugin -->
{{ HTML::script('bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js') }}

<!-- star rating plugin -->
{{ HTML::script('js/jquery.raty.min.js') }}

<!-- for iOS style toggle switch -->
{{ HTML::script('js/jquery.iphone.toggle.js') }}

<!-- autogrowing textarea plugin -->
{{ HTML::script('js/jquery.autogrow-textarea.js') }}

<!-- multiple file upload plugin -->
{{ HTML::script('js/jquery.uploadify-3.1.min.js') }}

<!-- history.js for cross-browser state change on ajax -->
{{ HTML::script('js/jquery.history.js') }}
<!-- application script for Charisma demo -->
{{ HTML::script('js/charisma.js') }}



</body>
</html>
