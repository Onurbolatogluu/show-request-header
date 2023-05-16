<?php
$planets = array("Mercury", "Venus", "Earth", "Mars", "Jupiter", "Saturn", "Uranus", "Neptune", "Pluto", "Ceres", "Eris", "Haumea", "Makemake"); // Rastgele gezegen isimleri dizisi
$random_planet = $planets[array_rand($planets)]; // Diziden rastgele bir gezegen seçme
foreach (getallheaders() as $name => $value) {
    echo $name . ": " . $value . "<br>";
}

echo "<br>";
echo "DATE DATE DATE DATE: " . date("Y-m-d H:i:s") . "<br>";
echo "Random Planet: " . $random_planet . "<br>"; // Rastgele gezegeni yazdırma

?>


