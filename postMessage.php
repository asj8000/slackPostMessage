<?php

include("./postMessage.php");


$channel = 'general'; //발송될 채널명 입력
$message = '안녕하세요'; //발송될 메시지 입력

slackPostMessage($channel,$message);