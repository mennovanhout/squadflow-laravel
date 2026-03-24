<!DOCTYPE html>

<html class="dark" lang="en"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ config('app.name') }} | @yield('title', 'Track Your Squad\'s Progress')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700;800;900&amp;family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
    <script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
                        "error-dim": "#d7383b",
                        "primary-fixed": "#00fdc1",
                        "surface-container-high": "#1f1f26",
                        "on-tertiary-fixed-variant": "#780023",
                        "tertiary": "#ff6e81",
                        "on-tertiary-container": "#000000",
                        "surface-variant": "#25252c",
                        "secondary-container": "#9900cf",
                        "background": "#0e0e13",
                        "on-error": "#490006",
                        "on-secondary": "#390050",
                        "on-secondary-fixed-variant": "#8400b3",
                        "on-primary": "#00654b",
                        "secondary-dim": "#bb00fc",
                        "on-primary-container": "#005c44",
                        "tertiary-dim": "#e7004c",
                        "surface-bright": "#2c2b33",
                        "surface-container-low": "#131318",
                        "on-secondary-container": "#fff5fc",
                        "surface-dim": "#0e0e13",
                        "on-tertiary": "#490012",
                        "error-container": "#9f0519",
                        "inverse-surface": "#fbf8ff",
                        "surface": "#0e0e13",
                        "outline": "#76747b",
                        "on-surface": "#f8f5fd",
                        "surface-tint": "#aaffdc",
                        "primary": "#aaffdc",
                        "on-error-container": "#ffa8a3",
                        "inverse-primary": "#006c51",
                        "surface-container": "#19191f",
                        "tertiary-container": "#ff0355",
                        "surface-container-lowest": "#000000",
                        "on-surface-variant": "#acaab1",
                        "on-tertiary-fixed": "#39000c",
                        "on-background": "#f8f5fd",
                        "tertiary-fixed": "#ff909b",
                        "inverse-on-surface": "#55545a",
                        "on-primary-fixed": "#004734",
                        "secondary-fixed": "#f1c1ff",
                        "secondary": "#d674ff",
                        "primary-fixed-dim": "#00edb4",
                        "primary-dim": "#00edb4",
                        "tertiary-fixed-dim": "#ff7989",
                        "on-primary-fixed-variant": "#00664c",
                        "primary-container": "#00fdc1",
                        "on-secondary-fixed": "#580079",
                        "secondary-fixed-dim": "#eaaeff",
                        "surface-container-highest": "#25252c",
                        "outline-variant": "#48474d",
                        "error": "#ff716c"
                    },
                    fontFamily: {
                        "headline": ["Space Grotesk"],
                        "body": ["Manrope"],
                        "label": ["Space Grotesk"]
                    },
                    borderRadius: {"DEFAULT": "1rem", "lg": "2rem", "xl": "3rem", "full": "9999px"},
                },
            },
        }
    </script>
    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body {
            background-color: #0e0e13;
            color: #f8f5fd;
            font-family: 'Manrope', sans-serif;
        }
        .liquid-neon-gradient {
            background: linear-gradient(135deg, #aaffdc 0%, #00fdc1 100%);
        }
        .text-glow {
            text-shadow: 0 0 20px rgba(0, 255, 194, 0.4);
        }
    </style>
</head>
<body class="selection:bg-primary selection:text-on-primary">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-[#0e0e13]/60 backdrop-blur-xl shadow-[0_0_40px_rgba(0,255,194,0.04)]">
    <div class="flex justify-between items-center px-6 py-4 max-w-7xl mx-auto">
        <a href="/" class="text-2xl font-black italic text-[#00FFC2] tracking-tighter font-['Space_Grotesk']">
            {{ config('app.name') }}
        </a>
        <div class="hidden md:flex items-center space-x-10">
            <a class="@if (request()->routeIs('home')) text-[#00FFC2] border-b-2 border-[#00FFC2] @else text-gray-400 @endif pb-1 font-['Space_Grotesk'] font-bold tracking-tight" href="{{ route('home') }}">Home</a>
            <a class="text-gray-400 hover:text-white transition-colors font-['Space_Grotesk'] font-bold tracking-tight" href="#">How it Works</a>
            <a class="text-gray-400 hover:text-white transition-colors font-['Space_Grotesk'] font-bold tracking-tight" href="#">Community</a>
        </div>
        <button class="liquid-neon-gradient text-on-primary px-6 py-2.5 rounded-full font-bold font-['Space_Grotesk'] hover:scale-105 transition-transform duration-200 active:scale-95">
            Download Now
        </button>
    </div>
</nav>

@yield('content')

<!-- Footer -->
<footer class="w-full border-t border-white/5 bg-[#0e0e13]">
    <div class="flex flex-col md:flex-row justify-between items-center px-8 py-12 space-y-6 md:space-y-0 max-w-7xl mx-auto">
        <a href="/" class="text-xl font-black text-[#00FFC2] font-['Space_Grotesk']">
            {{ config('app.name') }}
        </a>
        <div class="flex flex-wrap justify-center gap-8">
            <a class="font-['Manrope'] text-sm text-gray-500 hover:text-[#00FFC2] transition-colors" href="{{ route('privacy') }}">Privacy Policy</a>
            <a class="font-['Manrope'] text-sm text-gray-500 hover:text-[#00FFC2] transition-colors" href="{{ route('terms') }}">Terms of Service</a>
{{--            <a class="font-['Manrope'] text-sm text-gray-500 hover:text-[#00FFC2] transition-colors" href="#">Support</a>--}}
{{--            <a class="font-['Manrope'] text-sm text-gray-500 hover:text-[#00FFC2] transition-colors" href="#">Twitter</a>--}}
{{--            <a class="font-['Manrope'] text-sm text-gray-500 hover:text-[#00FFC2] transition-colors" href="#">Discord</a>--}}
        </div>
        <div class="font-['Manrope'] text-sm text-gray-400">
            © 2026 <a href="https://mennovanhout.nl" target="_blank">Menno van Hout</a>. All rights reserved.
        </div>
    </div>
</footer>
</body></html>

