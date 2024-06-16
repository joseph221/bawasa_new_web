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
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title')}}" @required(true)>
            <span class="text-danger">@error('title') {{ $message }}@enderror</span>
          </div>
          <div class="form-group">
            <label for="date" class="col-form-label">Date posted:</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ old('date')}}" @required(true)>
            <span class="text-danger">@error('date') {{ $message }}@enderror</span>
          </div>
          <div class="form-group">
            <label for="content" class="col-form-label">Content:</label>
            <textarea class="form-control" id="content" name="content" @required(true)></textarea>
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

<livewire:admin.anouncementlive />
@endsection

@section('scripts')

@endsection
