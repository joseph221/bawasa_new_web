@extends('layouts.website_master')
<!-- header section -->

@section('content')
    <div class="content-layout" style="min-height: 269.546px">
        <div class="container clearfix">
            <!-- CONTENT BLOCK HERE -->
            <section class="main-content mb-2">
                <nav aria-label="breadcrumb" class="breadcrumb-container">
                    <div class="container-fluid">
                        <ol class="breadcrumb py-1 mb-0">
                            <li class="breadcrumb-item">
                                <a href=""><i class="fa fa-home"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Request Services
                            </li>
                        </ol>
                    </div>
                </nav>
                <div class="content-border">
                    @include("layouts.sidecontent")

                    <div class="sub-main-content jsSubMainHeight" style="height: 586.312px;">
                        <livewire:request-service-livewire />
                    </div>
                </div>
                <!--/sub-main-content -->
            </section>
        </div>
    </div>
    <!-- The Modal -->
    <div class="modal" id="fileModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Upload Files</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="fileInput">Select File:</label>
                            <input type="file" class="form-control-file" id="fileInput" multiple>
                        </div>
                        <button type="button" class="btn btn-success" onclick="uploadFiles()">Upload</button>
                    </form>
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <!-- add modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">New Event</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="edit" action="/add_event" methode="post">
                        @csrf
                        @method('post')
                        <div class="form-group">
                            <label for="date" class="col-form-label">Date To :</label>
                            <input type="date" class="form-control" value="{{ old('date') }}" id="date" name="date">
                            <span class="text-danger">@error('date') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="desc" class="col-form-label">Description:</label>
                            <textarea class="form-control" id="desc" value="{{ old('desc') }}" name="desc"></textarea>
                            <span class="text-danger">@error('desc') {{ $message }}@enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="imge" class="col-form-label">Image:</label>
                            <input type="file" class="form-control" id="" value="{{ old('imge') }}" name="imge"
                                placeholder="Enter news Images" style="border:2px;">
                            <span class="text-danger">@error('imge') {{ $message }}@enderror</span>
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
@endsection

