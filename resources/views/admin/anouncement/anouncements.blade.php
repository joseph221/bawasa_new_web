@extends('layouts.master')

@section('title')
    Bawasa | Anouncements
@endsection

@section('content')
<!-- add modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New Aanouncement</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="anouncement" action="./create_anouncement" methode="post">
        <!-- @csrf
        @method('post') -->
          <div class="form-group">
            <label for="title" class="col-form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title')}}">
            <span class="text-danger">@error('title') {{ $message }}@enderror</span>
          </div>
          <div class="form-group">
            <label for="date" class="col-form-label">Date posted:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date')}}">
            <span class="text-danger">@error('date') {{ $message }}@enderror</span>
          </div>
          <div class="form-group">
            <label for="content" class="col-form-label">Content:</label>
            <textarea class="form-control" id="content" name="content"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info" form="anouncement">Send</button>
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
                        <h4 class="card-title"> Anouncements</h4>

                    </div>
                    <div class="col-md-6">
                    <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">
                    <i class="now-ui-icons ui-1_simple-add"></i> Add </button>
                    </div>
                </div>
               
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                   
                      <th>Title</th>
                      <th>Date</th>
                      <th>Content</th>
                      <th>Action</th>
                      
                    </thead>
                    <tbody>
                        @foreach( $anouncement as $d )
                        
                            <tr>
                                <td>{{ $d->title }}</td>
                                <td>{{ $d->date}}</td>
                                <td>{{ $d->content}}</td>
                                <td>
                                    <div class="btn btn-success" value="{{$d->id}}" data-toggle="modal" data-target="#editModal_{{$d->id}}">edit</div>
                                    <a href="delete_anouncement/{{ $d->id }}" class="btn btn-danger" data-confirm-delete="true">Delete</a>
                                </td>
                              @include('admin.anouncement.action')
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{ $anouncement->links() }}
                </div>
              </div>
            </div>
          </div>
          
        </div>
@endsection

@section('scripts')
    
@endsection