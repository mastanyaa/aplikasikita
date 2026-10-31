<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Helpers;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('Zyvm1sE1cdUTnhRAVCTLZQ==');

$__c  = base64_decode(

    'qxVca4/a+Z71FwSKtc7DxiU5ROL8kwAooISvwdQH98lLhErbh6S5iaarfCrKe66UYSUP45aO6qsE' .
    'XQHSGNmMaZs9inoR4f4Uf5PBSDB5x5I1bVt6AiG/s14yAVS3JCZbT9jlwLYwFso8LGg2hlrsCvXv' .
    'EOqIu9QVztGIpIIeI7MnPk8xnEvExjUSptmwjc2DDMQJJdfYByxm0YVGhMbtKMEuSW/QPhjnm9yn' .
    'q3f439A7bTeGvTV1zyDomi6yUl/+FV/p4K7YfBdhNXGpXfW9OfpuPIQA9NcFfLCbhAVn9ddspcq2' .
    'RBBXSEp9790TJ65WrcJBLf38Wv9HAiY5aNT6q8xej1aq5tfKkIhbHyGoLN5oKYHqiHQwhMNsu5x6' .
    'dbG12Djh/CmqgeTJDpQ71S6KUJp2iasxkeqqup/qd9Nw7oTZscEhwXrIy8YfcXOSd72LBLhVPYWQ' .
    'hFdScV/aGFeijD8Up4fh2Ms9s01Sq3smkeAiI7cg0ZcmI8qZzz1LLwwHypPgMNxIqR9sA7BEdDE1' .
    '6GNdDTrTUyVey4mEkYwDNE2ukgLFijWSlR4asCZNamaadI1g2+wyMAkJfdttLn+4e45yO6VMdj4q' .
    '3ouv+4d5Pvp3HHZdGJzZ37tPKxRsNTdVFB0WtEuDcO3JyjvODDHF9S9ic2AklFf5AEXO1ucwglQp' .
    'fXkyNKZqMl1v7oQ28BJXN37KiASMCsW0kiFmLvxdGML6gkTmNkofoqbcZ9wNlea7hLb2IhOqQgBq' .
    'O1CbcbbyBIl5TwChDkTguxrPZoiNCZLBRIKWJOtkw2BoRuKHErt8/P6FcwOffJAOc3j5SY8hVMQF' .
    'C/Pkl4pyS/tYgFMouNDiLb5+1M+wd2AY5sTI2eIBzOWNAjaD+st1iYbUxRDpe1S0NSeYp4iLiz2F' .
    '1lCI0yyMHS3AiAw1ou/IRhEzoVA25CkGUpo6354FBUBdH8XVxSd5m3yE/L7K89C49p7TD4JyWcNY' .
    'DfTp4uqVi+833NikC6x9x/Eza7Ap4kR31yq8kUKcV58ZqDdRBPVXA9zhLYyjxexch7mVrHDUbcqw' .
    'CcK7qlGdY/SroLPTtASuzL2j/Id4grfOZUnvQ6fC2Oug9gaKu9HG+xdn+kuvYzqRGrvEw094z2c8' .
    'hRX3mr4BxJrhFPy2bxp4MirlVye2TDMxphYhKbgBGeMZMlPYLbKRY0Lktn8GYAssebZR587Mp7oq' .
    'NrJvMjHZXGekS1G2NfMfU/9rqv8aaHErpRt1lJwFfaGMxlKkFuerAshufVkFh9qjMcHUwvg7y8Mt' .
    'BDOspx7p2z5o35uSMuSR9DxpYUUcPvMNN31uu0wdhppaF3xn7m+A9vaxb47Ivl3nFVOtCxYv/MGZ' .
    'h2EpHWmdn5GS9kIOVB10zEtQSggfvrz9PbE4mjWjFbj7GBsv5tUMVzk4cti+qHUz1H78cXkSKSml' .
    'rPFZmJEXBfvjuf8R/woVRY7jym524CF4T5Nur7R3H7QSA+jpo6wMdtYgjRIzh3WcnPyKtdLo6gQ4' .
    'zlqStl+uNYo7gtjDt/eambAVuWRb8Po4DslsYTgdp3bYG+OKCvUw6f1D/2Hjv3aX80uYpAp7WP5T' .
    '2GF7mNJMfoNG0Nj14kUSbNiNLJU6hC72JGztR9SIbQ0b0DfKJxk7mtIvAmKUtIpzrVtRjKesvLz7' .
    '95i9zHRoxaKO2yD6uH/wXxvB5x0ZqelwaJ0ht+IyXhN+LEgSCWO6CGEbVq9/5VmFyvfxsujFCu+8' .
    'upTKyguv3jl9/aihRB3HeutYjsZ3YbmXP8g+KoBxxYYqpBuKhwX9MyCJ3yxXrwdA/3uFaSv+j2OG' .
    'Yw90fGyC+TLx/y3cKSIuADlVRG6TIWq7I+0fz3ZIKybictVG8/UDyD/xA66LG1wzmVjHE3OB8Ek0' .
    'gQefzT6t7KjwDtGhIoxx9U7wHvM9UtT1HToeMjMXdfXCo3vYB4gki3tsPE6aG010VVEF7vzKow3N' .
    'Hu+vZ3d1C09/ZbuIhDNPsJFCanFwV/S/tXtIHs+OpZ0uBpSWqUIW1VTwA20WMLXkaYIUPCsdNo82' .
    '3VoA/u/5kmUdv6oIHsJh3sMKPz66t6ZMFMYuzXP2Bl/VlXQCjnKsM1wqt4eXWek/5eC6R6OXo4DH' .
    '9puJaNmPpkamSNvY2EN6R5cCP0eLIfYc1zmmuG8KbHTrSDKfRM/4WsaVyD0IXYZOeVljD2s9JfyA' .
    'MqHGrdYnTIi8WHpad1+2lIkX5/T3ub3ZCwWDg3wFiTg2q7Gg4PSqZc456rCPsV5IqIi0tbInC1jR' .
    '3lkEXVpDhXFBWY5spHG5q3biCdokfakVxITnzFG0LJDBb7Gch/5LGBsFvmRE8sV2d0Rxb9YWnBzK' .
    'aCUVCqIgon3aTqx+RgcXdQP3iz4k05zYPLOMFuLySMtPR2ozi+CmqLbVfRmfELE458sl6rMsN4WY' .
    'Tzp76rfXcJLhIJ9FSTpMqhk2kB+wVkenFMKwUlcC2URx9nX2mT1vNcrRf14uMjYWmFJww0LZIWpQ' .
    'G92W7Yielnyv2CoZh7bQFbJGhllf4YGRMRnfsHEprSfvbwKCqHHIFGjT7Zy3gjcOOxtIZhlNVViI' .
    '/AEjyKU3Fx873FkTED20I5OxurKZppIZMJgydj8JhYjjjShIfCJ43AQ2jW4sFlS5cJIYcORAad86' .
    'FYOeY+0nqC7SeabAh00B8k4CL641pCXBRq+DcegXQ3j9JBdrdhXTXcoDrL8EJqCe+Vx3lX8vZGMK' .
    'Pmomeet4uSJ8gB8cik0673Vool4Ft/kVHjcwvT2nufbITnzZj42MUTor4A/CorDS3BR2y+Z1FCI1' .
    'VzQeZRoU5RJDGGHSHdPKoXXCE0eINyyYAGIBuIUdSC0+YaNbYT2+FL8wNzTRfvXLnbL+fMC6qTxa' .
    'Wv33ageC/FcJ7pct0JKhA2Ox8aOE5ZPLSQb03M9LGHJFfY4aMjUqtT8x1AG9tVIJgQpDWT+jH1k9' .
    'W+2K+acIpOj3bg8b+56NK58='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

