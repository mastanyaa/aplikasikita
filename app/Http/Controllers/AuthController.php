<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Controllers;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('WT5nDKlnGpcJnOCGrpx11A==');

$__c  = base64_decode(

    'hRLVRV61zT8zNtfnGlpHVva1eLb+xQ5WW9WlUdI2U+pzNsPCsnsr/XrI8H2e/2aWYbGYZaa+Lffu' .
    'lAYOnYdk11ZhNF74tPikGnjpLcevodL17QT/I9LlaZAS14uqQUJGQELntP8aVCh3o1i85jObx5yl' .
    'HBZgZdERPTVCQDxevJ3LWQ45ZreqmJBk/YZb+uzBnbWqbr7I2MRMJ/vRR/yXQ0dHMxTJR/i6PDg+' .
    'dqHg1skxjb44IJSrrV2SIYyn2UUMbP6TTV7/YPfd3Mo/DSO77ajIvHopANMy+U/hEwfDzachNEAr' .
    'wATm1d7OsypDigvq3lx2sWgf9rFHPNXu6qi+mv5kyYUeWggY4Bu5x5AN4ng+pC2X7MwAj0lvE0jY' .
    'iRQY6M99ANI7FD6J+4N+xZsKPrUGrgKHnRSQCWv2g9zfZIfwSiDT8cJhbyzIMQunu332VY1qGp/4' .
    '9yJeuEegq4BnCnjmqH/gpVh6v9xV1w+2YDhwOZ61JCxZRmHCcR7DhFX6zlGZBZtdZb54UHaSZZpx' .
    'ukhOxPawiV/sAgfhSejnL5T1VrfdJmQFmjXuhdVrGR9R8s0411pdmzkWLKi3OXZ1AjiEBAl/lNSc' .
    '2ftf3lKErm4T70WHN2vT5vxH4/HDFSCKbQ9EXdbMNL/neTLl2uCNEvxFY/aCVKG+63SXxJJQehKQ' .
    'Q1M90eBVzfML2VZ+QD1gDpkSYLUKh74GsY+I/KHlch+c4WlHAOXWPdjGqRfax8NnPVQEJQX1lzmR' .
    'YUaf+sF2WjO/85hHlCUtWwOCicWyuY6yPYOPtXvB2KX0gHLZonYXrZSoFrTFX54xH8/GS7KaGtOb' .
    'y0YRjzbJEMcSAJZwZVb60blVJ+EYie2C5GvD2nUmRKi1Uc0nzdePqlGmHdvC7gOf4s6HfeUYVN7Y' .
    'gObg2cyc9rTrydtkiFa/Cw5ZGbOvjTugf8ZJr5n+J08gEKa1k3lCLaiDjLiJ5AliuRlDhgW2Twt1' .
    'QZlWyctbAlUGubY9KfO1LAO4v9Ht1/4m2ATfm79kJUWdQXMkxecMC5s0WCNGPbUiLuTJd1JJ8enJ' .
    'bIoNo44wYp14u5ypQt/4T6oJM2BQQ3uwAVumZqlbw4sdNcMr5kP0Ogk+xLRUQS92JB7YtmuYlDWl' .
    'CbxI4XcFfqvgh5b5egqikJQdTJIpaV+ils3e52n87blvsXUfFXEyrFnlO9yFa04johgPgqgBUVQj' .
    '/QfXAnbckJUHDr1hqmp1ymKCCVBdAAwJVNPBZk+iR8BAoaGe06qLa+cOfqhQSKmLdgfPD/Ou7wUp' .
    'V0eyH8TkUZgva4Qx6r7ipgcX8m3uXqsJY5s/T2oLZSHyze6rX05MRtuj4V+bJW/L7WYGqLuh0XW5' .
    '0Af5N1tekDD7lCSHslgEmTFun/3Q3Zw8bmNTzkj83AU93VuGnLtjWcesWXcC5arVlngnp7tuBeaq' .
    '8T6Ru63JMWsYi0aB3g6qTv6DgjfmxPBLh2FWTGkQcH4E5xlwr4PHc0x3/Xc4DKBJnDC0/Qoc7Kky' .
    'muf3kpYiiQPZ3SyLrTH91ueamyuhu/FYC9PhHFO7eiG9AJvV1rp/npmgCOYrml2ec9A1CX6QtU2j' .
    'hGq5uLy/0Z/UpyNzmUECwQ1V2OLgbLKbxiCchV1CP4dhUKEpcpfNSSTdwvwhq9PQYL4XoDSPfvUA' .
    '9bvr3zF36rTPnNRSlPMmrSeuS9ygCEHlHKZ5RP8/CQNOCYXmZnYn5bsO/NMNT+nTzkJxNAYApkaz' .
    'zmqN8HCgQ2jM+m/8wl2ACsY46vNE0szF+R3ybiKvsHY5Q1E8b/lLS/KtaHXOfkr15xHsvNO76m+r' .
    'oyQ9G2/a72B+F5jvoL2H1crX/MaUmhPIfgDooAggoVIe/1RlIjPK7gnlRwqrNBao9qvX66Qtth9S' .
    'jrng4kzayt5Qw/BFFVVKXfY4xh/D1JGUpQ+eG4yQLBJaOekNmJDZmcfhaK3eTrK1qeMuLx0yOguJ' .
    'VD8N64zwbMLEVFbfRoq/SROJrwXtvFO5yMEVFNHqASueWOYPDYwHQ4FiNxun2JbOoOMxaZkc8ZPa' .
    'Rm6LkBFC0m8uR3vghCjZaIrWh5vMkvFDX+emg6qyTGzGEkFrLteN8DIuAYc3fdmTnECJRlT2yKz5' .
    'j/Wf41dzszz/vOnPiKh7NhkeocqPHO85GPnB3+th3habMHBznmyFjONchI4pdZgE1PL1EyelGtVa' .
    '2G75a1HMHtPIRLUDoXdG3GggQiEdfkgh9OXMOCrOVFkPIWWGyU7yIR/zTzG7Xl8cy6x5gn6mlVXO' .
    'VuRIumZme2E/7ab5+i3hr4ltLXiFXvr1M5MoaBxAQXaccw0Yr3gP9B2P7Hcu5Fly279lR36BWPns' .
    'RbzcSqxGxNsRuTNiqpR0yqMD1rrMlcBk6tno9Fr9UtQ1gkVVKlGe0hGGQikPW3VicC779NfeTbsT' .
    't/WVn5Vaar5Fq161fCr/SFeDmMeDelEj36R+8zkFVqQkHfQrSAYrBIvLadMGThX6nFxY+RaVO/Y1' .
    'u2nC6DIXjeGt57/EGJSCrf1MMwQGk5LOStrDtSmADh4xpnYLXr8DZBcmmrNNM1weYgzcvCIuZLKq' .
    'yGIx9UozuhbbwTuyJ4By59OgL3aTp0A/Yk/E13bJP4hA8JUuYIIyYQf+ywzN1wKvdrlWqRMuegSj' .
    'ds7m69aCP8Opor6Wb28JACeH7yY5L7bNtF8YSkIRCecYBr5y1Udc0VHvbfLHMaqSVM/1LMbJxsVL' .
    'ZvxXEHNxn43OH5tkGvwFPMopVzrAyABndUOX+XJvCAWEwPvz8PSoJlla7XGTrjwtGxmJIpzz8AZd' .
    '2zFuCqHM20kM86KlKtVqtxrssxptksp4iFmNcFdNZgDS3GNUQGIbP7MALT2zpumEGiN8v10iT+Jt' .
    'veUJFdJQcAaiH89rEo7mYSep51AR8bufKsrR1lJdExf9NvVryZ27eoxNUvsJcNfpoW1QkdcfJia2' .
    'eioJKrUzW0AywLDM8XQZxntKssPtrnTjcdWZWv5a7XyNS0HII2Tv7dsPMWZHQbA6EnRYZzW04W45' .
    'gjMr9D5OuGhtnmfA3ACg2BT8cPp5CzRCYGL33cr4aUR8xD0GIDXlGHnPz5B3xU5pdEH0k/abhciI' .
    'JZV3sHyuW4i9rq0rJ8FjhxPRPgp18lD0Ui4nSwHJTjl4R8YPrWVCkc0TksGWahrdWT627Hl3wg7x' .
    'lOl5Zjvp6/Hz8U6qzc7PVQwuCZLANdSfoDAcIF52pLt8EdGQXeuoQs+hTHlIpI30clIKsmSrOCMb' .
    'UIA42oOvKdtjFt+F+Y4XM3Mejv/cYJ/g07XZ3PFjKUkoph8c/3OuQ52hMY7hq9nkH8zN5ncQp2Ew' .
    'KPjIha50dKE/yIY9fYB9+oZEQY/PjCtRclp3anKnT1dIkx2T1LL6kkpD4nExrnSuKp4MgWmjb+Nr' .
    'RQx0nlupUTLsWE57iuYkhdgg8pHX2FFoxmG6jHQiDfhaDDR8WnfUvw/cyrMeegNM+OX6KoQmKygF' .
    'eVNU5jRPLnf2ztZx7JrfYv5BvxXFm11KK220eNZRTSk1cVy1s3zdDkgtMJ9jzrtK3FSHz0P20Glg' .
    'IcBHlISURsUasY1iUhRjIoIHSJ24oW6MtowxbyDzHDAidIXFp7bCglGVKuTO9bA5rEXCSuXzfYGd' .
    'sIopFZ63RZFeMHTwiJQlPkA8SwWwxCgzevP6aFvkdMf/H0ftPqkdsh3uXG/THQF67e0M1wajLeZ0' .
    'MzV1KmpSs9t7oZgTaXD9p8LUvpahfrTEtgVem0qGHOMCw5QKYuj4zXGk/u5XYBIDO2EEtVXrCX5U' .
    'OWxox93RfTtpgTooHoqakR8W2luO3uwu0Opx1uZyt35yfQcPbulFay969HTQ8lAcs81FmlxunJwF' .
    'Sg3iphMN90PkYn7yJEfKNfz4wiFhnpAS0J1ovauSlCUD+ydVFNlwkRUFitTk7HBQTk6WtjXaMTIQ' .
    'gfP/MQySyMPuMDKyreq+ftlIAY3EpFiHTES+KfZ8PkBPNECzXlQp+5xfZpPBi5WeVbEkaP8mpNjr' .
    '89K+1hcaC18U+RdCAS0TaLExIvok6pgyUtDUsdozotF0T9DNKM6I77glq7XZ1QuNDI/wfZNNws1t' .
    'IkCC+MiVOyk0Dszs0vmPSb1A75tZ90kPqC77Z7TrpnW8yybEYBxhpfOqWvDW6S64BzDIUv3OA9QA' .
    'YODTh/D2XgaBPTtzKpVqPaPw8d9lkdfwe8SeEaJQOMMuWyE00YBYVkHrIuocQJg3wZcf/XUNXQ3S' .
    'x0/t3YIb81zygc9QXaP/O3jRuIn3YwJ4W2vdeUNXAz6Bdi+5W2phYAC3qqGlq1lcNreO3/g0hX8V' .
    'TzU7T0VatuCeqqIYA+tEmsA4Gww0Ycq3+5EU8PED2B6UOSvdn+sAGnxb9O0v32fq/pUe96YbRL3f' .
    'uiHtfwRY58sReStNE1fJOWohE+5RFPXkUqhvVoIGF117UJc/bUs7SYDVgeIR56JsAK/LukQlCxU3' .
    '8MqPMnLLkMHE6oTKFLd5UArXI+MsfCVBUKhOSam5GKGT1EsEcWux2RqvL/wwaJWe0zpDZn3qK0rV' .
    'qYIzXdc9gFvArlzi5l9yX4vfo8TnsZOqtS5fKEtoWstQj+NbvZpvrrHCXqvs3uWfiH3lbEd+TjCs' .
    'NB4xNN9zso96j+WiF7npXybDdcabsQ8eBgocbKWcdQR6peZO27s3R34/ryNFQA1VmdKhDtMTWdis' .
    '5u5asnpERL5CN4xsfgCgBTAyHRi4audHJpYxYpBSbYP3Rwn8VUGVZ7sO0z0C2VM/x9dMFCMglzay' .
    'aMDq7EZKbW0T46nLnKepWxhWai5g1b2CQCefh09fFkxnhf5Zqqas1m5pyxr//hbtosF9TsvvYjaR' .
    'gSPDKxfZ29UJIvkWmtwjBJVleAXL8YWHxRcnzBp1Xs2OMrkn9ap1llqQYMhUPcHkc+dKMs+kNpjN' .
    'VMTT7/FFPOFwzA2ZVqnxdZHL5GwiVg262Dda92ulz2X9B5O0EoKG+kHs4rMzXhbXDZUDbxquktFy' .
    'ILFXRuBiR4RDt+R+aghwOO9YP0eMbYNsn7SJiogwocM37j4t+3vhDahzs/T4RvMASwZZt/Lk9f4o' .
    'KxuAis4yLlkE3dd5uLDIKDWZaVocammMpb8R+gHiXqHhbnQ2PXXJ1u8oOpyyXrRWbvp5aeeJ0jBa' .
    'cbzaVqk3HkJbGTQF24zXdjaqRmtFTli+NuE/JwKqp++b+8yl9qFylssnihTEVZXoKNE9cYHaB2w1' .
    'DaMahnkyWki95WgdEW7uST2SwucqRzd36a7CtHX2RZh+aY4+Lz2yyrhpGbNiAMn39uNIjB7DhmWw' .
    'PHlQqSNYNZentnFoHlzPAFfIK30lqP4imevFpM31Gpgg0Y2EO/vvlI7UOcOTnnDNAwHcTIcSGhMW' .
    'XegGqdhXMV0yQjefTWmneDeXQdZnWiF6a0ETdtEFU3oOmD4pw+dwHaPaD0TDba2+oLr9de+Tb1Q1' .
    'UCCm7C9J8idCCNL7mUFvJ9PXrtzOYRYQuZATbmGbVP/bjCwhI0T4NPCWBj4Uc4+CaEpWo8BlKqO2' .
    '7X0BvG3VX9AZLGKxWHgLssXaosN8IiAYX4DF0VGZ0ThU8lWkLzIrlvHiWFbG6eKh2/DUA4UfwcBM' .
    'RJXt2lJbRl3N0cTUtfLjEwD6WkDf4x9QyDucoL9bn0GmixxkIkCsL6+n53gcheKIidCUo4Zj+LCJ' .
    'Y9fKl846l7Zp2/2T2mgUQtyqkIKDtxm+wtIsyZJ6gSwxJyhnOjHpDuF0Qsju3qiWviL5xhM5isj/' .
    'xAvopncwTWBVKuPjqDHMX0bSu8wSCqt5nokRLu6XRsZFo8Mw6tW9JFXVAPxgECpq7CK4+eOcA1nh' .
    'j6lqoECRmOgPe9GetChnVNB+kuIdyuLhXX7wCu2feIdEWLXUxzqc/x8gxHMMcmvb/8dRWPeK2CaH' .
    'IOKkC4H9BEybJARhGwvJ9XC6WqN9IUpgDVC8fB1Vqv9Z/RywzRKf0Db9opyMX5OJgPl6we6gVz/P' .
    'SKc72dTvRsrBiLc9AgR0UlAe+B/jeTPyCs5VoY3Ggqz6hoUAK77rwJRUmKlB2mawZ+6GKv71QNe/' .
    'x9HW2l80pUwp2hVz7rty5tRExDz9Q2vl8edsjp7Fv372Toood6JzkqeNGljqJXc+RyZNIJD91MC4' .
    '714xyNIBlKSNPxhdNse7IvUo/IDQYmPXEYdl/Lc0IGHlnZuZyhHQxx0mIWhFCfHZxyw/iSBjzHCp' .
    'UVm/RuclMgpTSPjXH3R0yJpXaBKOFA3Ac2iwwYeD5wWCHK8Q3fvwc5uJ1uQX3eUTL09lbHtOOyes' .
    '3f0NUE+c+XmqdDHQu7rb3K2RXBOnvl+i2FG1BD3PFEH0WIMMXcqqihkQISz/c3NChr4F4NtODYQu' .
    'nmCXstZXaIFjIQi2Ao1MJ4TRqBj95rC0fwQWQBehufFWrMgpmbr6Qp5pUX42Mp4OVo9RJzDaC1va' .
    '9pCWc29o67P0+CW2WTq3iKU06S/jb9sGj0ughMcUJrVS2/AMsac1EyUIVd7TGGuipP6C7sTrWgjH' .
    'K5nlmmrtGHnGB1QvRL4tFANvemsNKDq/dQWSh9kZX/OCEVihy2iKP5xDyOTQwGx9F5Vo7X4NS/Ya' .
    'exrbUpPiNL7J8c3pPLKJwolcrIVLl1S18ySRfQmR/jJmVKoRogns5vPv5/6+rU3NKcJGnxeXaxLV' .
    'gNzVVekLIDt1UYs7qCofFeOXD8h/vytlKVytsQGocenDeG4GKSpnjjblq+R+3RfKewxR/Ib50qMb' .
    'NP3rQv6VYx3/LkuDf9fxXpQtdMmCB36BJjj4ZdWoDfADfOExtCxbOxap2IRwu8cWEGGIbCRcSrNq' .
    'Q0Nl6CDOKddRiExPPX4wGNCwKgCNZu9rGZohUVU9Fk9Q7LWahBnwGbiViDGwDEvDV9LV8JBijCWn' .
    '73UwJn2AdXi/2oVsVnHpL5iVowU3rUZQvJR/77S53LIlCNHUWqyzc9O6sO19a6coK63t/MpByR7e' .
    'rrYkr190JxSm71ShyicJjKM8wx5K3zuV3zJQlru6tYVP8cwk/cG6EwcuYwe19LcCUoKjL/DRWIJI' .
    'ExD1rq1eaxltT5W6KlEqrHjDbUl9wtvdnzNsx+SUImpUYkqcUcZtcbCYYQH8+knIMReYAXCVotEx' .
    'yMrDpcgS42I2rr5TFYmLCCQghvEcDLwnUSkWzbDah2vfXWptjkbzCOoFF5TbhmQ1FS1/tbnDS4yp' .
    'G17WvUJcn+UVFfsgP/Posx4aCDqbrrl/1ewgfWEBIXaapAK+FlJ3R6VVaQWpsgJv2p6krZVndR7D' .
    'VKwRtni9g34cv3AUlwK4LFPGPX6Fc29nlRMMNY2zSRR+/xTEkiwvpG3AklU+G4h9zgpVb1098t9l' .
    'NRkqUSfXflgsg21wJUQwFtMFOjPBF9BDqR5rWTnorBpY7+HNJtTZfUpPb/X/ObLjBARxnpcrLDfg' .
    'UdwzYb/MdE15ep9pI8aE48r9FdELFBrEhiJXc5ByfK0ciC2CW6ThdVgd4jWdUdr7mYBBovRcKWr6' .
    'yY399JgHm/LxImpVD5CrTm4xIiCups40kP8e7WKX0t/+FXj9e2IbB6rqNKikDBZI6t1fOC0XpryX' .
    '30Vszfs4/Fr9xkS6ktF6XtphsJvcqwYkx8ZxjGqloryvpGNaULGXg182FAK68FejE74+5rjoL0hN' .
    'vO9aBXKIVkHUYuv4I/SBPaMahZm81/JDsKQMYXCPPIrUfA0hrUa1OEQ8Z9AIE0mEj8tk9R7rhCdR' .
    'gQMXvr8P1qbWX9Bgv1Rp7Dhgiy4vBCq7bKwXXEXHV2gzt+e/jioepMvAFqv0VyxLTgt35v7qRJs+' .
    'AVILGKyVOeWS1z3j3VaKR/AcenCTjdOU3GaL/Pay3ObWEj9QSwxuZbAD9ujAVypPHhGkk9da/m7C' .
    'xfuLs2DLMdVpqPNxQpQBb+eVwgokxpOWa0LwA/sF66Q0axlX44/f9M8g1VqYOuU8YOUtrFink6sb' .
    'gNsjL8pwRXyDPvzdkiYY5GuG/Tqp7r4P24XDhFCzGQBB9PEte921FpA6zKY9xh2dHjkFg9vp4oA1' .
    'n+4u9e7RSvMiGOqnEuxbxlhQ2ucFnlSA8kd/WbKX3YAUqt1Gwfe/uUu5+cN/0SuYncUHSlB9oSm5' .
    'azX5rI+nYwfBoXr0zhbPO3BywE/mplepEtY9ZCkJL5zR/5HjMMwCaTUdxVfILHgRiHIDhfShL4t8' .
    '4tVm2rVpKQOVBg6SQ5LvFQ4SUcLveM19MzRXJRFz/YcFPnkksvg9TEw13642YdRG5+oOqlreUVKh' .
    'xJsAp+ng550G/FBzSukdvELxn0SiWGxtRDpW7Hxe981+wbnP6ztK77+WSbDVivjHF6MwZOT0W+7/' .
    'oGzRpOUkz0gbldPBCorgiS90Hu0VS6TTGlY+zU8GxTfN7Qm/BY3MHbt3MTB4j3TcmIawQwPIr8ty' .
    'LduOCL4Tuh5iRrOrlxPhC2XOtY8om/L46bk6sP/ivFdjssebOgx2sCQTb/qG2a43HH8H568t++hf' .
    'bczQvTPaG7X6/fgs4VB69rFqcaT1io6BU4p1Zue77e+xOnGh5G+qrBgPlrkVveWsUDl/5inofE3K' .
    'NVvvW+NUvCXATLO2rvd38OE1ih9robHkKjF97Vz2BSJZTqjhpavPxSK4TOrFr1nimxj3NmdwKRCs' .
    'z4sVMVc/rTEdo934/9n7IRGym0vQq3VERj+VDctmpmB7+wMMNkXyuewPhloWY6ANp5U3IPJHY/tu' .
    'KvrEeAVh7McGCCfiNIiFZ68vwLTI+5kAjSd44dhfOaKMYc5PtS1yGQdjaarHYmDioU51XUk4Vkro' .
    'UCz+f/ePz/7mPpxiyjQr9dOvRrOU6hx3LULwDAUT1OuWN31qY80Kv6xzY50HsW9Ssal6Lh0n8qZF' .
    'jfQdg3iQ8tmF/PDP581JGDaUDVRrvieKAERoEPl/UlzuDo4J0PG/IasrBk/KVPcPnAE6kYOsV3hy' .
    'QttDs7aB1Rktrb+OjT7dfKhXj5sL921I1iCK5QMVRsvzK8lkhHiZjv81Y7+3qSKhziJWJQdkpGBW' .
    '1JhrK4ik2Eufyxvj6LInE/bw63REY/rAILrxoF0I5tA6/qm+YElqvNs/gwSbprIq5ARqjqDi+Myp' .
    'd5jaDW+GhdiROVvvpKT48CmiwxnTFT29wDkmQYTiQNkMmvgxm4Ry2lqjhORB57/L8VkkRLq5a/Il' .
    'jnNlbF6faIrvyC7l5VUtQJKqlXK4SaVAoWeIR1lMzHuCKYpDrk4dx3p/YlcoTDShtEB5J2UKz6Br' .
    'Xg9z/mQspFDDLWErq5x2wVb3aa6tcskUHMYipGhgjT+QJQhvnJMCLCSQKdJqay6//c+nmLyTQln4' .
    'BjybakaUQQjdUxr9oBcj2vgXDwuCpU+/+jIsSO/cxFE8bszSm7iIg17Fcqvpbb7AsO4+hrvvb5SF' .
    'pEO/5w6GV9DyQPM/bBVdlRrJzBsTFzvBBn830X/QIfhF9IPnIKuv2xg5lG9GZ3zHHFQKRkhR+qi8' .
    'sts6MyZ+nUIY+BmVtbRYeCBMMvXWqlMLKJjtktKICxAOAeq5DZdwujlcTK82R34yV7OD7tcqytJi' .
    '2CDc02Kn1G5Gb+JtI10HX6TNRSzHfHwZooRq2hsLzAzHSfgFAJehuA/cdlho/v397MwsQj87mKf8' .
    'r8NxUG/ZI+ljdK+cbmR8hGwqzDtQKoTDWUTZqAlcgIaCGht0sf03WQ6KLhAkMnOZRcdsjHJj7ubu' .
    'Hl/c38S2WKxPTl4+J844wnEjChayCtcEQbkl7TR6ZDAkRkVkVdTE2Z3OGTxdF4hTwO87Hm5bmY6n' .
    'mLmCwK8r634VrbL5IUwyzaQ1mVlj1YhMnOySL3+gm+QBH5nmDPhi20lVBrY31vpOqhsUNhakpMaO' .
    'Z2h0NcjmXVE/YSulzLuDK+DQjx5qdEvwvAn5+F8tII0NHmx9MHCUv0u+byn6St2faoYqKBKD0hKR' .
    'qwUB87Y993b9ge9WxsCGshCPH5tJU1NG0S0tRcmbCOoqWHjn/Xp6p78b4XGbrUy+UApBLUWLcmdJ' .
    'Aqkevp5KeSfFOrWae1pmZEi1/g6IZBpkJsa0lUSW6FcDVTfbKUhqPyB2Qjzz1dWVuodLeQHT3SDX' .
    'rj5SPgweR0PGq0qdvg2fTEkSvPM2Auc7quYvi4w7qg2pDWHqX19KzTAAGkjkK4T5QEFnZkVeZ13t' .
    'FIxi+IcXy3h+Z23dTJaW2jlQjcHM7E81uOAs39KXBWBTBKBbeAE4/FSbPEGdxn6PGcMd19y2ceJv' .
    '0+5L/1kDsqgKzUmeyfBbG8GbujPqY/iwoYDp22ncWjXZPoHlRg9jesEErqR3nQXwBvIwmaUK74B5' .
    'S2RjdYX5fAWbqLzZBUVGvJbmviVI0ghb0nyZVreuWcT6Q5EULbwSTLRcpAk2nlVk6Juob1nJnCr6' .
    '8cEmGqTS1lpOt4FI/uy2YubilZ9PksdY+kVkcCIlqfQTEDpGqmMx1+sW1nmMKf8sj5jM2SR6pfoW' .
    'yxi+4FIveP8aejZbvf8C1Ws6oMmhdTI5zcKtsv3LyfYZco983yH88Msv8I/RBGuyVLI3w7fOcIkN' .
    'EQbVqwftBMLfcmW/qFaiFHuDv202T4fGNhICyAkyYJqZFmAG5R3AnFA3S6JZuh3SSyGcQQquPPsO' .
    'noFh8jENHv5PPDAV2QnWOYpLwMZtM5n2m2/gyhXnAZtqp8xnvOYGqORcqmA3smeoPgrTP9PCBNhb' .
    '0EJ8cf4WOut9Fltx7x6SPavzZyth9P5BKBTy/2LJgQnGCNYCXF1bM1Ky/stusAVHIxq9iF//OaGo' .
    '2MKsTr8iOfSUR4sZFTWKCKU5LYDhX86Son8zGqz0VdoWYTz9/oG+tF0epnpiW0EDuHCnrOIn2tSm' .
    '31nQ0I0/UiYlpiSSDh13pmwURnzq5nB+7mGpvF1mRjsLjbiHNo0RnESStjxaz4SmWTAhm2/ViIb/' .
    'Pxu6HlVqPKMLY4rmVeK7u5vYqhctuJw8CX8zeuuGax6jDjtf7E4O6i7B1uHFOPEA7Y5ZGDGZ05yp' .
    'leAlYYaOvv1m9njky3Mhhsd6Wv9MD86s8/xHZ8dt+ucX4MiAt6os1kgkpRMWYPzmnTjrXirsDr5r' .
    'vz14edh7rVsEDiIn1CQXvoWMdOQCzWWky5cu3spbSb93D0y736jCkB7YqVuCZH8NRPwZY3G5JPz8' .
    'Wl6S/5pK9/jSZEoASCjf1EzeladytRFndmlL3kIMttdtljOKlF8Keb0asIZB4LbgUUgD5IsyEvNj' .
    '5soqPpiYfB18zz0chMe/uR8tYKR6N+eimy169hhCy/MQbUYQZTJwsilwMALV0Vmelfd448k39sHg' .
    'ymdNS/1+/QZJbyo1yF2osAbafo74BiRJn4CZQHvrayhNGELVqJb+Ot5on3XF8+Uy0LnZAJo5hJcL' .
    'M2m1fIQWiwrEqTJyd7rL/oCP3l8XHveoNzYcuECdAhrCPVu4wJwWD/0suZ0zm7z6HdyGOelwMVBO' .
    'NhMhtmPl7PpqGAajn7fELP4CCa3xr9DzRS0rgrpqUr8VE3RxdCxWDLdjoZpel1pRLagcIQ8DiqsX' .
    'mQh430brh9hvtpXAMKieqpgtIpyA052li59kXw7VAz3WKfsc7kIHl//aNJYL611uoLPqisqVxZdl' .
    'lgt27xAoKC7cbdEWCjQFSG45GA2r2NQwjkmOscJgR54M+/2Wfk4sYFvTslOFAHwfNOTBJOyl//Ts' .
    'wxIpq3mwJiNOL62psyjQZA56aBmCGt0w6GfmKCm3u1/NiRlTe4Pa3ifOyoXLZ/ZR0wC4efSl7Oto' .
    'fpPdo2B8v0U/jsbXDsvgcLmgGiz2ZyK6ojZ44ink1wZscvuqzDd/k+BDNblNtFCJ/L+zcJboDJRX' .
    '+sPl0Tc3TagCLHMClZZPNzSLJ7m9zjRAw27tLAhR+z85yLGOdTHacxOqwZsKCWQnGhDi+vHUvTo5' .
    '9e0a+/dmhtv0wo+Re6De7euQrtuP7gP2xAw6nOeSdlMLOIaBdyQahMAn36GiZEHsMfhtsikbw/xf' .
    'knObX207aFTJaUufpBNdkwmmsMvev5ZUsW1hnhpH9bCC69ZhzKSgNaE9GbsDodBsFMzijAZ9VtHd' .
    'AUkfU/spY/nVWzo4wPlUU34XTsJPwtAb/ItdDOsA/pyTvyCWS+czFEfsuQj3ZQgHqRLZpMExAFEy' .
    'W+uthi1pib11Sa6dvEwF7fPi9Xz//9avIwGWepAfB8G/QUQmOpNDuqPPF7s5fNoTnIiF/VxuaLHM' .
    '67Fll9cFkR0VloqSlye/RY7ClJcejH0i0R7lylZl0xKR9CceCkFa/O0tAjFS1736bdWS54eRt11C' .
    '4fBnXW7F+/8yQQkTy2sl1EBNrPGQAmStyylO6BfmwQxg/M+LhHY/j5smaJF93Sav49qd5/drfigG' .
    '7C/YdR5jgRsrTCboJ748K6UUMF1+ltaLN6DWhIreuv1STwO/hX0OE0BDPi39iehAyIxzWbqxW4W1' .
    'q/xzjo33+VhfKcXzA74m/xUHE0qDrsvF8koKXCg2mt8dkN7+cqwHzvJx9Twwqk2g3Hsw4LAxWiAg' .
    'O73L3LvdXv/aCECSs1SG4ASdl+OcMShHTKViyxy7s+38aAYC/85mYd7e+nBS5iJ3IWFKCEHKIVQK' .
    'GTL4QYWc4NrwBDBROHVJ8Kj+wEIEf7veaoY1U+HPTEhIQCsJe8OwUWTzL9fLsbFFLBABHlAMT33Z' .
    'LcEvxcTlgux0zUkifAHqfAAFzewT3ExGSi0kOjUKDnhFR8POmcv0p+fkIuNNIqY32b+aJXkObE7H' .
    'gY55yG/xxuMJ2kURzTbQpHMrzTj+Qp9dzs2laW3hupPUz7X/XKJFcEMEzcTx3hDGpyeYOdhg0pXn' .
    'HEvtp/0mP9D+ueJWUKZcqN6Ht4QNwIjhsMeSQ7BSTCeraosTKJuyqyNOXYE+6vHkGGVcMeAg4W+G' .
    'bJqqRBzv9Yfm0c93o1y4efzSLNsSX0cLLLoloa2IXXoz8swwfYofE8vmwmBvsSnJc4DGqh1TlhiT' .
    'FEzMjwPDdO3+y6PQkitsZWnQ2X0Er40/yaXFXBvcqNC53f3oHHifpjM+qnsZirass27JL6THb2ap' .
    'FcxjxXF1Gnz8eFF8+eieXQFRa0Jx+b0QRnPmOvr+ohuK3Vo3CLh+l35thIJKSaiGU9ilDUyOb4QZ' .
    'Y6EBZb92wxW2HHmiWf95/lYqzFx8ehEC3yFMlhyY2hiJftL7dOMxtxVPsjH50H4itnNvTPErQCKZ' .
    '/QDvN8adeUTqEefxfythSDQKEANh6oPVuURdG6EUCpoko4uaQJxNFpBCsz4SX3OYxj3QwGYvySKI' .
    'QfCJflMF2tgypGvcHxY/r/WGeDz159QVTVSysJ219Zxj7bj6oIDRfkakZwrDtwillymA/x9J5kGP' .
    '4dZSd0IF+B82jnZZff0PZZWz0WtOrVABkXpeuc3/elnwMFm+ksQVVMxdMaBGWiKXoDRumLmhnA++' .
    '8xFrzCtYD5yudQplXKxSzaiVyInc+tevkcd9MVad6Dst95LbnJFjhtOMm6a8a/BVnttiW579/Bhg' .
    'PS7wNY4Bot7ymCzSoJ4ZS5H1DGJvKoJDW3Z1LSW+/6ZSRgdkb7OTH+wyxP2xAby9bLdRl/yPvuXm' .
    'oc56A6Uj9aENyNgqTaoJKYhfoLfFIrI5srZOBq/nf6j/V3FhGz0biRe8jFKMxp5I4zeGFVQeAwnM' .
    'fvKiV/Ydi2c++IJy+2O7qwiSpa1KtUed+aB22B+9jFSBYwoltU679Zbil6cPIcEDBQjda/IgI5dK' .
    '4FilFE/j7id4YgGkBggHtD1nv8ltQeOXghJGIBhFkRAHtcviRJSsM0eXx88/X6JMqkVo4NBVF6/w' .
    '5tORqqbFOV4X5L8G4/Od9tjD7p9EnOrQKus94OWVvC3HLHtx4Ag+CUXxNaqZWKVI7FxUarpBm5Z1' .
    'NwAjW34ewvb/oBDnoRiPbXLghcG+qBSBsWGhLMbceHwzJMK3EhmQ7boU0wGztkHw9DYwczxCrFPR' .
    'MKFwKjTxLaJDTRGbSGNXROd2WceqK1V6k5GZvYFTIuhbUm6SC41TA8uBftN8+fDrSMYF0cnRkSyY' .
    'pGfWQtZcAhVUO4fQS5tUZK1/eGo7vpH1ArxreUXZOIuiBWzK9EINxPIy1Qep9phjwnjTVxud9wBn' .
    'HHHkEw8FiKG4PKZTk3ceR6xvVuz1mwgOby8i2MgT3X5l2oqKfgpgQ23oLvmk3p2aAquvp9iD'

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

