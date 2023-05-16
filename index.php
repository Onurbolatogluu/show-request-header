<?php
foreach (getallheaders() as $name => $value) {
    echo $name . ": " . $value . "<br>";
}

echo "<br>";
echo "Şu Zaman: " . date("Y-m-d H:i:s") . "<br>";

?>
