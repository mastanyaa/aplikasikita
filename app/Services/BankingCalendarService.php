<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Services;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('GvicXqvykQMxZ3D2unno6Q==');

$__c  = base64_decode(

    'n+75ksPX+LbOkKZYilQIKow9sIFo+RyEpMJYOOHizLgq/lyURw/G/gS4YtfARbFbOesnw6/p4eiJ' .
    'aPp3dnB3YohkVupDYL+4jLUDNJTY4PONs144L3dHIUzHCNI7Hfzb5H70ypLTUrFFPQiyJYS8U8V6' .
    'L2hk04oQZKY5X73nC0w5ujiHA0gNL1p6jsqxRrNI94H2g1g1KYATNWaIKWMjlwOOhOgN5Nkwo3AL' .
    'Yi2ntxL/onX+GJbORR+j6IOpu+JSfDjHlsUmkX5fxz5ZwQhgp0e9B/WjTgsWHBSg/2W6Xt9yUSPS' .
    'AZTNeD+u65M4kU5ylaHEx5Nl+vj5M0qp6QFrPlrKZbg/J6trAQ6Ir5SKAbsUENu3z3mN/+j2JdYq' .
    'w48yTXRNWPzOjLmuiVCoGw/6w56cqRpX7QIy/9T+Gis3Vecz6SuNnsohYj0pwCHVCFmWS4WmoW2P' .
    '34oIFn/ZCzJ3DDYbN8bREPHMM95NGVboNAMRQVfaW8MrnIZwbyPyiE7H04mXijfRHht6ggEWFLQu' .
    'Q5xCtjRTg6fvOpZEh8Xm0tVPXY4eSmEJY+cYS6T4q9m4odDoM0wjMOO6QkunYcJBgQxhBLbeSrNC' .
    'md5ppW5HJHi4DYRfJAB0O3oxjCdf37W95f6tZYCGjh7wNWENk6SCvFt21DJns+bc5LBfPmt5JHxk' .
    'NOZpUHcTQICVdaZ7v3hHI9GWNmaK4eYZGvfedZbLvHkhGcdB4QMVQhDLU2BA7KqaPW0UD1ySR41f' .
    'OzHlaVEYtYpDE2y4yhINwUo+oCmOiaBSiHszT7euU36uBBg83yvlgk3vkcA52jSQpHMdv+WE5wQY' .
    'rlvFavbHGahr6ZJZaLfEmeNmLnxKgH7j5vySaO9BscJ1VkOwkPaOkLBpcD/moFvHBozDImwcFS9X' .
    'WB4EXPbp9RG4SMjazfkbK5Vs0hF2RvGBA8w1ltlqcAR9ZOtnHCZLR1t1ih2+fGbl5/f+LccrCpVX' .
    'tWav2x5333Aq9PjRWn8/aESCrL/ZPpVOL2VSEB67tCNSE4cP18/k635o2mFEsKLA8zTV9p8vdEYe' .
    'l+NriKr4Kkfa2S3IdLl9Uxfn1z869ye+V5SZM43wiknW487MTIl6u8zFfWqCCrRaAp2lVHc5+iP6' .
    'ntOj4MuOW9f9UMgE04kJYBhV3DjEmoY8e21LOfF30MX6fh+MNlTmj/+NdVv2f+oPbcSuauRt/PRb' .
    'B4ziojBpgm5RazlXplfPNaifSEQTOVtq32uGd8h/2QPCrWS5F4pFTZaLKPWFtXjzSTnsjg6jrB6o' .
    '0uhcMBwhoMvZ2qCk2nw3W8vkWRhHnNQ3srRPSSDiC+WtGfkyh3O5q0L8DKNH4idcUEzMgi2JvYC6' .
    'fKCoFYMdL5jXh4Vk0E2LgX5FM7W3owRGbZ4POPWSO2mYLxd6A0m9YPQfn1h/jEoLrQsNrUV+pdgj' .
    'TS5uw/+MLuSSxunnilkTrqam0n6wtjmeMaApfKYbIewdKikG10CkkcovxMDLbm+sqiDvaK5k+apt' .
    'TNB3QU8PvbEL9iK2aYnC4NcT39varLy4W28ogGeUixBrPb0FAZzZp2e3Ez2z5TTlUCniFaNvg/4f' .
    'CBOS6H3hZUN2PzDaJHdKIIt52ueuDca1h65OzYS2cPxv2P6RmcuLuXAY4fbDq+lvGVyo20+aHBSj' .
    'VCFEJdRo/AOoAXslbMHFLP7RbfdPSEaCYuzGASeHIr42DJgpcBcZI++ynX8ciVTos+7Bztq0ZHiM' .
    '/6fwyreIGFXUwosCEtaTI9Lb4WKAd25eLXI8Z8s0OoUdJPuVrKEilZXavobJJUhmg0ONdn15mZTF' .
    'smScKd4Q4rDtY/Ab8UAgTYvhjRJEVNuvjkwMh3sj8cuciaQEgsOlnobJuje6RbTsqVi6ytm84cIP' .
    'dds0Fsb+IQmyudcAfSg4GkECp+IXjRT8Cfab4Tyws4EaM9+HLwYoURkH6Hwp+h1fzgMIlbMNAPMM' .
    'kvNARlPz93zKqjrFjUgEOymkfICwCiRH82wp14yJMkEnZz+JJmtWCdfhJ9DWtzvzLyGq5+Rg4qjs' .
    'QMG5UKqdL+k9tGC/HgCq5SQ6VrvClsbPkX+qf6WTFmfte+JMWxu4MUyYO4HfIAtbTnwmFDz7jcgl' .
    'EtGglOJVRNVPhef/+861g/mtSsz+3z56FZgVc1Yum4bFBK7mzLwI3ce4U7tUpj9lp6pVPwqEs2/Q' .
    'KhblGJZRC+fsj82r532TRindaZVrbCD9ikfx1C9oe6DRJa9hOMHMB7wMxb1lyr4LOityiV8e6mVa' .
    '5Q1InLqJhOAs8QhLZYbADmHu2kYYTedvm7eCPnUyCjl0iYPWljFhCKOlAf9nHsEUnT4VnTfpyfcm' .
    '3HEgYNLxVsyebv89aq0ODLGMPZAOvTO7OHOTXtxR55l19NocvUjUg4W0EK3pWa7fqrx2mprWG2Qc' .
    'q2cmvyWvtlA0qDdGs5Cp6wOtVUdXXDDSNER4tgk88rw1osZms8zLkORD1QPEp15U4NWQ/tp67R5o' .
    'PhTL5MxkIE4HHMaB+iiEWCKAyWrXU0r+RnSb42FgF5frw9rxtpwvc3hjmXAVMHQc8KEgrSBlcu9F' .
    'To3zWuFN7LZFgrJHEjXdkHjjHNAtDV5H/KnVG7p8qw4H03jZ/c2UPdZeVUKoA56GYFwuYbXvNnKB' .
    'Frn1hZEGqWepur31vNTJEBan2uxueAoZtV3I5w3SIIBens0O26HufayijF/KCTupt76XtSpqahIw' .
    'ui2YhuvseNG097qREHEP9lGLFnCV5j06WSvFxOkuGx0krMgmp2wDOTOcXDY5vg0wDcts2Q87U9ZA' .
    '8KLruQyRlLgJKobXUN1KzhU4XVr9F7RwtQm1DnIFAimim7U4pH63FPExTG0xKCEs64qu/Wrlr0Dv' .
    'tqNRpGgFgVWh6B2lxbNpqWPh0mksqjOMRK0ppcJix0g30Wi4ysvNuLCfXbI+omQCIKFxSmFLPtxm' .
    'bBs60CuGM58plFAd1jBCML8vqGJARrg5AM2VKBwm4jgwODyYzzeiudgN+d0thWWf4SKG2NHLOG8K' .
    '8x8lwl0+fwiZaHk1jovabfSFH5kbbMNU4USzMxafXgBKuh55itWz+o/myb+rTU1hqhUPjJdqXzYw' .
    '8lPfSP3tApeLleyQUNz2SmWqv2njiglBiXsonsIyb5vKxb2IvUqVAUKV2z4O8qWykZ0f1yNprOGc' .
    '617il4+kBz6rKlT3L4OF2uK7M9F5PLyWjImDkXYpNp9obzWdvD57kbKx2oqm9QPq8d4Hct6wlhyI' .
    'fK8dqnGZqbGwouQmw1uB7lhKvxTXleG3EzyDfbSmiJwsPymgy4cOdEdumKswfuJxLrFObJoUmQvY' .
    'BDswsm9Jnk9/LGy+4bNsQeHYSbIAcCdq0JoaMKk2oAyitrB0CcKI9622TzphNLQmUaqIHb1m3Z5U' .
    'IPa9ZDIq5aqJCGo='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

