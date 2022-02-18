<?php

namespace Modules\Users\Http\Livewire\Admin;

use App\Http\Livewire\Admin\Datatable\WithBulkActions;
use App\Http\Livewire\Admin\Datatable\WithCachedRows;
use App\Http\Livewire\Admin\Datatable\WithPerPagePagination;
use App\Http\Livewire\Admin\Datatable\WithSorting;
use App\Models\User;
use Illuminate\Support\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsersDatatableComponent extends Component
{
    use WithPerPagePagination;
    use WithSorting;
    use WithBulkActions;
    use WithCachedRows;
    use WithFileUploads;

    public bool $showDeleteModal = false;

    public bool $showEditModal = false;

    public bool $showFilters = false;

    public $avatar = null;

    public array $filters = [
        'search' => '',
        'status' => '',
        'amount-min' => null,
        'amount-max' => null,
        'date-min' => null,
        'date-max' => null,
    ];

    public User $editing;

    public function rules()
    {
        return [
            'editing.name' => 'required|min:3',
            'editing.email' => 'required|max:255|unique:users,email,' . $this->editing->id,
            'avatar' => 'nullable|image|mimes:jpg,jpeg,png|max:1000',
        ];
    }

    public function mount()
    {
        $this->editing = $this->makeBlankUser();
    }

    public function toggleShowFilters()
    {
        $this->useCachedRows();

        $this->showFilters = !$this->showFilters;
    }

    public function resetFilters()
    {
        $this->reset('filters');
    }

    public function create()
    {
        $this->useCachedRows();

        if ($this->editing->getKey()) {
            $this->editing = $this->makeBlankUser();
        }

        $this->showEditModal = true;
    }



    public function save()
    {
        $this->validate();

        $this->editing->save();

        if (isset($this->avatar)) {
            $this->editing->updateProfilePhoto($this->avatar);
        }

        $this->showEditModal = false;

        $this->notify('The user has been successfully updated');
    }

    public function getRowsQueryProperty()
    {
        $query = User::query()
            ->when($this->filters['date-min'], fn ($query, $date) => $query->where('created_at', '>=', Carbon::parse($date)))
            ->when($this->filters['date-max'], fn ($query, $date) => $query->where('created_at', '<=', Carbon::parse($date)));

        return $this->applySorting($query);
    }

    public function getRowsProperty()
    {
        return $this->cache(fn () => $this->applyPagination($this->rowsQuery));
    }

    public function edit(User $user)
    {
        $this->useCachedRows();

        if ($this->editing->isNot($user)) {
            $this->editing = $user->load('roles:id,name');
            $this->avatar = null;
        }

        $this->showEditModal = true;
    }

    public function render()
    {
        return view('users::livewire.admin.users-datatable-component', ['rows' => $this->rows])
            ->extends('layouts.admin', ['title' => 'Users List']);
    }

    private function makeBlankUser()
    {
        return User::make();
    }
}
