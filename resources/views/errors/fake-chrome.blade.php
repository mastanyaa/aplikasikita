<!DOCTYPE html>
<html lang="en" class="notranslate">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google" content="notranslate">
    <title>{{ $host }}</title>
    
    <link rel="icon" href="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 48 48' fill='%239aa0a6'%3E%3Cpath d='M10 4a4 4 0 0 0-4 4v32a4 4 0 0 0 4 4h28a4 4 0 0 0 4-4V16L28 4H10zm16 4 10 10H26V8zM16 22a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm16 0a2 2 0 1 1 0 4 2 2 0 0 1 0-4zm-14 14c1.5-2.5 4-3 6-3s4.5.5 6 3' stroke='%239aa0a6' stroke-width='2.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E">
    <style>
        :root {
            --bg-color: #202124;
            --text-primary: #e8eaed;
            --text-secondary: #9aa0a6;
            --link-color: #8ab4f8;
            --btn-bg: #8ab4f8;
            --btn-text: #202124;
            --btn-hover: #93bbf9;
            --btn-sec-border: #5f6368;
            --btn-sec-text: #8ab4f8;
        }

        @media (prefers-color-scheme: light) {
            :root {
                --bg-color: #ffffff;
                --text-primary: #202124;
                --text-secondary: #5f6368;
                --link-color: #1a73e8;
                --btn-bg: #1a73e8;
                --btn-text: #ffffff;
                --btn-hover: #1557b0;
                --btn-sec-border: #dadce0;
                --btn-sec-text: #1a73e8;
            }
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-secondary);
            margin: 0;
            padding: 0;
            user-select: none;
            -webkit-font-smoothing: antialiased;
        }

        
        .interstitial-wrapper {
            max-width: 800px;
            margin: 14vh auto 0 auto;
            padding: 0 24px;
        }

        .icon-wrapper {
            margin-bottom: 28px;
        }

        h1 {
            font-size: 24px;
            font-weight: 500;
            line-height: 1.3;
            color: var(--text-primary);
            margin: 0 0 16px 0;
        }

        p {
            font-size: 14px;
            line-height: 1.6;
            margin: 0 0 20px 0;
        }

        p strong {
            color: var(--text-primary);
            font-weight: 700;
        }

        .suggestions {
            margin-top: 24px;
            font-size: 14px;
        }

        ul {
            margin: 8px 0 28px 0;
            padding-left: 20px;
            font-size: 14px;
            line-height: 1.7;
        }

        li {
            margin-bottom: 4px;
        }

        a {
            color: var(--link-color);
            text-decoration: none;
            cursor: pointer;
        }

        a:hover {
            text-decoration: underline;
        }

        .error-code {
            font-size: 12px;
            color: var(--text-secondary);
            text-transform: uppercase;
            letter-spacing: 0.2px;
            margin-top: 32px;
        }

        .nav-wrapper {
            margin-top: 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .btn-reload {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: var(--btn-bg);
            color: var(--btn-text);
            border: none;
            height: 36px;
            padding: 0 24px;
            font-size: 14px;
            font-weight: 500;
            border-radius: 100px;
            cursor: pointer;
            transition: background-color 0.15s ease;
        }

        .btn-reload:hover {
            background-color: var(--btn-hover);
        }

        .btn-details {
            background-color: transparent;
            color: var(--btn-sec-text);
            border: 1px solid var(--btn-sec-border);
            height: 36px;
            padding: 0 20px;
            font-size: 14px;
            font-weight: 500;
            border-radius: 100px;
            cursor: pointer;
        }

        .btn-details:hover {
            background-color: rgba(128, 134, 139, 0.08);
        }

        .details-panel {
            display: none;
            margin-top: 20px;
            padding-top: 16px;
            border-top: 1px solid var(--btn-sec-border);
            font-size: 13px;
            line-height: 1.6;
        }
    </style>
</head>
<body>

    <div class="interstitial-wrapper">
        
        <div class="icon-wrapper">
            <svg width="44" height="52" viewBox="0 0 44 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                
                <path d="M4 2.5C2.6 2.5 1.5 3.6 1.5 5V47C1.5 48.4 2.6 49.5 4 49.5H40C41.4 49.5 42.5 48.4 42.5 47V15.5L29.5 2.5H4Z" stroke="#9AA0A6" stroke-width="3" stroke-linejoin="round"/>
                
                <path d="M29.5 2.5V15.5H42.5" stroke="#9AA0A6" stroke-width="3" stroke-linejoin="round"/>
                
                <rect x="14" y="22" width="3.5" height="5" rx="1" fill="#9AA0A6"/>
                <rect x="26.5" y="22" width="3.5" height="5" rx="1" fill="#9AA0A6"/>
                
                <path d="M14.5 37.5C14.5 33.5 17 32 22 32C27 32 29.5 33.5 29.5 37.5" stroke="#9AA0A6" stroke-width="3" stroke-linecap="round"/>
            </svg>
        </div>

        <h1 id="err-title">This site can’t be reached</h1>
        <p><strong id="err-host">{{ $host }}</strong> <span id="err-desc">refused to connect.</span></p>

        <div class="suggestions">
            <span id="try-label">Try:</span>
            <ul>
                <li id="try-net">Checking the connection</li>
                <li><a id="try-proxy" onclick="return false;">Checking the proxy and the firewall</a></li>
                <li><a id="try-diag" onclick="return false;">Running Windows Network Diagnostics</a></li>
            </ul>
        </div>

        <div class="error-code">ERR_CONNECTION_REFUSED</div>

        <div class="nav-wrapper">
            <button class="btn-reload" id="btn-reload" onclick="window.location.reload();">Reload</button>
            <button class="btn-details" id="btn-details" onclick="toggleDetails()">Details</button>
        </div>

        
        <div class="details-panel" id="details-panel">
            <p>{{ $host }} refused to connect. The connection was terminated by the host server.</p>
        </div>
    </div>

    <script>
        function toggleDetails() {
            var panel = document.getElementById('details-panel');
            panel.style.display = (panel.style.display === 'block') ? 'none' : 'block';
        }

        (function() {
            var userLang = (navigator.language || navigator.userLanguage || 'en').toLowerCase();

            
            if (userLang.startsWith('id')) {
                document.documentElement.lang = 'id';
                document.getElementById('err-title').innerText = "Situs ini tidak dapat dijangkau";
                document.getElementById('err-desc').innerText = "menolak sambungan.";
                document.getElementById('try-label').innerText = "Coba:";
                document.getElementById('try-net').innerText = "Memeriksa sambungan internet Anda";
                document.getElementById('try-proxy').innerText = "Memeriksa proksi dan firewall";
                document.getElementById('try-diag').innerText = "Menjalankan Diagnostik Jaringan Windows";
                document.getElementById('btn-reload').innerText = "Muat ulang";
                document.getElementById('btn-details').innerText = "Detail";
            }
        })();
    </script>
</body>
</html>