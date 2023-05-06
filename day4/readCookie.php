<?php
if (isset($_COOKIE['name'])) {
    $name = $_COOKIE['name'];
    echo "name: $name";
}

echo "<h4><a href='index.php'>Go Back</a></h4>";