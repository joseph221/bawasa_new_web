@extends('layouts.master')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@section('title')
    Bawasa | Events
@endsection

@section('content')
<!-- add modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Event</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form id="add" action="/add_event"  method="post" enctype="multipart/form-data" autocomplete="off">

        @if ( Session::get('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                @endif
                @if ( Session::get('error'))
                        <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                @endif

        @csrf
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" name="title" class="form-control" value="{{ old('title') }}" id="">
            @error('title')
                    <span class="invalid-feedback text-danger" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
        </div>
        <div class="form-group">
        <label for="">Date</label>
        <input type="date" class="form-control" value="{{ old('date') }}" id="" name="date">
        @error('name')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
        <label for="">Images</label>
        <input type="file" class="form-control" id="" value="{{ old('imge') }}" name="imge" placeholder="Enter news Images">
        @error('image')
                <span class="invalid-feedback text-danger" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
        <label for="">Description</label>
        <textarea name="desc" class="form-control" value="{{ old('desc') }}" id="" cols="30" rows="4"></textarea>
        @error('desc')
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
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h4 class="card-title"> Events</h4>
                    </div>
                    <div class="col-md-6">
                    <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#addModal" data-whatever="@getbootstrap">
                    <i class="now-ui-icons ui-1_simple-add"></i> Add </button>
                    </div>
                </div>

              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">

                      <th>Image</th>
                      <th>Title</th>
                      <th>Date</th>
                      <th>Desctription</th>
                      <th>Action</th>

                    </thead>
                    <tbody>
                        @foreach( $events as $d )

                            <tr>
                                <td><img src="{{ asset('uploads/'.$d->image) }}" alt="" srcset="" style="heigt:100px; width:100px;"></td>
                                <td>{{ $d->title}}</td>
                                <td>{{ $d->date}}</td>
                                <td>{{ $d->desc}}</td>
                                <td>
                                    <div class="btn btn-success" value="{{$d->id}}" data-toggle="modal" data-target="#editModal_{{$d->id}}">edit</div>
                                    <a href="event_delete/{{ $d->id }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                                </td>
                              @include('livewire.admin.press_action')

                            </tr>

                        @endforeach
                    </tbody>
                  </table>
                  {{ $events->links() }}
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
