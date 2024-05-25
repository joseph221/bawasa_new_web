<div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <div class="row px-3">
                        <div class="col-md-12 ">
                            <h4 class="card-title"> Roles</h4>

                            {{-- table tabs --}}
                            <div class=" d-flex justify-content-end align-content-center mb-2 mr-4">
                                {{-- pagination options --}}
                                <div class="d-flex">
                                    <div class="d-flex align-items-center ml-4">
                                        <label for="Pagination" class="text-nowrap mr-2">Per Page</label>
                                        <select wire:model.live="paginate" class="form-control">
                                            <option value="5">5</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- end of pagination --}}

                                {{-- count selected records with delete and export actions --}}
                                @if ($checked)
                                    <div class="px-4">
                                        <div class="dropdown">
                                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button"
                                                id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false">
                                                checked record (s) ({{ count($checked) }})
                                            </a>

                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                <a class="btn btn-success dropdown-item" href="#"
                                                    onclick="confirm('Are you sure you want to export these records?') ||
                                        event.stopImmediatePropagation()"
                                                    wire:click="exportselected()">Export to Excel</a>

                                                <a class="btn btn-danger dropdown-item" href="#"
                                                    onclick="confirm('Are you sure you want to delete these records?') ||
                                        event.stopImmediatePropagation()"
                                                    wire:click="deleterecodes()">delete</a>

                                            </div>
                                        </div>
                                    </div>
                                @endif
                                {{-- end count selected records with delete and export actions --}}

                                {{-- search form by all atributes --}}
                                <div class="p-2">
                                    <form class="float-right">
                                        <div class="input-group no-border">
                                            <input type="text" wire:model.live="search" value=""
                                                class="form-control" placeholder="Search...">
                                            <div class="input-group-append">
                                                <div class="input-group-text">
                                                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                {{-- end search form by all atributes --}}

                                <div class="">
                                    <a href="{{ url('roles') }}" class="btn btn-outline-primary mx-1">Roles</a>
                                    <a href="{{ url('permissions') }}" class="btn btn-outline-info mx-1">Permissions</a>
                                    <a href="{{ url('users') }}" class="btn btn-outline-warning mx-1">Users</a>
                                    @can('create role')
                                        <a href="{{ url('roles/create') }}" class="btn btn-outline-primary float-end"><i
                                                class="now-ui-icons ui-1_simple-add"></i></a>
                                    @endcan

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                {{-- end of table tabs --}}

                {{-- select all message and button --}}
                @if ($selectPage)
                    <div class="col-md-10 ml-4">
                        @if ($selectAll)
                            <div>
                                You have selected <strong>{{ $roles->total() }}</strong> All items.
                            </div>
                        @else
                            <div>
                                You have selected <strong>{{ count($checked) }}</strong> items,Do you want to select All
                                <strong>{{ $roles->total() }}</strong>?
                                <a href="#" class="ml-2" wire:click="selectAl()">selectAll</a>
                            </div>
                        @endif

                    </div>
                @endif


                {{-- roles table --}}
                <div class="card-body ">
                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    <div class="table-responsive px-3 text-nowrap">
                        <table class="table">
                            <thead class=" text-primary">
                                <th><input type="checkbox" name="" id="" wire:model.live="selectPage">
                                </th>
                                <th>Id</th>
                                <th>Name</th>
                                <th width="40%">Action</th>

                            </thead>
                            <tbody>
                                @foreach ($roles as $d)
                                    <tr class=" @if ($this->ischecked($d->id)) table-primary @endif">
                                        <td><input type="checkbox" name="" id=""
                                                value="{{ $d->id }}" wire:model.live="checked"></td>
                                        <td>{{ $d->id }}</td>
                                        <td>{{ $d->name }}</td>
                                        <td>
                                            @can('give permission to role')
                                                <a href="{{ url('give-permissionsToRoles/' . $d->id) }}"
                                                    class="btn btn-outline-warning" style="color: black">
                                                    Add / Edit Role Permission
                                                </a>
                                            @endcan

                                            @can('update role')
                                                <a href="{{ url('rolesedit/' . $d->id) }}"
                                                    class="btn btn-outline-success">
                                                    <i class="fa fa-pencil" aria-hidden="true"></i>
                                                </a>
                                            @endcan

                                            @can('delete role')
                                                <a href="{{ url('roles/' . $d->id . '/delete') }}"
                                                    class="btn btn-outline-danger mx-2">
                                                    <i class="fa fa-trash" aria-hidden="true"></i>
                                                </a>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $roles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Do your work, then step back. --}}
</div>
