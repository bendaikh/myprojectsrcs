@extends('layouts.app')

@section('title', 'Gestion Projets')
@section('page-title', 'Gestion Projets')

@section('content')
<div class="flex items-center justify-center min-h-[calc(100vh-200px)]">
    <div class="text-center max-w-2xl mx-auto px-4 animate-slide-in">
        
        <!-- Icon -->
        <div class="mb-8 flex justify-center">
            <div class="w-32 h-32 bg-gradient-to-br from-blue-500 to-purple-600 rounded-3xl flex items-center justify-center shadow-2xl transform hover:scale-105 transition-transform duration-300">
                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                </svg>
            </div>
        </div>
        
        <!-- Title -->
        <h1 class="text-4xl md:text-5xl font-bold text-slate-800 dark:text-white mb-4">
            Gestion de Projets
        </h1>
        
        <!-- Coming Soon Message -->
        <div class="inline-block bg-gradient-to-r from-blue-500 to-purple-600 text-white px-6 py-3 rounded-full font-semibold text-lg mb-6 shadow-lg">
            Bientôt Disponible
        </div>
        
        <!-- Description -->
        <p class="text-lg text-slate-600 dark:text-slate-300 mb-8 leading-relaxed">
            Cette section est actuellement en cours de développement.<br>
            Notre équipe travaille activement pour vous offrir une expérience exceptionnelle de gestion de projets immobiliers.
        </p>
        
        <!-- Features Preview -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-12">
            
            <!-- Feature 1 -->
            <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-shadow">
                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-slate-800 dark:text-white mb-2">Suivi de Projets</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">Gérez tous vos projets immobiliers en un seul endroit</p>
            </div>
            
            <!-- Feature 2 -->
            <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-shadow">
                <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-slate-800 dark:text-white mb-2">Collaboration</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">Travaillez en équipe efficacement sur vos projets</p>
            </div>
            
            <!-- Feature 3 -->
            <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-shadow">
                <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center mx-auto mb-4">
                    <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-slate-800 dark:text-white mb-2">Rapports Détaillés</h3>
                <p class="text-sm text-slate-600 dark:text-slate-400">Analysez les performances de vos projets</p>
            </div>
            
        </div>
        
        <!-- Additional Info -->
        <div class="mt-12 p-6 bg-blue-50 dark:bg-blue-900/20 rounded-xl border border-blue-200 dark:border-blue-800">
            <p class="text-sm text-slate-700 dark:text-slate-300">
                <svg class="w-5 h-5 inline-block mr-2 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <strong>Note :</strong> Nous vous tiendrons informé dès que cette fonctionnalité sera disponible.
            </p>
        </div>
        
    </div>
</div>
@endsection
