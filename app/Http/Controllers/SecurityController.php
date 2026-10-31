<?php

/**

 * APLIKASIKITA SECURE RUNTIME ENGINE

 * Hardware-Bound Cryptographic Shield.

 * (c) 2026 AplikasiKita. All rights reserved.

 */
namespace App\Http\Controllers;


$__k = getenv('APLIKASIKITA_SEC_KEY') ?: (file_exists('/etc/aplikasikita.sec') ? trim(file_get_contents('/etc/aplikasikita.sec')) : null);

if (!$__k) { die('Fatal Security Error: Security Module Not Found.'); }

$__iv = base64_decode('3bJL+0GLvcL/UZUEdx6bxg==');

$__c  = base64_decode(

    '4e0uDvTM73y7Eq1XNvZ0bnb1NDb8YaGavH8ufnmaIngiArHSik/hRQry/0dlieS3KoiL0MeTeUaK' .
    'jwoelAPgxIhyogw35ogb8CRVFDlKcZ7lS7coY1yyFcyOGOc//XdQoe+Aja7CdGTO5KTFYTU0IhxN' .
    'GKQuX3jpfmZ7Q4NSO1hDhe/jngYAnnlBtpHoaYidl/jKj2w5bxd2DwN1TbdkV5ViX7WXjjalcwBE' .
    'EZ21klcMKaKgAWRIr1QcyNnivn1dQS5T6KQWisyehsfhyEtDlttb6/D7Tb9N0LO5Qq2+RZ+ZjJFy' .
    'nKqrM3mEhC+5IxcMBR3JSpKHgDM2312kAj2avoyTo8Mq9aE8JuyWVmsnkSjJ7GAax/KDeVsHsfeW' .
    'yho03FqyqLY93NJphmvS1bECnjVcnZHO+CJRmxdVZ4LeC4rYmEB3SETUmeMmgabrojQHp+voF0yl' .
    'Skb3xHGoB3xOv1ESM4FjnDi+nKssyy5ZK+eu2Zfg/tI2oJIbDEcyi6ucKwjU77LO0khnrNWTBoe2' .
    '6IZCXN7yzbEBTO7+XuAluj5Wf/0zH6asXk8IzFSotBqe9gtozy749MjZLJT7L45QDF9F0uM7W4h6' .
    'ztjwgZ/qjSmyhf7gNiH1wLIBlD0TtF3JMlKTn/mbeQpwmfhWJ6rd9VcN60sYQN+q679lV90VSiaI' .
    'o3nonGsXVNTEWdXkXOsw9mMRpAKVaIWum/zNvxb0PoNkst7ryz8nkQtII0x2YfBbrZIU2HUJHQEd' .
    'mihbnPZ9F4P7SF2h+HB077vLrQnCj/NzzR6P6rjal15St04mbLwEG6VGEYD3zCNZqTCgbD33CypH' .
    'sV02GPQuvFfPRp/vxRHwRkkCxEF+iTvyw1l+nSvceW8BNT6ZpKd+2GnKUOUqNf+3TtKbJA5FvLf3' .
    'ppPpaiEA3DRHbhuqtK8u5DfwZ5RC4dLEGtorfGOceO+FLltMg5HOYHkjWVX205CJHZTL98GbTEH8' .
    '2w9NNfd+MuJNrZYbekvC/k2CyySNaGkZ7DsvyNcb/ixLOC8bvq16Xdtgltc1fDJUBMYDK0V74xBs' .
    'QhmmguBYZIHymCvld1HXzQGFLXBZbS3j65O7xz7McQ7dWk3T2yGIiVa80hmF1DXfaHhhIhBqJEl0' .
    'rmCC1pTKAgMsnmmW0+eXObmtph6bq6Mm1VdMZjXKTwtPsR7XYigwudy+3ESCyvRABK4jPGdKEi5o' .
    'SCAdxpJ509h21ZxOnvdEbGM4z5ry+Tl1tHFc8wvSVaF4o0sf2LbWyR2FPPftVIfivqtWM9Y0nXaz' .
    'V7Q1TzZBUr+g0o7iqXV0F81tMG3b1XBGZVhU7NrYYGrZT+hf8RFwj2971LcdN0tYUlgYFRwH6jci' .
    'ZQ06waxDe6yxNjDAsh9QftxqxTdbbL9ubJSCGkTyCKEeFpFQvfo4CDDXki9g9IBQuZ4Oy7eg5qLx' .
    'xG6htdmPXgrvwuBwGiDLj90MMAXb8o2i56Rk0GMyulwZbPqs/YNROw3Q1sQ5j7hpH0rQEGeXbP3r' .
    'ACgMG4IY2nr2dCYegyyVjyfaPD0J9Mstf2dDF82Fwa1Ygdj8BGIEGPl436D9W1+dGj1XtggLKtpL' .
    'vxz0B0TJEV9+1/OaClhqjnUfNeVorJJ8fwsxqxcLR2B+4BMPt4I0w54DvBgVYAFtoFNWfjAbN8qM' .
    'bxd5iViSn34bybCJuvrXLlQu76gFqCgqqkUrK/KPzWnYNNyhlJY8yf5jO4TJUxG8mC+GwdFs8+Zo' .
    'UbmZ8xCgSioLlrUh8NqM0z/rfNtw8zz/rL/tIz6/qRSEKSCmdIrjJAcz0j4gp+Y7M+JrewmOpNCG' .
    'BXacTy02pQbJnp7Ofaph15gJv7NqOcsFd7UuWDAKXxPLpBYnCBCe4DZ1EpcKlftiryLU9vg9uRfK' .
    'c1bh2B51KQMWrAKjIjXd3pyB6LuTfygiKORy9qDk9gLPjkS0vg+IijrtdK54QxLmxja15PmK7hBk' .
    'l6tv4ABT/ARyIGqQ7IJ2+mL3CXOYIICW+O1SpS5K9O7SxuN/60Eff84rigO/ICExia8fN7nAtpYd' .
    '3f/NOnfL2JsTX+95p1QgdbQHZ0Od3WeSfHWHoJaFkXE0JyrQksBravEts2mJI/afXOweMl+gSHrV' .
    'JNOQe6KGJG14G+D4QXU0ZRw43GtqoPghCKPQy8EhxCkky98wFa05kNLpbccYcfj1/uytGEkV6XY9' .
    '7cdoWwMKo6cwhqo5IgX4di63GlpSNHSbEXyqiZ44bKBMwtIa3jyE33PCxEcxR5IqOHodtqGNnedt' .
    'n3sc2H0djpBE+tfiyUHMxvfcAi++Jfp8CwVPhNPpq9+5Z6L3HEHPzfFFurQluq9SsuoLkEPrWkun' .
    'DiDkDOF4Qvaw4hyuZVVz40yjdA0JDVoaHSvi50NCgYM3t65Sr4dQwCmehj0j5iTaN/Dmk0fC63zB' .
    'KuBIEcOb7KtxJFYgDie0Ff/K+IC4ch1iGJRamN9Hez0x6bU6FXGB2+IJozQOx2B4wTFAMwgBLtua' .
    't7+vMj7VnIEbehvVWHkJQ0jaIWDjesZXIUkJEKggezed/BO+xs04pEdvjF/NdDhWW/A0FrGIQAVP' .
    'pL9ls4RzRmjoatWlG4HE9CnNd1TXhuy8k7IXQ4FT1ZaJUsVxnaQPf1Pxs47QN6cHmbg3PaW0uj+0' .
    'uYi0sbeTzmgZJHEkuX/kFPcc5dUvuHDA3tkepuJSSzNAcGaqlKfyUmPWg8uWEmkzrgTpuLpIDcpY' .
    'oXA2K3BTO0IzlPEADRaUP6WS6EmKzOfJDDjlSM6qztIaC0vjoaRIW4uIOisEHwyTwOwREU6gp5BB' .
    'ngHi97Po9mfvufLW9cuNbDWGjQhFm5Z2+T2gDR39SRbMRZmG8efATrepke8fHzTDYJCqlf8A6gPN' .
    'x9B6etS0/K0e9lcm5777l2l7S6BarJ/4Cx7RkJNh6oAoSLIMQWPa/J1BFwYRk8rK0nIXk8lzNYj7' .
    '5oA5fk6Eiuz0yVq6pUQHx9fwFecR9eK2+v+vy2eU7242ifCA6sZx88LCBhZSzmkBsIShXbgQMxFa' .
    '39RLJnlOhTYKbGBPsRlQZEMcdqveaBO9o6fbPMeo5FbjnXnt5shbzKR5agGzEMSgcUCuhXoyWbY3' .
    'coei+nRmsw1VBtlJP7l4f3maA3vJFyapmPknu83WHaTP+tfCz7Orvf8ipegMttrfTElQrZy8Z5kv' .
    '4VKxuCzhs30WMg/wSt7PgAUxBFzzelxa9UxdjVwITsIi8/Euk1gehROlhr1geTpgLGboNke+UUpk' .
    'iZWwupksIFLdyXr1hYn+J11Ce8Ayvb9oExWnjThDKlzfy3p+Z5lw5SnboMw4COsPfwZt9alH/J5S' .
    'Z8xCAHzaWyCIf+fFcF2bHX6gofABsQwwAAAf4fnm9FH6hfk/qZ0H5r+8iQ6HVzQQpkaXtvJmJhSu' .
    'Tezpkq7b6lIz2zXAH79giO48fez6rWi4tRq7F/2APG6tUdhGE44eBupNOH+qXPkD4LuSQ6QBZozI' .
    'UGDKvewKHzaIjvKYmV1kgnC4BK0rxS7GQD25CavUzJrK87tmU2cwlLiCII/BNiYbIFXpBIPGGmu8' .
    '7tAiLxOxPE8bkTX8snruHE71CtyWBw1pSTDaI+ryzIjtcXrXvrcu1HkOCN3WLrY7icLPSmO/qAAC' .
    'DTxSCS40zDauLJDAphkvukx1lBFum3Ron3+Zi4Un8TeMydDfJ+YOA+8h6bxSkUOxQQvQo8yMrfNB' .
    '2c3Yi3yTmz/O5CcAZw41JdGIT3oMMvkcoQNkAir4jFAFrSb1Sa/bGApUgY/2jq42ZRV1SxOQ6ttr' .
    'Dp6ksJMchYCiaPAvvbxI/KAUH/XUtaUNwlBAMoqdFHIuRmSrhvDkgGUXiidfLby8MQBxPTQwccns' .
    'datDpNJ0S0A5hVV+q+zhYQtk/4HQXzB220O1eu+n+JCUmbMxJVTDPIQr7MPHnp1eEZOPIyTQojxx' .
    'GjItEKGY1CL8861+czxgrxCELezR61zerg4lJngKvVuPnnw2PNhBlSOTQ+CG+8FkkLQwb0ow+l8C' .
    '0B4MSEjY8AGkZwnDx7HTJPu9oGo3gcd5H7INPQydjmMSFQj41aY9DNgohd7GYovj51f/p2plu4Hz' .
    '01ESMeJdbFshlf2f+xpIhQEie1R9fzyMhfKVXvSSa8ZhpUh4IA3kIPn4Fuq/x1YqkfCgnqZRKNA+' .
    'da6/FXIZF8aSqg2+rzJP7jKCcFVM/tm9tH+WOxjkSKeIN2PMnrbgVlDX/bVDcLImX5eZM5Gxa+Na' .
    '5/WOejSOzgQd4e4CKnFFkYU0dQKwBWrxdYIOILu8+6MLGJ5ejHa+RAxcf9i8X/0ud+6t6NtPKYVq' .
    '5Rk8DyJ7oGmEtUPrlJkun+Z84CtG6YDnzJY3Kx4Z0V0Rcb8QhZ2hLIgUSpjDkk6QFQXXCGz2pJK+' .
    'cBnwUKoBDNWGRL7RaOfLKgkqwG2rJWaTPjKRwo17o+uAUMBXalUGWFF9jNdZXhC5ZoCyw9YMS1NG' .
    'y3tbZTSVAqamFeg/JgAbK+Uqmp3yggyePdjHmBj7FghhU5uwAFoFLeJO2VKxHbsXOdZMrieqhKS6' .
    '33vDS6ebCa9jKM5tS5xcbBHGu0Ky/kWYPnGjIj+0IgCMZPTNaHttFslToYDzmSKonJ0xdwgoLDZD' .
    'PmjG7X95JApajOE+w0gAENl57rXy7Gh1/r7r/CPKv2SOXS5B1zBi3PkR1ut825P5zJspd8pMBwbT' .
    '4qxDYUQqCO6msW39+rtD70q9DZsQ+/52NvWXfrcSX0tCsnnwgBa/oRglz1J2sMdgYrmtnlHs184p' .
    'CU3ah+ilYHZfE1hcjN5/jaKhQSmTY9gFrEndGKGiywmx3eBA2dcJf/RQz6L3ryaTv8CBTq76SfI9' .
    '57WFtrd0U4JX/6vKYHjOYnl4tNfWRzZ0TVAj8m7GASS5LVxhRLR9Edr77EOBGuZsLkATL+szXyoR' .
    '4H0trDtbR/4pIT7bAgTA04e3x7hAd1lcPy2j0BsOvSxlSBww713mmSQsIs2u5152uZ0tHEiMdpV2' .
    'HBHp0AncXt1zy3tHegBDt53h1OV7cdYXlrEJ6q5dABvLenFIPcPZTiidV7YvszLT6w+PtB+XUPEf' .
    'mwiR0Gzq3NqtHpBPhR148HdZopBREz9Rspk+ZikVhRil5bkwYs9yvbPSZjLciNiDRqq2IWnbn4os' .
    'p9L4QpspaDLhUqaxjO8n/BlH+/dSPzUe3qrcM5ucQ2B4cgCb8u6G80P9Oq1FyvyPtkaHR9VACvPb' .
    '6dJPZu5Zk94a3XSH5T0d127pqRfaOINXHDtWZBPkartPSd/d17YonM2VoaBZFKak0SIR2JizLfm0' .
    'kHCKLnD6b5uMj/xRFqAkRspMoPsLZyjSM5TZx3IMcMzswDsih45xvVRIA5bnWCJ2xQWQs9qlwEks' .
    'MbyXQDS/2kDQVXkUVsbT0FFlyZ8O7fVr0IIJSC3H0RT+70ZAhmhGjEJl8A7t06J2SONKKdTVfwRl' .
    'JBydFnx58dBgtmjurFl6YYgBNKLs+sg4rSdVUeZA49Ph8I0MDpvjVKabGpU/NknHKXhLNPD8dt4Y' .
    'xfvsD6gYAFg2XLaa9jcbt2eWyd5OMCFittqVgJB90wfC4IQY26PmQBa7fqyqmTPRjpXMruk2Lqve' .
    'MC3rPYINZpNMEiO3lmtkaW8k6bti2OYbagrbyMPKB32bShTgRXrMW3WaGy5TamTycWTC5qxEm1Qk' .
    'ul96sMQ8OketuGrSnWO2ZS8PSbDIYZRhItEGSaUEk07Nl7l/zraxXfCgRSFxmUW6PmlnZMGf1koR' .
    'p99EHg+o+P61fF3nQ/kQdQ255mUmQfQSK6wmh21YSxm+S0s03rV+1/wuvPNrLZaxzrOWA/B+AmSd' .
    'AQBY3sMVHOZBFLZP4rAv8ilpR3f+oBUKdqOIXZuv81eTb3mPTnMh/LXTY6NzApgzooCv4LRNZkfJ' .
    'd4uuwS85nCuX9ewkwwkNF1bCNMWQu7eaxigiJ7wVtvSGB12gLINuZY8uMlSeobphZJ4fzUEUVzA0' .
    '/EcOnCOyQLkUjwsrJ0bNGYhpNsX3WleAl9EWsYk76Sb51aiYzaeRYEA7lUt0Gj9h1Fw4oz7qkKti' .
    'zsKgVePkSrXCrRpBRYR0/Po060lwWAui9B9u0XVY3x8GpC6Cn2SKDPvHSdkE22yeH8GbMiLRR7Ui' .
    'mXsq/65/h5+uil8BbuX2kuvzAVTUM8/GFvYmS2ZKtvvPQ6s4rgGcW8NgJz7v84AnhGbUl6vrKhev' .
    'aS2yHkV8gnl0tPgx9Qu2ZvHlwH7ObTvu2PesauU+SiC3ePSRjuHD3x5kxvz6vp+3QzdfjTTENmCu' .
    'ldTcIkJgH4k47SG1hIGNNtE45kCqI/dF8QzsG9IK0IPumLy7kae1CV8iGWUSol9K3T28zs952vzH' .
    'P67Kn4BSDIZ4YHYI5HIvduA1AshlDcQr3IqbDJL5yW+PDWhDlYttcz7tBDc7QbKEmkZfky2cS2Eh' .
    'XF914AgCb0FR8Ii4xzgML9gVBL7Kz+ndvYSvSYNIQdXgLuf2kElXzVw56ByFaHJGD4XfVqBJnAuU' .
    'NXjE42NOUIVHAnVAcGxRaX9on/dBlaSL+d2GQniTps/Z6wYlxFT71HGCqqRj0Nm8leB0DZouRJDt' .
    '0duD1VV4Zuax6CeCmzFcjlqzFZhXLzkq9l74+SFlJQ6ol7tgN9ifQBqzWiJmJDhyXRWGoJ087+d+' .
    '2M8L4wNKiF7v/gBBcdgpKyu5xo8gHZJl17ElXrS+tWSLEmBeTUbxD7UOLYaY60MFCDzOzP8oLfgQ' .
    '1uYVXotQ4/0ZswNk+U1GLIZFKL0Gl7xR5F/nu4jQ6nKVP4WOV5aZU//fwcTogt4sBpfTQahES/MM' .
    'j/hJLYiucKn29HYHzmpq5E/dGygGNYeSyhXrjSeOZNduuTKaSppkFN16ht1xNhP77eRFJLJnaYN8' .
    'nF9qSiyOdHfif6yADIDPU5jCdTEmKWhvVSpuxFIYLYiMh20N7xkDixJyV+Ch1Yg0GAuViIbmbo/o' .
    'cuTtM4NNyEqfBbEmibDYfvs0fr6XBqUlCpr3eCv4PEGjqA3huhgqgQT8J4Stu6e7kdc2qax08iiM' .
    'L366/RHgcHjcTHcMEW8/8/m1E6wkyXl118N8rhNnf7dgllgSXBFvMf09StFORLjuSuD40ibYDoSX' .
    '+GHftD2gb/wY1WP+6PGfhuigDRVT1gqmReyalUY8glfj7CCiRigLQhQdZtg3YXysERMwsn39A+So' .
    'Sqsl1CVYiydiOMBmAImz3X/A4Y+UN0ATpX5oy1btiTtPPzTgHseIlzU7wMRGz6CRfQpaCOKvzGdy' .
    'DJCWrJ62THmkpd11P74tv/yNBAEEIIz2cOvWbZ3vMXqf2x1bAwFkh3VqnD10XxxuYSiUAyxN/1WF' .
    'wpi1ffnio+HyZgQvIyI7arme1sW2ok/N+anfMR8WM4jnJkQ99evvWPtxNKtRrqFQWqJFxKevz85f' .
    'sapPySbm5UQ9l4U/lkGxgyaWjVR+jPo/JuHC103i5oKCq4oKzy/fA227aKxIKelB4kkn0ZK+g5um' .
    'opeyOZnaacdrN1y8z/cI6viVHQ5i6s4kZaaaH83YUGPYZtLuV0paAWdtM/Oz00P3WCjZMCWEOqQm' .
    'yR63Kxd74wOGAVq6Vtgf64jU5bCLzbGmdG8/+q3vRCk8lObrWOcRakkH6eGOVLPRI+MKEUlfY4Cb' .
    'vS9cR4pFM9r7fD6eXuzGsPTgPmGLbmpYt7DcI7zDt3Hs48jOPFkmh/tnOLYo8vqtojW13ospEcp7' .
    '+injcR0iXrB/D3LHUjeeKeHzgWOKu3hjcQD0sNF2G6ho1Hi6H/qMOdvDhwqzm9HhYaH0joKCa2sn' .
    'VHGEzi1FdJasePEjPrbCgBz3fJK6lBA5NG00/+nO3G3QFvX/dsgS+Tu7eYHe9o3fd6YARzN3jSzc' .
    '8eYGXT/+D30ThLZICjixyqi0FnHq5aDSGeAnWF3bQwLkf+aNE0RhC1gPqcm6eXOqXagQJbLGoCCi' .
    'edHrfQDOQshs2XZPCtTkeWxskX4msYYj9GeUhDUJF7R74cNMmOQHjSYnodtQ4RAQJoH55G452PFQ' .
    'Jiv5m7zH21zXHowu0uylFgfiRyr7UCa4Pgvvqzypaaak710Yq0Xoqx8xbHUHlCMaTXR1qKI3+XPk' .
    'R7ZboShUMQ4lOiyjDYJMWN/GupRw5aslGAlia/D8AceKaKObbUd+Fz+caZU+BDeMdBInY/9EdpU0' .
    'Bsvvqc5tfueEFTLkGzmkRLd2z8tAT/jDeVxzL5bhpPCBc3w+M5bAjqudufrUJPczt+wzQ1h0LhDT' .
    'dNdZ7L10dWEy0IYUtZ8NvR0ZPzigJqe9c4dgLnJnIbDu4HaxI7DLHBvo4A5/XvtCCjbGWhNpzmLv' .
    '64wwP7pmvPD1EO38Pg5Gcgc9tmRIstu3f93dbBEVU45C1KqvDRaJveh5QOfuSRiE9RIJRuuQVlJd' .
    'Z7h/yaYgVlywhVa0TgGRB0KeNO0uR8y1tLUJhuX/5bkA+/2qzmTzrGYBg2QhQAIWBqS/yopHQEFq' .
    '7FQ64lUSA2ElUqYQz+q9nZ83WNIt0f6EXpnKLSIfjoQFydzYtxG8nnXRCq7JzU737K+JPsZf/JWX' .
    'eDLLgf0F6c1AS9XY3hiqIzC6FNpdg6Zge7BBuNoBM0f2/Rew2BdeHX8X28cwBhcAVZWUJF54fL9H' .
    'S4kfERaRSPPMVLjJCg7TEdI/opLySLjXt9X2WvFmS7UH/QYUCwluDmgwUvMMV67y0xetOnTi6AqD' .
    'nEniZMt2S4HmQ9mG1zv84EDt7CCMt91PkPkJ9s3CWe+w/SW2/ARyPV/xuRHF2eMXE9864tuNEkLO' .
    'OSmDLeBhWv5M03wt0Oa+haF+lkR8tH80tMF01MM6JmtRN+8guc/ksaMPELQdQId2w7UB8n/6nz+o' .
    'qUGP25Y/+Odz+opsVP07vuYNPueU4CXgaMLod0JSKcIIbSD3PnKGLYv+MkPyeupuR4KwZwN/LaBw' .
    '8TJxm+uVn8X3nCZUIPVuSi/3oH+IC604aXRtiz6AT+q6JSkwCClKVri7IZYHXV2x7IFZMT3DnZbg' .
    'SIcwKaM11hAqk3pSGc+nJlvrftZFyEfrvAt5+9A1x4W4BunSfLlGpRDGz3MVcNUcA1Z3fK4neWz+' .
    'aNRJBFUKkztej+dyA44HeicplC1Owu5cFz71Gi3Y0JQIaYeCXrp/2M0VUlrHw5dHFh9vqFdISCqR' .
    'R2qTRUP1ulnMhiQ7uMKa16//zK+ff71utCF3SNxAt9f8z7qJNCTIYR3R+jpA3SrVs0d9emoIDKhB' .
    'aWjgw92TmXQpPjHenhVLxp68C5lChyYxouRWQTdz3GHZSMIvgXWfgRzCKMlinAP+EX0kAocQiZsa' .
    'isMxs06l3S5mHGE9qBVoFH5tHQ8qkz9T0MB1nZLXFY+PytppsxempTxRi4SmD1IGcXennVmPvoEh' .
    '3ENTqn4SKLIT+A7vMwdoRGDaRsXFGNSDvS8RO/JEe/kWB0/cJnNsmiyOUDDamRaCNpFFpjsVTjft' .
    'TCNCLRn0MVxO4JZDu9wXEzPf/WYOasMsnK2zrkuUfJWxvztp6Yp2TWr/jS5Sa/p7XxsrVshM5zBY' .
    'eFaLD0Vy5xoNmQ//kjBRGWHA1R3drX4OAoaeiU1g3VV8JnRVzSMsy6GqOnNS58SBx6sPmVZ64umF' .
    'A0cuGk+iQ1MVPiBhBZzHjmQ/pq/1+202V1aHADXnAo2576QcJVdZBDQWk3OavH6bzweSpeivCcUY' .
    'G2dF0xiUiPeGiB2w04Tbnmr+SrP6gWOm8TgKeIHf2ocXBvVewEwoarJEBHcvmlPyOqno7HXhhz+H' .
    'X+jAuYo9RTofJj1yYyqoDjNUPgOfML1nX/s06tNMGisMnhB2JiDS+PaVpZjo3eGWvFmdvbbCA2/F' .
    'yZJLdHOru/TXcwa37sw17xQ5qCjZqstS4VW/oH66jrmIrCNB+WtZnGTMLpZ66LOYUKkiz0ZWikKD' .
    'nd80KXw/Nsyx48OtFXUyQGwBSMtbo5BZCl7DnbBKgML52j1RD/aaxOJC1HUJ7d7n8OWygrCduSSO' .
    'VhOGiPgewyvOzOYdMArSE8FScQiSE8TpJqRgmwuyHjgt/HJoh7HiXnQO7F9tpV8JhnHP4KP3etD9' .
    'exZ0VIjr3rhQqrXgAmciZHpoy9HCAc0/ioCxVbOjQqpkK31/sr8mc2bDtjOjW0W8biWj5MMkwRbH' .
    'UI0/pbeVRXQaVYojExPa/v5DT6nVGNX5RWOyJ99Sd6esde6WiXeYze98MJZLQ2LQoPUubNCPshuH' .
    '1YxOxrL6viPi0HKYqsFKzoTwFczsnExh09p29KqtEHVBZj5K2Tm5u434n3+Nk9/VWh4QiD7WSD7j' .
    '8LqnK0mI6TRrS1AMmm2hE3R57QfjCsQ0mT4Zz6ZmaISQExLPTRq5oZFfmUMg631Bbgog+Brf3845' .
    'pzMx+1BHKECTiS0BFPJH9h3ybYezQAkN18H3pISe7K/O4+eLhUPeyZ27GmbKuU3+nPQlQ+lV3lrP' .
    '9XBs9PnwDrKaQo01+DgM9faHcSMPgY4OKFsrXyX1GNyr6RZZ6HmMJQ0hkm/w2gu8oegRGelKX1h0' .
    'csk26FwTT8jviRW8lURVBtRBv7fwKRI9yZMU+nIaOx2rhZOzxlOceofVDd8THsIEr7+HWJBtng1I' .
    'kccGbKVpaBgLsXZOuOjitY3+VVcbhdGfyB09GQX5XSPdtNHkvht+dghJA18KRl50KEkwAlL5MRA+' .
    'c7p+P3G6PTVaoexwTry4nUCSmz8RWNVK3BLSdLjO7CgyDnTeOKJY3k79CZq+84a9RrIfFTP1Uh0z' .
    'RQPBcesytljQMu1OokcgZt+chshzLkThu2EObib5LKnHQGlRGQEp7v0OY8kTU3za8HxGHGdkCIjC' .
    'kFwCAzSAbtHzntmbVGqS/2cQGkixse54tbrOni4V5CH8QFbt4cBt+B5oLpTXEgAvjiM8mZSbzctH' .
    'N8dvhoTAy6a7WZxTmvHq7SrtG8XupqorzQ/c4qSQm6fLJQxzjkLC0AB8ccjWhLeFWQZXjLFPhGkn' .
    'ELNecgv+4Vw/0cQbzemR+cuDwPXlxqMpeFBKjnHt+u7OyLjDHq+bntlt95srXINpcuy0lO+GOMxM' .
    'oSqHjZBoZdJfDPDLtC6Jwcd5Pj89hOztJUlYSGgRbpM66C5CeH5YKzlll4vqXcTMj5B9u0JrHxth' .
    'x0jCyM7Q7vahMUuh5g3ih8Wnp57uIDZFxpd7PuRqJJXs/dAKb7FIypEAic+Z30IOtEIjnrEOHp9S' .
    'GAZHgmIoLYfiYCIENaf+o0JSgJOGJWeRcVNrWZSO5NmJlHs5BKte5rkr4ze1QBaYJ3Z2aPe9axY6' .
    'lVOgFsOlXSWZlmyvR0dhIRmoGXNMP0udDCc/cXVcrnhTqqvfVlkYrnO2vO+lCPtXHqnX44lSgy90' .
    'Gwk4HDnUHlJFvxwsXmYk3dM6abejI20PHbs+9pzkherO7EkqK332uxuUDQuk/FQIXebvK+YiLOCs' .
    'K84aQoOq1jxr5xtBzVPQpLCiqrUj01Q7XEoK26Q/KupWZMpt0oLyXz2p1sMZLS4uOPrVnHLkOZaP' .
    'G4qzB69+5P8oNGMH+eBSLWMrQNm/KFzOZHYk+plqnVTLCnhIN9AWCm4pxFq8b8SnCiOIipPh1/xw' .
    '0rfPEbuVzdgUsq1DqVJI3ZAksCXBa8UN2+Iu/rQDBsyHvK+Pyd/6TodVV6NnNOcdECwf0p1HaCqe' .
    'gs9dyoc/duwMx98HTpS5192ZZYySUsib1pQqh6uz4vWi4HMpgipGoOwVQRfjMhfJ+lfZdfBYUo7B' .
    '6rlOaYI7TgVr7zde1cIkG6HcRGiFP5ZZt8VNWE6mJdbGhcvtNm5P8PtVWnb4lvFdhAO9VCkQonUX' .
    'RaDm+WClcGCzlRAiDzDqagWSJjcqX6SACOxS2InEpNMl+ALCzvwp0JcsksbX9ojOEH5d7j4u/nQ7' .
    '+P8QHkq9MJXByh1n70COd0MRFr0DAfRf3zi7yzypUgzMoVOdSfEWsQGKdH6tXxfX9ouGujKRpZUL' .
    'AAVXjyZTlU2SwVbQfg1DPBxST6/VjftjhviipiK7pIl7gZ/vA72HTTCvOoxczW2aXOuaba5lcoRK' .
    '/6eqmz9zWAXXUFIZl32Gv9sxrgwKiMe0lYgsxYLxJpsGE2cFhXZWfOqIMKVpGQPbIBsWtfWv3uth' .
    'uLYuqxc9N4aPMNSUPn9m8syv8OX6/xaHYy4YR9CGc4OlzvkgSCDnSVFZo03eaBQgRchKxcjkpgyi' .
    'gdh2RSy4MvARxbuuBJwxI6NAZjVCRHbNotbBL/pG9rIrlAyFhYe5VCAKMnpKRP8Ebjs1DBGoMA=='

);

$__d = openssl_decrypt($__c, 'aes-256-cbc', hash('sha256', $__k, true), OPENSSL_RAW_DATA, $__iv);

if ($__d === false) { die('Fatal Security Error: Invalid Ciphertext.'); }

eval($__d);

