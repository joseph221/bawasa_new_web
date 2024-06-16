<div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <div class="row px-3">
                        <div class="col-md-12 ">
                            <h4 class="card-title"> Contact Us</h4>

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
                                You have selected <strong>{{ $contacts->total() }}</strong> All items.
                            </div>
                        @else
                            <div>
                                You have selected <strong>{{ count($checked) }}</strong> items,Do you want to select All <strong>{{ $contacts->total() }}</strong>?
                                <a href="#" class="ml-2" wire:click="selectAl()">selectAll</a>
                            </div>
                        @endif

                    </div>
                @endif


                {{-- notification table --}}
                <div class="card-body ">
                    <div class="table-responsive px-3 text-nowrap">
                        <table class="table">
                            <thead class=" text-primary">
                                <th><input type="checkbox" name="" id="" wire:model.live="selectPage">
                                </th>
                                <th scope="col">Names</th>
                                <th scope="col">Mobile Number</th>
                                <th scope="col">Email</th>
                                <th scope="col">Organization</th>
                                <th scope="col">Message</th>
                                <th scope="col">Subject</th>
                                <th scope="col">Action</th>

                            </thead>
                            <tbody>
                                @foreach ($contacts as $d)
                                    <tr class=" @if ($this->ischecked($d->id)) table-primary @endif">
                                        <td><input type="checkbox" name="" id=""
                                                value="{{ $d->id }}" wire:model.live="checked"></td>


                                        <td>{{ $d->names }}</td>
                                        <td>{{ $d->phone }}</td>
                                        <td>{{ $d->email }}</td>
                                        <td>{{ $d->organization }}</td>
                                        <td>{{ $d->message }}</td>
                                        <td>{{ $d->subject }}</td>

                                        <td>
                                            <a type="button" class="btn btn-outline-info" href="contacts_view/{{ $d->id }}"> <i class="fa fa-eye" aria-hidden="true"></i></a>
                                            @can('delete cust_request')
                                                @if (!$checked)
                                                    <a class="btn btn-outline-danger" href="#"
                                                    onclick="confirm('Are you sure you want to delete these record?') ||
                                                    event.stopImmediatePropagation()"
                                                    wire:click="deletesingle({{ $d->id }})"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a>
                                                @endif
                                            @endcan

                                        </td>


                                        {{-- @include('admin.contacts_sevice.action') --}}

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $contacts->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Because she competes with no one, no one can compete with her. --}}
</div>
