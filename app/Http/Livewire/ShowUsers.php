<?php

namespace App\Http\Livewire;

use App\Tenant;
use App\User;
use Livewire\Component;
use Livewire\WithPagination;

class ShowUsers extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $sortField = 'name';
    public $sortAsc = true;
    public $search = '';
    public $super;
    public $tenants;
    public $selectedTenant;

    public function sortBy($field)
    {
        if ($this->sortField === $field) {
            $this->sortAsc = ! $this->sortAsc;
        } else {
            $this->sortAsc = true;
        }

        $this->sortField = $field;
    }

    public function impersonate($userId)
    {
        if(! is_null(auth()->user()->tenant_id)) {
            return;
        }

        $originalId = auth()->user()->id;
        session()->put('impersonate', $originalId);
        auth()->loginUsingId($userId);

        return redirect('/team');
    }

    public function mount()
    {
        if(session()->has('tenant_id')) {
            $this->super = false;
        } else {
            $this->super = true;
            $this->tenants = Tenant::all()->pluck('name', 'id')->toArray();
        }
    }

    public function render()
    {
        $query = User::search($this->search)
            ->orderBy($this->sortField, $this->sortAsc ? 'asc' : 'desc');
        if($this->super && $this->selectedTenant) {
            $query->where('tenant_id', $this->selectedTenant);
        }

        return view('livewire.show-users', [
            'users' => $query->with('documents')->paginate($this->perPage),
        ]);
    }
}
