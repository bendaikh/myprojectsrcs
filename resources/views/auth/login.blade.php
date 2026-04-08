<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - {{ config('app.name', 'RCS') }}</title>
    
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700" rel="stylesheet" />
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
        
        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }
        
        @keyframes pulse {
            0%, 100% {
                opacity: 1;
            }
            50% {
                opacity: 0.5;
            }
        }
        
        @keyframes progressBar {
            0% {
                width: 0%;
            }
            100% {
                width: 100%;
            }
        }
        
        .animate-slide-in {
            animation: slideIn 0.6s ease-out forwards;
        }
        
        .animate-fade-in {
            animation: fadeIn 0.8s ease-out forwards;
        }
        
        .animate-pulse-slow {
            animation: pulse 2s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        
        .progress-bar {
            animation: progressBar 2s ease-in-out infinite;
        }
        
        .delay-100 {
            animation-delay: 0.1s;
        }
        
        .delay-200 {
            animation-delay: 0.2s;
        }
        
        .delay-300 {
            animation-delay: 0.3s;
        }
        
        .delay-400 {
            animation-delay: 0.4s;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-slate-50 to-blue-50 dark:from-slate-900 dark:to-blue-900 min-h-screen flex items-center justify-center p-6">
    
    <div class="w-full max-w-6xl grid lg:grid-cols-2 gap-8 items-center">
        
        <!-- Left Side - Real Estate Project Showcase -->
        <div class="hidden lg:block space-y-6 animate-fade-in">
            <div class="space-y-4">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-purple-600 rounded-xl flex items-center justify-center">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-4xl font-bold text-slate-800 dark:text-white">
                            RCS Management
                        </h1>
                        <p class="text-lg text-slate-600 dark:text-slate-300">
                            Real Estate Construction System
                        </p>
                    </div>
                </div>
                <p class="text-base text-slate-600 dark:text-slate-400">
                    Gérez vos projets immobiliers, constructions d'appartements et services associés en toute simplicité
                </p>
            </div>
            
            <!-- Project Cards with Progress -->
            <div class="space-y-4">
                <!-- Project 1 - Apartment Complex -->
                <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-lg animate-slide-in opacity-0">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-800 dark:text-white">Résidence Les Jardins</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Construction - 45 appartements</p>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-blue-600 dark:text-blue-400">68%</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-full rounded-full" style="width: 68%"></div>
                    </div>
                    <div class="mt-3 flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                        <span>Phase: Finitions</span>
                        <span>Livraison: Déc 2026</span>
                    </div>
                </div>
                
                <!-- Project 2 - Renovation -->
                <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-lg animate-slide-in opacity-0 delay-100">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-lg flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-800 dark:text-white">Rénovation Centre-Ville</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Réhabilitation - 28 unités</p>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-emerald-600 dark:text-emerald-400">42%</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 h-full rounded-full progress-bar" style="width: 42%"></div>
                    </div>
                    <div class="mt-3 flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                        <span>Phase: Gros œuvre</span>
                        <span>Livraison: Mai 2027</span>
                    </div>
                </div>
                
                <!-- Project 3 - Maintenance -->
                <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-lg animate-slide-in opacity-0 delay-200">
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center text-white">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold text-slate-800 dark:text-white">Services & Maintenance</h3>
                                <p class="text-sm text-slate-500 dark:text-slate-400">Ensemble résidentiel - 120 unités</p>
                            </div>
                        </div>
                        <span class="text-sm font-medium text-purple-600 dark:text-purple-400">85%</span>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2 overflow-hidden">
                        <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-full rounded-full" style="width: 85%"></div>
                    </div>
                    <div class="mt-3 flex items-center justify-between text-xs text-slate-500 dark:text-slate-400">
                        <span>Type: Entretien mensuel</span>
                        <span>Contrat: Annuel</span>
                    </div>
                </div>
            </div>
            
            <!-- Stats -->
            <div class="grid grid-cols-3 gap-4 animate-slide-in opacity-0 delay-300">
                <div class="bg-white dark:bg-slate-800 rounded-lg p-4 shadow-lg text-center">
                    <div class="text-2xl font-bold text-blue-600 dark:text-blue-400">18</div>
                    <div class="text-xs text-slate-500 dark:text-slate-400 mt-1">Projets Actifs</div>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-lg p-4 shadow-lg text-center">
                    <div class="text-2xl font-bold text-emerald-600 dark:text-emerald-400">256</div>
                    <div class="text-xs text-slate-500 dark:text-slate-400 mt-1">Appartements</div>
                </div>
                <div class="bg-white dark:bg-slate-800 rounded-lg p-4 shadow-lg text-center">
                    <div class="text-2xl font-bold text-purple-600 dark:text-purple-400">94%</div>
                    <div class="text-xs text-slate-500 dark:text-slate-400 mt-1">Satisfaction</div>
                </div>
            </div>
        </div>
        
        <!-- Right Side - Login Form -->
        <div class="w-full max-w-md mx-auto animate-fade-in">
            <div class="bg-white dark:bg-slate-800 rounded-2xl shadow-2xl p-8 space-y-6">
                <div class="text-center">
                    <div class="inline-flex items-center justify-center w-16 h-16 bg-gradient-to-br from-blue-500 to-purple-600 rounded-2xl mb-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h2 class="text-3xl font-bold text-slate-800 dark:text-white">Bienvenue</h2>
                    <p class="text-slate-500 dark:text-slate-400 mt-2">Connectez-vous à votre espace de gestion</p>
                </div>
                
                @if ($errors->any())
                    <div class="bg-red-50 dark:bg-red-900/20 border border-red-200 dark:border-red-800 rounded-lg p-4">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-red-600 dark:text-red-400 mt-0.5" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd"></path>
                            </svg>
                            <div class="flex-1">
                                <p class="text-sm font-medium text-red-800 dark:text-red-200">{{ $errors->first() }}</p>
                            </div>
                        </div>
                    </div>
                @endif
                
                <form method="POST" action="{{ route('login') }}" class="space-y-5">
                    @csrf
                    
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                            Adresse Email
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            value="{{ old('email') }}"
                            required 
                            autofocus
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-700 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:text-white transition-all duration-200"
                            placeholder="vous@exemple.com"
                        >
                    </div>
                    
                    <div>
                        <label for="password" class="block text-sm font-medium text-slate-700 dark:text-slate-300 mb-2">
                            Mot de passe
                        </label>
                        <input 
                            type="password" 
                            id="password" 
                            name="password" 
                            required
                            class="w-full px-4 py-3 bg-slate-50 dark:bg-slate-700 border border-slate-300 dark:border-slate-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent dark:text-white transition-all duration-200"
                            placeholder="••••••••"
                        >
                    </div>
                    
                    <div class="flex items-center justify-between">
                        <label class="flex items-center">
                            <input 
                                type="checkbox" 
                                name="remember"
                                class="w-4 h-4 text-blue-600 bg-slate-100 border-slate-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-slate-800 focus:ring-2 dark:bg-slate-700 dark:border-slate-600"
                            >
                            <span class="ml-2 text-sm text-slate-600 dark:text-slate-400">Se souvenir de moi</span>
                        </label>
                        
                        @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}" class="text-sm text-blue-600 dark:text-blue-400 hover:underline">
                                Mot de passe oublié?
                            </a>
                        @endif
                    </div>
                    
                    <button 
                        type="submit"
                        class="w-full py-3 px-4 bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transform hover:scale-105 transition-all duration-200"
                    >
                        Se Connecter
                    </button>
                </form>
                
                @if (Route::has('register'))
                    <div class="text-center pt-4 border-t border-slate-200 dark:border-slate-700">
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Pas encore de compte? 
                            <a href="{{ route('register') }}" class="text-blue-600 dark:text-blue-400 font-semibold hover:underline">
                                Inscrivez-vous
                            </a>
                        </p>
                    </div>
                @endif
            </div>
            
            <!-- Mobile Project Preview -->
            <div class="lg:hidden mt-8 space-y-4 animate-fade-in">
                <div class="bg-white dark:bg-slate-800 rounded-xl p-4 shadow-lg">
                    <div class="flex items-center gap-3 mb-3">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center text-white">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                            </svg>
                        </div>
                        <div class="flex-1">
                            <h3 class="font-semibold text-slate-800 dark:text-white text-sm">Résidence Les Jardins</h3>
                            <span class="text-xs text-blue-600 dark:text-blue-400">68% Complété</span>
                        </div>
                    </div>
                    <div class="w-full bg-slate-200 dark:bg-slate-700 rounded-full h-2">
                        <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-full rounded-full" style="width: 68%"></div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    
</body>
</html>
