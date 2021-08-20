<?php

/*
 * 아래의 슬랙 공식 가이드 문서를 참고하여 작성되었습니다. 
 * https://api.slack.com/methods/chat.postMessage
 * 
 */
function slackPostMessage($channel,$message)
{
    $ch = curl_init("https://slack.com/api/chat.postMessage");
    $data = http_build_query([
        "token" => "xoxb-1234-1234-1234", //유저 토큰 입력
        "channel" => $channel,
        "text" => $message,
        "username" => "PostMessage", //메시지에 보여질 발송자명
        "icon_emoji" => ":grinning:", //메시지에 보여질 프로필 아이콘 (슬랙 이모지에서 복붙해오면 됨)
    ]);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $result = curl_exec($ch);
    curl_close($ch);

    return $result;
}