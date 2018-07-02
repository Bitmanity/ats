<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <meta charset="utf-8"/>
    <title>BITMANITY - ATS</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no"/>
    <link rel="apple-touch-icon" href="pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen"/>
    <link href="assets/plugins/jquery-datatable/media/css/dataTables.bootstrap.min.css" rel="stylesheet"
          type="text/css"/>
    <link href="assets/plugins/jquery-datatable/extensions/FixedColumns/css/dataTables.fixedColumns.min.css"
          rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/datatables-responsive/css/datatables.responsive.css" rel="stylesheet" type="text/css"
          media="screen"/>
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"
          media="screen">
    <link href="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"
          media="screen">
    <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="pages/css/themes/corporate.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap3-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/bootstrap-datepicker/css/datepicker3.css" rel="stylesheet" type="text/css"
          media="screen">
    <link href="assets/plugins/summernote/css/summernote.css" rel="stylesheet" type="text/css" media="screen">
    <link href="assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css"
          media="screen">
    <link href="assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" type="text/css"
          media="screen">
    <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="pages/css/themes/corporate.css" rel="stylesheet" type="text/css"/>
</head>
<body class="fixed-header horizontal-menu horizontal-app-menu no-header" style="background: #fafafa;">
<!-- START PAGE-CONTAINER -->
<div class="header p-r-0" style="background-color: #fff;)">
    <div class="header-inner header-md-height justify-content-center">
        <div class="d-flex justify-content-center flex-row">

            <div class="m-l-20 m-r-20">
                <div class="font-weight-normal text-gray-dark">LATITUDE: <span
                            class="font-weight-bold">41°24'12.2"N </span></div>
            </div>
            <div class="m-l-20 m-r-20">
                <div class="font-weight-normal text-gray-dark">LONGITUDE: <span
                            class="font-weight-bold">41°24'12.2"N </span></div>
            </div>


        </div>
    </div>
</div>
<div class="page-container ">
    <!-- START PAGE CONTENT WRAPPER -->
    <div class="page-content-wrapper full-height">
        <!-- START PAGE CONTENT -->
        <div class=" container-fluid container-fixed-lg" style="width: 100%;padding-top: 10px">
            <div class="row">
                <label>IMEI</label> &nbsp;
                <select class="select2" id="imei-select">
                    @foreach($cars as $imei)
                        <option value="{{$imei->imei}}">{{$imei->imei}}</option>
                    @endforeach
                </select>
            </div>
            <div class="row">
                <div class="col-lg-7" id="google-map">

                </div>


                <div class="col-lg-5">
                    <div class="row">
                        <div class="sm-m-l-5 sm-m-r-5">
                            <div class="card-group horizontal" id="accordion" role="tablist"
                                 aria-multiselectable="true">
                                <div class="card card-default m-b-0">
                                    <div class="card-header " role="tab" id="headingOne">
                                        <h4 class="card-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                               aria-expanded="true" aria-controls="collapseOne">
                                                Vehicles List
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="collapse show" role="tabcard"
                                         aria-labelledby="headingOne">
                                        <div class="card card-transparent">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    <div class="col-xs-12">
                                                        <input type="text" id="search-table"
                                                               class="form-control pull-right"
                                                               placeholder="Search">
                                                    </div>
                                                </div>

                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="card-block">
                                                <table class="table table-hover demo-table-search table-responsive-block"
                                                       id="tableWithSearch">
                                                    <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Last Seen</th>
                                                        <th>Connected</th>
                                                        <th>Speed</th>
                                                        <th>Ign</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td class="v-align-middle semi-bold" width="40%">
                                                            <p>MH48-T-6014</p>
                                                        </td>
                                                        <td class="v-align-middle" width="40%">
                                                            <p>April 13,2014 10:13</p>
                                                        </td>
                                                        <td class="v-align-middle" width="10%">
                                                            <p>Yes</p>
                                                        </td>
                                                        <td class="v-align-middle" width="30%">
                                                            <p>0.0 km/hr</p>
                                                        </td>
                                                        <td class="v-align-middle" width="10%">
                                                            <p>Yes</p>
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
                                            <a class="collapsed" data-toggle="collapse" data-parent="#accordion"
                                               href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Track
                                            </a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabcard" aria-labelledby="headingTwo">
                                        <div class="card card-transparent">
                                            <div class="card-header ">
                                                <div class="card-title">
                                                    <div class="col-xs-12">
                                                        <div class="input-daterange input-group" id="datepicker-range">
                                                            <input type="text" class="input-sm form-control"
                                                                   name="start"/>
                                                            <div class="input-group-addon">to</div>
                                                            <input type="text" class="input-sm form-control"
                                                                   name="end"/>
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
                </div>
            </div>
        </div>
        <!-- END PAGE CONTENT -->
        <!-- START COPYRIGHT -->
        <!-- START CONTAINER FLUID -->
        <div class="container-fluid container-fixed-lg pull-bottom hidden-xs">
            <div class="copyright no-border">
                <p class="small no-margin pull-left"><span class="hint-text">Copyright &copy; 2018</span>
                    <span class="font-montserrat">BITMANITY</span>.
                    <span class="hint-text">All rights reserved.</span>
                    <span>
                <a class="m-l-10" href="#">Terms of use</a>
                <a class="m-l-10" href="#">Privacy Policy</a>
            </span>
                </p>
                <p class="small no-margin pull-right">
                    <a href="#"> Hand-crafted</a>
                    <span class="hint-text">&amp; Made with Love
            &copy;</span>
                </p>
                <div class="clearfix"></div>
            </div>
        </div>
        <!-- END COPYRIGHT -->
    </div>
    <!-- END PAGE CONTENT WRAPPER -->
</div>
<!-- END PAGE CONTAINER -->
<!--START QUICKVIEW -->

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
<!-- END VENDOR JS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="pages/js/pages.min.js"></script>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
<script src="assets/js/form_elements.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS -->
<script src="assets/plugins/jquery-datatable/media/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/extensions/TableTools/js/dataTables.tableTools.min.js"
        type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/media/js/dataTables.bootstrap.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-datatable/extensions/Bootstrap/jquery-datatable-bootstrap.js"
        type="text/javascript"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/datatables.responsive.js"></script>
<script type="text/javascript" src="assets/plugins/datatables-responsive/js/lodash.min.js"></script>
<script src="assets/js/datatables.js" type="text/javascript"></script>
<script src="assets/js/scripts.js" type="text/javascript"></script>

<!-- END VENDOR JS -->
<!-- BEGIN CORE TEMPLATE JS -->

<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->

<!-- END PAGE LEVEL JS -->


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
                    lat: (Number(data[data.length - 1]['latitude'])),
                    lng: Number((data[data.length - 1]['longitude']))
                });
                getPathPoints(data);
            }
        });
    }
    function getPathPoints(result) {
        var pathPoints = [];
        for (var i = 0; i < result.length; i++) {
            var latlng = result[i]['latitude'] + "," + result[i]['longitude'];
            pathPoints.push(latlng);
        }
        snapRoads(pathPoints);
    }

    function snapRoads(path) {
        $.get('https://roads.googleapis.com/v1/snapToRoads', {
            interpolate: true,
            key: apiKey,
            path: path.join('|'),
        }, function (data) {
            processSnapRoadPoints(data);
            drawSnappedPolyline();
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
        map = '';
        marker= null;
        initMap();

    })
</script>
<script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCze1J4prRUQbbQqku5UKDbwKhnJMsJJRI&callback=initMap"
        type="text/javascript">
</script>
</body>
</html>