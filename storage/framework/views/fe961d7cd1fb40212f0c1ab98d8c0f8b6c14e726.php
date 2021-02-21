
<?php $__env->startSection('content'); ?>
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <!-- Make sure you put this AFTER Leaflet's CSS -->
 <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
<script src="http://code.jquery.com/jquery-2.0.3.min.js"> </script>
<script src="https://unpkg.com/leaflet@1.0.1/dist/leaflet.js"></script>
<p><h1>Pozdrav <?php echo e(Auth::user()->name); ?> : </p></h1><br>
<a href="profil" class="button primary"><i class="fas fa-arrow-left"></i> Nazad na profil</a><br>
<h1 align="CENTER">GDJE JE ISS?</h1>
<div id="map" style="width: 800px;height:600px;margin: auto;"> </div>
<p align="center">ISS se trenutno nalazi <span id='isslat'>?</span>&deg; N, <span id='isslon'>?</span>&deg; E</p>
</br>
<b>Pet idućih prelaza ISS preko teritorija Bihaća:</b></br>
<ul style="margin: auto;" id="isspass"> </ul>
<script>
$.getJSON('http://api.open-notify.org/iss-pass.json?lat=44.8120&lon=15.8686&alt=20&n=5&callback=?', function(data) {
    data['response'].forEach(function (d) {
        var date = new Date(d['risetime']*1000);
         $('#isspass').append('<li>' + date.toString() + '</li>');
    });
});
</script>

<script > 
var map = L.map('map').setView([0,0], 2);
function moveISS () {
    $.getJSON('http://api.open-notify.org/iss-now.json?callback=?', function(data) {
        var lat = data['iss_position']['latitude'];
        var lon = data['iss_position']['longitude'];

        iss.setLatLng([lat, lon]);
        isscirc.setLatLng([lat, lon]);
        map.panTo([lat, lon], animate=true);
    });
    setTimeout(moveISS, 10000); 
}
L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?{foo}', {foo: 'bar', attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>'}).addTo(map);
var ISSIcon = L.icon({
    iconUrl: 'images/ISSIcon.png',
    iconSize: [50, 30],
    iconAnchor: [25, 15],
    popupAnchor: [50, 25],
    
});
var iss = L.marker([0, 0], {icon: ISSIcon}).addTo(map);
var isscirc = L.circle([0,0], 2200e3, {color: "#c22", opacity: 0.3, weight:1, fillColor: "#c22", fillOpacity: 0.1}).addTo(map); 
moveISS();
</script>
<script>
function getISS () {
    $.getJSON('http://api.open-notify.org/iss-now.json?callback=?', function(data) {
        var lat = data['iss_position']['latitude'];
        var lon = data['iss_position']['longitude'];
        $('#isslat').html(Math.round(lat*1000)/1000.0);
        $('#isslon').html(Math.round(lon*1000)/1000.0);
    });
    setTimeout(getISS, 10000); 
}
getISS();
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ExoPlanIt\resources\views\pages\isslokacija.blade.php ENDPATH**/ ?>