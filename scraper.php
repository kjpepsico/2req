<?php
//Script Author: ᴛɪᴋᴏʟ4ʟɪғᴇ https://t.me/Tikol4Life

/*===[PHP Setup]==============================================*/
error_reporting(0);
ini_set('display_errors', 0);

/*===[Webshare Setup]=========================================*/
// Create your own account at https://www.webshare.io/
// Get api token at https://proxy.webshare.io/userapi/keys 
$prox = curl_init();
curl_setopt($prox, CURLOPT_URL, 'https://gimmeproxy.com/api/getProxy/');
curl_setopt($prox, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($prox, CURLOPT_CUSTOMREQUEST, 'GET');
$result1 = curl_exec($prox);
curl_close($prox);

$prox_res = json_decode($result1, 1);

$proxy_ip = $prox_res['results']['ipPort'];

$proxy = $proxy_ip;
$useragent= "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.88 Safari/537.36";

echo "<pre>";
echo json_encode(json_decode($result1), JSON_PRETTY_PRINT);
/*===[cURL Processes]=========================================*/

$ch = curl_init();
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT,15);
curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, 1);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
curl_setopt($ch, CURLOPT_URL, 'https://api.ipify.org/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$result = curl_exec($ch);
curl_close($ch);


echo '<h1>'.$proxy.'</h1><br>';
echo $result;

?>