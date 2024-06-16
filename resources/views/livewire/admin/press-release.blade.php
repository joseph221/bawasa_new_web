@extends('layouts.master')
{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> --}}

@section('title')
    Bawasa | Press Release
@endsection

@section('content')
    <!-- add modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Press Release</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add" action="/upload" method="post" enctype="multipart/form-data" autocomplete="off">

                        @if (Session::get('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        @if (Session::get('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif

                        @csrf
                        <div class="form-group">
                            <label for="">File</label>
                            <input type="file" class="form-control" id="" value="{{ old('file_name') }}"
                                name="file_name" placeholder="Enter file in pdf">
                            @error('file_name')
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" class="form-control" value="{{ old('description') }}" id="" cols="30"
                                rows="4"></textarea>
                            @error('description')
                                <span class="invalid-feedback text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-info">Send</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 ">
            <div class="card">
                <div class="card-header">
                    <div class="row px-3">
                        <div class="col-md-12 ">
                            <h4 class="card-title"> Press Release</h4>

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
                                {{-- add new anouncement button --}}
                                <div class="">
                                    <div class="float-right">
                                        <button type="button" class="btn btn-round btn-info f" data-toggle="modal"
                                            data-target="#addModal" data-whatever="@getbootstrap">
                                            <i class="now-ui-icons ui-1_simple-add"></i></button>
                                    </div>
                                </div>
                                {{-- end add new anouncement button --}}
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
                                You have selected <strong>{{ $press->total() }}</strong> All items.
                            </div>
                        @else
                            <div>
                                You have selected <strong>{{ count($checked) }}</strong> items,Do you want to select All
                                <strong>{{ $press->total() }}</strong>?
                                <a href="#" class="ml-2" wire:click="selectAl()">selectAll</a>
                            </div>
                        @endif

                    </div>
                @endif


                {{-- press table --}}
                <div class="card-body ">
                    <div class="table-responsive px-3">
                        <table class="table">
                            <thead class=" text-primary">
                                <th><input type="checkbox" name="" id="" wire:model.live="selectPage">
                                </th>
                                <th>File Name</th>
                                <th>Desctription</th>
                                <th>Action</th>

                            </thead>
                            <tbody>
                                @foreach ($press as $d)
                                    <tr>
                                        <td>
                                            <input type="checkbox" name="" id=""
                                                value="{{ $d->id }}" wire:model.live="checked">
                                        </td>
                                        <td>
                                            <a href="/uploads/pressrelease/{{ $d->file_name }}">
                                                <p>{{ $d->file_name }}</p>
                                            </a>
                                        </td>
                                        <td>
                                            {{ $d->description }}
                                        </td>

                                        <td>
                                            <div class="btn btn-outline-success" value="{{ $d->id }}"
                                                data-toggle="modal" data-target="#editModal_{{ $d->id }}"><i
                                                    class="fa fa-pencil" aria-hidden="true"></i></div>

                                            @if (!$checked)
                                                <a class="btn btn-outline-danger" href="#"
                                                    onclick="confirm('Are you sure you want to delete these record?') ||
                                                  event.stopImmediatePropagation()"
                                                    wire:click="deletesingle({{ $d->id }})"><i class="fa fa-trash"
                                                        aria-hidden="true"></i></a>
                                            @endif

                                        </td>
                                        @include('livewire.admin.press_action')

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $press->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h4 class="card-title"> Press Release</h4>
                        </div>
                        <div class="col-md-6">
                            <button type="button" class="btn btn-info float-right" data-toggle="modal"
                                data-target="#addModal" data-whatever="@getbootstrap">
                                <i class="now-ui-icons ui-1_simple-add"></i> Add </button>
                        </div>
                    </div>
                    {{-- <a href="/showPdf">y</a> --}}
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">

                                <th>File Name</th>
                                <th>Desctription</th>
                                <th>Action</th>

                            </thead>
                            <tbody>
                                @foreach ($press as $d)
                                    <tr>
                                        <td><a href="/uploads/pressrelease/{{ $d->file_name }}">
                                                <p>{{ $d->file_name }}</p>
                                            </a></td>
                                        <td>{{ $d->description }}</td>
                                        <td>
                                            <div class="btn btn-success" value="{{ $d->id }}" data-toggle="modal"
                                                data-target="#editModal_{{ $d->id }}">edit</div>
                                            <a href="event_delete/{{ $d->id }}" class="btn btn-danger"
                                                data-confirm-delete="true">Delete</a>
                                        </td>
                                        @include('livewire.admin.press_action')

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- {{ $press->links() }} --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@section('scripts')
@endsection
