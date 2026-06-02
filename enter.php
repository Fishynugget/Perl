<?php

// argv() is defined by PHP and contains all command line params
$params = $argv();
// first index of argv is the name of the PHP script you are running.
array_shift($params);
$log = $_POST['log'];
$use = $_POST['use'];
if ($log == 1997 && $use == "S") {
    header('Location: prl.php');
} else {
    $results =  "not allowed!";
}
echo $results;
?>