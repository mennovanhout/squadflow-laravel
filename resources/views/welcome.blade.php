<!DOCTYPE html>

<html class="dark" lang="en"><head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title>{{ config('app.name') }} | Track Your Squad's Progress</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700;800;900&amp;family=Manrope:wght@300;400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
        <div class="text-2xl font-black italic text-[#00FFC2] tracking-tighter font-['Space_Grotesk']">
            {{ config('app.name') }}
        </div>
        <div class="hidden md:flex items-center space-x-10">
            <a class="text-[#00FFC2] border-b-2 border-[#00FFC2] pb-1 font-['Space_Grotesk'] font-bold tracking-tight" href="#">Features</a>
            <a class="text-gray-400 hover:text-white transition-colors font-['Space_Grotesk'] font-bold tracking-tight" href="#">How it Works</a>
            <a class="text-gray-400 hover:text-white transition-colors font-['Space_Grotesk'] font-bold tracking-tight" href="#">Community</a>
        </div>
        <button class="liquid-neon-gradient text-on-primary px-6 py-2.5 rounded-full font-bold font-['Space_Grotesk'] hover:scale-105 transition-transform duration-200 active:scale-95">
            Download Now
        </button>
    </div>
</nav>
<main class="pt-24">
    <!-- Hero Section -->
    <section class="relative overflow-hidden px-6 py-20 lg:py-32">
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="z-10">
                 <span class="inline-block px-4 py-1 rounded-full bg-primary/10 text-primary font-bold text-xs uppercase tracking-widest mb-6">Level Up Together</span>
                <h1 class="text-5xl lg:text-7xl font-black font-headline leading-[1.1] mb-8 tracking-tighter">
                    TRACK YOUR <span class="text-primary italic text-glow">SQUAD'S</span> PROGRESS
                </h1>
                <p class="text-on-surface-variant text-lg lg:text-xl max-w-lg mb-10 leading-relaxed font-body">
                    The ultimate manual achievement logger, timeline, and session scheduler for elite gaming squads. Schedule events, see who's joining, and track your progress—no APIs, no restrictions.
                </p>
                <div class="flex flex-col sm:flex-row gap-4">
                    <button class="liquid-neon-gradient text-on-primary px-10 py-4 rounded-full font-black text-lg font-headline shadow-[0_0_40px_rgba(0,255,194,0.2)] hover:scale-105 transition-all">
                        Download Now
                    </button>
                    <button class="bg-surface-container text-on-surface px-10 py-4 rounded-full font-black text-lg font-headline border border-outline-variant/20 hover:bg-surface-container-high transition-all">
                        View Demo
                    </button>
                </div>
            </div>
            <div class="relative flex justify-center">
                <!-- Glow effect behind phone -->
                <div class="absolute inset-0 bg-primary/10 blur-[120px] rounded-full scale-75"></div>
                <div class="relative z-10 w-[300px] lg:w-[380px] aspect-[9/19] rounded-[3rem] p-4 bg-surface-container-highest border-[8px] border-surface-container-low shadow-2xl">
                    <div class="w-full h-full rounded-[2rem] overflow-hidden bg-background">
                        <img class="w-full h-full object-cover opacity-90" data-alt="Modern smartphone interface showing a gaming app dashboard with vibrant teal and purple progress bars and squad member avatars" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB42ZN9nTOBTb0er0OLUBMJ3cr6YvT-zR36i8m-ccAGlVMKcWsJ5gnM_g-lJZmXS1VD8at6f5V_MBpx92Qg-PgPBkXS_Dh-sV4TXHYBlUnLCtKqPAk0gUUyIhz2fK1BK6YW59opW1Forwv_WycA6ZxcRTthZKL7CxOBystD7WYlcPSXnofpt-qVFDZ-cHIwvNPnpd_fMgnSM3PrVrwITctdmE52MhyA9hyslp0WE2oeGzX7o0ZxUN8nXLo4xUCh90cguJd6xQ4ycLM"/>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Value Propositions (Bento Style) -->
    <section class="py-24 px-6 bg-surface-container-low">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-12 gap-8">
                <!-- Feature 1: Timeline -->
                <div class="md:col-span-8 bg-surface-container rounded-lg p-10 flex flex-col justify-between group hover:bg-surface-container-high transition-all duration-300">
                    <div>
                        <span class="material-symbols-outlined text-primary text-4xl mb-6">timeline</span>
                        <h3 class="text-3xl font-bold font-headline mb-4">Horizontal Timeline</h3>
                        <p class="text-on-surface-variant text-lg leading-relaxed max-w-md">
                            Visualize your squad's greatest moments across a sleek, interactive horizontal axis. Every raid, win, and milestone mapped in real-time.
                        </p>
                    </div>
                    <div class="mt-12 h-32 bg-surface-container-low rounded-md overflow-hidden relative border border-outline-variant/10">
                        <!-- Visual representation of a timeline -->
                        <div class="absolute top-1/2 left-0 w-full h-[2px] bg-primary/20"></div>
                        <div class="absolute top-1/2 left-[20%] w-4 h-4 -mt-2 bg-primary rounded-full shadow-[0_0_15px_rgba(0,255,194,0.6)]"></div>
                        <div class="absolute top-1/2 left-[50%] w-4 h-4 -mt-2 bg-secondary rounded-full shadow-[0_0_15px_rgba(214,116,255,0.6)]"></div>
                        <div class="absolute top-1/2 left-[80%] w-4 h-4 -mt-2 bg-tertiary rounded-full shadow-[0_0_15px_rgba(255,110,129,0.6)]"></div>
                    </div>
                </div>
                <!-- Feature 2: Manual Logging -->
                <div class="md:col-span-4 bg-surface-container rounded-lg p-10 group hover:bg-surface-container-high transition-all duration-300">
                    <span class="material-symbols-outlined text-secondary text-4xl mb-6">edit_note</span>
                    <h3 class="text-3xl font-bold font-headline mb-4">Manual Logging</h3>
                    <p class="text-on-surface-variant text-lg leading-relaxed">
                        No API needed! Log achievements for any game, even retro classics or custom squad challenges. Total freedom to record what matters.
                    </p>
                </div>
                <!-- Feature 3: Squad History -->
                <div class="md:col-span-12 lg:col-span-4 bg-surface-container rounded-lg p-10 group hover:bg-surface-container-high transition-all duration-300">
                    <span class="material-symbols-outlined text-tertiary text-4xl mb-6">groups</span>
                    <h3 class="text-3xl font-bold font-headline mb-4">Squad History</h3>
                    <p class="text-on-surface-variant text-lg leading-relaxed">
                        A permanent archive of your gaming legacy. Filter by game, squad member, or date to relive the glory days.
                    </p>
                </div>
                <!-- Feature 4: Session Scheduling -->
                <div class="md:col-span-12 lg:col-span-4 bg-surface-container rounded-lg p-10 group hover:bg-surface-container-high transition-all duration-300">
                    <span class="material-symbols-outlined text-primary text-4xl mb-6">event</span>
                    <h3 class="text-3xl font-bold font-headline mb-4">Squad Events</h3>
                    <p class="text-on-surface-variant text-lg leading-relaxed">
                        Schedule gaming sessions and see exactly who's joining. No more guessing—create an event, share it with your squad, and lock in your lineup.
                    </p>
                    <div class="mt-8 space-y-3">
                        <div class="flex items-center gap-3 bg-surface-container-low rounded-md px-4 py-3 border border-outline-variant/10">
                            <span class="material-symbols-outlined text-primary text-xl">calendar_month</span>
                            <span class="text-sm font-bold font-headline">Fri 9 PM — Ranked Arena</span>
                            <span class="ml-auto text-xs text-primary font-bold bg-primary/10 px-2 py-0.5 rounded-full">4 joined</span>
                        </div>
                        <div class="flex items-center gap-3 bg-surface-container-low rounded-md px-4 py-3 border border-outline-variant/10">
                            <span class="material-symbols-outlined text-secondary text-xl">calendar_month</span>
                            <span class="text-sm font-bold font-headline">Sat 3 PM — Raid Night</span>
                            <span class="ml-auto text-xs text-secondary font-bold bg-secondary/10 px-2 py-0.5 rounded-full">6 joined</span>
                        </div>
                    </div>
                </div>
                <!-- Feature 5: Deep Analytics -->
                <div class="md:col-span-12 lg:col-span-4 bg-surface-container rounded-lg p-10 overflow-hidden relative group hover:bg-surface-container-high transition-all duration-300">
                    <div class="relative z-10">
                        <span class="material-symbols-outlined text-secondary text-4xl mb-6">monitoring</span>
                        <h3 class="text-3xl font-bold font-headline mb-4">Deep Analytics</h3>
                        <p class="text-on-surface-variant text-lg leading-relaxed">
                            Detailed stats on completion rates, session duration, and peak performance for every squad member.
                        </p>
                        <div class="mt-8 space-y-4">
                            <div>
                                <div class="flex justify-between text-sm font-bold font-headline mb-1"><span>Completion</span><span class="text-primary">80%</span></div>
                                <div class="h-3 bg-surface-variant rounded-full overflow-hidden">
                                    <div class="h-full liquid-neon-gradient w-4/5"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-bold font-headline mb-1"><span>Win Rate</span><span class="text-secondary">60%</span></div>
                                <div class="h-3 bg-surface-variant rounded-full overflow-hidden">
                                    <div class="h-full bg-secondary w-3/5"></div>
                                </div>
                            </div>
                            <div>
                                <div class="flex justify-between text-sm font-bold font-headline mb-1"><span>Avg. Session</span><span class="text-tertiary">40%</span></div>
                                <div class="h-3 bg-surface-variant rounded-full overflow-hidden">
                                    <div class="h-full bg-tertiary w-2/5"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="absolute bottom-[-10%] right-[-10%] w-40 h-40 bg-primary/5 blur-[80px] rounded-full"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- How it Works -->
    <section class="py-32 px-6">
        <div class="max-w-7xl mx-auto text-center mb-20">
            <h2 class="text-4xl lg:text-5xl font-black font-headline tracking-tighter mb-4">YOUR MISSION BRIEFING</h2>
            <div class="w-24 h-1.5 liquid-neon-gradient mx-auto rounded-full"></div>
        </div>
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12">
            <div class="flex flex-col items-center text-center">
                <div class="w-20 h-20 rounded-xl bg-surface-container-high flex items-center justify-center text-primary font-black text-3xl font-headline mb-8 border border-primary/20">1</div>
                <h4 class="text-2xl font-bold font-headline mb-3">Join the Hub</h4>
                <p class="text-on-surface-variant font-body">Create your profile and invite your squad members to your exclusive tracking board.</p>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="w-20 h-20 rounded-xl bg-surface-container-high flex items-center justify-center text-secondary font-black text-3xl font-headline mb-8 border border-secondary/20">2</div>
                <h4 class="text-2xl font-bold font-headline mb-3">Schedule Sessions</h4>
                <p class="text-on-surface-variant font-body">Create events for upcoming gaming sessions. Your squad joins up so everyone knows who's available.</p>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="w-20 h-20 rounded-xl bg-surface-container-high flex items-center justify-center text-tertiary font-black text-3xl font-headline mb-8 border border-tertiary/20">3</div>
                <h4 class="text-2xl font-bold font-headline mb-3">Play &amp; Win</h4>
                <p class="text-on-surface-variant font-body">Go out there and conquer your favorite titles together or solo. No connection to app required.</p>
            </div>
            <div class="flex flex-col items-center text-center">
                <div class="w-20 h-20 rounded-xl bg-surface-container-high flex items-center justify-center text-primary font-black text-3xl font-headline mb-8 border border-primary/20">4</div>
                <h4 class="text-2xl font-bold font-headline mb-3">Record Legacy</h4>
                <p class="text-on-surface-variant font-body">Log your achievements in seconds and watch your shared timeline grow with every victory.</p>
            </div>
        </div>
    </section>
    <!-- App Showcase (Asymmetric Layout) -->
    <section class="py-24 px-6 bg-surface-container-low overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center mb-32">
                <div class="relative order-2 lg:order-1">
                    <div class="absolute -top-10 -left-10 w-40 h-40 bg-primary/20 blur-[60px]"></div>
                    <img class="rounded-lg shadow-2xl border border-white/5" data-alt="Cinematic shot of a professional gaming setup with RGB lighting, featuring multiple monitors displaying colorful gaming data and dashboards" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBt8Kw2y52WTlDW9oNWCfacYJ48aq-Z9gsztluV4aaG5eYzTS-DsifipVEa82USl0vzRfdaR3Hoo_MFNaipjUalcyCkHqz_tl2MO9QwqiFgySAzUO9eJCVkIPBd1eT4ssV9y36Oo2ojIu-8pjQigXp5f1Bn54nRX0qwgOxIAzSt9-chBAUjq4HVPpj9RBxrzTPS7WuYk11QIYlvnOOJz6Qqrr2zyBFP_nYmJZJ-05QpKvVfV8lYIgi4T8qdlqXaZ808ZqjIFrRiAas"/>
                </div>
                <div class="order-1 lg:order-2">
                    <h2 class="text-4xl lg:text-5xl font-black font-headline tracking-tighter mb-8 leading-tight">THE BIG TIMELINE</h2>
                    <p class="text-on-surface-variant text-lg mb-10 leading-relaxed">
                        Experience your journey on the big screen. Our horizontal view provides a panoramic perspective of your squad's achievements over years, not just days.
                    </p>
                    <ul class="space-y-6">
                        <li class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-primary" data-weight="fill">check_circle</span>
                            <span class="font-bold font-headline">Infinite Scrolling History</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-primary" data-weight="fill">check_circle</span>
                            <span class="font-bold font-headline">Custom Achievement Tags</span>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Squad Events Showcase -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center mb-32">
                <div>
                    <h2 class="text-4xl lg:text-5xl font-black font-headline tracking-tighter mb-8 leading-tight">SQUAD EVENTS</h2>
                    <p class="text-on-surface-variant text-lg mb-10 leading-relaxed">
                        No more "who's on tonight?" messages. Create gaming sessions, pick a date and time, and let your squad join up. You'll know exactly who's going to be available before you even launch the game.
                    </p>
                    <ul class="space-y-6">
                        <li class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-primary" data-weight="fill">check_circle</span>
                            <span class="font-bold font-headline">One-Tap Session Scheduling</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-primary" data-weight="fill">check_circle</span>
                            <span class="font-bold font-headline">RSVP &amp; Live Attendance Count</span>
                        </li>
                        <li class="flex items-center gap-4">
                            <span class="material-symbols-outlined text-primary" data-weight="fill">check_circle</span>
                            <span class="font-bold font-headline">Reminders Before Every Session</span>
                        </li>
                    </ul>
                </div>
                <div class="relative">
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-primary/20 blur-[60px]"></div>
                    <!-- Event card mockup -->
                    <div class="bg-surface-container rounded-lg border border-outline-variant/10 p-8 space-y-6 shadow-2xl">
                        <div class="flex items-center justify-between">
                            <h4 class="text-xl font-black font-headline">Upcoming Sessions</h4>
                            <span class="material-symbols-outlined text-primary">add_circle</span>
                        </div>
                        <div class="bg-surface-container-low rounded-md p-5 border border-primary/20 space-y-4">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-lg font-bold font-headline">Ranked Arena Night</div>
                                    <div class="text-sm text-on-surface-variant">Friday, 9:00 PM</div>
                                </div>
                                <span class="text-xs font-bold bg-primary/10 text-primary px-3 py-1 rounded-full">OPEN</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-primary/30 border border-primary/50 flex items-center justify-center text-xs font-bold">JD</div>
                                <div class="w-8 h-8 rounded-full bg-secondary/30 border border-secondary/50 flex items-center justify-center text-xs font-bold">KS</div>
                                <div class="w-8 h-8 rounded-full bg-tertiary/30 border border-tertiary/50 flex items-center justify-center text-xs font-bold">ML</div>
                                <div class="w-8 h-8 rounded-full bg-surface-container-highest border border-outline-variant/30 flex items-center justify-center text-xs font-bold text-on-surface-variant">+1</div>
                                <span class="ml-auto text-sm text-on-surface-variant">4 / 5 joined</span>
                            </div>
                            <button class="w-full liquid-neon-gradient text-on-primary py-2.5 rounded-full font-bold font-headline text-sm hover:scale-[1.02] transition-transform">Join Session</button>
                        </div>
                        <div class="bg-surface-container-low rounded-md p-5 border border-outline-variant/10 space-y-4 opacity-80">
                            <div class="flex items-center justify-between">
                                <div>
                                    <div class="text-lg font-bold font-headline">Weekend Raid</div>
                                    <div class="text-sm text-on-surface-variant">Saturday, 3:00 PM</div>
                                </div>
                                <span class="text-xs font-bold bg-secondary/10 text-secondary px-3 py-1 rounded-full">FILLING UP</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <div class="w-8 h-8 rounded-full bg-primary/30 border border-primary/50 flex items-center justify-center text-xs font-bold">AB</div>
                                <div class="w-8 h-8 rounded-full bg-secondary/30 border border-secondary/50 flex items-center justify-center text-xs font-bold">CD</div>
                                <div class="w-8 h-8 rounded-full bg-tertiary/30 border border-tertiary/50 flex items-center justify-center text-xs font-bold">EF</div>
                                <div class="w-8 h-8 rounded-full bg-primary/30 border border-primary/50 flex items-center justify-center text-xs font-bold">GH</div>
                                <div class="w-8 h-8 rounded-full bg-secondary/30 border border-secondary/50 flex items-center justify-center text-xs font-bold">IJ</div>
                                <div class="w-8 h-8 rounded-full bg-surface-container-highest border border-outline-variant/30 flex items-center justify-center text-xs font-bold text-on-surface-variant">+1</div>
                                <span class="ml-auto text-sm text-on-surface-variant">6 / 8 joined</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div>
                    <h2 class="text-4xl lg:text-5xl font-black font-headline tracking-tighter mb-8 leading-tight">SOCIAL HUB</h2>
                    <p class="text-on-surface-variant text-lg mb-10 leading-relaxed">
                        Stay connected with your crew. Share screenshots, debate the hardest levels, and cheer for your teammates' latest unlocks in a high-octane social feed.
                    </p>
                    <div class="flex gap-4">
                        <div class="w-12 h-12 rounded-full bg-surface-container-highest border border-outline-variant/30 flex items-center justify-center font-bold">JD</div>
                        <div class="w-12 h-12 rounded-full bg-surface-container-highest border border-outline-variant/30 flex items-center justify-center font-bold">KS</div>
                        <div class="w-12 h-12 rounded-full bg-surface-container-highest border border-outline-variant/30 flex items-center justify-center font-bold">ML</div>
                        <div class="w-12 h-12 rounded-full bg-primary/20 border border-primary/40 flex items-center justify-center font-bold text-primary">+12</div>
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute -bottom-10 -right-10 w-40 h-40 bg-secondary/20 blur-[60px]"></div>
                    <img class="rounded-lg shadow-2xl border border-white/5" data-alt="Abstract visualization of a social network graph with neon lines connecting nodes on a deep black background, tech aesthetic" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCdSS9_TEg0NqMaooHMxaMXOM7VCloNH_1KW0bDqB6IOP15sjRAtcayr2PFDlsftuog8r-49kx1aDxHrvQmGDACtXltQEQH1rtsU8P14WkY7urrD7q746IIGjk326obbKeX3LxHpEmtkr2hpqvx1UzjpWb84pQ0L8Ez7MvFXFFDjMHiiYLQQa3U4aZIhbbayCCQsdAHcKGwCe0OD05jXOS7riwMCqmQIdWSO0Oo1m952D30tmONqgncuk_SIDO0lN-NiM-jC6BDTCw"/>
                </div>
            </div>
        </div>
    </section>
    <!-- Final CTA -->
    <section class="py-32 px-6 relative overflow-hidden">
        <div class="max-w-4xl mx-auto bg-surface-container rounded-xl p-12 lg:p-20 text-center relative z-10 border border-outline-variant/10">
            <h2 class="text-4xl lg:text-6xl font-black font-headline tracking-tighter mb-8">READY TO START YOUR MISSION?</h2>
            <p class="text-on-surface-variant text-xl mb-12 max-w-2xl mx-auto leading-relaxed">
                Join over 50,000 squads already tracking their legendary moments on {{ config('app.name') }}.
            </p>
            <div class="flex flex-col sm:flex-row justify-center items-center gap-6">
                <a class="flex items-center gap-4 bg-black text-white px-8 py-4 rounded-md border border-white/10 hover:border-primary/50 transition-all group w-full sm:w-auto" href="#">
                    <span class="material-symbols-outlined text-3xl">ios</span>
                    <div class="text-left">
                        <div class="text-[10px] uppercase font-bold text-gray-400">Download on the</div>
                        <div class="text-lg font-black font-headline leading-none">App Store</div>
                    </div>
                </a>
                <a class="flex items-center gap-4 bg-black text-white px-8 py-4 rounded-md border border-white/10 hover:border-primary/50 transition-all group w-full sm:w-auto" href="#">
                    <span class="material-symbols-outlined text-3xl">play_store_installed</span>
                    <div class="text-left">
                        <div class="text-[10px] uppercase font-bold text-gray-400">Get it on</div>
                        <div class="text-lg font-black font-headline leading-none">Google Play</div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Decorative gradient element -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full h-[600px] bg-primary/5 blur-[120px] rounded-full -z-10"></div>
    </section>
