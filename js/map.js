var all_map;
function init_Map(locations_array) {
    hcmut_location = {lat: 10.773349450000001, lng: 106.65963187043113};
    var map = new google.maps.Map(document.getElementById("google_map"), {
        zoom: 15,
        center: hcmut_location
    });
    all_map = map;
    var hcmut_marker = new google.maps.Marker({
        position: hcmut_location,
        map: map
    });
    var all_data = JSON.parse(document.getElementById('all_data').innerHTML);
    show_all_locations(all_data)
}


function show_all_locations(locations_array) {
    locations_array.forEach((location) => {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(location.lat, location.lng),
            map: all_map
        });
    });
}