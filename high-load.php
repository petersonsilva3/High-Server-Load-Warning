<?php
/*
* High Server Load Warning v1.0 (HSLW)
*/

$load = 10;

$server_load = sys_getloadavg();
if ($server_load[0] > $load) {
    header('HTTP/1.1 503 Service Unavailable');
    die('Ooops... The Server is Too BuSy. Please Try Again Later.');
}
?>
