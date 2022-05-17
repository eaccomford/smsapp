<?php
// 5001OMEP000002 
if (isset($_POST['type']) && $_POST['type'] == 'checkstatus') {
    $policyNumber = $_POST['policynumber'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://insurance.stakcloud.com/api/dms/check-status?policy_no=$policyNumber",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_POSTFIELDS => array(
            'policynumber' => $policyNumber
        ),
        CURLOPT_HTTPHEADER => array(
            'Authorization: Basic YXBwdXNlcjpYR1cxMTIwMDE4NzMw',
            'Content-Type: multipart/form-data',
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);
    echo $response;

    exit;
}
