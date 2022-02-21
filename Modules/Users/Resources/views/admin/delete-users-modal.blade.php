<!-- Delete Users Modal -->
<form wire:submit.prevent="deleteSelected">
    <x-jet-confirmation-modal wire:model.defer="showDeleteModal">
        <x-slot name="title">Delete User</x-slot>

        <x-slot name="content">
            <div class="py-8 text-gray-700">Are you sure you? This action is irreversible.</div>
        </x-slot>

        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('showDeleteModal', false)" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>

            <x-jet-button class="ml-3" wire:loading.attr="disabled">
                {{ __('Save') }}
            </x-jet-button>
        </x-slot>
    </x-jet-confirmation-modal>
</form>
