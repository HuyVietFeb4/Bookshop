<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <title>Google Map</title>
    <link rel="stylesheet" href="css/locations.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>

<body>
    <?php require_once './html_component/header.php'; ?>
    <?php require_once "./logical/database_connect.php";?>

    <section class="locations">
        <h1>Our locations</h1>
        <div id="google_map">

        </div>
    </section>
    <script src="./js/map.js"></script>
    <?php 
        $locations_query = 'SELECT * FROM locations';
        $locations = $connection->query($locations_query);
        $locations_array = [];
        if ($locations->num_rows > 0) {
            while ($location = $locations->fetch_assoc()) {
                $locations_array[] = [
                    'lat' => (float) $location['Latitude'],
                    'lng' => (float) $location['Longitude']
                ];
            }
            $locations_array = json_encode($locations_array);
            echo '<div id="all_data">' . $locations_array . '</div>';
        }
    ?>
    <!-- <script defer async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANRVJubtTV-LRvIE2jT-DFZD41zvasbZA&callback=init_Map"></script> -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyANRVJubtTV-LRvIE2jT-DFZD41zvasbZA&libraries=maps,marker&callback=init_Map"
        defer
    ></script>
    
    
    <?php require_once './html_component/footer.php'; ?>
</body>


</html>