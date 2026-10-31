<?php
/**
 * APLIKASIKITA SECURE RUNTIME ENGINE
 * Hardware-Bound Cryptographic Shield.
 * (c) 2026 AplikasiKita. All rights reserved.
 */
$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);
if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }
$__iv = base64_decode('l9SFhYZCrAIuERh4wCvjjQ==');
$__c  = base64_decode(
    'PrGT+E2IfFwv0BG6Y7jTPQn3LBuXgKi9Cgx42salwOydlYcSc9VjW9qrcb0tkmoi51sTKZY7wrXa' .
    'ZuroqVkbSFG+jxnLFFcC8tm5+DTofF3n7dkxCzqIeAcEuys/WzDzONoxRiLcYXsf8vGBI5eij3vE' .
    'drWbKcv1LyNrkPQc5jLKk7zB7nijakJk3HeCVXHAziHb4R+APmO2rqblJn3T4ruhgvRRbXBPTA1c' .
    'vD3JG/zZ5lfcq6cyqhjoaizyVYSUjtwo/aFk2sqjms/UevZrBxLwVs/odBgxBtYj7A8exDmQkxqH' .
    'dgLkzst6DQXbupGXZdEXuYGALLz6DeuuCKrkj8RNR28SGy4+py8SkgVL/B31bX8mzsoKLNo2h9EB' .
    'QAZ/OPPNCahinEWbZDisdjrnr73+0m3dhWPpOufwTVe0Wyju4xPJZD94gCqrFlUR4iyBgmh1lQQF' .
    'B0w84uP2d8Xu9k1//7veDxzdq+srWl8Xt9B2HhBY6kPWzDTbqQWC5X7sSvHzZUHgEXeKChwtnPOo' .
    'OH+kwLi6/CBqjTRhd3SWAIqmCyYnLn+z9MiaEVVlnzQIjYK8CF8VwYlcCIKGtPHWp6piqB3Ls1AN' .
    'QdvA6h+hX9HRqZefGi81GWOCYhghVZ7IYbyxpP/Me0LTG7aMwv1l+scPDaMtC/ZaCSgmYrAs6GQc' .
    'Z1dErNmdF6ptWtVeQiMEmqpylyizUJTZkBL6c+hSZOhQtW8G0EDZc9hLgkzqVSq4n1BIyzqEu6OY' .
    'UV/CnwP6pxsTiWIIMkVfghCluBnFJHUFKVbtVeMKnbV4rrfiw04ossXzDHwdtrpVz1wfWpN8sWQt' .
    '6/DnJ4HvPXakfHSi1jyFLQETJbLvqJCv9GcYzAvo48pzFaL6zh2aYoci78/Wqd9hJwGhDISxvW41' .
    'N3oWvwNzPy7qK9xZUHbhYZXTtzVaC2eeQVF++pCeB2lFtZZ5NTMU4dJ3/ZF2WzhOq+I0wyg+du8y' .
    'iHiFw9rdV1BDo1Nd7zHpZic6FmRDntZobVFeecIqfHAx1PJyDkM2TLYowKR7SfcZkz5a51cYSgA3' .
    'F/A3AinUBTxNLcfkCfi5sFeHjwbyyFB8Jye2hKYkVRorEdK7BpjpzxCjgooo2eCkK/N+hzRe/VEa' .
    'ky/O2dwFgjjRoLRZH9jIPnDK+wiHYhp0xZc1npPcAEoqGzfMM3icpB7VlPRSpZeOzmi3jjMURLhb' .
    'GiM/MCIhWIWccxZZINJ0vUconX/C7Y/uIAUa1v/HosUfzc09RY5MqjZY4QOxPmuhCGCRbDLN2geK' .
    '3GPMQRDd4nhAdLyEHcOU4r5qxJiUG6aDcyDbgxX2Wvr35zuJz8BzX7Weg3bAyDa1cmWGSrMR7TWy' .
    'MTvgbJGD2G8Kzwm1ozA7w1eNdH7sgB2Qs4c7BXOpYYA0dW12CpQHFTuN9pV6i06uFNrrt9IZpijS' .
    'SAn5HovMTa0PmWUfsxPI+exhaWgpt4Vpp40CGU50b3I9ocaMSmbDrqjNctzBB1nB/JqXuR//HRA9' .
    '5AqMCN8ZZXoAlf1iW34FgYkuCUHom8vqCgu/4osdVn14ivPvsKCys3F7FTCq8dma5s9SJ4KLN44C' .
    '6YIcYuanshUKTQr2sFS6cjIDQj1DhqO8Imm1OXDM4LzCRekEj5bArBm1dnWWYaek24CJ5wL8bwIu' .
    'z+OB8o3uUEL5quMRWDeAJeXdD3mqZBPEWGAdkDBSz4Mj/Jb7SoyGDf423/C7V0YlxIv/dBseTlfY' .
    'lHZF90FhyX9E0S79Y7nErO8uRe+dqDczTTRDMOiQe41PhpEN5M6rrTOYVeSN3z7ZiFmf5V36QJgN' .
    '/R0MOa1BWKjPRbAquAeWuyew2IejRwyYXjws6B2jAv45t2DojuezRyL/+08Dj+twTtKa4PkH0cnE' .
    'LUvAFgbDNR7KSIF22jtZEMaI80f5/56/fwt4lAQVAQIFaP9ZOzSGn8UNfdv9skn/tgZTYLGgXz/H' .
    'fOIxh1YI3tSGQDFCr9jvcEB+4H0NVGSzaK5kJJ0NWO1+2QhtzzYaQhxMwE3iE34WvP3zyjVX37Y3' .
    'TyzVja54BH96zAw2PsYGRUmcQmV2qn7lQIBLVkTu1ms4eoJPJFA5foOzJgXT9bnUMhEw51+tmhCQ' .
    'vIBYLDVPxLLxjhVKAoe0tCAFAXLM8cQZPq19MkNo1wPFLudryVR7yEa0cBTFrC3Bcmce81x5Uyvy' .
    'NRQlyLrI2kKHUf3wIL5rbjTyiyyqSI1yEEWDwZkKv3W9zTDR6pK7Y1D5/twDI764OG7LkdESj0Rg' .
    'P9RBlSBrtNqB8O1MkBM/jVjgLGoSgVBHJIRrDEPm12LptfXon+bKNne+Nohba+gjPNBOhxltBozS' .
    'aKCFH95TwdKCSIN+XxxIEvm+fNi6uL9AOu3bfLkRbLW/I8pQVA+0kISn5e8tpnU8kq4Qo2u+ejpZ' .
    '689THif/NR52FKnqyRud6+dJbj7qVWiIVtpTYHIRdP9/JVUnMSewrU2VIfsPkQBserO5F6+IyDLZ' .
    'icDTh5mRpocISVDaaJItB9OfSBlEHbRdzaQbcUPugfWIqRYqBT3mOEDPolbjwqEaKlrvGUeKtvir' .
    '1KGUtL1Fa33yhOZd5v1BaYMLomqogrvpFWDw8G6YJm4YWTnPEIL7G5vxQYunqePU+73gFbd5pO0s' .
    'gyeJfz5zCe5WRWrhMN+eI5k2e/70Mkf/FIJz9/xZ8/kk/r8E8KNtaqVkf+o3y+F8QdXAzzR7iv+A' .
    '5j6o71WgbvW+kMIIwppr4bPdRdxY6/4WD9RrxyQQgasQxd8h5YM9hxpVMfqN4xOAZ/5Ts2CKYbUt' .
    'pZJJ4n9ny9TEMyiBA+wnYB86DvPhAI1+wjLrM9EeUkbe7TYIDxHzYmsvOWQrtJyQ7YIAkedh3dGi' .
    'Ge0uyynhsTy/A8uBssmAhok5/7SPHb3u//BDppq+iukllgpEnpal6HwWUoQXp7PnYmzI3/VxAA2V' .
    'Yt3CEfkBKegbgWnd0mNt5Q2ixHtqDCIaC9Uc+cINHMbCuNwh7AUg9Ku0CRatKActKdLJXScysOWC' .
    'JtYw6TMbsCjG00W0Hdqy5sAw1WPYf+sEHxYVZxJ0I9c3KDuW+/Atn49CsDoWfN3BlIlNDQ17nUDV' .
    'saOBkRd67GE1H+GuEOR8FwGJmIeufYiA10Zoj599PWqAdcZlmqvVt8z++hEPFG2T9h2f8hWdxoqy' .
    'f0lbn8oyJ90SeXiYd1x3Q9YzbO55SZFu6WCNXg9WAkvEgyrlqzk1aRT3vUd2ck5GIZD0RPbnVW5D' .
    '8N4GD3eR2u7CKXVoLQL/MtaR7C4RcfewTifPdc9DoU3IsIJ5OdXq+RcNWiR1olJ/i0CK0j3X0tKs' .
    'eDEKQBEVWZ18qZZqU6p8h6VmlnBwXJDCVEj72yzBD1P2mF6MmTox62WLWcJ8VdeCSX1IenMmE1tt' .
    'feZxVdjtx3I98sGD/sJtvcjVOs0BdPkq1j2jNvs5qqrPusNOEMnHxslXfYnOgP/e3S1yRTuELUbw' .
    'uA1IugASoiHAfW6sgh9MjwzYpt2wTB9M5SJizVFXcf0MiTBnEsJwKVWr/O4AyzU6xsjbMVHZdkyW' .
    'rCy2A3iIMUA167DRFBxMpqmZuLtU9R5P5e2cDY/vvCpZDLj6l1x92qtuxyM62erhiPe8E5NohRFI' .
    'MAmRSN00aNnlmXWYj4g1guaq5Owd48BXprFA0qieOtwx7XetJrirDDjD4AlpPHZ0Y5cwPxhkFeyV' .
    'f6hcszI/hfLEK68BeccuywSTh/+5w2liHiIXNcL2AtbnPzxqoZsiEmNEHELLCJhq7ASAU0PL3fRt' .
    '5j0z+n291Uq87VVvFpja9Q5oHkglmnQSmtKxrn75OMu0kMwtChhCLAFpHbpzdmKCXqGy3H5UbpaN' .
    'c0GjjfrhiXkt8DzJd7r8rW3I3HFw6BD9ZgoN2/6yv+btaFJpedx9wVPTC7nKu4xM2uJoTDWlyA0m' .
    'pnZX9ROL/e3ASRzWA2lAsIpMlfnylwA4Sxx0jXskG3CsEf5+BSZPRldPP5Z6Sh9SXQ04PBTz+7Ol' .
    'kL+5oMJguypzok6bHJ9VrdQBbgXoRAe458d7lcP+0ib0aj365xp3FK5tn2F6oTl0Hv6GTmvzrS9y' .
    'JX7onDErqjwMTDfYFXmWPBfOLrg2TkJV+Ka+9W6Zx1mbBK66Y7RgPn9CWDMKu/tb3UrWNTwm4YFX' .
    'diw9FTrxuHmghwDS0oKueob4l6Jo//aPMoAc/JS1zNkIvj4NYas7WyNabyQKc2kO6SzIPJQBDiTJ' .
    'O4Fcl1E4gepYzCQEHV1Fg9D0Ijt4CNk52UxAvlfPRE3dELUDiuZwQwdeQJ8fCTQfvGHLy0phGC+N' .
    '0InrmZX7O5evUq5lr0QkQyM3Z+dbDfF/1x542Y7P1EPXBdmOCuqhm71mCNHYNwj41Bk+nm1epeEp' .
    '/ZHKi+7ls7uW4PN+tE9LQDA765M4jp0VaGkm108ZFUEuyroOecOddhPY34SJO1kL13Y1CUe2ihL2' .
    '6xakZOSPwsEqvESc9Io+HEO6azWnNpDGQZKWiXdjrHvIOZwCdnoxUEeklUxNFpvIPmYm6x07ypyN' .
    'SrPITB6kbmor4J0jSF4v1d+CBs+g2ynAHmGI3q+LmBvnWa510RxplYydPy8phcDoOCjZRMtC4bQi' .
    '9+6IkVgUCM/OfyHpb6ROYX2JqawUUgLsEE53DD3WUNwaCzNL1lINtm27h7N1g3rLNH33s0ZssCTr' .
    'DZfj6isPMz9xBmRHLuda9BXfR4BG7hFmOgBuWnrpd3Xu5G6Q+Hhyhhkl3ncCtOft1ZNtwy+MJPxE' .
    'BU5g0EExx+g1t5oGAIV5PDmS+Pccjb0lvdPwkLwMjifbcyiweqteYEcCoZoAFnvZGcnz37GpmAAN' .
    'p4hRmT8od6iNXTSR3waOXOeemcALwCLzn4sMW9l6HKU6m3ttXoly1sXE2h9uRemsJ3dSaTgCw0sC' .
    'cbGDeIlxXOKIXhly+5KXr3HnlWqu6vrntUFkWg+TwzJeaGt/uBUVXiqDuvzDP+XdeXLv+6i3vmlQ' .
    'k+ly5qiY0uMECmJTCdZ6tryJDigfsNvR7UYCMPQbUyq02BwpqvmW+TKl+8LT5kMYl3vUonPE0SS7' .
    'QnntzSRBzpVp5VOxgG2JYNT8pLU1eVms54J2QJhTI1xmvW3O4BVzCf1GGl0+UuLWsGLbcTWhe7Ll' .
    '+tG4V5Ec9pVaRfkOEj+vAseI8+loDaNLZpTKd46RaG4tR7Rve6tGrtmhm4n7DhMSCgpAFQfO1qXl' .
    'bJad0BpirtwJGCusjE8GvAne12efRxuyRrA1I67zS0ZnvLVQHj91DdwVXFivPV8FYMXun/nnTr2w' .
    'EkiS/RocFYOgeBFpuaNqwLTkbTXu0ioQ9u992ttubJ11IF/2FTrCiOlJth1Xm0qxH5i/xnJZnnR2' .
    'jb34NXnEPsWnnIxT/8/lmmdmgXzddcgMmD67buspMX0cRgsS5/92npiRo9v22OuZ9afyfkq4vCYW' .
    'T+9BxaE40kyeCos+ACd+/VADI0VauPmrHM4+aMP0IZwkgAIcWwP/4Z2mAw2feiHoL0Xc+KL/KvAV' .
    'GrKN2yTsqNQlfSlNwPt5RRx8kTZG5DIDvF8xdJeaJwn4f74/sJulLovxdVwWKZZHDEM7uwQmAlpG' .
    'vTVoVgpaKHELN6sByzMmEl2EvL70vbqwgeSa3RiHzi9GAS/FGfC/T2fkXEAmjtmXGa3FYZY76aEF' .
    'jVvSWYi5uIahn6a/VcVsjLjsYFLrrVjJe/fXZbzRh9xjrZFlTxq8RgWZ7iolK3MCDyzu5dLMgAXL' .
    'Db6bhGtcWjXRtZMFRciqtDPcgkovN6OxBcXqr9aCI+kV2wD4'
);
$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);
if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }
eval('?>' . $__d);
