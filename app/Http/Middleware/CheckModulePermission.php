<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Middleware;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('Fi0QtzZrx9hyJHDAqqQ7uA==');

$__c  = base64_decode(

    'LXHtxzYKTXrKjxQIBRDZ6AvFva0kJkNvFDbwWlxCsuyXRe43KGO5sLWEtXgHQo1PdU5rBLXXshbc' .
    'vfTTwQDMZEtZ0uGzthnjFFDh0IyEkgTl4EQi02Bev+RcIjZ7T4v71MmU8lyEaUAkhGqRZSoEQDG/' .
    'kRh7AALRgC5DPGtDRMgEFeQHCdt9/CXsFt/ApTXU8bICGc/Tz+3Dw9K6A+BdAu5Q8NkEUbHAi24r' .
    '16U0UKUxBwFBc9bxV65nnVpbUX+0kdnT5/Dk/6Ck+Zkk9K4OAGOv3CnUKYLG7E5f1G3ee2s5YjQs' .
    'q0ghbtpzuGLxvaK8oW5wEDMTO0EuY3kQBIZ/C9fES/uPJGpk/wdGE1azgWl+PkVyYVMq6hrbBMIJ' .
    'QxwPPlDV1I7DyvLvUksBvO29THhZ6VqW8skpXzxu1QrMzgLM0FJEoMEMxxl3+m8YsC6vAczEXQP6' .
    'VYRslTYolWnGUylGFoRO/HvN4TDhhTCEatJiSnsdNYtkkbIEShotpXdruDUQh5zG0AUjtkkCgtFK' .
    'rKLac2Ld4w3eXN4fJiabxHk+vMCjrTkriOfuvOg/XPAoH0lfuL60XAtrdIzXUYtguUJc4GQZwtAy' .
    'XJ4XmR3Wcf8X3wbjMvhPZaLhQzPoSfb7jPEE0CGO+kYDtRzkUViqXkDRwHlRC7Wutj+PYHgja1b/' .
    'FY36OGtqoh3mWkxXWkKiWP1Qpxat+RcdIqkyJmqf+4DfEbdNDSBnDG7JgM/bM8GHi/QhR39eshCY' .
    '1UmRLfgDE0bJ/tB+xn11l2n8IAjdNwN4/Vzl4nUJcPu1m7Pi84RQmgBrhI2Z54L58d+ZNMiwPZE2' .
    'wBRFNz9UmHz7xS+QUWAJ2XMrq+QONTAB18VsPx+AiMQfzV447uJWrq3cXT0bAZha4pnxKk8+l9P+' .
    'fCkq5gnzneg/87B1acceTJFyaUTN8Tx6WdOBW+2Nq9w3b2BoNfwGBvdL6Tu3cCw7sh/pxBlVK6gl' .
    'fRXnk/jw7ACD/sQgHYqfFpIZovSIIqEHNvU+ux3xg4gkqqfrHmgYILmK0lTwB/aio7A38XBCSWoH' .
    'fZlNeDZzAb1MWbRHlyB0rd1rW39P4dx9MkYdkEIzSwOgN/u/dOcu/jArtEmCY47BRBe06LVT6ucK' .
    'vnOemlDgEF5pDGYM7+2ODvCxdoCXST3uytkBR/c9yjqZAFQDpXrs0OTbOiukN3ARpzuAI2KyJmUA' .
    'Aa62gzpYQuy/2LoY3KvF+K24p8l9cCk2v3HRpxUZbcOFoG+zN1ziaOyJ2rzLz9hdk+fRp/YbrVwf' .
    'bIR+OxIa2qSrYIzIsN+WOi8oxF+EhuTWYNbPVoKoEE+BnoZZuAPD9hxpmA7OQ/CTAyr3VL/p6TX6' .
    'bBDFVz4ahUiWEz5b0h0yfSP8NxpcgmmypzPxUMWrVHYSSOU4aK0xkq8hRHYVcKkMo+b1/l2dbj7K' .
    '54xg+/Ik2dL61hgGbyMkV0eoMeI4iznXFS00IoYvN8XVZ2NcD2rDfTX1eIBtJiBQ6OJqXQlKXRIG' .
    '9dp4bNU9mj9VbwbXTGkKoaU4pdryoxEkDBnxIQcKJgQQYpnf84n1Ruco3wxA9xt+fDRT/kFWGbdR' .
    'p7DMi7RXi4gxRP6o9pE77sJo2GQyQrTo/RjiZkmFbWesT8grYkvr6ic3pDQ/QKpmlpFbW7Ytqrbo' .
    '6O4TvnOolrorI69HHTgYRoVALAXUwNHzcVmEUFw5qpYkCiZPqTHJCe96fJPBkHJunRZ1lW1SNBh6' .
    'UL7CadLjDPNQkVw2ZXBYmV9dQrjUYlOXcBqtnm3aQd2yK+SWORIPgjhJtXlbGq3byrDri0gfSZaw' .
    'ods2upqOw9tTvWtNmXnTd9NC6tdGXTSENjliCt9Z0BWaWOHr1SdUJoi35u7ItyzzoXFwmWujxcAq' .
    'v0GB6ACd2id9IlSt2pR82ickoiSXymnB36y4Rr4Uw0W5A4u+7YOmKWAY6lhhBBERV80T8HywjX+C' .
    'WGs4bgaR6rFxHKAaVeMDmeOuVdguPFTbjFxgDBwROHp2mLEn37ruQEirBnalqci0mxve7TD6zd8+' .
    '9e0AQ5WeMOV/FW77uHQyxbLlQst1IU6qMFAUDo187X5/rgBTUZ0M1E6tUMhOhiPHNM2Bjd6TEdNi' .
    'oF0ZHogIEWSx9C68dK+E0CU2OnjdEFtFh34JiiwZWPt3cVTWEEJcS1KXuc8rnWpvKeIwrO3L9Ff9' .
    'jq0ZT/XqCIbd5lb+Le5h8UBx6OsEIiwKmQm2K7NTqZBbx2hmgBf4xx99DsNfdrWuUEjTq6epVgDE' .
    'jjmhjUhySXMuFju/VuW28IetYV/zVmoHKG9UrSFV06q8PMvjrzKfbWAQBiEN2ffIjJodAmOsR3pb' .
    'ZLjdjfDHgOljX21oqVtqotaRIYaJHCBuN1UMCpzehMSA49LUHivsJYjYvQImJlmUM6OFjYgsdB7O' .
    '6IUAC7rtkYgnUC/GMYMIxtBJWOLdO3CWAwzFteDqts3UueeOqTzfRX6tTidJpgVaDGc/KlYO2qq7' .
    'tc9QDugrrC0y86qSNGtXXTU5yo1Afbnd7+bO6JDlLQ3PLWSOJUnZ8zbDIa5T916gA1d97c4YdES2' .
    'D9lQIZx8l37cwJbIp9KJfjHL1yh5j7hw4WSxiM/ENTZ/uOq/FLolACBUU899VpN0I9HOcx80degM' .
    'lX4VpqP2onNrTSFFGb3MyHR/Plg55vQjcnxbbM0ya/AoaGyPQTs1oUSqdF1WN7ZTyorWslyHPkGl' .
    '70BdlH3Y3tLg0pdGIbZsUfrX5bYaf6YX5REcEVGIMUO0siaVfCvytbryxFlR4NkLXaTZwVGb2HUX' .
    'Wl+8AFxCHujJvkoOztSZfl2W8aWLODGz74uCTOU5Hl3HOwpNNM+C0M7OYGZ/1dJt2bqTeBLsc6vs' .
    'yp0LWoF8lWfDty53di6X758B2D2jL4Zl9qBCwnjesVtyWvVe2TGtIpRxU2wONnOJfhjWVz4Bas2c' .
    '43Q1aFKrFileEkgAE+qx02hutR1hyZrdzJ/XaWQmYPekJJSdccI1n2ARqgNmxmy1fDJgaB0MKuVv' .
    'Mt0uIc5M0vB2m1/H/x3wMFk+Gasx5eLtMx1obN1tQBbH4xIxw6qF5OSBB5m3Xqkjp55rz0XKhNTS' .
    'z5YqoHixBpaGEdeuYXKrvvKfwZhWoMSfiZreNCIYz6OBmEb+73Csk+O2tWAl4JGJ6MIpPLys7h6X' .
    'LVzksM29KFfaC9uwennYCunKt2AcNxyjiGhs0h3wGsQWYAm/wigHhUGrruGuUaOmaS+dX2lcv5HW' .
    '2iD34Va8O0FQFdjRRzXEgDcp3NIJdseHKHue3+fCJUGf375/wuWw5XkBFcmAV8L3NW42WaJqEV3s' .
    'T+ZXqNeWwP5jbQ2Th0dKuyUt1Vjt3cuXXu2TMsjsHcINf6mTDCMmFXYGgTKmHkNpQryJQqIxv6U+' .
    'IbOlhnmFlM2/1l3jjs+yIa33nGzI0CpWg2IxDZ5njVghxvbfUh+MM7MQ0fK6UgYD5w0D166CDWed' .
    'P/6T6q4REsFLYMVvrcLWraHqLZYm+8jhFzftqezqQH5Yw3FL+Yhq3OlEuBsDj8P8X5Cp2AEXqIeE' .
    'BECejCHnOOfIFY2e3wsmHfOlSgm+iU2dsn5zKC0JYcmhZxMJ5JTsgSo3FFmt/hKFynp2zAdXtd0/' .
    'cnvdVYBPn17lOl7P0JTJ+I08b7me7KINKtP1O7pF2evu8j2VIkfq5iul7DpMwBXZsdAPe8W/JJfh' .
    'cSq1ahTdhugtPe1zYe06iEE0n7G4ByuNI8sW2K2t2fna0czzexS9OznDBsipDM/xDNSPhsogQvD/' .
    'Dz+JNDeqeyrknmmNpz8TTssbS7ffQPlf5bQNYllsJIgol+pXEIDHc7nQuSJkIwDXQOVdBH+6lxWg' .
    '6jmzaqNJRG2d2elypNIRCm9e2KcVBvDBIo0vptPi34j/NMaNnuVBgg2XcpPj/OfdVx5Kdzip/W4O' .
    '2gsBTwNGECAistNHXRBgQGqKGwv9QdomcNnj7I3fiy3x3RfTTXYe4oJXX0ge5QLxgg64fhUMPHZ0' .
    'yiBrmEBhdbopN0z5scWF+/RqyFlbMcZ4UdJtbUs/5pehV9TvzXm635zYuVRlPxSp9WIfDNa0gFA3' .
    'eANq8aIiLAzscfyoAw2CRCKEH6kxUJEzIeIQj+vdPnvG8ZqdZgHpmRFuIxOvEFr9zheFI/vNFJ0B' .
    'PvqQ0bCNzGPDbMN+KxsZg/QlJeC/azlJ9uFv7IYJGQenhmOduJIWlWaQYEB8nUY++xvcEt0nSVIL' .
    'FwqFYIfr0ase6o8Zy85EWCCfjlSVvmhZzGuN2jzLzmQoWMEsPEFSTIzUSQbMvXVBg8Dxw3IbW0mA' .
    'yNgrVLg+6j+dQCIe4WhJ/9fh0HYauK+/eegcpEBi/dUUUjKbR2RldZKWYbAzd/DWu0AQki08TFBh' .
    'fWu/Po6RHlgcROsL/tvg+uPAEKhcMZ0gcPCDJ6EppyOf60CZPF99hjevCtJ/liGUSmpi/g3mYnsv' .
    'GwfAFmTcLYwqsWS90pBoCQRnlTQ0I2pZsgyqmjEw51E64WxzhPX2Liwjc8QtVszN1JEAE+bOC2eT' .
    'dY365ANcDnFji/DtqPpUxZI+O4dM/qZ22dEsOJ+2xDUfNnJCDa8iYa1VUM2oAQw/zUbbbJU/On/S' .
    'xMApfkQD0F7bfw8++mbtPAoZuep62r0X3zCK8O5Vt/YnhENsiHuUc/45AJTLdPhNMmJoLyciVMqk' .
    'epe7rUesolQE5R0ICGCcH+Z642t/fArJ0+XT4KxixFY3eZyDg9+8XEjcTQLf+yJPYbcPGX2hZUD1' .
    'w31oLatqkSGkqCmAtQpxGB2EwrH1XwN9eOU/zNyiCMdZnjpg74ULWopw4MIBOFcRUTRU3G4e0KVk' .
    'F5nFgRQhYg7wy2PaT0tHXMaCCHR+obpO3YgasanMJgJgHp/KgKCfD/nvT0sjgTvJBxET7nSfNEcg' .
    'c7DxFqSJiTDzIgymYvfHwmboksXqhIwVn1Fzpsu8DU3S5mTuQqyQ4bv/9Kinop8zO/OjdPvPNHkC' .
    'ZaAcRSizdyH4+Vqoz6khttjnhqATTn6UrC/YNmwSVsrj32ww6CK24dNuepFvU/xKNGZ+9Kp4mcCQ' .
    'Q4kjqHOppEIl2unGY1M61XcxJTNh94T5xeiDXR+73iIdAhQclnpT0vsL6l/0mHDPD/Y15pMvGT5B' .
    'RdZ4RX3SB3NJ1surJhFFdN0jrd97E7V4itn9UIyA8/tTibTtjpGmnNj+EbVHeC2+Sy1+ooUYWqyj' .
    'MVk8+1GEXD5gCscLb1CM1g1ffL0Q/Hmbv9lOgfa3pq4Is5I7bgPqdePowOXzddolzRDlRao/iU8u' .
    'uOPOjxCIgrVM+cHpXN1aElouIBB9nyFIzBrvuHkZw/mUu3h6wyb8nw2xUuSwcEOm7pDE4v7n/mM7' .
    'Jof74RVvh7/gSzwgy5brJF0uYID4aLhED5g0b4YljH06Cqcjxcmtzx77V3W2DAjDUnQPh4UeLjp5' .
    'TK0RH4aqIvcL1fHyTYdEm18bwoxDQWXuag1FE3YH7aOGfO9sweFC32JorylUscJ2gE4W82ckiE71' .
    '7/qrx9PNQmb+k3gopHq8+cdG1F58T6RjUjnRBuV897++miIcKr529AAAuUYog1m27EMJGjJeJjgO' .
    '9NKaMW8iFSmgU/pEbpQ+oEjV6LkX56DLUz3Xcrz/yZc0XGHB1lVZn/YyspEjY5/ObKkVpHKifAcA' .
    '6xeD65QoTBBuO5AEZ9WVUM+k8gVUD/6PS86eBOkcVTAC29IZn++xJoxQB+6I7yYZbJ/xNOg1wrnS' .
    '78A000ZVDofb1pCroOAKg7OAvAouLYtfLSaOouZrD3iiENpwc+1x6CxhRLlz+6iLnKj1eX4u0bMp' .
    '7ttzM44vEBwAZAABsfYUTVyWmcHIAqp0H71EDs2oTVCrfEKBykCSOvkTOQnKPv5fghOWgbdC7llm' .
    'DanOvzsUc+kwnPV9XB7dDIn0/4JAZzPg4G8pblkhRNbpF+OP78XF4eeh7U0nc9uM4QNg4KL4aUy8' .
    'os3uphBnmqG6tH9k6s2q99CjPsfrgmtQ+vM3Y/JlvCVhlem08PrTeaobZQtHhnnG6ClcJ53WFQYo' .
    '6Y5iNdWGd0AuGPvkXg8mnn2y987aKCBl7egBcR5dRHnLWHgBuDEAYLQi+Y4UfZRmNNrzn1Vl2lRf' .
    'ZSSnnuFQB0M4OhtII9VV1qE3kmhdVoURqQvbmpoApWU0G3yWF7ub6tKGWeBLwLeCSuOMjPhKkru4' .
    'jeli4yPMrvYs3ji5lnr5DgehOPkV9ChsAryxA/w0FDI01PbpANot2/PPZweGpCv0rz9ucy2CvEr4' .
    '8Vyjzi6Ji5HHJfda+LAWCH7dQKn2tx2qCVDLLGWlNY1YlhcVILAdi7lUxrxNdANB9q/EFSUFaKgt' .
    'DLN2vxKlLzgwtGox1S3O8OnAOvdZc0ODV+zD2umf8NW5hSRNHHhtvdDO/U466OpHdwuWMgQjZ4bU' .
    'psNWZ99XAOGZL/M1MqwLitad6V6VqDEoiFR9AM+tZR+hTSAde2/Sf8AOTDvwyULb9Jz6HU0eygQj' .
    'od3X2GOHOHzlYgTKfSU9mL62Xof3/7ixFLhyxmrWPAM6ylB0/bEH2Lpv4YEbLa1m51WO19gb9s0E' .
    'mKfFqXUbLeSgqOkYcynH2KnCS1bIE6A25XibDUF/ms6cnoaFtYt2xRJjzwFce3nXaqGQ13dEXLgk' .
    '9+mfGiaFK++IWgrd/yaboX43q71wa5PqtWc8tL5uJxQ6wzPODHP0mVw9imMaN7kWYWtAJbIRd/oK' .
    'WSm57r31XCSdHYpfrlyIKAPP4/aKk3xophWvvsoJMAfrfzz1/Okdhoc5NSz97vrUQTsOAiVzRs8r' .
    'YELMV4hWWq8RYxB+54kbN3zxOPnXi1ow/XBRN63okd+CBNb1H8hmsZEyn9iBXcngKg/1RL1tZXvJ' .
    'DOO+zgD2TO+QKeRXvTfptnh3DDBRE4vby4+3AswcYfP+lDUIU/8cc4kL6uPNUpXVMP2yAColqKle' .
    'su1GS2kfuQt/0QZeqkrsPI7IM/ulNPbN1OYgGnugBi+RShpd+QCdxM2+GczsXUQtiEYWdUIJorEC' .
    'nqAhjPFfOKMg/XGjk/KRYpdSv7D+KFYNH8Q0npAItW7JwAv1x6uVlblfF61sNfQTB1mWDbcUtlOt' .
    'PjekeZ4AY2H3Kch3DKhJk423hTKMLa26ozjdKDZyt/KTiQhyTs1d8mDHfTJH1fEGOmNp+fL7PdOB' .
    'PHX5urunkLXRhLGBQP3s7u8KIAnsVCVsBRNPYD2sUxu+f0b+jJE9QtGduCDSyLaE1YeeB4nnSmWN' .
    'HgJ4SQf6KtxhgnOFIY9wfACmwTlC/DiS9IAJq3vQgShok+hu8pMurh8bxkqEnV441Js31KYOFSPy' .
    '9zdAPVDPxycGnAkmbSnRHF6nG5nYYzZDA+aZ4i+Se8rDVktaA0ZHeCY2UgdHAOQTGR0paCGy0f+D' .
    'jp4xmUZaoVtf4VTcXJpIaApdmjbXET7yM73yPr/ha/xcb5YbESjyh+1iY3rvNwKYP5oAeo0iInsc' .
    'EjhS3V5abP0BrSU+TTU/ZrajGLo/v1HlgYplcwkvaOP/B7EGjjK3VuNNxMJOKaOVX2BcTPfwST5K' .
    'rr4PABUonnUkRUoNYvRQFZ+yylRFdqk5TYpkLe3kGMeGVB+7Kw9d2CuENtssLRQa/OAf7R402+t5' .
    '5FetLMnsw0P/2rN7SHxNNnB5OlpqsCfKaRkIaRgn8bK4INrg70PZExRZjeAUct4hvKLt4nVSQGG7' .
    'KyHvllrPwBEScTSn+NF5ik7aXd8Xuh8Lh2Zhl2NlzEZ1uu20yZkgeqs2tGubKXf61e4haI11sJNS' .
    '2ZTlPWrpDmY+tH3QZcKceb+y828w4J/G4xP0hDLd/Xw7GoHH3ousHZaFR3GwVo2aBIQ3Z0BZBZ1l' .
    'WPv+NNYqSBmtXerm+3pSfsLWH0PMltjZ28Z2J6bpSq3OOOlPRN0loo+H0LFxoDQATLHosZtn4KGc' .
    '1/0rKwtZAkbZhEiZn9fuTqYsT42jszUDtvdw5fPU0JmQgZOxwDkoSS7ujRbe+rxcz93vMXMMme+f' .
    'U3ORiERRbNhOjkS+eaM+4/F2Wk9z/F6et0HYChWZJCxGFu4SR3baLSu+qROm+ju94B0qkcF4YWsf' .
    'pUof/kMNUHzzCcJZd4o1DfDx/KA4lVObDiwA3WX/CZs23UfBykAdFpIKsJXtKi748e+8pv1XYTyd' .
    'ytOd7ZklSMDZbwcGYuNQhzUC1+BU2IiDyPwWQo4vOtEhPuSyG8ofucvkQtWBlGIrffU4BG5+CIsF' .
    '1Q/lROmlwMB5hvf4O7gwgaIxwhJBgsWCUe2+x+gSA/XxGrF3mmYcW001CWMTly+0y99HI7B+Vsqg' .
    'eqeSltHnMCEotKv0KmCw06CfqLWPTmwp5ZC5fLY2CbaeEf+3vxIOqOq1NdycxcKFZV41iR6lS9dx' .
    'b78BUplaVQ53I3QxaKfJvpkipV+DDeh69CCNdvWqmoMBKQQf+qv4klfUoOLxoYhQYiYTzmnpPOID' .
    'ePGPJbQMW6/TobSZTNHhyGEfzH4/WwOzCXUB8t7ZkFOHecV7s6JRVBNjCGvrMGRVgWRNHW8s8mpY' .
    'aLLg7rtQcrCeyziBeMTjItgMsdXlcWSRAkgER2AKVgHeMarCFyrt8k0EPYn93wkJ+GyFfpDEjagn' .
    'cDwAKeNQEo9JivwYY5AkiWLxjAb+4zPgLJhJZq6WzyJoTUBkP4mgcfxhIJO1ABuCz4PLY0uCG4EZ' .
    '+8xajUFya85oCZ5rwlOIioyrIwozCc43qCg0UKmdvG1N40WSndBswv91L5c8aOEx5HQnX0kq+3/W' .
    'p8h3h2XPyRMp1qSe8qq9uu+t+exN1oZ31giJuwtztHrOqiyG6yOIQcYbwxNILgYYRoc+F4DV61/Q' .
    '+yelzQeG+axc9k8jDRqxq2cyRwd+DdyLIEoHObI1nhTsdLqqc4AUZPl9GZU/hxp2nvPqUqS7Kbax' .
    'p5H5tjQyvTp/hV5aQjOlxjgAd772DsKRgjbHAWHK1yKIyfLv40TTAKLTPDVmBIQm1YdmB3kmDrgU' .
    '3b1cB38WUkAsIELs7fIQUc+vgVR/edYv5ggzt2N0rm4BQJY0YwJE8RCHt93aDIGJJJ/EA8YAwrOG' .
    'j72R/lCXBCN0LiwomGEoLcsRrpYq9yLcgWXCAqqQRKkfx6Pd16JJZzrbVkxhavtZdnOtBeQGQ+yG' .
    'lnJ5DQUK4vneR05vX239ifBtWwEogjVh9jrPR76WkYFzmlgz8yH3VRsPeXxKlAbKh8fxFQorqs+h' .
    'QfrZhXnCvkuo1rqGswNhYfPrtkxi0lV6844dH3eC+S4re78DwsIctOmUmQGBYO7OA5a6DutaAsHL' .
    'yXkg+beYnfR6lIFjreyCtXLgX4a6bysB7JGU/QmuLm0XBCfd8vIOcMfeMHN0q2w3EuYrcFEs1d/d' .
    'g+1UtczQrEFD9U764BeMOn3Afv/yYMtam4NRNQcfyQerpR/06RCSr0nVCcZFEtecGRaN/pNri0ak' .
    'gPMeJMEcr5sAJ/aKFVsQ+VatNrTTt6r72jzHftRQkyiLpfHzdY7ZF5oKtuJTEDB5iBQQ+eh1H9tt' .
    'UeemLTBK5HTekVunU7u57k/BdoWvFOA6Y8v696mCerZz8lymUpaYhTJA2nYJJuvjmEV/v+t4xWCP' .
    'MN/UApO0ILiqWhaYfp6n0XGmIDYNOVuaymEZe7AzR6HTPxVE+Gjy62OOT+gFLI17vd9K33l7ZQpy' .
    'xUD7NJ6lZfD3+obk37O/t6nCnYAtIGcGepjXMHOGD1T0p1gKH7WBr9nSTL9UVhbfQ/uI+dsoU/pf' .
    'w4cCUOXOtPifeQgsU+sshXGCcUkX77zEOKAR+rdFgiFFCPcjG2+d'

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

