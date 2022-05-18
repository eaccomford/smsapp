<?php
session_start();
// include 'hubtel/Api.php';
include('includes/head.php');
try {
    $conn = new PDO("mysql:host=localhost;dbname=smsapp", 'root', '@cc0mf0rd');
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
} catch (\Throwable $th) {
    print_r($th);
}

$data = $conn->query("SELECT * FROM sent_messages order by id desc limit 200")->fetchall();

?>
<style>
.tm-margin-large-top {
    background-color: #2196F3;
}

tr:nth-child(even) {
    background-color: #067be2;
}
</style>

<?php

function sendMessage($phone, $message){
        $COMPANY_NAME = 'The Company';
        $SMS_NAME = 'CORONATION';
        $SMS_URL = 'https://apps.mnotify.net/smsapi';
        $SMS_KEY = 'krF2cfPqYYUkY2zJXiCxTU3vn';

        $data = array(
            'key' => $SMS_KEY,
            'to' => $phone,
            'msg' => $message,
            'sender_id' => $SMS_NAME
        );
        $curl = curl_init();


        $url = sprintf("%s?%s", $SMS_URL, http_build_query($data));
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_NOSIGNAL, 1);
        curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 0);
        curl_setopt($curl, CURLOPT_TIMEOUT, 0);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);


        $xml = curl_exec($curl);
        $curl_errno = curl_errno($curl);
        $curl_error = curl_error($curl);
        curl_close($curl); //
        if ($curl_errno > 0) {
            $result = json_encode('Could not connect to base URL');
            exit(0);
        } else {
            $result = $xml;
        }

        return json_decode($result)->code;
}

if (isset($_GET['sendsms']) && $_GET['sendsms'] == 1) {
    $path = "c:/smsfiles";
    $files = scandir($path);
    $files = array_diff(scandir($path), array('.', '..'));
    $count = 0;
    if( count($files) > 0) {
        foreach ($files as $file) {
            if(explode('.',$file)[1] == 'TXT'){
                $lines_array = file("c:/smsfiles/$file");
                // print_r($lines_array); exit;
                foreach ($lines_array as $line) {
                    $phone = explode('|', $line)[0];
                    $msg = explode('|', $line)[1];
                    // save to db
                    if(sendMessage($phone, $msg) == 1000){
                        $conn->query("INSERT INTO sent_messages(phone, message) values('$phone', '$msg')");
                        unlink("c:/smsfiles/$file");
                    }
                }
                $count += 1;
            }
        }
        if($count > 0){
            $_SESSION['msg'] = "<div style='color:white; background: green; padding:.5rem'>Message sent successfullyt</div>";
        }else{
            $_SESSION['msg'] = "<div style='color:white; background: tomato; padding:.5rem'>No file found - No SMS sent</div>";
        }
        
        header("Location: sendsms");exit;
    }else{
        $_SESSION['msg'] = "<div style='color:white; background: tomato; padding:.5rem'>Err: No file in destination folder</div>";
        header("Location: sendsms");exit;
    }
    

    // start hubtel
    // // $auth = new BasicAuth("jytvnhlp", "nfyxywnn");
    // $auth = new BasicAuth("nfyxywnn", "jytvnhlp");
    // // instance of ApiHost
    // $apiHost = new ApiHost($auth);
    // // instance of AccountApi
    // $accountApi = new AccountApi($apiHost);
    // // Get the account profile
    // // Let us try to send some message
    // $messagingApi = new MessagingApi($apiHost);
    // try {
    //     // Send a quick message
    //     $messageResponse = $messagingApi->sendQuickMessage("op", "233242242435", "Welcome to planet Hubtel!");

    //     if ($messageResponse instanceof MessageResponse) {
    //         echo $messageResponse->getStatus();
    //     } elseif ($messageResponse instanceof HttpResponse) {
    //         echo "\nServer Response Status : " . $messageResponse->getStatus();
    //     }
    // } catch (Exception $ex) {
    //     echo $ex->getTraceAsString();
    // }
    // hubtel //

    
}
?>

<div>
    <section class="tm-margin-large-top" style="padding-bottom: 2em;">
        <div class="uk-container uk-text-center" style="padding-bottom: 4em; margin-bottom: 9rem">
            <h2 class="uk-margin-medium-bottom uk-heading-hero">Send SMS</h2>
            <a href="#" style="padding:.5em; color: black; background: white;margin-bottom: 2em" id="sendsms">
                Send SMS
            </a>
            <br>
            <hr class="xuk-margin-remove">

            <div>
                <?php
                if ( isset($_SESSION['msg']) && $_SESSION['msg'] != '') {
                    echo "<div style='padding: .5em; background: white; color: green'>" . $_SESSION['msg'] . "</div>";
                    unset($_SESSION['msg']);
                }
                ?>
                <h2>Last 200 SMS sent</h2>
                <hr>
                <table class="table" style="width: 100%;">
                    <thead style="background: blue; color: white; ">
                        <th style="padding: 1em">Phone</th>
                        <th style="padding: 1em">Messaage</th>
                        <th style="padding: 1em">Time</th>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $item) : ?>
                        <tr>
                            <td style="padding-right: 1em"><?= $item['phone'] ?></td>
                            <td style="text-align: left"><?= $item['message'] ?></td>
                            <td><?= $item['times'] ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
<?php include('includes/footer.php') ?>

<script>
document.querySelector('#sendsms').addEventListener('click', () => {
    if (confirm('Are you sure you want to send') == true) {
        location.href = 'sendsms.php?sendsms=1'
    }
})
</script>