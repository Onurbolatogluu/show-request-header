<?php
foreach (getallheaders() as $name => $value) {
    echo $name . ": " . $value . "<br>";
}

echo "<br>";
echo "Tarih ve Zaman Yeni Yesyeni: " . date("Y-m-d H:i:s") . "<br>";

?>
