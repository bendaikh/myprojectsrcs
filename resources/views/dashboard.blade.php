@extends('layouts.app')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="space-y-6 animate-slide-in">
    
    <!-- Welcome Banner -->
    <div class="bg-gradient-to-r from-blue-500 to-purple-600 rounded-2xl p-6 sm:p-8 text-white shadow-xl">
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4">
            <div>
                <h2 class="text-2xl sm:text-3xl font-bold mb-2">Welcome back, {{ Auth::user()->name }}! 👋</h2>
                <p class="text-blue-100 text-sm sm:text-base">Here's what's happening with your projects today</p>
            </div>
            <button class="bg-white text-blue-600 hover:bg-blue-50 font-semibold px-6 py-3 rounded-lg shadow-lg transition-all duration-200 transform hover:scale-105">
                <span class="flex items-center gap-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                    New Project
                </span>
            </button>
        </div>
    </div>
    
    <!-- Stats Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
        
        <!-- Stat Card 1 -->
        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-shadow duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-blue-100 dark:bg-blue-900/30 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-blue-600 dark:text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 bg-emerald-100 dark:bg-emerald-900/30 px-2 py-1 rounded-full">+12%</span>
            </div>
            <h3 class="text-slate-500 dark:text-slate-400 text-sm font-medium mb-1">Active Projects</h3>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">24</p>
            <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">3 new this week</p>
        </div>
        
        <!-- Stat Card 2 -->
        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-shadow duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-emerald-100 dark:bg-emerald-900/30 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-emerald-600 dark:text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-emerald-600 dark:text-emerald-400 bg-emerald-100 dark:bg-emerald-900/30 px-2 py-1 rounded-full">+8%</span>
            </div>
            <h3 class="text-slate-500 dark:text-slate-400 text-sm font-medium mb-1">Tasks Completed</h3>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">156</p>
            <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">42 pending tasks</p>
        </div>
        
        <!-- Stat Card 3 -->
        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-shadow duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-purple-100 dark:bg-purple-900/30 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-purple-600 dark:text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-purple-600 dark:text-purple-400 bg-purple-100 dark:bg-purple-900/30 px-2 py-1 rounded-full">+2</span>
            </div>
            <h3 class="text-slate-500 dark:text-slate-400 text-sm font-medium mb-1">Team Members</h3>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">12</p>
            <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">2 online now</p>
        </div>
        
        <!-- Stat Card 4 -->
        <div class="bg-white dark:bg-slate-800 rounded-xl p-6 shadow-lg border border-slate-200 dark:border-slate-700 hover:shadow-xl transition-shadow duration-200">
            <div class="flex items-center justify-between mb-4">
                <div class="w-12 h-12 bg-amber-100 dark:bg-amber-900/30 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-amber-600 dark:text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <span class="text-xs font-semibold text-amber-600 dark:text-amber-400 bg-amber-100 dark:bg-amber-900/30 px-2 py-1 rounded-full">92%</span>
            </div>
            <h3 class="text-slate-500 dark:text-slate-400 text-sm font-medium mb-1">Productivity</h3>
            <p class="text-3xl font-bold text-slate-800 dark:text-white">92%</p>
            <p class="text-xs text-slate-500 dark:text-slate-400 mt-2">Above average</p>
        </div>
        
    </div>
    
    <!-- Projects Overview -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        
        <!-- Recent Projects -->
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-lg border border-slate-200 dark:border-slate-700">
            <div class="p-6 border-b border-slate-200 dark:border-slate-700">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Recent Projects</h3>
                    <a href="#" class="text-sm text-blue-600 dark:text-blue-400 hover:underline font-medium">View All</a>
                </div>
            </div>
            <div class="p-6 space-y-4">
                
                <!-- Project 1 -->
                <div class="flex items-center gap-4 p-4 bg-slate-50 dark:bg-slate-700/50 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors cursor-pointer">
                    <div class="w-12 h-12 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center text-white font-semibold shrink-0">
                        WD
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-semibold text-slate-800 dark:text-white truncate">Website Redesign</h4>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Design Team</p>
                        <div class="mt-2 w-full bg-slate-200 dark:bg-slate-600 rounded-full h-1.5">
                            <div class="bg-gradient-to-r from-blue-500 to-blue-600 h-full rounded-full" style="width: 75%"></div>
                        </div>
                    </div>
                    <div class="text-right shrink-0">
                        <span class="text-sm font-semibold text-blue-600 dark:text-blue-400">75%</span>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">3 members</p>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="flex items-center gap-4 p-4 bg-slate-50 dark:bg-slate-700/50 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors cursor-pointer">
                    <div class="w-12 h-12 bg-gradient-to-br from-emerald-500 to-emerald-600 rounded-lg flex items-center justify-center text-white font-semibold shrink-0">
                        MA
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-semibold text-slate-800 dark:text-white truncate">Mobile App</h4>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Dev Team</p>
                        <div class="mt-2 w-full bg-slate-200 dark:bg-slate-600 rounded-full h-1.5">
                            <div class="bg-gradient-to-r from-emerald-500 to-emerald-600 h-full rounded-full" style="width: 45%"></div>
                        </div>
                    </div>
                    <div class="text-right shrink-0">
                        <span class="text-sm font-semibold text-emerald-600 dark:text-emerald-400">45%</span>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">2 members</p>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="flex items-center gap-4 p-4 bg-slate-50 dark:bg-slate-700/50 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors cursor-pointer">
                    <div class="w-12 h-12 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center text-white font-semibold shrink-0">
                        AP
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-semibold text-slate-800 dark:text-white truncate">API Integration</h4>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Backend Team</p>
                        <div class="mt-2 w-full bg-slate-200 dark:bg-slate-600 rounded-full h-1.5">
                            <div class="bg-gradient-to-r from-purple-500 to-purple-600 h-full rounded-full" style="width: 90%"></div>
                        </div>
                    </div>
                    <div class="text-right shrink-0">
                        <span class="text-sm font-semibold text-purple-600 dark:text-purple-400">90%</span>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">4 members</p>
                    </div>
                </div>
                
                <!-- Project 4 -->
                <div class="flex items-center gap-4 p-4 bg-slate-50 dark:bg-slate-700/50 rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors cursor-pointer">
                    <div class="w-12 h-12 bg-gradient-to-br from-rose-500 to-rose-600 rounded-lg flex items-center justify-center text-white font-semibold shrink-0">
                        DB
                    </div>
                    <div class="flex-1 min-w-0">
                        <h4 class="font-semibold text-slate-800 dark:text-white truncate">Database Migration</h4>
                        <p class="text-sm text-slate-500 dark:text-slate-400">Infrastructure Team</p>
                        <div class="mt-2 w-full bg-slate-200 dark:bg-slate-600 rounded-full h-1.5">
                            <div class="bg-gradient-to-r from-rose-500 to-rose-600 h-full rounded-full" style="width: 30%"></div>
                        </div>
                    </div>
                    <div class="text-right shrink-0">
                        <span class="text-sm font-semibold text-rose-600 dark:text-rose-400">30%</span>
                        <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">5 members</p>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Recent Activity -->
        <div class="bg-white dark:bg-slate-800 rounded-xl shadow-lg border border-slate-200 dark:border-slate-700">
            <div class="p-6 border-b border-slate-200 dark:border-slate-700">
                <div class="flex items-center justify-between">
                    <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Recent Activity</h3>
                    <a href="#" class="text-sm text-blue-600 dark:text-blue-400 hover:underline font-medium">View All</a>
                </div>
            </div>
            <div class="p-6">
                <div class="space-y-6">
                    
                    <!-- Activity 1 -->
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-blue-500 to-purple-500 rounded-full flex items-center justify-center text-white font-semibold text-sm shrink-0">
                            JD
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm text-slate-800 dark:text-white">
                                <span class="font-semibold">John Doe</span> completed task 
                                <span class="font-semibold">"Update homepage design"</span>
                            </p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">2 hours ago</p>
                        </div>
                    </div>
                    
                    <!-- Activity 2 -->
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-emerald-500 to-teal-500 rounded-full flex items-center justify-center text-white font-semibold text-sm shrink-0">
                            SA
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm text-slate-800 dark:text-white">
                                <span class="font-semibold">Sarah Anderson</span> created new project 
                                <span class="font-semibold">"E-commerce Platform"</span>
                            </p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">5 hours ago</p>
                        </div>
                    </div>
                    
                    <!-- Activity 3 -->
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-500 rounded-full flex items-center justify-center text-white font-semibold text-sm shrink-0">
                            MJ
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm text-slate-800 dark:text-white">
                                <span class="font-semibold">Mike Johnson</span> uploaded 
                                <span class="font-semibold">3 new files</span> to Mobile App project
                            </p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">1 day ago</p>
                        </div>
                    </div>
                    
                    <!-- Activity 4 -->
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-amber-500 to-orange-500 rounded-full flex items-center justify-center text-white font-semibold text-sm shrink-0">
                            EW
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm text-slate-800 dark:text-white">
                                <span class="font-semibold">Emily Wilson</span> commented on 
                                <span class="font-semibold">"API Documentation"</span>
                            </p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">2 days ago</p>
                        </div>
                    </div>
                    
                    <!-- Activity 5 -->
                    <div class="flex gap-4">
                        <div class="w-10 h-10 bg-gradient-to-br from-rose-500 to-red-500 rounded-full flex items-center justify-center text-white font-semibold text-sm shrink-0">
                            TC
                        </div>
                        <div class="flex-1 min-w-0">
                            <p class="text-sm text-slate-800 dark:text-white">
                                <span class="font-semibold">Tom Chen</span> assigned you to 
                                <span class="font-semibold">"Database optimization"</span>
                            </p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">3 days ago</p>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    </div>
    
    <!-- Task Overview -->
    <div class="bg-white dark:bg-slate-800 rounded-xl shadow-lg border border-slate-200 dark:border-slate-700">
        <div class="p-6 border-b border-slate-200 dark:border-slate-700">
            <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
                <h3 class="text-lg font-semibold text-slate-800 dark:text-white">Task Overview</h3>
                <div class="flex gap-2">
                    <button class="px-4 py-2 bg-blue-50 dark:bg-blue-900/30 text-blue-600 dark:text-blue-400 font-medium text-sm rounded-lg hover:bg-blue-100 dark:hover:bg-blue-900/50 transition-colors">
                        This Week
                    </button>
                    <button class="px-4 py-2 text-slate-600 dark:text-slate-400 font-medium text-sm rounded-lg hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors">
                        This Month
                    </button>
                </div>
            </div>
        </div>
        <div class="p-6">
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 sm:gap-6">
                
                <!-- To Do -->
                <div class="bg-slate-50 dark:bg-slate-700/50 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="font-semibold text-slate-800 dark:text-white">To Do</h4>
                        <span class="bg-slate-200 dark:bg-slate-600 text-slate-700 dark:text-slate-300 text-xs font-semibold px-2.5 py-1 rounded-full">12</span>
                    </div>
                    <div class="space-y-3">
                        <div class="bg-white dark:bg-slate-800 p-3 rounded-lg border border-slate-200 dark:border-slate-600 hover:shadow-md transition-shadow cursor-pointer">
                            <p class="text-sm font-medium text-slate-800 dark:text-white mb-1">Update user interface</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Due: Apr 10</p>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-3 rounded-lg border border-slate-200 dark:border-slate-600 hover:shadow-md transition-shadow cursor-pointer">
                            <p class="text-sm font-medium text-slate-800 dark:text-white mb-1">Write documentation</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Due: Apr 12</p>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-3 rounded-lg border border-slate-200 dark:border-slate-600 hover:shadow-md transition-shadow cursor-pointer">
                            <p class="text-sm font-medium text-slate-800 dark:text-white mb-1">Fix reported bugs</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Due: Apr 15</p>
                        </div>
                    </div>
                </div>
                
                <!-- In Progress -->
                <div class="bg-blue-50 dark:bg-blue-900/20 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="font-semibold text-slate-800 dark:text-white">In Progress</h4>
                        <span class="bg-blue-100 dark:bg-blue-900 text-blue-600 dark:text-blue-300 text-xs font-semibold px-2.5 py-1 rounded-full">8</span>
                    </div>
                    <div class="space-y-3">
                        <div class="bg-white dark:bg-slate-800 p-3 rounded-lg border border-blue-200 dark:border-blue-800 hover:shadow-md transition-shadow cursor-pointer">
                            <p class="text-sm font-medium text-slate-800 dark:text-white mb-1">Implement API endpoints</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Due: Apr 9</p>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-3 rounded-lg border border-blue-200 dark:border-blue-800 hover:shadow-md transition-shadow cursor-pointer">
                            <p class="text-sm font-medium text-slate-800 dark:text-white mb-1">Design mockups</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Due: Apr 11</p>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-3 rounded-lg border border-blue-200 dark:border-blue-800 hover:shadow-md transition-shadow cursor-pointer">
                            <p class="text-sm font-medium text-slate-800 dark:text-white mb-1">Database optimization</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Due: Apr 14</p>
                        </div>
                    </div>
                </div>
                
                <!-- Completed -->
                <div class="bg-emerald-50 dark:bg-emerald-900/20 rounded-lg p-4">
                    <div class="flex items-center justify-between mb-4">
                        <h4 class="font-semibold text-slate-800 dark:text-white">Completed</h4>
                        <span class="bg-emerald-100 dark:bg-emerald-900 text-emerald-600 dark:text-emerald-300 text-xs font-semibold px-2.5 py-1 rounded-full">22</span>
                    </div>
                    <div class="space-y-3">
                        <div class="bg-white dark:bg-slate-800 p-3 rounded-lg border border-emerald-200 dark:border-emerald-800 hover:shadow-md transition-shadow cursor-pointer">
                            <p class="text-sm font-medium text-slate-800 dark:text-white mb-1 line-through">Setup CI/CD pipeline</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Completed: Apr 7</p>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-3 rounded-lg border border-emerald-200 dark:border-emerald-800 hover:shadow-md transition-shadow cursor-pointer">
                            <p class="text-sm font-medium text-slate-800 dark:text-white mb-1 line-through">Update dependencies</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Completed: Apr 6</p>
                        </div>
                        <div class="bg-white dark:bg-slate-800 p-3 rounded-lg border border-emerald-200 dark:border-emerald-800 hover:shadow-md transition-shadow cursor-pointer">
                            <p class="text-sm font-medium text-slate-800 dark:text-white mb-1 line-through">Security audit</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400">Completed: Apr 5</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    
</div>
@endsection
