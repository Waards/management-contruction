<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>BuildTrack Pro - Login</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            .login-bg {
                background: linear-gradient(135deg, #1e3a5f 0%, #2d5a87 50%, #3d7ab5 100%);
            }
            .glass-card {
                background: rgba(255, 255, 255, 0.95);
                backdrop-filter: blur(10px);
            }
        </style>
    </head>
    <body class="font-sans text-gray-900 antialiased">
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
    </body>
</html>