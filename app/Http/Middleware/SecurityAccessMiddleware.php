<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Middleware;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('yNkVY0hqDQ/VLD1TuLvv8Q==');

$__c  = base64_decode(

    'QV/iL7f2HHZpmIz8JAzciITagH9SESIr3X9uqxX6EXM2brAKiKLWkwHb16tpjX+UY2qdvmus0gvH' .
    'rKH2IHT5LB5SnUtDiZw4Y37ZzJZMfhz1cr+iHTtiIzYJwp2S+Ju8DARJ99NRSii5VN8kvApOaQDc' .
    'aIVCDVYrzVDuCEVjWPc+6gWZ9pWyrMpmhUmhrbvuc0DruIAOeZ8NWoITExsnOaUH9kqI/7RQj6Eb' .
    'TxwJvqW2rlQp5HIlLU6lOaXEp+OLL/HOteZ76JoIJ65rrhYl6IVsNxp+OqU/vhSWs2ZWu3TJi8QG' .
    'plkYyK1kQdicCdisPjEyf/d2f4546o5bQyKxBqpqmuS7GVPU22L7EvZSlJyYwFJkl2YQ9B4Wn4Cc' .
    'dy1pRyWmgQKWLBHrbrFxHI/TVj6cpyCgk1lwwxCwkF1PFmDZOfnPxLNJARvjBugrqIPUa5K6vl/S' .
    'vgiPP1bCinJ61UuJ1jnmKEHToClyAoXX+IZAr1nRUWVB/cFs5X0alpffao0ee57x1aXLt3lkJOAa' .
    'zzs7AwEQCB11Xbkd7MOVrG+GtFW6FvW1RCh5S21i7itjPWjY05kjDZ/e8opXJniBNrOReJyREROs' .
    '3+oVcYag2XGTf27mnP56Cr6Nmplj8snRcNgJDHgLaai3uYphwmjhPBlpTceyDWkKSlZ4V3RgEuTv' .
    'uOs1vU0aGBzEQHtXYVWg4DeirIYRU+5XVR3X/OHYc6JaJm3oUMWfLslPqjK5ffTr1PK1S/AJ4PkU' .
    '7zeyu4ECjESPpDZJeH0vbvwnszu3nFQaGJ9q1++YKbuulExUitu35p+YHyqL33/2mvJsWY8BGX76' .
    'My9HgkUL8W5ttqNOlznz5HQZkR9pEUqYsKeOfIXV2l5+uBy9jkJU5Cdji2AqY6kiaGUor/j5YLdT' .
    'bTmRvQbD0wb/NKyvnK3OfFTaHr73IQjzBCJJCzRDPxiwj40Jt3TVUM0aeGph/OyT1k7IYWkhz+RW' .
    'Ed7WrmxuS1O0H2gEAUFyqQqKIp9uO5LqUxdPy228eE1DC6X+z0Q+pDRE8yARrv3D8rH0pplAXI3F' .
    'InUUF6vg+wmAOToTIvqFoRAn4mT8tnKUAJL4XBWaxztvawGJ0LX5Reec+eDoN9X8tjYwlu0I9s8h' .
    'F2jZOdall75YE9hzRohklCqabPGLIBUj/EWdaZEkFm+TDb0F7MedV/rMQPYmpdE/B2g7b/w+m29w' .
    'aIw0bueGGW3ReWdHna0FTGTLsBpiPpg+Ncn2UYkdnU3uTHFhvV3x6Ave8yWUhwIHlsQoGZTX9Ei5' .
    'LPY6HOB58zuKP3Ork/5AeDfqgNR+BR+SUalfnVC6sRJonybUvsoGrVHoRAt+1utk0gG3tlh2B5En' .
    'JWN8pbj+Hgx44s2GQNNhibsSpLwfH4iOYXYRUuh09YbzZ+f6NucUkD1E1uXzMMh82DkkNUmbu6Rj' .
    'ulR/xDZn7a1jctufuGOmlG73GTkWG+7HbdSTYIeOW9Pr0T6RlP51GDiJdgXa2XK1MR/UzXi6HhRe' .
    'Vj3NfZkx1q/MhRIqM7Z9w7uc+fGKPerdwWx7MKcoNdMqX4FGgrCEAPq1MgOxvsocDycAFi5V0B1M' .
    'xbwUKVVeHIs1XQRfe0/Wx+tKRNtwecrTaLreCXCgCs+ra0dV6mhZaYecSOgFOvHjp3LrhS8dGaus' .
    'lvNBRde3yFGIE0ExqV1e4Q22wPYobA1tyPGv1Ydab3Mer9A+xMZMBEPDMkvNv1Du5q8AfmmugZdd' .
    'f/opsXvFX27ovuUATalFqIGubBvoJokfMH2Y6EWo6zuqjEMi8bBGdYrLaKfawGTPWeR53Rdt3CNb' .
    '7/sRqELb8vleGCqAOacjV3vC87u3usisTWo+xAxJ8UccecPJbXDwNusUw+DO2PL9VpqiwKuccrSr' .
    'uzP2v4jTYg69OW+QK4YnWnOA0ViLfR2O3KgZIohAqFHp8C/Zm5BSRvDNVR8mn1ibfcA3zrdJf+wD' .
    'QPZKKuuGKI7Cv6gjCN5k3iwvP3otnZpB6uIuQ8g/NLQmKqB5qKmJ1F54mM/m+WEbMQZpQrJPreSr' .
    'aCnc1AneZzKLFoOLvf5o8aw2bH5SPYI07QZJbUuGN1Ogm30MMPjtekT+rg38fGPX/3Q7UP9yj0To' .
    'NRPY9A4DaNMcznJCb6fOrS2bDMO3Ueae6llmGOPuhi/AwtPYtfh0w1BK7KoM0PiS9B1lbDpkgGOe' .
    'q7xkKXkBicCjnpokN6e1nlb51n+WNgMCO0dE/pzI6GxGeWdWQX9AiOCY/KK6NIY9FP2u6qbUbzte' .
    'xJEpJb6AcT5nrZdEGCiVrodR9+Negko5L7ya5LU2NeokcYWPXHoyLqdZv7VsAJz5cvTMSuk1/26X' .
    'CDSk/PcC5LRh0igNs6pKmQ8SSHGlct8ASe0IZakdXLoHQx6ksClhbhsqBr3ZbbK7eZcJOHjG44jX' .
    'hoFe48HjEWbSYa2ozvA5Svz5BJC2lQ5h+dOoIs+sj3ZWfFDvaBCwz5O8+hfRI2QJIOj9nH8t5TTU' .
    '3dBlAQ8EbeSy29oqvE2eVE3amICws+en7aKASpjQm4a7kLpC1L9+GuNieSO2EUalGVDSek1UhP+j' .
    'HisZVkD36+XsGBot5Ux9Xs64yL3xCaGjS4v8dR1K4ZqVsBzZJg8GPQEJTtMIQIf2cG/Wt6YJ1qjl' .
    'Oi0z6SSvR35PE5C7AzTjFrOquWVzAyEbKWRjBKNGvN9LWs3l4VjeiVuecm3Pzcagb9nNhj202kwK' .
    'TeQSMDNe4ZMFM9/n4RnnS3aWKT1cOwgo8fVvPH1Z3H/7cwFrRhqmuAOjptMHk2NSkK50nI1XOHSr' .
    'RCfFCxewkeZAzecjZcokQZdi/kcZfh/QUJbfetPtJ76id2SJiO+TdvWgWEN2TQiTW0gy2XVVt2R/' .
    'MpKTOkya8SxDdEZWi1rMvGZ+GB/qJo09yIWMp1ubt+pph36MyF8i1fEs0aWSdKHmqiMMaPOwL79z' .
    'sFugcuxK2Q3cENoAON1RSM2p1DBV434gz9hHUpMlwmkeqG0C0CVxwu6/tO54wgQgxDPglEZSkdYD' .
    'EloMof2CeASo4ZORq1aik6gsaytHymfJ32q8iqlakse7EyxLGNyz05xQsov1M3/rWyXiZOIB0/O9' .
    'UN69mWy/MqPLYGkzMus8m8hcTv8esiAAQPkVDTpUhT22XMiw7+2LaeWI2IKCYy//8wWGIH1X2hkW' .
    'vxbrq9JPdFCqK2dVACOxzr6AmB0nTxWFySCi+O/MOzoFpcBIW5/awcTVxObhHa3lh86gGwfYh1GP' .
    'hWJiQ2M5qV99XTwejXKGqdNIqZ6/fvHVRdoozmMWfMpD/6OZCSZFF7ZxQYywtoX9OBTC6n0D1RFU' .
    'HzXbbDwuu/RF1V5MuZy55safNpQYD7BnEDiiq4e9tStiFYJyM1DI/GqA5BSEe9U99IS14pQp8S2b' .
    'fV1rJSyXjFaFk0yw93asA7fbOf5mds03hUEW6uvPwsB75osxeY7XDc1KtC5C3PJuz6FknV0Vwa1V' .
    'W1h6cnrdJXQP22ktNX+6ZwTsGjx74h4k3EsE2bFSM80QFsacdUKduqmxiS3PnRxhuxJhyNrNtpFb' .
    'xkbZcaKv2O1hLBG6bk8xPqRP3lpPSyM50WPJPBxS6xCYXkHqkZC2Lt5LMO3ANpaGzQ3wXN//u6Jj' .
    '0TgJtJ4SWh6+B0ca9Bb3Daa6sSpw2NIq2pwsLbfEU6m8clF1xSJ0uMKwUchLc5BIIgo5spGL1j1y' .
    'lW+6PEubdA6tQWXkDcEXy2A9w3h7SleW7cYxCGM62KkyiJ0r7sh+xWbTYFitltsc7ar7FSi5yK5o' .
    'FnkGqtwj+NHg5mJ+fMGgWHYusFleadrmgf+arVcQFKk8+cMWsz1xDSvKClD4KMrOYuaHlX7b971g' .
    '0WQwg3Y8HTO6CjYiIFCXrY/BmjPGIQC7T/8Tip62clSYTpeoNZEZYpr4EGgThltA4kgNYimaffWz' .
    '72eU3jEbLC9gBArk2Kf0WpGGs1gSSsUW+EcpKEO0efR2eDBJljj2P9SxnA6D/oMmAKLchansmRYe' .
    'is8qyIzFIbewk8gs2DJBPgGMizWqOBaLJOidI5UAJ4tW6c7+2l6e/w08genGdZgW7DLVmIhsCRrF' .
    'tLOFANX/Ivqp+GEGZZ4hmZwMtQP9p6HiXKbbJfn8OHg92Owc82wxSZJiUg73DUPSt4wNHHXlOUwm' .
    'l7SPGKwM9ewdRE9EOuwpr96n76faPwJfgudqfcTbAOgIY2kqZ3VoAKzbf8ycx/8gxrJUBgOI8fdL' .
    'USLGOB0WqJxhfMV/Det5GbOgDv5foXlD6bz8fDDJYPNYlk4uWxYRrJ30wMBJ7fdVh4eE8l+QU24O' .
    '+ywmzJTcU0aJbtLmx94mWxbXsVqKGmukdjhm8aIDJrkuWVFY0u2GhAl7XglXStdIsLWuOqGssVZX' .
    'OIWJFLGBNMMY5ka6flsJE9im3QcshEbdCp9ht1tDluws5GOWZqPwlBC6Dv8C5Mop7E76W5yAHjPM' .
    'XgxfXZdvC33/aZBMkFYX/FvI5s27rL9/RaBRzEifn/YB8ly9czwl+LamUWEtrc5hZW0B7r/o+Cvn' .
    'wGsY6NOAd6CcraXbVFBhsqPJH90cd6PaiPX/DGjh+uiqCz+eiSAtb99l1c8XNhQhAPCP/bqv+fWQ' .
    'URSU1d1UaZwL5Bjy06EO8MK/s0jPb+DtbOtQAy04WBvLr+6TBCfN7xbQee6CVQZi2vykJQ7T8w0V' .
    'iNhuwfcUGD9N7xxz8m1K5tmITzskhSB94fflOSAnwCqNwhzQXFkCtN2TbcmyocMUVaIWVBuQAGPi' .
    'Y1jkDxfSZmJojcVwki7A0adoanKOYsm1f2vTutvFYBoQbPOD69DnfjNT5UCY3QmQ0qqDFRxfRcF/' .
    '33wIdbr6p3FrckKO8r/NwK4ugBUWXjfp+R7T5pMNiffmotwG/BQhGmXOOOaRpxGxcX8KQ/FY4uvA' .
    '+ZCrbViUmutdRwWZYnWkEDSRNm4xTMaxRjiigSkoI2DPCnKd4VdGemq4uA+mjE2LlplRAgcJ+zz7' .
    'UTVpGeb1x0cmlGnM8L1ulV+sp5q8m4Fiq+1IDdcobszZhgXlaCjg7c/UWfpa1HhtwJWphKLXMJpM' .
    '1dXg5fUZlsGHY2lt5WrtQv87+K1M2ynivyadlByriEQDmXhPvdQ5x2NHLXQ+UF+qfuyM9MvGjG4z' .
    'o1GsNo7kLz7gzAXBIDQROps/ERE/zOn/Sf2bOw7Htypz1o+3vLyQdFs0t61r9/pL4J5rQVJ4LJ/N' .
    'VTd4EPkJYB5EYOOda266i965JXrbb5jYzDsarx4c1yqNb8L8JFi0E/8FoVn3hSP/MP3HrbwdDlG4' .
    'Cs5paOLowsgR7CofLOWbkLMPjCRH0dYLl4vgeCh/mjMUYO8CXyifFVh61gxZ9YngpvmMvnnm1jYz' .
    'nrFXvtCJm5mqVVYt9vpoFsYNOa+9aOesWjQ2whZlR6nRy8ck71UVC0Zk9rTxXT/w8gH8lcbK27k0' .
    'pNAPnzWFCl21vD+HDVtC5jKAfxNZt0ICgA2TjM+ANGM40GJT6Jz8BdlcnrG9C7cnbGH9OmvGkkiN' .
    'ICOqEp+TN/EvWmAtiauuJdy2qEjJGXQ0yxff8f121n2j30uEmXTh9hxSvkmti+TQVYMWbFWBuMxD' .
    'Ymg3d3kcXEesH8TVYfMZhqGSCyl3pz5ad3hulye86WdWC2GBh10PFGCIgTqhZdLjCSkbggK26yY5' .
    'iL2khPlBxiXMcozp4wPOpkAgk4f1x+a0eZIJvrJFw5T78TCaTj7Mm0T9qzQs1CzRPO203jBYDcPS' .
    '6xAI6cARTO2a6sdKyG//ArcohciE7cueted9O59qGBcJV1nsKUHN77kO7hdfolaWDK2tRLA/ZCzD' .
    'jGe4N0bEofuH9v/FHcimaCDfq9mh6ODCR6eqihxcqOLY0eDc+B5MfUfMg8qW8SaOcIK9niAfC7tI' .
    'tubp4lCVOgkZX4isCKeDGqXCovZ9IfKfYtakwXHjqrHtVSlD4IrQ7u2tjm/kkX4yfQcrOvoAHl+6' .
    'uPbu4AIt61pQbiw0iuqJSx4PSm5lH7tKdcrYKnCKh4dOYzErfAJIm/EHGXI4VcXJAG9uflTXcnLX' .
    'T+or5Tb4Yr4twoW6NU4yrfpNPHzd244fY7S/XL3nXAYmsYlV2/iQPYdTExMMaJvZhUoF9huQS9vK' .
    'lE/Tj1LfgUNmS0Ewk8XTy7oXqk1febL9paRCp7ziqAwf0sbUx/DGI9r8cn0o6g+v2OmlkZ5qU1O4' .
    'Q9M1j2Vaw8GbwFVxSiRIJ719Bqx1U0pdbr9a7gc1y8yr/YdW8sHk0lMnCi57OE8K2AOIAO+s1Fwv' .
    'Efw4yIv7uqaCBbxu9/E/NIQovYeKDep0rxkIgjQKzk/pSrF8yTw02qwbrNFaOkjbqWffHKTTNYGD' .
    'odP8pNApdceyukO6xTCQYwzKAMXbupMTdYNoIImRl9lcSOV8omsl4iWnYvR5xWxV7EKdOc/E7b7x' .
    '4yMoa4+OxAmbY/026Qb3zRL9X1zTLX91HARowZDbamYvCcw='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

