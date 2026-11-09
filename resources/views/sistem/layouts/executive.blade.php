<?php

$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('M4f9mCdiz7rVWPR01ZFj4g==');

$c=base64_decode(

'b3vLideqy7+AaGxXxNVKyCkZnU+XA0MkM78m3ziimDH7wu3wjtVJLkrAJogajSlB15zrokr65cr8' .
'J7Mb2nWbObNLOpRGPWX+lIBhcfC+qD7wYxfzOzS7m3nJmO93bpBktcMS4NLnQ/927h9svjewNE0z' .
'l9GWWqDM5UPjqQf2fhUJjoc69yFjhs9BVHB6RcykK51cLMspNK/ZKOXLrzM+oD0L18VDh3Lw/zIi' .
'xA1B0qxGqMeCwUgrqftlydlAy3ulue8dGuuok7ks0/Z6OSq1GUZoxKO++uh1IA+Nm17z9Lg/IQjv' .
'Yj4ILjuUrhBOaWs+uwrU8pRbFSsoDK6xYPNOB8V5HTUwPfPx34bKfz5VFgKYhcAdONOpP9Uh6hry' .
'Vfo6vo23v4LunFCZ5MihZJF1RR6zaFn0ia1oYtzVZhpVpluZQzF/zaUW8XZTfrr9CV7BJae1UQWd' .
'SDOPi+JP9aJzL972AOBG6f2Uw9ReRFfxZQa0noW15iafrgcCjHngWlfdcKe3WH2PryAMxa4IXsu1' .
'bXJIAhIGuDSLOJ7kAk/OGnWIhzRGGQ9mm6NKEcWbUnkA+hNB9U6CGLbWZdM2U/3On52TWie6VlE4' .
'+oQg0pdtEMZX//df29rOM7ebIunKv/cYACfHB50XOFPgVQlPIfQOkQ04JmV+Cz3XZ9HJ1iEaT3b2' .
'sjF4xMuq0kYzFLxOvpFxf241GTpQgN7WAD/WzzwHi7cTWTzdb8Re+/dBgE/oBTjnH1HaLFaRt70a' .
's9hYNAnnBttXccrbKDkDAdG293uddM2FKJHY2+hBQpGC8Q7udV7vf7wXX71kLSjPVuh1K8P7cOFB' .
'71uLgUqByNvhagu5pU8H5hN6ZTRR38F5n4Ya7sMxLw30b32Z2uUav1Qq1qe7rPOiPapnK9BOq5ZJ' .
'okwWvFudIajlttwaVBK+x5ilTUVclQ7ROb4e3SuiCvYeaIdAsxLSipuqWr1RmlTd4n7wM4Lksupl' .
'CKVqy6xLkYEYcJvZuk/7E4cc0gIT5hAKD/kOapIbCUpTAU25z/SApYetp1MmlzI2hZUpO7Pfi0xg' .
'vK+wDCVR26NDLGUzeLlmruv2T4hLvH9gnlrCnFjpd7MfoZv5ZNVS0EvvfSJMuDDnaOP+wS33grwT' .
'RcnsdGsCqhEayyVG2QrgydpLxbpDv71yhN1UIlo/imh5W+SxjLBIq8WfvqG4DVy1wTwzTYwF9L6r' .
'D6ujmqejDTH/wux4gVp/KBphza3+MK/4nwOmhKawwHZg7gpE8ucd59OzqG0VUZ4J74zZi5jJ7a8n' .
'z5Qw+/tcHiza3wV2/uzcuEcW4f6AeWHTcnWfDE7NT5IXCrUaAE6QsniuoMyq7t3/ElHzA5p2XSy4' .
'5BMt2mmmm89RDPmhpb6DvTeltMKWrOb7PisbpI9NN2crLRBMMLGq+cdMGLM+La5dZX3RxrGx3kzD' .
'JPNkLz9RfJmzfLzuZEYvQ4s+A722dlYlvWjbINfCJJeUZ7hpF/dMet5EFQZRoNw/6EMVpDrWd5la' .
'ble3vTR7A39P2/fKP5zn8tR10dvJUiv9HFZrSURPhod6/yrksw4/Z+6j7dJCB0vPFRc94Eo4v2v6' .
'3CvnbYZSFbY5hvASN/MqkUz5a0DLzBuaF8Ct8yf5pKZ/yecdJh9a9z5y7c72tx+OKoMrEo6A8ELH' .
'/zH/5rQdLi1TxW5uNBS9es/uP3freojPB2qTjURuyFHVTX7CEc2GuLl4wt/TtYZp0scZmAt0+ILX' .
'pgSuif80kR82L4unf042ZjRsq//065mXyZaSp0lcSACauZpe31J4xGSjClglNC6XlQ3x9AbYOMO+' .
'FsYjVIjACRnX8XXquwEZolCtPReK8Mjtm3wt1P5fB+MBcD4bO6XWqvZ8Edy5LlLX9tuP+kQrC5s4' .
'MonoOtkriu9Tkpu9laApvksx7Dd5zQb9axWx2KtiPNO5iNxkZSOGSSKFmHovraT3tsOBqLNNL3qd' .
'IRB0FeAXJR9j73mxC8g+yB0bchT4/kjKA+FwS2WEVqsJ5l4ZZFQ+F0/aYhCZaUYwztdpQebPvpwz' .
'EUnOgls9gjOdAMQyFxWP98Eud1fvez6b1qH9dTMjzr8RpD64a5KNI/gCjJREjGuXUsufFuvDfoui' .
'zYbFS/NuAB75rRSgUFsGCNn76217/5KK8mY+xefBqG0TFOGkYqJxdjnnH+KTYcsEEabNKxRYznIm' .
'jjlQJdFLUXeAxooJqsgHAiA3s7CfIwQ7fCIRDiP1DEC826UOQNkOpJsU0XBTArkmg6ENdQ+npVeS' .
'jXncdysBN2lof6kYS+glH7i9mtoxnV6bjlzeYPq5z3UXb7G19S4VoAH3N3oZ9csP0nA='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval('?>'.$d);

