<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    <!-- Styles -->
    <style>
        canvas {
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
            z-index: -1;
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

<body class="font-sans text-gray-900 antialiased bg-blue-300">

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            {{ $slot }}
        </div>
    </div>

    <canvas></canvas>

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