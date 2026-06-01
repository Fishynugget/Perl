<?php
$log = $_POST['log'];
$use = $_POST['use'];
if ($log == 1997 && $use == "S") {
    header('Location: prl.php');
} else {
    echo "not allowed!";
}
?>