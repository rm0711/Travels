<?php
if (function_exists('mysqli_connect')) {
    echo "MySQLi extension is installed.";
} else {
    echo "MySQLi extension is not installed.";
}
?>
