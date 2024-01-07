<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Minimarket - Jayusman</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        canvas {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }

        .animated-link {
            position: relative;
            display: inline-block;
            text-decoration: none;
            color: #333;
            overflow: hidden;
        }

        .animated-link::before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #007bff;
            transform-origin: bottom right;
            transform: scaleX(0);
            transition: transform 0.3s ease-in-out;
        }

        .animated-link:hover::before {
            transform-origin: bottom left;
            transform: scaleX(1);
        }
    </style>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body class="antialiased">
    <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-blue-300 selection:bg-red-500 selection:text-white">
        <canvas></canvas>

        @if (Route::has('login'))
        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
            @auth
            <a href="{{ url('/dashboard') }}" class="animated-link font-semibold text-gray-600 hover:text-gray-700 dark:text-gray-800 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
            <a href="{{ route('login') }}" class="animated-link mx-4 px-1 py-1 font-semibold text-gray-600 hover:text-gray-700 dark:text-gray-800 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="animated-link px-1 py-1 font-semibold text-gray-600 hover:text-gray-700 dark:text-gray-800 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
            @endauth
        </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            <div class="mt-10">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8">
                    <div class="scale-100 p-6 flex">
                        <div>
                            <h2 class="mt-6 font-semibold text-7xl text-gray-900 dark:text-black">Minimarket</h2>
                            <p class="mt-4 text-gray-500 dark:text-black text-xl leading-relaxed">
                                Tempat jual beli dan penyediaan barang. Anda sopan, kami segan :D
                            </p>
                            <p class="mt-4 text-gray-500 dark:text-gray-500 text-l leading-relaxed">
                                - Pak Jayusman
                            </p>
                        </div>
                    </div>

                    <div class="flex justify-center">
                        <svg width="250px" height="250px" viewBox="0 0 64 64" data-name="Layer 1" id="Layer_1" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <style>
                                    .cls-1 {
                                        fill: #190933;
                                    }
                                </style>
                            </defs>
                            <title />
                            <path class="cls-1" d="M32,6.5A1.5,1.5,0,1,0,30.5,5,1.5,1.5,0,0,0,32,6.5Zm0-2a.5.5,0,1,1-.5.5A.5.5,0,0,1,32,4.5Z" />
                            <circle class="cls-1" cx="36" cy="5" r="1" />
                            <circle class="cls-1" cx="28" cy="5" r="1" />
                            <path class="cls-1" d="M44,0H20a5,5,0,0,0-5,5v7.59l-7.71,7.7h0a1.32,1.32,0,0,0-.19.29l0,.09a1.31,1.31,0,0,0-.06.27S7,21,7,21v4.83A4.09,4.09,0,0,0,10.79,30,4,4,0,0,0,14,28.64a4,4,0,0,0,1,.8V43a2,2,0,0,0-2,2V62a2,2,0,0,0,2,2H49a2,2,0,0,0,2-2V45a2,2,0,0,0-2-2V29.45a4.54,4.54,0,0,0,1-.77A4,4,0,0,0,53.21,30,4.09,4.09,0,0,0,57,25.83V21s0,0,0-.06a1.31,1.31,0,0,0-.06-.27l0-.09a1.32,1.32,0,0,0-.19-.29h0L49,12.59V5A5,5,0,0,0,44,0Zm5.5,26.72a2,2,0,0,0-1,.6,2.07,2.07,0,0,1-3,0,2,2,0,0,0-1-.61V22h5ZM37.5,43V40a3.94,3.94,0,0,0-1.81-3.16.47.47,0,0,1-.19-.39V36A1.5,1.5,0,0,0,34,34.5H30A1.5,1.5,0,0,0,28.5,36v.45a.47.47,0,0,1-.19.39,4.1,4.1,0,0,0-1.77,2.66h0V37.41a1.5,1.5,0,1,0-1,0v2.18a1.51,1.51,0,0,0-1,1.41v2H21V29.44a3.94,3.94,0,0,0,5-.8,4,4,0,0,0,6,0,4,4,0,0,0,6,0,3.94,3.94,0,0,0,5,.8V43ZM26,36.5a.5.5,0,1,1,.5-.5A.5.5,0,0,1,26,36.5Zm9.12,1.16a3.21,3.21,0,0,1,1.33,1.84h-8.9a3.21,3.21,0,0,1,1.33-1.84,1.47,1.47,0,0,0,.62-1.21V36a.5.5,0,0,1,.5-.5h4a.5.5,0,0,1,.5.5v.45A1.47,1.47,0,0,0,35.12,37.66ZM27.5,43V40.5h9V43ZM26,40.5h.5V43h-1V41A.5.5,0,0,1,26,40.5ZM15.5,27.32a2,2,0,0,0-1-.6V22h5v4.71a2,2,0,0,0-1,.61A2.07,2.07,0,0,1,15.5,27.32ZM22.94,14l-3,6H15.37l4.5-6Zm17,0,3,6H38.27l-1.5-6ZM43.5,26.71a2,2,0,0,0-1,.61,2.07,2.07,0,0,1-3,0,1.93,1.93,0,0,0-1-.58V22h5Zm-23,0V22h5v4.74a1.93,1.93,0,0,0-1,.58,2.07,2.07,0,0,1-3,0A1.93,1.93,0,0,0,20.5,26.74Zm6-4.74h5v4.74a1.93,1.93,0,0,0-1,.58,2.07,2.07,0,0,1-3,0,1.93,1.93,0,0,0-1-.58Zm6,0h5v4.74a1.93,1.93,0,0,0-1,.58,2.07,2.07,0,0,1-3,0,1.93,1.93,0,0,0-1-.58Zm3.23-8,1.5,6H32.5V14ZM31.5,20H26.77l1.5-6H31.5Zm-5.77,0H21.06l3-6h3.17Zm18.33,0-3-6h3.07l4.5,6ZM17,12V5.5h3a3.45,3.45,0,0,1,2.65,1.35A4.34,4.34,0,0,0,26,8.5H38a4.34,4.34,0,0,0,3.35-1.65A3.45,3.45,0,0,1,44,5.5h3V12ZM20,2H44a3,3,0,0,1,3,2.5H44a4.34,4.34,0,0,0-3.35,1.65A3.45,3.45,0,0,1,38,7.5H26a3.45,3.45,0,0,1-2.65-1.35A4.34,4.34,0,0,0,20,4.5H17.05A3,3,0,0,1,20,2ZM16.41,14h2.22l-4.5,6H10.41ZM10.89,28A2.13,2.13,0,0,1,9,25.83V22h4.5v4.72a2,2,0,0,0-1,.62A2,2,0,0,1,10.89,28ZM17,30a3.84,3.84,0,0,0,.76-.08l.15,0a4.41,4.41,0,0,0,.7-.23l.1-.06a1.55,1.55,0,0,0,.29-.14V43H17ZM49,62H45.5V53a.5.5,0,0,0-1,0v9h-25V59a.5.5,0,0,0-1,0v3H15V45h3.5V56a.5.5,0,0,0,1,0V45h25v5a.5.5,0,0,0,1,0V45H49ZM47,43H45V29.46a1.47,1.47,0,0,0,.28.14l.11.06a4.41,4.41,0,0,0,.7.23l.15,0A3.84,3.84,0,0,0,47,30Zm8-17.17A2.13,2.13,0,0,1,53.11,28a2,2,0,0,1-1.6-.66,2,2,0,0,0-1-.61V22H55ZM49.87,20l-4.5-6h2.22l6,6Z" />
                            <path class="cls-1" d="M39,52H36.71l-4.36-4.35a.48.48,0,0,0-.7,0L27.29,52H25a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H39a2,2,0,0,0,2-2V54A2,2,0,0,0,39,52Zm-7-3.29L35.29,52H28.71ZM25,58V54H39v4Z" />
                        </svg>
                    </div>
                </div>
            </div>

            <div class="pt-10 mt-16 px-0 sm:items-center sm:justify-between">
                <p class="text-center font-semibold text-gray-600 hover:text-gray-700 dark:text-gray-800 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                    Group C - Tugas Besar matkul Pemrograman Web Dasar
                </p>
            </div>
        </div>
    </div>

    <script>
        const canvas = document.querySelector('canvas')
        const ctx = canvas.getContext('2d')

        let width, height, lastNow
        let snowflakes
        const maxSnowflakes = 100

        function init() {
            snowflakes = []
            resize()
            render(lastNow = performance.now())
        }

        function render(now) {
            requestAnimationFrame(render)

            const elapsed = now - lastNow
            lastNow = now

            ctx.clearRect(0, 0, width, height)
            if (snowflakes.length < maxSnowflakes)
                snowflakes.push(new Snowflake())

            ctx.fillStyle = ctx.strokeStyle = '#fff'

            snowflakes.forEach(snowflake => snowflake.update(elapsed, now))
        }

        function pause() {
            cancelAnimationFrame(render)
        }

        function resume() {
            lastNow = performance.now()
            requestAnimationFrame(render)
        }


        class Snowflake {
            constructor() {
                this.spawn()
            }

            spawn(anyY = false) {
                this.x = rand(0, width)
                this.y = anyY === true ?
                    rand(-50, height + 50) :
                    rand(-50, -10)
                this.xVel = rand(-.05, .05)
                this.yVel = rand(.02, .1)
                this.angle = rand(0, Math.PI * 2)
                this.angleVel = rand(-.001, .001)
                this.size = rand(7, 12)
                this.sizeOsc = rand(.01, .5)
            }

            update(elapsed, now) {
                const xForce = rand(-.001, .001);

                if (Math.abs(this.xVel + xForce) < .075) {
                    this.xVel += xForce
                }

                this.x += this.xVel * elapsed
                this.y += this.yVel * elapsed
                this.angle += this.xVel * 0.05 * elapsed

                if (
                    this.y - this.size > height ||
                    this.x + this.size < 0 ||
                    this.x - this.size > width
                ) {
                    this.spawn()
                }

                this.render()
            }

            render() {
                ctx.save()
                const {
                    x,
                    y,
                    angle,
                    size
                } = this
                ctx.beginPath()
                ctx.arc(x, y, size * 0.2, 0, Math.PI * 2, false)
                ctx.fill()
                ctx.restore()
            }
        }

        const rand = (min, max) => min + Math.random() * (max - min)

        function resize() {
            width = canvas.width = window.innerWidth
            height = canvas.height = window.innerHeight
        }

        window.addEventListener('resize', resize)
        window.addEventListener('blur', pause)
        window.addEventListener('focus', resume)
        init()
    </script>
</body>

</html>