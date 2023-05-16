<?php
foreach (getallheaders() as $name => $value) {
    echo $name . ": " . $value . "<br>";
}

echo "<br>";
echo "Anlık Tarih ve Saat: " . date("Y-m-d H:i:s") . "<br>";

?>
