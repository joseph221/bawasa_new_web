
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
            <form id="edit" action="{{ url('managments/'.$d->id) }}"  method="post" enctype="multipart/form-data" autocomplete="off">

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
                    <label for="">full name</label>
                    <input type="text" class="form-control"  value="{{ $d->full_name }}" id=""
                        name="full_name" required>
                    @error('name')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Accademic or professional title</label>
                    <select name="Acdmc_proff_title" id="" class="form-control" value="{{ $d->Acdmc_proff_title }}" required>
                        <option value=""></option>
                        <option value="Dr."
                            @if ($d->Acdmc_proff_title == "Dr.")
                                @selected(true)
                            @endif>Dr
                        </option>
                        <option value="Proff."
                            @if ($d->Acdmc_proff_title == "Proff.")
                                @selected(true)
                            @endif>Proff
                        </option>
                        <option value="Hon."
                            @if ($d->Acdmc_proff_title == "Hon.")
                                @selected(true)
                            @endif>Hon
                        </option>
                        <option value="Eng."
                            @if ($d->Acdmc_proff_title == "Eng.")
                                @selected(true)
                            @endif>Eng
                        </option>
                        <option value="CPA(T)."
                            @if ($d->Acdmc_proff_title == "CPA(T).")
                                @selected(true)
                            @endif>CPA(T)
                        </option>
                        <option value="Mr."
                            @if ($d->Acdmc_proff_title == "Mr.")
                                @selected(true)
                            @endif>Mr
                        </option>
                        <option value="Mrs."
                            @if ($d->Acdmc_proff_title == "Mrs.")
                                @selected(true)
                            @endif>Mrs
                        </option>
                        <option value="Ms."
                            @if ($d->Acdmc_proff_title == "Ms.")
                                @selected(true)
                            @endif>Ms
                        </option>
                    </select>
                    @error('Acdmc_proff_title')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                <label for="">Images</label>
                <input type="file" class="form-control" id="" value="{{ old('img') }}" name="img" placeholder="Enter news Images" required>
                <img src="{{ asset('uploads/administration/'.$d->img) }}" alt="" srcset="" style="heigt:200px; width:200px;">
                @error('img')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="">Position</label>
                    <input type="text" name="position" class="form-control" value="{{ $d->position }}"
                        id="" required>
                    @error('position')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="">Category</label>
                    <select name="category" id="" class="form-control" value="{{ $d->category }}" required>
                        <option value=""></option>
                        <option value="MD"
                            @if ($d->category=="MD")
                                @selected(true)
                            @endif>Managing Director
                        </option>
                        <option value="HD"
                            @if ($d->category=="HD")
                                @selected(true)
                            @endif>Head Of Departments
                        </option>
                        <option value="HU"
                            @if ($d->category=="HU")
                                @selected(true)
                            @endif>Heads of units
                        </option>
                    </select>
                    @error('category')
                        <span class="invalid-feedback text-danger" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-info">Update</button>
                </div>

            </form>
        </div>

    </div>
    </div>
</div>
