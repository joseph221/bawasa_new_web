
<!-- edit modal -->
<div class="modal right fade" id="editModal_{{$d->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="edit" action="/update_event/{{$d->id}}"  method="post" enctype="multipart/form-data" autocomplete="off">

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
                @method('put')
                <div class="form-group">
                <label for="">Date</label>
                <input type="date" class="form-control" value="{{ $d->date }}" id="" name="date">
                @error('name')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                <label for="">Images</label>
                <input type="file" class="form-control" id="" value="{{ old('imge') }}" name="imge" placeholder="Enter news Images">
                <img src="{{ asset('uploads/'.$d->image) }}" alt="" srcset="" style="heigt:200px; width:200px;">
                @error('image')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                <label for="">Description</label>
                <textarea name="desc" class="form-control" value="{{ old('desc') }}" id="" cols="30" rows="4">{{ $d->desc}}</textarea>
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

<!-- delete modal -->
<div class="modal right fade" id="deleteModal_{{ $d->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel" style="color: whitesmoke">Delete Event</h4>
        </div>
        <div class="modal-body">
            <form action="" method="post">
                @csrf
                @method('delete')
                <p style="font-size: 20px">Are you sure you want to delete this event</p>
                <div class="modal-footer">
                <button class="btn btn-warning btn-sm" data-dismiss="modal">cancel</button>
                <button type="submit" class="btn btn-sm btn-danger">delete</button>
                </div>
            </form>
        </div>
    
    </div>
    </div> 
</div>