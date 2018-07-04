<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>Bitmanity</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />

    <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css" media="screen">

    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css" media="screen">
    <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="pages/css/themes/corporate.css" rel="stylesheet" type="text/css" />
    <style>
        .table tbody tr td{
            background: #fff;
        }
        .card{
            background: #fff;
        }


    </style>
    <script type="text/javascript">
        window.onload = function()
        {
            // fix for windows 8
            if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
                document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
        }
    </script>
</head>
<body class="fixed-header menu-pin menu-behind">

<div class="login-wrapper" style="background-color:rgb(0,0,0,0.1);">
    <!-- START Login Background Pic Wrapper-->
    <div class="bg-pic" style="width: 70%">
        <!-- START Background Pic-->
        <div class="map-controls">
            <div class="pull-left">
                <div class="btn-group btn-group-vertical" data-toggle="buttons-radio">
                    <button id="map-zoom-in" class="btn btn-success btn-xs"><i class="fa fa-plus"></i>
                    </button>
                    <button id="map-zoom-out" class="btn btn-success btn-xs"><i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>
        </div>
        <!-- Map -->
        <div class="map-container full-width full-height">
            <div id="google-map" class="full-width full-height"></div>
        </div>
        <!-- END Background Pic-->
        <!-- START Background Caption-->

        <!-- END Background Caption-->
    </div>
    <!-- END Login Background Pic Wrapper-->
    <!-- START Login Right Container-->

    <div class="login-container" style="width: 30%;background:rgba(255,255,255, 0.3);">
        <div class="p-l-20 m-l-20 p-r-20 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">

            <!--<img src="assets/img/Bitmanity-ICON.png" alt="logo" data-src="assets/img/Bitmanity-ICON.png" data-src-retina="assets/img/Bitmanity-ICON.png" width="50" height="100%">-->
            <!-- START Login Form -->
            <div class="row">
                <label>IMEI</label> &nbsp;
                <select class="select2" id="imei-select">
                    @foreach($cars as $imei)
                        <option value="{{$imei->imei}}">{{$imei->imei}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
            <div class="full-width full-height">
                <div class="card-group horizontal" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="card card-default m-b-0">
                        <div class="card-header " role="tab" id="headingOne">
                            <h4 class="card-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <strong>
                                        Vehicles List
                                    </strong>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="collapse show" role="tabcard" aria-labelledby="headingOne">
                            <div class="card card-transparent">
                                <div class="card-header ">
                                    <div class="card-title">
                                        <div class="col-xs-12">
                                            <input type="text" id="search-table" class="form-control pull-right" placeholder="Search">
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="card-block">
                                    <table class="table table-hover demo-table-search table-responsive-block" id="tableWithSearch">
                                        <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Connected</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="v-align-middle semi-bold" width="60%">
                                                <p>MH48-T-6014</p>
                                            </td>

                                            <td class="v-align-middle" >
                                                <p>Yes/10.0 km/h</p>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default m-b-0">
                        <div class="card-header " role="tab" id="headingTwo">
                            <h4 class="card-title">
                                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <strong>
                                        Track
                                    </strong>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="collapse" role="tabcard" aria-labelledby="headingTwo">
                            <div class="card card-transparent">
                                <div class="card-header ">
                                    <div class="card-title">
                                        <div class="col-xs-12">
                                            <div class="input-daterange input-group" id="datepicker-range">
                                                <input type="text" class="input-sm form-control" name="start" />
                                                <div class="input-group-addon">to</div>
                                                <input type="text" class="input-sm form-control" name="end" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!--END Login Form-->
        <div class="pull-bottom sm-pull-bottom">
            <div class="m-b-30 p-r-80 sm-m-t-20 sm-p-r-15 sm-p-b-20 clearfix">
                <div class="col-sm-3 col-md-2 no-padding">
                    <img alt="" class="m-t-5" data-src="assets/img/Bitmanity-ICON.png" data-src-retina="assets/img/Bitmanity-ICON.png" height="100%" src="assets/img/Bitmanity-ICON.png" width="50">
                </div>
                <div class=" no-padding m-t-10">
                    <p>
                        <small class="text-gray-dark">
                            Create By BITMANITY LLP.
                        </small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Login Right Container-->
</div>
<!-- START OVERLAY -->
<!-- END OVERLAY -->
<!-- BEGIN VENDOR JS -->

<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
<script src="assets/plugins/modernizr.custom.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/plugins/tether/js/tether.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-actual/jquery.actual.min.js"></script>
<script src="assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script type="text/javascript" src="assets/plugins/select2/js/select2.full.min.js"></script>
<script type="text/javascript" src="assets/plugins/classie/classie.js"></script>
<script src="assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-autonumeric/autoNumeric.js"></script>
<script type="text/javascript" src="assets/plugins/dropzone/dropzone.min.js"></script>
<script type="text/javascript" src="assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.min.js"></script>
<script src="assets/plugins/bootstrap-form-wizard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/summernote/js/summernote.min.js" type="text/javascript"></script>
<script src="assets/plugins/moment/moment.min.js"></script>
<script src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
<script src="assets/plugins/bootstrap-typehead/typeahead.bundle.min.js"></script>
<script src="assets/plugins/bootstrap-typehead/typeahead.jquery.min.js"></script>
<script src="assets/plugins/handlebars/handlebars-v4.0.5.js"></script>
<script src="assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<script src="assets/js/datatables.js" type="text/javascript"></script>
<!-- END VENDOR JS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="pages/js/pages.min.js"></script>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/js/form_elements.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS -->

</body>

<script>
    var map;
    var apiKey = "AIzaSyCze1J4prRUQbbQqku5UKDbwKhnJMsJJRI";
    var marker = null;
    var snappedCoordinates = [];
    var imei = {{$cars[0]->imei}}
    window.setInterval(function () {
        setPoints();
    }, 15000);

    function initMap() {

        $.ajax({
            url: "getPoints/" + imei,
            async: true,
            success: function (data) {
                var data = JSON.parse(data);
                var uluru = {lat: Number(data[0]['latitude']), lng: Number(data[0]['longitude'])};
                map = new google.maps.Map(document.getElementById('google-map'), {
                    zoom: 18,
                    center: uluru
                });
                setPoints();
            }
        });
    }

    function setPoints() {
        if (marker === null) {
            marker = new google.maps.Marker({
                position: null,
                map: map
            });
        }
        $.ajax({
            url: "getPoints/" + imei,
            async: true,
            success: function (data) {
                data = JSON.parse(data);
                marker.setPosition({
                    lat: (Number(data[0]['latitude'])),
                    lng: Number((data[0]['longitude']))
                });
                getPathPoints(data);
            }
        });
    }
    function getPathPoints(result) {
        var pathPoints = [];
        for (var i = result.length-1; i >= 0; i--) {
            var latlng = result[i]['latitude'] + "," + result[i]['longitude'];
            pathPoints.push(latlng);
        }
      snapRoads(pathPoints);
    }

 function processPoints(data) {
     snappedCoordinates = [];
     for (i=0;i<data.length;i++)
     {
         var latlng = new google.maps.LatLng(
             data[i]['latitude'],
             data[i]['longitude']);
         snappedCoordinates.push(latlng);

     }
     drawSnappedPolyline();
 }

    function snapRoads(path) {
        $.get('https://roads.googleapis.com/v1/snapToRoads', {
            interpolate: true,
            key: apiKey,
            path: path.join('|'),
        }, function (data) {
            processSnapRoadPoints(data);
            drawSnappedPolyline();
        }).fail(function () {
           console.log("error");
        });
    }

    function drawSnappedPolyline() {
        var snappedPolyline = new google.maps.Polyline({
            path: snappedCoordinates,
            strokeColor: 'black',
            strokeWeight: 3
        });
        snappedPolyline.setMap(map);

    }
    function processSnapRoadPoints(data) {
        snappedCoordinates = [];
        placeIdArray = [];
        for (var i = 0; i < data.snappedPoints.length; i++) {
            var latlng = new google.maps.LatLng(
                data.snappedPoints[i].location.latitude,
                data.snappedPoints[i].location.longitude);
            snappedCoordinates.push(latlng);
            placeIdArray.push(data.snappedPoints[i].placeId);
        }
    }

    $('#imei-select').on('change', function () {
        imei = this.value;
        map = null;
        marker= null;
        initMap();
    })
</script>
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCze1J4prRUQbbQqku5UKDbwKhnJMsJJRI&callback=initMap"
        type="text/javascript">
</script>
</html>