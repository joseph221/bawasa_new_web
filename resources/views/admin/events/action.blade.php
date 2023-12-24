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
            <label for="imge" class="col-form-label">Image:</label>
            <input type="file" class="form-control" id="imge" name="imge">
          </div>
          <div class="form-group">
            <label for="date" class="col-form-label">Date To :</label>
            <input type="date" class="form-control" id="date" name="date">
          </div>
          <div class="form-group">
            <label for="desc" class="col-form-label">Description:</label>
            <textarea class="form-control" id="desc" name="desc"></textarea>
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
<!-- edit modal -->
<div class="modal right fade" id="editModal_{{$d->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit {{$d->image}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="" action="" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="image" class="col-form-label">Image:</label>
                    <input type="file" class="form-control" id="image" name="image" value="{{$d->image}}">
                </div>
                <div class="form-group">
                    <label for="date" class="col-form-label">Date To:</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{$d->date}}">
                </div>
                <div class="form-group">
                    <label for="desc" class="col-form-label">Description:</label>
                    <textarea class="form-control" id="desc" name="desc">{{$d->desc}}</textarea>
                </div>
                <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" data-dismiss="modal">cancel</button>
                <button type="submit" class="btn btn-sm btn-info">update</button>
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