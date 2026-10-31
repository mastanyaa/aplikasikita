<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Services;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('ric2hV+rN577uAoyItoSJQ==');

$__c  = base64_decode(

    'jT/d8DRhfKYts+Uy/U493Ua5S12T9gzWn9MjXiV/yVWCWO83OCCxYHTC/wtG50PdOdbodqYc2h8B' .
    'zjpbMoDI2P+70A2x1wYD32mbhBleK4TOciwOOnwNpfAy9OWSyPuJ4FjEQXeK9SRaRstz3RSw8t3x' .
    'SUwtWt1gU4tQSOaNKivvtbqwnOTp9mkKOS0lfTPjdMdZx2FSonNb65tJFkckAWZogrU1BICz7uUk' .
    'vCYK2GKzzMoyU5HiV6g767ld11HCXtAGh9MTqGgqUPSIQyu5umcrcfgY1m4Dg62NukT+lSaSVKa3' .
    'Sc4hboGhW4+p4a3x8qOCj5BXLRU83KIFxPwVygt/ZaoSEuuelQVqjagBKE9ZREOZ4qziy5CmyZ/w' .
    'SeM8FrwRH7efrew9sNUcCF1bmSzAfS9awfOubJE0NWn2eScUweFp6Ij9RdQnDljinOITzpOvIDKc' .
    'JWSwyymjo+c/KBPs/5X1exaI/j7L+bEwPtklLNXXlElM+L/5a3EXYKNoZzzKX1RF78NS8KlMt/Ts' .
    'exGLFUHIX30RKeiY2ctvV5vQ995wPZvRyQS+KEUjMaOA1uTU4fyuKuRAZwwO+wzk2zG032x4maRq' .
    '0Ffo2BTiQ9vTrAFgDZwzdg+yYTEiSepV4QsYt4sP8BvtopcqG+ddvqqpYQnT6IxnQSU9BgstkdU0' .
    'rgSDr6SShGIRk+u25ctSGQqg1r3THWKrjAEKKOD3ZmmjRmQ9lWCu3Rrl1H46e4rYuRRSZmyLRz+V' .
    'k9zCKWG2h0exWzWmvODLzS6ZP61Xu/HlTsAystOLVq0XvAJF8p3NuUZfPshaKEQ2c5McpLQaqXz4' .
    'Rdc+/UzLv6x0Xtf3DGpm8bqIFXcIzVFLrVz2EoYZ3hzPdn4ThKWbyGEBZ/c5FhzYcvWPYIIAS9Bg' .
    'LCRVnNw9xHZuqE9AOyLNCgBBSDp5u5guGeDh6OHKRVKq/kxtWIJaoYTfpZJvLRK1lJyd6P00K69g' .
    'jmOqsEPJssX7MalF/LQrkHUNCKoT9ZMHdwwIO27C6Sxa9Fm57tQe5NRb3J43tXr8yuWu+FELju5g' .
    'P9ddBzM+N3K6e9lssV3W+9mU8p6n1hwPSdu7tsx8VmEGbak3rRIK8kTjrbCXtFmKCYa646yUZVQW' .
    'VpWnBrR/cBCDcsMCt9z+33f64xPlyhcRaPAkkTGe+kc1z5kFCFGjDRiYGyokiCiv9SaQRunnhxB1' .
    'jRURweqWxRaU9xQXJUpfPRnYEK5txgrsIQuyVGWNjh8ajYEos62IJ1Lm4zm9jU4RPtzh8lfuK0Tj' .
    'GdRMTQ1k5Yln/mERYnwmtZIDtHI3o0I6JBQSWtLB3cM/JiMv6Ru2Hul3vCzHwUB32IoyhYf8Fa2C' .
    '1gsHckNEr5P1tcaT4zgWMwEZ9tkfyrXmwzSE/2MSifV0xG0Qe1VtHZdOj8lqjf6EXmoYeogMwl8o' .
    'uVi45B8r2IxZOfrfkWpjZX0B7IUUOWFrZkHzYfDI3nXtsaawpulteM3KqWfFqKMh1iC/fSvoLOZb' .
    'm4SoP7WB7mYGT8moLLhccZt4lm0EFuLUru9T+nP9H09gEHe3hq26gEHkM1AguVbwMkUkWqIbUMXG' .
    'W3WJVFerz4kBp2wyEXmo6VW3rDixr7QQZXJKnVRoPanTBMv6KN3C5YV1WDR4DdfnpcGJ39rw3k+M' .
    'xVLBzhTmwoxa84MelcFMmWP6zBJhAiKlBVdIMvWvs1mJMAGEo2tIK0VKoCo9AaJEP3AKub6f5NzV' .
    'UhG6KaqJLfwVn9rEesYbicQL8Xnc9ECt/r9lNHEmwy+5PEo7/FzyOlfTEr0SP8RCrRQLSndfLRR7' .
    'Iq8yI9OJaIlF9xuYO98yuyI43c7Tklww5QhHeg8ChDA3mV45IR2qb9hvQLKLGZJmHMlSfAFYn47i' .
    'sDUot1bYAg03xZrZoJd9KU3k/TcaoyP8tM0gpo+oNEieIoSL6EFlxOTlCONM6a9jrTb+iR2znGnM' .
    's550OPsCBRrdUlhczUNAGEqx1w4V6emXJWTWRBll1P5rQITUPe7SR2EZmoKA8yaKYBBcLKLHFV73' .
    '9G709xz1oITyqUijgdb8Am+gwik3ikQl799Vc0A4z5HBDqVM5X9cR9771NKcWcS3Qnj9KDDPZ5Sa' .
    'HcE4EQ3NECYKL5MO4OTOU3goCDdN/hai1h8KbFNjW6InZ4yeXQ+jPYwXKY/ULX1GE7/jBVb1uPwZ' .
    'RdDJOFYV5QIPlzbZ2B1fSHA/Y19iuezFjWi+P2rSXfHhhuq0AqhDSne8wpifHbbzG9/RMtFao33r' .
    '5VuUZmzzUx3Ubbg7fyuSe8m+/e7d3hO+jTcUsXrCQNmg8Ftd79U8eySLN9PJSCOqRHjh5xsFc/wt' .
    'f28Z+JUxkkRySclBlow+v/fYIuPvkKrMlS9s8qWIKxzvRrmxCFZHZAtK72IajJdDoZPF6n+Xgzof' .
    'lMR8gt2YAmFfseibJ1LeTWEt5K+xpM3jYj+EIQjxfvKIr9thhYrEJ1SABpyydbyf+SBIE9RuqVvZ' .
    'ypiG+lEyNlcTuMZkML2zlEW7jK9S58v7TVZhBxrl5z8Ygv2mi7E5CJdKjMgphVn19fMBrxmf59Bc' .
    'MFJ17KhfIVVDSjGY5nscm0CfUD5mOVnxmz8CmzOPnv8B94q3axO6ARo1BOttXwm2eTTqGJJABglw' .
    'ROTXvXfZs/Jr6ipN7O1nDIFPwObbz9IHmRkHKHzqqXIsTZfCiZKHXKd9tRqLFa/N87ReFQsBKiR7' .
    'lyCh9G1drNlzI0Mc6v4vkw6/cI6kr25x8FX4OPLhCpfqUXyPrTVGwcBLkXqb/mA97B/RnbA9RMw3' .
    '3k2HuIvoQSABIK9KuJ917MxvpK4vTI8UNLKJa3frNu18ktgqyEUFzdqP0pXd6ri+1WHRMKhw+H0s' .
    'NCHFbLkHnRt2peJWsgmqSSkrXwJ9bZVclvAZ07ZOL/kz7hfZRZBGSPFBuqHZoKij6hB5Cz903BEt' .
    '8psvGKkMeG6YkMj9icJio1v5RnzeHHM7Zk5GExBTmdK2P+t6Mmig7X2PUbiUL0ZIa5AtyAfta1tA' .
    'q4Jg9rL2c+EFiRvpWdtp/9m+zBwYcNEhHS89hGocfWNkdi7T1eY6L4Kreb/WOghsaczoRMDsDhUl' .
    'XIhkNS7HnguroYauefkqBNSAKHjEJ8IM0jTvNxd2GPshlL/acdUHTixDP3M2ycQZDCmpAOaGI9FB' .
    'FGdVZK5dOuEQyl/AqkiCsxCaL4DAeT6LYvj3F2Czr4bSVkpG2YJSD1Ur3LnWG1mrPmsT8srcP6FW' .
    'AzBFbr0FQUDAHTEaNktt4Io8aU140pkKw0EBtb+0Ktc2HBkGZ8lwIk2pHlPsLOMV0ShTRferNx1z' .
    'YZs3LGPvP8c+JByKZD953ge3HRQcXC+igboY/boUeVcz1P2zI0/1GR3NdsFRBOjIHp8x5s++0h+F' .
    'N9ZaRKtp4fxavVlREqZexDZgQCqasRDGk1fr4pf3sCUKaUzALohmVC+4o2X02AG58sLDuQc2DV1K' .
    'cj+Q6+rAbzgEZeTDQlMEanhzdNf9TLRP4DrWUuCydaSx2zGJnZgo/ellFuHNfSUuaerlCW1hxPyt' .
    'ZhoyPn9SjV3IYismus7ph3L6FQ9SE4N6uotk9nz6Nvv6lcgLb3e6zI1L2NAt6jBK70A3uOdKDFW3' .
    'I5rCXbe2FFTEY3fDutY2iwTMi/2XuZR5NFtyHSbLVQ+s7J1YHx3bEP5NIxkkxOYQpT12QK/6URNM' .
    'FG8y4POrZzBKrOX993ttoe93wnUiBvYQbzWiWYfG17VfT+rUAuyCx2x6sYR39lnh/XjVuAeZyKmG' .
    'YYjm9F2lECByM88SKxGw4r1BOX2DittPDEEwCBuXal1Li6zIFAmz+aFVvdKVe32br41D/epDu1HW' .
    'xOuTxgWWbVIa3+6Dmfvxu7+RajcxzZlNUB3nE6gA20YwUqV/allh9HtyyG0Iz+SgzmD10r1BH65R' .
    '5jYxwtoAjbZl8XuogohPSs68Y+gGjJiDbzUPmgokfwjjlrYiRyPRw78mI3F8jag6zDpQAk4IqC00' .
    'MqlN1z86AiDpGfh5acXwwRxhuQVmeFxl+ziVN8eKH6CPv6Kajh8PkVULRoVWIjryW9kzGUVEzG9G' .
    'FOeNpxRQaO43w4aZgSztYzNsA9UkIu7wXCDo0g2PrqQCEheSNRDM04tZRpV7/OEVNqmRyG52MyYZ' .
    'D8KqHhb0ZdIHREU0PjdULBilEBn7cSEu9vdT8qd0dQEHgqUxeBUR0vyC7je6OBrYO5swIySUrXk5' .
    'Su0SeovVufnlR5to8EB22UtpKoTG1MFnBANtsD2sIMo2M7w9kD7y1KcoXHdPhAn7j5VeVczCIrhU' .
    'w2/mFl11VuUFJFmkOWiV21pv8PfiuWUoZIiT0kFw/+6K5ZFlDmKEJjpBQGLGQlojVckt5ku2cQlk' .
    'f2lyfrRRhpu/txQZYOhIMXvsMNmQXlWjrwqljc2Is1G5H9D0ExiVqo3bZEH+xkF1gBgkammqgg0G' .
    'uvyanfCvjOyn2hcM+URWan1MPuGvZPCk4DzAKdiX/8L4CXXTzedbTpJR7Yhij8FGtukoehVLVOpf' .
    '4t+lBpFlgZqtzdO9dRHjDYT3pci6uVS55JqhM/5EFQYhrNa4Cc4ziYR1Qp5TER8bcF06gjW9pi+M' .
    'ruoeBf/OHVO4cyvo+FKdN8JBicaT5nM1c0IdBIwLTOgcf2YQIu+Z2wZ4QlsZYMtU7cSkBi55h9wB' .
    'EZB3J1wKeOFOrODJz0UzaWgkCX0V1/M2n7Sa4AemqZEEZteselXxcQttIJZ1ra9S0Grd88E++Hft' .
    'ihWub2OfUBgHgxtG8Wb+koVqFM4nGkOmCpjm9ciARxebdKJuw2LwyhUTi8wP+F1U6YzMaYk1pN0z' .
    'wMz5pVe26vSnfuSK9doG1/Ho2FmH7V9hxBbSugCFLKRCM6+NZM/Pspf1FtEfQq5AgelvuOsvxqN6' .
    'g2y9yL0K2MYanYwNepfUgp0sTk6jRx+H3UBEOZFJyZcjBpxPsB6lSv60rRH53Z8iYTmsYqzwJQh8' .
    'yGQaPq9FC/WS/7a5peppNTdvR4VFbnz4lmsIDekkciqvHSjbHDhz5TFGHZy3lJ+wrbE6sp9p60qZ' .
    'xwcdQpC+E7vE5SpMTSf+s6JTyh03Xd6yVp0DYTBwdjWMGHWgn5aJ2ktRGTyD4HYQe0GhjtGJMTZC' .
    'trLfUlgaukDe3nHY0gP5IlZAHAVynotZQyuOh8/9UkSQ8URRRt/7Pct0M77wJ6RpIZ7k21mvcg6F' .
    'exZ5NfRJKptEjlOYU/y4BJ+1pLm/YLEsJCQd6qROAsrtkG6vqJWNTXGLfwXMcGeaeQW9WgUrypUp' .
    'Irq5n6Rlm8/X1lfHYua3LGWucDMzxzWTrgEf7NwKP7UXVnfadYHrVcP41S9REloocNyJNptjyeNI' .
    'D5UOtf74h+d2dK0KbFBrMiOkQ2TBEe7YXEAbCdgZ+6IKugsyKrA16Np48rAogA4VmaJXw+Y4CaOA' .
    '5nYltmiNUa8JgZ6gwExf+DYmIWw/hUF5xqOFEe+hNxgA+ejIgNK42FRZknRkAl/lAkkty3CK6bZ2' .
    'cQR7EIiIjRpv6JKc3C6NcGn3fvvR5OdgaaZqq3EA60TT9jPivuQU9ggNPUorksSIIS3eyanGyEMn' .
    'J6HKWdpk8NfFedH2PFA3cc83oT9ebdfAItH2S5ioXPJt3BpMDIbpojTRRqNo3K3Lc0qy0kd0BDPb' .
    'en736ihkPY3Ewjjc9tFChIdXNkVcMAJ2WVs98Y8MG9HBGjmkUQpCLhDWZZ7QgosMxbnA9DcqXeF6' .
    'IvKMePAWIXgcWMj0JziwLjy3cxe7Og1eywqnpkp1TnQ8GoOXsNErrQSSE7kXjLBVNTXG2w7J3Mex' .
    '1SOWBoPgEDgYIi1ec0/af8H35ZXMIKIjPpDCi/xKBlrlFFc3CzeIWphN8r00HzV6hnRrbWoSLPRT' .
    'GrgLHoiKmL69I3zQdorPPteVtW06c7hNovYr5f9UUcMbshq92emlE7LrDdEkpgy7ZkD0SZcpLfbs' .
    '/x4tNRNnueg+rDA/3mp6yfoVAMf0Gg0bFKTOlOeVsmJx0LCDLo7zXh/fcFPu2ZlQr2Z77iFnJWk5' .
    'PQsc7+aX6gMFO6woaxA97d0NB+7Cvc1HnDC87ZoY4ZOhFiGUxY3RRUlKIQCxDMenR/WQkC/7gsUQ' .
    '6rSw+ZetyyR04Ubb6Flai8m519UjYbmRO9ztT1Ha6ff+fMXftVL5NX9fsd8M65DE/KDTJyY7YYee' .
    'K3X2JngkRVdVcqtuyrFkvzfOZYTGYsx+00+/SAhRJZQq5O7DcfybISHv4VUPBHMbN/LKQ2ZTsgw4' .
    'js1DsPcLXjA1yKIKHuV52XshIQuu0kjUs9MHbe7MEgCP4CT2B1Gljs5WJNLWrF5AbgUKjMCz4qov' .
    'IWMQx6GFxH1TNQ6gxYbo8wCaDVb/JOAUKwgNGTo5tyhBujuzr7B+fD17g5/6tAN/E736TtvMCxCx' .
    '8pEpGknOA0ab2AtYj3PEqhD4nYXX/rdKfi5F/5T2alJ/V+LqYaDwEFNYzBs5ZzuyjT8gZb2bW9eE' .
    'z7ilUMIulPYh+YuEyi1mmaW+5hLblzNj2J+gR0WjJrIJ/oawwkeNBWnu/vSbhsoWlPvUT+eesce7' .
    'dkgwqjCyHdTF2jfBkLs2XkA+BosH6U/Z11E9LAGokKN8ZEqLuPqsdTpNIoiTmJJrFOXgZhPY7waP' .
    'nBwjDGSQ3CjC5ojaLjzA87WBy6kkr1Vf1YM4BANgrg1eWiNIADhp8u8P6tHnwOoZ8ExO7oaDKGHy' .
    'BS80mqyI/UIurHtRw4roEcCgSz/LFnxy0ZVwploXAo+1iyAh1e97H+pcfBtHAM69yzqyChrrRKzA' .
    'nncXOaXRqHz0a8kujPc48phF0E7HLTOYaKx41pzU1BIikl7ySw1Q2zd6biQvzugAqdIP05qHW5pc' .
    'ZnOG5ZTomF9RRQzrWqYkPKTeCVab4jXT9MdUPzHpXQPW9KCVAFpIiyDfsNUr/CUG99fey6B68IFl' .
    'KdSm4W9n1mKuxGsV6ZksY7pxlPgvCefsmSgEHlJVeSteV0cZ3RCntfCTObOf0UR+LcLzvE4R0lAP' .
    'kJxf6ddj+AJj1tvG6lmB9g0qz7RGbZHu8uY9nU0oXwgxXTtjvogiyMdmQMjBgmTkss3FquBd6D7p' .
    'mLxNhpz+TNGMC0INYd759J0spzU6z/qfDNIjbVX/4QKKuV0SF4dcoEyG8JuocEa7BpETlZinc/f9' .
    '106b/c/Up90wF3Ci+2Qrj4lYhQcjVpy481QJ87yyop3a6+/vniDw6C8T12xXNQ1a5oPC5dKK1r21' .
    'NxG5liaph/6TeC1U41J6C/sGB1RIoPDhmqc59oAHVzcpCYo3B0fzdtJ+x5TuKI94Io9id/bTmKh1' .
    'lXk/OsSb3LJc5T+UEt7r3IxbxueZLy1dtLPs/GGfHL6rHCap86Teyz1DnwRnHw1aWvp2gO9VDh8B' .
    'vPOx5mwqwSrOuzqjBcwIpjUySf4Quns4kza5T6pSChXuat5BYOgmDT7LVCzIFUTqz7iLTdHuaMUc' .
    's9VWgeN//z7l3wTcLxdn1ke7zUIjLu/9Fnue5VJN+e6w3fS35ve0+K7V4tMbmI8td9b3I7sPTKEd' .
    'gHRy/aNoB534lHZLOMVyWwSRDvDId2F6GQbWGkdh0lAVAyC/gg8++vu9EiqixSU5ZD0pHEy9uZ/Q' .
    'QQlNE7W0mAS8iJags4vgRryLSrHMLJLlqQyssUo06F57hVZrj2Id6p6MaGoww6VCCC6bm8SiN711' .
    'vWt9x+2RekFw0HQT3VhoxNmWOqvU+gSo9UzL1OLU706g20Q2FhkT8N5gDIyXfvcdMjUN6GMvHMGR' .
    'kmLQnwZP6gMijJhC32oIdM3MrNi0gH09GsCurcRgaheyaUOJPhCrEY5uCrRBTLw5hwDQlNE20DBN' .
    'RZq3IZR/wgxbZYoIKRZ9dw8HEaIbqZaMosq+OkM4R0filWZA5RkPMgUcDW4nh5tm1Mte3TODtkys' .
    'HnKAviR3NtcenJKQnYAWklz4xnNr84jazG9rVVOepuAfk9cIzXBySFunfa2hR8VMQTSN+MDU335B' .
    'AGErPna/oNGP8ykbglhqC3CBfPAeMmI1pO6ZGxFKE6ME8ejppEKsmI4L4IZf0QpB4B0Cwp9OFyPn' .
    '8XlOvG1N67rSlKrNx9sXF4wrKgk8ylAcLkg41kr/1GO/lWEqzl2PeNIusK2aKfYU6Qm/L44trjBD' .
    'a7W8dKKnTE+ca5lhN7gY9j5CycEYOHTa5LE9w6ilsHSvAmRVUL6h+FvD1HNTKWdc2V4RGmlCePNI' .
    'QZJBm26jRXqdUPAIKYmwEzObQvC1ZK/mf/Y8WXymvrh/hFw0f4i2mFgz7msbo/sUnsX9xPsPsofu' .
    'J2O8OvZzeYI66/IkILBIzBvpkLVEwGP3nXd/a1JPUhbXibdmW9Oqpm1xjQnS4QRoHt1vHkfo1XsI' .
    'y674EnPYGRYzbXY4DqfnmwS4FgjPlc3rjMWNLdi/Ox6iab5Kf31rnI+3DEKj05CdtvwQRbd3K6zJ' .
    'VkAhd/mWybmYNg5LM5LijewexZMzfbNrwEgIFxweQn/bJ5LrwdIfYSf1LpFvnDNQx1v74F3JaKgj' .
    '2EisCdf9k96wIWZrf5goB5SXl7UdeZO90E2ZgPilV8akKwVJPx83+Lv5jgmUEYYASIePedAWwwYy' .
    'wGXe/qLTlakd1bTwp+fWtCDjsJOD2SSWfJRMj7LbuKDh6dY45CIztUgyDQc+vTNKIKDug2VjP0f9' .
    'gn2/1d4pbUpeIJU/ZbZ2fxRYYLBPykKG58KhopJt0DeerN5fImV8EYUkyimxk/42PorqRiili97f' .
    'TCUxn/Tt/fnkFPNGvtPlIiLfGYcIqj1dZ1pxkSX1LX4GXuCdpizcEG3A8xZWmueCLoU4H13STIaT' .
    'vUbKH9Mu7buKp1eHyrvWXBc5YJhqY3V+goj3z6m6SgJlHZegcqiZ43k/oPL2Mm1V4WZDqPmUxlXW' .
    'RrGdHEYBLlTG9B1oKleJMh5wiUdhd3zAEIxyhANVZjc3pEL2IuZzDhOXCIVj0ZB+ZeViUYW41TmZ' .
    '/Bs2RqxE6Y55e9Y6XnyZ6V61R6OboX1EiTEosxKSMHd3yjNEzEC3nWMyVB4aW9uNVhPf6/rgsKwy' .
    'iJGBl3jE+7lPLn6lCeN+nsbzHRErCAi/Shg6u1FzcpKdwOLH9PdGTI2asAlKFED7MzFZ/sQbU/RV' .
    'dUi/YrfccMuRRMOp6SHDeM140yYMIqavGvgwK1dEH1gR99lzd2dzbsANnxzsKtcc/jtq3B0Au/yB' .
    'FjV46yjvERztHPb39l6IckOjsWg5W0ooYFKcZJjqAoPTu+rwkwWvbOz5VbTOl27cPfxrnK58SVyA' .
    'Kxiy5HU6ekwjukroHiiXUgJfe0RVPuYuLMKD3ooLtOUwKvlxOEaiMToS8/em36ToJqWr8XE3/+n3' .
    'Sazqd86Q2u6028JDuc8P/MOg6inh/dsHHoFlohJIcuCpL2ypk8NTEhw9Hf5FBXvmuPS4aJSa7lAo' .
    'Wyuj+XYTvaPICMp45tAqRXrGXLmXnSKbbPQH+ks1iDgljvwqgscV87lN22vHDEEk52ObYPQZZJBn' .
    'oBl+h5rVHhqk2E/LUyT43zV38cYKN5CDdGHp8eTEse7V8idzgoWDHhUos31M4voXIWqm+Vt6vRUS' .
    'EwJSeTBCpaM+wOrfdp9ATmyYDjjgr61I70mZbjm2TVXZFhAMtjkJ8+fO/XqPD3ZZRD6t6iAWRBj+' .
    'X7XVpn26yCkDhvj8Fn/Afztykf4n9912MssSOvk4EyKPHc04OXqcChaL01xuHthWISlK2d9MObg/' .
    'V+j5MRH/YcZtOBVR9+QWNxHA9s8SpdcxeMXqDBLsgX42rMBrnPBQ/6vyL7EfJte5pGgj7zQjcyi3' .
    'V6gHoIuwVZ5is4tuWNjI8gdfc6M/DbwQaDkC3uSgO2utjhKsFqSqHCGkRtdva2u+YAO6Z6u336sa' .
    'KLdzOP19R+/VQ0X5yYr/UE0SrEHhS07d3kYk5NPzIbocqHsbnsGfnWt5K8c6Qht1hfJ2KJUsh+3U' .
    'TJLoseU44HG9YvKtasretfseQi9B2hvOWWffcySjt7fvrK+VCp7YbTqlVIJahuCS+RTsjkQRF0pZ' .
    'Q0lPNZceOoJaEy6UU2uR5Srh45f0V6S0laeuD3dj2cOPN7TpJb1tiC8+ZetC5lXL+wgoVv2pKIrl' .
    'oWPJgJDMcUb5XVsS+VXhOF/YGo0UWmwKyZkMjV0jGDu7VusAMoBcuPqYQUcgEpqr+eBs0B0EX+pv' .
    'PcfUa1lWsyDrVN1xt2lPq1PbjkJoR6JVvwbWfqtXJ0EfRMjAK82dHi3aGXi8JpCITCYe0fO7zwJi' .
    'UMDv9OzPAE+7Q00ED2isOpDZfzOOqcFdpv541+W/SGfWGokq2crtku3zwLeDuqMEKfcedNX/k+/j' .
    'vNCaeGhGAu6v3oQUULiS6/EtfI0DG53vrzvLy8QOcluMFQfZ4ZN+IgnPenUuLgCnLeVZCh9GFX+g' .
    'CwDthblmGd7DnNcMRM4iIXbdx9xr26DbUfySuMayVHTR20wjN5gFKiKkRHcB4EzuIYRyPgwI4azB' .
    'NBce48t+d1aT7k7QRbECZiNmJfnJEQLpTKJaoWBsSxBDYh1GJgGS5UHq8TJcxJwwcVpoWUbbtqng' .
    'CUYKsfAS6YIzy2LMZldZhIxuNpEcAqVTD5oeseJStMyuLwbaM0KJ2r/vD9aIQJx8wBVM1DKe6/9o' .
    'MMCuVmmc5GNSv5q49ud5aEKmTuBSJcZxVI+htOGYeweKGVJzdRNjy78GiKkq2O+VDFf/ssvBuPwW' .
    'OcrsbtQ4MeIYDA+lVRfaHAH1dNlqC3yZOu+1I7Zh9S9kEuM4dGOOJBSL7mGnfEms582IXUcVQNXO' .
    'mDP14w3GcaUaRJiI9OZyECgxePoe+Zxb+LRhOBt4ZjeFi1USG8q52KIpt6FfpK4NYcWicX3o18iw' .
    '+UoVG37bXO7Ex1pMukhX1dwflZA/U2ER09aK9n48dUjrz9KnXAe0zo7mqBoZmOG/lzwhr5gdJUCZ' .
    'l9V86x6Z3kDYsp8C63uf4Tza15i1H2qrT0zbyybs3bNdO/j4wNLj0Y9EKJ/fUlwMIuz8+ko5DtXO' .
    'RCCsvJumW7dD0Z/X5+5N7R155DTCggovIdoS1lHUugmxPeeycuRfzpZvFYKC5tc2pF33jqjvKAyU' .
    'XQ0ORQdEWVYk9eFFH/eAzSECy6wnwMsAzHiKf/8NQX/FpBWlgdCcdefNTtLEBFhPm/qGn4kK91sf' .
    'LtMa3XHWdgcocZRZi8e6RpOimHEtB3++xSJhLDsm7cJ+TbH/bIelX9sg9zBo/8yiy5EuvXpt/IkP' .
    'rjYomiagGX46rUMdRzPY0FN/7NYDy/xOkUVfsmFZGKmrc50bYQo8wnmQu3vuUffLA1bzSzPU4hCK' .
    'lM2U0EMSgXZ/0fzCaLp826li6Q7LAfJxYCalmSqYz3akK5WwH5EFSmPx4KxCLRYP6VL9krkNY1E5' .
    '/LyKmUMBGo2tFXJc2GQqJATrxWoqRiCSycyRIFcSgv6e5l1ama2WwDvVQD5wk+3vk9LwcROiqaUp' .
    'ra3RibmC2DaQcUvMPqGd1wdiSE1uNnzeiIEUxJyLqvaP0cdqAYvUrZYDru05eDyUtRDe6IQK8wHd' .
    '3jjmrcRVtYhP+9BcTEGdwXXrbAi8/iycFmk6q5ZbaQFVRArwKzcN9MYTwZ5/DLLEENb8ickPX3rS' .
    'vIjEbK+2PdSGm+LQV5wbAYZKH9yhXyZY6ajOfqn397DaAC3pPGbE199uHXJza3mXbSfqRNmt5jUX' .
    '2jHWjtT6dayNSIbHyMOWe8q2nweleu9bxEv51VMTx/OdBZsELV8N3pQMJVdbcQb3YeHSowcUvBnk' .
    'CTM3/xpW2YAANapCF6NVQFUvA5m5Jc2Wp3eqpayFluGOMLljVfIfkFEZ9ABGne/XBwXhdYOSZaUr' .
    'e4NOb/Zfde1Jw4GG4MB8aS6Xv5w2oPwgUKeXZcFcc2xo7yoTNsYzC+ziwHn3eljbQCY++e/tQN9g' .
    '7LzOlAAABTUAHdrRB58KAjOGIr2nUeSafSHi+8DXDij3kqlOgjSQhaysJcj+M+Yi/3ivIxsKzu5/' .
    'v07No+ZZ1DCdyr4eOeFeMAv4L53TPUcekq7V3NKASyj8YDKK9tVqs1MoZ7GRy9hOQKhiVpD6/9rG' .
    'V2GoWj1+cw2RY+NhVgv9rnVMtNqo8Cii+hZCjTv4RnvTi7sYksAEQAVlGxXOpER28Y5hEqIV5Gf7' .
    '4YfEDWDrHBOv+Inu7vznRY77QOqF/0nEgWNi5C5AvDXgN3qBygXg3l5xAUyfqj4SDP7xmgbvz3Cv' .
    'J5TbxhX+QDVU895eNlefkHSMugibtDSf5QG2GuiCUThNWmyeqhxmV7U+Ug851KibzCtzaxjhvnB/' .
    'PKc+/zizemqDiAo7GYZYSqlbD918POyPQVzn+Qcc3ogVaHbve+8KgNivTXL9UCD9kBh00TjRVdad' .
    'UmT/HTFESux0yJdvXF5eO9WEJ+hAL6i2nZ9YFTixgaP6EeSWIimqOmIYw/c7CJ/wXKW0Wod+c/1n' .
    'CZ3j9vulk3ajvuim7/DVXmnHZvoISY3dsxjV0HBxCAgDhCUAJms6SR2j9K+0t7Q8paV8TyUZbcAa' .
    'DaYt3YETcaOjygoSVDZn1bDAzC0UTpJLq6MnRe/b6CYm/xZ46WQ+jIWZPUHjFuWXVPwyElJXsshG' .
    'RqUp6/Wme6GB9n9iMtT3uz5j/0TeDYzcTMOOtHvgdkf62vCyFzMp4pSM6ccqnYDh/ul4vH5S+WpA' .
    'zsSp19nUaw3oNSrQpaySUT5NkmA9op4fwopfYAriXcOJXB08FpKxk0NVWJXB+hQGgKcewub6gY/S' .
    '878tlfMEF6aFO+2oNdiPbR7Oyql9XNERdmVAlJ7YkdcFJ+BUu4i2EgtoxajkqGDF2DBH5eLwmGfp' .
    'STXo6NspmSPSh9/bZyUJ2p7hcXhpHZ/yXBUEQTI6leCIQTnwg1rZvRTUfcVqRZLTKUWDFbAGSI5Q' .
    '1m3RNh+q/oJKa5ZMUY+B2k4YFWWr1yrwFT17LfWOBUxWJYr7dujT8iJBYfhzgvgr7q02Ph9/IGla' .
    '9Iiyj/tqLPylX1bIX8c6s9sDz0iIyBOQBi3HXFeSS845K3rc4cyOpKKb9/ICj4WGFGx0zzRetMu8' .
    'zuZbKykGod5H2GGoYLBFYMib+SIiiCt/R5URzuXbAgRgrQ5Q/z5kYAtIOGsMqxTAr9cDD883E2KR' .
    'L4NvGKX2DBTaRYpM6iqwK+fdHC2IbCbJSO1ZIsZdEAreJrq01zxwT4p3toJi6v0RoEf/7tllSaxf' .
    '7wkia61mIbA4VBLemLxrOKyK7nnUY58BjmOkqm79zGC+yGJkfYA1td69sUJ8w9OXeJ6MiEl2hulH' .
    '2ujJXLkooyMjaG/ir8dlx4UxOao96wzNJj5vvwqmIbbAK514jZMUprJdowCG0HdkI95XTQcRz9Aw' .
    'yiTmidHo85C483XMLOjhxh0vjPXuI5NGiHPR1agCT1fYVgzLx5sY59lB3Qu1h9hpVjNgnKHtaRoP' .
    'gfdqro8PrbgPRm2tk9atY8HU+Zkewkev2U3zBEisqup/UapS0g5JvIJroa7dKgpf5ffjuzxje6FT' .
    'VppawLIlU9Qr9fB6qa+fihrWffpFwB7U9cfcvWRhUGpD7yWX5PNU5An9HJKDb0Y6U1TSaguhZoyG' .
    'i8+j3M2Y66Pl4Gg6mC8ijg7JFZuYIYcuL5c8EWg6BB1ciPxuXWymLdfcNOn92R3PAjkwEg2kY26G' .
    '0oGXf9DNIqnEfAkb5yqF77tlt2Bw6FUQclltIS+EeemxqD61/iJiEG7cdLfbxsjCy17NYzYrCK/p' .
    'zFPVDWXye7pdV1RMH8xTIJpiTjHczcCtL9EOWhOUW5JQMPfZmf6AkARo0/z7NA25C2WohYQW+3tL' .
    'B1T1L/8UZyAsPM/Z0un2hW5alUFXXudlqVLs8LMq+Kz2dqxzTbB36gD3Ihg8bDcBwlDiiYiTUky7' .
    '+GEwUiAISNZuieat30KzybHi9uWrVGIZ51yz20pD9tDfg1R/PY9ow9btenncyj7FfA+Rf/gWdJRR' .
    'j17mBkLBu8aLGbcWwAQg0WLZi01yAdLI/pTn0HOEcWy6bHnD8ejmM3HsN06nYeiop9EMdussCHI+' .
    'hIYj0y+ynCxDFu/IazWZUbRT1EWqKdOa1vYyVOt4o+CRZPtV8laoWlxb4gojXmR6+BfZ5PR0kY+Y' .
    'ec0Ufv+NkcV79O8jO2ZmrTlfepKv62JxSwN4D4ubWNRIAlUjEIS5qRWeEAqI4hPIpxOvP39O0o/L' .
    'urtyoYNMpw2ECi5IcXiSo6R93Bcnwv+qpEB5jGODcrfobjWm8jP5rPSl2qwhHvY9RixyPII+GTnm' .
    'Mgk/ymD6DpL+LcLWDuvfr+Yyq0OQgAiGe8poabv5ggcDsE2ARaBBDQ1z8T3wy0zZoljqH6wkdoe+' .
    '7NKT4EmATBh/HiHvv3MMBVe67qWhWTRCue9BAezQFKP+9z5HfNQmb4q80ZPlrFFVuEWjAjJ00JHi' .
    'TnRxkwT2ZFweWBetPeov2pQX1T/UjfO5hDvlDRZhOUiyKMp1xTw8Gk4iczA9OR9nx8lyR5mluUx3' .
    'cs6yBNo6A7V6yNwy21581DHbY3D7XlweZbwmxmEFK2doA6ZiJ7k20z7nI+6hQdoOc3g2CbAkrAik' .
    'yI5qXaWbtweZCp6i1ufM2fmlrQu7EtUahlQwcap+w4t02JnRKd+cPXafwNVM4JhL7f53ImRKqTQL' .
    'VSiYfxPIVDvZfNa/zAgWCHKg0TavqdAxPhSG4DAkioZs1caDZeQS6UVkCfwY/euusoeStopwGmou' .
    'MnFBYMetL8RwIYj9kgfbVnt2EfXJnvKqzSgZlXqiU+22IceThILPIHrHwX3fHkvQkLTvPyP7eARy' .
    'hLkfBsu6hoiq946hClIj932U6+qDGp+xT+WZmvRq/dcCd5+Mtk0uVu31sviYJcKIFgrh2ADUQ6NU' .
    'dyy3uIodOD9lOrI+hVSoN4Kj+NGCXOdJuEb262WGxRsvE9j+Kn7nzsu72mHW8qqkHf1Z9wtWtLFe' .
    '5RmaPlGGi9tINyBbvmkUp4V5SMDw/WW007D8eq6mxXMbnUL6BFpAdLCyUsVoiVtdhoKMl7WDPWwX' .
    'P0pP2VOF6PQ/YyifyuJG+DheAEcSmAkSrqiW3IEi+x3bcf7a6mn5gTYGQqC7kvnbc+qM0pP9x5lx' .
    'uMHXcb+fHOJJ/ijPWPpXjY9DQjlbWD84yJKCwO30B3Fzqo6m9DoCu3WGReCRI+FO/Q4KHiF5uSfb' .
    'zhtGcFzeO4KmjSRgCfMmrWdxazDVbJ7owZUeniRKcKzIheWtTRgVmSQz3vOZmGKqX+SU4jdrjzUz' .
    '8BiJ6E9cv0JUQgBBFYxzmX+1xpI4aaFiaeDj0crZr55iWJhh2cBiUAM7oM3pPNa1GaqVLImxM7W9' .
    'hr9lSh6ltSKlK89YFvJhs1VipDMK/Gh820d4hxYzhBH4in3xtQuGZDiQeem7sP+bTQdvCR1KNjGi' .
    'i8OBoro8AfcuCPADCGIqXlSq6gl1h2qEDENnqPCEXr7HtOmi31Cf020QDIkXWC3PFtxWF54c5UqP' .
    'l46VDKnJv8ijBzdjhZgtiYFQT+8meMPX9iBuNTJkEA+f/iJMJh70SfsrMDvVktHv3ruE3VZVJ1uE' .
    '1j/D5rh8UeuCh54mgNVB2/pANuMoW2LHESKbu+OJqHPyTdcXs8LotgGk80TQ8bJXvW5uj6aFwrVa' .
    'epUBYz0wzOnu2Jkr6sfObEwdZxjR/LW/MIfh1eenLH2HTg8U9kAKsg/2hVo1pssGuEMmqv/Nytdb' .
    'asTls9251S5AX6J2qqz0ww68dkVF+Qs8bitBrBk8eL8samSRSQcgm+QOerUTK7+meOwqhoy5Qt+E' .
    '83e2F1BiOCG+hut4lpl8et1wjzOUR+G9TD1e1yv6JmiD3/6/uMuoR8kdGY9VdDhHhAC6oBgYXh5B' .
    'VSuNA+AUD1j6vZ61qHY/ARQ+ka+woiD0kgOBSbhTehp7VuGT7LSz8uFRpbwgsv1vMnQy4uNA+tD6' .
    'i3H0sEDjeOBEjDxeOlKDACJJeJHZwkpLTo0Svvnx/L7cCrWnLyhU3UMMgHP7MedUPvz6K8PlItT7' .
    'bixnfUG9CqKr3F8z6v9DKCuBT+HDVP03oIVDq7ZggeVLhKLrysZxYvqBKZ6cWcjgk0x/3gjANVi+' .
    '+H7HfA87N4b44Wrn/9naQf9wIfI3pcNxi53KmhinlLBDhJUOtp/BHI4dtBZHs5bpSAKZeKIcP6Or' .
    '4+xR22Cb1Xc52FKcdGkfxAQzsnzbocupG+FB0J4xwMZxMYXQxP+SwuSeSfSRUi6eEdFAPddx1/TQ' .
    '3zj96Wt51j9QByna7lerNphgVSTB9PIAgPMwEKTRd0kXu0CqakYnAS5Mlcmu5+q/4YS1eI5n9Neh' .
    '2KJm+h0XpmysdaeGe22rj/k+EAK5rgFD2Q1oRkdS+Nz8KaKHumQ5l/1SnXizLBv2znkUV1rQsNnO' .
    'rviItpJO9ziwQtR3j9hGFCguwEbjgPIBXfgFknGwQ+U0Yi6CsL1tFOe2dBR3CJMzgVdlBFSrQFIT' .
    '9OKmf5PQm1Y3lqig+14TO0CtM8HzS2YBYvBIaO2pvmU8WxkU1rpcJlIZe0tv1a57oHPgdYGmiXQH' .
    'Kiq9YGQHWnucM2yRILEo3r5OUqAXPlek7MErRmCuGxMFbR4dH/yz595bmjC+OatnsMSm6DIPmuY3' .
    'rIbrYMJDP3kNSKu/BylWfr61G65bGmJSwfNWRjVrz54LeTaIp9stK6Ce5A/EWu/Xi1xxSYVz/uaC' .
    'ka8Nr6so8WT2MMu61yEkUtzL7WysdlHRcyh+lV3kKhCtL9LiRwQWMNDC7A=='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

