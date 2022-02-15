<div class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0">
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="flex flex-col flex-grow border-r border-gray-200 pt-5 bg-white overflow-y-auto">
        <div class="flex items-center flex-shrink-0 px-4">
            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-600-mark-gray-800-text.svg" alt="Workflow">
        </div>
        <div class="mt-5 flex-grow flex flex-col">
            <nav class="flex-1 mt-6">
                <div class="space-y-1">
                    <x-sidebar-link href="{{ route('admin.dashboard') }}" :active="request()->routeIs('admin.dashboard')">
                        <x-icon.report :active="request()->routeIs('admin.dashboard')"/>
                        {{ __('Dashboard') }}
                    </x-sidebar-link>

                    <x-sidebar-link href="{{ route('admin.users') }}" :active="request()->routeIs('admin.users')">
                        <x-icon.users :active="request()->routeIs('admin.users')"/>
                        {{ __('Users') }}
                    </x-sidebar-link>

                    <x-sidebar-link href="{{ route('admin.companies') }}" :active="request()->routeIs('admin.companies')">
                        <x-icon.folder :active="request()->routeIs('admin.companies')"/>
                        {{ __('Companies') }}
                    </x-sidebar-link>

                    <x-sidebar-link href="{{ route('admin.jobs') }}" :active="request()->routeIs('admin.jobs')">
                        <x-icon.list :active="request()->routeIs('admin.jobs')"/>
                        {{ __('Jobs') }}
                    </x-sidebar-link>
                </div>

                <div class="mt-8">
                    <h3 class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider" id="desktop-teams-headline">Teams</h3>
                    <div class="mt-1 space-y-1" role="group" aria-labelledby="desktop-teams-headline">
                        <a class="group border-transparent text-gray-600 hover:text-gray-900 hover:bg-gray-50 group border-l-4 py-2 px-3 flex items-center text-sm font-medium transition" href="http://localhost:8004/admin/categories">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 19a2 2 0 01-2-2V7a2 2 0 012-2h4l2 2h4a2 2 0 012 2v1M5 19h14a2 2 0 002-2v-5a2 2 0 00-2-2H9a2 2 0 00-2 2v5a2 2 0 01-2 2z"></path>
                            </svg>
                            Categories
                        </a>


                        <a class="group border-transparent text-gray-600 hover:text-gray-900 hover:bg-gray-50 group border-l-4 py-2 px-3 flex items-center text-sm font-medium transition" href="http://localhost:8004/admin/admin/settings">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Countries
                        </a>



                        <a class="group border-transparent text-gray-600 hover:text-gray-900 hover:bg-gray-50 group border-l-4 py-2 px-3 flex items-center text-sm font-medium transition" href="http://localhost:8004/admin/admin/settings">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mr-3 flex-shrink-0 h-6 w-6 text-gray-400 group-hover:text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                            </svg>
                            States/Cities
                        </a>


                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
