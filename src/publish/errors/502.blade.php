<!DOCTYPE html>
<!--
    Error 502: Bad Gateway
    Description: The server received an invalid response from the upstream server
-->
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="robots" content="noindex, nofollow"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>502 | Bad Gateway</title>
    <link rel="preconnect" href="https://fonts.bunny.net/" crossorigin>
    <link rel="dns-prefetch" href="https://fonts.bunny.net/">
    <link href="https://fonts.bunny.net/css2?family=Red+Hat+Display:wght@500&amp;family=Fira+Mono&amp;family=Ubuntu&amp;display=swap" rel="stylesheet"/>
    <style>
        /** Idea author: https://github.com/186526/CloudflareCustomErrorPage */
        :root{--color-bg-primary:#fff;--color-text-primary:#000;--color-text-secondary:#575958;--font-size-primary:56px;--font-size-secondary:20px;--ui-card-color-bg:#f2f2f2;--color-text-ok:#137333;--color-bg-ok:#e6f4ea;--color-text-error:#c5221f;--color-bg-error:#fce8e6;--color-text-warning:#b05a00;--color-bg-warning:#fef7e0;--icon-size:48px}
        @media (prefers-color-scheme:dark){
            :root{--color-bg-primary:#111;--color-text-primary:rgba(255, 255, 255, 0.86);--color-text-secondary:rgba(255, 255, 255, 0.4);--ui-card-color-bg:rgba(40, 40, 40, 0.73);--color-bg-ok:#07220f;--color-bg-error:#270501;--color-bg-warning:#392605}
        }
        body{margin:2rem 2rem;font-family:'Red Hat Display',Ubuntu,Roboto,'Noto Sans SC',sans-serif;color:var(--color-text-primary);background-color:var(--color-bg-primary)}
        header{margin-left:1rem}
        header .error-code{font-size:var(--font-size-primary);line-height:var(--font-size-primary);font-family:'Fira Mono',Ubuntu,monospace;font-weight:400;margin:0 0 0 10px}
        header .error-description{font-family:Ubuntu,Roboto,'Noto Sans SC',sans-serif;font-size:var(--font-size-secondary);color:var(--color-text-secondary);margin:0 0 0 10px}
        code{font-family:'Fira Mono',monospace}
        .status{margin-top:2.5rem;display:flex;flex-direction:row;flex-wrap:wrap;justify-content:center;align-items:center}
        .card{background-color:var(--ui-card-color-bg);padding:2rem;margin:1rem 1rem;min-height:3rem;border-radius:9px;flex-grow:1}
        .arrows svg{fill:var(--color-text-secondary)}
        .icon svg{width:var(--icon-size);height:auto;fill:var(--color-text-primary)}
        .card.ok{background-color:var(--color-bg-ok)}.card.ok .status-text{color:var(--color-text-ok)}.card.ok svg{fill:var(--color-text-ok)}
        .card.error{background-color:var(--color-bg-error)}.card.error .status-text{color:var(--color-text-error)}.card.error svg{fill:var(--color-text-error)}
        .card.warning{background-color:var(--color-bg-warning)}.card.warning .status-text{color:var(--color-text-warning)}.card.warning svg{fill:var(--color-text-warning)}
        .card main{font-size:calc(var(--font-size-secondary) + .1rem)}
        .card .status-text,.reason p{margin:0;font-family:Ubuntu,Roboto,Noto Sans SC,sans-serif}
        .reason p{line-height:125%}
        a{text-decoration:none;color:#1967d2}
        .reason{display:flex;flex-direction:row;flex-wrap:wrap;justify-content:space-between;align-items:baseline}
        .reason>*{display:block;margin:1rem;flex-grow:1;max-width:40%}
        .reason h2{font-size:calc(var(--font-size-secondary) + .2rem);margin:0 0 .6em 0;font-weight:550}
        footer{margin:1rem;color:var(--color-text-secondary);font-size:0}
        /*  */
        @media screen and (max-width:820px){
            .arrows{display:none}
        }
        @media screen and (max-width:480px){
            .reason>*{max-width:100%}
            /*  */
        }
        @media screen and (min-width:768px){
            body{margin:8% 10%}
            header>*{display:inline-block;margin-left:1%}
        }
    </style>
</head>
<body>
<header>
    <h1 class="error-code">502</h1>
    <p class="error-description">Bad Gateway</p>
</header>
<div class="status">
    <div class="card warning" id="client-status-card">
        <i class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                <path d="M0 0h24v24H0V0z" fill="none"/>
                <path d="M19 4H5c-1.11 0-2 .9-2 2v12c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.89-2-2-2zm0 14H5V8h14v10z"/>
            </svg>
        </i>
        <main data-l10n>Your Client</main>
        <p class="status-text" data-l10n>Unknown</p>
    </div>

    <div class="arrows">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="#000000">
            <defs>
                <symbol id="arrows-horizontal" viewBox="0 0 24 24">
                    <rect fill="none" height="24" width="24" x="0"/>
                    <polygon points="7.41,13.41 6,12 2,16 6,20 7.41,18.59 5.83,17 21,17 21,15 5.83,15"/>
                    <polygon points="16.59,10.59 18,12 22,8 18,4 16.59,5.41 18.17,7 3,7 3,9 18.17,9"/>
                </symbol>
            </defs>
            <use href="#arrows-horizontal"/>
        </svg>
    </div>

    <div class="card ok" id="network-status-card">
        <i class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                <path d="M0 0h24v24H0V0z" fill="none"/>
                <path d="M12 6c2.62 0 4.88 1.86 5.39 4.43l.3 1.5 1.53.11c1.56.1 2.78 1.41 2.78 2.96 0 1.65-1.35 3-3 3H6c-2.21 0-4-1.79-4-4 0-2.05 1.53-3.76 3.56-3.97l1.07-.11.5-.95C8.08 7.14 9.94 6 12 6m0-2C9.11 4 6.6 5.64 5.35 8.04 2.34 8.36 0 10.91 0 14c0 3.31 2.69 6 6 6h13c2.76 0 5-2.24 5-5 0-2.64-2.05-4.78-4.65-4.96C18.67 6.59 15.64 4 12 4z"/>
            </svg>
        </i>
        <main data-l10n>Network</main>
        <p class="status-text" data-l10n>Working</p>
    </div>

    <div class="arrows">
        <svg xmlns="http://www.w3.org/2000/svg" height="24px" width="24px" fill="#000000">
            <use href="#arrows-horizontal" />
        </svg>
    </div>

    <div class="card warning" id="server-status-card">
        <i class="icon">
            <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 0 24 24" width="24px" fill="#000000">
                <path d="M0 0h24v24H0V0z" fill="none"/>
                <path d="M19 15v4H5v-4h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1v-6c0-.55-.45-1-1-1zM7 18.5c-.82 0-1.5-.67-1.5-1.5s.68-1.5 1.5-1.5 1.5.67 1.5 1.5-.67 1.5-1.5 1.5zM19 5v4H5V5h14m1-2H4c-.55 0-1 .45-1 1v6c0 .55.45 1 1 1h16c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zM7 8.5c-.82 0-1.5-.67-1.5-1.5S6.18 5.5 7 5.5s1.5.68 1.5 1.5S7.83 8.5 7 8.5z"/>
            </svg>
        </i>
        <main data-l10n>Web Server</main>
        <p class="status-text" data-l10n>Unknown</p>
    </div>
</div>
<div class="reason">
    <div class="what-happened">
        <h2 data-l10n>What happened?</h2>
        <p class="description" data-l10n>The server received an invalid response from the upstream server</p>
    </div>
    <div class="what-can-i-do">
        <h2 data-l10n>What can I do?</h2>
        <p class="description" data-l10n>Please try again in a few minutes</p>
    </div>
</div>
</body>
<footer>
    
</footer>
<script>
    const errorCode = parseInt(`502`, 10);

    if (typeof errorCode !== 'undefined' && !isNaN(errorCode)) {
        /**
         * @param {HTMLElement} $card
         * @param { {isOk?: boolean, isWarning?: boolean, isError?: boolean} } state
         * @param {string} statusText
         */
        const setCardState = function ($card, state, statusText) {
            const okClass = 'ok', warnClass = 'warning', errClass = 'error',
                $statusText = $card.querySelectorAll('.status-text');

            switch (true) {
                case state.isOk === true:
                    $card.classList.remove(errClass, warnClass);
                    $card.classList.add(okClass);
                    $statusText.forEach(($statusText) => $statusText.innerText = statusText);
                    break;

                case state.isWarning === true:
                    $card.classList.remove(okClass, errClass);
                    $card.classList.add(warnClass);
                    $statusText.forEach(($statusText) => $statusText.innerText = statusText);
                    break;

                case state.isError === true:
                    $card.classList.remove(okClass, warnClass);
                    $card.classList.add(errClass);
                    $statusText.forEach(($statusText) => $statusText.innerText = statusText);
                    break;
            }
        };

        /**
         * @param { {whatHappened?: string, whatToDo?: string} } reasons
         */
        const setReasons = function (reasons) {
            const descSelector = '.description';

            Array.prototype.forEach.call(document.getElementsByClassName('what-happened'), ($el) => {
                if (typeof reasons.whatHappened === 'string' && reasons.whatHappened.length > 0) {
                    Array.prototype.forEach.call($el.querySelectorAll(descSelector), ($desc)  => $desc.innerText = reasons.whatHappened);
                } else {
                    $el.remove();
                }
            });

            Array.prototype.forEach.call(document.getElementsByClassName('what-can-i-do'), ($el) => {
                if (typeof reasons.whatToDo === 'string' && reasons.whatToDo.length > 0) {
                    Array.prototype.forEach.call($el.querySelectorAll(descSelector), ($desc)  => $desc.innerText = reasons.whatToDo);
                } else {
                    $el.remove();
                }
            });
        };

        /**
         * @param {string} text
         */
        const setErrorDescription = function (text) {
            Array.prototype.forEach.call(document.getElementsByClassName('error-description'), function ($el) {
                $el.innerHTML = text;
            });
        };

        const message = `Bad Gateway`.trim(), cards = {
            $client: document.getElementById('client-status-card'),
            $network: document.getElementById('network-status-card'),
            $server: document.getElementById('server-status-card'),
        };

        let whatToDo = 'Please try again in a few minutes';

        switch (true) {
            case errorCode >= 400 && errorCode <= 499:
                switch (errorCode) {
                    case 400: case 405: case 411: case 413: whatToDo = 'Please try to change the request method, headers, payload, or URL'; break;
                    case 401: case 403: case 407: whatToDo = 'Please check your authorization data'; break;
                    case 404: whatToDo = 'Please double-check the URL and try again'; break;
                    case 409: case 410: case 418: whatToDo = '¯\\_(ツ)_/¯'; break;
                }

                setErrorDescription(`<span data-l10n>${message}</span> (<span data-l10n>client-side error</span>)`);
                setCardState(cards.$client, {isError: true}, message)
                setCardState(cards.$network, {isOk: true}, 'Working')
                setCardState(cards.$server, {isOk: true}, 'Working')
                break;

            case errorCode >= 500 && errorCode <= 599:
                setErrorDescription(`<span data-l10n>${message}</span> (<span data-l10n>server-side error</span>)`);
                setCardState(cards.$client, {isOk: true}, 'Working')
                setCardState(cards.$network, {isOk: true}, 'Working')
                setCardState(cards.$server, {isError: true}, message)
                break;

            default:
                setErrorDescription(message);
                setCardState(cards.$client, {isWarning: true}, 'Unknown')
                setCardState(cards.$network, {isOk: true}, 'Working')
                setCardState(cards.$server, {isWarning: true}, 'Unknown')
                break;
        }

        setReasons({whatHappened: `The server received an invalid response from the upstream server`.trim(), whatToDo: whatToDo.trim()});
    } else {
        console.warn('Cannot parse the error code:', errorCode);
    }

    // 
    if (navigator.language.substring(0, 2).toLowerCase() !== 'en') {
        ((s, p) => { // localize the page (details here - https://github.com/tarampampam/error-pages/tree/master/l10n)
            s.src = 'https://cdn.jsdelivr.net/gh/tarampampam/error-pages@2/l10n/l10n.min.js'; // '../l10n/l10n.js';
            s.async = s.defer = true;
            s.addEventListener('load', () => p.removeChild(s));
            p.appendChild(s);
        })(document.createElement('script'), document.body);
    }
    // 
</script>
<!--
    Error 502: Bad Gateway
    Description: The server received an invalid response from the upstream server
-->
</html>
