<!-- Save User Modal -->
<form wire:submit.prevent="save">
    <x-jet-dialog-modal wire:model.defer="showEditModal">
        <x-slot name="title">{{ __('Edit User') }}</x-slot>

        <x-slot name="content">
            <x-input.group label="Photo" for="avatar" :error="$errors->first('avatar')">
                <x-input.file-upload wire:model="avatar" id="avatar">
                    <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                        @if ($avatar)
                            <img src="{{ $avatar->temporaryUrl() }}" alt="Avatar">
                        @else
                            <img src="{{ $editing->profile_photo_url }}" alt="Avatar">
                        @endif
                    </span>
                </x-input.file-upload>
            </x-input.group>

            <x-input.group for="name" label="{{ __('Name') }}" :error="$errors->first('editing.name')" borderless>
                <x-input.text wire:model="editing.name" id="name" placeholder="{{ __('Name') }}" />
            </x-input.group>

            <x-input.group for="email" label="{{ __('Email') }}" :error="$errors->first('editing.email')" borderless>
                <x-input.text wire:model="editing.email" id="email" placeholder="{{ __('Email') }}" />
            </x-input.group>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('showEditModal', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-3" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-jet-dialog-modal>
</form>
