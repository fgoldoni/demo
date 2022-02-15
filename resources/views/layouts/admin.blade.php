@extends('layouts.admin.app')

@section('navigation')
@endsection

@section('body')
    <div x-data="{ sidebarOpen: false }" @keydown.window.escape="sidebarOpen = false">
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        @include('layouts.admin.mobile-sidebar')

        <!-- Static sidebar for desktop -->
        @include('layouts.admin.desktop-sidebar')

        <div class="md:pl-64 flex flex-col flex-1">
            <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white shadow">
                <button  @click.stop="sidebarOpen = true" type="button" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500 md:hidden">
                    <span class="sr-only">Open sidebar</span>
                    <!-- Heroicon name: outline/menu-alt-2 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
                    </svg>
                </button>
                @include('layouts.admin.navigation')
            </div>

            <main class="flex-1">
                @yield('content')
            </main>
        </div>
    </div>





@endsection
