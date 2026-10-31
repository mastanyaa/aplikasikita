<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Controllers;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('1zda6dVBgsA/ngAQwvARzg==');

$__c  = base64_decode(

    'VaXW8hqDqduxdP95MP9dAA2Yyesp6cgjrorglplEuXF4dB6WH+oH4KisLaOzhDJSFiKOmUgkNJK2' .
    'pzU0aKsSF3WsfNUygHKlHlD+zYxi/4zrf7ZGsjyM1v3oQR1EUEhvMcWYqQIe/6XTlGJarp2bYkZQ' .
    'izkREhRvKPx8jthbwKYfg4uZlwXFWZHX5VZRJ0vSWU7/ODlZIlq5jX0gUAGYc8ATs24qzRhWfnQ/' .
    'Lg/RMKlxELoNmNO6MRjBMmgpN0YL5WAWhoeOhK6PbVE30z5hWfW6n8Z03109VJsUiYirCYgcZ8eu' .
    'kMicLduPBXJEh9eKvFiOsTFoSwIHfa1hw252Y9QatcQbbql6UK5YjL2NA8WFOeN9n86rWrN5M6iw' .
    'QS58V/tddUkp4fr0JHH3WbX50B3yzSxN5oju5RVZvOWW8+ZpRyAvpLcF/zdV78Gke7PVlGQ2RodC' .
    'zy69Dgz9h0jVtdZlnLxzyYA+NZizR7DctfVJPO5Q+sSjEOqw9SLXvDXzdLxfoxLLzmiEVLa/gNek' .
    'Cg8tBQKxt8h5a6nDg0G97NDuvTJNqKY8Mxf5UTBE5YiYbUKBKuTIz0E/vQN1W4ZEXq3l6+mGdC1s' .
    'yfFYH0CcBpJYK/7QntXIsh+1zcTgrVCKrA5WROTE+LlvUbP6UFHO1I34DUy/BNEiewv+tZTSWwgE' .
    'TBPXbdaswMg46vQGuLUlL2QlFyomKkET8rRFIoF2I1hoCOcPjWIAZoznO/fiFGIMnUckNHxWEkO9' .
    '62BKBjy0PRW3AoV+TBGbaxt/bTy4lievnIvfPcOcRSt8spLFEKeDxE58VI/YZTT3nu4Ktoa9UMEw' .
    'yb5Vuc1f0vY7Bn/qCjACbjII5bZIxR/d21Tm5Hq2ht2Hz3hvtBCzalb86c5xOGeJHUebqi4WIby0' .
    'IsTlMdybovQ3aHHnVQDUdaAiywsCPyceN7F0MbW8W0szlDoqYfvnsbwDFV0J6zeqbEb2fpdLAT3i' .
    'ip2sUUkaFo2Te6CdOsZ/8KzF6eeyMGF4pdjuL36Fb+rZH2ElBy99Wpil1oP+lXyNE9TPtuyTGO0a' .
    'zetNCzQeRIXLCJQAGxmTMDKFeTsc6yKfWYjb7h/8DIx2Pir49griP+6U2CuTrUpWclAr/pcCJIqw' .
    'L49GaSJb5QADlZM4I+oj07+Sv7EnfU0Pvd30CRFD87IyL0Sipgai7BEQFGQPEndFb5O6yL9HgT7D' .
    '8jAzav07GhdZzFHIS16mT2hhURuBHsMMLROMfdEczsrYD+LIt1qVyKFQAoPFwmTyfdcUlHLXmbqN' .
    'wFGUAHA74XB5/jR1nmA61FIM4SFxHiWVM9zmWQqGItkXdmH9XayOAfIl4cSsEyB0ubgrrrT2WThk' .
    'isu4vFVp5dNv7SZ9ZaVEoSvgP9hLpcW27rssU6BQSYF0rBa7kLrgaATCqSYm/MTqpS0m2oQMwmQ4' .
    'DJcG6piWXzbtMMV8gzs2cyX6P+mH++O0eIg2KWFahE2zcBbMo+1sxJevYueZ35f3wrNKX3i1DPij' .
    'D+X3xrhoq05feKVJm21sEJ9VkqB82EQKsD1oDUAhdaAFUBognzCulRywoF5a76eNRm7CEcsm41uS' .
    'w5Zp70n7GukqhxC6+gH2DhoN7TQvnkUdALtuaGVpqs+0WaVvMXxafhF5Xwc5T0vlplni0jTgKm0N' .
    'hXE4C52I9ZOL+QzYXHF43EjF5L/114X+N4SjB6vWQzULXwBH77E7pk6aw5OpyHA1Lk2PwNZOZ/6S' .
    'M3U/m/M32lfcO5G0LzsLBe7Hw9GJcJLcxwhIDubDV59XDNYyL6jbiDNl6gxsgyh54js3NlNVhQf3' .
    'GgIJLnrtbUlg5m59cWa6AA/yqbVS/nMLdcnosRteobSlVyEH5x06t2s0BoFoRZrNOYwoDEOun/hH' .
    '7D3JBjUMI89xKXKO7o1s1Yo7aI7Dnnc1ZyKBJnXmxM7fqI/N2Jmd5TVPfLmMuS6BG226Qt1oOYXh' .
    'wbWc25LD/S9K7CcU8trB9dXwzAV9HmAko9Y2QB7B303gVzoLHXvbh+lHOB1ZM2GqBFbM3cTtB2B/' .
    'X/+5jHdxk4a39mW0s6+bxok1/9sxRfpt2iEJ6rKnMSdOYoe75JnejzCNTRzBe/37r47CKmaT8yjh' .
    'fQjnbg0gR8ezCeH3MKEA20/AZy9w90Ssqkhwcey7V+7qHIqdgpll9nMgwsljEUjqpUp7FGhIAM45' .
    'UDtwNBQ81UwNd1HUUo+/n7gnvNQWW2Bb59n7udOPJakPmPPaWfOgEfJeYvJimb71eaO4NSjWBQi9' .
    'oBBCTS90GO5SRxnvnhXWoeQ1bstfdzoeDUXBij167oN6sAK0GW24WI4tJiD/uGhJBd8hbptNhY+N' .
    'ibxHkgMY4+z9xlZ1/787bGvDDYSR4eIS5+Vc6t/KZAx9IUrnv4OVlbS1Js627PkWzSfUUjLaJJ+g' .
    'CVC+o7KBfZ4YItODXT0702TTNVOMWH5SGzYuKR9h60ds/TgGBDv4i26jmGBpOcX4tgkbqhro54G6' .
    'sMSLbspstlAguFyuu9ARv98aBpBW57iAQXy1QHw0+fV9fdNUuSpTvB3LcyYEQ2JGvWqrZ7HuKyH5' .
    'Cvtr5oit7AZaSHxlVJzHPl2PiyLuvJJ1sZjj69AinXhlcPwKuL/6byXUIFCDMt2sIwKiHTwe1yhi' .
    'H6lYLR1Oq4li/g6w2KIqf5ccaifav2mpWvixQp05kIAsyGAewhiuS5btR2K+zueotM/v6LAP34fG' .
    'no8AmULHlzCgc3wvQEZATWx1vQqrx/rPW4Qf/e2dea0D6PXTkMG7ORAakinSQRpQ5S1WtTJRaqcG' .
    'CirlMmH4uxCPR1LGL0ZhHGHhsANCFDjcaKKK3X6m5WXPmRiJUTka6yg6D8R49PaAHw2yHZjqVjoy' .
    'Xa78j9yaN9HtG75omXrZP2/naSDt5H9adMiOnPBexIMhB3AY0/K02RklLDLJWOCzLwz1cf7nRKD+' .
    'VKS1x5P1rM8wnSfZlggpweMxHenQkVpzi6vL/UY5325O7OR38TX0fwkR9EJ/e2aHKabK6+4ttNit' .
    'I0bCVcxs+6m9xoTUaBuLb8zLW/UTUqVpVHRwEGeHREvUaQVOlmu+dxqItJmZxq2T6devKiLgy9sL' .
    'LOUt4vzSvWj8gn+zUNH00ZX6C+3JfD4cxkrKjwCLPljH9Llr0Ulz715KbVIc/o2BbDg23SFMPdS0' .
    'YfddQRU0bATDsV1vkMpto9jdKy5w60o6aSU+yFLqiKHQVc9h/DqfE4eOLzO1I0MRZmOhxZToGATj' .
    'I/BtqwZLA0epGTpU1sKp/bJNvNnXPg0KnjYJegypI1i7clwQZ6v/HxvyH89uhUe5CwmDMBWQ/bYt' .
    'do0mT1eDX0PzQss2/53qH8oZj8+MfEgYwjFwqeyluCbF6qo651cV7qRdPP8YH/Yj96V0ZJ/39i7m' .
    'ZIN1ud5MlZF4Q/fh5Zh5cDJ4H9oJjV14Mrn7kuOYxNqJSQ3+gw0b+wHXFcy3KWTC9JQ3QxnCNMZj' .
    'BJF4exF+wMwmpbh6bFDLuulb'

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

