<template>
    <div class="map_contact_address_area">
        <div class="map_area" id="googleMap"></div>
    </div>
</template>

<script>
    export default {
        mounted: function() {
            var map;
            var latlng = new google.maps.LatLng(-33.423654,-70.618447);
            var stylez = [{
                featureType: "all",
                elementType: "all",
                stylers: [{
                    saturation: -100
                }]
            }];
            var mapOptions = {
                zoom: 16,
                center: latlng,
                scrollwheel: false,
                scaleControl: false,
                disableDefaultUI: true,
                mapTypeControlOptions: {
                    mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'gMap']
                }
            };
            map = new google.maps.Map(document.getElementById("googleMap"), mapOptions);
            var geocoder_map = new google.maps.Geocoder();
            var address = 'Padre Mariano 391, Providencia';
            geocoder_map.geocode({
                'address': address
            }, function (results, status) {
                if (status === google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    var marker = new google.maps.Marker({
                        map: map,
                        icon: 'src/assets/img/core-img/map.png',
                        position: latlng,
                    });

                } else {
                    alert("Geocode was not successful for the following reason: " + status);
                }
            });
            var mapType = new google.maps.StyledMapType(stylez, {
                name: "Grayscale"
            });
            map.mapTypes.set('gMap', mapType);
            map.setMapTypeId('gMap');
        },
    }
</script>