<!DOCTYPE html>

<html ng-app="fa.app">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A starter project - uses angular as a frontend abd laravel as a backend technologies">
    <meta name="author" content="Tamirat Fisseha">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Dashboard</title>

    <link media="screen" rel="stylesheet" type="text/css" href="css/bootstrap.min.css" />
    <link media="screen" rel="stylesheet" type="text/css" href="css/bootstrap-theme.css"/>
    <link media="screen" rel="stylesheet" type="text/css" href="css/elegant-icons-style.css"/>
    <link media="screen" rel="stylesheet" type="text/css" href="css/font-awesome.min.css"/>
    <link media="screen" rel="stylesheet" type="text/css" href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css"/>
    <link media="screen" rel="stylesheet" type="text/css" href="assets/fullcalendar/fullcalendar/fullcalendar.css"/>
    <link media="screen" rel="stylesheet"  type="text/css" href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css"/>
    <link media="screen" rel="stylesheet"  type="text/css" href="css/owl.carousel.css"/>
    <link media="screen" rel="stylesheet"  type="text/css" href="css/jquery-jvectormap-1.2.2.css"/>
    <link media="screen" rel="stylesheet" type="text/css" href="css/fullcalendar.css"/>
    <link media="screen" rel="stylesheet" type="text/css" href="css/widgets.css"/>
    <link media="screen" rel="stylesheet" type="text/css" href="css/style.css"/>
    <link media="screen" rel="stylesheet" type="text/css" href="css/style-responsive.css"/>
    <link media="screen" rel="stylesheet" type="text/css" href="css/xcharts.min.css"/>
    <link media="screen" rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.4.min.css"/>

    <script type="application/javascript" src="js/angular/angular.js" ></script>

    <script type="application/javascript" src="js/angular/angular-ui-router.js" ></script>

    <script type="application/javascript" src="js/angular/underscore.js" ></script>

    <script type="application/javascript" src="js/angular/restangular.js" ></script>

    <script type="application/javascript" src="js/angular/jquery.js" ></script>

    <script type="application/javascript" src="js/angular/ngstorage.js" ></script>

    <script type="application/javascript" src="js/angular/angular-jwt.js" ></script>

    <script type="application/javascript" src="app/api/api.base.js" ></script>

    <script type="application/javascript" src="app/api/api.users.js" ></script>

    <script type="application/javascript" src="app/app.js" ></script>

</head>

    <body ng-controller="appCtrl">

        <section id="container">
            <div class="row">
                @include('layouts.header.header')
            </div>

            <div class="row">
                <div class="col-lg-2 pull-left">
                    @include('layouts.sidebars.sidebar')
                </div>
                <div class="col-lg-10 " style="margin-top: 60px; margin-right: 30px; margin-left: 300px;">
                    <!--<div class="panel">
                        <div class="panel-heading">
                        </div>
                    </div>-->

                    <ui-view></ui-view>

                </div>
            </div>



        </section>

        <!--@section('content')
            <h1> Hallo </h1>
        @endsection-->

        <script type="application/javascript" src="js/jquery.js" ></script>
        <script type="application/javascript" src="js/jquery-ui-1.10.4.min.js" ></script>
        <script type="application/javascript" src="js/jquery-1.8.3.min.js" ></script>
        <script type="application/javascript" src="js/jquery-ui-1.9.2.custom.min.js" ></script>
        <script type="application/javascript" src="js/bootstrap.min.js" ></script>
        <script type="application/javascript" src="js/jquery.scrollTo.min.js" ></script>
        <script type="application/javascript" src="js/jquery.nicescroll.js" ></script>
        <script type="application/javascript" src="assets/jquery-knob/js/jquery.knob.js" ></script>
        <script type="application/javascript" src="js/jquery.sparkline.js" ></script>
        <script type="application/javascript" src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js" ></script>
        <script type="application/javascript" src="js/owl.carousel.js" ></script>
        <script type="application/javascript" src="js/fullcalendar.min.js" ></script>
        <script type="application/javascript" src="assets/fullcalendar/fullcalendar/fullcalendar.js" ></script>
        <script type="application/javascript" src="js/calendar-custom.js" ></script>
        <script type="application/javascript" src="js/jquery.rateit.min.js" ></script>
        <script type="application/javascript" src="js/jquery.customSelect.min.js" ></script>
        <script type="application/javascript" src="assets/chart-master/Chart.js" ></script>
        <script type="application/javascript" src="js/scripts.js" ></script>
        <script type="application/javascript" src="js/sparkline-chart.js" ></script>
        <script type="application/javascript" src="js/easy-pie-chart.js" ></script>
        <script type="application/javascript" src="js/jquery-jvectormap-1.2.2.min.js" ></script>
        <script type="application/javascript" src="js/jquery-jvectormap-world-mill-en.js" ></script>
        <script type="application/javascript" src="js/xcharts.min.js" ></script>
        <script type="application/javascript" src="js/jquery.autosize.min.js" ></script>
        <script type="application/javascript" src="js/jquery.placeholder.min.js" ></script>
        <script type="application/javascript" src="js/gdp-data.js" ></script>
        <script type="application/javascript" src="js/morris.min.js" ></script>
        <script type="application/javascript" src="js/sparklines.js" ></script>
        <script type="application/javascript" src="js/charts.js" ></script>
        <script type="application/javascript" src="js/jquery.slimscroll.min.js" ></script>
        <script>
            //knob
            $(function() {
                $(".knob").knob({
                    'draw': function() {
                        $(this.i).val(this.cv + '%')
                    }
                })
            });

            //carousel
            $(document).ready(function() {
                $("#owl-slider").owlCarousel({
                    navigation: true,
                    slideSpeed: 300,
                    paginationSpeed: 400,
                    singleItem: true

                });
            });

            //custom select box

            $(function() {
                $('select.styled').customSelect();
            });

            /* ---------- Map ---------- */
            $(function() {
                $('#map').vectorMap({
                    map: 'world_mill_en',
                    series: {
                        regions: [{
                            values: gdpData,
                            scale: ['#000', '#000'],
                            normalizeFunction: 'polynomial'
                        }]
                    },
                    backgroundColor: '#eef3f7',
                    onLabelShow: function(e, el, code) {
                        el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
                    }
                });
            });
        </script>
    </body>
</html>

