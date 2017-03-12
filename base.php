<?php

// if (file_exists('data/vpngate.json')) {
//     file_put_contents('data/vpngate.json', '0');
// }
    function get_data(){
            $url = 'http://www.vpngate.net/api/iphone/';
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
            curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
            curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                        'Cache-Control: no-cache',)
                );                
            curl_setopt($ch, CURLOPT_URL, $url);
            $file_content = curl_exec($ch);
            curl_close($ch);

        $lines = explode("\n", $file_content);
        array_shift($lines);
        array_pop($lines);
        array_pop($lines);

        $data = array_map(function ($line) {
            return explode(",", $line);
        }, $lines);
        $data1 = json_encode($data);
        return json_decode($data1, true);
        }
// function get_data() {
//   //if (filesize('data/vpngate.json') < 10) {
//         $file_content = file_get_contents('http://www.vpngate.net/api/iphone/');
//         $lines = explode("\n", $file_content);
//         array_shift($lines);
//         array_pop($lines);
//         array_pop($lines);

//         $data = array_map(function ($line) {
//             return explode(",", $line);
//         }, $lines);
//         $data1 = json_encode($data);
//         //file_put_contents('data/vpngate.json', json_encode($data));
//     //}
//     return json_decode($data1, true);
//     //return json_decode(file_get_contents('data/vpngate.json'), true);
// }

$data = get_data();

function generate_ovpn($data, $id) {
    $ovpn_file = 'data/' . $id . '.ovpn';

    if (! file_exists($ovpn_file)) {
        $vpndata = base64_decode(end($data[$id]));
        file_put_contents($ovpn_file, $vpndata);
    }

    return $ovpn_file;
}

function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'K', 'Mbps', 'G', 'T');   

    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}