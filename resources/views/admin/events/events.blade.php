@extends('layouts.master')

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
        <form id="edit" action="" methode="post">
        @csrf
        @method('post')
          <div class="form-group">
            <label for="date" class="col-form-label">Date To :</label>
            <input type="date" class="form-control" value="{{ old('date') }}" id="date" name="date">
          </div>
          <div class="form-group">
            <label for="desc" class="col-form-label">Description:</label>
            <textarea class="form-control" id="desc" value="{{ old('desc') }}" name="desc"></textarea>
          </div>
          <div class="form-group">
            <label for="imge" class="col-form-label">Image:</label>
            <input type="file" class="form-control" id="" value="{{ old('imge') }}" name="imge" placeholder="Enter news Images" style="border:2px;">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-info" form="edit">Send</button>
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
                      <th>Date</th>
                      <th>Desctription</th>
                      <th>Action</th>
                      
                    </thead>
                    <tbody>
                        @foreach( $events as $d )
                        
                            <tr>
                                <td>{{ $d->title }}</td>
                                <td>{{ $d->date}}</td>
                                <td>{{ $d->content}}</td>
                                <td>
                                    <div class="btn btn-success" value="{{$d->id}}" data-toggle="modal" data-target="#editModal_{{$d->id}}">edit</div>
                                    <div class="btn btn-danger" data-toggle="modal" data-target="#deleteModal_{{ $d->id }}">delete</div>
                                </td>
                              @include('admin.events.action')

                            </tr>
                            
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
@endsection

@section('scripts')
    
@endsection