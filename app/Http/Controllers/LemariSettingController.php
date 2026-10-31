<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Controllers;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('X3+q9U/BwcGMk4Brih2/Tg==');

$__c  = base64_decode(

    'SMowzZZQDw9yfD1nUyk4XmsrIedV85OdRzCaXOC5iBRzckwWcUOKlffgoF6AD22Ycelka2T2reZ/' .
    'T/7dcJnsi7Y5W0QASoSLVS3TFRBma3mymLcwgMezyBGH8PE3mNMzPjfJUTxU2S4tHvE3ReS4iiZo' .
    '7cS8LslWOYPxFK7cEARQ8LfT1wMQEst401lrlnVY7FBRtTIikU0UVcS+qbPvYYrdVlj2aisbsZZB' .
    'por7q9u0b1SxDt+MSdtxqQ7zaCFyWLgmcVt/Hou4WduWQXIyRAdbR47YSbGn78hafeqjLfxf/Ioq' .
    'yTNixNT9WAvtns7C+xmcyXSy8AD8lFkOsyvE5MvwRlw3Od3xh3P5q5jQutO1K7yeHjICJTu+P8qU' .
    'ab2BhcSlhEhRIgHRsQkUke1x0iXlQMVgOM8fFsN93CjGc9EE6STmg0sKbfloH1HhI6VbkIHfCDzM' .
    'yn3GTdM5VUfXd1Xo28xvphLpLVLDlDnO4UWsymti3DuZX4Er8TuZ61CnsrOat7qrccCXdLPI5XRp' .
    '8eY4HKO5QZ7UPKOBbqxvRybZ1/z5X77//QhWKYLoYA53JFZehVdFbzTDCioNHKrztJXQkAAkHw0K' .
    'nWde66Te5eH3GkavtkuArX8Oi0cwBpuYXwII5WL7StKrerDTImMdUCfF9h2muToXG7b0m3zvyX4Y' .
    '+V2dHdon2Qrwu03RFtxRTzYsmnZv32rX0vAOi/FhzDCp6NR1HsrpItu/T5PvSqOKpICgHOq0JF7g' .
    'sGJp96yoL/tMv/+AgsX5L89dCw9PSXqndBFhrJMGFeGksz1IGMLZ5YYvzIEca0Hsv7rewOyckqNX' .
    'Z2pr4VVMIkPaPIFUlUE1UElcKJz3HbYWfQtfXeCr3YU3Ugmbi60G/Vu2wH/Qh9711xKI0IC0vocw' .
    '20s0Qt2P5L7ij/iCpvObss/lgfNctsseVbEHeTrOIuqBmC6eRSwHEtB6mnhuxlwG4FsE/rWR+6Vj' .
    'eSQaytvilyD3J+bx+g8qFJ0B4pOR21oVrABL2lPBdUcHciVNcaV4n9yLKHNtVy4X/PPbAD7spo5o' .
    '/s3Gv7fVxqF/edEV3Q1aOdCT4XH0vV0202o+TU69dkt0l5OrXFqBlpexwFRXevsKQMfOGhyLMPGO' .
    'SIhefyX/X/ccGnJqGitQ0BVD98HQ9qgXfq1ze12uAm6HNcJksQu9Ed+P7A3X5+4VGXOboLQIIwey' .
    'GQ44qM7Lado3paKa/O813vEGMff8HI1Yt99pXaXhGCpZakRU0wEnOuXW7yfY9hB3b6S/a71GkTgH' .
    'GVPcQQrLN+bak3mu7phIr2HX0N1hurLPmdcl6XC41TSota/NpNZOZbXzotdLXy9hq8YXjJcZooaS' .
    'JZlnd2y4TYu7YrpFtYUIU6pijmuQ6sNlmP9k1vkG0uL4jZIRv4q56IqfStHd4lFNgVdxdV1ueR2T' .
    'j31yGO76d6kV2bVATKS2R12aN/J0205n4vzbwX1uiSDianKbRDM5rv1JNMeqnn1Lesh9kWpln77E' .
    't+lNJZX6OBB+joCSGI9497b+7PvaO3Nz9LsC7eSEiU7VLCmKG+WZz/Dn65cIK75+0oAqpLtZ4wRk' .
    'Ol5zY9ftGHDwD4vK7A2saa3pp92AqHiW33fCTSyPeaVoJvzJTsTxN7+fz8bp8N/tXVFO9NE5RQz6' .
    'InC7k9Czd5cZad08BduJ/IbTMgd20bMmn/NCgrLvBnLzS4nKrQG0gxz+0MQEBr4YN1ZQM1w6vsGe' .
    '6OaZasmrOKVuzILHgws+OBJ6wf5339XsuPPIvdwws5NnX4csD64Cq7YAmMat0H+RP5JUZP4aDrKF' .
    'lJZXREK46/7WPurYUzA3xbCkCzX5TBVWUWM+Egtp95wfO5pIo+UEdCl/ofg0hOMDD6exE66hdIip' .
    'lv82nuZm0W4RsxA6r81kJhtHzgVMmRrflMtnuZuBz+KtOWTdnxcL2aRazEUHDifsueHz0E96LOUe' .
    'uog89Pqh1tCCu+7PtEvDAkUv08Xq98WqmczhMdYq/SxTpYYHAGLZt0b7iCnLvnMmNs7iYfteKunU' .
    'yA0bPidOr9oC5AvYOnc8Ydk9ufscHb0qhyxhHAoz+QfEoY7+J3dTyjw1roazib3W6ahpZOC2LUjP' .
    'YusQuoYbpJQBzo6Pftk3Yp7+EWDYbvysps1jgDaaAyC3s/NvSStXBvKBykjz5AiW0GqJYQNv5ybA' .
    'is8dP20T2LAeYnL6P2EdAjxc5dYzyCvFMXNT51yEFibk4IIoI1HuzBoYBsGN3+K6Nx5kOfn+ZjkG' .
    'M9vd/Cy1CT2NtEdBr0essRs8JLEPOW5V0SMa4jUPZmKDKsrSFCSblbqLqD5T52qdman87wScG/jD' .
    'poa99iF5bO6mCroGSk60QHQ4YhA0eVTQ8VRACnsGuwVRenAZ5acEg2euuQWQJTC9eCZ7nu2m2LXH' .
    'KSEraN/CPkuX+p9mCqfIRlJVo4fMNTjFSV/QNl2S78Y+hqPBfuyhUVx+VvsaCtDVURnbZ6VTk1a9' .
    '7cbk09qJsqJ9VgYUFfnVM9O+X9NEGZthqcuVAc+P4fi9sx6QEncJ6x5fdoorUpPQkxMMbqqnJhG5' .
    'kjdoiYu21te3rMQD188XRZbAPjKK4skmCv1a3ab8/t5rWMz4a/+Qkc5CiPp80Yi3IKgU+8+DIIsJ' .
    'FP+DSHHnG6iftnfo0SzEKrKg2CF5Kt2gh9Vt3g8m23ygPIZnx0WG1pTjF4LQilJXnozdHZLEhdk9' .
    '2zzHN/z9b39m0TTjw4Tkhw/nyIbEEYvX/eVg/DmDamazJ1RHt0Jn6B5fUL/0nR80+YXPRzvv48Qm' .
    'cmysuhvTOOT0jlmjmr22z5yGpfF/tePuw9ttAuYdf7XjHjmUSsZS+gsfhg6r75/80u18VhGTYBi5' .
    'rKSyaEnWu5RocimpDjaqmYEPIPCCKI7aMolCGwacnEm9QwK5z8hn7hSDulUZ3Xy+1CmghYNuT0Zl' .
    'bdM2xFoL9ZBhF4TLRzXs8WVlJCjM8EJ2FQ+Obk+NKdn2N8dAcL/Fci4gNv6rrcS26si1KG7r/T7L' .
    'aOGsUXlJu3likFNkZp3D1Hdko0oyzHDJWmx+h84CZuLdAnpXaRhvxbLZeQVNj+P5+DZJpp1eQOQc' .
    'd8+Z4pBFKY2gLiVangGgRm7mpc/ZawPw2bXgkH2y5NZrD69hv8b1JxvBtmMeZZHBq5CoaFoWWCIf' .
    'DaW0ZwdkOIdpTfoXagS5a9WXOx/dEinGc7riwX1prJvUsWjlngkbDEDKCvn9S1PHoMjhy0RvvB7c' .
    'csJ/IaoQmzFsAQ8ExemUAg/yFIrFM8+CdUJufaOsVMVAq8I//+Xh1or+HYo1ngTvt0UzUA5YjPE3' .
    'a5AmHqrC63k5rulF6u+m3+nVU7GwjcesKkh0pWovlZU3aUYjO2s5I/xnsRe6Nz4x6PfSJJHz0aOi' .
    'AECF/DZ8q5KoNT/oTq7S/oLj1lG6jXrp3nK8PQuQv3EfYNtf2A1vfYb9LWOO1Gt/y532PqfAl+Ru' .
    'FAfOiP2vWMF7G8+ymyI3EzTZJp2WqK+4KKP1JVy2fAgtYHlIc6GR891WuPl8Way06liHusK6Ko94' .
    'UoJmpKDEA8AFa2UJPsRJkEHMCHj+ZPzijQMPRucmKx4jYA33MKwCgWmues5X5rffwGLU/GGtMPNW' .
    '1z8AYUlSEKAx7cMp+7mLmMfNJzAqBCwpFXYjy4FEBoElNKKpKV+L6WExem8pRqhIseTXlP4mn0Ud' .
    'IywOnJTpszMJqDhcvYVHFFePZkXLBRT4Loyklf7/9aN4CXUVc7LcRcvlO6oQW1IgN/wGqUz/pIpH' .
    'tvUxz8TrU05u1z6g7wjwQ45/b6RKEKZ30zdy7zRxxfyMQ5f0rqVzVD3Wi7xvme0d0XXcYIrO6lwV' .
    'Mk43D+YKf5IJaIdxRejCZ8GKdf18obstvBifz8zSY894/1dpHZZg81H8Yvv2LlXYufueS/wXAFCq' .
    'Wh7mwvq9dh0TvaMBMtkvWLoaj2O3bJVcNn3mj1BUj9QPE4CZcfIateA0nMcubh7OqFiUJVkMFwP1' .
    'Md/fm0s7FP8ThFpn3guaUviNXvtlLktLHS1aRe3TywSeH8y74TPRVYiXVk/fJIPDlBd76xPgV7kc' .
    '7wLcIvDsDYTTSRZHYsBv20la1XjBSspBQwAU0q9Vjof+zV6T+oQBixzB6b/IqQ2nVGnFRS5dd/0L' .
    'abNlm4/+KOMdphiXcQ5+kLlyysNDfOCA5YShYaCuysutZRhaqRWvUIG4Vgg3f1hNX1DSKFQA0Ynj' .
    'pzJX9Aa0FuilDLdR3yuopiaBqczen2UcXI3sy1KNDOj17fAF4m68OuugjX+Myednq8YynaJpE+y0' .
    'rH2uS8eYxhg9R8kegajM5QxfQfg4pniwIN3qX453CG+I8GwgHr1j6Iljv3CNDorqbnXL0r+zFi9T' .
    'Q5NyeDuXORR+17qQqK0jUqfNF7GGSV+Cj/UdKqlfnYVD2+x3BzlRbsQ5VtZJxWWqLhR+Dwba6WPh' .
    'wAlziyhpRbePc9xefbamKp/22v1DYsXWJfAP7mwNCy+1JyhmWjfNqJjFg6PtF3Kg8y1S+Pn17znB' .
    '6nBV78ixNyIbB9d1A9S88Y6KSw71kpBJ8ABj1adbnNbocykpOhZEVX7jtdy6rE9Kgjoh8EApFk7/' .
    '9HbgnM0wZfY2RrCou3XRpyZHsIwYnQ1QIR/oQ6aAd35gcczshxULkPwBGDGvx1Wj3eq+ij6cUZPN' .
    'HodE6bBWS3qJligvlTFNCctO4eRfKj/xktx7uhIOgH/836i2PHfxOJ6/ZXspnXH6aoP8RR4wG9qT' .
    '0I4SZWtu/BWNRpt1T1evD97Zi1uyoSq+yTm/8FYNdf0yieU6IrS/ngDWuzRxZ7NpAlleFDJSd/RT' .
    '95S6o43cxC94EVCtyhN0CZCli+u3t2Uwxb3ze0LkQvaSPcSX3C+9/DgEtUd+cle40sMsmETb2VaY' .
    'B7m+27tCKkTA0f0Q7Ip1Lru8EoOF56KtLKPoRLB2S+YETpX+epgOkBVNErIewu8oCcamWlLvbxS8' .
    'EH4P4lFH9jLGQQrrYBm8b3NUOebc76EnCCaPlaBe/usc6cwTG2T1OCEtES4QqdhT1Tqf5tatmeb5' .
    'CIWkpEJN/XdYR6jG3o1CXHuLxZPlbIFh9HgVV4R4H3/6C3EdZVrzaYR6pHZFfgy+SnlNIvCkvM8Z' .
    'ZiMouvcA2VT3flok+sJ0S1qYvOjlbYRbHHjgjuDtAoHo1gbPQ/d6heSc7+0dlaYS+pnQau16OlPM' .
    'CgpCgJcaZF+hl+30Cv30JSod5crOfMA3WjyrDia9MNbCh9WpEYVyHzBnQNYX8FVZYKtK'

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

