<div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <x-toolbar>
                    <x-slot name="search">
                        <x-toolbar.search wire:model="filters.search" placeholder="Search Items ..."></x-toolbar.search>
                    </x-slot>

                    <x-slot name="advancedSearch">
                        <x-tertiary-button wire:click="toggleShowFilters" class="hidden lg:flex">@if ($showFilters) Hide @endif Advanced Search ...</x-tertiary-button>
                        <a href="javascript:;" wire:click="toggleShowFilters" class="text-gray-400 hover:text-gray-500 flex lg:hidden">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                        </a>
                    </x-slot>

                    <x-slot name="actions">
                        <x-toolbar.actions>
                            <x-toolbar.actions.item wire:click="create">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                                </svg>
                            </x-toolbar.actions.item>

                            <x-toolbar.actions.item wire:click="$toggle('showDeleteModal')">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                </svg>
                            </x-toolbar.actions.item>

                            <x-toolbar.actions.item wire:click="exportSelected">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M6 2a2 2 0 00-2 2v12a2 2 0 002 2h8a2 2 0 002-2V7.414A2 2 0 0015.414 6L12 2.586A2 2 0 0010.586 2H6zm5 6a1 1 0 10-2 0v3.586l-1.293-1.293a1 1 0 10-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 11.586V8z" clip-rule="evenodd" />
                                </svg>
                            </x-toolbar.actions.item>

                            <x-toolbar.actions.item wire:click="resetFilters">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
                                </svg>
                            </x-toolbar.actions.item>
                        </x-toolbar.actions>
                    </x-slot>

                    <x-slot name="perPage">
                        <x-input.select wire:model="perPage" id="perPage" class="bg-white">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                        </x-input.select>
                    </x-slot>
                </x-toolbar>
                <div>
                    @if ($showFilters)
                        <div>
                            <div class="lg:grid lg:grid-cols-3 lg:gap-6  bg-gray-50">
                                <div class="lg:col-span-1">
                                    <div class="px-4">
                                        <h3 class="text-lg font-medium leading-6 text-gray-900">Personal Information</h3>
                                        <p class="mt-1 text-sm text-gray-600">Use a permanent address where you can receive mail.</p>
                                    </div>
                                </div>
                                <div class="mt-5 lg:mt-0 lg:col-span-2">
                                    <form action="#" method="POST">
                                        <div class="shadow overflow-hidden sm:rounded-md">
                                            <div class="px-4 py-5 bg-white sm:p-6">
                                                <div class="grid grid-cols-6 gap-6">
                                                    <div class="col-span-6 lg:col-span-3">
                                                        <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                                                        <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    </div>

                                                    <div class="col-span-6 lg:col-span-3">
                                                        <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                                                        <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    </div>

                                                    <div class="col-span-6">
                                                        <label for="street-address" class="block text-sm font-medium text-gray-700">Street address</label>
                                                        <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
                <x-table>
                    <x-slot name="head">
                        <x-table.heading class="pr-0 w-8">
                            <x-input.checkbox wire:model="selectPage"/>
                        </x-table.heading>
                        <x-table.heading sortable multiColumn wire:click="sortBy('id')" :direction="$sorts['id'] ?? null">
                            Id
                        </x-table.heading>
                        <x-table.heading sortable multiColumn wire:click="sortBy('name')"
                                         :direction="$sorts['name'] ?? null">Name
                        </x-table.heading>
                        <x-table.heading sortable multiColumn wire:click="sortBy('email_verified_at')"
                                         :direction="$sorts['email_verified_at'] ?? null">Status
                        </x-table.heading>
                        <x-table.heading sortable multiColumn wire:click="sortBy('status')"
                                         :direction="$sorts['status'] ?? null">Role
                        </x-table.heading>
                        <x-table.heading sortable multiColumn wire:click="sortBy('created_at')"
                                         :direction="$sorts['created_at'] ?? null">created at
                        </x-table.heading>
                        <x-table.heading/>
                    </x-slot>
                    <x-slot name="body">
                        @if ($selectPage)
                            <x-table.row class="bg-gray-200" wire:key="row-message">
                                <x-table.cell colspan="6">
                                    @unless ($selectAll)
                                        <div>
                                            <span>You have selected <strong>{{ $rows->count() }}</strong> items, do you want to select all <strong>{{ $rows->total() }}</strong>?</span>
                                            <x-button.link wire:click="selectAll" class="ml-1 text-blue-600">Select All</x-button.link>
                                        </div>
                                    @else
                                        <span>You are currently selecting all <strong>{{ $rows->total() }}</strong> items.</span>
                                    @endif
                                </x-table.cell>
                            </x-table.row>
                        @endif

                        @forelse ($rows as $row)
                            <x-table.row>
                                <x-table.cell class="pr-0">
                                    <x-input.checkbox wire:model="selected" value="{{ $row->id }}" />
                                </x-table.cell>
                                <x-table.cell>
                                    <x-button.link wire:click="edit({{ $row->id }})">{{ $row->id }}</x-button.link>
                                </x-table.cell>
                                <x-table.cell>
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="{{ $row->profile_photo_url }}" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $row->name }}</div>
                                            <div class="text-sm text-gray-500">{{ $row->email }}</div>
                                        </div>
                                    </div>
                                </x-table.cell>
                                <x-table.cell>
                                    @livewire('button.toggle', ['model' => $row, 'field' => 'email_verified_at'], key($row->id))
                                </x-table.cell>
                                <x-table.cell class="text-sm text-gray-500">
                                    @foreach ($row->roles as $role)
                                        <a href="#" class="relative inline-flex items-center rounded-full border border-gray-300 px-3 py-0.5 m-1">
                                            <div class="absolute flex-shrink-0 flex items-center justify-center">
                                                <span class="h-1.5 w-1.5 rounded-full bg-indigo-500" aria-hidden="true"></span>
                                            </div>
                                            <div class="ml-3.5 text-sm font-medium text-gray-500">{{ $role->name }}</div>
                                        </a>
                                    @endforeach
                                </x-table.cell>
                                <x-table.cell>
                                    <span class="text-gray-500 text-md truncate">{{ $row->created_at->format('d M Y H:m') }}
                                    </span>
                                </x-table.cell>
                                <x-table.cell class="text-right text-sm font-medium">
                                    <x-jet-dropdown align="right" width="w-30">
                                        <x-slot name="trigger">
                                            <button type="button" class="bg-gray-100 rounded-full flex items-center text-gray-400 hover:text-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-indigo-500" id="menu-button" aria-expanded="true" aria-haspopup="true">
                                                <span class="sr-only">Open options</span>
                                                <!-- Heroicon name: solid/dots-vertical -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z" />
                                                </svg>
                                            </button>
                                        </x-slot>

                                        <x-slot name="content">
                                            <x-jet-dropdown-link wire:click="edit({{ $row->id }})" class="group flex items-center cursor-pointer">
                                                <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                                    <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                                </svg>
                                                Edit
                                            </x-jet-dropdown-link>

                                            <x-jet-dropdown-link href="{{ route('impersonate', $row->id) }}" class="group flex items-center">
                                                <!-- Heroicon name: solid/user-add -->
                                                <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z" />
                                                </svg>
                                                {{ __('Login As') }}
                                            </x-jet-dropdown-link>
                                        </x-slot>
                                    </x-jet-dropdown>
                                </x-table.cell>
                            </x-table.row>
                        @empty
                            <x-table.row>
                                <x-table.cell colspan="6">
                                    <div class="flex justify-center items-center space-x-2">
                                        <x-icon.inbox class="h-8 w-8 text-gray-400" />
                                        <span class="font-medium py-8 text-gray-400 text-xl">No items found...</span>
                                    </div>
                                </x-table.cell>
                            </x-table.row>
                        @endforelse
                    </x-slot>
                </x-table>
                <div>
                    {{ $rows->links('livewire::pagination-links') }}
                </div>
            </div>
        </div>
    </div>

    @include('users::admin.delete-users-modal')
    @include('users::admin.save-user-modal')
</div>
