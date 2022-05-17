<?php

$customer_name = $_POST['customer_name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$type = $_POST['type'];
$product_id = $_POST['product_id'];


$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://insurance.stakcloud.com/api/dms/new-product-request',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => array(
        'msisdn' => $mobile, 'customer_name' => $customer_name, 'mobile_no' => $mobile,
        'product_id' =>  $product_id, 'email' => $email, 'mode_of_delivery' => '3', 'notification_type' => $type, 'source' => 'KIOSK'
    ),
    CURLOPT_HTTPHEADER => array(
        'Content-Type: multipart/form-data',
        'Authorization: Basic YXBwdXNlcjpYR1cxMTIwMDE4NzMw'
    ),
));

$response = curl_exec($curl);
$status = json_decode($response)->status;
curl_close($curl);
// echo json_encode(['status' => $status, 'res' => $response]);
echo json_encode(['status' => $status, 'res' => $response]);

http_response_code(200);
exit();