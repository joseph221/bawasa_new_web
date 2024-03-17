@extends('layouts.master')

@section('title')
    Bawasa | Contact us Notification
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card ">
          <div class="card-header ">
            <strong>Notifications</strong>
          </div>
          {{-- unread notification card --}}
          <div class="card-body ">
            <div class="my-3 p-3 bg-white rounded box-shadow">
                <h6 class="border-bottom border-gray pb-2 mb-0">Recent</h6>

                @forelse ( auth()->user()->unreadNotifications()->whereJsonContains('data', ['kindof' => 'contact'])->paginate(5) as $not)
                    <div class="media text-muted pt-3">
                        <div class="row media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                            <div class="col-10">
                                <strong class="d-block text-gray-dark">{{ $not->data['contact']['names'] }}</strong>
                                {{ $not->data['contact']['subject'] }} <br />
                                {{ $not->data['contact']['message'] }}
                            </div>
                            <div class="col-2">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-info float-right" data-toggle="modal" data-target="#viewModal_{{ $not->id }}" onclick="markNotificationAsread('{{$not->id}}')">
                                    <i class="fa fa-eye" aria-hidden="true"></i> </button>


                            </div>
                        </div>

                    </div>
                    @include('admin.notifications.viewmodal')
                    @empty
                    <a href="http://"> no unread notification</a>
                @endforelse
                <small class="d-block text-right mt-3">
                    {{auth()->user()->unreadNotifications()->paginate(5)->links()}}
                </small>
            </div>
          </div>
        </div>

        {{-- read notification card --}}
        <div class="card ">
            <div class="card-body ">
              <div class="my-3 p-3 bg-white rounded box-shadow">
                  <h6 class="border-bottom border-gray pb-2 mb-0">Older Notification</h6>

                  @forelse ( auth()->user()->readNotifications()->whereJsonContains('data', ['kindof' => 'contact'])->paginate(5) as $not)
                    <div class="media text-muted pt-3">
                        <div class="row media-body pb-3 mb-0 lh-125 border-bottom border-gray">
                            <div class="col-10">
                                <strong>{{ $not->data['contact']['names'] }}<br/></strong>
                                {{ $not->data['contact']['subject'] }}<br/>
                                {{ $not->data['contact']['message'] }}<br/>
                            </div>
                            <div class="col-2">
                                <!-- Button trigger modal -->
                                <a  href="delete_not/{{ $not->id }}" class="btn btn-outline-danger float-right" data-confirm-delete="true">
                                    <i class="fa fa-trash" aria-hidden="true"></i> </a>
                                <button type="button" class="btn btn-outline-info float-right" data-toggle="modal" data-target="#viewModal_{{ $not->id }}" data-whatever="@getbootstrap">
                                    <i class="fa fa-eye" aria-hidden="true"></i></button>


                            </div>
                        </div>
                        @include('admin.notifications.viewmodal')

                    </div>
                  @empty
                    <a href="http://"> no read notification</a>

                  @endforelse

                  <small class="d-block text-right mt-3">
                      {{auth()->user()->readNotifications()->paginate(5)->links()}}
                  </small>
              </div>
            </div>
          </div>
      </div>
</div>
@endsection

@section('scripts')

@endsection