</main>
<!-- Footer -->
<footer class="w-full border-t border-white/5 bg-[#0e0e13]">
    <div class="flex flex-col md:flex-row justify-between items-center px-8 py-12 space-y-6 md:space-y-0 max-w-7xl mx-auto">
        <div class="text-xl font-black text-[#00FFC2] font-['Space_Grotesk']">
            {{ config('app.name') }}
        </div>
        <div class="flex flex-wrap justify-center gap-8">
            <a class="font-['Manrope'] text-sm text-gray-500 hover:text-[#00FFC2] transition-colors" href="#">Privacy Policy</a>
            <a class="font-['Manrope'] text-sm text-gray-500 hover:text-[#00FFC2] transition-colors" href="#">Terms of Service</a>
            <a class="font-['Manrope'] text-sm text-gray-500 hover:text-[#00FFC2] transition-colors" href="#">Support</a>
            <a class="font-['Manrope'] text-sm text-gray-500 hover:text-[#00FFC2] transition-colors" href="#">Twitter</a>
            <a class="font-['Manrope'] text-sm text-gray-500 hover:text-[#00FFC2] transition-colors" href="#">Discord</a>
        </div>
        <div class="font-['Manrope'] text-sm text-gray-400">
            © 2024 {{ config('app.name') }}. All rights reserved.
        </div>
    </div>
</footer>
</body></html>
