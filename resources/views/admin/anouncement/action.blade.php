
<!-- edit modal -->
<div class="modal right fade" id="editModal_{{$d->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit {{$d->title}}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <form id="" action="update_anouncement/{{$d->id}}" method="post">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="title" class="col-form-label">Title:</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$d->title}}">
                </div>
                <div class="form-group">
                    <label for="date" class="col-form-label">Date posted:</label>
                    <input type="date" class="form-control" id="date" name="date" value="{{$d->date}}">
                </div>
                <div class="form-group">
                    <label for="content" class="col-form-label">Content:</label>
                    <textarea class="form-control" id="content" name="content">{{$d->content}}</textarea>
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
        <h4 class="modal-title" id="staticBackdropLabel" style="color: whitesmoke">Delete Anouncement</h4>
        </div>
        <div class="modal-body">
            <form action="delete_anouncement/{{ $d->id }}" method="post">
                @csrf
                @method('delete')
                <p style="font-size: 20px">Are you sure you want to delete {{ $d->title }} Anouncement</p>
                <div class="modal-footer">
                <button class="btn btn-warning btn-sm" data-dismiss="modal">cancel</button>
                <button type="submit" class="btn btn-sm btn-danger">delete</button>
                </div>
            </form>
        </div>
    
    </div>
    </div> 
</div>