@props([
    'search',
    'advancedSearch',
    'actions',
    'perPage',
])

<nav class="bg-white px-4 py-3 flex items-center justify-between">
    <div class="flex items-center space-x-4">
        <div class="relative rounded-md shadow-lg">
            {{ $search }}
            <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                <!-- Heroicon name: solid/question-mark-circle -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-cool-muted" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                </svg>
            </div>
        </div>
        <ul class="flex items-center font-semibold space-x-4 text-cool-base">
            <li>
                {{ $advancedSearch }}
            </li>
        </ul>
    </div>
    <div class="flex items-center space-x-4">
        {{ $actions }}
        <div>
            {{ $perPage }}
        </div>
    </div>
</nav>
