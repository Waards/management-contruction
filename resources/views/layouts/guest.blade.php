<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>BuildTrack Pro - Login</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('build/assets/app-D9z5G99v.css') }}">

        <style>
            :root { font-family: 'Figtree', sans-serif; }
            .min-h-screen { min-height: 100vh; }
            .flex { display: flex; }
            .hidden { display: none; }
            .lg\:flex { display: flex; }
            .lg\:w-1\/2 { width: 50%; }
            .login-bg { background: linear-gradient(135deg, #1e3a5f 0%, #2d5a87 50%, #3d7ab5 100%); }
            .glass-card { background: rgba(255, 255, 255, 0.95); backdrop-filter: blur(10px); border-radius: 1rem; }
            .text-white { color: white; }
            .text-4xl { font-size: 2.5rem; }
            .text-xl { font-size: 1.25rem; }
            .text-sm { font-size: 0.875rem; }
            .text-3xl { font-size: 1.875rem; }
            .text-2xl { font-size: 1.5rem; }
            .font-bold { font-weight: 700; }
            .text-center { text-align: center; }
            .text-gray-800 { color: #1f2937; }
            .text-gray-500 { color: #6b7280; }
            .text-yellow-400 { color: #fbbf24; }
            .text-white\/90 { color: rgba(255,255,255,0.9); }
            .text-white\/70 { color: rgba(255,255,255,0.7); }
            .text-indigo-600 { color: #4f46e5; }
            .mb-4 { margin-bottom: 1rem; }
            .mb-6 { margin-bottom: 1.5rem; }
            .mb-8 { margin-bottom: 2rem; }
            .mb-2 { margin-bottom: 0.5rem; }
            .mt-12 { margin-top: 3rem; }
            .mt-8 { margin-top: 2rem; }
            .mt-6 { margin-top: 1.5rem; }
            .mt-1 { margin-top: 0.25rem; }
            .p-12 { padding: 3rem; }
            .p-8 { padding: 2rem; }
            .p-4 { padding: 1rem; }
            .gap-6 { gap: 1.5rem; }
            .grid { display: grid; }
            .grid-cols-3 { grid-template-columns: repeat(3, minmax(0, 1fr)); }
            .w-full { width: 100%; }
            .max-w-md { max-width: 28rem; }
            .max-w-lg { max-width: 32rem; }
            .mx-auto { margin-left: auto; margin-right: auto; }
            .justify-center { justify-content: center; }
            .items-center { align-items: center; }
            .flex-col { flex-direction: column; }
            .shadow-xl { box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); }
            .border-t { border-top: 1px solid #e5e7eb; }
            .border-gray-100 { border-color: #f3f4f6; }
            .rounded-2xl { border-radius: 1rem; }
            .hover\:text-indigo-700:hover { color: #4338ca; }
            .ml-1 { margin-left: 0.25rem; }
            .pt-6 { padding-top: 1.5rem; }
            .bg-gray-50 { background-color: #f9fafb; }
            .lg\:hidden { display: none; }
            @media (min-width: 1024px) {
                .lg\:flex { display: flex !important; }
                .lg\:w-1\/2 { width: 50% !important; }
                .lg\:hidden { display: block !important; }
                .hidden { display: none !important; }
            }
        </style>
    </head>
    <body style="font-family: 'Figtree', sans-serif; color: #1f2937; antialiased;">
        <div class="min-h-screen flex">
            <div class="hidden lg:flex lg:w-1/2 login-bg flex-col justify-center items-center p-12">
                <div class="text-center text-white max-w-lg">
                    <svg class="w-24 h-24 mx-auto mb-6 text-white/90" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                    </svg>
                    <h1 class="text-4xl font-bold mb-4">BuildTrack Pro</h1>
                    <p class="text-xl text-white/90 mb-8">Streamline your construction projects with powerful tracking, worker management, and real-time progress monitoring.</p>
                    <div class="grid grid-cols-3 gap-6 mt-12 text-center">
                        <div>
                            <div class="text-3xl font-bold text-yellow-400">100%</div>
                            <div class="text-sm text-white/70">Project Visibility</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-yellow-400">24/7</div>
                            <div class="text-sm text-white/70">Access Control</div>
                        </div>
                        <div>
                            <div class="text-3xl font-bold text-yellow-400">Real-time</div>
                            <div class="text-sm text-white/70">Progress Updates</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full lg:w-1/2 flex justify-center items-center p-8 bg-gray-50">
                <div class="w-full max-w-md">
                    <div class="lg:hidden text-center mb-8">
                        <h1 class="text-2xl font-bold text-gray-800">BuildTrack Pro</h1>
                        <p class="text-sm text-gray-500">Construction Management System</p>
                    </div>

                    <div class="glass-card rounded-2xl shadow-xl p-8 border border-gray-100">
                        <h2 class="text-2xl font-bold text-gray-800 mb-2">Welcome Back</h2>
                        <p class="text-gray-500 mb-8">Sign in to your account to continue</p>

                        {{ $slot }}

                        <div class="mt-8 pt-6 border-t border-gray-100 text-center text-sm">
                            <span class="text-gray-500">Don't have an account?</span>
                            <a class="ml-1 font-semibold text-indigo-600 hover:text-indigo-700" href="{{ route('register') }}">
                                Create Account
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="{{ asset('build/assets/app-YtA_lim_.js') }}"></script>
    </body>
</html>