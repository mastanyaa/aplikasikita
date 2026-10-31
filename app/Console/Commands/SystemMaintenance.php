<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Console\Commands;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('QD6jEg4Om+kBCYYF+BgM8A==');

$__c  = base64_decode(

    'JSCG3IuXT/n47C7FxOjlZjhZJw8R7xiZ4Xenfa9x+R/uVshi4Z/kWoVc3Rlzlqw0otS8fqg+tJNB' .
    '3y5WEdNZ9r+Xg+jK6pJ6DfgVXUSsBX8KeyVen/aYxhJGaTdDt3c1qvlBvxRuhvZNqDVMad5BuY+b' .
    'IFpnasZ3w2sPTrvEMHIoYke5vdbGGFK0WTmWNTbcOZIahforxztCJ/5ep4kfUPCZrkILL8xKuFRt' .
    'qVDVuMYDWwOjOOK8MG1Posw9GYYUuqwRi6sq6b1YhkCcgmVgm6tbhSAAY9OXGeW1N2zmDfb7DZO8' .
    'dghFdlHRaUbKUGusCydGH5ScW/bm76ayexNSADiNUBU9Y5J0LxNJ2sDVBnWKTnYezjguwC4vOali' .
    'TILj6lVcZePQ0kRVU11J8lkYlJtRnIGi5+RdEqp9Vu7X/pBTLARwkVQlWqGfPF3B8C6W3GjGeBKm' .
    'SFFl4ZNKFsqARbIYwkSt4kfMisXj68J02PXT1ogTj0q3ZOXFytM8lAVJrs2sdyHMfszfWn4rxRes' .
    'eWyQx6mWGSXK4l1J7TUSuZFL7AYFBStBsdGtx439ZF9lJrUIhE7QjS0AcxzD3znNfFhkqNkoO9c8' .
    'uPvALkHFoZzfhQ9eRKRC8u727KHZOCg0n/4fNpj2TwU0GaeTB1onxNnRt9F54yyrFAHOz+5kpNck' .
    '0naYLop8w0ab3tW8u1ulYcf6zuKF8izUs6SrKgQAIMgfoFiCGYEc8EP8hUEfV8TtwTKUMNwgQeXU' .
    'GAIywFjH5NEZFmJR3BbOgwMB/bnomYCWbcO9QhY9ZU8L2C1cXCENbz50I3oSj7N//ayRJHYMrCAn' .
    'BkBH8U2Wf1zlTW9k4eE1KvGu7ZY6lzm4LJL6ioWONzRflEBmZwxmp/IBTqJOiq0yiGKEsZ8GTNNy' .
    'lTuLYZ/3Vf5zphuynUlk+w1NY6rQH6bLDOUMGfLeoCZC4EklQBsltOZKlKN/LL/Pyvt3YZ0biDih' .
    'tQd4wXNyqlHw0g68FlrvIO0c+5wrUJW9XFAVX0zLnlIpYIrKxjp6PkGIR7wxlh6yT8bqgKNKPjJA' .
    'IOY0mYk5ww6Nqv9qc0KzQ+ez/QI/qkTTZ2ZkZxSQ9EWrfihjCiunLMOsOYi7+d5yV4zTWeg/twNM' .
    'Fp0dB2TiEcM664t6n5GugkD7qWGzIuFpcQ+1D+gkYNpJlYDW5JfvudrfR7nk3eZrT2vEuxuZqzLL' .
    'hh7Pi6JSp5YwvMD+IC2GJztQtzCWVb7jgdiogp7xmWXNzzSaOUf8JYZPK2e2V9Kjhx+2Z+IkmglK' .
    'n9M2FHk7MuyuH73e92Kh30HhR9bx2Xnq4NPnMek/XnJOQTAiPySHsAKWrFUnJuIGt5mVTEkf4G08' .
    'I9RG9W8oFkrOb+mvAq8lgSnx/s29kxsw5DipFp9oDcQ6CCs0iM4e4MByngdL+c19ayqqxkLyvWj1' .
    'ZYYprJ9v2IokAJFx94YeJpYLVnv0/qd/0g6zxzk++EZPMjtRuCR1sJGqmZOYAZToM77tSVD4s24Z' .
    'YUjFAfocg6VeaWLgL2bJFPNFHPcJ3PwwFtHWwuzlurngPciwDDs4aRFNJ9fgpxRiqVK/zqRgLell' .
    'hHiRF00YsFiojknvTtHBbNqU1aXY314NFu3PhJRumnZJjvjaMHbAKvpVuyjvijuSC7RjehjeTP62' .
    'daQV6NqPBzW06gF6q6Lrz4pH/iRppYrdStumnz+6ir7+HDYaSBJdTnimLktyVVj33ziB65QYOuIZ' .
    'gowd3dYmfjTd5vNs3zp/GIPiicppVVivP+YMXBjC6GV2/3JtCqGQob3w196sM5vPEI2esAF9BPMh' .
    'JTATfSZBJ/abV6hCfiRyrYpgg+oiwXjyIOmr7yWwcq2iZPXFb+Tdswp5ug5YKZMabvujm09PfKCB' .
    '7qtRFuwDMZPiTHeOR98T70fRY9Dsr5m1ZFdDjPGhfCEr8yhwZcWKCdEE7x+HgiRXwzjNgxhVJGMM' .
    'AfXl7q40B6KstUWMRKMEa1UAv/dYpM/i3tbwhqjxbgj/oDELioNPzMdPqVkeauaLhXaJclHfYIme' .
    'ISW1MMuyFvLRYFHqqMKYBt2cqCphwYwKSkB0iF7BSQeB83qEMoHKswUzou2hZrKFYzp7Tv1uEKTN' .
    'MN4OV5sAhQ9wFwMfMobekCTEjCvnrCd7weX9Tm9588UFBd6mTx3TYKSKbkMH7Qb1A+APnJsiB26L' .
    'kWM0DCAb0InkUzSGN9wOdUMjEDMRGRrds8M6e8zsLA+JNLTW37yvTPn4SSdCYcRJuPcLqbyzKCXz' .
    'eHhE6AtGeAt4OeGz7a1erLPWJ8Y/UB5tSa4MXSU8YmhWmUnplZDOECyhBVBVgpl/HTsZloacsaZw' .
    'xtejNDvlSFMHSNo18hM9GeAgpqQ39LNR7mn7WVJ6kw1HFImXmSx3tZeKG0xB7qWNK8uOLVtq5jeF' .
    'nMkwkkV0yKJ9cCay3xfTtPNfYVj2jCXIAs+D7r0I+IrxiEew+C9dRQcta4KoD02oMzlo86yG/zuM' .
    'kwMjLcpm7sR7WtH0du3eMRjniEj9mSIZxvZcSpU10Cc6nVzjQ9nRo0OdUVrOtfp1ftnnDVJ1SEUj' .
    'jRNouB4X+5+hBYSEjjH5QvM05t7FdK4SlCHU5HRSef/zByMjj4IRjRDwzxtxLuXQu6zQR/4MVT1i' .
    'SiXDf4XWqMiQ2wJkrfWWeumbAxlntLqU1U8Rr1zdWKLpBb/uTtcUuH7E70fquqyDWcWCmDK+WMkB' .
    'd/NiI8BIsJ6jJCUDT9by1/ORKJarwP+GM3zSx0pWaj5fSEzLl+gMU1fgOXcBPVYWqJAuAXli8sCS' .
    'mNavVS3mc4J72BMOr0ugOAW4cturB9uxICOUPdX9RoN5Q6pWSVr4cXJ3pN5VcV4RqxKTu81n0Hsr' .
    '9XJy7WUbRynHJHJa5nx19PNA/hDui+/pObV1oB/a9vYs6w3rWaacJTeQ95iVzMmzio77aAk8g0xZ' .
    'PMgMCHMK0ezNYqhQnyAOqxYX7XneOmqRidJYWzuyOY4g/YsOVGX8Sntcv7LKHTfwW1YsLaSaPR44' .
    'CWmKRQUecuDe/L4g7rphjdBW/0w+C31PAgWPPBDvpy/KhT4NoHCewipAPhjicHDdOPOnvagKFxzo' .
    'PeiB4NT6HEYs9ESjpXait0yPbp94badTeO4tggUQoYlij1eUtqX3okBCDWWftORQSUXLyVoKI+xV' .
    '3v+UvRwKcrJiAOIeRvpsrnZ1qwcH60bqlS9/Xkr9m+i9Ij+HdlEqQZAgcWCNCof3ym/laQqu9CMm' .
    'Hwtz80OT0NNl6xA/4cAEHFzMofSuuZsWH2pZJ05UcGtCMOFDLL30OXD+HqciO0MiCS17bd4OTchT' .
    'dUFkgc+PvA+VorJXuLh9csz9VLHS2gtDn7vsaI8xLnrXFQ1AtKxqd6eY5X+HNSEuwIAO5jtf9EWY' .
    'UpoKGxxJsyQtOugPuslDxaOg2avtajR2m2kugRzbwuhuPvJiEnUXg9s77PqWxtCFZU4RziaL6mHa' .
    'K7s+AV0gEQ21+KuUxx/h+X6jftWOsZOrAB+J80ueMun9sxOkzGqH8CQrPQGckVtb6oY/uhxtsFDn' .
    'ZKrtLP73xikFz4/WpNpULb8ocDzlMPXGoOh+JxQfdy7i8FZbqbxA1OUIEpLdXgMU/rUJJr+k2UNe' .
    '8okGPeL7T3ehsHoHuvCqLiUBQzrlW33tE+AnuvF095NL7XmBz3VBJKgV4O2AWXc9j9VxmTtlO7mk' .
    '/mqPAvSSxVz4aJnJiP6iP48QT9Ueb3OZVLYrOrp645xKbb5vVfs1ssKr4bN56hRxVVKsYwafZPgy' .
    '7vugH4odGC/ji4Pk2wngt1VK6tiO8nkv7J10NcFqpNDLdCh0iEPvDd84EBlOx2LA0jpxFA3W/PJN' .
    'qqPy60O8psHdW1etVpFbCW1h9lQnKvVk5I8gp4KnU1ilmnOITzYcj75xGyHkP6mPQPqT/sZzOh87' .
    'AjzL5gBnRl/vigS4Lz/L5sHX6hi0fHW1wjS4NJ1Zb04g0wuJqC/XlzP8sdkwzaE2Xi+bd/PNASnN' .
    'jFqoYvFTFV8dO/Ou9KApponUQOktAvs4tFjHhUT0XOX4W7zAdZ3vdU3jR2YRjTdaFcCxGqyWUn3c' .
    'lrgKGhrs4JRT2RiMbZUtEAiXokioatsfZtc9Xm4jBgPj9M7yd8jwIFJQMcjl1lmVuEkj9LsPpwTc' .
    '7UkYSJf/3H+yYtagoT5zdD2scvmA/A7gM6/SpmCvqh/bc875BFsACeBLuHcUvhJpFHJ+kdDvSAXB' .
    'iD9gQaz+UCDK+Tr9HiaPOmai6c3Wni9Nyoy1virwLbM5tQwhiZY1ptM84QUEdNTdeZP+xiKXV1k8' .
    '5WYJqDgX3Tnrour/tX8p/NmelNoWOLdurPrZrViE+VTvxA3EbTz3HjwJivkWJVqUhl/XukOH5wzE' .
    'GsneThNMPeJsy/fQQWPmqtIO00d01bvAgem3IpfxUcAtIt7wq5fvFt2ZU1d4AsP/OfA+sahVErQl' .
    '40j/K/9zk55HgvAN5+BIDFOUSELScpCxHE9pbPSVEASpQ2cJYC9n6yh3mOur0CfOU6ifs+HcGw4o' .
    'VpB+G5+C2dAQ3gbHdaEpncwKiXn/VLCm33UMnMbKLHdIvCFVe7eUb1kqfOm7rNyAppvftQj4efcE' .
    'JPc4Z8CdRV6O3GBmSHDKHhhSIA+Qs5DXM7H+9iKymvdLfRdaV4LauKt1VUQg6mKNwMLIlY147g4z' .
    '4wnMEL4Poq1RIAScUpJjCboKmzVjk3RFHx1FLxpN766SMPtUDB/2bIzVCQxKmm2v0DmB+eVfr+tD' .
    'Yeu7xazij6kCMGm5JMUQtqdYvTl8tOcOFLgO3GCCjiDEMXYQ+oI9NZ4guhi9QWjCKgy/lnM3cYQK' .
    'AtvG8fU6QbxV/D3G0TODV6etQkjc+Bwf1xG9pNmnjcOx44F24/1eKYLly/B5sIPY0j3ouNUA52e2' .
    'INhfR8GtyDLoPSJiDtip6bXfzTGWPRznaGH4l43DnCF+sabwoYOPb7peb7mUG+Q931n2nW6FzI+d' .
    '568vfVParkiqloR9iOgU/ayeN1cW5bUZD6rP3nNY4yutVcqM1Di36dODi+VxyPcM2k/L1AXpBBt4' .
    'SMIpXia/KrVtDJ9vgJrCILNw5XJil3m94AcS/oYFtYcZ9roKW1SW0RvEbnG4I5fchns84EfN4d7w' .
    'wfuiZCSRzSmQTyqRgBcubS6NYehOe/S0mBkJkWf5Gu1qEezeNH1tFnzjNLyKf2x/YYgLbcWYHdo7' .
    'BGqw+2zK7vsT80ju+MkwtB2hAZaSlOdXyS4yRF97g+EKAhJ2lvEsUCbugNq4ghxGeTXN0M8uJ9yH' .
    'suOffAtl7X7GYlUz4zm8Jc1U+VC31w/CthNhiTt+Ng1SeYF0wA2CDu77vtZ8V0LJw9AjlJNJ0MFD' .
    'iLrrBx0hxo1h4MJylFWL3r8mKTYlnfx95BCYgTDRK6BhUM+MMf+GtH0W1ihtp+APcBmNS3aQAzQx' .
    'xAyyMGbtaeIWMsQgY5i4LAcAAhKYOQtqr9F3hJRZ1/3NMuYUaGvQcw+LV7EyDY4bcXfSDjUTtK5U' .
    'DxkJoELg+XCDAXyDGh+Zewv6FIo4LmcVtDM5FjjXRK419TLqGj/lcYJi8UT1sPfH9Btp2XglqMUQ' .
    'Fy4ixI/SP/5Eofjb2QxNQM6q/1edNR1046w4xWVbElr3024xdLaKGxWS8KNVdYQIOvNyMmjet/pM' .
    'PQuRvDy0FTmB+gPeDMzxP8wmoc8vDAdrjxjUA9+7fqQr1iHiRjpAtcMEPHrb0Zal+ZpdzSJd+UwC' .
    '6/bCiM/QMurM2R4vmIuuxE/mLtL/s3BOyI8XrpNyRh4fveMKVHtUyJmefjmXBHMSswKYsZak2Uw8' .
    'mKdn9np7S4D3L3YZ+a5zXYbj+Wr4/Klca6LhnlWWo0+ZTgiTCEfBanpBgaUrZX4Io5/H2jWTb4VJ' .
    'FBU25F7LfJri0mtl3e6UhpoQw4R3va+9IPH1sLoDrLw6n4wIXBuv1AKSZTVNiRqM/7TcfakNzw5x' .
    '1shWlA1q/jj3hChP0N9q0QW952ZZ8RHKZPP8tMxsfFYqOBiFfRhZ31D3mtLBT/xzYRGPK1BAwEFX' .
    '1aOBBeWvF5sKbREQhjVRNPfagT8Rew3rce7ijJOjld7l7sEVlY/n4tq1qM7yeOMy6H+/UnjdIfk3' .
    'bD0T1qOjxP3ynTomUoxTG4T1qyOB/VlJJPKQcGGST38gy4kXvSSAGTK/DjozFA6QhR+bGGA9YOBO' .
    'cuGgmYD86BWwT6Dt4Z458fj6zdymhzOowfeYA38il8mxW1xfjmCIjyndityR7TiUabfNQ3IBzBQS' .
    'CFLSX5bwDSXI3BGwWuAj6lRJUlgSmjNsQZ8jZbVHXw4C4BDhoH5GtoXoUFCPG1nSNp26U1DPYhys' .
    'vjve3MeoCO/25aXMwQLyf/mpOXVd9IZEPkrgv+NnUh28mTUFarr77hYdsOlWBzlfc4DzS+U/YR7y' .
    'FjFKTD7lxXBdGQq5b5JRMCo1jl4dUJ+/MPx5k+tqPJVTUcUEdL1NsQUzxYACtfqoePfpRgPXTOai' .
    'HGu46U8cW0BQIpPg3uEN1gWRUXKgjp2XavXoIsaMUN3pQ8MpdKah9rxF26fXivPER+aWX+prIarR' .
    'kav1zTHCeKMysSDYz/jCsyg5LIhR6u7qyNn9zuoeVxKhljNK8LUWuO+35T8A+dmdMU13MwzIrdnd' .
    'v/8hjhr66FqzpjLrBO3GuhFyY9cmEPG9+yVqYYwux79jnPXV57BhLQlbYUdyk0byWsk7T4eB7sMz' .
    'ff5LlahMbv2dJP/01FeLvKSLSq1lOdXNtdZMihY2AkcNcWXdnx1cVDTwOx4xChLej/aD0y+ntyvc' .
    'ZixgmNgXqD621qX1fPSqk3mxPyAzKNiRycFObb1kLMYWb1E9/zl99uGj28SoJ+WqtAjp57yrQ4yJ' .
    'tuVwWTAxVx9wHVSwOZMIvKTUDDPZBaadrTwo27xTFOrrb8u6vzyLlXrPSCWacK17YgPYwwo+nYLm' .
    'n3x3rsbWCPUWjvcevWaY8AULWAh5PmHEeOjRLrFggZYWaQVWKuIXrwoUoAhO8r2kpQk+2qDDc97n' .
    'Y/LaBpMw16fKUy5ShdsMNRf88UNthXubxO7+bYcDsfhVhRk5pWSkZbHCaCXxzHnjItkOiOTF2b4R' .
    'jOs5G3+fJ3N9Pi6xyEvkinoab+8htfLZHj5W1kWRirazLfZjDiEhYamHgVo0YBkGeKrti7f/EjcK' .
    'vY7bYk+H3SnVi6Ey9DBE1OHwd3LzadEIVE8rExs6bywCkEU1122zXZVImbgCzHsz8tKjlzeu23U6' .
    'Ehj7EaJWn8LpE+lZjy19o2PyMJXy6MzU4eECPA85rxuwb8Vb3XqGTjr26Swr5Fm66tJTl1NVTga6' .
    '6wKqUFO6Hn5Xq3ZcMj0iuY9JaXcrdvmbjb5F/0bW7E00+2mEW65zMKYBShMTqPPMD/orQwjmEdC0' .
    '3mIqsr5/TNv6PJs5/elE9v7qCey3f0jHDdH18wUT/TrdtWlJewb8PzvdnSAB/3C89+tK87xqycJ2' .
    'Hh4wFWidBmVqy7DfPoB0fVqDGw2WQu8b3OrUCVDABOuDRj2S+0mBR50tyefzQqOpQ9t7lYrGpwKa' .
    'uXaMxHxU/nQGNOntUoJ/1nx7EQOOkmzL7pJXa82T4X3gX8bQlNOAMmP+gcNy8gmIhVczJyLmU8Uv' .
    'PyV1VV3ws8Zbx8IpOU7bHbb0ahFcSW5d7zVW6ZRj8N9dxgiZXc4A/6CPcpGpBvz6xZTRLtisVOIr' .
    'OyLa3qJMCEPLtJTXnWS1F2qOuLHMaTG9/lph1o41mhQjkGRF5f5fTLHxKxzOjbF8+oKDcYRJG9eP' .
    '7wlLjx/pL5JveCIhYS7WjNU7+/xXLNT/R/md01IttmHv7OF+ukStGE2FI7TBh6XHiVahOWgNiGJB' .
    'LwBMIKX9bHbEjftDWecBpZLzGGcfIxQxOqRfCjiRCSnZ07JfUQRoUYpd0XlPJxp2ox1rb4TcmPKV' .
    'SPDRbar4yW8z3gaWt9ezAWO+tvUH2dsM9liodHCaAmc9EF/nr8WTTry3865kuKSDRkGqbIZ3AdPD' .
    'X/Zi2xpUNR9mG5SP7Nd8pY7SY4t4FQOK2fp5K4IFOcvmry9UzYy1EOr4rCJPicIWSkXZtugXRM0b' .
    'rJoUGVEq3N3E3jzqmx+n3gxFRo7CwCj9rdu2NXqi6z0CB/uBD0ff/IGidg5xB25d00tUeNLKqUXW' .
    'xftR29Xq0ADQr9nkecNsi/h1GxCIUai9xirhfdPhe8MzEQFvRq/9LoP90Uh4BtYRaFxdiziLmFEN' .
    'Oi3LV9ZqKdU3Bn4zYRTEvjtYANuSFLvtlTpM6A0/Y6boa54BeKxsiq0UTafg769Dqc+tVH2Q5r8E' .
    'U42JtStNlSQQbejeRPR1ztevSb+AEthpSXPqEGQ2wYLgHn4sV2BzafgTUYsW8JJmbemyLW4Migd4' .
    'k0yP267KSgICBuvwqLoy8Pui7O7PBKRCnUB1FOKcJZ6AcP4UWpOwmjYLfFA0NoOy2ibaBdGf4jKC' .
    'dJUo24RWI+SPkNKvIdMwU2SnGyYCEau8JWcdounz/GJ71exOemzkYF6X8whoczHqcFw5ixtuW2Q0' .
    'wr3d3SgzVjP2nqrqnSCjgZa7xgBi44PWQPbq8l9oxs26XrD6VxZn'

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

