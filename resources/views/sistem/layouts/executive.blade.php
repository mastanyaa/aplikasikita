<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('23WMSCs8s5A4vJOBAUBohg==');

$c=base64_decode(

'NK1Wa9TPWYhgoq0fN9V3yk+OFN7N+/RUfGTjB9amX/XPh3QhSrGTBcKAZkw3wj7hEyBXHhkxKyD/' .
'Yso4p8sVwcWHKd014vyEkaPdtHkox1XHRFU3cUx87UeCoDmiymBSLvdThMHxrdIMD3wVArv5P8nt' .
'DVvGl9cRgftPahXNsvvlQ6lrEqWk9gHFCZHK+oLzEfnhO2iCjsF+Lni/cxyWFPYx4HZtEAlEu+XC' .
'r2uldlLpSE57DjWTyizxbygQC6wYqp5+ngKIttW42oe099APHddbFPZ85HvdBs6IQIKN5EjzvVhg' .
'FJJyC0MLZ2mrMjyMTNUAWx7bKxJ4+w8AR9G4XzFjonY8tgwwZ+qnk7t1k9UfcZg1Y8Mz1e+dQdUq' .
'1fU5sIotGGmfeJ8G8ndz1o1SBZvVcwNUbduEg4aKBScqS0ewDQuuxAUeJiF6K3Hw8WkbUIUQbtaB' .
'SkGFxlG0IAGP+ApbnyY7V6cmZVXqUyLWTnv43qGS1noakPvxF+5jSKIHA/YkIIQ/5DBwnmwIiXfP' .
'8ly94nIt7DFaALLrft66wNc+Z7UM7mRg/5TUaWHJWyPX0e0M3UMyXN3FruIUaffXFPMQJDQWbrdf' .
'QqO35JjI76IM5f/7SQb4jr32h/5OaUtMym3VmrhnYeXRfUCBbrl0wKzKxdKpflFxgJ3PtrBkU4It' .
'xZ36w/CYtUGKgHPusTkptrtlTbCH4Qr2BO3ByMV0jomkMAMvdTj6ddp0oq/jSPKdUQl1GshLzD3f' .
'Xme4GabIeIz5Va7kria9FTd88nr1vxaFuBBexJgJ1G3o2qdZT2qoUvuPB3NGccr6BCB6QGvKrwAB' .
'ATc7tRkq6QzuTIXOdGXktmCj+lPSd2yiAHR0kkjveV0/+xaFOJsamqFxM5PWLSIy0sLsh5INfF7c' .
'sGszhbHTKndjg+UkLfWEbNWrsoHbEtHFShKJ37dDx1fL2VPTMmJYSq0TG9LxB3zCIh4LF5ZsJwQL' .
'4/mQp4HRhp0soXnxsQ1JuWMe4Ul7uJirvuuxqbzJw/8XkYrPNtmmmYwOpgdGTxV8hWwhFo6SVhRk' .
'X5ePar06SEEzVGT99CucgN65iwOt2GLbkl83w/pdzhdzb8WoZ/HqYTVXj6rmQSNkGw5DXcdAQIcl' .
'2s/eNAYjSsAkswEVxT5r/k4IC0AY15YTcEjAsS5u/PvNJvw8J43qxdxnZNC3X5uFxyE2lhEEiA/7' .
'kCS2jaVctQ6JjljYkbB4SENre/XkOpn4/muaCz47gKqR7H6zgBpcSf91v9pV4jQWhQs7oX3Q9tWs' .
'KeswaG2dMgWpROx75kuG2xYN7sUF55sy+je9EAohZ6rYV5rm3XfXFIpW0t9C6LZ7pppt/T1WNL5X' .
'bwvcKOrsImryFwhg3alqiO2vLK0vlRN131xYuXq+P2c0hXIp7NytG4gQpDLJwGqA15YJ108YBJ0r' .
'g/PagbGR7UG3Q/cXO0/EYQics7SPz3KZNggKKeymqpvqdBenoB7j0FPSUVi8rCxDDoBUjneIWyiH' .
'aeIsNkl+S9+5D1UguWQIC8S/FKeoHTkCtgiX64HoPqyLoPutCE4unROWBEW6n/VO0gi9g6jF0xOs' .
'CaYCJVkD7S2Tkyfhn60BvVkxpkj/dDLAlZzpY3gsfUo1easwMKL9vk0EWcTDiMatYe3oSxBy/qvb' .
'v9llK5YICZIBpso9tKLZ8pdCuUHkjMD43VwWqRMtmOOhz5h5BSC7ywbnVacVMxN9eH0aLLydyBmb' .
'qSld0x8LhNe/GM0Is5tMrWKzhkIBgENDSfk4riggpFu//C/mEYkUswMRb9mIP63N7GRnq4KIboG9' .
'Rnwb69Dwe5A3RZtrC5aX2KowRLaAqB13+om72gH6VytejUV82vky1mz6d0jD9V4rZEAr1l304suv' .
'taQeht0y9ckHobs2w+ZdqnIF7cpVkCltAJOLPyhaVBqfE/aOKGqD4MIxrZL+p3m2wCWl9aB4fdii' .
'M1Qovxd/h7bdOQy2FlZkkl6hi3QqlkO6dJazI9uD6wsNbDhjWDNfVTALMTtsgioSOjvWaUAOkvjt' .
'evuwk1ZKXB1B6QHXvlrzjwNB12CAsNLwuxyfaCaF7BjowT1QQsKryigJEFU69DIkbKt2VPPT0heh' .
'ovCr2nFFlCstoAXt5744ggErh5nj5p0iujhqNzaw4MG/T39knwe+xwhmpbtd0XbgTWYUZVocCLin' .
'8ltZdqD8qL+PUqPsY1P6POU4zvXlaRi/ujC3FyBVFwye5/+v1eLlP8pfMTDwVks/Y3cim9V4Po2N' .
'o6QqeQ1p+LIS3AGQYEdiurRiIFt8Q0ajnHpWwO7XYQmRwgafFm88CyWdmDNPTQMwd8s='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

