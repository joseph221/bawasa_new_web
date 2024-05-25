@extends('layouts.master')

@section('title')
    Bawasa | edit role
@endsection

@section('content')
    <div class="col-md-12 ">
        <div class="card">
            <div class="card-header">
                <div class="row px-3">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-11"><h4 class="card-title">Edit Role</h4></div>
                            <div class="col-1 ">
                                <a href="{{ url('roles') }}" class="btn btn-secondary "><i class="fa fa-arrow-left"
                                aria-hidden="true"></i></a>
                            </div>
                    </div>
                </div>
            </div>

            <div class="card-body ">
                @if ($errors->any())
                    <ul class="alert alert-warning">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                <form action="{{ url('roles/' . $role->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="">Role Name</label>
                        <input type="text" name="name" value="{{ $role->name }}" class="form-control" />
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection