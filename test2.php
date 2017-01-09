<!DOCTYPE html>
<html>
<head>
    <title>anime.js</title>
    <meta charset="utf-8">
    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png" />
    <link href="css/styles.css" rel="stylesheet">
</head>
<style>

    :root { font-size: 14px; }
    @media (min-width: 350px) { :root { font-size: 16px; } }
    @media (min-width: 640px) { :root { font-size: 18px; } }
    @media (min-width: 1440px) { :root { font-size: 20px; } }

    section {
        position: relative;
        z-index: 1;
        width: 18.5rem;
    }

    .description {
        line-height: 1.25rem;
    }

    .links {
        line-height: 1.125rem;
    }

    .description,
    .links {
        opacity: 0;
        margin-bottom: 1.25rem;
    }

    .links {
        display: flex;
        justify-content: space-between;
        width: 100%;
        height: auto;
    }

    .link {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        width: 8.75rem;
        height: 3.5rem;
        border: 1px solid #3A5685;
        border-radius: 2px;
        color: white;
        text-decoration: none;
        text-align: center;
        transition: border-color .100s ease, background-color .100s ease;
    }

    .link:hover {
        border-color: #647899;
        background: rgba(255,255,255,.06);
    }

    .link.primary {
        border: none;
        background-image: linear-gradient(-180deg, #2796F8 0%, #206EFF 100%);
    }

    .link.primary:hover {
        border: none;
        background: linear-gradient(-180deg, #4DA7F7 0%, #3577F3 100%);
    }

    .small {
        font-size: .75rem;
    }

    /* Logo */

    .logo {
        opacity: 0;
        position: relative;
        margin-left: -3.5rem;
        margin-top: -8rem;
        margin-bottom: .75rem;
        font-size: 8px;
    }

    body.ready .logo {
        opacity: 1;
    }

    body:not(.iOS) #lines * {
        mix-blend-mode: lighten;
    }

    #fills * {
        opacity: 0;
        mix-blend-mode: lighten;
    }

    #line-i-1 {
        transform-origin: 30em 8em;
    }

    .fireworks {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
    }

    footer {
        opacity: 0;
        color: #96A9C3;
    }

    footer a {
        color: #96A9C3;
        text-decoration: none;
    }

    footer a:hover {
        color: #FFF;
        text-decoration: underline;
    }

</style>
<body>
<canvas class="fireworks"></canvas>
<section>
    <svg class="logo" width="25rem" height="12rem" viewBox="0 0 800 384">
        <defs>
            <radialGradient cx="50%" cy="0%" fx="50%" fy="0%" r="50%" id="radialGradient-1">
                <stop stop-color="#329FFF" offset="0%"></stop>
                <stop stop-color="#206EFF" offset="100%"></stop>
            </radialGradient>
            <radialGradient cx="50%" cy="0%" fx="50%" fy="0%" r="50%" id="radialGradient-2">
                <stop stop-color="#FF7894" offset="0%"></stop>
                <stop stop-color="#FF324A" offset="100%"></stop>
            </radialGradient>
            <radialGradient cx="50%" cy="0%" fx="50%" fy="0%" r="100%" id="radialGradient-3">
                <stop stop-color="#FF7894" offset="0%"></stop>
                <stop stop-color="#FF324A" offset="100%"></stop>
            </radialGradient>
            <radialGradient cx="50%" cy="0%" fx="50%" fy="0%" r="100%" id="radialGradient-4">
                <stop stop-color="#359FFC" offset="0%"></stop>
                <stop stop-color="#206EFF" offset="100%"></stop>
            </radialGradient>
            <radialGradient cx="50%" cy="0%" fx="50%" fy="0%" r="50%" id="radialGradient-5">
                <stop stop-color="#5FFFD2" offset="0%"></stop>
                <stop stop-color="#31FFA6" offset="100%"></stop>
            </radialGradient>
        </defs>
        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <rect id="dot-js" fill="#FFFFFF" x="80" y="352" width="32" height="32" rx="16"></rect>
            <g id="lines" transform="translate(128.000000, 256.000000)">
                <path d="M531.599976,119.042822 C531.872599,121.442657 532.736164,123.612749 534.213875,124.965578 C535.547208,126.186231 537.324986,127 539.587612,127 C542.133067,127 544.032057,126.104854 545.36539,124.680759 C546.739127,123.175287 547.506804,120.978112 547.506804,118.374052 L547.506804,97" id="line-s" stroke="#FDFDFD" stroke-linecap="square"></path>
                <path d="M576.512399,105.204082 C576.353483,103.122449 575.558903,101.612245 574.367034,100.183673 C572.777876,98.2653061 569.758474,97 566.739073,97 C564.116961,97 561.534578,97.8979592 559.786504,99.5306122 C558.356261,100.877551 557.323308,102.591837 557.323308,105 C557.323308,108.410588 560.43582,110.318694 563,110.738061 C566,111.228706 568.5,111.228706 572,112.209996 C574.445972,112.89577 577.108333,115.626631 577.108333,118.632653 C577.108333,121.163265 576.194567,122.836735 574.883511,124.183673 C572.976521,126.102041 570.155764,127 566.897989,127 C563.679942,127 560.898915,125.938776 559.031653,123.897959 C557.641139,122.387755 556.687644,120.346939 556.488999,118.142857" id="line-j" stroke="#FDFDFD"></path>
                <path d="M48,112 C21.490332,112 0,90.509668 0,64 C0,37.490332 21.490332,16 48,16 C74.509668,16 96,37.490332 96,64 L96,128" id="line-a" stroke="#206EFF" stroke-width="32"></path>
                <path d="M96,0 L96,128 L96,64 C96,37.490332 117.490332,16 144,16 C170.509668,16 192,37.490332 192,64 L192,128" id="line-n-1" stroke="#FF324A" stroke-width="32"></path>
                <path d="M224,0 L224,128 L224,64 C224,37.490332 245.490332,16 272,16 C298.509668,16 320,37.490332 320,64 L320,128" id="line-m-1" stroke="#206EFF" stroke-width="32"></path>
                <path d="M320,128 L320,64 C320,37.490332 341.490332,16 368,16 C394.509668,16 416,37.490332 416,64 L416,128" id="line-m-2" stroke="#FF324A" stroke-width="32"></path>
                <path d="M192,48 L192,64 C192,90.509668 213.490332,112 240,112" id="line-i-1" stroke="#31FFA6" stroke-width="32"></path>
                <path d="M464,80 L512,80 L512,64 C512,37.490332 490.509668,16 464,16 C437.490332,16 416,37.490332 416,64 C416,90.509668 437.490332,112 464,112" id="line-e" stroke="#31FFA6" stroke-width="32"></path>
            </g>
            <g id="fills" transform="translate(112.000000, 256.000000)">
                <path d="M64,32 C46.326888,32 32,46.326888 32,64 C32,81.673112 46.326888,96 64,96 L64,128 C28.653776,128 0,99.346224 0,64 C0,28.653776 28.653776,0 64,0 C99.346224,0 128,28.653776 128,64 L128,128 L96,128 L96,64 C96,46.326888 81.673112,32 64,32 Z" id="fill-a" fill="url(#radialGradient-1)"></path>
                <path d="M192,64 C192,46.326888 177.673112,32 160,32 C142.326888,32 128,46.326888 128,64 L128,128 L96,128 L96,64 C96,28.653776 124.653776,0 160,0 C195.346224,0 224,28.653776 224,64 L224,128 L192,128 L192,64" id="fill-n-2" fill="url(#radialGradient-2)"></path>
                <rect id="fill-n-1" fill="url(#radialGradient-3)" x="96" y="0" width="32" height="128"></rect>
                <path d="M256,64 C256,46.326888 270.326888,32 288,32 C305.673112,32 320,46.326888 320,64 L320,128 L352,128 L352,64 C352,28.653776 323.346224,0 288,0 C252.653776,0 224,28.653776 224,64 L256,64 L256,64 Z" id="fill-m-2" fill="url(#radialGradient-1)"></path>
                <rect id="fill-m-1" fill="url(#radialGradient-4)" x="224" y="0" width="32" height="128"></rect>
                <path d="M416,64 C416,46.326888 401.673112,32 384,32 C366.326888,32 352,46.326888 352,64 L352,128 L320,128 L320,64 C320,28.653776 348.653776,0 384,0 C419.346224,0 448,28.653776 448,64 L448,128 L416,128 L416,64" id="fill-m-3" fill="url(#radialGradient-2)"></path>
                <path d="M224,64 C224,81.673112 238.326888,96 256,96 L256,128 C220.653776,128 192,99.346224 192,64 L192,48 L192,48 L224,48 L224,64" id="fill-i-1" fill="url(#radialGradient-5)"></path>
                <circle id="dot-i" fill="url(#radialGradient-5)" cx="208" cy="16" r="16"></circle>
                <path d="M512,64 C512,46.326888 497.673112,32 480,32 L480,32 C462.326888,32 448,46.326888 448,64 C448,81.673112 462.326888,96 480,96 L480,128 C444.653776,128 416,99.346224 416,64 C416,28.653776 444.653776,0 480,0 C515.346224,0 544,28.653776 544,64 L544,96 L512,96 L480,96 L480,64 L512,64" id="fill-e-1" fill="url(#radialGradient-5)"></path>
            </g>
        </g>
    </svg>
    <p class="description">
        Anime (/ˈæn.ə.meɪ/) is a flexible yet lightweight JavaScript animation library.<br>
        It works with CSS, Individual Transforms, SVG, DOM attributes and JS Objects.
    </p>
    <div class="links">
        <a class="link" target="_blank" href="http://codepen.io/collection/XLebem/">
            <span class="small">Examples on</span>
            <span>CodePen</span>
        </a>
        <a class="primary link" target="_blank" href="https://github.com/juliangarnier/anime">
            <span class="small">Documentation on</span>
            <span>GitHub</span>
        </a>
    </div>
    <footer>© 2016 <a href="http://juliangarnier.com" target="_blank">Julian Garnier</a></footer>
</section>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-79927007-1', 'auto');
    ga('send', 'pageview');
</script>
<script src="../anime.js"></script>
<script>
    var iOS = !!navigator.platform && /iPad|iPhone|iPod/.test(navigator.platform);
    var ff = navigator.userAgent.indexOf('Firefox') > 0;
    var tap = ('ontouchstart' in window || navigator.msMaxTouchPoints) ? 'touchstart' : 'mousedown';
    if (iOS) document.body.classList.add('iOS');

    var fireworks = (function() {

        var getFontSize = function() {
            return parseFloat(getComputedStyle(document.documentElement).fontSize);
        }

        var canvas = document.querySelector('.fireworks');
        var ctx = canvas.getContext('2d');
        var numberOfParticules = 24;
        var distance = 200;
        var x = 0;
        var y = 0;
        var animations = [];

        var setCanvasSize = function() {
            canvas.width = window.innerWidth;
            canvas.height = window.innerHeight;
        }

        var updateCoords = function(e) {
            x = e.clientX || e.touches[0].clientX;
            y = e.clientY || e.touches[0].clientY;
        }

        var colors = ['#FF324A', '#31FFA6', '#206EFF', '#FFFF99'];

        var createCircle = function(x,y) {
            var p = {};
            p.x = x;
            p.y = y;
            p.color = colors[anime.random(0, colors.length - 1)];
            p.color = '#FFF';
            p.radius = 0;
            p.alpha = 1;
            p.lineWidth = 6;
            p.draw = function() {
                ctx.globalAlpha = p.alpha;
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.radius, 0, 2 * Math.PI, true);
                ctx.lineWidth = p.lineWidth;
                ctx.strokeStyle = p.color;
                ctx.stroke();
                ctx.globalAlpha = 1;
            }
            return p;
        }

        var createParticule = function(x,y) {
            var p = {};
            p.x = x;
            p.y = y;
            p.color = colors[anime.random(0, colors.length - 1)];
            p.radius = anime.random(getFontSize(), getFontSize() * 2);
            p.draw = function() {
                ctx.beginPath();
                ctx.arc(p.x, p.y, p.radius, 0, 2 * Math.PI, true);
                ctx.fillStyle = p.color;
                ctx.fill();
            }
            return p;
        }

        var createParticles = function(x,y) {
            var particules = [];
            for (var i = 0; i < numberOfParticules; i++) {
                var p = createParticule(x, y);
                particules.push(p);
            }
            return particules;
        }

        var removeAnimation = function(animation) {
            var index = animations.indexOf(animation);
            if (index > -1) animations.splice(index, 1);
        }

        var animateParticules = function(x, y) {
            setCanvasSize();
            var particules = createParticles(x, y);
            var circle = createCircle(x, y);
            var particulesAnimation = anime({
                targets: particules,
                x: function(p) { return p.x + anime.random(-distance, distance); },
                y: function(p) { return p.y + anime.random(-distance, distance); },
                radius: 0,
                duration: function() { return anime.random(1200, 1800); },
                easing: 'easeOutExpo',
                complete: removeAnimation
            });
            var circleAnimation = anime({
                targets: circle,
                radius: function() { return anime.random(getFontSize() * 8.75, getFontSize() * 11.25); },
                lineWidth: 0,
                alpha: {
                    value: 0,
                    easing: 'linear',
                    duration: function() { return anime.random(400, 600); }
                },
                duration: function() { return anime.random(1200, 1800); },
                easing: 'easeOutExpo',
                complete: removeAnimation
            });
            animations.push(particulesAnimation);
            animations.push(circleAnimation);
        }

        var mainLoop = anime({
            duration: Infinity,
            update: function() {
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                animations.forEach(function(anim) {
                    anim.animatables.forEach(function(animatable) {
                        animatable.target.draw();
                    });
                });
            }
        });

        document.addEventListener(tap, function(e) {
            updateCoords(e);
            animateParticules(x, y);
            ga('send', 'event', 'Fireworks', 'Click');
        }, false);

        window.addEventListener('resize', setCanvasSize, false);

        return {
            boom: animateParticules
        }

    })();

    var logoAnimation = function() {

        document.body.classList.add('ready');

        var setDashoffset = function(el) {
            var l = el.getTotalLength();
            el.setAttribute('stroke-dasharray', l);
            return [l,0];
        }

        var letters = anime({
            targets: '#lines path',
            strokeDashoffset: {
                value: setDashoffset,
                duration: 700,
                easing: 'easeOutQuad'
            },
            transform: ['translate(0 128)', 'translate(0 0)'],
            delay: function(el, i) {
                return 750 + (i * 120)
            },
            duration: 1400
        });

        var dotJSRoll = anime({
            targets: '#dot-js',
            transform: ['translate(0 0)', 'translate(544 0)'],
            delay: letters.duration - 800,
            duration: 800,
            elasticity: 300
        });

        var dotJSDown = anime({
            targets: '#dot-js',
            transform: ['translate(0 -304)', 'translate(0 0)'],
            duration: 500,
            elasticity: 600,
            autoplay: false
        });

        var dotJSUp = anime({
            targets: '#dot-js',
            transform: ['translate(0 0) scale(1 3)', 'translate(0 -352) scale(1 1)'],
            duration: 800,
            easing: 'easeOutCirc',
            complete: dotJSDown.play
        });

        var boom = anime({
            duration: 880,
            complete: function(a) {
                var dot = dotJSDown.animatables[0].target.getBoundingClientRect();
                var pos = {x: dot.left + (dot.width / 2), y: dot.top + (dot.height / 2)}
                fireworks.boom(pos.x, pos.y);
            }
        });

        var letterI = anime({
            targets: '#line-i-1',
            strokeDashoffset: {
                value: setDashoffset,
                duration: 700,
                easing: 'easeOutQuad'
            },
            transform: function() {
                return ff ? ['rotate(360)', 'rotate(0)'] : ['rotate(360 240 64)', 'rotate(0 240 64)'];
            },
            duration: 2500,
            delay: letters.duration - 780
        });

        var dotI = anime({
            targets: '#dot-i',
            transform: ['translate(0 -352) scale(1 3)', 'translate(0 0) scale(1 1)'],
            opacity: {
                value: [0, 1],
                easing: 'linear',
                duration: 100
            },
            delay: letters.duration + 250
        });

        var JSletters = anime({
            targets: ['#line-j', '#line-s'],
            strokeDashoffset: setDashoffset,
            duration: 1400,
            delay: function(el, i) { return (letterI.duration - 1400) + (i * 60) },
            easing: 'easeInOutQuart'
        });

        var gradients = anime({
            targets: '#fills *:not(#dot-i)',
            opacity: [0, 1],
            delay: letterI.duration - 300,
            delay: function(el, i, l) {
                var mid = l/2;
                var index = (i - mid) > mid ? 0 : i;
                var delay = Math.abs(index - mid);
                return (letterI.duration - 1300) + (delay * 30);
            },
            duration: 500,
            easing: 'linear'
        });

        var showDescription = anime({
            targets: ['.logo', '.description', '.links', 'footer'],
            opacity: {
                value: 1,
                easing: 'linear',
                duration: 1000
            },
            translateY: ['1.5rem', '0rem'],
            delay: function(el, i, l) { return ((l - i) * 100) + (letterI.duration - 600); },
            duration: 2250,
            easing: 'easeOutExpo',
        });

    }

    window.onload = logoAnimation;

</script>
</body>
</html>
