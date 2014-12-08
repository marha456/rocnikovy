
<div id='wrapper'>
<?php
include "header.php";
?>
<link href='style.css' rel="stylesheet" />
                  <div class='underline'></div>





<style>
      #map-canvas {
        width: 1000px;
        height: 400px;
        margin:Auto;
        margin-top:20px;
        border-radius:10px;
      border:1.3px solid black;
        
        
      }
      
      #map_info
      {width:300px;
      height:150px;
      border:1px solid black;
      border-radius:5px;
      background-color: white;
      display:none;
     
      }
      
      form
      {margin-left:6%;}
      select
      {
        margin-top:3%;
        margin-bottom:3%;
        widtdh:120%;
        margin-left:2%;
        height:25px;
        color:black;
        background-color: rgba(192,192,192,0.3);
        bordfder-bottom:1px solid red;
        
      }
      select:hover
      {background-color: rgba(192,192,192,0.1);}
      
      option
      {border-radius:5px;}
    </style>   
    
    <div id='form'>
    
        <form method='get'>
          <select id="select_stat" onchange="zmen();">
            <option value=1 selected="selected" >slovensko</option>
            <option value=2 >cesko</option>
            <option value=3 >rakusko </option>
          </select>
          
           <select id="select_mesto" onchange="zmen();">
            <option value=4 selected="selected" >bratislava</option>
            <option value=5 >povazska bystrica</option>
            <option value=6 >nitra </option>
          </select>
          
           <select id="select_druh" onchange="zmen();">
            <option value=1 selected="selected" >drahe</option>
            <option value=2 >xxxy</option>
            <option value=3 >xxx </option>
          </select>
          
        </form>
    </div>
    
    
    
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    
    <script>
    
    
    var centerx= 48.555;
    var centery= 19.15;
    function zmen()
    {
   // alert("fdsf");
      var e = document.getElementById("select_stat");
    var pom = e.options[e.selectedIndex].value;
    if(pom==1){ centerx=48.0;
    centery=19;}
    if(pom==2){ centerx=49.00;
    centery=15;
    }
   
   initialize();
    
    var mapOptions = {
          center: new google.maps.LatLng(centerx,centery),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
    //google.maps.event.addDomListener(window, 'load', initialize);
    }
    
    
      function initialize() {
      
      
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
          center: new google.maps.LatLng(centerx,centery),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
        var locations = [
      ['Bondi Beach', 48.115, 19.125, 4],
      ['Coogee Beach', 48.115, 19.125, 5],
      ['Bondi Beach', 48.215, 19.025, 4],
      ['Coogee Beach', 48.25, 19.125, 5],
      ['Bondi Beach', 49.115, 15.235, 4],
      ['Coogee Beach', 49.175, 15.125, 5],
    ];
        
                            
                            var markers=[1,2,3,4,5,6] ;
                            
       for (i = 0; i < locations.length; i++) 
       {  
                  markers[i] = new google.maps.Marker({
                  position: new google.maps.LatLng(locations[i][1], locations[i][2]),
                  map: map
                });
                
                google.maps.event.addListener(markers[i], 'mouseover', function() {
                 document.getElementById('map_info').style.display='block';
                 document.getElementById('map_info').style.position='absolute';
                 document.getElementById('map_info').style.top=event.pageY;
                 document.getElementById('map_info').style.left=event.pageX;
                  
                });
                
                google.maps.event.addListener(markers[i], 'mouseout', function() {
                 document.getElementById('map_info').style.display='none';
                  
                });
                
                
                
      
      }
        
       
    
   
  
  

      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </head>
 
    <div id="map-canvas">
    
    
    </div>
    <div id='map_info'>
    mapa:            <br>
    mesto:               <br>
    otvaracie hodiny:       <br>
    
    
    </div>














</div>