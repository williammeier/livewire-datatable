<div>
    <div class="row align-items-center mb-2">
        <div class="input-group mb-3">
            <div class="input-group-text bg-transparent text-secondary">
                <span class="fa fa-search"></span>
            </div>
            <input wire:model.live.debounce.300ms="search" type="text"
                class="form-control border-start-0" placeholder="Search by name, email...">
        </div>
    </div>

    <x-table>
        <x-slot name="head">
            <th wire:click="doSort('name')" scope="col" style="cursor: pointer">
                <x-datatable-item name="name" :sortColumn="$sortColumn" :sortDirection="$sortDirection" />
            </th>
            <th wire:click="doSort('email')" scope="col" style="cursor: pointer">
                <x-datatable-item name="email" :sortColumn="$sortColumn" :sortDirection="$sortDirection" />
            </th>
            <th wire:click="doSort('gender')" scope="col" style="cursor: pointer">
                <x-datatable-item name="gender" :sortColumn="$sortColumn" :sortDirection="$sortDirection" />
            </th>
            <th scope="col" width="7%">Actions</th>
        </x-slot>

        @forelse ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->gender }}</td>
                <td>
                    <a href="" class="btn btn-primary btn-sm d-inline-block">
                        <span class="fa fa-edit"></span>
                    </a>
                    <a href="" class="btn btn-danger btn-sm d-inline-block">
                        <span class="fa fa-trash"></span>
                    </a>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No users found</td>
            </tr>
        @endforelse
    </x-table>

    <div class="col-2 my-2">
        <label for="page" class="form-label mb-1"><small>Per Page</small></label>
        <select wire:model.live="perPage" id="page" class="form-select form-select-sm">
            <option value="10" class="disabled select">10</option>
            <option value="20" class="disabled select">20</option>
            <option value="50" class="disabled select">50</option>
        </select>
    </div>
    {{ $users->links() }}
</div>
