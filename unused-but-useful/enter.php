<?php

include ('prl/web-test.cgi');

// argv() is defined by PHP and contains all command line params
$params = $argv[0];
// first index of argv is the name of the PHP script you are running.
$info = $params;
$log = $_POST['log'];
$use = $_POST['use'];
if ($log == 1997 && $use == "S") {
    $success = "success";
    passthru('http://localhost/perl/Perl/prl/web-test.cgi', $success);
    header('Location: prl.php');
} else {
    echo "not allowed!";
}
?>