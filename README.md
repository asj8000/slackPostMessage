# slackPostMessage

어플리케이션 내에서 슬랙 메시지를 보내는 로직입니다.

PHP로 구성되어 있으며, Post 데이터 전송을 할 수 있는 언어면 전부 기능 구현이 가능합니다.

아래의 슬랙 공식 가이드 문서를 참고하여 작성되었습니다. 

https://api.slack.com/methods/chat.postMessage

<br>

# 블로그 게시물과 연관되어 있는 내용입니다.

https://asj8000.tistory.com/entry/슬랙-메시지-발송-기능-만들기

<br>

# 사용 방법.

유저 토큰을 발급 받는 방법에 대해선 블로그에서 기술해두었습니다.

fnc.php의 12,15,16 Line에 맞는 채워 넣어주세요.
```
  12 Line  "token" => "xoxb-1234-1234-1234", //유저 토큰 입력
  15 Line  "username" => "PostMessage", //메시지에 보여질 발송자명
  16 Line  "icon_emoji" => ":grinning:", //메시지에 보여질 프로필 아이콘 (슬랙 이모지에서 복붙해오면 됨)
```

이후, postMessage.php에서 발송 채널과 발송 메시지를 설정한 후에 
postMessage.php를 실행시키면 됩니다.
