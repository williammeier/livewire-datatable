<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $perPage = 10;
    public $search;

    public $sortDirection = "ASC";
    public $sortColumn = "name";

    protected $paginationTheme = 'bootstrap';

    public function doSort($column)
    {
        if ($this->sortColumn == $column) {
            $this->sortDirection = $this->sortDirection == "ASC" ? "DESC" : "ASC";
            return;
        }
        $this->sortColumn = $column;
        $this->sortDirection = "ASC";
    }

    public function updatedPerPage()
    {
        $this->resetPage();
    }
    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        return view('livewire.user-list', [
            'users' => User::search($this->search)
                ->orderBy($this->sortColumn, $this->sortDirection)
                ->paginate($this->perPage)
        ]);
    }
}
