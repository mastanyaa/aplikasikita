<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Traits;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('GYOMSXzeAky8PUDLZ/X8Og==');

$__c  = base64_decode(

    '150GSTyZMhbgtLhqjMQiErlEh4jV60OZS7OkSRej6OZvUJ19hANeQuu7bSCeunF6ZDHQQE5Wl9pc' .
    '5TnN412QjgPUDvE339oy0xS6c//Tw0OOdhF1huh6V51lmztFldYRl8hTwW54VFP/SBZtTD06VUQ4' .
    'tPNn9ZlwKs4Wr5U1/k5MGEtbJLmVFWj2xJAjjlVmU7pS9HTgkDS9CZDdTt/k5vHPb/kffaxZCiZU' .
    'gYr1ineoJYbs5aL4s8UdOAVuCRSPqXJ0nzW11V/FEVxEOP0p7be5pP0afrTlhURbUgQtDdhiVJhd' .
    'yCi9eSmoEB4tsIvx18nVS0ZzYsZ1Jiak3mpGLM930M7EsoEyI1ditZ3eA4BNh0S+gxr0eZ3wRTTM' .
    'd2tWf4drNPZyMaTxrWzxK8p4Po9NloVGa/OOCE3RVVr4r0vVK5Sj2Mp4Sy0WuxC2T8BmK6ikXMyR' .
    '+oxLUuNty+we+kMrUN7qwQVbL2k9TlyNYKSX0/ztYlo/cO8di0KlEEPF4u18cVIn9qn3FIfB6W1b' .
    'Ko37V50RFzVmwyMjpeK4FKaHXz6CWF+T9Fc3u4jf2vtuRwBR73MqKFH+BkWK/PQZNTBX+1YHAo9t' .
    'YtVE9nc7kGD+ry/0GRAiUtTDHcGHmvlKtWPmV8swqgSBiyVPLt6D1k32ISiFQopbJg1NxBfGrc3J' .
    'Vn4GxlcGfQYiU/QFXjFTwCe8Y2Tw6nIJ3YEVZgdcFmBgzHJyk6TUDQTezbBvM0fpITlGz5y4/cQr' .
    'kckhPi7oVOySjA6mUrEQo+/rX4uBY0VI4tpKZBMHvrOzDqQRaJEReOTpxFBgXn15HN1H74GuAlo9' .
    'y/TD08SyGEMRu/UjkoIIKM6o0ERxas6cL/PLmySUuF+BI8uAR3mP4H+XfH5SZ1bG1Gkec+80qAG+' .
    'TVXAw9jaEPCYr2Cj+Wt6icVM6D42tOZur4Wy/grvKhlfeQFcFsmQ97gjMqk9uWW0EoYDWeF7zpX5' .
    'oJqvP1+jmuwpA0KA8MMhkU1wcTlBW/SlR2R/zQ4FTA+3vPVbEbiZQjH46raTWFoQc8YU9XMEmQD/' .
    'C0dsc7mxdCPVIFdlYyPmCfRrQWAxRxcLLl6m1iUV5X6KVuAxw9T6gyfNwcvhZWYx/bxmkIs7HreL' .
    'UaJA0BCEMz3aRszapxP2N84dZwWZXY7QI0ixdvo8hbS69BP3LxTLnt/jDQdKnlJRr80se3Q7Bw45' .
    'ounL44GkDH3Hf0CPvtCqMfbmxyd3Z89/WUR/Q5PmqWfcDfBArU+s+OerQr1CYOhPbKkrftc4m06l' .
    'xSQh/5wfneIU7qHSWTv/rmhMAgMwzsxtlm7rvGguxaTRCudH7s3Nk1o9Hv5I04N2BzCKoxZ3odmT' .
    'k99NXYx1KiHoSirH9IBNlBFx6Rdr6YXtsjuikgMgtUHZAZx9FY8QkGKN0NjYpvQDDwjxBhkwkOWt' .
    '3o+ZjQiiNakudHbR25ftnW4qy2ib+aSlVyW7JkciqwvXtWCyQbY7pgM2BUmPRqOG2f+nowH+vcUD' .
    'ZMMhQjgfq6lQZubNAHDvT7aT4FqLQSiDxds0bE01iemFCav/zqM3fEEDEYWTS707OXsM4e44IRzA' .
    'k5duYQD5GCIetaxZO5KN75lZ8Od7B4AD0VomsKFD60Cztc7O9Izfwvz8LLgghyRfjv0uTaqh6Ofg' .
    'oiEW+2L7gCtwYiVH1njcRHLduA3HHVgjt/L+/vZX9DJom6M4qv3J46lt9i63+sqkJYbXZz/u8FdF' .
    'U2Xv749TdpfTFyDSiQyql+iW8QZoyaOImSAdxls6HQmKV2Gtdwcb9l/2+GHIFYXmkEH/G1eX2R3D' .
    'nZPaSFZ+R+4Vo3COE/jLDFYKWJ03WuYCVkRMfv6cTB9Iz7e0NKwibItd9IdH/s0711VL/8Ffqv+P' .
    'kjimsD1ZS9fDqAFkEopZSFkqEBOq7Bq9b977KesYnwRA+RQdhYGZ9dzxT05mF2X0Tf/ZiRs3IKPJ' .
    'oxICTi3AQJ4hFmul+RGRIfPgm+kSNkbfQH6veDM6Mh7S0kJH6C3ZVys3QO3mKuWrQuZGQsAzwfGk' .
    'ZI4ofOzgKb3xCJwB7TBwjpr/Avx2tMU9Dtjb0/eOCCZB9UTC5ifgcEer218KbadaJ9x9ViHR9FVK' .
    'XnLBnwNDqUuaJ9wII4K5+xY7BfVjsxIJJHGBXNYv4q573IgoAvzJFFTNSEr+w7YASfSozjS8bRvd' .
    'lfzrOr6yQW5rvn8wGFkGZEGImcXH9K/DQileQw8KuMxvPNX/inrVYgHRJ9AlY9bY4FiAVjAKnoxR' .
    'nPJ+mrObPjPIlFBVvlX50DprPOXqB9IEcJxMV/rBfObrPqVNhPomQwOxsHrUPU43fMCg48ovHNl3' .
    'yvP62LrNrnmhd0qT6Q6wsUlaX2i16U+V+ELvq46h+N19661r9WG46y95pCuFKef6t6NUR9d+glmw' .
    'pB5XdpSliS8HAbAz6PaWjqDAwD+vfVQlcKE8EzZCn+A3k4bymhQUHeBveumvK5RcPEIgktBfR1tF' .
    'IMKLVcg9tbUqF9Z8uv5+lOYnxdsKuuix2FoSJ3ze6FxHSye5XXpq9WtxXUJg1+9sstqT8IFXBhJM' .
    'j6QV/YWSMpuizEIVbHqdr31BcslpBO6N7RtFDGDX8RXzkKNJFoZhUCyU2cQga7oi0dgeWKgZmy3Y' .
    'uKYtwYkfuvnSYYMZQPW/wwp7It5Qmxid5DPR17AKYd8T4A0tRhF5PCcGQW/fkrA04Hk3+O6vX/cn' .
    'RloYchVUILY3fhUB2UF383JbLPVfrodu7NRGN5xfamT84/bvbHhJ0z6wxskhGnOAhhyuUkHaTDm3' .
    'DF9snlxHqewRFHfPZc1zHDLzcz6b+TmfOtHQ/VPHdYV+Xte4VHYJbQP4skswcozyJ8DBBNAu8bJx' .
    'G25To0siuew5m0Yf2/Jmm1uaxOjXJNljJgc3Te8B/PjKkZHwZBxcsLuLHSXA0kIVM5RuIzNhkTAV' .
    'rQEWSYvs9CjGGbrkZNrwDdo024zo28kDhv1EVMQVqfAKwC30Up3bVP+yKNDZC/uwutrPl5Dorqxc' .
    'fkBmpAvOTfCBQNy5Si5GPGVrdDEoapNuqO34AN5WBP9fx2PBMfi//ES86Ob7JAVJ4mzQ822np7YW' .
    'e/DRd2jq+hKIgLbo8SMkN02jP91o8v7zUxme/QfLA27zddaDrkAKUL+F48BVUSyqu4baTg5JQpwe' .
    'PG/f9CeoJTFXZM5EtbxKE1+9Ls5QESXxGcn1TrLG1NcvTErr5qFDnQ98RmRdchWB7R8Vb0KqtCcU' .
    '29Gd3j2hD4qyh7gB6oTdTGW4Fjp5CTejAmS+RQqNkn4NPO7lS+GU9KjGFrpSl25CTniv9xBOQWug' .
    '69yc4uukj0rm0p+iIwkFxXUhP/8nCMdvRCNUaiwVrx/VwqcafhcOGTIZny8YN/IYDrNYK2Js3wpx' .
    'vvnQ35tovWCKXwxkWiN0k0n6BDgbgN8lAKurwCgdCQ2JUdOFG2xE0Dy19dVUfHx5uAri6n0rMw7f' .
    'N7MPEaz3y/KD1rLlMFI1LjGa6HknHWhae51/Ni130mbiKiCd+UWLxoLKi5wm+Np7i77LQl4bkkas' .
    'lBae6Li59VemteMiHUNyvIzDinbYhWHs7wsOT0GtCWRomR+h8V9BnFN5S9bjDSvZxzMTAJItpOyB' .
    'djMWcNgj4SecJTWcRaZbBEz/a6+zKZ6wUN6Lmqlp9uUZ30132LcN5Lqm/5wSDGJ0YnU8pOSacfg6' .
    'PXop5FWlCsnemY8rnjf8ZzsQQ2e1lUc3sFFN9vcOabSyP/Ipt7xJt4dnOuBs3kdDgyeQpgh77zIU' .
    'rFxd59W9zKJ7NT0IiqLeDXrviinFFUmoa6nL4K0QE9RX09aHdSimjYkOyCyx9HsbOjJr6q7NwgVV' .
    'sviG2gfxU6KSWbxT28C2ajFgShdgzKGr8XqauucQw/4UK0970QWPxN3wceqBLwxzIvqN4SB84Ogk' .
    'RhghlhXyf/HLZP/kZ0HMGLv5K4+/OThTQSyYwePQ6PKV5nVuioWYAPGJnTXekRqo7u/2LPO27a2g' .
    '+oqs/PysafV0jL3JV+C5CsD4GrrVAeib5tccBSflWxIP9Vq1W/U5bNvnTV6BGHY403xGiYxBIAiR' .
    '5Ihmu60RFPPA1Yh1IEkNU2GxAYaGle+UjsuQdqFL2hD7MjCJiQj4DoWa0TmExx98KpohfjZtxVnM' .
    'pPBGAfWckH8ZnDE80ohYfDHRE1B2ZlZUN+bWPKoCwuPamumedqcLZn3gMPEGZa/g/uBD2nRn6XWY' .
    'tBKRTollRryq0Zk+0KdaPonQRe7GLdxZN3dFO4nfRc9eUcuIRVNn8u/QTWWvXcKHvhag1Olx1JhD' .
    'N17hWhnL2K/TmT/Wklwol23VARV6WXCiHXkZipsAuD4D7PAAHVcmh+D+DA3YBNsVUGq01nl0pmSE' .
    'lgZTAMKKoPp5t93OWIcr98SMrUFyKzmMM4rCLAiRqulTaS+mDjMipetegYqkvEqRkWztlTBjrD0y' .
    '0EuqyW5giO/CIf277pY6VB6QkwLCtiQ2I+XD8j1VlGpKFAdDiU7ujjuuQV1hW8W+LhCFZXGH2G8n' .
    'Y0g9/WeI3WKXu13Mco1X59ilfbJpeN9om+c9m3/shcENZksNdeK3jta1SVTMmuwuu+76MaH8OBQ3' .
    'vFKL5b3tEYRFSWfNLVRBtahwyWAAOepgyOodKxKB0tLCrbsZB9ZDb+k1I+VkP/YKrXgnJWWdkD9m' .
    'TUqebpo1qRCrJOeAUB2S+xGnOA+rtFwdhUyCYuHIYXP5w/XtorqdE/KUziKygkyHlhwLP2rHYOJV' .
    'NdexrbJFtDoX5E7w0JRDwSD9wTmt33Hp5ttX9QlCjDUkcbvTfbrs+im4cwVVMITsDQHs1J52y+A/' .
    'ijCkaFuY+ncNUYeqY+zwBw5rJ/U7xjBeYgUmtLTB3wUksHq8DmJFqsumFYCg1G824JwEAKt0wrZh' .
    'vReYhIYeloynWQNtQ64M77v51ja7o52GxwD79xN+GSjmLy3C7fLjsO38m5o5vgrvj1lXmE1D81TX' .
    'TlDkJaQ19AVTmvbU/lC4WPcS8upUutBDdj8EJrEhVkEWQky6aUoMbod3pMTFTU8RnMMp1W/MPo/s' .
    'RuR5USRhZE6SRjifP58LJ6i3YGghXcLpqDX+vMRrmOOJuAqDR+/0HJwi7GjREWSjanOTnoWmCi93' .
    'teOo180OHpoB1Nnpw5k1NAugQ2liikXfWPVF8xpI9p5RY0fX5BMVcoayA2HrT7mWOcVCuUvenYMa' .
    'ZK5Y4l0TMfmpIpQlnJpYyng0vJW5O/ZdX+aqir8RxagVBi4='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

