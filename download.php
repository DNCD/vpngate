<?php

require 'base.php';

// handle $_POST
if ($_POST) {
    $filename = generate_ovpn($data, $_POST['id']);
    $random_name = base64_encode($data[$_POST['id']][1]) . '.ovpn';
    header('Content-Type: application/text');
    header('Content-Disposition: attachment; filename=' . $random_name);
    header('Pragma: no-cache');
    readfile($filename);
    exit();
}
