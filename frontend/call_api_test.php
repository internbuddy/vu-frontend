<?php
echo "Calling API....";
//$url= "https://mavoix.in/virtual-university/api/api-request-test.php";
$url= "https://mavoix.in/virtual-university/api/get-student-details.php;
$req = curl_init($url);
curl_setopt($req, CURLOPT_RETURNTRANSFER, true);
curl_setopt($req, CURLOPT_POST, true);
curl_setopt($req, CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($req, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($req, CURLOPT_CAINFO, '/var/tmp/cacert.pem');
curl_setopt($req, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

$response = curl_exec($req);
/**
 * Check if an error is an SSL failure and retry with bundled CA certs on
 * the assumption that local server has none configured for ext/curl.
 * Error 77 refers to CURLE_SSL_CACERT_BADFILE which is not defined as
 * as a constant in PHP's manual for some reason.
 */
$error = curl_errno($req);
if ($error == CURLE_SSL_PEER_CERTIFICATE || $error == CURLE_SSL_CACERT
|| $error == 77) {
    curl_setopt($req, CURLOPT_CAINFO, '/var/tmp/cacert.pem');
    $response = curl_exec($req);
}

/**
 * Any subsequent errors cannot be recovered from while remaining
 * secure. So do NOT be tempted to disable SSL and try again ;).
 */

curl_close($req);
echo $response;
?>
