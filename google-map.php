<!-- HTML -->
<div id="google-map-area-54994f694b31d" style="width: 100%; height: 300px;"></div>
<script>
    function google_maps_54994f694b31d() {
        var latlng = new google.maps.LatLng(1.338287, 103.756623);
        var myOptions = {zoom: 19, center: latlng, mapTypeId: google.maps.MapTypeId.ROADMAP, zoomControl: true, mapTypeControl: false, streetViewControl: false, scrollwheel: false};
        var map = new google.maps.Map(document.getElementById("google-map-area-54994f694b31d"), myOptions);
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            icon: 'http://www.padstowkitchengarden.co.uk/wp-content/themes/padstow/images/map-marker.png',
        });

        map.set('styles', [
            {featureType: 'road', elementType: 'geometry', stylers: [{color: '#000000'}, {weight: 1.6}]},
            {featureType: 'water', stylers: [{color: "#46bcec"}, {visibility: "on"}]}]
                );
    }
    jQuery(document).ready(function ($) {
        google_maps_54994f694b31d();
    });
</script>

<!-- function.php -->
wp_enqueue_script('google-map', 'https://maps.googleapis.com/maps/api/js?sensor=false', array(), '1.0.0', true);
