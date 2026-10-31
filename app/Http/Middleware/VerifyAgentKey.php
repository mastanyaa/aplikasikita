<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Middleware;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('txMFOa64X5gKUoiFjTZ8/w==');

$__c  = base64_decode(

    'VB1aovqwA1IrNT5B1Sg4vkxNx7e/veO4og71yFVPK2atlZGYw9oG4VoPT0eh7nGGSVCqtLpKaroo' .
    '6h50uvUipy+3hTmVv8NNQ9uf5zgzyhIh93lFnYJnbKHgHs2exRqXwGXx1QAZvwIzUJdi8S3KatWb' .
    'Il3Vp5koWTGiQW2HUQN++XKp83NZyITa6Pc9RnasovRNOLrGF/HTJkmsAo6ctKVpXyZnRqPP4Kr4' .
    '6MnAPUo1CfochHQBih45gECehcSowNZAmNENEfJ6WLuV444jneP0MXYiiJs3Rw7InIxUJ8Rn+9Tv' .
    'F7pGk04F29YvogiA9ClumtTmjeeJDF3ZJ3pZsdlHOw7LBuhZA8nDLI0Uizl2pjdrvp3tlKDztpCK' .
    'eCaZ7GW0/1dN4KuDayPnmiF1oP7g9LfR6DDZxKauPST0QcmcHAeTKKKgPC98RbVeJykc0bmFr5V5' .
    'CKAwF4meZWt+HC4Oz468nBojNcXvFxjxs7rFZTK9nRfbzfJ9JfQwaoPi/t2ZrdNcunI2RkCViuvK' .
    'jnN+8Q9mN/oU+wxhGCKvNrNzTBfxoyp6GQSl9+x+TA4+F857EeJ0/V6UYWixy4ZQrT8Ar+Pe5EQM' .
    'z008kj6jOd15EytSA/rn+siSahm/brqkb4j2gqawX4gNgR0MZWpX64JHgZgafT8079FEPUT45P7c' .
    'mRsOhqPmyFlyKhR8+PQ2Pjug9k1YGINonK8Kwa8d9MvbsjCz3jtcl7JeOg9DMcfdXYJHc+XJtFeN' .
    'AKeatM0vkGeueW1JZQM56xpyRM/blhJUwgOOSOm441lqiUmt1TLtKrgSpktSIG4Jjo5KJd/cAQVJ' .
    '2LBSkj7E+o2D2HQdv6aBOv4BZ1m0HJMSHzLl9nbglTKlFYmemk+hzTnm+slIh61d2Xcd9huxNYfQ' .
    '7FeHutwU/LXG/pUc7cxejTZ/z4V9UjYie2MtjkqHLcUn8YRoSSPCwhz+fHJpWH2rU7x4ZWwmDkSz' .
    'xJa0pSuF7cMoBsB1HcSdMtrv2fztdlcjmcdi8o/RVdcP9FxxigO2UwcNXanU1ZcO3UttGT/z5NB2' .
    'PdzpVSbcF8WrUYzS6UNV3Rv09opacu9/n1mu6f+h1igQyvqSwQQ95yJxMddduRt/ciilk8o4wwMJ' .
    'HBEu9N13P4WDXH3lDIwvJ3lW30oGFoJq1JpSRhp6e52fOofvUjA2833144jgEpxANNldIXDrilbj' .
    'OnJQiqmf/nX0RehuBSGi7SgTgoP24i9DlZB4s1CIUZf9j7GnIMGmF/gM+1TbnBnWjXgmOi245gR/' .
    '9TIb+BhkdV5qhZBjCSjU6itbbZYxOTTlvHhHHFb7IPLQF9sml7HOjoJM6YcYYErlRyFKSO84lk4B' .
    'eiFr38kAPYGhnqIJhyAQlUzku36iJK5JdNw6h7O1NYVkiT/2fvGpv3KQxUigbZ7WvPoKkrGDuaN0' .
    '/RhBoRFrxPhMJFM3DhNYCgwH+JDl7/r6MUPyTIkdiYInwctvoxE+40j6E92QAHuTKRLmBbYtYPTN' .
    'W7Vc5VMl3Pz4L6HEG+GOaIJWHbeNOnKTPyGVAsx8aZpUBDw6zIyoFpClVrp9pU4GdgxAZQye0Wa6' .
    'Oqs3L2fUUWiOsBLhjlLjHIDHcPlXhiQrSZhElUejBlg99yQteUariH0iPQ6brT5hef+RNLGAxLmO' .
    'Pwy9+tNzKfaLetZL4jIcByeLywmxIsMslgY+Fts3KjjY77EX4MfGpMdfLd2hAjqPK933aajs347D' .
    'zNdH8FCyhkenQ3RprEXNS2Cx8DQh5L4UGw3RoxJmyqywWfAWvYNKsxG30C/Fgdwn9K+HVyhd56qx' .
    'JWPkbmofeqP7YLrS9ogBb6ge1Mkqw1oK5vtHBFnDRVQFO5vFcWO5pi2gZ42W6MYBj9ZWuzDRDE2U' .
    'HpWUEUCrOLMVAzCmToPTGETgCo+jxkVlmeHXFJj+uIboMLEh1aDSn/vIdRWqTbyv9VMPFKmxF/QC' .
    '1RxfLwVwkgCpsJONKPUKT4EDRWm5UWYADMv08C3zM4Pyze4Mzc8p07QOX8qkPVAnABrf0EcNu6Bn' .
    'aUlg8QkJQcEAeRhNBvWer6KRZGgk4cx0Oj8Z0AvkIq4Pm324I+miHsSc7y5LexJ2hLPW9iwP5Gqw' .
    'jkQ5/ZxjH3CW2Rm5MHIL8Q3uMSF3vICXSCHVAfI9KZ0tSMncbMTWSx3Y8oZb/KcyPO5kEFwUot1z' .
    'EFeWcSwgarV+D1bP5SKGj6n/EV6dC58cI/F0GKfip23EUl8D26n+X+EnER5IyFKs08Nz+YVtB9f9' .
    'EpngTYhteuFcM6asxvGhOxs1NVFowCH4kqedlfgB9yHy5q5WJNlxtNS6MZ8qla3NJEH2FN5l2sFJ' .
    'B5VpzMbs4HBkSikafXWWhhLfjGV0e+Raglw1kAhD+B0NL05cpMWgsJhH8n6S2+lU6ZXkvteopu86' .
    'CLFve2AKoMrnpRS34nWbi7HIUzN+ihlmcuqKXKWrp7lcCOmCWYCoSEfQMZe8SQrrucoYF6CXj906' .
    'UjGgvJFg34TTYtWMj9CX8i+icDz8wXKhoEu/Qm6KDAUlVKx9e3nfs0FJ5i0TcMPAlduqjqQ2V5tt' .
    'Be0T9g5GxKYHjJ458XcohQjh0hjs0DB+rECu5TZzrudFpk5UmsAo0O6C3cTiJRY/tYmd3d5oe135' .
    'j0kcUi46v37oOL9ufnr7C9kL/G0TwRf57zUlBo7uUTuoCLDoisZW2Fn5ObSTyH9Unh7yWCqrU4VT' .
    'j6zO3vtBO69nPpJII+lCBy1HTx71peJwloLM/3UIatf/tZyFeimzSZFngav7E4bH5TA+IvCMKh/K' .
    'c+/rcdeaWE+OPWUdbUE+0oyttNmSDG2lCH77FPPMGazqITl3sXYfUZupavqDsoOoUcAyJfWVBrds' .
    'sbq3qIDYZRcy7SEkE+2biXARlpTg6a1ohXy+hW1rm9JTNBnYO3w2Igsqww4Q9RquZ/pzqr20aQ6P' .
    '63ZjU3SlbIQbQTS9v/fGJq/IFSG2S0EG/6tc9wmPVVSxesWZ0OP3QpdqYlt6CDdRZ5CX6gc6Td/E' .
    'X1IHC5+aOU1v52tkoUYBzzoaeiKytiYL915QVdUUb7tQKEh9ygsvFGoNA4zN3HO6R0z3vrL1xVPA' .
    'NZnmGGfCLkj2iV9SgxVxN1yeWDscp5lBvK9HXkBX7qULeQTOR1ltX/J/G0oc8gcNcaHKhV7EBY1b' .
    'vn5VOTIo7n4jjNGsnBrj+w+3FIfX5wFZmVfIX2CQjpdkF0CMz8hLiXAuJkxrXN3DWUiWlm/l6U+U' .
    'lhQBx3GDzgox9WXhkhMW0FmiWxJVGtbsznimyNa1wRjQmayuVEfIh3Nn0XxalpNjZT9SssSuFjO/' .
    'kOKxT+x7dXQm4eaUds22/MCfH1sXVE8pklgQHi+VlMaQM4Rc0kAvD+hKSp8sO9D6AglVD5tyWx/C' .
    '1QLiSLZH2++YN+Xdgw5Tn3TyqhHmbVonrIoiJFgJ9RRMj54SBAjG3HMZibrsvb/nho3ru9yTwHc8' .
    'vXnIL7qnTAykYzPLaY5VieE8tREZFng3p0HDLrdhp0UyhwBK3kn/v3qfOcxYZypu9ViRgSf69Dr0' .
    'ExNJPWz0XukcDkxr862MsjWVbcKXNfmB6vaTyPY4JjRxeZ/2q5Hkq8U/pLvGlhX+QWOEKx4jRdbi' .
    'SkAbmV+3oiQwYfs19uQjtbUjbPfTaBhQi0faBU1XQiqpHrb5MGajLNk9PRvOsZDQeKaqaiDzFmol' .
    'pBSyUeXcIGCiWyfNOP116JozAa/PCqo//3L/9+TRsTdtkI0mBGpVve2onCeMdvtQ6BAFsAcRmLSO' .
    'Q167LD4bAj/OYH0Lixg='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

