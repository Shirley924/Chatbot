<?php
date_default_timezone_set("Asia/Taipei"); //設定時區為台北時區

require_once('LINEBotTiny.php');

$channelAccessToken = '';
$channelSecret = '';
if (file_exists(__DIR__ . '/config.ini')) {
    $config = parse_ini_file("config.ini", true); //解析配置檔
    if ($config['Channel']['Token'] == null || $config['Channel']['Secret'] == null) {
        error_log("config.ini 配置檔未設定完全！", 0); //輸出錯誤
    } else {
        $channelAccessToken = $config['Channel']['Token'];
        $channelSecret = $config['Channel']['Secret'];
    }
} else {
    $configFile = fopen("config.ini", "w") or die("Unable to open file!");
    $configFileContent = '
[Channel]
; 請在雙引號內輸入您的 Line Bot "Channel access token"
Token = ""

; 請在雙引號內輸入您的 Line Bot "Channel secret"
Secret = ""
';
    fwrite($configFile, $configFileContent); //建立文件並寫入
    fclose($configFile); //關閉文件
    error_log("config.ini 配置檔建立成功，請編輯檔案填入資料！", 0); //輸出錯誤
}

$message = null;
$event = null;

$client = new LINEBotTiny($channelAccessToken, $channelSecret);
foreach ($client->parseEvents() as $event) {
    switch ($event['type']) {
        case 'message':
            $message = $event['message'];
            switch ($message['type']) {
                case 'text':
                    require_once('main.php'); //Type: Text
                    break;
                default:
                    //error_log("Unsupporeted message type: " . $message['type']);
                    break;
            }
            break;
        case 'postback':
            //require_once('postback.php'); //postback
            break;
        case 'follow': //加為好友觸發
            $client->replyMessage(array(
                'replyToken' => $event['replyToken'],
                'messages' => array(
                    array(
                        'type' => 'text',
                        'text' => '您好！'
                    )
                )
            ));
            break;
        case 'join': //加入群組觸發
            $client->replyMessage(array(
                'replyToken' => $event['replyToken'],
                'messages' => array(
                    array(
                        'type' => 'text',
                        'text' => '大家好！'
                    )
                )
            ));
            break;
        default:
            //error_log("Unsupporeted event type: " . $event['type']);
            break;
    }
}
