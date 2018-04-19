<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
  <meta charset="utf-8" />
  <title>BITMANITY - ATS</title>
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
  <link href="pages/css/pages-icons.css" rel="stylesheet" type="text/css">
  <link class="main-stylesheet" href="pages/css/themes/modern.css" rel="stylesheet" type="text/css" />
 
</head>
<body class="fixed-header horizontal-menu horizontal-app-menu no-header">
<!-- START PAGE-CONTAINER -->

<div class="header p-r-0" style="background-color: #f0f0f0;)">
  <div class="header-inner header-md-height justify-content-center">
    <div class="d-flex justify-content-center flex-row">

        <div class="m-l-20 m-r-20">
          <div class="font-weight-normal text-white">LATITUDE: <span class="font-weight-bold"> </span></div>
        </div>
      <div class="m-l-20 m-r-20">
        <div class="font-weight-normal text-white">LONGITUDE: <span class="font-weight-bold"></span></div>
      </div>



    </div>
  </div>
</div>


<div class="page-container ">
  <!-- START PAGE CONTENT WRAPPER -->
  <div class="page-content-wrapper full-height">
    <!-- START PAGE CONTENT -->
    <div class="content full-width full-height overlay-footer">
      <!-- START CONTENT INNER -->
      <div class="container">
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
      </div>
      <!-- Map -->
      <div class="map-container full-width full-height">
        <div id="google-map" class="full-width full-height"></div>
      </div>
      <!-- END CONTENT INNER -->
    </div>
   
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
</body>
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
<!-- END VENDOR JS -->
<!-- BEGIN CORE TEMPLATE JS -->
<script src="pages/js/pages.min.js"></script>
<!-- END CORE TEMPLATE JS -->
<!-- BEGIN PAGE LEVEL JS -->
 <script>
   var map;
   var apiKey = "AIzaSyCze1J4prRUQbbQqku5UKDbwKhnJMsJJRI";
   var marker = null;
   var snappedCoordinates = [];
 
  window.setInterval(function(){setPoints();},5000);
  function initMap(){
    $.ajax({
      url:"getPoints",
      async:true,
      success:function(data){

        var data = JSON.parse(data);
        var uluru = {lat: Number(data[0]['latitude']), lng: Number(data[0]['longitude'])};
       map  = new google.maps.Map(document.getElementById('google-map'), {
          zoom: 18,
          center: uluru
        });
      }
    });
     
  }
  function setPoints()
  {
    if (marker == null)
    {
      marker = new google.maps.Marker({
        position:null,
        map:map
      });
    }
     $.ajax({
      url:"getPoints",
      async:true,
      success:function(data){
        data = JSON.parse(data);
       marker.setPosition({lat: (Number(data[data.length-1]['latitude'])), lng: Number((data[data.length-1]['longitude']))}); 
       getPathPoints(data);
      }
     });
  }

  function getPathPoints(result){
      var pathPoints = [];
        for(var i=0;i<result.length;i++){
          var latlng = result[i]['latitude']+","+result[i]['longitude'];
          pathPoints.push(latlng);
        }
        snapRoads(pathPoints);
  }

  function snapRoads(path){
      $.get('https://roads.googleapis.com/v1/snapToRoads', {
      interpolate: true,
      key: apiKey,
      path: path.join('|'),
    }, function(data)
    {
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

  function processSnapRoadPoints(data){
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
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCze1J4prRUQbbQqku5UKDbwKhnJMsJJRI&callback=initMap" type="text/javascript"></script>
</script>
<script src="assets/js/scripts.js" type="text/javascript"></script>
<!-- END PAGE LEVEL JS -->

</html>